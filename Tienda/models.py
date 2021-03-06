from PIL import Image
from colorfield.fields import ColorField
from django.contrib.auth.models import User
from django.db import models
import hashlib
# Create your models here.
from django.utils.safestring import mark_safe
from Administracion.models import Iconos


class Tiendas(models.Model):
    usuario=models.ForeignKey(User,models.CASCADE,null=True,blank=True)
    nombre=models.CharField(max_length=200)
    logo=models.ImageField(upload_to="Tienda/logos")
    descripcion=models.TextField()
    telefono=models.CharField(max_length=60)
    pais=models.IntegerField(default=0)
    provincia = models.IntegerField(default=0)
    ciudad=models.IntegerField(default=0)
    direccion = models.CharField(max_length=300)
    correo=models.EmailField(max_length=200,null=True,blank=True)
    dir_map=models.TextField()
    hashes=models.CharField(max_length=64,null=True,blank=True)
    estado=models.BooleanField(default=True)

    def clean(self):
        self.hashes=hashlib.sha256(str.encode(str(str.zfill(str(self.pk),10)))).hexdigest()
        print(self.id,self.hashes)

    def __str__(self):
        return self.nombre

    class Meta:
        verbose_name_plural="Tiendas"
        verbose_name="Tienda"


class Categorias(models.Model):
    nombre=models.CharField(max_length=200)
    icono = models.ForeignKey(Iconos, on_delete=models.CASCADE, null=True, blank=True)

    def miniatura(self):
        return mark_safe('<img src="/media/%s" style="width: 40px" alt="">' % self.icono.icono)

    def __str__(self):
        return self.nombre

    class Meta:
        verbose_name="Categoría"
        verbose_name_plural="Categorías"

class TiendaCategoria(models.Model):
    tienda = models.ForeignKey(Tiendas, on_delete=models.CASCADE, null=True, blank=True)
    categoria= models.ForeignKey(Categorias,on_delete=models.CASCADE,null=True,blank=True)
    estado = models.BooleanField(default=True)

    def id_Categoria(self):
        return self.categoria.id

    class Meta:
        verbose_name_plural="Relaciones Tiendas y Categorias"
        verbose_name="Relacion Tienda y Categoria"

class Marcas(models.Model):
    usuario=models.ForeignKey(User,null=True,blank=True,on_delete=models.CASCADE)
    nombre = models.CharField(max_length=200)
    imagen =models.FileField(upload_to="Tienda/Marcas",null=True,blank=True)
    estado = models.BooleanField(default=True)

    def miniatura(self):
        return mark_safe("<img src='/media/%s' style='width: 100px'>"%self.imagen)

    def __str__(self):
        return self.nombre

    class Meta:
        verbose_name="Marca"
        verbose_name_plural="Marcas"

class Adds(models.Model):
    fecha_inicio=models.DateTimeField(null=True,blank=True)
    fecha_limite=models.DateTimeField(null=True,blank=True)
    tienda=models.ForeignKey(Tiendas,on_delete=models.CASCADE)
    usuario=models.ForeignKey(User,on_delete=models.CASCADE,null=True,blank=True)
    imagen=models.ImageField(upload_to="Tienda/Adds")
    descuento=models.DecimalField(decimal_places=2,max_digits=9,default=0)
    estado=models.BooleanField(default=False)
    vertical=models.BooleanField(default=True)
    horizontal=models.BooleanField(default=False)

    def miniatura(self):
        return mark_safe("<img src='/media/%s' style='width: 100px'>"%self.imagen)


    def __str__(self):
        return "%s | %s %s"%(self.fecha_inicio,self.fecha_limite,self.descuento)

    class Meta:
        verbose_name="Promoción"
        verbose_name_plural="Promociones"


import unicodedata
def strip_accents(s):
    return ''.join(c for c in unicodedata.normalize('NFD', s) if unicodedata.category(c) != 'Mn')


class Productos(models.Model):
    fecha = models.DateField(auto_now_add=True)
    tienda=models.ForeignKey(Tiendas,on_delete=models.CASCADE,null=True,blank=True)
    codigo_interno=models.CharField(max_length=20,null=True,blank=True,default="0000000")
    categoria=models.ForeignKey(Categorias,on_delete=models.CASCADE)
    marca=models.ForeignKey(Marcas,on_delete=models.CASCADE)
    nombre=models.CharField(max_length=100)
    descripcion=models.TextField(null=True,blank=True)
    precio=models.DecimalField(max_digits=9, decimal_places=2,default=0)
    detalles_generales=models.TextField(null=True,blank=True)
    detalles_tecnicos=models.TextField(null=True,blank=True)
    garantia_y_mas=models.TextField(null=True,blank=True)
    color=models.CharField(default="Negro",max_length=50)
    codigo_color=ColorField(default="#269300",max_length=30)
    adds=models.ForeignKey(Adds,on_delete=models.CASCADE,null=True,blank=True)
    puntuacion=models.DecimalField(max_digits=9,decimal_places=2,default=0)
    slug=models.CharField(max_length=200,null=True,blank=True)
    estado=models.BooleanField(default=True)
    nombre_comun=models.CharField(max_length=300,null=True,blank=True)


    def save(self, *args, **kwargs):
        self.nombre_comun =str(strip_accents(self.nombre)).replace(" ","_")
        super(Productos, self).save(*args, **kwargs)

    def miniatura(self):
        imagen=ProductoFotos.objects.get(producto_id=self.id,principal=True)
        if imagen:
            return mark_safe("<img src='/media/%s' style='width: 100px'>"%imagen.imagen)
        else:
            return "Sin Imágen."

    def clean(self):
        self.slug=hashlib.sha256(str.encode(str(str.zfill(str(self.pk),10)))).hexdigest()
        print(self.id,self.slug)

    def __str__(self):
        return self.nombre

    class Meta:
        verbose_name="Producto"
        verbose_name_plural="Productos"
        ordering = ['-puntuacion']

class ProductoFotos(models.Model):
    producto=models.ForeignKey(Productos,on_delete=models.CASCADE)
    imagen=models.ImageField(upload_to="Tienda/Productos", help_text="Imagen de 600 * 600")
    principal=models.BooleanField(default=False)

    def save(self, force_insert=False, force_update=False, using=None,
             update_fields=None):
        super(ProductoFotos, self).save()
        img=Image.open(self.imagen.path)
        if img.height >600 or img.weight>600:
            tamanio=(600,600)
            img.thumbnail(tamanio)
            img.save(self.imagen.path)

        if img.height <600 or img.weight<600:
            tamanio=(600,600)
            img.thumbnail(tamanio)
            img.save(self.imagen.path)

    class Meta:
        verbose_name="Fotos de Producto"
        verbose_name_plural = "Fotos de Producto"

class Kardex(models.Model):
    producto=models.ForeignKey(Productos,on_delete=models.CASCADE)
    tipo=models.CharField(max_length=2,help_text="Puede ser I o E")
    fecha=models.DateField(auto_now_add=True,null=True,blank=True)
    cantidad=models.IntegerField(default=0)
    detalle=models.TextField()

    class Meta:
        verbose_name="Kardex"
        verbose_name_plural="Kardex"










from django.db import models
import hashlib
# Create your models here.
from django.utils.safestring import mark_safe


class Tiendas(models.Model):
    nombre=models.CharField(max_length=200)
    logo=models.ImageField(upload_to="Tiendas/logos")
    descripcion=models.TextField()
    telefono=models.CharField(max_length=60)
    direccion=models.CharField(max_length=300)
    ciudad=models.CharField(max_length=60,null=True,blank=True)
    provincia=models.CharField(max_length=60,null=True,blank=True)
    correo=models.EmailField(max_length=200,null=True,blank=True)
    dir_map=models.TextField()
    hashes=models.CharField(max_length=64,null=True,blank=True)

    def clean(self):
        self.hashes=hashlib.sha256(str.encode(str(str.zfill(str(self.pk),10)))).hexdigest()
        print(self.id,self.hashes)

    def __str__(self):
        return self.nombre


class Categorias(models.Model):
    nombre=models.CharField(max_length=200)
    icono=models.CharField(max_length=30)

    def __str__(self):
        return self.nombre

class Marcas(models.Model):
    nombre = models.CharField(max_length=200)
    imagen =models.ImageField(upload_to="Teindas/Marcas",null=True,blank=True)

    def __str__(self):
        return self.nombre

class Adds(models.Model):
    fecha_inicio=models.DateTimeField(null=True,blank=True)
    fecha_limite=models.DateTimeField(null=True,blank=True)
    tienda=models.ForeignKey(Tiendas,on_delete=models.CASCADE)
    imagen=models.ImageField(upload_to="Tiendas/Adds")
    descuento=models.DecimalField(decimal_places=2,max_digits=9,default=0)
    estado=models.BooleanField(default=False)
    vertical=models.BooleanField(default=True)
    horizontal=models.BooleanField(default=False)

    def miniatura(self):
        return mark_safe("<img src='/media/%s' style='width: 100px'>"%self.imagen)


    def __str__(self):
        return "%s | %s %s"%(self.fecha_inicio,self.fecha_limite,self.descuento)

class Productos(models.Model):
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
    adds=models.ForeignKey(Adds,on_delete=models.CASCADE,null=True,blank=True)
    puntuacion=models.DecimalField(max_digits=9,decimal_places=2,default=0)
    imagen=models.ImageField(upload_to="Tienda/Productos",null=True,blank=True)
    slug=models.CharField(max_length=200,null=True,blank=True)


    def miniatura(self):
        return mark_safe("<img src='/media/%s' style='width: 100px'>"%self.imagen)

    def clean(self):
        self.slug=hashlib.sha256(str.encode(str(str.zfill(str(self.pk),10)))).hexdigest()
        print(self.id,self.slug)

    def __str__(self):
        return self.nombre

class ProductoFotos(models.Model):
    producto=models.ForeignKey(Productos,on_delete=models.CASCADE)
    imagen=models.ImageField(upload_to="Tienda/Productos")
    principal=models.BooleanField(default=False)

class Kardex(models.Model):
    producto=models.ForeignKey(Productos,on_delete=models.CASCADE)
    tipo=models.CharField(max_length=2,help_text="Puede ser I o E")
    fecha=models.DateField(null=True,blank=True)
    cantidad=models.IntegerField(default=0)
    detalle=models.TextField()








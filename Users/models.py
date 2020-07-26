from django.contrib.auth.models import User
from django.db import models

# Create your models here.
from Administracion.models import Ciudad
from Tienda.models import Productos


class Clientes(models.Model):
    nombres=models.CharField(max_length=60)
    apellidos=models.CharField(max_length=60)
    fecha_nacimiento=models.DateField(null=True,blank=True)
    cedula=models.CharField(max_length=10)

    class Meta:
        verbose_name="Cliente"
        verbose_name_plural="Clientes"

class Pagos(models.Model):
    numero_tarjeta=models.CharField(max_length=20)
    codigo_cvc=models.CharField(max_length=10)
    principal=models.BooleanField(default=False)

    class Meta:
        verbose_name="Pago"
        verbose_name_plural="Pagos"

class Telefonos(models.Model):
    cliente=models.ForeignKey(Clientes,on_delete=models.CASCADE)
    numero=models.CharField(max_length=10)
    principal=models.BooleanField(default=False)

    class Meta:
        verbose_name="Telefono"
        verbose_name_plural="Telefonos"

class Direcciones(models.Model):
    cliente = models.ForeignKey(Clientes, on_delete=models.CASCADE)
    direccion=models.CharField(max_length=100)
    ciudad=models.ForeignKey(Ciudad,on_delete=models.CASCADE)
    descripcion=models.TextField(null=True,blank=True)
    principal = models.BooleanField(default=False)

    class Meta:
        verbose_name="Direccion"
        verbose_name_plural="Direcciones"

class ListaDeseos(models.Model):
    fecha=models.DateField(auto_now_add=True)
    usuario=models.ForeignKey(User,on_delete=models.CASCADE)
    producto=models.ForeignKey(Productos,on_delete=models.CASCADE)
    slug=models.CharField(max_length=300,null=True,blank=True)

    class Meta:
        verbose_name="Lista de Deseos"
        verbose_name_plural="Lista de Deseos"

class Carrito(models.Model):
    fecha=models.DateField(auto_now_add=True)
    usuario = models.ForeignKey(User, on_delete=models.CASCADE)
    total = models.DecimalField(max_digits=9, decimal_places=2,default=0)
    slug = models.CharField(max_length=300, null=True, blank=True)

    class Meta:
        verbose_name="Carrito"
        verbose_name_plural="Carritos"

class DetallesCarrito(models.Model):
    fecha = models.DateField(auto_now_add=True)
    producto = models.ForeignKey(Productos, on_delete=models.CASCADE)
    cantidad = models.ImageField(default=0)
    total = models.DecimalField(max_digits=9, decimal_places=2, default=0)

    class Meta:
        verbose_name="Detalle Carrito"
        verbose_name_plural="Detalles del Carrito"


class Compras(models.Model):
    fecha = models.DateField(auto_now_add=True)
    carrito=models.ForeignKey(Carrito,on_delete=models.CASCADE)
    valor=models.DecimalField(max_digits=9, decimal_places=2,default=0)
    slug=models.CharField(max_length=300,null=True,blank=True)

    class Meta:
        verbose_name="Compra"
        verbose_name_plural="Compras"
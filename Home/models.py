from colorfield.fields import ColorField
from django.contrib.auth.models import User
from django.db import models

# Create your models here.
from django.utils.safestring import mark_safe

from Tienda.models import Productos


class Slider(models.Model):
    fecha=models.DateField(auto_now_add=True,null=True,blank=True)
    imagen=models.ImageField(upload_to="slider")
    titulo=models.CharField(max_length=60)
    descripcion=models.TextField(null=True,blank=True)
    valorPromocion=models.DecimalField(max_digits=9, decimal_places=2,default=0)
    valorSinPromocion=models.DecimalField(max_digits=9, decimal_places=2, default=0)
    mensajeBoton=models.CharField(max_length=20, default="Llévame allá",null=True,blank=True)
    alCarrito=models.BooleanField(default=False)
    enlace=models.URLField(max_length=2000,null=True,blank=True)
    colorBoton = ColorField(default='#FF0000')

class ColorInterfaz(models.Model):
    header=ColorField(default='#333333')
    header_texto = ColorField(default='#ffffff')
    page=ColorField(default='#cccccc52')
    botons=ColorField(default="#ff3600" )
    menu = ColorField(default="#ff3600")

    def colores(self):
        return mark_safe('<div style="width: 200px;height: 10px; background-color: %s"></div>'
                         '<div style="width: 200px;height: 10px; background-color: %s"></div>'
                         '<div style="width: 200px;height: 10px; background-color: %s"></div>'
                         '<div style="width: 200px;height: 10px; background-color: %s"></div>'%(self.header,self.page,self.botons,self.menu))

class CalificarProductos(models.Model):
    producto=models.ForeignKey(Productos,on_delete=models.CASCADE)
    usuario=models.ForeignKey(User,on_delete=models.CASCADE)
    calificacion=models.DecimalField(default=0,max_digits=9,decimal_places=2)
    comentario=models.TextField(null=True,blank=True)

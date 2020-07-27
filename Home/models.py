from django.db import models

# Create your models here.
class Slider(models.Model):
    imagen=models.ImageField(upload_to="slider")
    titulo=models.CharField(max_length=60)
    descripcion=models.TextField(null=True,blank=True)
    valorPromocion=models.DecimalField(max_digits=9, decimal_places=2)
    valorSinPromocion=models.DecimalField(max_digits=9, decimal_places=2)
    mensajeBoton=models.CharField(max_length=20, default="Llevame allá")
    alCarrito=models.BooleanField(default=False)
    enlace=models.URLField(max_length=2000,null=True,blank=True)

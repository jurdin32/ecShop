from django.db import models

# Create your models here.
from django.utils.safestring import mark_safe


class Pais(models.Model):
    nombre=models.CharField(max_length=60)

    def __str__(self):
        return self.nombre

class Provincia(models.Model):
    pais=models.ForeignKey(Pais,on_delete=models.CASCADE)
    nombre=models.CharField(max_length=60)

    def __str__(self):
        return self.nombre

class Ciudad(models.Model):
    provincia=models.ForeignKey(Provincia,on_delete=models.CASCADE)
    nombre=models.CharField(max_length=60)

    def __str__(self):
        return self.nombre

class Iconos(models.Model):
    nombre=models.CharField(max_length=100)
    icono=models.FileField(upload_to="iconos",null=True,blank=True)

    def miniatura(self):
        return mark_safe('<img src="/media/%s" style="width: 40px" alt="">' % self.icono)

    def __str__(self):
        return self.nombre
from django.db import models
import hashlib
# Create your models here.
class Tiendas(models.Model):
    nombre=models.CharField(max_length=200)
    logo=models.ImageField(upload_to="Tiendas/logos")
    descripcion=models.TextField()
    telefono=models.CharField(max_length=60)
    direccion=models.CharField(max_length=300)
    dir_map=models.TextField()
    hashes=models.CharField(max_length=64,unique=True, default=0)

    def save(self, force_insert=False, force_update=False, using=None,
             update_fields=None):
        cantidad=Tiendas.objects.count()+1
        print(cantidad)
        self.hashes=hashlib.sha256(str.encode(str(cantidad))).hexdigest()
        super(Tiendas, self).save()







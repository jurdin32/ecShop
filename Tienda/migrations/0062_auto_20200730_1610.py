# Generated by Django 3.0.8 on 2020-07-30 16:10

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('Tienda', '0061_productos_nombre_comun'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='productos',
            options={'ordering': ['-puntuacion'], 'verbose_name': 'Producto', 'verbose_name_plural': 'Productos'},
        ),
    ]

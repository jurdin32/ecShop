# Generated by Django 3.0.8 on 2020-07-23 08:03

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('Administracion', '0004_auto_20200719_1004'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='ciudad',
            options={'verbose_name': 'Ciudad', 'verbose_name_plural': 'Ciudades'},
        ),
        migrations.AlterModelOptions(
            name='iconos',
            options={'verbose_name': 'Icono', 'verbose_name_plural': 'Iconos'},
        ),
        migrations.AlterModelOptions(
            name='pais',
            options={'verbose_name': 'Pais', 'verbose_name_plural': 'Paises'},
        ),
        migrations.AlterModelOptions(
            name='provincia',
            options={'verbose_name': 'Provincia', 'verbose_name_plural': 'Provincias'},
        ),
    ]

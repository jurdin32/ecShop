# Generated by Django 3.0.8 on 2020-07-15 15:53

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Tienda', '0022_productos_slug'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='categorias',
            name='tienda',
        ),
        migrations.RemoveField(
            model_name='marcas',
            name='tienda',
        ),
        migrations.AlterField(
            model_name='productos',
            name='codigo_interno',
            field=models.CharField(blank=True, max_length=20, null=True),
        ),
    ]

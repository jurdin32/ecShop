# Generated by Django 3.0.8 on 2020-08-02 11:56

from django.db import migrations
import stdimage.models


class Migration(migrations.Migration):

    dependencies = [
        ('Tienda', '0063_productos_fecha'),
    ]

    operations = [
        migrations.AlterField(
            model_name='productofotos',
            name='imagen',
            field=stdimage.models.StdImageField(help_text='Imagen de 600 * 600', upload_to='Tienda/Productos'),
        ),
    ]

# Generated by Django 3.0.8 on 2020-07-31 17:59

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Home', '0011_colorinterfaz_header_texto'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='slider',
            name='alCarrito',
        ),
        migrations.RemoveField(
            model_name='slider',
            name='valorPromocion',
        ),
        migrations.RemoveField(
            model_name='slider',
            name='valorSinPromocion',
        ),
        migrations.AddField(
            model_name='slider',
            name='imagen2',
            field=models.ImageField(blank=True, null=True, upload_to='slider/img2'),
        ),
    ]
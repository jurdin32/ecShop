# Generated by Django 3.0.8 on 2020-07-27 16:04

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Home', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='slider',
            name='alCarrito',
            field=models.BooleanField(default=False),
        ),
        migrations.AddField(
            model_name='slider',
            name='enlace',
            field=models.URLField(blank=True, max_length=2000, null=True),
        ),
        migrations.AddField(
            model_name='slider',
            name='mensajeBoton',
            field=models.CharField(default='Llevame allá', max_length=20),
        ),
    ]

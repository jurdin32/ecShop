# Generated by Django 3.0.8 on 2020-07-18 02:54

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Tienda', '0028_tiendas_estado'),
    ]

    operations = [
        migrations.AddField(
            model_name='productos',
            name='estado',
            field=models.BooleanField(default=True),
        ),
    ]

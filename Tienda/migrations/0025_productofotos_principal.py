# Generated by Django 3.0.8 on 2020-07-15 22:00

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Tienda', '0024_auto_20200715_1054'),
    ]

    operations = [
        migrations.AddField(
            model_name='productofotos',
            name='principal',
            field=models.BooleanField(default=False),
        ),
    ]

# Generated by Django 3.0.8 on 2020-08-03 15:54

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Home', '0013_popup'),
    ]

    operations = [
        migrations.AlterField(
            model_name='popup',
            name='estad0',
            field=models.BooleanField(default=True, help_text='Imagen de 641 x 393'),
        ),
    ]
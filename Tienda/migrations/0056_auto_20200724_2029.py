# Generated by Django 3.0.8 on 2020-07-24 20:29

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Tienda', '0055_auto_20200724_1525'),
    ]

    operations = [
        migrations.AlterField(
            model_name='kardex',
            name='fecha',
            field=models.DateField(auto_now_add=True,null=True,blank=True),
        ),
    ]

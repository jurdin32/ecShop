# Generated by Django 3.0.8 on 2020-08-02 12:06

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Tienda', '0066_auto_20200802_1200'),
    ]

    operations = [
        migrations.AlterField(
            model_name='productos',
            name='fecha',
            field=models.DateField(auto_now_add=True, default='2020-08-02'),
            preserve_default=False,
        ),
    ]

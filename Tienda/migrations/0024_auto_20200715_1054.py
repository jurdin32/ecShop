# Generated by Django 3.0.8 on 2020-07-15 15:54

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Tienda', '0023_auto_20200715_1053'),
    ]

    operations = [
        migrations.AlterField(
            model_name='productos',
            name='codigo_interno',
            field=models.CharField(blank=True, default='0000000', max_length=20, null=True),
        ),
    ]

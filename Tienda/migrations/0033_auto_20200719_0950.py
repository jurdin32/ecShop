# Generated by Django 3.0.8 on 2020-07-19 14:50

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Tienda', '0032_auto_20200719_0948'),
    ]

    operations = [
        migrations.AlterField(
            model_name='marcas',
            name='imagen',
            field=models.FileField(blank=True, null=True, upload_to='Teindas/Marcas'),
        ),
    ]

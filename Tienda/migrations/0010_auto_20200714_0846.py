# Generated by Django 3.0.8 on 2020-07-14 13:46

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Tienda', '0009_adds'),
    ]

    operations = [
        migrations.AddField(
            model_name='adds',
            name='fecha_inicio',
            field=models.DateTimeField(blank=True, null=True),
        ),
        migrations.AddField(
            model_name='adds',
            name='fecha_limite',
            field=models.DateTimeField(blank=True, null=True),
        ),
    ]

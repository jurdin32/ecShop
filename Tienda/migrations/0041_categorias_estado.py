# Generated by Django 3.0.8 on 2020-07-19 16:41

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Tienda', '0040_auto_20200719_1127'),
    ]

    operations = [
        migrations.AddField(
            model_name='categorias',
            name='estado',
            field=models.BooleanField(default=True),
        ),
    ]

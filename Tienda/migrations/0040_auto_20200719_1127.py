# Generated by Django 3.0.8 on 2020-07-19 16:27

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
        ('Tienda', '0039_categorias_icono'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='categorias',
            name='tienda',
        ),
        migrations.AddField(
            model_name='categorias',
            name='usuario',
            field=models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.CASCADE, to=settings.AUTH_USER_MODEL),
        ),
    ]

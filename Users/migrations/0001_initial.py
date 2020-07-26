# Generated by Django 3.0.8 on 2020-07-26 17:58

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        ('Tienda', '0060_auto_20200724_2157'),
        ('Administracion', '0005_auto_20200723_0803'),
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
    ]

    operations = [
        migrations.CreateModel(
            name='Carrito',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('fecha', models.DateField(auto_now_add=True)),
                ('cantidad', models.ImageField(default=0, upload_to='')),
                ('total', models.DecimalField(decimal_places=2, default=0, max_digits=9)),
                ('slug', models.CharField(blank=True, max_length=300, null=True)),
                ('producto', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='Tienda.Productos')),
                ('usuario', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to=settings.AUTH_USER_MODEL)),
            ],
        ),
        migrations.CreateModel(
            name='Clientes',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nombres', models.CharField(max_length=60)),
                ('apellidos', models.CharField(max_length=60)),
                ('fecha_nacimiento', models.DateField(blank=True, null=True)),
                ('cedula', models.CharField(max_length=10)),
            ],
        ),
        migrations.CreateModel(
            name='Pagos',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('numero_tarjeta', models.CharField(max_length=20)),
                ('codigo_cvc', models.CharField(max_length=10)),
                ('principal', models.BooleanField(default=False)),
            ],
        ),
        migrations.CreateModel(
            name='Telefonos',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('numero', models.CharField(max_length=10)),
                ('principal', models.BooleanField(default=False)),
                ('cliente', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='Users.Clientes')),
            ],
        ),
        migrations.CreateModel(
            name='ListaDeseos',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('fecha', models.DateField(auto_now_add=True)),
                ('slug', models.CharField(blank=True, max_length=300, null=True)),
                ('producto', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='Tienda.Productos')),
                ('usuario', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to=settings.AUTH_USER_MODEL)),
            ],
        ),
        migrations.CreateModel(
            name='Direcciones',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('direccion', models.CharField(max_length=100)),
                ('descripcion', models.TextField(blank=True, null=True)),
                ('principal', models.BooleanField(default=False)),
                ('ciudad', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='Administracion.Ciudad')),
                ('cliente', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='Users.Clientes')),
            ],
        ),
        migrations.CreateModel(
            name='Compras',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('fecha', models.DateField(auto_now_add=True)),
                ('valor', models.DecimalField(decimal_places=2, default=0, max_digits=9)),
                ('slug', models.CharField(blank=True, max_length=300, null=True)),
                ('carrito', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='Users.Carrito')),
            ],
        ),
    ]

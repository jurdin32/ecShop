# Generated by Django 3.0.8 on 2020-07-14 14:09

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('Tienda', '0012_productos'),
    ]

    operations = [
        migrations.CreateModel(
            name='Kardex',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('tipo', models.CharField(help_text='Puede ser I o E', max_length=2)),
                ('fecha', models.DateField(blank=True, null=True)),
                ('cantidad', models.IntegerField(default=0)),
                ('detalle', models.TextField()),
                ('producto', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='Tienda.Productos')),
            ],
        ),
    ]

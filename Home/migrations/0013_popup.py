# Generated by Django 3.0.8 on 2020-08-03 08:21

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Home', '0012_auto_20200731_1759'),
    ]

    operations = [
        migrations.CreateModel(
            name='Popup',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('titulo', models.CharField(max_length=60)),
                ('detalle', models.CharField(max_length=120)),
                ('imagen', models.ImageField(upload_to='popup')),
                ('estad0', models.BooleanField(default=True)),
            ],
        ),
    ]

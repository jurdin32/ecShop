# Generated by Django 3.0.8 on 2020-07-28 12:42

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Users', '0004_auto_20200728_1127'),
    ]

    operations = [
        migrations.AlterField(
            model_name='detallescarrito',
            name='cantidad',
            field=models.IntegerField(default=0),
        ),
    ]

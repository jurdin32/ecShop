# Generated by Django 3.0.8 on 2020-07-27 16:11

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Home', '0003_auto_20200727_1608'),
    ]

    operations = [
        migrations.AddField(
            model_name='slider',
            name='fecha',
            field=models.DateField(auto_now_add=True, null=True),
        ),
    ]

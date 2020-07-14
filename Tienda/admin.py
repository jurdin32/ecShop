from django.contrib import admin

# Register your models here.
from Tienda.models import Tiendas
from ecShop.snippers import Attr


class AdminTiendas(admin.ModelAdmin):
    list_display = Attr(Tiendas)
    list_display_links = Attr(Tiendas)
    readonly_fields = ["hashes"]
admin.site.register(Tiendas,AdminTiendas)
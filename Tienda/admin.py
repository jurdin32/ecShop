from django.contrib import admin

# Register your models here.
from Tienda.models import *
from ecShop.snippers import Attr


class AdminTiendas(admin.ModelAdmin):
    list_display = Attr(Tiendas)
    list_display_links = Attr(Tiendas)
    readonly_fields = ["hashes"]
admin.site.register(Tiendas,AdminTiendas)

class AdminCategorias(admin.ModelAdmin):
    list_display_links = Attr(Categorias)
    list_display = Attr(Categorias)+["miniatura"]
admin.site.register(Categorias,AdminCategorias)

class AdminMarcas(admin.ModelAdmin):
    list_display_links = Attr(Marcas)
    list_display = Attr(Marcas)+["miniatura"]
admin.site.register(Marcas,AdminMarcas)

class AdminAdds(admin.ModelAdmin):
    list_display = Attr(Adds)+["miniatura"]
    list_display_links = Attr(Adds)
admin.site.register(Adds,AdminAdds)

class InlineFotosProducto(admin.StackedInline):
    model = ProductoFotos

class AdminProductos(admin.ModelAdmin):
    list_display_links = Attr(Productos)
    list_display = ["miniatura"]+Attr(Productos)
    inlines = [InlineFotosProducto]
    readonly_fields = ["puntuacion"]
admin.site.register(Productos,AdminProductos)

class AdminKardex(admin.ModelAdmin):
    list_display = Attr(Kardex)
    list_display_links = Attr(Kardex)
admin.site.register(Kardex,AdminKardex)

from django.contrib import admin

# Register your models here.
from Users.models import *
from ecShop.snippers import Attr

class inLineTelefonos(admin.StackedInline):
    model = Telefonos
    extra = 0

class inLineDirecciones(admin.StackedInline):
    model = Direcciones
    extra = 0

class AdminClientes(admin.ModelAdmin):
    list_display = Attr(Clientes)
    list_display_links = Attr(Clientes)
    inlines = [inLineDirecciones,inLineTelefonos]
admin.site.register(Clientes,AdminClientes)

class AdminPagos(admin.ModelAdmin):
    list_display = Attr(Pagos)
    list_display_links = Attr(Pagos)
admin.site.register(Pagos,AdminPagos)

class AdminListaDeseos(admin.ModelAdmin):
    list_display = Attr(ListaDeseos)
    list_display_links = Attr(ListaDeseos)
admin.site.register(ListaDeseos,AdminListaDeseos)

class AdminCarrito(admin.ModelAdmin):
    list_display = Attr(Carrito)
    list_display_links = Attr(Carrito)
admin.site.register(Carrito, AdminCarrito)

class AdminCompras(admin.ModelAdmin):
    list_display_links = Attr(Compras)
    list_display = Attr(Compras)
admin.site.register(Compras,AdminCompras)

class AdminDetalleCarrito(admin.ModelAdmin):
    list_display = Attr(DetallesCarrito)
    list_display_links = Attr(DetallesCarrito)
admin.site.register(DetallesCarrito,AdminDetalleCarrito)

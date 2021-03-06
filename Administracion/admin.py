from django.contrib import admin

# Register your models here.
from Administracion.models import Pais, Provincia, Ciudad, Iconos
from ecShop.snippers import Attr

class InLineProvincia(admin.StackedInline):
    model = Provincia
    extra = 0

class InLineCiudad(admin.StackedInline):
    model = Ciudad
    extra = 0

class AdminPaises(admin.ModelAdmin):
    list_display_links = Attr(Pais)
    list_display = Attr(Pais)
    inlines = [InLineProvincia]
admin.site.register(Pais,AdminPaises)

class AdminProvincia(admin.ModelAdmin):
    list_display_links = Attr(Pais)
    list_display = Attr(Pais)
    inlines = [InLineCiudad]
admin.site.register(Provincia, AdminProvincia)


class AdminIcono(admin.ModelAdmin):
    list_display_links = Attr(Iconos)
    list_display = Attr(Iconos)+["miniatura"]
admin.site.register(Iconos, AdminIcono)

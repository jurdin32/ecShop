from django.contrib import admin

# Register your models here.
from Home.models import Slider, ColorInterfaz, CalificarProductos, Popup
from ecShop.snippers import Attr


class AdminSlider(admin.ModelAdmin):
    list_display = Attr(Slider)
    list_display_links = Attr(Slider)
admin.site.register(Slider,AdminSlider)


class AdminColorInterfaz(admin.ModelAdmin):
    list_display_links = Attr(ColorInterfaz)
    list_display = Attr(ColorInterfaz)+["colores"]
admin.site.register(ColorInterfaz,AdminColorInterfaz)

class AdminCalificacionProductos(admin.ModelAdmin):
    list_display = Attr(CalificarProductos)
    list_display_links = Attr(CalificarProductos)
admin.site.register(CalificarProductos,AdminCalificacionProductos)


class AdminPopup(admin.ModelAdmin):
    list_display = Attr(Popup)
    list_display_links = Attr(Popup)
admin.site.register(Popup,AdminPopup)
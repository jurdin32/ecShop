from django.contrib import admin

# Register your models here.
from Home.models import Slider, ColorInterfaz
from ecShop.snippers import Attr


class AdminSlider(admin.ModelAdmin):
    list_display = Attr(Slider)
    list_display_links = Attr(Slider)
admin.site.register(Slider,AdminSlider)


class AdminColorInterfaz(admin.ModelAdmin):
    list_display_links = Attr(ColorInterfaz)
    list_display = Attr(ColorInterfaz)+["colores"]
admin.site.register(ColorInterfaz,AdminColorInterfaz)
from django.contrib import admin

# Register your models here.
from Home.models import Slider
from ecShop.snippers import Attr


class AdminSlider(admin.ModelAdmin):
    list_display = Attr(Slider)
    list_display_links = Attr(Slider)
admin.site.register(Slider,AdminSlider)

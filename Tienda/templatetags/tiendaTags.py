from django import template

from Tienda.models import Productos, Tiendas

register = template.Library()

@register.simple_tag
def obtnerTienda(id):
    tienda=Tiendas.objects.get(id=id)
    return tienda.nombre

from django import template

from Tienda.models import Tiendas, Productos

register = template.Library()

@register.simple_tag
def obtnerTienda(id):
    tienda=Tiendas.objects.get(id=id)
    return tienda.nombre

@register.simple_tag
def total_categoria(id):
    try:
        contador=Productos.objects.filter(categoria_id=id)
        return contador.count()
    except:
        return 0


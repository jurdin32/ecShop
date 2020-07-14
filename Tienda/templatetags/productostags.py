from django import template

from Tienda.models import Productos

register = template.Library()

@register.simple_tag
def descuento(id):
    producto=Productos.objects.get(id=id)
    precio=0
    try:
        precio= producto.precio - ((producto.precio * producto.adds.descuento )/100)
    except:
        precio = producto.precio
    return round(precio,2)
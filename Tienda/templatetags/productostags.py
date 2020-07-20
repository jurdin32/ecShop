from django import template

from Administracion.models import Pais, Provincia, Ciudad
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


@register.simple_tag
def pais(id):
    try:
        pais = Pais.objects.get(id=id).nombre
        return pais
    except:
        return "No asignado"



@register.simple_tag
def provincia(id):
    try:
        provincia= Provincia.objects.get(id=id).nombre
        return provincia
    except:
        return "No asignado"

@register.simple_tag
def ciudad(id):
    try:
        ciudad= Ciudad.objects.get(id=id).nombre
        return ciudad
    except:
        return "No asignado"
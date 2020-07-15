from django.shortcuts import render

from Tienda.models import Categorias, Tiendas, Marcas


def dashboard(request):
    return render(request,"Administracion/index.html")

def creacion_productos(request):
    tienda=Tiendas.objects.get(id=1)
    contexto={
        "categorias":Categorias.objects.filter(tienda_id=tienda.id),
        "marcas":Marcas.objects.filter(tienda_id=tienda.id)
    }
    return render(request,"Administracion/Productos/crear_producto.html",contexto)
import hashlib

from django.http import HttpResponse
from django.shortcuts import render

from Tienda.models import Categorias, Tiendas, Marcas, Productos


def dashboard(request):
    return render(request,"Administracion/index.html")

def creacion_productos(request):
    tienda=Tiendas.objects.get(id=1)
    if request.POST:
        producto=Productos(
            tienda_id=tienda.id,
        codigo_interno = request.POST["codigo"],
        categoria_id = request.POST["categoria"],
        marca_id = request.POST["marca"],
        nombre = request.POST["nombre"],
        descripcion = request.POST["descipcion"],
        precio = request.POST["precio"].replace("_","").replace("$","").replace(".","").replace(",","."),
        detalles_generales = request.POST["generales"],
        detalles_tecnicos = request.POST["tecnicos"],
        garantia_y_mas = request.POST["garantia"],
        )
        producto.save()
        producto.slug= hashlib.sha256(str.encode(str(str.zfill(str(producto.id), 10)))).hexdigest()
        producto.save()

        return HttpResponse(producto.slug)
    contexto={
        "categorias":Categorias.objects.all(),
        "marcas":Marcas.objects.all()
    }
    return render(request,"Administracion/Productos/crear_producto.html",contexto)

def ver_productos(request):
    contexto={
        "productos":Productos.objects.filter(tienda_id=1),
    }
    return render(request,"Administracion/Productos/ver_productos.html",contexto)
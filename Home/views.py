import datetime

from django.shortcuts import render



# Create your views here.
from Tienda.models import *


def index(request):
    contexto={
        "tiendas":Tiendas.objects.all(),
        "categorias":Categorias.objects.all().order_by("nombre"),
    }
    return render(request,"index.html",contexto)

def ver_porCategoria(request,id):
    contexto={
        "categorias":Categorias.objects.all().order_by("nombre"),
        "productos":Productos.objects.filter(categoria_id=id,estado=True),
        "categoria":Categorias.objects.get(id=id),
        "fotosProductos":ProductoFotos.objects.filter(principal=True),
    }
    print(ProductoFotos.objects.filter(principal=True))
    return render(request,"single-category.html",contexto)

def tiendas(request,slug):
    tiendas=Tiendas.objects.all()
    tienda=tiendas.get(hashes=slug)
    productos=Productos.objects.filter(tienda_id=tienda.id)
    for ads in Adds.objects.filter(tienda_id=tienda.id):
        print(datetime.datetime.now() > ads.fecha_limite)
        if datetime.datetime.now() > ads.fecha_limite:
            ads.estado=False
            ads.save()
    contexto={
        "tiendas":tiendas,
        "tienda":tienda,
        "marcas":Marcas.objects.all(),
        "adds":Adds.objects.filter(tienda_id=tienda.id,estado=True),
        "categorias":TiendaCategoria.objects.filter(estado=True,tienda=tienda),
        "productos10":productos.order_by("puntuacion")[0:10],
        "productos":productos,
        "fotosProductos":ProductoFotos.objects.filter(principal=True)
    }
    return render(request,"shop-brand.html",contexto)

def stok(id):
    ingresos=0
    egresos=0
    for i in Kardex.objects.filter(producto_id=id):
        if i.tipo=="I":
            ingresos+=i.cantidad
        else:
            egresos+=i.cantidad

    return ingresos - egresos



def detalles_producto(request,slug):
    producto=Productos.objects.get(slug=slug)
    contexto={
        "producto":producto,
        "stock":stok(producto.id),
        "fotosProductos":ProductoFotos.objects.filter(producto_id=producto.id)
    }
    return render(request,"product-detail.html",contexto)

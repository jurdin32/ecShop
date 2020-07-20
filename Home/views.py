from django.shortcuts import render



# Create your views here.
from Tienda.models import *


def index(request):
    contexto={
        "tiendas":Tiendas.objects.all()
    }
    return render(request,"index.html",contexto)

def tiendas(request,slug):
    tiendas=Tiendas.objects.all()
    tienda=tiendas.get(hashes=slug)
    productos=Productos.objects.filter(tienda_id=tienda.id)
    contexto={
        "tiendas":tiendas,
        "tienda":tienda,
        "marcas":Marcas.objects.all(),
        "adds":Adds.objects.filter(tienda_id=tienda.id,estado=True),
        "categorias":Categorias.objects.filter(usuario=tienda.usuario,estado=True),
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

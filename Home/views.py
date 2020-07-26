import datetime
from django.shortcuts import render

# Create your views here.
from Tienda.models import *

def index(request):
    contexto={
        "tiendas":Tiendas.objects.all(),
        "cat":Categorias.objects.all().order_by("nombre"),
        "productos":Productos.objects.filter(estado=True),
        "fotosProductos":ProductoFotos.objects.filter(principal=True)
    }
    return render(request,"index.html",contexto)

def ver_porCategoria(request,id):
    contexto={
        "cat":Categorias.objects.all().order_by("nombre"),
        "productos":Productos.objects.filter(categoria_id=id,estado=True),
        "categoria":Categorias.objects.get(id=id),
        "fotosProductos":ProductoFotos.objects.filter(principal=True),
        "tiendas":Tiendas.objects.all(),
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
        "fotosProductos":ProductoFotos.objects.filter(principal=True),
        "cat": Categorias.objects.all().order_by("nombre"),
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
        "fotosProductos":ProductoFotos.objects.filter(producto_id=producto.id),
        "tiendas":Tiendas.objects.all(),
        "cat": Categorias.objects.all().order_by("nombre"),
    }
    return render(request,"product-detail.html",contexto)

def ver_todas_categorias(request):
    contexto = {
        "tiendas": Tiendas.objects.all(),
        "cat": Categorias.objects.all().order_by("nombre"),
    }
    return render(request, "category.html", contexto)

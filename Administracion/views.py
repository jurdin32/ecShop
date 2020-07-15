import hashlib

from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render

from Tienda.models import Categorias, Tiendas, Marcas, Productos, ProductoFotos


def dashboard(request):
    return render(request,"Administracion/index.html")

def creacion_productos(request):
    crear=""
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
        crear="Registro Creado Exitosamente..!"
    contexto={
        "categorias":Categorias.objects.all(),
        "marcas":Marcas.objects.all(),
        "crear":crear
    }
    return render(request,"Administracion/Productos/crear_producto.html",contexto)

def ver_productos(request):
    contexto={
        "productos":Productos.objects.filter(tienda_id=1),
        "fotos":ProductoFotos.objects.filter(principal=True)
    }
    return render(request,"Administracion/Productos/ver_productos.html",contexto)

def editar_producto(request,slug):
    producto=Productos.objects.get(slug=slug)
    editar=""
    if request.POST:
        producto.codigo_interno = request.POST["codigo"]
        producto.categoria_id = request.POST["categoria"]
        producto.marca_id = request.POST["marca"]
        producto.nombre = request.POST["nombre"]
        producto.descripcion = request.POST["descipcion"]
        producto.precio = request.POST["precio"].replace("_", "").replace("$", "").replace(".", "").replace(",", ".")
        producto.detalles_generales = request.POST["generales"]
        producto.detalles_tecnicos = request.POST["tecnicos"]
        producto.garantia_y_mas = request.POST["garantia"]
        producto.save()
        editar="Registro Actualizado..!"
    contexto={
        "producto":producto,
        "categorias": Categorias.objects.all(),
        "marcas": Marcas.objects.all(),
        "editar":editar,
    }
    return render(request,"Administracion/Productos/crear_producto.html",contexto)

def crearFoto(request,slug):
    producto=Productos.objects.get(slug=slug)
    if request.POST:
        ProductoFotos(producto_id=producto.id,imagen=request.FILES["file"]).save()
    contexto={
        "producto":producto,
        "fotos":ProductoFotos.objects.filter(producto_id=producto.id)
    }
    return render(request,"Administracion/Productos/imgProductos.html",contexto)

def eliminarFoto(request,id):
    prod=ProductoFotos.objects.get(id=id)
    print(prod)
    slug=prod.producto.slug
    prod.delete()
    return HttpResponseRedirect("/administracion/product/photo/%s/"%slug)

def fotoPrincipal(request,id):
    prod = ProductoFotos.objects.get(id=id)
    for p in ProductoFotos.objects.filter(producto_id=prod.producto.id):
        p.principal=False
        p.save()
    prod.principal=True
    prod.save()
    return HttpResponseRedirect("/administracion/product/photo/%s/" % prod.producto.slug)
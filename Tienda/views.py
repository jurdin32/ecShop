import hashlib

from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render

# Create your views here.
from Administracion.models import Pais, Provincia, Ciudad
from Tienda.models import Tiendas


def tienda_crear(request):
    crear=""
    if request.POST:
        print(request.POST)
        tienda=Tiendas(
                        usuario=request.user,
                        nombre = request.POST["nombre"],
                       descripcion = request.POST["descripcion"],
                       pais = request.POST["pais"],
                       provincia = request.POST["provincia"],
                       ciudad = request.POST["ciudad"],
                       direccion = request.POST["direccion"],
                       telefono = request.POST["telefono"],
                       correo = request.POST["email"],
                       dir_map = request.POST["mapa"],
        )
        tienda.save()
        tienda.hashes = hashlib.sha256(str.encode(str(str.zfill(str(tienda.id), 10)))).hexdigest()
        tienda.save()
        crear="Producto Creado exitosamente..!"
    contexto={
        "paises":Pais.objects.all(),
        "provincias":Provincia.objects.all(),
        "ciudades":Ciudad.objects.all(),
        "crear":crear,
    }
    return render(request, "Administracion/Tienda/crear_tiendas.html",contexto)


def ver_tiendas(request):
    usuario=request.user
    contexto={
        "tiendas":Tiendas.objects.filter(usuario=usuario),
        "paises":Pais.objects.all(),
        "provincias":Provincia.objects.all(),
        "ciudades":Ciudad.objects.all(),
    }
    return render(request, "Administracion/Tienda/ver_tiendas.html",contexto)

def editar_tienda(request,slug):
    tienda=Tiendas.objects.get(hashes=slug)
    editar=""
    if request.POST:
        tienda.nombre=request.POST["nombre"]
        tienda.descripcion=request.POST["descripcion"]
        tienda.pais=request.POST["pais"]
        tienda.provincia=request.POST["provincia"]
        tienda.ciudad=request.POST["ciudad"]
        tienda.direccion=request.POST["direccion"]
        tienda.telefono=request.POST["telefono"]
        tienda.correo=request.POST["email"]
        tienda.dir_map=request.POST["mapa"]
        tienda.save()
        editar="El registro se ha modificado exitosamente..!"
    contexto={
        "paises": Pais.objects.all(),
        "provincias": Provincia.objects.all(),
        "ciudades": Ciudad.objects.all(),
        "editar": editar,
        "tienda": tienda,
    }
    return render(request, "Administracion/Tienda/crear_tiendas.html",contexto)

def crear_imagen(request,slug):
    tienda = Tiendas.objects.get(hashes=slug)
    if request.POST:
        tienda.logo=request.FILES["file"]
        tienda.save()
    return HttpResponse("OK")

def deshabilitar_tienda(request,id):
    tienda=Tiendas.objects.get(id=id)
    if tienda.estado:
        tienda.estado=False
    else:
        tienda.estado=True
    tienda.save()
    return HttpResponseRedirect("/administracion/tienda/view/")
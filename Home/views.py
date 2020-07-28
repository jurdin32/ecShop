import datetime

from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render

# Create your views here.
from Home.models import Slider, ColorInterfaz, CalificarProductos
from Tienda.models import *
from ecShop.snippers import send_email


def index(request):
    contexto={
        "tiendas":Tiendas.objects.all(),
        "cat":Categorias.objects.all().order_by("nombre"),
        "productos":Productos.objects.filter(estado=True),
        "fotosProductos":ProductoFotos.objects.filter(principal=True),
        "slider":Slider.objects.all().order_by("fecha"),
        "colores":ColorInterfaz.objects.last(),
    }
    return render(request,"index.html",contexto)

def ver_porCategoria(request,id):
    contexto={
        "cat":Categorias.objects.all().order_by("nombre"),
        "productos":Productos.objects.filter(categoria_id=id,estado=True),
        "categoria":Categorias.objects.get(id=id),
        "fotosProductos":ProductoFotos.objects.filter(principal=True),
        "tiendas":Tiendas.objects.all(),
        "colores": ColorInterfaz.objects.last(),
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
        "colores": ColorInterfaz.objects.last(),
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
    mensaje=""
    calificacion=0
    producto=Productos.objects.get(slug=slug)
    if request.POST:
        print(request.POST)
        try:
            calificacion = CalificarProductos.objects.get(usuario=request.user, producto=producto).calificacion
            mensaje = "No es posible volver a calificar el producto"
        except:
            calificacion= CalificarProductos(producto=producto,usuario=request.user,calificacion=request.POST["start"],comentario=request.POST['comentario']).save()
            mensaje="Gracias por calificar este producto con %s"%request.POST['start']
    try:
        calificacion = CalificarProductos.objects.get(usuario=request.user, producto=producto).calificacion
    except:
        pass
    ft=ProductoFotos.objects.all()
    contexto={
        "producto":producto,
        "stock":stok(producto.id),
        "fotosProductos":ft.filter(producto_id=producto.id),
        "tiendas":Tiendas.objects.all(),
        "cat": Categorias.objects.all().order_by("nombre"),
        "colores": ColorInterfaz.objects.last(),
        "productos":Productos.objects.filter(estado=True),
        "mensaje":mensaje,
        "calificacion":calificacion,
        "calificaciong":0,
        "fproductos":ft.filter(principal=True)
    }
    return render(request,"product-detail.html",contexto)

def ver_todas_categorias(request):
    contexto = {
        "tiendas": Tiendas.objects.all(),
        "cat": Categorias.objects.all().order_by("nombre"),
        "colores": ColorInterfaz.objects.last(),
    }
    return render(request, "category.html", contexto)

def registroClientes(request):
    mensaje=""
    if request.POST:
        if request.POST["pass1"]==request.POST["pass2"]:
            try:
                user=User.objects.get(email=request.POST["email"])
                mensaje="Sentimos informarte que no puedes registrarte, debido a que el email que proporcionastes ya se encuentra registrado..!"
                print(mensaje)
            except:
                user=User.objects.create_user(username=request.POST["email"],email=request.POST["email"],password=request.POST["pass2"]).save()
                user=User.objects.get(username=request.POST["email"])
                hash=hashlib.sha256(str.encode(str(str.zfill(str(user.id), 10)))).hexdigest()
                return HttpResponseRedirect("/registration/success/%s/%d"%(hash,user.id))
    contexto={
        "mensaje":mensaje,
        "colores": ColorInterfaz.objects.last(),
    }
    return render(request,"registration.html",contexto)


def registro_exitoso(request,hash,id):
    contexto={
        "usuario":User.objects.get(id=id),
        "colores": ColorInterfaz.objects.last(),
    }
    return render(request,"registration_success.html",contexto)

def enviar_email(request,correo):
    pass
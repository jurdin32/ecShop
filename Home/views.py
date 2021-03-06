from datetime import datetime,timedelta

from django.core import paginator
from django.core.paginator import Page, Paginator, PageNotAnInteger, EmptyPage
from django.db.models import Sum, Q
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render

# Create your views here.
from Home.models import Slider, ColorInterfaz, CalificarProductos, Popup
from Tienda.models import *
from Users.models import Carrito, DetallesCarrito, ListaDeseos
from ecShop.snippers import send_email


def index(request):
    carro=0
    deseos=0
    carrito=None
    valor=0
    dtlista=None
    fecha_fin=datetime.now().date()
    fecha_inicio=fecha_fin- timedelta(days=7)
    print(fecha_fin,fecha_inicio)
    if request.user.is_authenticated:
        carrito=DetallesCarrito.objects.filter(carrito__usuario=request.user,carrito__estado=False)
        carro=carrito.count()
        dtlista=ListaDeseos.objects.filter(usuario=request.user)
        deseos=dtlista.count()
    if carro>0:
        valor=carrito.aggregate(Sum("total"))
        #valor=valor["total__sum"]
    contexto={
        "tiendas":Tiendas.objects.all(),
        "cat":Categorias.objects.all().order_by("nombre"),
        "productosLista":Productos.objects.filter(fecha__lt=fecha_fin,fecha__gt=fecha_inicio,estado=True)[0:30],
        "productos":list(Productos.objects.filter(estado=True).order_by("-puntuacion")),
        "fotosProductos":ProductoFotos.objects.filter(principal=True),
        "slider":Slider.objects.all().order_by("fecha"),
        "colores":ColorInterfaz.objects.last(),
        "carrito":carro,
        "deseos":deseos,
        "datosCarrito":carrito,
        "datosLista":dtlista,
        "valor":valor,
        "marcas":list(Marcas.objects.all().order_by("nombre")),
        "popup":Popup.objects.filter(estad0=True).last(),
    }
    return render(request, "index1.html", contexto)

def quickview(request, id):
    contexto={
        "producto":Productos.objects.get(id=id),
        "fotos":ProductoFotos.objects.filter(producto_id=id),
    }
    return render(request,"quickview.html",contexto)

def cargar_mas_productos(request,inicio,fin,categoria=0):
    productos=Productos.objects.all()
    if categoria>0:
        productos=productos.filter(categoria_id=categoria)
    contexto={
        "productos":list(productos.order_by("-puntuacion")[inicio:fin]),
        "fotosProductos": ProductoFotos.objects.filter(principal=True),
        "colores": ColorInterfaz.objects.last(),
        "categoria":categoria
    }
    return render(request, "trozo/mas_productos.html",contexto)

def obtenerColores(productos):
    colores=[]
    datos=[]
    for i in productos:
        if not i.color in colores:
            colores.append(i.color)
            datos.append({"nombre":i.color ,"color":i.codigo_color })
    return datos

def marcas_categoria(productos):
    marcas=[]
    datos=[]
    for i in productos:
        if not i.marca_id in marcas:
            marcas.append(i.marca_id)
            datos.append({"id":i.marca_id,"nombre":i.marca.nombre})
    return datos


def paginacion(request,listado):
    page = request.GET.get('page', 1)
    paginator = Paginator(listado, 90)
    try:
        listado = paginator.page(page)
    except PageNotAnInteger:
        listado = paginator.page(1)
    except EmptyPage:
        listado = paginator.page(paginator.num_pages)
    print(listado)
    return listado


def ver_porCategoria(request,id):
    carro = 0
    deseos=0
    filtrado=None

    productos = Productos.objects.filter(categoria_id=id, estado=True)
    filtrado=productos

    if request.GET.get("search"):
        productos = productos.filter(nombre__icontains=request.GET.get("search"),precio__gt=request.GET.get("min"), precio__lte=request.GET.get("max"))
    if request.GET.getlist("colores"):
        productos=productos.filter(color__in=request.GET.getlist("colores"))
    if request.GET.get("marcas"):
        productos = productos.filter(marca_id__in=request.GET.get("marcas"))

    if request.user.is_authenticated:
        carro = DetallesCarrito.objects.filter(carrito__usuario=request.user, carrito__estado=False).count()
        deseos=ListaDeseos.objects.filter(usuario=request.user).count()
    contexto={
        "cat":Categorias.objects.all().order_by("nombre"),
        "totalProductos":productos.count(),
        "coloresProductos":obtenerColores(filtrado),
        "productos":paginacion(request,productos.order_by("-puntuacion")),
        "categoria":Categorias.objects.get(id=id),
        "fotosProductos":ProductoFotos.objects.filter(principal=True),
        "tiendas":Tiendas.objects.all(),
        "colores": ColorInterfaz.objects.last(),
        "carrito": carro,
        "marcas":marcas_categoria(filtrado),
        "top10":list(productos.order_by("-puntuacion")[0:10]),
        "deseos":deseos,
    }
    return render(request,"category-v2.html",contexto)


def tiendas(request,slug):
    carro = 0
    deseos=0
    if request.user.is_authenticated:
        carro = DetallesCarrito.objects.filter(carrito__usuario=request.user, carrito__estado=False).count()
        deseos=ListaDeseos.objects.filter(usuario=request.user).count()
    tiendas=Tiendas.objects.all()
    tienda=tiendas.get(hashes=slug)
    productos=Productos.objects.filter(tienda_id=tienda.id)
    for ads in Adds.objects.filter(tienda_id=tienda.id):
        print(datetime.now() > ads.fecha_limite)
        if datetime.now() > ads.fecha_limite:
            ads.estado=False
            ads.save()
    contexto={
        "tiendas":tiendas,
        "tienda":tienda,
        "marcas":Marcas.objects.all(),
        "adds":Adds.objects.filter(tienda_id=tienda.id,estado=True),
        "categorias":TiendaCategoria.objects.filter(estado=True,tienda=tienda),
        "productos10":list(productos.order_by("-puntuacion")[0:10]),
        "productos":productos,
        "fotosProductos":ProductoFotos.objects.filter(principal=True),
        "cat": Categorias.objects.all().order_by("nombre"),
        "colores": ColorInterfaz.objects.last(),
        "carrito": carro,
        "deseos":deseos,
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
    carro = 0
    error=""
    deseos=0
    carrito=Carrito()
    if request.user.is_authenticated:
        carro = DetallesCarrito.objects.filter(carrito__usuario=request.user, carrito__estado=False).count()
        deseos=ListaDeseos.objects.filter(usuario=request.user).count()
    mensaje=""
    calificacion=0
    producto=Productos.objects.get(slug=slug)
    if request.POST:
        try:
            calificacion = CalificarProductos.objects.get(usuario=request.user, producto=producto).calificacion
            mensaje = "No es posible volver a calificar el producto"
        except:
            if request.user.is_authenticated:
                calificacion= CalificarProductos(producto=producto,usuario=request.user,calificacion=request.POST["start"],comentario=request.POST['comentario']).save()
                mensaje="Gracias por calificar este producto con %s"%request.POST['start']

            else:
                error="No es posible calificar sin estar registrado."

    try:
        calificacion = CalificarProductos.objects.get(usuario=request.user, producto=producto).calificacion
    except:
        pass
    try:
        carrito = Carrito.objects.filter(usuario=request.user, estado=False)
        if not carrito:
            Carrito(usuario=request.user, estado=False).save()
    except:
        pass

    calificacion_global(producto)
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
        "fproductos":ft.filter(principal=True),
        "carrito": carro,
        "error":error,
        "deseos":deseos,
    }
    return render(request,"product-detail.html",contexto)

def calificacion_global(producto):
    calificacion=CalificarProductos.objects.filter(producto=producto)
    uno=(calificacion.filter(calificacion__gt=0, calificacion__lt=1.9).count())
    dos=(calificacion.filter(calificacion__gte=2, calificacion__lt=2.9).count())
    tres=(calificacion.filter(calificacion__gte=3, calificacion__lt=3.9).count())
    cuatro=(calificacion.filter(calificacion__gte=4, calificacion__lt=4.9).count())
    cinco=(calificacion.filter(calificacion__gte=5, calificacion__lt=5.9).count())
    sumasimple = uno + dos + tres + cuatro + cinco
    print("total de votos",sumasimple)
    calificacion = CalificarProductos.objects.filter(producto=producto)
    uno = (calificacion.filter(calificacion__gt=0, calificacion__lt=1.9).count())*1
    dos = (calificacion.filter(calificacion__gte=2, calificacion__lt=2.9).count())*2
    tres = (calificacion.filter(calificacion__gte=3, calificacion__lt=3.9).count())*3
    cuatro = (calificacion.filter(calificacion__gte=4, calificacion__lt=4.9).count())*4
    cinco = (calificacion.filter(calificacion__gte=5, calificacion__lt=5.9).count())*5
    sumaproducto = uno + dos + tres + cuatro + cinco
    print("producto",sumaproducto)
    try:
        promedio=round(sumaproducto/sumasimple,1)
        producto.puntuacion=promedio
        print("suma producto",sumaproducto)
        print("suma simple",sumasimple)
        print("El promedio generado",promedio)
    except:
        producto.puntuacion=0
    producto.save()

def ver_todas_categorias(request):
    deseos=0
    carro = 0
    if request.user.is_authenticated:
        carro = DetallesCarrito.objects.filter(carrito__usuario=request.user, carrito__estado=False).count()
        deseos=ListaDeseos.objects.filter(usuario=request.user).count()
        eliminar_duplicados(["producto","carrito","cantidad","precio"],DetallesCarrito)
    contexto = {
        "tiendas": Tiendas.objects.all(),
        "cat": Categorias.objects.all().order_by("nombre"),
        "colores": ColorInterfaz.objects.last(),
        "carrito": carro,
        "deseos":deseos,
    }
    return render(request, "category.html", contexto)

def carrito_usuario(request):
    if request.user.is_authenticated:
        car = Carrito.objects.get(usuario=request.user, estado=False)
        carro = DetallesCarrito.objects.filter(carrito=car)
        deseos=ListaDeseos.objects.filter(usuario=request.user).count()
        contexto={
            "tiendas": Tiendas.objects.all(),
            "cat": Categorias.objects.all().order_by("nombre"),
            "productos": Productos.objects.filter(estado=True),
            "fotosProductos": ProductoFotos.objects.filter(principal=True),
            "slider": Slider.objects.all().order_by("fecha"),
            "colores": ColorInterfaz.objects.last(),
            "carrito": carro.count(),
            "car":car,
            "detalles":carro,
            "total_carro":carro.aggregate(Sum("total")),
            "deseos":deseos,
        }
        return render(request,"checkout.html",contexto)
    else:
        return HttpResponseRedirect("/")

def eliminar_carrito(request,id):
    detalle=DetallesCarrito.objects.get(id=id)
    detalle.delete()
    return HttpResponseRedirect("/this_car/")

def enviar_carrito(request):
    if request.POST:
        carrito=Carrito.objects.get(usuario=request.user,estado=False)
        carrito.slug=hashlib.sha256(str.encode(str(str.zfill(str(carrito.id), 10)))).hexdigest()
        carrito.save()
        detalles=None
        try:
            detalles=DetallesCarrito.objects.get(carrito_id=carrito.id,producto_id=int(request.POST['producto']))
            detalles.cantidad = request.POST["cantidad"]
            detalles.precio = request.POST["precio"].replace(",", ".")
            detalles.total = float(request.POST["cantidad"]) * float(request.POST["precio"].replace(",", "."))
            detalles.save()
        except:
            DetallesCarrito(carrito=carrito, producto_id=request.POST['producto'],cantidad=request.POST["cantidad"],
                            precio=request.POST["precio"].replace(",","."),
                            total=float(request.POST["cantidad"])*float(request.POST["precio"].replace(",","."))
                            ).save()

        contador=DetallesCarrito.objects.filter(carrito=carrito).count()
        eliminar_duplicados(["producto","carrito","cantidad","precio"],DetallesCarrito)
        return HttpResponse(str(contador))


def lista_deseos(request):
    if request.POST:
        ListaDeseos.objects.create(usuario=request.user,producto_id=request.POST["producto_id"])
        eliminar_duplicados(["usuario","producto"],ListaDeseos)
        return HttpResponse(ListaDeseos.objects.filter(usuario=request.user).count())

def ver_lista_deseos(request):
    carro = 0
    deseos=None
    if request.user.is_authenticated:
        carro = DetallesCarrito.objects.filter(carrito__usuario=request.user, carrito__estado=False).count()
        deseos=ListaDeseos.objects.filter(usuario=request.user)
    contexto={
        "detalles":deseos,
        "deseos":deseos.count(),
        "carrito":carro,
        "colores": ColorInterfaz.objects.last(),
        "fotosProductos": ProductoFotos.objects.filter(principal=True),
        "tiendas": Tiendas.objects.all(),
        "cat": Categorias.objects.all().order_by("nombre"),
        "productos": Productos.objects.filter(estado=True),
    }
    return render(request,"list_deseos.html",contexto)

def eliminar_lista_deseos(request,id):
    lista=ListaDeseos.objects.get(id=id)
    lista.delete()
    return HttpResponseRedirect("/this_list/")

def eliminar_todos_deseos(request):
    for l in ListaDeseos.objects.filter(usuario=request.user):
        l.delete()
    return HttpResponseRedirect("/this_list/")


def eliminar_duplicados(unique_fields,modelo):

    duplicates = (modelo.objects.values(*unique_fields)
                  .order_by()
                  .annotate(max_id=models.Max('id'),
                            count_id=models.Count('id'))
                  .filter(count_id__gt=1))

    for duplicate in duplicates:
        (modelo.objects.filter(**{x: duplicate[x] for x in unique_fields})
         .exclude(id=duplicate['max_id'])
         .delete())


def busqueda(request,nombre):
    carro = 0
    deseos = None
    if request.user.is_authenticated:
        carro = DetallesCarrito.objects.filter(carrito__usuario=request.user, carrito__estado=False).count()
        deseos = ListaDeseos.objects.filter(usuario=request.user).count()

    contexto={
        "productos": Productos.objects.filter(estado=True),
        "prt":Productos.objects.filter(nombre__icontains=nombre.replace("_"," ")),
        "deseos": deseos,
        "carrito": carro,
        "colores": ColorInterfaz.objects.last(),
        "fotosProductos": ProductoFotos.objects.filter(principal=True),
        "tiendas": Tiendas.objects.all(),
        "cat": Categorias.objects.all().order_by("nombre"),
    }

    return render(request,"resultSearch.html",contexto)

def ver_comentarios(request,slug):
    carro = 0
    deseos = 0
    if request.user.is_authenticated:
        carro = DetallesCarrito.objects.filter(carrito__usuario=request.user, carrito__estado=False).count()
        deseos = ListaDeseos.objects.filter(usuario=request.user).count()
    prod=Productos.objects.get(slug=slug)
    contexto={
        "productos": Productos.objects.filter(estado=True),
        "deseos": deseos,
        "carrito": carro,
        "colores": ColorInterfaz.objects.last(),
        "fotosProductos": ProductoFotos.objects.filter(principal=True),
        "tiendas": Tiendas.objects.all(),
        "cat": Categorias.objects.all().order_by("nombre"),
        "producto":prod,
        "calificaciones":CalificarProductos.objects.filter(producto=prod)
    }
    return render(request,"view_prom.html",contexto)



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


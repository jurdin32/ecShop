import hashlib
from datetime import datetime

from django.contrib import auth
from django.contrib.auth import authenticate
from django.contrib.auth.decorators import login_required
from django.contrib.auth.models import User
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render

from Administracion.models import Iconos
from Tienda.models import Categorias, Tiendas, Marcas, Productos, ProductoFotos, Adds, TiendaCategoria


def log_In(request):
    if request.POST:
        email=request.POST["email"]
        password=request.POST['password']
        user=None
        try:
            user=User.objects.get(email=email)
            user=auth.authenticate(username=user.username,password=password)
            print(user)
        except:
            pass
        if user:
            auth.login(request,user=user)
            return HttpResponseRedirect("/administracion/")
    if request.user.is_authenticated:
        return HttpResponseRedirect("/administracion/")
    return render(request, "Administracion/login.html")

@login_required(login_url="/administracion/log_in/")
def log_Out(request):
    auth.logout(request)
    return render(request, "Administracion/login.html")


@login_required(login_url="/administracion/log_in/")
def dashboard(request):
    usuario=request.user
    if request.user.is_authenticated:
        contexto={

            "tiendas":Tiendas.objects.filter(usuario=usuario)
        }
        return render(request,"Administracion/index.html",contexto)
    return HttpResponseRedirect("/administracion/log_in/")

@login_required(login_url="/administracion/log_in/")
def creacion_productos(request):
    crear=""
    if request.POST:
        producto=Productos(
        tienda_id=request.POST["id"],
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
        "crear":crear,
        "tiendas":Tiendas.objects.filter(usuario=request.user),
        "iconos":Iconos.objects.all(),
    }
    return render(request,"Administracion/Productos/crear_producto.html",contexto)

@login_required(login_url="/administracion/log_in/")
def ver_productos(request):
    contexto={
        "productos":Productos.objects.filter(tienda__usuario=request.user),
        "fotos":ProductoFotos.objects.filter(principal=True),
        "tiendas":Tiendas.objects.filter(usuario=request.user),
    }
    return render(request,"Administracion/Productos/ver_productos.html",contexto)

@login_required(login_url="/administracion/log_in/")
def editar_producto(request,slug):
    producto=Productos.objects.get(slug=slug)
    editar=""
    if request.POST:
        producto.tienda_id=request.POST["id"]
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
        "tiendas": Tiendas.objects.filter(usuario=request.user),
        "iconos": Iconos.objects.all(),
    }
    return render(request,"Administracion/Productos/crear_producto.html",contexto)

@login_required(login_url="/administracion/log_in/")
def crearFoto(request,slug):
    producto=Productos.objects.get(slug=slug)
    if request.POST:
        ProductoFotos(producto_id=producto.id,imagen=request.FILES["file"]).save()
    contexto={
        "producto":producto,
        "fotos":ProductoFotos.objects.filter(producto_id=producto.id)
    }
    return render(request,"Administracion/Productos/imgProductos.html",contexto)

@login_required(login_url="/administracion/log_in/")
def eliminarFoto(request,id):
    prod=ProductoFotos.objects.get(id=id)
    print(prod)
    slug=prod.producto.slug
    prod.delete()
    return HttpResponseRedirect("/administracion/product/photo/%s/"%slug)

@login_required(login_url="/administracion/log_in/")
def deshabilitarProducto(request,id):
    prod=Productos.objects.get(id=id)
    if prod.estado:
        prod.estado=False
    else:
        prod.estado=True
    prod.save()
    return HttpResponseRedirect("/administracion/product/view/")

@login_required(login_url="/administracion/log_in/")
def fotoPrincipal(request,id):
    prod = ProductoFotos.objects.get(id=id)
    for p in ProductoFotos.objects.filter(producto_id=prod.producto.id):
        p.principal=False
        p.save()
    prod.principal=True
    prod.save()
    return HttpResponseRedirect("/administracion/product/photo/%s/" % prod.producto.slug)


@login_required(login_url="/administracion/log_in/")
def crearCategoria(request):
    crear=""
    if request.POST:
        Categorias(nombre=request.POST["nombre_categoria"],usuario=request.user,icono_id=request.POST["iconos"]).save()
        crear="La categoría se ha creado..!"
    contexto = {
        "categorias": Categorias.objects.all(),
        "marcas": Marcas.objects.all(),
        "crear": crear,
        "tiendas": Tiendas.objects.filter(usuario=request.user),
        "iconos": Iconos.objects.all().order_by("nombre"),
    }
    return render(request, "Administracion/Productos/crear_producto.html", contexto)

@login_required(login_url="/administracion/log_in/")
def crearMarca(request):
    crear=""
    if request.POST:
        Marcas(nombre=request.POST["nombre_marca"],imagen=request.FILES["imagen"]).save()
        crear="La marca se ha creado..!"
    contexto = {
        "categorias": Categorias.objects.all(),
        "marcas": Marcas.objects.all(),
        "crear": crear,
        "tiendas": Tiendas.objects.filter(usuario=request.user),
        "iconos": Iconos.objects.all().order_by("nombre"),
    }
    return render(request, "Administracion/Productos/crear_producto.html", contexto)

@login_required(login_url="/administracion/log_in/")
def ver_Categoria(request):
    crear = ""
    if request.POST:
        print(request.POST)
        try:
            int(request.POST["nombre_categoria"])
            TiendaCategoria(tienda_id=request.POST["tienda"], categoria_id=request.POST["nombre_categoria"], estado=True).save()
        except:
            categoria=Categorias(nombre=request.POST["nombre_categoria"],icono_id=request.POST["iconos"])
            categoria.save()
            TiendaCategoria(tienda_id=request.POST["tienda"],categoria_id=categoria.id,estado=True).save()
        crear = "La categoría se ha creado..!"
    contexto={
        "categorias":Categorias.objects.all().order_by("nombre"),
        "tiendas":Tiendas.objects.filter(usuario=request.user),
        "tcategorias":TiendaCategoria.objects.filter(tienda__usuario=request.user).order_by("categoria__nombre"),
        "iconos":Iconos.objects.all().order_by("nombre"),
        "crear": crear,
    }
    return render(request, "Administracion/Productos/ver_categorias.html",contexto)

@login_required(login_url="/administracion/log_in/")
def editar_Categoria(request,id):
    editar = ""
    cat = TiendaCategoria.objects.get(id=id)
    if request.POST:
        print(request.POST)
        cat.tienda_id=request.POST['tienda']
        cat.categoria_id=request.POST["nombre_categoria"]
        cat.save()
        catt=Categorias.objects.get(id=cat.categoria_id)
        catt.nombre=request.POST['nombre_']
        catt.icono_id=request.POST['iconos']
        catt.save()
        editar = "El registro se ha actualizado..!"
    contexto={
        "categorias":Categorias.objects.all().order_by("nombre"),
        "iconos":Iconos.objects.all().order_by("nombre"),
        "editar": editar,
        "categoria":cat,
        "tiendas": Tiendas.objects.filter(usuario=request.user),
        "tcategorias": TiendaCategoria.objects.filter(tienda__usuario=request.user).order_by("categoria__nombre"),
    }
    return render(request, "Administracion/Productos/ver_categorias.html",contexto)

@login_required(login_url="/administracion/log_in/")
def deshabilitarCategorias(request,id):
    cat=TiendaCategoria.objects.get(id=id)
    if cat.estado:
        cat.estado=False
    else:
        cat.estado=True
    cat.save()
    return HttpResponseRedirect("/administracion/product/categorias/")


@login_required(login_url="/administracion/log_in/")
def ver_Marcas(request):
    crear = ""
    if request.POST:
        Marcas(nombre=request.POST["nombre_marca"], usuario=request.user,imagen=request.FILES["imagen"]).save()
        crear = "La marca se ha creado..!"
    contexto={
        "marcas":Marcas.objects.all().order_by("nombre"),
        "crear": crear,
    }
    return render(request, "Administracion/Productos/ver_marcas.html",contexto)

@login_required(login_url="/administracion/log_in/")
def editar_Marcas(request,id):
    editar = ""
    mar = Marcas.objects.get(id=id)
    if request.POST:
        print(request.POST)
        mar.nombre=request.POST["nombre_marca"]
        mar.usuario=request.user
        if not "estado" in request.POST:
            mar.estado=False
        else:
            mar.estado = True
        if request.FILES:
            mar.imagen=request.FILES["imagen"]
        mar.save()
        editar = "El registro se ha actualizado..!"
    contexto={
        "marcas": Marcas.objects.all().order_by("nombre"),
        "editar": editar,
        "marca":mar,
    }
    return render(request, "Administracion/Productos/ver_marcas.html",contexto)


@login_required(login_url="/administracion/log_in/")
def deshabilitarMarcas(request,id):
    mar=Marcas.objects.get(id=id)
    if mar.estado:
        mar.estado=False
    else:
        mar.estado=True
    mar.save()
    return HttpResponseRedirect("/administracion/product/marcas/")

@login_required(login_url="/administracion/log_in/")
def promociones(request):
    estado=""
    crear=""
    print(Adds.objects.filter(usuario=request.user))
    if request.POST:
        fecha1 = datetime.strptime(request.POST["finicio"],'%d/%m/%Y %H:%M')
        fecha2 = datetime.strptime(request.POST["ffin"],'%d/%m/%Y %H:%M')
        print(request.POST)
        if "estado" in request.POST:
            estado=True
        else:
            estado=False
        Adds(fecha_inicio=fecha1,fecha_limite=fecha2,tienda_id=request.POST["tienda"],
                descuento=request.POST["descuento"].replace("_","").replace("%",""),
                estado=estado,usuario=request.user).save()
        crear="La promoción se ha creado exitosamente..!"
    contexto={
        "adds":Adds.objects.filter(usuario=request.user),
        "tiendas":Tiendas.objects.filter(usuario=request.user),
        "crear":crear
    }
    return render(request, "Administracion/Productos/promociones.html", contexto)

def editar_promocion(request,id):
    estado = ""
    editar = ""
    add=Adds.objects.get(id=id)
    if request.POST:
        print(request.POST)
        fecha1 = datetime.strptime(request.POST["finicio"], '%d/%m/%Y %H:%M')
        fecha2 = datetime.strptime(request.POST["ffin"], '%d/%m/%Y %H:%M')
        print(request.POST)
        if "estado" in request.POST:
            estado = True
        else:
            estado = False
        add.fecha_inicio=fecha1
        add.fecha_limite=fecha2
        add.tienda_id=request.POST["tienda"]
        add.descuento=request.POST["descuento"].replace("_", "").replace("%", "")
        add.estado=estado
        add.usuario=request.user
        add.save()
        editar="El registro fué Actualizado..!"
    contexto={
        "editar":editar,
        "add":Adds.objects.get(id=id),
        "tiendas": Tiendas.objects.filter(usuario=request.user),
        "adds": Adds.objects.filter(usuario=request.user),
    }
    return render(request, "Administracion/Productos/promociones.html", contexto)

def aplicar_promocion(request,id):
    promocion=Adds.objects.get(id=id)
    contexto={
        "add":promocion,
        "categorias":obtenerCategoriaProductos(promocion.tienda),
        "productos":Productos.objects.filter(tienda=promocion.tienda),
        "fotos":ProductoFotos.objects.filter(producto__tienda=promocion.tienda, principal=True),
    }
    print(Productos.objects.filter(tienda=promocion.tienda))
    obtenerCategoriaProductos(promocion.tienda)
    return render(request, "Administracion/Productos/ver_promociones.html",contexto)

def aplicar_categoria(request,id,categoria):
    promocion=Adds.objects.get(id=id)
    if request.POST:
        for p in Productos.objects.filter(categoria_id=categoria):
            p.adds=None
            p.save()
        for i in request.POST:
            try:
                prod=Productos.objects.get(id=int(str(i)))
                prod.adds_id=id
                prod.save()
            except:
                pass

    contexto={
        "add":promocion,
        "categorias":obtenerCategoriaProductos(promocion.tienda),
        "productos":Productos.objects.filter(tienda=promocion.tienda,categoria_id=categoria),
        "fotos":ProductoFotos.objects.filter(producto__tienda=promocion.tienda, principal=True),
        "categoria":Categorias.objects.get(id=categoria)
    }
    obtenerCategoriaProductos(promocion.tienda)
    return render(request, "Administracion/Productos/ver_promociones.html",contexto)


def obtenerCategoriaProductos(tienda):
    lista=[]
    lista2=[]
    for p in Productos.objects.filter(tienda=tienda):
        if not p.categoria.nombre in lista:
            lista.append(p.categoria.nombre)
            lista2.append({"id":p.categoria.id,"nombre":p.categoria.nombre,"icono":p.categoria.icono.icono })
    return lista2
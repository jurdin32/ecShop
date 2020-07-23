from django.urls import path

from Administracion.views import *
from Home.views import *

Administracion = [
    path('', dashboard),
    path('product/create/', creacion_productos),
    path('product/view/', ver_productos),
    path('product/deshabilitar/<int:id>/', deshabilitarProducto),
    path('product/view/<slug:slug>/', editar_producto),
    path('product/photo/<slug:slug>/', crearFoto),
    path('product/photo/delete/<int:id>/', eliminarFoto),
    path('product/photo/main/<int:id>/', fotoPrincipal),
    path('product/categoria/create/', crearCategoria),
    path('product/categorias/', ver_Categoria),
    path('product/categoria/disable/<int:id>/', deshabilitarCategorias),
    path('product/categoria/edit/<int:id>/', editar_Categoria),
    path('product/marca/create/', crearMarca),
    path('product/marcas/', ver_Marcas),
    path('product/marca/edit/<int:id>/', editar_Marcas),
    path('product/marca/disable/<int:id>/', deshabilitarMarcas),
    path('product/promo/', promociones),
    path('product/promo/edit/<int:id>/', editar_promocion),
    path('product/promo/put/<int:id>/', aplicar_promocion),
    path('product/promo/put/<int:id>/<int:categoria>/', aplicar_categoria),
]

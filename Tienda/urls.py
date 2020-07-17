from django.urls import path

from Administracion.views import *
from Home.views import *
from Tienda.views import tienda_crear

Tienda = [
    path('tienda/create/', tienda_crear),
    path('tienda/view/', ver_productos),
    path('product/view/<slug:slug>/', editar_producto),
    path('product/photo/<slug:slug>/', crearFoto),
    path('product/photo/delete/<int:id>/', eliminarFoto),
    path('product/photo/main/<int:id>/', fotoPrincipal),

]

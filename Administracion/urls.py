from django.urls import path

from Administracion.views import *
from Home.views import *

Administracion = [
    path('', dashboard),
    path('product/create/', creacion_productos),
    path('product/view/', ver_productos),
    path('product/view/<slug:slug>/', editar_producto),
    path('product/photo/<slug:slug>/', crearFoto),
    path('product/photo/delete/<int:id>/', eliminarFoto),
    path('product/photo/main/<int:id>/', fotoPrincipal),

]

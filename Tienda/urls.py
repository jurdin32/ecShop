from django.urls import path
from Tienda.views import *

Tienda = [
    path('tienda/create/', tienda_crear),
    path('tienda/view/', ver_tiendas),
    path('tienda/view/<slug:slug>/', editar_tienda),
    path('tienda/photo/<slug:slug>/', crear_imagen),
    path('tienda/disable/<int:id>/', deshabilitar_tienda),

]

from django.urls import path

from Home.views import *

Home = [
    path('', index),
    path('shop-brand/<slug:slug>/', tiendas),
    path('detail/<slug:slug>/', detalles_producto),
    path('single-category/<int:id>/', ver_porCategoria),
    path('category/', ver_todas_categorias),
    path('to_car/', enviar_carrito),
    path('registration/', registroClientes),
    path('registration/success/<slug:hash>/<int:id>/', registro_exitoso),
]

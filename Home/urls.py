from django.urls import path

from Home.views import *

Home = [
    path('', index),
    path('shop-brand/<slug:slug>/', tiendas),
    path('detail/<slug:slug>/', detalles_producto),
    path('single-category/<int:id>/', ver_porCategoria),
    path('category/', ver_todas_categorias),
    path('to_car/', enviar_carrito),
    path('this_car/', carrito_usuario),
    path('car/delete/<int:id>/', eliminar_carrito),

    path('to_list/', lista_deseos),
    path('registration/', registroClientes),
    path('registration/success/<slug:hash>/<int:id>/', registro_exitoso),
]

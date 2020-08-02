from django.urls import path

from Home.views import *

Home = [
    path('', index),
    path('plus/prod/<int:inicio>/<int:fin>/<int:categoria>/', cargar_mas_productos),

    path('shop-brand/<slug:slug>/', tiendas),
    path('detail/<slug:slug>/', detalles_producto),
    path('single-category/<int:id>/', ver_porCategoria),
    path('category/', ver_todas_categorias),
    path('detail/quickview/<int:id>/', quickview),


    path('to_car/', enviar_carrito),
    path('this_car/', carrito_usuario),
    path('car/delete/<int:id>/', eliminar_carrito),

    path('to_list/', lista_deseos),
    path('this_list/', ver_lista_deseos),
    path('list/delete/<int:id>/', eliminar_lista_deseos),
    path('list/delete/all/', eliminar_todos_deseos),
    path('search/<slug:nombre>/', busqueda),

    path('view/prom/<slug:slug>/', ver_comentarios),

    path('registration/', registroClientes),
    path('registration/success/<slug:hash>/<int:id>/', registro_exitoso),
]

from django.urls import path

from Home.views import *

Home = [
    path('', index),
    path('shop-brand/<slug:slug>/', tiendas),
    path('detail/<slug:slug>/', detalles_producto),
    path('single-category/<int:id>/', ver_porCategoria),
    path('category/', ver_todas_categorias),
]

from django.urls import path

from Home.views import *

Home = [
    path('', index),
    path('shop-brand/<slug:slug>/', tiendas),
    path('detail/<slug:slug>/', detalles_producto),
]

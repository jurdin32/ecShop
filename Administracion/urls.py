from django.urls import path

from Administracion.views import *
from Home.views import *

Administracion = [
    path('', dashboard),
    path('product/create/', creacion_productos),

]

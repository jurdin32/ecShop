from django.shortcuts import render

# Create your views here.
from Administracion.models import Pais, Provincia


def tienda_crear(request):
    contexto={
        "paises":Pais.objects.all(),
        "provincias":Provincia.objects.all()
    }
    return render(request, "Administracion/Tienda/crear_tiendas.html",contexto)
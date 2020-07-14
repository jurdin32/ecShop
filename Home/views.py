from django.shortcuts import render



# Create your views here.
from Tienda.models import Tiendas


def index(request):
    contexto={
        "tiendas":Tiendas.objects.all()
    }
    return render(request,"index.html",contexto)

def tiendas(request,slug):
    contexto={
        "tienda":Tiendas.objects.get(hashes=slug)
    }
    return render(request,"shop-brand.html",contexto)

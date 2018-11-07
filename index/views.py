from django.shortcuts import render
from django.http import HttpResponse

def indexView(request):
    #return HttpResponse('hello this is a test')
    return render(request, 'index.html')

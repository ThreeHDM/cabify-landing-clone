@extends('layouts.default')
@section('content')

<div class="container">

    @if (isset($message))
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="alert alert-success">
                <strong class="greetings">Gracias!</strong><br>
                {{$message}}
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <form style="display: inline" action="/" method="get">
                <div class="form-group">
                    <button class="btn btn-home">Home</button>
                </div>
            </form>
        </div>
        <div class="col-sm-1"></div>
    </div>
    @else
    <div class="row">
        <form method="POST" action="/prospects" accept-charset="UTF-8">
            @csrf
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div class="form-group ">
                        <label for="Nombre">Nombre</label>
                        <input class="form-control cust-text-rounded" placeholder="Ingrese el nombre" name="name" type="text" value="{{old('name')}}">

                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group ">
                        <label for="Apellido">Apellido</label>
                        <input class="form-control cust-text-rounded" placeholder="Ingrese el apellido" name="lastname" type="text" value="{{old('lastname')}}">
                        @error('lastname')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="form-group ">
                        <label for="Mail">Mail</label>
                        <input class="form-control cust-text-rounded" placeholder="Ingrese el mail" name="email" type="text" value="{{old('email')}}">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="form-group">
                        <button class="btn btn-send">Enviar</button>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>

        </form>
    </div>
    @endif


    @stop
@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Ingresar datos</p>
                        </div>
                        <div class="card-body">
                            {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}
                            <div class="row">
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
                                    @if ($errors->has('name'))
                                        <span class="error text-danger" for="inout-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="username" placeholder="Ingrese su usuario" value="{{ old('username') }}" autofocus>
                                    @if ($errors->has('username'))
                                        <span class="error text-danger" for="inout-name">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" value="{{ old('email') }}" autofocus>
                                    @if ($errors->has('email'))
                                        <span class="error text-danger" for="inout-name">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" value="{{ old('password') }}" autofocus>
                                    @if ($errors->has('password'))
                                        <span class="error text-danger" for="inout-name">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- Footer --}}
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

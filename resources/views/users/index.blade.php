@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Usuarios'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Usuarios</h4>
                                    <p class="card-category">Usuarios registrados</p>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))

                                    <div class="alert alert-success" role="success">
                                        {{ session('success')}}
                                    </div>
                                    @endif

                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('users.create') }}" class="btn btn-sm btn-facebook">Añadir Usuario</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>NOMBRE</th>
                                                <th>CORREO</th>
                                                <th>USERNAME</th>
                                                <th>CREATED_AT</th>
                                                <th class="text-right">ACCIONES</th>
                                            </thead>
                                            <tbody>
                                                @php($i = 1)
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info"> <i class="material-icons">person</i></a>
                                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warnig"> <i class="material-icons">edit</i></a>
                                                        <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display:inline-block;" onsubmit="return confirm('Desea eliminar?')">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger" type="submit"><i class="material-icons">close</i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.base')

@section('content')
    <div class="row">
        <h1 class="alert alert-success my-3 text-center">Listado de Pacientes</h1>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Paciente</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @foreach( $preparcial_Hopitales as $preparcial_Hopital)
                    <tr>
                        <td>{{$preparcial_Hopital->id}}</td>
                        <td>{{$preparcial_Hopital->name}}</td>
                        <td>{{$preparcial_Hopital->patients}}</td>
                        <td class="{{$preparcial_Hopital->status ? 'table-success' : 'table-danger'}} ">
                            {{$preparcial_Hopital->status ? 'Active' : 'Inactive'}}
                        </td>
                        <td><a
                                href="/hospitales/{{$preparcial_Hopital->id}}/edit"
                                class="btn btn-outline-success"
                            >
                                Edit
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="/hospitales/{{$preparcial_Hopital->id}}">
                                @csrf
                                @method('DELETE')
                                <input
                                    type="submit"
                                    class="btn btn-outline-danger"
                                    value="Delete"
                                    onclick="return confirm('Delete {{$preparcial_Hopital->name}}?')"
                                >
                            </form>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn btn-success" href="/hospitales/create">Create new Programming Language</a>
        </div>

    </div>
@endsection

@extends('layouts.base')

@section('content')
    <div class="row">
        <h1 class="alert alert-success my-3 text-center"> Edit {{$preparcial_hospital->name}}</h1>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="/hospitales/{{$preparcial_hospital->id}}">
                {{--Debe ser dentro del formulario - Agregar Cross Site Request Forgery--}}
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$preparcial_hospital->name}}">
                </div>
                <div class="mb-3">
                    <label for="patients" class="form-label">Paciente</label>
                    <textarea name="patients" class="form-control">{{old('patients', $preparcial_hospital->patients)}}</textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="status" name="status"
                        {{old('status',$preparcial_hospital->status) ? 'checked' : ''}}
                    >
                    <label class="form-check-label" for="status">¿Active?</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/hospitales" class="btn btn-danger">Back</a>

            </form>
        </div>
        @if($errors->any())
            <div class="row mt-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
@endsection

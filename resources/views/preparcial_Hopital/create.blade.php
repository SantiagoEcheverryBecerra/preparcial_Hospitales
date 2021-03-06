@extends('layouts.base')

@section('content')
    <div class="row">
        <h1 class="alert alert-success my-3 text-center"> Create new paciente</h1>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="/hospitales">
                {{--Debe ser dentro del formulario - Agregar Cross Site Request Forgery--}}
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                </div>
                <div class="mb-3">
                    <label for="patients" class="form-label">Paciente</label>
                    <textarea name="patients" class="form-control">{{old('patients')}}</textarea>
                </div>
                <div class="mb-3 form-check">
                    <input
                        type="checkbox"
                        class="form-check-input"
                        id="status" name="status"
                        {{old('status') ? 'checked': ''}}
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

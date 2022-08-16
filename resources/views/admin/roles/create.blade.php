@extends('dashboard')

@section('content')

<div class="m-auto pt-4 col-10 card ">
    <form action="{{route('roles.store')}}" method="POST">
        @csrf

        <div class="cad-header">
            <h2>Create New role</h2>
        </div>
        <div class="mb-3">
        <label for="">Nombre</label>
        <input type="text" name="role_name" id="role_name" class="form-control" placeholder="nombre">
        </div>

        <div class="mb-3">
        <label for="">slug</label>
        <input type="text" name="role_slug" id="role_slug" class="form-control" placeholder="nombre">
        </div>

        <!-- <div class="mb-4"> -->
        <button type="submit" class="btn btn-primary" name="btn-env">Guardar</button>
        <!-- </div> -->
    </form>
</div>

@endsection

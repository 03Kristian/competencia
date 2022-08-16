@extends('dashboard')

@section('content')

<div class="content">
     <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>rol</th>
                <th>slug</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($rol as $rol)
                <tr>
                    <th>{{$rol->id}}</th>
                    <th>{{$rol->name}}</th>
                    <th>{{$rol->slug}}</th>
                    <!-- <th>{{$rol->id}}</th> -->

                    <th>
                        <a href="#" class="btn btn-warning">E</a>

                        <form action="" method="post">
                            @method('DELETE')
                            
                            @csrf

                            <button type="button" class="btn btn-danger" >D</button>
                        </form>
                    </th>
    
                </tr>
            @endforeach
        </tbody>
     </table>
</div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{route('menus.create')}}" class="btn btn-success">Create Menu</a>
            </div>
        </div>

        @foreach ($models as $model)
            <div class="row">
                <div class="col">
                    {{ $model->name }}
                    <a href="{{route('menus.show',['menu'=>$model->id])}}" class="btn btn-link">Show</a>
                    <a href="{{route('menus.edit',['menu'=>$model->id])}}" class="btn btn-link">Update</a>
                </div>
            </div>
        @endforeach

        {{ $models->links() }}
    </div>

@endsection

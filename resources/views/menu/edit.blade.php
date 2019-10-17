@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Update Blog</div>
                    <div class="card-body">
                     {!! Form::model($model, [
                            'route' => ['menus.update', $model->id],
                            'method' => 'put',
                            'class' => 'form-horizontal',
                        ]) !!}
                        <fieldset>
                            @component('menu/_form', $__data)
                                <strong>Ой!</strong> Что-то пошло не так!
                            @endcomponent
                        </fieldset>
                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


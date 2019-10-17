<?php
/** @var $model \App\Models\Menu*/
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Menu</div>

                    <div class="card-body">
{{--                        @if ($errors->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                <ul>--}}
{{--                                    @foreach ($errors->all() as $error)--}}
{{--                                        <li>{{ $error }}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}

                        {!! Form::model($model, [
                            'route' => 'menus.store',
                            'class' => 'form-horizontal',
                        ]) !!}

                        <fieldset>
                            @component('menu/_form', $__data)
                                <strong>Ой!</strong>
                            @endcomponent
                        </fieldset>

                        {!! Form::close()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

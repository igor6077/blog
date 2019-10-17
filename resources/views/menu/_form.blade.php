   <!-- Parent-->
                                <div class="form-group">
                                {!! Form::label('parent_id', 'Parent:', ['class' => 'col-lg-2 control-label'] )  !!}
                                <div class="col-lg-10">
                                    {!!  Form::select(
                                        'parent_id',
                                        [],
                                        '',
                                        [
                                            'class' => 'form-control'.($errors->has('parent_id')?' is-invalid':'')
                                        ]
                                    ) !!}
                                @error('parent_id')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Name -->
                            <div class="form-group">
                                {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('name', $value = null, [
                                        'class' => 'form-control'. ($errors->has('name')?' is-invalid':''),
                                        'placeholder' => 'Name'
                                    ]) !!}

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                              <!-- Type-->
                                <div class="form-group">
                                {!! Form::label('type', 'Type:', ['class' => 'col-lg-2 control-label'] )  !!}
                                <div class="col-lg-10">
                                    {!!  Form::select(
                                        'type',
                                        $model::getTypes(),
                                        $model::TYPE_CATEGORY,
                                        [
                                            'class' => 'form-control'. ($errors->has('type')?' is-invalid':'')
                                        ]
                                    ) !!}
                                
                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <!-- Link -->
                            <div class="form-group">
                                {!! Form::label('link', 'Link:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('link', $value = null, [
                                        'class' => 'form-control'. ($errors->has('link')?' is-invalid':''),
                                        'placeholder' => 'Link'
                                    ]) !!}

                                    @error('link')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                             <!-- Sort -->
                            <div class="form-group">
                                {!! Form::label('sort', 'Sort:', ['class' => 'col-lg-2 control-label']) !!}
                                <div class="col-lg-10">
                                    {!! Form::number('sort', $value = null, [
                                        'class' => 'form-control'. ($errors->has('sort')?' is-invalid':''),
                                        'placeholder' => 'Sort'
                                    ]) !!}

                                    @error('sort')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <!-- Active -->
                            <div class="form-group form-check">
                                {!! Form::checkbox('active',1,null,[
                                    'class'=> ($errors->has('active')?' is-invalid':''),
                                    'id'=>'active'
                                ])!!}
                                {!! Form::label('active', 'Active status',
                                 [
                                'class' => 'form-check-label',
                                'for'=>'active'
                                ]) !!}

                                @error('active')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        <!-- Submit Button -->
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                {!! Form::submit('SAVE', ['class' => 'btn btn-md btn-success pull-right'] ) !!}
                                <a href="{{route('menus.index')}}" class="btn btn-md btn-info">Back</a>
                            </div>
                        </div>
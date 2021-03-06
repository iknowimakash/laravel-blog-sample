@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Post</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'user.store' , 'method' => 'post' , 'enctype' => 'multipart/form-data' ]) !!}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                {!! Form::label('name','Name' , array('class'=>'col-md-4 control-label')) !!}
                                <div class="col-md-6">
                                    {!! Form::text('text' ,null , array('id'=>'name' , 'class'=>'form-control', 'name'=>'name','autofocus')) !!}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('email','E-Mail Address' , array('class'=>'col-md-4 control-label')) !!}
                                <div class="col-md-6">
                                    {!! Form::email('email' ,null , array('id'=>'email' , 'class'=>'form-control', 'name'=>'email')) !!}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('password','Password' , array('class'=>'col-md-4 control-label')) !!}
                                <div class="col-md-6">
                                    {!! Form::password('password' , array( 'id'=>'password','class'=>'form-control', 'name'=>'password')) !!}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('contact','Phone Number' , array('class'=>'col-md-4 control-label')) !!}
                                <div class="col-md-6">
                                    {!! Form::text('text' ,null , array('id'=>'contact' , 'class'=>'form-control', 'name'=>'contact')) !!}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('gender','Gender' , array('class'=>'col-md-4 control-label')) !!}
                                <div class="col-md-6">
                                    {!! Form::select('gender',[''=>'-------------------------------','male'=>'Male','female'=>'Female'],null,['class'=>'form-control']) !!}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('dob','Date of Birth' , array('class'=>'col-md-4 control-label')) !!}
                                <div class="col-md-6">
                                    {!! Form::date('dob',null,array('id'=>'dob','class'=>'form-control')) !!}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('file','Select Profile Picture' , array('class'=>'col-md-4 control-label')) !!}
                                <div class="col-md-6">
                                    {!! Form::file('file',array('id'=>'file','class'=>'form-control')) !!}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <center>
                                    {!! Form::submit('Add User',array('class'=>'btn btn-primary','name'=>'submit')) !!}
                                </center>
                                <div class="clearfix"></div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
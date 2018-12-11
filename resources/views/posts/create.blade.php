@extends('layouts/app')

@section('content')
	<h1> Create posts</h1>
	{!! Form::open(['action' => 'PostsController@store','method' => 'POST','enctype' =>'multipart/form-data']) !!}
    	<div class="form-group">{{-- provide margin-bottom around a label and control pairing --}}
    		{{Form::label('title','Title')}}
    		{{Form::text('title','',['class' => "form-control",'placeholder' =>'Title'])}}	
    	</div>

    {{-- 	form-control => Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices --}}

    	<div class="form-group">
    		{{Form::label('body','Body')}}
    		{{Form::textarea('body','',['id'=>'article-ckeditor','class' => "form-control",'placeholder' =>'Body'])}}

    	</div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
    	{{Form::submit('Submit',['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}
	
@endsection 
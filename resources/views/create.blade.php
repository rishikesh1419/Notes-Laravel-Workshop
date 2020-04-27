@extends('layouts.app')

@section('content')

    <h1>Create Note</h1>

    {!! Form::open(['action' => 'NotesController@store', 'method' => "POST" ]) !!}
    
        <div class="form-group">

            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ["placeholder"=>'Title', "class"=>"form-control"])}}

        </div>

        <div class="form-group">
            {{Form::label('body', 'Note')}}
            {{Form::textarea('body', '', ["placeholder"=>'Note', "class"=>"form-control", "id" =>'summary-ckeditor'])}}

        </div>

        {{Form::submit('Create', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

    <script src="{{asset('ckeditor/ckeditor.js')}}">
    </script>
    <script>
        CKEDITOR.replace('summary-ckeditor')
    </script>

@endsection
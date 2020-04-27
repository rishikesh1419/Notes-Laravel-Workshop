@extends('layouts.app')

@section('content')

    <h1>Create Note</h1>

    {!! Form::open(['action' => ['NotesController@update', $note->id], 'method' => "POST" ]) !!}
    
        <div class="form-group">

            {{Form::label('title', 'Title')}}
            {{Form::text('title', $note->title, ["placeholder"=>'Title', "class"=>"form-control"])}}

        </div>

        <div class="form-group">
            {{Form::label('body', 'Note')}}
            {{Form::textarea('body', $note->body, ["placeholder"=>'Note', "class"=>"form-control", "id" =>'summary-ckeditor'])}}

        </div>

        {{Form::hidden('_method', "PUT")}}

        {{Form::submit('Done', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}

    <script src="{{asset('ckeditor/ckeditor.js')}}">
    </script>
    <script>
        CKEDITOR.replace('summary-ckeditor')
    </script>

@endsection
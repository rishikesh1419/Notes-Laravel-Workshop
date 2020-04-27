@extends('layouts.app')

@section('content')

        <div class="card" style="margin-bottom: 10px;">
        <div class="card-header">{{$note->title}}</div>
        <div class="card-body">
            <div class="card-title">
                {!!$note->body!!}
            </div>
        <footer class="blockquote-footer"><cite title="Source Title">Created at {{$note->created_at}}</cite></footer>
        <div class="card-title" style="margin-bottom: 0px; margin-top:10px;">
        <a href="/notes" class="btn btn-primary">Go Back</a>
        <a href="/notes/{{$note->id}}/edit" class="btn btn-warning">Edit Note</a>
            
        {!!Form::open(['action' => ['NotesController@destroy', $note->id], 'method'=>'POST', 'style' => 'margin-top:10px;']) !!}
    
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close() !!}
    </div>
    </div>
        </div>

@endsection
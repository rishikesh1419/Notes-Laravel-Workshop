@extends('layouts.app')

@section('content')

    @if(count($notes) > 0)
    <h1>Notes</h1>
    @foreach($notes as $note)
        <div class="card" style="margin-bottom: 10px;">
        {{-- <div class="card-header">{{$note->title}}</div> --}}
        <div class="card-body">
            <div class="card-title">
            <h4>{{$note->title}}</h4>
            </div>
        <footer class="blockquote-footer"><cite title="Source Title">Created at {{$note->created_at}}</cite></footer>
        <div class="card-title" style="margin-bottom: 0px; margin-top:10px;">
        <a href="/notes/{{$note->id}}" class="btn btn-primary">View Note</a>
        </div>
    </div>
        </div>
        @endforeach

        {{$notes->links()}}

    @else
        <p>No notes added!</p>
    @endif

@endsection
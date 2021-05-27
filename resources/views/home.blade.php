@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts ?? [] as $post)
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>

                <div class="card-body">
                    {{ $post->content }}
                    <hr>
                    <div style="text-align: right;">{{$post->user->name}} {{$post->created_at}}</div>
                </div>
                <div class="card-footer">
                    Komentarze:
                    <hr>
                    @foreach ($post->comments ?? [] as $komentarz)
                        <div>
                            <div><b>{{$komentarz->user->name}}</b></div>
                            <div>{{$komentarz->content}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection

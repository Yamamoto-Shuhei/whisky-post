@extends('layouts.app')

@section('content')
    @if(Auth::check())
        {{Auth::user()->name}}
    @else
    
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Whisky-post</h1>
                {{-- ユーザ登録ページのリンク --}}
                {!! link_to_route('signup.get','ユーザ登録ページ',[],['class'=>'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
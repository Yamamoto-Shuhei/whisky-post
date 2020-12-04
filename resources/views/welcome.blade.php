@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Whisky-post</h1>
            {{-- ユーザ登録ページのリンク --}}
            {!! link_to_route('signup.get','ユーザ登録ページ',[],['class'=>'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection
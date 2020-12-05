@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4 offset-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center">{{$user->name}}</h3>
                </div>
                <div class="card-body">
                    <img class="rounded img-fluid" src="{{ Gravatar::get($user->email,['size'=>500]) }}" alt="">
                </div>
            </div>
        </aside>
    </div>
    <div class="row">
        <div class="col-sm-8 offset-sm-2 mt-5">
            <ul class="nav nav-tabs nav-justified mb-3">
                <li class="nav-item"><a href="#" class="nav-link">投稿</a></li>
                <li class="nav-item"><a href="#" class="nav-link">フォロー</a></li>
                <li class="nav-item"><a href="#" class="nav-link">フォロワー</a></li>
                <li class="nav-item"><a href="#" class="nav-link">いいね</a></li>
            </ul>
        </div>
    </div>
@endsection
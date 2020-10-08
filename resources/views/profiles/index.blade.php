@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-3 p-5">
            <img src="/storage/{{$user->profile->image}}" alt="profile-img" class="w-100 rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{$user->username}}</h1>
                    <a href="{{route('posts.create')}}">Add a New Post</a>
                </div>

                <div class="d-flex">
                    <div class="pr-5"><strong>{{$postCount)}}</strong> posts</div>
                    <div class="pr-5"><strong>{{$followerCount}}</strong> followers</div>
                    <div class="pr-5"><strong>{{$followingCount}}</strong> following</div>
                </div>
                <div class="pt-1 font-weight-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
    @foreach($user->posts as $post)
        <div class="col-4"><img src="/storage/{{$post->image}}" class="w-100" alt=""></div>
    @endforeach
    </div>
</div>
@endsection

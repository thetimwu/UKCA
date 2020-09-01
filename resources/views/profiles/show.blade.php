@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-3 p-5">
                <img src="{{$user->profile->profileImage()}}" alt="profile-img" class="w-100 rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="h4">{{$user->username}}</div>
                    {{$user->id}}
                    <div id="react-button" data-userid="{{$user->id}}">
                    <FollowButton />
                    </div>

                    @can('update', $profile)
                      <a href="{{route('posts.create')}}">Add New Post</a>
                    @endcan
                </div>
                @can('update', $profile)
                  <a href="{{route('profiles.edit', ['user'=>$user, 'profile'=> $profile])}}">Edit Profile</a>
                @endcan
                <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts()->count()}}</strong> posts</div>
                    <div class="pr-5"><strong>123</strong> followers</div>
                    <div class="pr-5"><strong>123</strong> following</div>
                </div>
                <div class="pt-1 font-weight-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div><a href="#">{{$user->profile->url ?? 'N/A'}}</a></div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
    @foreach($user->posts as $post)
        <div class="col-4 pb-4">
        <a href="{{route('posts.show', ['post'=> $post->id])}}">
            <img src="/storage/{{$post->image}}" class="w-100" alt="">
          </a>
        </div>
    @endforeach
    </div>
</div>
@endsection

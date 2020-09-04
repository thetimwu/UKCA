@extends('layouts.app')

@section('content')
<div class="container">
  @foreach ($posts as $post)
      <div class="row">
        <div class="col-6 offset-3">
          <a href="{{route('profiles.show', ['profile'=>$post->user->id])}}">
              <img src="/storage/{{$post->image}}" class="w-100" alt="">
          </a>
        </div>
      </div>
      <div class="row pt-2 pb-b">
        <div class="col-6 offset-3">
          <div>
            <p>
                <span class="font-weight-blod">
                  <a href="{{route('profiles.show', ['profile'=>$post->user->id])}}">
                    <span class="text-dark">{{$post->user->username}}</span>
                  </a>
                </span> {{$post->caption}}
            </p>
          </div>
        </div>
      </div>
  @endforeach

  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      {{$posts->links()}}
    </div>
  </div>
</div>
@endsection
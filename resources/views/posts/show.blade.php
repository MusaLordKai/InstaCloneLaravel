@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 40px;">
                    </div>
                    <div class="font-weight-bold">
                        <a class="text-decoration-none" href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}} |</span>
                        </a>
                    <a href="#" class="ps-3 text-decoration-none">Follow</a>
                    </div>
                </div>
                <hr>
                <p>{{$post->caption}}</p>
            </div>
        </div>
   </div>
</div>
@endsection
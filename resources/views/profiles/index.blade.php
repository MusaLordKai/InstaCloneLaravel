@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="overflow-hidden col-3>
            <img src="/svg/post2.jpg" style="width:100px; height:100px" class="rounded-circle" />
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href=#>Add New Post</a>
            </div>
            <div class="d-flex">
                <div class=""><strong>153</strong> posts</div>
                <div class="ps-5"><strong>23k</strong> followers</div>
                <div class="ps-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>    
        </div>
    </div>
    <div class="row pt-5">
       <div class="col-4">
            <img src="/svg/post.jpg" class="w-100"  />
       </div>
       <div class="col-4">
            <img src="/svg/post.jpg" class="w-100"  />
       </div>
       <div class="col-4">
            <img src="/svg/post.jpg" class="w-100"  />
       </div>
    </div>
</div>
@endsection

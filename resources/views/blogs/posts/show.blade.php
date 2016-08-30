@extends('layouts.master')

@section('title', 'Post Content')

@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{asset('img/post-bg.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{$title}}</h1>
                        <span class="meta">Posted by {{$author}} on {{$date}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {{$content}}
                    <a href="#">
                        <img class="img-responsive" src="{{asset('img/post-sample-image.jpg')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </article>




    <!-- Blog Comments -->

    <!-- Comments Form -->
    <div class="well">
        <h4>Leave a Comment:</h4>
        <form role="form">
            <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <hr>

    <!-- Posted Comments -->

    @foreach ($comments as $comment)
        <!-- Comment -->
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">{{$comment->nickname}}
                    <small>{{$comment->updated_at}}</small>
                </h4>
                {{$comment->content}}

            </div>
        </div>
    @endforeach

 @endsection
@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{ $post->title }}
                    </div>
                    <div class="card-body">

                        {{ $post->description }}
                        <div class="row  mt-5 ">
{{--                            @foreach($post->photos as $photo)--}}
{{--                                <div class="col-2 ">--}}
{{--                                    <img src=" {{asset('storage/photo/'.$photo->name)}}" width="100%" height="100%"  alt="">--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
                        </div>
                        <hr>
                        <a href="{{ route('post.index') }}" class="btn btn-primary">Read All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

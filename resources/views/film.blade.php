@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2 class="panel-heading">{{{$film->name}}}</h2>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-justify">
                                <b>Synopsis</b> : {{{$film->description}}}
                            </p>
                            <hr>
                            <h5><b>Release Date</b> : {{{ date('d M, Y',strtotime($film->release_date)) }}}</h5>
                            <h5><b>Countries</b> : {{{ $film->country}}}</h5>

                        </div>
                        <div class="col-md-4 text-center">
                            <img class="card-img-top" src="@if(@is_file(storage_path('app/public/'.$film->files[0]->path))){{{'../storage/'.$film->files[0]->path}}}@else http://placehold.it/700x400 @endif" alt="@if(@isset($film->files[0])){{{$film->files[0]->name}}}@endif">
                            <br>
                            <small class="text-muted" title="{{{$film->rating}}}">
                                @for($i = 1; $i<=5; $i++)
                                    @if($i <= $film->rating)
                                        ★
                                    @else ☆
                                    @endif
                                @endfor
                            </small>({{{$film->rating}}})
                            <h5><b>Price</b> : ${{{ $film->ticket_price }}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Comments</h3>

                    <div class="row">
                        <div class="col-lg-12">
                            @if (Auth::guest())
                                <div class="text-center"><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to add Comments...</div>
                            @else
                                <form action="/films/{{{$film->id}}}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" name="name" placeholder="your name..." class="col-lg-12" required>
                                    <br>
                                    <br>
                                    <textarea name="message" class="col-lg-12" required></textarea>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="text-right"><input type="submit" value="Add Comment"></div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    @foreach($comments as $comment)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-left"><b>{{{$comment->name}}}</b></div>
                            <div class="text-justify">{{{$comment->comment}}}</div>
                        </div>
                    </div>
                        <hr>
                    @endforeach

                </div>
            </div>



        </div>
    </div>
</div>














@endsection
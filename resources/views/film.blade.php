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

        </div>
    </div>
</div>














@endsection
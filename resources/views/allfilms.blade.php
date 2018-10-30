@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Films</div>

                <div class="panel-body">
                    @foreach( $movies as $i=>$film)
                        @if($i%3 == 0)
                    <div class="row">
                        @endif
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="films/{{{ $film->slug }}}">
                               <img class="card-img-top" src="@if(@is_file('storage/app/public'.$film->photo)){{{'storage/app/public'.$film->photo}}}@else http://placehold.it/700x400 @endif" alt="@if(@isset($film->photo)){{{$film->photo}}}@endif">
                              	
                              </a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="films/{{{ $film->slug }}}">{{{ $film->name }}}</a>
                                    </h4>
                                    <h5>${{{ $film->ticket_price }}}</h5>
                                    <p class="card-text text-justify">{{{ str_limit($film->description,150),'...' }}}</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted" title="{{{$film->rating}}}">
                                        @for($i = 1; $i<=5; $i++)
                                            @if($i <= $film->rating)
                                                ★
                                            @else ☆
                                            @endif
                                        @endfor
                                    </small>({{{$film->rating}}})
                                </div>
                            </div>
                        </div>
                        @if(($i+1)%3 == 0)
                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
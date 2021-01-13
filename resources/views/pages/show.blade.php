@extends('layouts.app')

@section('content')
<div class="row all">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span>
                    Advert by {{ $advert->title }}
                    @if($advert->user_id == Auth::id())
                        <small>
                            <a href="/adverts/{{$advert->id}}/edit">Edit..</a>
                        </small>
                    @endif
                </span>
                <span class="pull-right">
                    {{ $advert->created_at->diffForHumans() }}
                </span>
            </div>
            <div class="panel-body">
                {{ $advert->content }}
            </div>

        </div>
    </div>
</div>
@endsection
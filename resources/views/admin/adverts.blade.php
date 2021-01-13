@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-2"></div>
        <div class="col-8">
            <div class="row">
                @forelse($adverts as $advert)
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span>{{ $advert->title }}</span>
                            <span class="pull-right">
                                {{ $advert->created_at->diffForHumans() }}
                            </span>
                        </div>
                        <div class="panel-body">
                            <p>
                                {{ $advert->shortContent }}
                            <a href="/adverts/{{$advert->id}}">Read more..</a>
                            </p>
                        </div>
                        <div class="panel-footer clearfix" style="background-color:#fff;">
                                <form action="/adverts/{{$advert->id}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            <i class="fa fa-heart pull-right"></i>
                        </div>
                    </div>
                </div>
                @empty
                    NO Article available.
                @endforelse
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    {{ $adverts->links() }}
                </div>
            </div>
        </div>
    <div class="col-2"></div>
</div>

@endsection
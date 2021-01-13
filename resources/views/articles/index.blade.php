@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-2"></div>
		<div class="col-8">
			<div class="row">
				@forelse($articles as $article)
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span>{{ $article->title }}</span>
							<span class="pull-right">
								{{ $article->created_at->diffForHumans() }}
							</span>
						</div>
						<div class="panel-body">
							<p>
								{{ $article->shortContent }}
							<a href="/articles/{{$article->id}}">Read more..</a>
							</p>
						</div>
						<div class="panel-footer clearfix" style="background-color:#fff;">
							@if($article->user_id == Auth::id())
								<form action="/articles/{{$article->id}}" method="POST">
									{{csrf_field()}}
									{{method_field('DELETE')}}
									<button class="btn btn-danger btn-sm">
										<i class="fa fa-trash"></i>
									</button>
								</form>
							@endif
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
					{{ $articles->links() }}
				</div>
			</div>
		</div>
	<div class="col-2"></div>
</div>

@endsection
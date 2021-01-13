@extends('admin.layout.app')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<span>
					Article by {{ $article->name }}
					
						<small>
							<a href="adminE/articles/{{$article->id}}/edit">Edit..</a>
						</small>
					
				</span>
				<span class="pull-right">
					{{ $article->created_at->diffForHumans() }}
				</span>
				<span class="pull-left">
					{{ $article->title }}
				</span>
			</div>
			<div class="panel-body">
				{{ $article->content }}
			</div>
			<div class="panel-footer">
				<form method="POST" action="adminD/articles/{{$article->id}}">
					{{csrf_field()}}
					{{method_field('DELETE')}}
					<button class="btn btn-danger btn-sm">
						<i class="fa fa-trash"></i>
					</button>
				</form>
				<small class="pull-right">{{$article->category}}</small>
			</div>
		</div>
	</div>
</div>
@endsection
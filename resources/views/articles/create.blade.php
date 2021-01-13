@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				Create Post
			</div>
			<div class="panel-body">
				<form action="/articles" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="title">Post Title</label>
						<input type="text" name='title' class="form-control" />
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea name="content" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="category">Post type</label>
						<select name="category" id="category">
							<option value=""></option>
							<option value="Technology">Technology</option>
							<option value="Entertainment">Entertainment</option>
							<option value="Education">Education</option>
							<option value="News">News</option>
							<option value="Others">Others</option>
						</select>
					</div>
					<div class="checkbox">
						<label for="live">
							<input type="checkbox" name="live" />
							Live
						</label>
						
					</div>
					<div class="form-group">
						<label for="post_on">Posted On</label>
						<input type="datetime-local" class="form-control" name='post_on' />
					</div>
				<input type="submit" class="btn btn-success" />
				</form>

			</div>

		</div>
	</div>
</div>
@endsection
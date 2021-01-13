@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 all">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    <h5>Promote your Product..</h5>
                    <span class="pull-right">
                        <a href="/" class="btn btn-default">Back Home</a>
                    </span>
                </div>

                <div class="panel-body">
                    <form action="/adverts" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Adverts Title</label>
                            <input type="text" name='title' class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                        <div class="checkbox">
                           <label for="link">Link</label>
                           <input type="link" name="link" class="form-control">
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
</div>
@endsection

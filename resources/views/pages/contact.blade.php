@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 all">
            <div class="panel panel-default">
                 <div class="panel-heading">
                    <h5>Contact us</h5>
                    <span class="pull-right">
                        <a href="/" class="btn btn-default">Back Home</a>
                    </span>
                </div>

                <div class="panel-body">
                    <form action="/send/email" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name='name' class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name='email' class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name='message' class="form-control"></textarea> 
                        </div>
                        <input type="submit" class="btn btn-success btn-block" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   <h3> {{ $name }} </h3> 
                   <h5>your age is {{ $myAge }}</h5>
                    You are logged in! {{ $auth->email }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

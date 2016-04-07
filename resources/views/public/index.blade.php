@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <p>Login for account with sample data:</p>

                    <div class="well">
                        <strong>E-Mail: </strong>admin@strengthpen.de<br/>
                        <strong>Password: </strong>strengthpen<br/>
                    </div>

                    <p>There are some sample plans filled with examples</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

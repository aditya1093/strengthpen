@extends('layouts.master')

@section('title')
    My Plans
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add a new plan</div>

                <div class="panel-body">
                    <form action="{{ url('plan') }}" method="POST" class="form-horizontal">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="plan-name" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="plan-name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="plan-description" class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="plan-description" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i> Add Plan
                                </button>
                            </div>
                        </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">My Plans</div>

                <div class="panel-body">
                    @if(count($plans) !== 0)
                        @foreach ($plans as $plan)
                        <div class="col-md-4">
                            <div>{{ $plan->name }}</div>
                            <div>{{ $plan->description }}</div>
                        </div>
                        @endforeach
                    @else
                        <div>You haven't added any plans yet.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

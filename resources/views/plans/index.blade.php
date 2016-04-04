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
                    @include('errors.common')

                    <form action="{{ url('/plan') }}" method="POST" class="form-horizontal">
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
                                <input type="text" name="description" id="plan-description" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-plus"></i> Add Plan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">My Plans</div>

                <div class="panel-body">
                    @if(count($plans) !== 0)
                        @foreach ($plans as $plan)
                        <div class="plan plan-{{ $plan->id }}  panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{ $plan->name }}</h3>
                            </div>
                            <div class="panel-body">
                                {{ $plan->description }}
                            </div>
                            <div class="panel-footer">
                                <form class="inline-btn-form" action="{{ url('/plan/'.$plan->id) }}" method="POST">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i> Delete
                                    </button>
                                </form>

                                <button class="btn btn-primary" data-toggle="modal" data-target=".bs-edit-plan-modal"
                                        data-form-action="{{ url('/plan/'.$plan->id) }}"
                                        data-plan-name="{{ $plan->name }}"
                                        data-plan-description="{{ $plan->description }}">
                                    <i class="fa fa-btn fa-pencil"></i> Edit
                                </button>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div>You haven't added any plans yet.</div>
                    @endif
                </div>
            </div>

            <div class="modal fade bs-edit-plan-modal" tabindex="-1" role="dialog">
                <form id="updateForm" action="" method="POST">
                    {!! csrf_field() !!}
                    {!! method_field('PUT') !!}

                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Edit Plan</h4>
                            </div>

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="new-plan-name" class="col-sm-3 control-label">Name</label>
                                    <div>
                                        <input type="text" name="name" id="new-plan-name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="new-plan-description" class="col-sm-3 control-label">Description</label>
                                    <div>
                                        <input type="text" name="description" id="new-plan-description" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-btn fa-close"></i> Close</button>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-floppy-o"></i> Save changes</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </form>
            </div><!-- /.modal -->

        </div>
    </div>
</div>
@endsection

@extends('layouts.master')

@section('title')
    My Plans
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @include('errors.common')

            <!-- Title and Toolbar -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title pull-left"><strong>My Plans</strong></h3>
                    <div class="panel-toolbar pull-right">
                        <div class="btn-group" role="group" aria-label="...">
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-add-plan-modal">
                                <i class="fa fa-btn fa-plus"></i> Add Plan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Show all plans -->
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
                                <form class="inline-block" action="{{ url('/plan/'.$plan->id) }}" method="POST">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}

                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fa fa-btn fa-trash"></i> Delete
                                    </button>
                                </form>

                                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-edit-plan-modal"
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

            <!-- Modals -->
            @include('plans.modals.add-plan')
            @include('plans.modals.edit-plan')
        </div>
    </div>
</div>
@endsection

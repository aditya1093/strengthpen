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
                    <h3 class="panel-title pull-left"><strong>{{ $plan->name }}</strong></h3>
                    <div class="panel-toolbar pull-right">
                        <!-- Return to previous page -->
                        <a class="btn btn-sm btn-default" href="javascript:history.go(-1)">
                            <i class="fa fa-btn fa-arrow-left"></i> Go Back
                        </a>

                        <!-- Toggle "Add Plan"-Modal with plan data -->
                        <button class="btn btn-sm btn-primary"
                                data-toggle="modal"
                                data-target=".bs-add-day-modal">
                            <i class="fa fa-btn fa-plus"></i> Add Day
                        </button>

                        <!-- Toggle "Edit Plan"-Modal with plan data -->
                        <button class="btn btn-sm btn-primary"
                                data-toggle="modal"
                                data-target=".bs-edit-plan-modal"
                                data-form-action="{{ url('/plan/'.$plan->id) }}"
                                data-plan-name="{{ $plan->name }}"
                                data-plan-description="{{ $plan->description }}">
                            <i class="fa fa-btn fa-pencil"></i> Edit
                        </button>

                        <!-- Toggle "Delete Plan"-Modal with plan data -->
                        <button class="btn btn-sm btn-danger"
                                data-toggle="modal"
                                data-target=".bs-delete-plan-modal"
                                data-form-action="{{ url('/plan/'.$plan->id) }}">

                            <i class="fa fa-btn fa-trash"></i> Delete
                        </button>
                    </div>
                </div>

                <!-- Show all plans -->
                <div class="panel-body">
                    {{ $plan->description }}
                </div>
            </div>

            <!-- TODO: Show all days of the selected plan -->

            <!-- Modals -->
            @include('plans.modals.edit-plan')
            @include('plans.modals.delete-plan')
        </div>
    </div>
</div>
@endsection

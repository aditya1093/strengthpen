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
                        <a class="btn btn-sm btn-default" href="{{ url('/plans') }}">
                            <i class="fa fa-btn fa-arrow-left"></i> Go back
                        </a>

                        <!-- Toggle "Add Plan"-Modal with plan data -->
                        <button class="btn btn-sm btn-primary"
                                data-toggle="modal"
                                data-target=".bs-add-day-modal">
                            <i class="fa fa-btn fa-plus"></i> Add days
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

                <div class="panel-body">
                    {{ $plan->description }}
                </div>
            </div>

            <!-- Show all days of the selected plan -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title pull-left">Your Days</h3>
                </div>

                <div class="panel-body">
                    @if(count($days) !== 0)
                        @foreach ($days as $day)
                            <div class="day day-{{ $day->id }} panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Day {{ $day->id }}</h3>
                                </div>
                                <div class="panel-body">
                                    <!-- TODO: Show blocks of day -->
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div>You haven't added any days yet.</div>
                    @endif
                </div>
            </div>

            <!-- Modals -->
            @include('plans.modals.add-day')
            @include('plans.modals.edit-plan')
            @include('plans.modals.delete-plan')
        </div>
    </div>
</div>
@endsection

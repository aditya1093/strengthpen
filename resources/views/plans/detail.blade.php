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
                                data-target=".bs-add-days-modal">
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

                @if(count($days) !== 0)
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Just hover over a day to see what you can do with it :)
                    </div>
                @endif

                <div class="panel-body">
                    @if(count($days) !== 0)
                        @for ($i = 0; $i < count($days); $i++)
                            <div class="days day-{{ $i+1 }} panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        Day {{ $i+1 }}
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    @if($days[$i]->title)
                                        <div class="day-title"><strong>{{ $days[$i]->title }}</strong></div>
                                    @endif
                                    @if($days[$i]->date != '0000-00-00')
                                        <div class="day-date">{{ date('M j, Y', strtotime($days[$i]->date)) }}</div>
                                    @endif
                                    <div class="actions-overlay">
                                        <div class="actions-overlay-btns">
                                            <!-- Toggle "Delete Day"-Modal with day data -->
                                            <button class="btn btn-sm btn-danger"
                                                    data-toggle="modal"
                                                    data-target=".bs-delete-day-modal"
                                                    data-form-action="{{ url('/day/'.$days[$i]->id) }}">
                                                <i class="fa fa-btn fa-trash"></i> Delete
                                            </button>

                                            <!-- Toggle "Edit Day"-Modal with day data -->
                                            <button class="btn btn-sm btn-primary"
                                                    data-toggle="modal"
                                                    data-target=".bs-edit-day-modal"
                                                    data-form-action="{{ url('/day/'.$days[$i]->id) }}"
                                                    data-day-title="{{ $days[$i]->title }}"
                                                    data-day-date="{{ $days[$i]->date }}">
                                                <i class="fa fa-btn fa-pencil"></i> Edit
                                            </button>

                                            <!-- Toggle "View Day"-Modal with day data -->
                                            <button class="btn btn-sm btn-default"
                                                    data-toggle="modal"
                                                    data-target=".bs-view-day-modal"
                                                    data-day-title="{{ $days[$i]->title }}">
                                                <i class="fa fa-btn fa-eye"></i> View
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    @else
                        <div>You haven't added any days yet.</div>
                    @endif
                </div>
            </div>

            <!-- Plan-related Modals-->
            @include('plans.modals.add-days')
            @include('plans.modals.edit-plan')
            @include('plans.modals.delete-plan')

            <!-- Day-related Modals -->
            @include('days.modals.edit-day')
            @include('days.modals.delete-day')
            @include('days.modals.view-day')
        </div>
    </div>
</div>
@endsection

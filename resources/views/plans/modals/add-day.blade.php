<div class="modal bs-add-day-modal" tabindex="-1" role="dialog">
    <form id="addDayForm" action="{{ url('/day/'.$plan->id) }}" method="POST">
        {!! csrf_field() !!}

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add Days</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="amount-of-days" class="control-label">How many days would you like to add?</label>
                        <div>
                            <select class="form-control" name="amount">
                                @for ($i = 1; $i <= 90; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-btn fa-close"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-plus"></i> Add days</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </form>
</div><!-- /.modal -->

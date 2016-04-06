<div class="modal bs-edit-day-modal" tabindex="-1" role="dialog">
    <form id="updateDayForm" action="" method="POST">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Day</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="new-day-title" class="col-sm-3 control-label">Title</label>
                        <div>
                            <input type="text" name="title" id="new-day-title" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="new-day-date" class="col-sm-3 control-label">Date (Y-M-D)</label>
                        <div>
                            <input type="text" name="date" id="new-day-date" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="new-day-schedule" class="col-sm-3 control-label">Schedule</label>
                        <div>
                            <textarea type="text" name="schedule" id="new-day-schedule" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-btn fa-close"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-floppy-o"></i> Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </form>
</div><!-- /.modal -->

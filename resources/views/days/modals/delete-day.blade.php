<div class="modal bs-delete-day-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete Day</h4>
                </div>

                <div class="modal-body">
                    <p>
                        Do you really want to delete this day?
                    </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-btn fa-close"></i> Cancel</button>
                    <form id="deleteDayForm" class="inline-block" action="" method="POST">
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}

                        <input type="hidden" id="planId" name="planId" value="">

                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-btn fa-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

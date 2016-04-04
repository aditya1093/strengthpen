<div class="modal fade bs-add-plan-modal" tabindex="-1" role="dialog">
    <form id="addForm" action="/plan" method="POST">
        {!! csrf_field() !!}
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add Plan</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="new-plan-name" class="col-sm-3 control-label">Name</label>
                        <div>
                            <input type="text" name="name" id="plan-name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new-plan-description" class="col-sm-3 control-label">Description</label>
                        <div>
                            <input type="text" name="description" id="plan-description" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-btn fa-close"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-plus"></i> Add plan</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </form>
</div><!-- /.modal -->

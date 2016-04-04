$(document).ready(function() {
    (function() {
        open_edit_plan_modal();
    })();

    function open_edit_plan_modal() {
        $('.bs-edit-plan-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var btnData = button.data();

            var formAction      = btnData.formAction;
            var planName        = btnData.planName;
            var planDescription = btnData.planDescription;

            var modal  = $(this);
            modal.find('#updateForm').attr( "action", formAction);
            modal.find('.modal-title').html('Edit Plan <strong>' + planName + '</strong>');
            modal.find('#new-plan-name').val(planName);
            modal.find('#new-plan-description').val(planDescription);
        });
    }
});

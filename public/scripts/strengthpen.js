$(document).ready(function() {
    /**
     * Run functions on document.ready()
     */
    (function() {
        edit_plan_modal();
        delete_plan_modal();
    })();

    /**
     * Fills the modal with the data from the chosen plan
     * to enable editing
     */
    function edit_plan_modal() {
        $('.bs-edit-plan-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var btnData = button.data();

            var formAction      = btnData.formAction;
            var planName        = btnData.planName;
            var planDescription = btnData.planDescription;

            var modal  = $(this);
            modal.find('#updatePlanForm').attr( "action", formAction);
            modal.find('.modal-title').html('Edit Plan <strong>' + planName + '</strong>');
            modal.find('#new-plan-name').val(planName);
            modal.find('#new-plan-description').val(planDescription);
        });
    }

    /**
     * Fills the modal with the data from the chosen plan
     * to enable deletion
     */
    function delete_plan_modal() {
        $('.bs-delete-plan-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var btnData = button.data();

            var formAction      = btnData.formAction;

            var modal  = $(this);
            modal.find('#deletePlanForm').attr( "action", formAction);
        });
    }
});

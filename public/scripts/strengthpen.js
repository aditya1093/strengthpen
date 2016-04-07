$(document).ready(function() {
    /**
     * Run functions on document.ready()
     */
    (function() {
        edit_plan_modal();
        edit_day_modal();
        delete_plan_modal();
        delete_day_modal();
        view_day_modal();
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
     * Fills the modal with the data from the chosen day
     * to enable editing
     */
    function edit_day_modal() {
        $('.bs-edit-day-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var btnData = button.data();

            var formAction      = btnData.formAction;
            var dayTitle        = btnData.dayTitle;
            var dayDate         = btnData.dayDate;
            var daySchedule     = btnData.daySchedule;

            var modal  = $(this);
            modal.find('#updateDayForm').attr( "action", formAction);
            modal.find('#new-day-title').val(dayTitle);
            modal.find('#new-day-date').val(dayDate);
            modal.find('#new-day-schedule').text(daySchedule);
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

    /**
     * Fills the modal with the data from the chosen day
     * to enable deletion
     */
    function delete_day_modal() {
        $('.bs-delete-day-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var btnData = button.data();

            var formAction      = btnData.formAction;

            var modal  = $(this);
            modal.find('#deleteDayForm').attr( "action", formAction);
        });
    }

    /**
     * Fills the modal with the data from the chosen day
     * to enable viewing
     */
    function view_day_modal() {
        $('.bs-view-day-modal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var btnData = button.data();

            var dayTitle        = btnData.dayTitle;
            var daySchedule     = btnData.daySchedule;

            var modal  = $(this);
            modal.find('.modal-title').html('<strong>'+dayTitle+'</strong>');
            modal.find('#day-schedule').html('<pre>'+daySchedule+'</pre>');
        });
    }
});

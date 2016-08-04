/*
 * @file
 * JavaScript for aaap conference.
 *
 */
(function ($) {
    $(document).ready(function () {

        var members_only_copy = $('.formulario-conferencias .members_only_wrappers').html();
        $(members_only_copy).appendTo('.formulario-conferencias .general-sessions .form-radios .form-item:first-child');

        var non_members_only_copy = $('.formulario-conferencias .non_members_only_wrappers').html();
        $(non_members_only_copy).appendTo('.formulario-conferencias .general-sessions .form-radios .form-item:last-child');

        var non_members_only_copy = $('.formulario-conferencias .precourse_wrappers').html();
        $(non_members_only_copy).appendTo('.formulario-conferencias .precourse .form-checkboxes .form-item:first-child');

        var non_members_only_copy = $('.formulario-conferencias .celia_king_dinner_wrappers').html();
        $(non_members_only_copy).appendTo('.formulario-conferencias .networking_events .form-radios .form-item:first-child');

        var celia_king_dinner_copy = $('.formulario-conferencias .celia_king_dinner_wrappers').html();
        $(celia_king_dinner_copy).appendTo('.formulario-conferencias .networking_events_celia_king_dinner .form-checkboxes .form-item:first-child');

        var celia_king_dinner_guest_copy = $('.formulario-conferencias .celia_king_dinner_guest_wrappers').html();
        $(celia_king_dinner_guest_copy).appendTo('.formulario-conferencias .networking_events_celia_king_dinner_guest .form-checkboxes .form-item:first-child');

        var dinner_groups_copy = $('.formulario-conferencias .dinner_groups_wrappers').html();
        $(dinner_groups_copy).appendTo('.formulario-conferencias .networking_events_dinner_groups .form-checkboxes .form-item:first-child');

        var golf_outing__copy = $('.formulario-conferencias .golf_outing_wrappers').html();
        $(golf_outing__copy).appendTo('.formulario-conferencias .networking_events_golf_outing .form-checkboxes .form-item:first-child');

        var member_attendee_paired_with_mentor_copy = $('.formulario-conferencias .member_attendee_paired_with_mentor_wrappers').html();
        $(member_attendee_paired_with_mentor_copy).appendTo('.formulario-conferencias .mentoring_program .form-radios .form-item:first-child');

        var member_attendee_serving_as_mentor_copy = $('.formulario-conferencias .member_attendee_serving_as_mentor_wrappers').html();
        $(member_attendee_serving_as_mentor_copy).appendTo('.formulario-conferencias .mentoring_program .form-radios .form-item:last-child');

        var dietary_restrictions_copy = $('.formulario-conferencias .dietary_restrictions_wrappers').html();
        $(dietary_restrictions_copy).appendTo('.formulario-conferencias .dietary_restrictions label:first-child');

        var dietary_restrictions_copy = $('.formulario-conferencias .guest_dietary_restrictions_wrappers').html();
        $(dietary_restrictions_copy).appendTo('.formulario-conferencias .guest_dietary_restrictions label:first-child');

        //-> Set Labels On dinner.
        $(".formulario-conferencias .networking-events-dinner-groups-labels div").each(function (i) {
            var span = $(this);
            var relid = span.attr("relid");
            var label = span.html();
            $("label[for=" + relid + "]").html(label);
        });


        //-> Set prices On dinner.
        $(".formulario-conferencias .networking-events-dinner-groups-prices div").each(function (i) {
            var span = $(this);
            var relid = span.attr("relid");
            var price = span.html();
            $("label[for=" + relid + "]").append(price);
        });

        var proceed = localStorage.getItem('proceed');
        if (proceed == "proceed_as_non_member") {

        } else {
            $('a.login').click();
        }
        $('#edit-submitted-i-want-to-add-a-free-membership-1').click(function () {
            if (this.checked) {
                //console.log("//-> Checked.");
                $(".formulario-conferencias .free-membership-application-request").show();
            } else {
                //console.log("//-> No Checked.");
                $(".formulario-conferencias .free-membership-application-request").hide();
            }
        });

        if (!$("body").hasClass("logged-in")) {
            var messages = false;
            if (jQuery('.messages.error').length > 0) {
                var messages = true;
            } else {
                var messages = false;
            }
            if (!messages) {
                // Clear the Form.
                jQuery('.formulario-conferencias :input[type="text"]').not(':button, :submit, :reset, :hidden').val('');
                jQuery('.formulario-conferencias :input[type="email"]').not(':button, :submit, :reset, :hidden').val('');
                jQuery('.formulario-conferencias :input').not(':button, :submit, :reset, :hidden').text('');
                jQuery('.formulario-conferencias :input').not(':button, :submit, :reset, :hidden, #edit-submitted-general-sessions-1, #edit-submitted-general-sessions-2').removeAttr('checked');
                jQuery('.formulario-conferencias :input').not(':button, :submit, :reset, :hidden, #edit-submitted-general-sessions-1, #edit-submitted-general-sessions-2').removeAttr('selected');
            }
        }

    });
})(jQuery);
/*
 * @file
 * JavaScript for Manage Renewal Process.
 *
 */
(function ($) {
    $(document).ready(function () {
        var $el = $('.messages_send_test_reminder_emails');
        $el.css('display', 'none');
        Drupal.ajax.prototype.commands.responseRenewalSendTestReminderEmailform = function (ajax, response, status) {
            var res = response.data;
            var content = res.msg;
            if(res.sent){
                $el.addClass('status');
                $el.removeClass('warning');
            }else{
                $el.addClass('warning');
                $el.removeClass('status');
            }
            $('.message_content', $el).html(content);
            $el.css('display', 'block');
        };
    });
})(jQuery);
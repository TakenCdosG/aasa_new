<?php

/**
 * Formulario operaciones aasa renewals.
 */
function aasa_renewals_options_form($form, &$form_state) {
    $form['#prefix'] = '';
    $form['#suffix'] = '';

    $form['submit_send_reminder_email'] = array(
      '#type' => 'submit',
      '#value' => t('Send all Reminder Emails.'),
      '#submit' => array('aasa_renewals_form_submit_send_reminder_email'),
    );

    $form['submit_expire_all_user'] = array(
      '#type' => 'submit',
      '#value' => t('Expire all users.'),
      '#submit' => array('aasa_renewals_form_submit_expire_all_user'),
    );

    return $form;
}

/**
 * Submit handler.
 *
 * @param array $form
 *   Form API form.
 * @param array $form_state
 *   Form API form.
 */
function aasa_renewals_form_submit_expire_all_user(){
   module_load_include('inc', 'aasa_renewals', 'aasa_renewals.functions');
   $batch = aasa_renewals_expire_all_user_process();
   batch_set($batch);
}

/**
 * Submit handler.
 *
 * @param array $form
 *   Form API form.
 * @param array $form_state
 *   Form API form.
 */
function aasa_renewals_form_submit_send_reminder_email($form, &$form_state) {
   module_load_include('inc', 'aasa_renewals', 'aasa_renewals.functions');
   $batch = aasa_renewals_send_reminder_email_process();
   batch_set($batch);
}

/**
 * Formulario para enviar test Reminder Emails.
 */
function aasa_renewals_send_test_reminder_emails_form($form, &$form_state) {
    $form['#prefix'] = '';
    $form['#suffix'] = '';

    $form['send_test_reminder_email'] = array(
        '#title' => t('Send Test Reminder Emails'),
        '#description' => t(''),
        '#type' => 'fieldset',
        '#collapsible' => FALSE,
        '#collapsed' => FALSE,
    );

    $form['send_test_reminder_email']['emails'] = array(
        '#title' => t('Emails'),
        '#type' => 'textfield',
        '#description' => t('Enter one or more comma-separated emails: email1@example.com, email2@example.com...'),
        '#default_value' => '',
        '#attributes' => array('placeholder' => 'email1@example.com, email2@example.com...', 'size' => 50),
        '#required' => FALSE,
        '#maxlength' => 100,
        '#prefix'=> '<div class="messages_send_test_reminder_emails messages"><h2 class="element-invisible">Warning message</h2><div class="message_content"></div></div>',
        '#suffix' => '',
    );

    $ajax = array(
        'callback' => 'aasa_renewals_form_submit_send_test_reminder_email',
        'wrapper' => '',
        'effect' => 'fade',
        'progress' => array(
            'type' => 'throbber',
            'message' => NULL,
        ),
        'event' => 'click',
    );

    $form['send_test_reminder_email']['submit_send_reminder_email'] = array(
      '#type' => 'submit',
      '#value' => t('Send Test Reminder Email.'),
      '#ajax' => $ajax,
    );

    return $form;
}


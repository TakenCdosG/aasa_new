<?php
/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
?>
<?php
$user = user_load(arg(1));
?>
<div class="user_custom_profile profile"<?php print $attributes; ?>>
    <div class="user_name"><?php
        if (!empty($user_profile['field_first_name'])) {
            print $user_profile['field_first_name']['#items'][0]['value'];
        }
        if (!empty($user_profile['field_last_name'])) {
            print " " . $user_profile['field_last_name']['#items'][0]['value'];
        }
        ?></div>
    <div class="col picture">
        <?php
        if (@isset($user->field_picture['und'][0]['uri'])) {
            print theme('image_style', array('path' => $user->field_picture['und'][0]['uri'], 'style_name' => 'user_picture'));
        }
        ?>
    </div>
    <div class="col block one">
        <div class="field_custom_profile"><label>Name: </label>

            <div class="value_custom_profile"><?php
                if (!empty($user_profile['field_first_name'])) {
                    print $user_profile['field_first_name']['#items'][0]['value'];
                }
                if (!empty($user_profile['field_last_name'])) {
                    print " " . $user_profile['field_last_name']['#items'][0]['value'];
                }
                ?></div>
        </div>
        <div class="field_custom_profile">
            <label>Title: </label>

            <div class="value_custom_profile"><?php
                if (!empty($user_profile['field_position_title'])) {
                    print $user_profile['field_position_title']['#items'][0]['value'];
                }
                ?></div>
        </div>
        <div class="field_custom_profile">
            <label>Email: </label>

            <div class="value_custom_profile"><a href="mailto:<?php print $user->mail; ?>"
                                                 target="_blank"><?php print $user->mail; ?></a></div>
        </div>

        <div class="field_custom_profile address one">
            <label>Address: </label>

            <div class="value_custom_profile"><?php
                if (!empty($user_profile['field_address_line_1'])) {
                    print $user_profile['field_address_line_1']['#items'][0]['value'];
                }
                ?></div>
        </div>
        <div class="field_custom_profile address">
            <label>Address Line 2: </label>
            <?php if (!empty($user_profile['field_address_line_2'])): ?>
                <div class="value_custom_profile">
                    <?php print $user_profile['field_address_line_2']['#items'][0]['value']; ?>
                </div>
            <?php endif; ?>
            <div class="value_custom_profile group_fields"><?php
                if (!empty($user_profile['field_city'])) {
                    print $user_profile['field_city']['#items'][0]['value'];
                }
                if (!empty($user_profile['field_state'])) {
                    print ", " . $user_profile['field_state']['#items'][0]['value'];
                }
                if (!empty($user_profile['field_zip'])) {
                    print ", " . $user_profile['field_zip']['#items'][0]['value'];
                }
                ?>
            </div>
        </div>
        <div class="field_custom_profile">
            <label>Work Phone: </label>

            <div class="value_custom_profile"><?php
                if (!empty($user_profile['field_office_telephone'])) {
                    print $user_profile['field_office_telephone']['#items'][0]['value'];
                }
                ?></div>
        </div>
        <div class="field_custom_profile">
            <label>Alt. Phone: </label>

            <div class="value_custom_profile"><?php
                if (!empty($user_profile['field_office_telephone'])) {
                    print $user_profile['field_office_telephone']['#items'][0]['value'];
                }
                ?></div>
        </div>
    </div>
    <div class="col block two">
        <div class="field_custom_profile">
            <label>University: </label>

            <div class="value_custom_profile"><?php
                if (!empty($user_profile['field_institution'])) {
                    print $user_profile['field_institution']['#items'][0]['value'];
                }
                ?></div>
        </div>
        <div class="field_custom_profile">
            <label>Medical School: </label>

            <div class="value_custom_profile"><?php
                if (!empty($user_profile['field_medical_school'])) {
                    print $user_profile['field_medical_school']['#items'][0]['value'];
                }
                ?></div>
        </div>
        <div class="field_custom_profile">
            <label>Department: </label>

            <div class="value_custom_profile"><?php
                if (!empty($user_profile['field_department'])) {
                    print $user_profile['field_department']['#items'][0]['value'];
                }
                ?></div>
        </div>
        <div class="field_custom_profile">
            <label>Region: </label>
            <!--            <div class="value_custom_profile">-->
            <?php //if(!empty($user_profile['field_department'])){print $user_profile['field_department']['#items'][0]['value'];}?><!--</div>-->
        </div>
        <?php if (aaap_access_private_profile(false)): ?>
            <div class="field_custom_profile request">
                <div class="value_custom_profile"><a class="button_request" href="/invoices/">View your Invoices ></a>
                </div>
            </div>
            <div class="field_custom_profile request">
                <div class="value_custom_profile"><a class="button_request" href="/view/conference">View/Edit National Conference Registration</a>
                </div>
            </div>
        <?php endif; ?>
        <?php if (_is_admin()): ?>
            <div class="field_custom_profile request">
                <div class="value_custom_profile"><a class="button_request" href="/welcome/<?php print $user->uid ?>">Send
                        Welcome Email ></a></div>
            </div>
        <?php endif; ?>

    </div>



    <?php if (aaap_access_private_profile(true)): ?>
        <a href="/user/<?php print $user->uid; ?>/edit" class="button_profile_action">Update Profile / Change
            Password</a>
    <?php endif; ?>
    <?php
//dsm($user_profile);
    ?>
</div>

<div id="header">
    <div id="header_top" class="container">
        <div id="header_left">
            <a href="http://aasa1.org" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <!--               <img src="/--><?php //print path_to_theme()."/img/top_logo.jpg" ?><!--" alt="-->
                <?php //print t('Home'); ?><!--" />-->
                <span>the</span>
                Association
                <span>of</span>
                Academic Surgical Administrators
            </a>
        </div>
        <div id='header_right'>
            <?php //dsm($user); ?>
            <?php if (!$logged_in) {
                print "<a href='/user/register' id='button_join'><div class='button_join_us'></div></a>";
                print render($page['highlighted']);
                print "<a class='text_login' href='/user/password'>Forgot password?</a>";
            } else {
                print "<a class='user_name'>" . $user->name . "</a>"
                    . "<div class='header_user_links'>"
                    . "<a href='/user/" . $user->uid . "' id='link_profile'>View Profile</a><a>|</a>"
                    . "<a href='/user/logout?destination=homepage' id='link_logout'>Logout</a>"
                    . "</div>";
            }?>
        </div>
    </div>
</div>
<div id="header-bottom">
    <div id="main-logo">
        <a href="http://aasa1.org" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="/<?php print path_to_theme() . "/img/main-logo.jpg" ?>"></div>
    </a>
    <?php print render($page['header']); ?>
</div>

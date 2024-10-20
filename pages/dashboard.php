<?php
if ( ! defined( 'ABSPATH' ) ) exit; ?>

<div class="twwd-phrases-container wrap" id="twwd-admin">

<div class="twwd--page-title-wrapper">
    <div class="twwd--page-header">
    <?php
        use TwwdPhrases\Admin\twwdAdminMenu;

        $logo = TWW_DOT_PHRASES_PLUGIN_URL . 'resources/images/twwlogo70.webp';
        echo '<h1>TWWD - Settings</h1>';
        settings_errors();
    ?>
    </div>
</div>

<div class="twwd_content_wrapper">
    <?php
        $page_indentifier   = 'twwd-phrases';
        $settings_slug      = TwwdAdminMenu::get_settings_page();

        $active_tab = isset( $_GET[ 'page' ] ) ? sanitize_text_field(wp_unslash($_GET[ 'page' ])) : $settings_slug;
    ?>

    <h2 class="nav-tab-wrapper">
        <a href="?page=twwd-phrases" class="nav-tab <?php echo ($active_tab == $settings_slug || $active_tab == $page_indentifier) ? 'nav-tab-active' : ''; ?>">Settings</a>
    </h2>

    <form method="post" action="options.php">
        <?php
            if( $active_tab === $settings_slug || $active_tab === $page_indentifier ) {
                settings_fields('twwd-common-settings-options');
                do_settings_sections($settings_slug);
                submit_button();
            } 
        ?>
    </form>
</div>
</div>

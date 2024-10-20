<?php
namespace TwwdPhrases\Admin;

use TwwdPhrases\Options\TwwdOptions;


class TwwdAdminMenu {
    const PAGE_IDENTIFIER = 'twwd-phrases';

    const PAGE_TEMPLATE = 'dashboard';

    const COMMON_SETTINGS_PAGE = 'twwd-common-settings';

    private $option_group = 'settings';

    private $option_name = 'settings';

    private $settings = [];

    private $prefix = '';

    public function __construct() {
        $settings = TwwdOptions::get_option($this->option_name, []);

        $this->prefix = TwwdOptions::PREFIX;
        $this->settings = $settings ?? [];
    }

    public function register_hooks(): void {
        add_action('admin_menu', [$this, 'register_pages']);
        add_action('admin_init', [$this, 'register_common_settings']);
    }

    public function register_pages(): void {
        $manage_capability = $this->get_manage_capability();
        $page_identifier = $this->get_page_identifier();

        $menu = add_menu_page(
            'TWW Dot Phrases: ' . __('Dashboard', 'twwd-phrases'),
            'TWW Dot Phrases',
            $manage_capability,
            $page_identifier,
            [$this, 'show_page'],
            'dashicons-format-aside',
            98
        );

        $submenu = add_submenu_page(
            $page_identifier,
            'TWW Dot Phrases: ' . __('Settings', 'twwd-phrases'),
            __('Settings', 'twwd-phrases'),
            $manage_capability,
            self::COMMON_SETTINGS_PAGE,
            [$this, 'show_page'],
            1
        );


        add_action( 'load-' . $menu, [$this, 'do_admin_enqueue'] );
        add_action( 'load-' . $submenu, [$this, 'do_admin_enqueue'] );
    }

    public function do_admin_enqueue(): void {
        add_action( 'admin_enqueue_scripts', [$this, 'enqueue_admin_scripts'] );
    }

    public function enqueue_admin_scripts(): void {
        wp_enqueue_style('wp-color-picker');

        $version = '1.32.5';

        wp_enqueue_style('twwd-admin-css', TWW_DOT_PHRASES_PLUGIN_URL . 'resources/css/admin/twwd-admin.css', [], $version, 'all' );
        wp_enqueue_script('twwd-admin-js', TWW_DOT_PHRASES_PLUGIN_URL . 'resources/js/admin/twwd-admin.js', array( 'wp-color-picker' ), $version, true );

        wp_localize_script('twwd-admin-js', 'twwd_admin_object', [
            'settings' => $this->settings,
        ]);
    }

    public function register_common_settings(): void {
        /**
         * Overall settings
         */
        add_settings_section(
            'twwd-common-settings-section',
            __('TWWD Settings', 'twwd-dot-phrases'),
            null,
            self::COMMON_SETTINGS_PAGE,
            []
        );

        register_setting('twwd-common-settings-options', $this->option_group, [$this, 'validate_common_settings']);
    }

    public function validate_common_settings($input): array {
        $valid_input = [];
        

        return $input;
    }


    public function get_page_identifier(): string
    {
        return self::PAGE_IDENTIFIER;
    }


    public function get_manage_capability(): string
    {
        return 'manage_options';
    }

    public function show_page(): void
    {
        require_once TWW_DOT_PHRASES_PLUGIN_PATH . 'pages/' . self::PAGE_TEMPLATE . '.php';
    }

    /**
     * Overall Settings
     * 
     * 
     */
    public function default_theme_callback(): void {
        $options = TwwdOptions::get_option($this->option_name);
        $value = isset($options['theme_options']['default']) ? $options['theme_options']['default'] : 'compact';

        echo "
        <div class='default-system'>
            <input id='theme_options_compact' class='twwd-phrases__units-measurement' type='radio' name='" . esc_attr($this->option_name) . "[theme_options][default]' value='compact' " . ('compact' === $value ? 'checked' : '') . ">Compact</input>

            <input id='theme_options_large' class='twwd-phrases__units-measurement' type='radio' name='" . esc_attr($this->option_name) . "[theme_options][default]' value='large' " . ('large' ===  $value ? 'checked' : '') . ">Large</input>
        </div>
        ";
    }
    public static function get_settings_page(): string {
        return self::COMMON_SETTINGS_PAGE;
    }
}

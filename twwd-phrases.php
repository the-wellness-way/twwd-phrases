<?php
/**
 * Plugin Name: TWW Dot Phrases
 * Description: Manage and reorder macros.
 * Version: 1.0.0
 * Author: The Wellness Way
 * Author URI: https://www.thewellnessway.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: twwd-phrases
 * Domain Path: /languages
 */

 if(!defined('ABSPATH')) {
     exit;
 }

 if(!defined('TWW_DOT_PHRASES_PLUGIN_FILE')) {
     define('TWW_DOT_PHRASES_PLUGIN_FILE', __FILE__);
 }

 if(!defined('TWW_DOT_PHRASES_PLUGIN_PATH')) {
     define('TWW_DOT_PHRASES_PLUGIN_PATH', plugin_dir_path(__FILE__));
 }  

 if(!defined('TWW_DOT_PHRASES_PLUGIN_URL')) {
     define('TWW_DOT_PHRASES_PLUGIN_URL', plugin_dir_url(__FILE__));
 }

 if(!defined('TWW_DOT_PHRASES_ASSETS_VERSION')) {
     define('TWW_DOT_PHRASES_ASSETS_VERSION', '1.1.03');
 }

 if(!defined('TWW_DOT_PHRASES_REST_NAMESPACE')) {
     define('TWW_DOT_PHRASES_REST_NAMESPACE', 'twwd/v1');
 }

require_once 'vendor/autoload.php';

use TwwdPhrases\Setup\TwwdRegisterSettingsSchema;
add_action('init', [TwwdRegisterSettingsSchema::class, 'setup']);

add_action('acf/init', [TwwdRegisterSettingsSchema::class, 'setup_post_meta']);



use TwwdPhrases\Admin\TwwdAdminMenu;
$admin = new TwwdAdminMenu();
$admin->register_hooks();

use TwwdPhrases\Routes\TwwdImportRoute;
$import = new TwwdImportRoute();
add_action('rest_api_init', [$import, 'boot']);

class TwwdPhrases {
    const XML_PATH = 'xml';
    const TEMP_FILE = '/LucasMacros_2024-10-11.xml';

    private $instance;

    private $file;

    public function install() {
        $this->instance = $this;
        $this->file = TWW_DOT_PHRASES_PLUGIN_PATH . self::XML_PATH . self::TEMP_FILE;
    }

    public function get_file() {
        return $this->file;
    }

    public static function fromXML($file) {
        return new self($file);
    }

    public function get_xml() {
        $file = $this->get_file();

        if ($xml = simplexml_load_file($file)) {
            return $xml;
        } 

        return false;
    }

    public function load_xml() {
        $xml = simplexml_load_file(TWW_DOT_PHRASES_PLUGIN_PATH . self::XML_PATH . self::TEMP_FILE);
    }



    public function insert_attachment() {
        $this->file = TWW_DOT_PHRASES_PLUGIN_PATH . self::XML_PATH . self::TEMP_FILE;
        $attachment = [
            'post_title' => self::TEMP_FILE,
            'post_content' => '',
            'post_status' => 'inherit',
            'post_mime_type' => 'application/xml',
            'guid' => $this->file
        ];

        $attachment_id = wp_insert_attachment($attachment, $this->file);
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        $attachment_data = wp_generate_attachment_metadata($attachment_id, $this->file);
        wp_update_attachment_metadata($attachment_id, $attachment_data);
    }
}

class TwwdData {
    
}

$twwdPhrases = new TwwdPhrases();
$twwdPhrases->load_xml();
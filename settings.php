<?php

/**
 * @package   theme_numeric
 * @copyright 2014 Eduardo Kraus, eduardokraus.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Logo file setting.
    $name = 'theme_numeric/logo';
    $title = get_string('logo','theme_numeric');
    $description = get_string('logodesc', 'theme_numeric');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @linkColor setting.
    $name = 'theme_numeric/linkcolor';
    $title = get_string('linkcolor', 'theme_numeric');
    $description = get_string('linkcolor_desc', 'theme_numeric');
    $default = '#5D8CD2';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @bodyBackground setting.
    $name = 'theme_numeric/titlebackground';
    $title = get_string('titlebackground', 'theme_numeric');
    $description = get_string('titlebackground_desc', 'theme_numeric');
    $default = '#5D8CD2';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_numeric/footnote';
    $title = get_string('footnote', 'theme_numeric');
    $description = get_string('footnotedesc', 'theme_numeric');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_numeric/customcss';
    $title = get_string('customcss', 'theme_numeric');
    $description = get_string('customcssdesc', 'theme_numeric');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}

// Twitter
function setting_twitter() { ?>
<input type="text" name="twitter" id="twitter" value="<?php echo
get_option( 'twitter' ); ?>" />
<?php }
function custom_settings_page_setup() {
    add_settings_section( 'section', 'All Settings', null, 'theme-options' ); 
<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       www.totalwebconnections.com
 * @since      1.0.0
 *
 * @package    Amazonslider
 * @subpackage Amazonslider/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
    <button class="addSlide">Add Slide</button>

    <form method="post" name="amazonslider_options" id="amazonsliderForm" action="options.php">

        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>

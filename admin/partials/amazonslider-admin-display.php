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

<?php
       //Grab all options
       $options = get_option($this->plugin_name);
   ?>

   <?php
       settings_fields($this->plugin_name);
       do_settings_sections($this->plugin_name);
   ?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
    <button class="addSlide">Add Slide</button>

    <form method="post" name="amazonslider_options" id="amazonsliderForm" action="options.php">
        <?php settings_fields($this->plugin_name); ?>

        <?php
            $looperVar = 0;
            foreach($options as $option){ ?>
                <div class="fieldset">
           			<label for="url">Image Url</label></br>
           			<input class="affiliateSliderInput" type="text" name="affiliateSliderUrl-<?=$looperVar?>" value="<?=$option[0]?>"/></br>
           			<label for="link">Image Link</label></br>
           			<input type="text" name="affiliateSliderLink-<?=$looperVar?>" value="<?=$option[1]?>"/></br></br>
       			</div>
    <?php
                $looperVar++;
            }
        ?>

        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>

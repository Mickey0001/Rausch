<?php

class my_plugin extends WP_Widget
{

    // constructor
    public function my_plugin()
    {
        parent::WP_Widget(false, $name = __('My Image Widget', 'wp_widget_plugin'));

    }

// widget form creation
    public function form($instance)
    {

// Check values
        if ($instance) {
            $textarea = $instance['textarea'];
        } else {
            $textarea = '';
        }
        ?>

<p>
<label for="<?php echo $this->get_field_id('textarea'); ?>"><?php _e('Description:', 'wp_widget_plugin');?></label>
<textarea class="widefat" id="<?php echo $this->get_field_id('textarea'); ?>" name="<?php echo $this->get_field_name('textarea'); ?>" rows="1" cols="1" ><?php echo $textarea; ?></textarea>
</p>

<?php
}

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        // Fields
        $instance['textarea'] = strip_tags($new_instance['textarea']);
        return $instance;
    }

    // display widget
    public function widget($args, $instance)
    {
        extract($args);

        // these are the widget options
        $textarea = $instance['textarea'];
        echo $before_widget;

        // Display the widget

        // Check if textarea is set
        echo '<div class="info">';
        if ($textarea) {
            echo '<p><span>' . $textarea . '</span></p>';
        }
        echo '</div>';
        echo $after_widget;
    }
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("my_plugin");'));
?>
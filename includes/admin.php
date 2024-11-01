<?php
if ( ! defined( 'ABSPATH' ) ) exit;
add_action( 'gform_field_standard_settings', 'srffgf_settings', 10, 2 );
function srffgf_settings( $position, $form_id ) {
    
    if ($position == 5) {
    ?>
    <li class="write_a_notice field_setting">
        <label for="write_a_notice" class="section_label"><?php  echo esc_html( 'Write A Note :', 'star-rating-for-gravity-forms' );?></label>
        <textarea id="write_a_notice" name="Write A Note :" onchange="SetFieldProperty('write_a_notice', this.value);"></textarea>
    </li>

    <li class="rating_icon_on field_setting" id="star_ratingssss">
        <label for="rating_icon_on" class="section_label">
            <?php  echo esc_html( 'Select Star On', 'star-rating-for-gravity-forms' );?>
        </label>
        <input type="radio" name="rating_icon_on" id="star_icon1" value="star-1" onchange="SetFieldProperty('rating_icon_on', this.value);">
        <label for="star_icon1" class="star_rate_img inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/star-1.png"></label>

        <input type="radio" name="rating_icon_on" id="star_icon2" value="star-2" onchange="SetFieldProperty('rating_icon_on', this.value);">
        <label for="star_icon2" class="star_rate_img inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/star-2.png"></label>

        <input type="radio" name="rating_icon_on" id="star_icon3" value="medal-on" onchange="SetFieldProperty('rating_icon_on', this.value);">
        <label for="star_icon3" class="star_rate_img inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/medal-on.png"></label>

        <input type="radio" name="rating_icon_on" id="star_icon4" value="medal-off" onchange="SetFieldProperty('rating_icon_on', this.value);">
        <label for="star_icon4" class="star_rate_img inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/medal-off.png"></label>

        <input type="radio" name="rating_icon_on" id="star_icon5" value="star-on" onchange="SetFieldProperty('rating_icon_on', this.value);">
        <label for="star_icon5" class="star_rate_img inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/star-on.png"></label>

        <input type="radio" name="rating_icon_on" id="star_icon6" value="star-off" onchange="SetFieldProperty('rating_icon_on', this.value);">
        <label for="star_icon6" class="star_rate_img inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/star-off.png"></label>

        <input type="radio" name="rating_icon_on" id="star_icon7" value="face-on" onchange="SetFieldProperty('rating_icon_on', this.value);">
        <label for="star_icon7" class="star_rate_img inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/face-on.png"></label>

        <input type="radio" name="rating_icon_on" id="star_icon8" value="face-off" onchange="SetFieldProperty('rating_icon_on', this.value);">
        <label for="star_icon8" class="star_rate_img inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/face-off.png"></label>
    </li>

    <li class="rating_icon_off field_setting" id="star_rating">
        <label for="rating_icon_off" class="section_label">
            <?php  echo esc_html( 'Select Star Off', 'star-rating-for-gravity-forms' );?>
        </label>
        <input type="radio" name="rating_icon_off" id="icon_off1" value="star-1" onchange="SetFieldProperty('rating_icon_off', this.value);">
        <label for="icon_off1" class="star_rate_imgs inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/star-1.png"></label>

        <input type="radio" name="rating_icon_off" id="icon_off2" value="star-2" onchange="SetFieldProperty('rating_icon_off', this.value);">
        <label for="icon_off2" class="star_rate_imgs inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/star-2.png"></label>

        <input type="radio" name="rating_icon_off" id="icon_off3" value="medal-on" onchange="SetFieldProperty('rating_icon_off', this.value);">
        <label for="icon_off3" class="star_rate_imgs inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/medal-on.png"></label>

        <input type="radio" name="rating_icon_off" id="icon_off4" value="medal-off" onchange="SetFieldProperty('rating_icon_off', this.value);">
        <label for="icon_off4" class="star_rate_imgs inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/medal-off.png"></label>

        <input type="radio" name="rating_icon_off" id="icon_off5" value="star-on" onchange="SetFieldProperty('rating_icon_off', this.value);">
        <label for="icon_off5" class="star_rate_imgs inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/star-on.png"></label>

        <input type="radio" name="rating_icon_off" id="icon_off6" value="star-off" onchange="SetFieldProperty('rating_icon_off', this.value);">
        <label for="icon_off6" class="star_rate_imgs inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/star-off.png"></label>

        <input type="radio" name="rating_icon_off" id="icon_off7" value="face-on" onchange="SetFieldProperty('rating_icon_off', this.value);">
        <label for="icon_off7" class="star_rate_imgs inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/face-on.png"></label>

        <input type="radio" name="rating_icon_off" id="icon_off8" value="face-off" onchange="SetFieldProperty('rating_icon_off', this.value);">
        <label for="icon_off8" class="star_rate_imgs inline" style="margin-bottom: 10px !important;"><img src="<?php echo esc_attr(SRFFGF_PLUGIN_URL) ;?>/public/jquery.rating/images/face-off.png"></label>
    </li>

    <li class="max_size field_setting">
        <label for="max_size" class="section_label"><?php  echo esc_html( 'Max Star', 'star-rating-for-gravity-forms' );?></label>
        <input type="number" id="max_size" name="max_size" onchange="SetFieldProperty('max_size', this.value);"/>
    </li>

    <li class="btn_position field_setting">
        <label for="btn_position" class="section_label">
               <?php esc_html_e('Cancel Button Position :', 'star-rating-for-gravity-forms'); ?>
        </label>
        
        <input type="radio" id="btn_left" name="btn_position" value="left" onchange="SetFieldProperty('btn_position', this.value);" />
        <label for="btn_left" class="cancel_btn inline" style="margin-bottom: 10px !important;"><?php esc_html_e('Left', 'star-rating-for-gravity-forms'); ?></label>
        <input type="radio" id="btn_right" name="btn_position" value="right" onchange="SetFieldProperty('btn_position', this.value);"/>
        <label for="btn_right" class="cancel_btn inline" style="margin-bottom: 10px !important;"><?php esc_html_e('Right', 'star-rating-for-gravity-forms'); ?></label>
    </li>

    <li class="disable_cancel field_setting">
        <label for="disable_cancel" class="section_label">
               <?php esc_html_e('Disable Cancel Button :', 'star-rating-for-gravity-forms'); ?>
        </label>
        
        <input type="radio" id="btn_on" name="disable_cancel" value="yes" onchange="SetFieldProperty('disable_cancel', this.value);" />
        <label for="btn_on" class="disable_btn inline" style="margin-bottom: 10px !important;"><?php esc_html_e('Yes', 'star-rating-for-gravity-forms'); ?></label>
        <input type="radio" id="btn_off" name="disable_cancel" value="no" onchange="SetFieldProperty('disable_cancel', this.value);"/>
        <label for="btn_off" class="disable_btn inline" style="margin-bottom: 10px !important;"><?php esc_html_e('No', 'star-rating-for-gravity-forms'); ?></label>
    </li>

    <li class="single_star_selection field_setting">
        <label for="single_star_selection" class="section_label">
               <?php esc_html_e('Single Star Selection :', 'star-rating-for-gravity-forms'); ?>
        </label>
        
         <input type="radio" id="single_on" name="single_star_selection" value="yes" onchange="SetFieldProperty('single_star_selection', this.value);" />
        <label for="single_on" class="single_btn inline" style="margin-bottom: 10px !important;"><?php esc_html_e('Yes', 'star-rating-for-gravity-forms'); ?></label>
        <input type="radio" id="single_off" name="single_star_selection" value="no" onchange="SetFieldProperty('single_star_selection', this.value);"/>
        <label for="single_off" class="single_btn inline" style="margin-bottom: 10px !important;"><?php esc_html_e('No', 'star-rating-for-gravity-forms'); ?></label>
    </li>
    <?php
    }
}


/* editor js script*/
add_action('admin_enqueue_scripts', 'SRFFGF_rating_GF_editor_script_inline');

function SRFFGF_rating_GF_editor_script_inline() {
    $page = isset($_GET['page']) ? sanitize_text_field($_GET['page']) : '';
    if ($page === 'gf_edit_forms') {
        wp_enqueue_script('jquery'); // Enqueue jQuery
        wp_add_inline_script('jquery', 'jQuery(document).ready(function($) {
            jQuery(document).bind("gform_load_field_settings", function(event, field, form){
                jQuery("#write_a_notice").val(field["write_a_notice"]);
                jQuery("#max_size").val(field["max_size"]);
                jQuery("input[name=rating_icon_on][value=" + field["rating_icon_on"] + "]").prop("checked", true);
                jQuery("input[name=rating_icon_off][value=" + field["rating_icon_off"] + "]").prop("checked", true);
                jQuery("input[name=btn_position][value=" + field["btn_position"] + "]").prop("checked", true);
                jQuery("input[name=disable_cancel][value=" + field["disable_cancel"] + "]").prop("checked", true);
                jQuery("input[name=single_star_selection][value=" + field["single_star_selection"] + "]").prop("checked", true);
            });
        });');
    }
}


/*default value add */
add_action( 'gform_editor_js_set_default_values', 'SRFFGF_default_values' );
function SRFFGF_default_values(){
    ?>
   
    case "Rating" :
        field.label = "Star Ratings";
        field.write_a_notice = "Rate Us";
        field.rating_icon_on = "star-1";
        field.rating_icon_off = "star-2";
        field.max_size = 5;
        field.btn_position = 'left';
        field.disable_cancel = 'no';
        field.single_star_selection = 'no';
        
    break;
    
    <?php
}


/* Gravity form class here */
if (class_exists('GF_Field')) {
    class SRFFGF_Star_Rating extends GF_Field {

        public $type = 'Rating';

        public function SRFFGF_get_form_editor_field_title() { return esc_html( 'Rating', 'star-rating-for-gravity-form' ); }

        public function get_form_editor_button() {
            return array(
                'group' => 'advanced_fields',
                'text'  => $this->SRFFGF_get_form_editor_field_title(),
                'onclick'   => "StartAddField('".$this->type."');",
            );
        }
        /* Gravity form editor setting */
        function get_form_editor_field_settings() {
            return array(
                'label_setting',
                'write_a_notice',
                'rating_icon_on',
                'rating_icon_off',
                'max_size',
                'btn_position',
                'disable_cancel',
                'single_star_selection',
                'rules_setting',
                'error_message_setting',
            );
        }
        function is_conditional_logic_supported() { return true; }

        function get_value_submission( $field_values, $get_from_post=true ) {
            if(!$get_from_post) {
                return $field_values;
            }
            return sanitize_text_field($_POST);
        } 
        /*Field value set here */
        function get_field_input( $form, $value = '', $entry = null ) { 
            $form_id         = $form['id'];
            $is_entry_detail = $this->is_entry_detail();
            $is_form_editor  = $this->is_form_editor();
            $id              = intval($this->id);
            $field_id        = $is_entry_detail || $is_form_editor || $form_id == 0 ? "input_$id" : 'input_' . $form_id . "_$id";
            $atts['type']    = 'hidden';
            $max_star        = $this->max_star;
            $star_icon       = $this->star_icon;
            $label2          = $this->label;
            $label           = str_replace(' ','-',$label2);
            $lables          = '#'.$label.'';
            $write_a_notice  = $this->write_a_notice;
            $rating_icon_on  = $this->rating_icon_on;
            $rating_icon_off = $this->rating_icon_off;
            $max_size        = $this->max_size;
            $btn_position    = $this->btn_position;
            $disable_cancel  = $this->disable_cancel;
            $single_star_selection  = $this->single_star_selection;

            $html = '';

            $html .= '<div class="ginput_container" id="star_rating_class'.esc_attr($id).'">';
            $html .= '<input type="hidden"  class="star_rating_val '.esc_attr($label).'" name="'.esc_attr($label).'" id="'.esc_attr($id).'" value=""/>';
            $html .= '<div class="star_rating_class" target_pos="'.esc_attr($label).'" rating_icon_on="'.esc_attr($rating_icon_on).'" rating_icon_off="'.esc_attr($rating_icon_off).'" max_size="'.esc_attr($max_size).'" btn_position="'.esc_attr($btn_position).'" disable_cancel="'.esc_attr($disable_cancel).'" single_star_selection="'.esc_attr($single_star_selection).'">';
            $html .= '<input class="rating_vals '.esc_attr($label).'" name="input_'.esc_attr($id).'" id="'.esc_attr($form_id).'" type="hidden"  value=""/>';
            $html .= '</div>';  
            $html .= '</div>';
            $html .= '<span  class="srffgf-form-control-wrap '.esc_attr($label).'">';  
            $html .= '<input class="custom_radio_class '.esc_attr($label).'" type="hidden" name="'.esc_attr($label).'" id="'.esc_attr($id).'" value=""/>';
            $html .= '<div class="srffgf_notice">';
            $html .= esc_attr($write_a_notice);
            $html .= '</div>';
            $html .= '</span>';  
        
            return $html;
            
        }
    }
    GF_Fields::register(new SRFFGF_Star_Rating() );
}
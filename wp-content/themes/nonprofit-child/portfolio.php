<?php
if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}

/*-----------------------------------------------------------------------------------*/
/*    Portfolio
/*-----------------------------------------------------------------------------------*/

class WPBakeryShortCode_ve_portfolio extends WPBakeryShortCode {
    protected function content( $atts, $content = null ) {
        extract( shortcode_atts( array(
            'portfolio_layout' => 'grid-portfolio',
            'portfolio_item_no_space' => '',
            'link_portfolio_item' => '',
            'portfolio_columns_count' => '2clm',
            'portfolio_post_number' => 'all',
            'portfolio_post_link' => '',
            'portfolio_sortable_name' => 'All Projects',
            'portfolio_sortable_mode' => 'yes',
            'portfolio_image_effect' => 'effect-none',
            'portfolio_sortable_icons' => 'yes',
            'portfolio_categories' => '',
            'orderby' => NULL,
            'order' => 'DESC',
            // Static
            'el_class' => '',
            'css' => '',
            'css_animation' => ''
        ), $atts ) );
        
        $output = '';
          
        // Retrieve data from the database.
        $options = get_option( 'vslmd_options' );
        $color_switch = isset( $options['color_switch'] ) ? $options['color_switch'] : '1'; // Color Switch

        if ($color_switch == '1') {
            // Set default value.
            $ve_global_color = $ve_global_background_color = $ve_global_border_color = isset( $options['global_color'] ) ? $options['global_color'] : '#3379fc'; // General Color - Background Color - Border Color
        } else {
            // Set default value.
            $ve_global_color = isset( $options['global_color'] ) ? $options['global_color'] : '#3379fc'; // General Color
            $ve_global_background_color = isset( $options['custom_background_color'] ) ? $options['custom_background_color'] : '#3379fc'; // Background Color
            $ve_global_border_color = isset( $options['custom_border_color'] ) ? $options['custom_border_color'] : '#3379fc'; // Border Color
        }
      
        // Start Default Extra Class, CSS and CSS animation
        $css = isset( $atts['css'] ) ? $atts['css'] : '';
        $el_class = isset( $atts['el_class'] ) ? $atts['el_class'] : '';
        
        if ( '' !== $css_animation ) {
            wp_enqueue_script( 'waypoints' );
            $css_animation_style = ' wpb_animate_when_almost_visible wpb_' . $css_animation;
        }

        $class_to_filter = vc_shortcode_custom_css_class( $css, ' ' ) . $this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation );
        $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );

        // End Default Extra Class, CSS and CSS animation
        
        global $post;
        
        // Narrow by categories
        if ($portfolio_categories == 'portfolio')
            $portfolio_categories = '';
        
        // Post teasers count
        if ( $portfolio_post_number != '' && !is_numeric($portfolio_post_number) ) $portfolio_post_number = -1;
        if ( $portfolio_post_number != '' && is_numeric($portfolio_post_number) ) $portfolio_post_number = $portfolio_post_number;
        
        // Add Custom Class For Portfolio
        $portfolio_full = null;
        if ($portfolio_item_no_space == true) {
            $portfolio_full = ' portfolio-full-width';

            if ( $portfolio_columns_count == "2clm") { $portfolio_columns_count = 'col-md-6'; }
            if ( $portfolio_columns_count == "3clm") { $portfolio_columns_count = 'col-md-4'; }
            if ( $portfolio_columns_count == "4clm") { $portfolio_columns_count = 'col-md-3'; }
            if ( $portfolio_columns_count == "6clm") { $portfolio_columns_count = 'col-md-2'; }
        } else {
            if ( $portfolio_columns_count == "2clm") { $portfolio_columns_count = 'col-md-6'; }
            if ( $portfolio_columns_count == "3clm") { $portfolio_columns_count = 'col-md-4'; }
            if ( $portfolio_columns_count == "4clm") { $portfolio_columns_count = 'col-md-3'; }
            if ( $portfolio_columns_count == "6clm") { $portfolio_columns_count = 'col-md-2'; }
        }

        // ** 修正箇所 ** 配列へのアクセス前に型チェックを追加 **

        // portfolio_categories が配列かどうかをチェック
        if ( is_array( $portfolio_categories ) && !empty( $portfolio_categories ) ) {
            $first_category = $portfolio_categories[0]; // 配列の最初の要素にアクセス
        } else {
            // 配列でない場合、デフォルト値を設定
            $first_category = ''; // または適切な処理
        }

        // options が配列かどうかを確認
        if ( is_array( $options ) ) {
            $some_value = isset( $options['some_key'] ) ? $options['some_key'] : ''; // 配列のキーにアクセス
        } else {
            // 配列でない場合
            $some_value = ''; // デフォルト値を設定
        }

        // ポートフォリオアイテムの出力処理
        $output .= '<div class="portfolio-item ' . esc_attr( $portfolio_columns_count ) . '">';
        // ここでアイテムを出力するコードが続きます...
        
        $output .= '</div>';

        return $output;
    }
} // クラスの閉じタグ

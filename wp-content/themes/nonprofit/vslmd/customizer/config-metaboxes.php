<?php 

$opt_name = "vslmd_options";

//Query Slider Revolution

if ( class_exists( 'RevSlider' ) ) {
    
    $slider = new RevSlider();
    $arrSliders = $slider->getArrSliders();
    $revsliders = array();
    
    if ( $arrSliders ) {
        foreach ( $arrSliders as $slider ) {
            /** @var $slider RevSlider */
            $revsliders[ $slider->getAlias() ] = $slider->getTitle();
        }
    } else { $revsliders[] = __( 'No Slider Found', 'vslmd' ); }
    
} else { $revsliders[] = __( 'No Slider Found', 'vslmd' ); }

//End Query Slider Revolution

//Post Types Support

$cpt_counter = 0;
$cpt_list = array();

while( $cpt_counter <= 4 ){
    if(isset($options['custom-post-type-slug-' . $cpt_counter]) && $options['custom-post-type-slug-' . $cpt_counter] != ''){
        $cpt_list[] = $options['custom-post-type-slug-' . $cpt_counter];
    }
    $cpt_counter++;
}

array_push($cpt_list, "post", "page", "product", "portfolio", "theme", "knowledgebase", "team", "forum" ,"reply", "topic", "events", "properties", "service", "docs", "ticket");

//End Post Types Support

// Standard metabox.
Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'layout-metaboxes',
		'title'      => esc_html__( 'Options', 'vslmd' ),
		'post_types' => $cpt_list,
		'position'   => 'normal', // normal, advanced, side.
		'priority'   => 'high',   // high, core, default, low.
		'sections'   => array(
            array(
				'title'  => esc_html__( 'Layout', 'vslmd' ),
				'id'     => 'hero-metabox',
				'desc' => __('Control and configure the layout.', 'vslmd'),
				'icon'   => 'el-icon-screen',
				'fields' => array(
                    array(
                        'id'       => 'layout_structure',
                        'type'     => 'button_set',
                        'title'    => __('Layout Manager', 'vslmd'),
                        'desc'     => __('Organize how you want the layout to appear.', 'vslmd'),
                        'options' => array(
                            '1' => 'No',
                            '2' => 'Only Footer', 
                            '3' => 'Only Header',
                            '4' => 'Header and Footer',
                        ), 
                        'default' => '4',
                    ),
                    array(
                        'id'       => 'layout_header_title',
                        'type'     => 'button_set',
                        'title'    => __('Background Type', 'vslmd'),
                        'subtitle'     => __('Choosing the right background type can help enhance the visual appeal and overall design.', 'vslmd'),
                        'required' => array('layout_structure','>=','3'),
                        'options' => array(
                            '1' => 'No', 
                            '2' => 'Background Color', 
                            '3' => 'Background Image',
                            '4' => 'Slider Revolution',
                            '5' => 'Simple Slider',
                        ), 
                        'default' => '2'
                    ),
                    array(
                        'id'        => 'header_title_color_overlay',
                        'type'      => 'color_rgba',
                        'title'     => 'Overlay Color',
                        'required' => array(
                            array('layout_header_title', '<=', 3),
                            array('layout_header_title', '!=', 1),
                        ),
                        'desc'      => 'Set Overlay Color and Opacity.',
                        'output'    => array(
                            'background-color' => '.header-presentation .hp-background-color'
                            )
                    ),
                    array(         
                        'id'       => 'header_title_background',
                        'type'     => 'background',
                        'background-color' => false,
                        'required' => array('layout_header_title','equals','3'),
                        'title'    => __('Background Image', 'vslmd'),
                        'desc'     => __('Upload your image should be between 1920px x 1080px (or more) for best results.', 'vslmd'),
                        'output'    => array('.header-presentation'),
                    ), 
                    array(
                        'id'       => 'custom_header_title_height',
                        'type'     => 'button_set',
                        'title'    => __('Height', 'vslmd'),
                        'desc'     => __('Choose the height you want.', 'vslmd'),
                        'required' => array(
                            array('layout_header_title', '<=', 3),
                            array('layout_header_title', '>', 1),
                        ),
                        'options' => array(
                            'small' => 'Small', 
                            'medium' => 'Medium', 
                            'full' => 'Full height',
                            'custom-header-title-height' => 'Custom height'
                        ), 
                        'default' => 'medium'
                    ),
                    array(
                        'id'               => 'title_editor',
                        'type'             => 'text',
                        'title'            => __('Title', 'vslmd'), 
                        'desc'         => __('You can insert a custom title instead of default title.', 'vslmd'),
                        'required' => array(
                            array('layout_header_title', '<=', 3),
                            array('layout_header_title', '>', 1),
                        ),
                    ),
                    array(
                        'id'               => 'caption_editor',
                        'type'             => 'text',
                        'title'            => __('Subtitle', 'vslmd'), 
                        'desc'         => __('You can insert a custom subtitle.', 'vslmd'),
                        'required' => array(
                            array('layout_header_title', '<=', 3),
                            array('layout_header_title', '>', 1),
                        ),
                    ), 
                    array(
                        'id'       => 'custom_header_title_height_dimension',
                        'type'     => 'dimensions',
                        'units'    => array('em','px','%'),
                        'width'    => false,
                        'title'         => __('Custom Height', 'vslmd'),
                        'desc'          => __('Enter a number. Min: 1, max: 100, step: 1, default value: 250', 'vslmd'),
                        'required' => array('custom_header_title_height','equals','custom-header-title-height'),
                        'output'    => array('section.header-presentation.custom-header-title-height'),
                        'default'  => array(
                            'Height'  => '250'
                        ),
                    ),
                    array(
                        'id'        => 'header_title_color',
                        'type'      => 'color_rgba',
                        'title'     => 'Title Color',
                        'output'    => array(
                            'color' => '.header-presentation .hp-background-color .container .hp-content h1'
                        ),
                        'required' => array(
                            array('layout_header_title', '<=', 3),
                            array('layout_header_title', '>', 1),
                        ),
                        'desc'      => 'Set Color and Opacity.',
                    ),
                    array(
                        'id'        => 'header_caption_color',
                        'type'      => 'color_rgba',
                        'title'     => 'Subtitle Color',
                        'output'    => array(
                            'color' => '.header-presentation .hp-background-color .container .hp-content p'
                        ),
                        'required' => array(
                            array('layout_header_title', '<=', 3),
                            array('layout_header_title', '>', 1),
                        ),
                        'desc'      => 'Set Color and Opacity.',
                    ),
                    array(
                        'id' => 'slider_rev_header', 
                        'title' => __('Slider Revolution', 'vslmd'),
                        'desc' => __('Choose Slide Template', 'vslmd'),
                        'required' => array('layout_header_title','equals','4'),
                        'type' => 'select',
                        'options'   => $revsliders,
                    ),		
                    array(
                        'id'          => 'simple_slider',
                        'type'        => 'slides',
                        'title'       => __('Slides Options', 'vslmd'),
                        'show' => array(
                            'title' => true,
                            'description' => true,
                            'url' => false,
                        ),
                        'subtitle'    => __('Unlimited slides with drag and drop sortings.', 'vslmd'),
                        'desc'        => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'vslmd'),
                        'required' => array('layout_header_title','equals','5'),
                        'placeholder' => array(
                            'title'           => __('This is a title', 'vslmd'),
                            'description'     => __('Description Here', 'vslmd'),
                        ),
                    ),
				),
			),
            array(
				'title'  => esc_html__( 'Settings', 'vslmd' ),
				'id'     => 'header-metabox',
				'desc' => __('Control and configure the header.', 'vslmd'),
				'icon'   => 'el-icon-cog',
				'fields' => array(  
                    array(
                        'id'       => 'menu_overlay_switch',
                        'type'     => 'button_set',
                        'required' => array('layout_structure','>=','3'),
                        'title'    => __('Transparent Header', 'vslmd'),
                        'desc' => __('Overlap and display header above hero.', 'vslmd'),
                        'options' => array(
                            'no-overlay' => 'No', 
                            'default-colors-overlay colors-overlay-enabled' => 'Default Colors',
                            'dark-colors-overlay colors-overlay-enabled' => 'Light Theme', 
                            'light-colors-overlay colors-overlay-enabled' => 'Dark Theme'
                            
                        ), 
                        'default' => 'no-overlay'
                    ),
                    array(
                        'id' => 'change_menu',
                        'title' => __( 'Change Menu', 'vslmd' ),
                        'desc'=> __('Select the Menu that you want to show.', 'vslmd'),
                        'required' => array('layout_structure','>=','3'),
                        'type' => 'select',
                        'data' => 'menu_location',
                    ),
                ),
			),
		),
	)
);


/*-----------------------------------------------------------------------------------*/
/*	Team
/*-----------------------------------------------------------------------------------*/	

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'team-metabox',
        'title'  => esc_html__( 'Team Options', 'vslmd' ),
		'post_types' => array( 'team' ),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'default', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields' => array( 
                    array(
                        'id'=>'meta-box-team-email',
                        'type' => 'text', 
                        'title' => __('Email', 'vslmd'),
                        'desc'=> __('Please input the Email', 'vslmd'),
                    ), 
                    array(
                        'id'=>'meta-box-team-facebook',
                        'type' => 'text', 
                        'title' => __('Facebook Profile URL', 'vslmd'),
                        'desc'=> __('Please input the URL', 'vslmd'),
                    ), 
                    array(
                        'id'=>'meta-box-team-github',
                        'type' => 'text', 
                        'title' => __('Github Profile URL', 'vslmd'),
                        'desc'=> __('Please input the URL', 'vslmd'),
                    ), 
                    array(
                        'id'=>'meta-box-team-google-plus',
                        'type' => 'text', 
                        'title' => __('Google Plus Profile URL', 'vslmd'),
                        'desc'=> __('Please input the URL', 'vslmd'),
                    ),
                    array(
                        'id'=>'meta-box-team-instagram',
                        'type' => 'text', 
                        'title' => __('Instagram Profile URL', 'vslmd'),
                        'desc'=> __('Please input the URL', 'vslmd'),
                    ),
                    array(
                        'id'=>'meta-box-team-linkedin',
                        'type' => 'text', 
                        'title' => __('Linked In Profile URL', 'vslmd'),
                        'desc'=> __('Please input the URL', 'vslmd'),
                    ),
                    array(
                        'id'=>'meta-box-team-twitter',
                        'type' => 'text', 
                        'title' => __('Twitter Profile URL', 'vslmd'),
                        'desc'=> __('Please input the URL', 'vslmd'),
                    ),
                    array(
                        'id'=>'meta-box-team-vimeo',
                        'type' => 'text', 
                        'title' => __('Vimeo Profile URL', 'vslmd'),
                        'desc'=> __('Please input the URL', 'vslmd'),
                    ),
                    array(
                        'id'=>'meta-box-team-youtube',
                        'type' => 'text', 
                        'title' => __('Youtube Profile URL', 'vslmd'),
                        'desc'=> __('Please input the URL', 'vslmd'),
                    ),            
                ),
			),
		),
	)
);


/*-----------------------------------------------------------------------------------*/
/*	Aside Post Format
/*-----------------------------------------------------------------------------------*/	

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'aside-post-format-metabox',
        'title'  => esc_html__( 'Aside Options', 'vslmd' ),
		'post_types' => array( 'post' ),
        'post_format' => array('aside'),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'default', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields' => array( 
                    array(
                        'id'=>'meta-box-post-aside-text',
                        'type' => 'textarea', 
                        'desc'=> __('Please Write a content.', 'vslmd'),
                    ),         
                ),
			),
		),
	)
);


/*-----------------------------------------------------------------------------------*/
/*	Quote Post Format
/*-----------------------------------------------------------------------------------*/	

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'quote-post-format-metabox',
        'title'  => esc_html__( 'Quote Options', 'vslmd' ),
		'post_types' => array( 'post' ),
        'post_format' => array('quote'),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'default', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields' => array( 
                    array(
                        'id'=>'meta-box-post-quote-text',
                        'type' => 'textarea', 
                        'desc'=> __('Please Write a content for your quote.', 'vslmd'),
                    ),        
                ),
			),
		),
	)
);


/*-----------------------------------------------------------------------------------*/
/*	Link Post Format
/*-----------------------------------------------------------------------------------*/	

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'link-post-format-metabox',
        'title'  => esc_html__( 'Link Options', 'vslmd' ),
		'post_types' => array( 'post' ),
        'post_format' => array('link'),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'default', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields' => array( 
                    array(
                        'id'=>'meta-box-link-url',
                        'type' => 'text', 
                        'desc'=> __('Please input the URL for your link.', 'vslmd'),
                    ),         
                ),
			),
		),
	)
);


/*-----------------------------------------------------------------------------------*/
/*	Video Post Format
/*-----------------------------------------------------------------------------------*/	

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'video-post-format-metabox',
        'title'  => esc_html__( 'Video Options', 'vslmd' ),
		'post_types' => array( 'post' ),
        'post_format' => array('video'),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'default', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields' => array( 
                    array(
                        'id'       => 'meta-box-video-post-format',
                        'type'     => 'select',
                        //'title'    => __('Source Video', 'vslmd'), 
                        'options'  => array(
                            '1' => 'Youtube or Vimeo',
                            '2' => 'Self Hosted Video'
                        ),
                        'default'  => '1',
                    ),
                    array(
                        'id'=>'meta-box-video-embedded-code',
                        'type' => 'text', 
                        'title' => __('Embedded Code', 'vslmd'),
                        'desc'=> __('Enter a Youtube or Vimeo URL here.', 'vslmd'),
                        'required' => array('meta-box-video-post-format','equals','1'),
                    ), 
                    array(
                        'id'=>'meta-box-video-webm-url',
                        'type' => 'text', 
                        'title' => __('WEBM File URL', 'vslmd'),
                        'desc'=> __('You must include both formats.', 'vslmd'),
                        'required' => array('meta-box-video-post-format','equals','2'),
                    ), 
                    array(
                        'id'=>'meta-box-video-mp4-url',
                        'type' => 'text', 
                        'title' => __('MP4 File URL', 'vslmd'),
                        'desc'=> __('You must include both formats.', 'vslmd'),
                        'required' => array('meta-box-video-post-format','equals','2'),
                    ), 
                    array(
                        'id'=>'meta-box-video-ogv-url',
                        'type' => 'text', 
                        'title' => __('OGV File URL', 'vslmd'),
                        'desc'=> __('You must include both formats.', 'vslmd'),
                        'required' => array('meta-box-video-post-format','equals','2'),
                    ),      
                ),
			),
		),
	)
);


/*-----------------------------------------------------------------------------------*/
/*	Audio Post Format
/*-----------------------------------------------------------------------------------*/	

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'audio-post-format-metabox',
        'title'  => esc_html__( 'Audio Options', 'vslmd' ),
		'post_types' => array( 'post' ),
        'post_format' => array('audio'),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'default', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields' => array( 
                    array(
                        'id'=>'meta-box-audio-url',
                        'type' => 'text', 
                        'desc'=> __('Please Paste MP3 URL.', 'vslmd'),
                    ),        
                ),
			),
		),
	)
);


/*-----------------------------------------------------------------------------------*/
/*	Gallery Post Format
/*-----------------------------------------------------------------------------------*/	

Redux_Metaboxes::set_box(
	$opt_name,
	array(
		'id'         => 'gallery-post-format-metabox',
        'title'  => esc_html__( 'Gallery Options', 'vslmd' ),
		'post_types' => array( 'post' ),
        'post_format' => array('gallery'),
		'position'   => 'side', // normal, advanced, side.
		'priority'   => 'default', // high, core, default, low.
		'sections'   => array(
			array(
				'icon_class' => 'icon-large',
				'icon'       => 'el-icon-home',
				'fields' => array( 
                    array(
                        'id'          => 'meta-box-gallery',
                        'type'        => 'slides',
                        //'title'       => __('Gallery Slides', 'vslmd'),
                        'desc'        => __('Please put the slides.', 'vslmd'),
                        'show' => array(
                            'title' => true,
                            'description' => false,
                            'url' => false,
                        ),
                        'placeholder' => array(
                            'title'           => __('Title', 'vslmd'),
                        ),
                    ),        
                ),
			),
		),
	)
);
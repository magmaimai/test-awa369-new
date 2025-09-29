<?php 

/*-----------------------------------------------------------------------------------*/
/*	One Click Demo Import
/*-----------------------------------------------------------------------------------*/

function ocdi_plugin_page_setup( $default_settings ) {
  $default_settings['parent_slug'] = 'visualmodo';
  $default_settings['menu_title']  = esc_html__( 'Templates Library' , 'vslmd' );
  $default_settings['menu_slug']   = 'templates-library';
  
  return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'ocdi_plugin_page_setup' );

//Disable the ProteusThemes branding notice with a WP filter
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );


/*-----------------------------------------------------------------------------------*/
/*	One Click Demo Import - Import Files
/*-----------------------------------------------------------------------------------*/

function ocdi_import_files() {
  return [

    [
      'import_file_name'           => 'Business',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/business/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/business/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/business/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-business-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/business/',
    ],

    [
      'import_file_name'           => 'Gym',
      'categories'                 => [ 'Health / Beauty', 'Sports' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/gym/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/gym/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/gym/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-gym-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/gym/',
    ],

    [
      'import_file_name'           => 'Architects',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/architects/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/architects/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/architects/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-architects-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/architects/',
    ],

    [
      'import_file_name'           => 'Creative',
      'categories'                 => [ 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/creative/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/creative/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/creative/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-creative-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/creative/',
    ],

    [
      'import_file_name'           => 'Cafe',
      'categories'                 => [ 'Food' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/cafe/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/cafe/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/cafe/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-cafe-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/cafe/',
    ],

    [
      'import_file_name'           => 'Church',
      'categories'                 => [ 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/church/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/church/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/church/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-church-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/church/',
    ],

    [
      'import_file_name'           => 'Construction',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/construction/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/construction/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/construction/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-construction-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/construction/',
    ],

    [
      'import_file_name'           => 'Cryptocurrency',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/cryptocurrency/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/cryptocurrency/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/cryptocurrency/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-cryptocurrency-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/cryptocurrency/',
    ],

    [
      'import_file_name'           => 'Creative Studio',
      'categories'                 => [ 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/creative-studio/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/creative-studio/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/creative-studio/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-creative-studio-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/creative-studio/',
    ],

    [
      'import_file_name'           => 'Education',
      'categories'                 => [ 'Education' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/education/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/education/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/education/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-education-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/education/',
    ],

    [
      'import_file_name'           => 'Employment',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/employment/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/employment/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/employment/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-employment-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/employment/',
    ],

    [
      'import_file_name'           => 'Financial',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/financial/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/financial/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/financial/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-financial-cover-1-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/financial/',
    ],

    [
      'import_file_name'           => 'Fitness',
      'categories'                 => [ 'Health / Beauty', 'Shop', 'Sports' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fitness/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fitness/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fitness/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-fitness-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/fitness/',
    ],

    [
      'import_file_name'           => 'Restaurant',
      'categories'                 => [ 'Food', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/restaurant/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/restaurant/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/restaurant/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-restaurant-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/restaurant/',
    ],

    [
      'import_file_name'           => 'Community',
      'categories'                 => [ 'Entertainment', 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/community/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/community/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/community/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-community-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/community/',
    ],

    [
      'import_file_name'           => 'Hotel',
      'categories'                 => [ 'Corporate', 'Travel' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/hotel/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/hotel/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/hotel/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-hotel-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/hotel/',
    ],

    [
      'import_file_name'           => 'Writer Blog',
      'categories'                 => [ 'Blog' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/writer-blog/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/writer-blog/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/writer-blog/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-writer-blog-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/writer-blog/',
    ],

    [
      'import_file_name'           => 'IT',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/it/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/it/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/it/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-it-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/it/',
    ],

    [
      'import_file_name'           => 'Startup',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/startup/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/startup/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/startup/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-startup-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/startup/',
    ],

    [
      'import_file_name'           => 'Mechanic',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/mechanic/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/mechanic/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/mechanic/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-mechanic-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/mechanic/',
    ],

    [
      'import_file_name'           => 'Hospital',
      'categories'                 => [ 'Corporate', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/hospital/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/hospital/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/hospital/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-hospital-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/hospital/',
    ],

    [
      'import_file_name'           => 'Minimalist Agency',
      'categories'                 => [ 'Creative / Portfolio', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/minimalist-agency/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/minimalist-agency/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/minimalist-agency/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-minimalist-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/minimalist-agency/',
    ],

    [
      'import_file_name'           => 'Music',
      'categories'                 => [ 'Corporate', 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/music/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/music/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/music/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-music-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/music/',
    ],

    [
      'import_file_name'           => 'Graphic Designer',
      'categories'                 => [ 'Creative / Portfolio', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/graphic-designer/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/graphic-designer/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/graphic-designer/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-graphic-designer-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/graphic-designer/',
    ],

    [
      'import_file_name'           => 'Nonprofit',
      'categories'                 => [ 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/nonprofit/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/nonprofit/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/nonprofit/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-nonprofit-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/nonprofit/',
    ],

    [
      'import_file_name'           => 'Creative Agency',
      'categories'                 => [ 'Creative / Portfolio', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/creative-agency/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/creative-agency/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/creative-agency/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-creative-agency-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/creative-agency/',
    ],

    [
      'import_file_name'           => 'Petshop',
      'categories'                 => [ 'Corporate', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/petshop/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/petshop/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/petshop/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-petshop-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/petshop/',
    ],

    [
      'import_file_name'           => 'Photographer',
      'categories'                 => [ 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/photographer/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/photographer/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/photographer/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-photographer-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/photographer/',
    ],

    [
      'import_file_name'           => 'Politic',
      'categories'                 => [ 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/politic/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/politic/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/politic/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-politic-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/politic/',
    ],

    [
      'import_file_name'           => 'Agency',
      'categories'                 => [ 'Creative / Portfolio', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/agency/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/agency/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/agency/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-agency-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/agency/',
    ],

    [
      'import_file_name'           => 'Real Estate',
      'categories'                 => [ 'Real Estate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/realestate/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/realestate/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/realestate/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-realestate-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/realestate/',
    ],

    [
      'import_file_name'           => 'Salon',
      'categories'                 => [ 'Corporate', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/salon/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/salon/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/salon/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-salon-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/salon/',
    ],

    [
      'import_file_name'           => 'Fashion Shop',
      'categories'                 => [ 'Health / Beauty', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fashion-shop/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fashion-shop/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fashion-shop/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-fashion-shop-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/fashion-shop/',
    ],

    [
      'import_file_name'           => 'Digital Agency',
      'categories'                 => [ 'Health / Beauty', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/digital-agency/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/digital-agency/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/digital-agency/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-digital-agency-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/digital-agency/',
    ],

    [
      'import_file_name'           => 'Sports',
      'categories'                 => [ 'Health / Beauty', 'Shop', 'Sports' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/sports/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/sports/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/sports/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-sport-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/sports/',
    ],

    [
      'import_file_name'           => 'Freelancer Designer',
      'categories'                 => [ 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/freelancer-designer/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/freelancer-designer/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/freelancer-designer/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-freelancer-designer-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/freelancer-designer/',
    ],

    [
      'import_file_name'           => 'Travel Blog',
      'categories'                 => [ 'Blog', 'Travel' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/travel-blog/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/travel-blog/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/travel-blog/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-travel-blog-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/travel-blog/',
    ],

    [
      'import_file_name'           => 'Wedding',
      'categories'                 => [ 'Wedding' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/wedding/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/wedding/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/wedding/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-wedding-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/wedding/',
    ],

    [
      'import_file_name'           => 'Wines',
      'categories'                 => [ 'Food', 'Health / Beauty', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/wines/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/wines/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/wines/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-wines-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/wines/',
    ],

    [
      'import_file_name'           => 'Web Studio',
      'categories'                 => [ 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/web-studio/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/web-studio/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/web-studio/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-web-studio-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/web-studio/',
    ],

    [
      'import_file_name'           => 'Psychology',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/psychology/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/psychology/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/psychology/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-psychology-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/psychology/',
    ],

    [
      'import_file_name'           => 'Veterinarian',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/veterinarian/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/veterinarian/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/veterinarian/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-veterinarian-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/veterinarian/',
    ],

    [
      'import_file_name'           => 'Barber',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/barber/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/barber/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/barber/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-barber-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/barber/',
    ],

    [
      'import_file_name'           => 'Dentist',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/dental/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/dental/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/dental/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-dentist-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/dental/',
    ],

    [
      'import_file_name'           => 'Spa',
      'categories'                 => [ 'Corporate', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/spa/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/spa/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/spa/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-spa-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/spa/',
    ],

    [
      'import_file_name'           => 'Bakery',
      'categories'                 => [ 'Corporate', 'Food' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/bakery/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/bakery/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/bakery/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-bakery-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/bakery/',
    ],

    [
      'import_file_name'           => 'Nutritionist',
      'categories'                 => [ 'Corporate', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/nutritionist/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/nutritionist/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/nutritionist/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-nutritionist-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/nutritionist/',
    ],

    [
      'import_file_name'           => 'Lawyer',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/law/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/law/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/law/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-lawyer-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/law/',
    ],

    [
      'import_file_name'           => 'Logistics',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/logistics/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/logistics/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/logistics/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-logistics-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/logistics/',
    ],

    [
      'import_file_name'           => 'Hosting',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/hosting/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/hosting/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/hosting/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-hosting-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/hosting/',
    ],

    [
      'import_file_name'           => 'Repair',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/repair/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/repair/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/repair/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-repair-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/repair/',
    ],

    [
      'import_file_name'           => 'Oculist',
      'categories'                 => [ 'Corporate', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/oculist/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/oculist/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/oculist/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-oculist-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/oculist/',
    ],

    [
      'import_file_name'           => 'Biker',
      'categories'                 => [ 'Sports' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/biker/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/biker/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/biker/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-biker-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/biker/',
    ],

    [
    'import_file_name'           => 'Swimming Pool',
    'categories'                 => [ 'Corporate', 'Sports' ],
    'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/swimming-pool/content.xml',
    'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/swimming-pool/widgets.wie',
    'import_redux'               => [
      [
        'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/swimming-pool/redux.json',
        'option_name' => 'vslmd_options',
      ],
    ],
    'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-swimming-pool-cover-768x576.jpg',
    'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/swimming-pool/',
  ],

    [
      'import_file_name'           => 'Coach',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/coach/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/coach/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/coach/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-coach-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/coach/',
    ],

    [
      'import_file_name'           => 'Aromatherapy',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/aromatherapy/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/aromatherapy/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/aromatherapy/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-aromatherapy-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/aromatherapy/',
    ],

    [
      'import_file_name'           => 'Data',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/data/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/data/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/data/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-data-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/data/',
    ],

    [
      'import_file_name'           => 'ERP',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/erp/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/erp/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/erp/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-erp-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/erp/',
    ],

    [
      'import_file_name'           => 'School',
      'categories'                 => [ 'Education' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/school/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/school/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/school/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-school-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/school/',
    ],

    [
      'import_file_name'           => 'Horse',
      'categories'                 => [ 'Corporate', 'Entertainment' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/horse/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/horse/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/horse/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-horse-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/horse/',
    ],

    [
      'import_file_name'           => 'Farm',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/farm/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/farm/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/farm/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-farm-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/farm/',
    ],

    [
      'import_file_name'           => 'Home',
      'categories'                 => [ 'Corporate', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/home/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/home/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/home/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-home-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/home/',
    ],

    [
      'import_file_name'           => 'Ice Cream',
      'categories'                 => [ 'Corporate', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/ice-cream/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/ice-cream/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/ice-cream/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-ice-cream-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/ice-cream/',
    ],

    [
      'import_file_name'           => 'Electrician',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/electric/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/electric/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/electric/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-electrician-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/electric/',
    ],

    [
      'import_file_name'           => 'Craftbeer',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/craftbeer/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/craftbeer/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/craftbeer/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-craftbeer-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/craftbeer/',
    ],

    [
      'import_file_name'           => 'Mall',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/mall/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/mall/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/mall/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-mall-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/mall/',
    ],

    [
      'import_file_name'           => 'Eco Food',
      'categories'                 => [ 'Food', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/eco-food/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/eco-food/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/eco-food/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-eco-food-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/eco-food/',
    ],

    [
      'import_file_name'           => 'Honey',
      'categories'                 => [ 'Food', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/honey/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/honey/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/honey/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-honey-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/honey/',
    ],

    [
      'import_file_name'           => 'Bar',
      'categories'                 => [ 'Entertainment' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/bar/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/bar/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/bar/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-bar-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/bar/',
    ],

    [
      'import_file_name'           => 'Lab',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/lab/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/lab/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/lab/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-lab-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/lab/',
    ],

    [
      'import_file_name'           => 'Tea',
      'categories'                 => [ 'Food', 'Health / Beauty', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/tea/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/tea/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/tea/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-tea-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/tea/',
    ],

    [
      'import_file_name'           => 'Model',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/model/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/model/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/model/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-model-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/model/',
    ],

    [
      'import_file_name'           => 'Car Specification',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/car-specification/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/car-specification/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/car-specification/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-car-specification-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/car-specification/',
    ],

    [
      'import_file_name'           => 'Interior',
      'categories'                 => [ 'Corporate', 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/interior/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/interior/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/interior/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-interior-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/interior/',
    ],

    [
      'import_file_name'           => 'Animals',
      'categories'                 => [ 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/animals/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/animals/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/animals/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-animals-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/animals/',
    ],

    [
      'import_file_name'           => 'Manicure',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/manicure/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/manicure/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/manicure/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-manicure-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/manicure/',
    ],

    [
      'import_file_name'           => 'Carpenter',
      'categories'                 => [ 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/carpenter/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/carpenter/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/carpenter/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-carpenter-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/carpenter/',
    ],

    [
      'import_file_name'           => 'Consultant',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/consultant/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/consultant/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/consultant/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-consultant-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/consultant/',
    ],

    [
      'import_file_name'           => 'Mining',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/mining/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/mining/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/mining/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-mining-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/mining/',
    ],

    [
      'import_file_name'           => 'Whiskey',
      'categories'                 => [ 'Corporate', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/whiskey/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/whiskey/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/whiskey/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-whiskey-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/whiskey/',
    ],

    [
      'import_file_name'           => 'Pest Control',
      'categories'                 => [ 'Corporate', 'Food', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/pestcontrol/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/pestcontrol/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/pestcontrol/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-pest-control-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/pestcontrol/',
    ],

    [
      'import_file_name'           => 'Call Center',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/callcenter/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/callcenter/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/callcenter/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-call-center-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/callcenter/',
    ],

    [
      'import_file_name'           => 'Paintball',
      'categories'                 => [ 'Entertainment' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/paintball/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/paintball/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/paintball/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-paintball-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/paintball/',
    ],

    [
      'import_file_name'           => 'Cleaner',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/cleaner/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/cleaner/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/cleaner/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-cleaner-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/cleaner/',
    ],

    [
      'import_file_name'           => 'Video',
      'categories'                 => [ 'Entertainment' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/video/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/video/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/video/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-video-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/video/',
    ],

    [
      'import_file_name'           => 'Shoes',
      'categories'                 => [ 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/shoes/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/shoes/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/shoes/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-shoes-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/shoes/',
    ],

    [
      'import_file_name'           => 'Eco Meat',
      'categories'                 => [ 'Food', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/eco-meat/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/eco-meat/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/eco-meat/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-eco-meat-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/eco-meat/',
    ],

    [
      'import_file_name'           => 'Drone',
      'categories'                 => [ 'Corporate', 'Entertainment' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/drone/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/drone/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/drone/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-drone-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/drone/',
    ],

    [
      'import_file_name'           => 'Garden',
      'categories'                 => [ 'Entertainment' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/garden/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/garden/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/garden/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-garden-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/garden/',
    ],

    [
      'import_file_name'           => 'Science',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/science/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/science/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/science/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-science-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/science/',
    ],

    [
      'import_file_name'           => 'Beauty',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/beauty/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/beauty/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/beauty/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-beauty-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/beauty/',
    ],

    [
      'import_file_name'           => 'Jeweler',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/jeweler/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/jeweler/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/jeweler/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-jeweler-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/jeweler/',
    ],

    [
      'import_file_name'           => 'Fire Brigade',
      'categories'                 => [ 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/firebrigade/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/firebrigade/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/firebrigade/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-fire-brigade-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/firebrigade/',
    ],

    [
      'import_file_name'           => 'Scooter Rental',
      'categories'                 => [ 'Corporate', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/scooter-rental/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/scooter-rental/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/scooter-rental/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-scooter-rental-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/scooter-rental/',
    ],

    [
      'import_file_name'           => 'Dance School',
      'categories'                 => [ 'Education', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/danceschool/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/danceschool/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/danceschool/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-dance-school-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/danceschool/',
    ],

    [
      'import_file_name'           => 'Fishing School',
      'categories'                 => [ 'Education' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fishing-school/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fishing-school/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fishing-school/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-fishing-school-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/fishing-school/',
    ],

    [
      'import_file_name'           => 'Driving',
      'categories'                 => [ 'Corporate', 'Education' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/driving/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/driving/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/driving/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-driving-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/driving/',
    ],

    [
      'import_file_name'           => 'Industry Factory',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/industry-factory/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/industry-factory/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/industry-factory/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-industry-factory-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/industry-factory/',
    ],

    [
      'import_file_name'           => 'Rally Driver',
      'categories'                 => [ 'Entertainment', 'Sports' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/rallydriver/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/rallydriver/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/rallydriver/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-rally-driver-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/rallydriver/',
    ],

    [
      'import_file_name'           => 'Marathon',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/marathon/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/marathon/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/marathon/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-marathon-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/marathon/',
    ],

    [
      'import_file_name'           => 'Funeral Home',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/funeralhome/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/funeralhome/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/funeralhome/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-funeral-home-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/funeralhome/',
    ],

    [
      'import_file_name'           => 'Boutique',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/boutique/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/boutique/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/boutique/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-boutique-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/boutique/',
    ],

    [
      'import_file_name'           => 'Boxing',
      'categories'                 => [ 'Sports' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/boxing/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/boxing/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/boxing/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-boxing-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/boxing/',
    ],

    [
      'import_file_name'           => 'Aeroclub',
      'categories'                 => [ 'Education', 'Entertainment' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/aeroclub/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/aeroclub/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/aeroclub/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-aeroclub-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/aeroclub/',
    ],

    [
      'import_file_name'           => 'Renovate',
      'categories'                 => [ 'Corporate', 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/renovate/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/renovate/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/renovate/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-renovate-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/renovate/',
    ],

    [
      'import_file_name'           => 'Cakes',
      'categories'                 => [ 'Food' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/cakes/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/cakes/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/cakes/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-cakes-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/cakes/',
    ],

    [
      'import_file_name'           => 'Taxi',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/taxi/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/taxi/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/taxi/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-taxi-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/taxi/',
    ],

    [
      'import_file_name'           => 'Xmas',
      'categories'                 => [ 'Entertainment', 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/xmas/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/xmas/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/xmas/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-xmas-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/xmas/',
    ],

    [
      'import_file_name'           => 'Language',
      'categories'                 => [ 'Education' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/language/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/language/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/language/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2021/12/aesir-language-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/language/',
    ],

    [
      'import_file_name'           => 'Pet',
      'categories'                 => [ 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/pet/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/pet/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/pet/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-pet-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/pet/',
    ],

    [
      'import_file_name'           => 'Football',
      'categories'                 => [ 'Sports' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/football/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/football/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/football/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-football-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/football/',
    ],

    [
      'import_file_name'           => 'Clothing',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/clothing/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/clothing/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/clothing/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-clothing-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/clothing/',
    ],

    [
      'import_file_name'           => 'Birthday',
      'categories'                 => [ 'Entertainment', 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/birthday/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/birthday/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/birthday/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-birthday-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/birthday/',
    ],

    [
      'import_file_name'           => 'Music School',
      'categories'                 => [ 'Education' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/music-school/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/music-school/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/music-school/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-school-music-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/music-school/',
    ],

    [
      'import_file_name'           => 'Fast Food',
      'categories'                 => [ 'Corporate', 'Food' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fast-food/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fast-food/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fast-food/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-fast-food-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/fast-food/',
    ],

    [
      'import_file_name'           => 'Ceramic Store',
      'categories'                 => [ 'Corporate', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/ceramic-store/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/ceramic-store/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/ceramic-store/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-ceramic-store-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/ceramic-store/',
    ],

    [
      'import_file_name'           => 'Astrology',
      'categories'                 => [ 'Entertainment', 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/astrology/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/astrology/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/astrology/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-astrology-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/astrology/',
    ],

    [
      'import_file_name'           => 'Pianist',
      'categories'                 => [ 'Education', 'Entertainment' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/pianist/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/pianist/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/pianist/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-pianist-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/pianist/',
    ],

    [
      'import_file_name'           => 'Florist',
      'categories'                 => [ 'Corporate', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/florist/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/florist/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/florist/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-florist-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/florist/',
    ],

    [
      'import_file_name'           => 'Lingerie',
      'categories'                 => [ 'Health / Beauty', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/lingerie/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/lingerie/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/lingerie/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-lingerie-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/lingerie/',
    ],

    [
      'import_file_name'           => 'Food Truck',
      'categories'                 => [ 'Food' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/food-truck/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/food-truck/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/food-truck/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-food-truck-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/food-truck/',
    ],

    [
      'import_file_name'           => 'Medical Shop',
      'categories'                 => [ 'Health / Beauty', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/medical-shop/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/medical-shop/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/medical-shop/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-medical-shop-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/medical-shop/',
    ],

    [
      'import_file_name'           => 'Organic',
      'categories'                 => [ 'Food', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/organic/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/organic/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/organic/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-organic-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/organic/',
    ],

    [
      'import_file_name'           => 'Glasses',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/glasses/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/glasses/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/glasses/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-glasses-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/glasses/',
    ],

    [
      'import_file_name'           => 'Artist',
      'categories'                 => [ 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/artist/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/artist/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/artist/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-artist-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/artist/',
    ],

    [
      'import_file_name'           => 'Herbal',
      'categories'                 => [ 'Food', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/herbal/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/herbal/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/herbal/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-herbal-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/herbal/',
    ],

    [
      'import_file_name'           => 'Makeup',
      'categories'                 => [ 'Corporate', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/makeup/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/makeup/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/makeup/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-makeup-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/makeup/',
    ],

    [
      'import_file_name'           => 'Festival',
      'categories'                 => [ 'Entertainment' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/festival/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/festival/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/festival/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-festival-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/festival/',
    ],

    [
      'import_file_name'           => 'Catering',
      'categories'                 => [ 'Food' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/catering/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/catering/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/catering/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-catering-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/catering/',
    ],

    [
      'import_file_name'           => 'Casino',
      'categories'                 => [ 'Entertainment' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/casino/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/casino/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/casino/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-casino-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/casino/',
    ],

    [
      'import_file_name'           => 'Marketing',
      'categories'                 => [ 'Corporate' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/marketing/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/marketing/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/marketing/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-marketing-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/marketing/',
    ],

    [
      'import_file_name'           => 'Underwater',
      'categories'                 => [ 'Entertainment' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/underwater/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/underwater/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/underwater/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-underwater-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/underwater/',
    ],

    [
      'import_file_name'           => 'Model 2',
      'categories'                 => [ 'Entertainment' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/model-2/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/model-2/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/model-2/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-model-2-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/model-2/',
    ],

    [
      'import_file_name'           => 'Charity',
      'categories'                 => [ 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/charity/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/charity/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/charity/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-charity-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/charity/',
    ],

    [
      'import_file_name'           => 'Wedding 2',
      'categories'                 => [ 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/wedding-2/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/wedding-2/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/wedding-2/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-wedding-2-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/wedding-2/',
    ],

    [
      'import_file_name'           => 'Horse 2',
      'categories'                 => [ 'Corporate', 'Sports' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/horse-2/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/horse-2/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/horse-2/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-horse-2-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/horse-2/',
    ],

    [
      'import_file_name'           => 'Church 2',
      'categories'                 => [ 'Nonprofit' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/church-2/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/church-2/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/church-2/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-church-2-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/church-2/',
    ],

    [
      'import_file_name'           => 'Nursing Home 2',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/nursinghome-2/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/nursinghome-2/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/nursinghome-2/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-nursing-home-2-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/nursinghome-2/',
    ],

    [
      'import_file_name'           => 'Language 2',
      'categories'                 => [ 'Education' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/language-2/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/language-2/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/language-2/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-language-2-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/language-2/',
    ],

    [
      'import_file_name'           => 'Makeup 2',
      'categories'                 => [ 'Corporate', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/makeup-2/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/makeup-2/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/makeup-2/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-makeup-2-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/makeup-2/',
    ],

    [
      'import_file_name'           => 'Lingerie 2',
      'categories'                 => [ 'Health / Beauty', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/lingerie-2/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/lingerie-2/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/lingerie-2/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-lingerie-2-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/lingerie-2/',
    ],

    [
      'import_file_name'           => 'Psychologist',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/psychologist/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/psychologist/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/psychologist/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-psychologist-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/psychologist/',
    ],

    [
      'import_file_name'           => 'Minimal Photography',
      'categories'                 => [ 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/minimal-photography/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/minimal-photography/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/minimal-photography/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-minimal-photography-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/minimal-photography/',
    ],

    [
      'import_file_name'           => 'Jeweler Showcase',
      'categories'                 => [ 'Corporate', 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/jeweler-showcase/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/jeweler-showcase/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/jeweler-showcase/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-jeweler-showcase-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/jeweler-showcase/',
    ],

    [
      'import_file_name'           => 'Hairdresser',
      'categories'                 => [ 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/hairdresser/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/hairdresser/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/hairdresser/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-hairdresser-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/hairdresser/',
    ],

    [
      'import_file_name'           => 'Artist Minimal',
      'categories'                 => [ 'Creative / Portfolio' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/artist-minimal/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/artist-minimal/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/artist-minimal/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-artist-minimal-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/artist-minimal/',
    ],

    [
      'import_file_name'           => 'Fashion Retail',
      'categories'                 => [ 'Corporate', 'Health / Beauty' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fashion-retail/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fashion-retail/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/fashion-retail/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-fashion-retail-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/fashion-retail/',
    ],

    [
      'import_file_name'           => 'Rattan Furniture',
      'categories'                 => [ 'Corporate', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/rattan-furniture/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/rattan-furniture/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/rattan-furniture/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-rattan-furniture-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/rattan-furniture/',
    ],

    [
      'import_file_name'           => 'Yoga Studio',
      'categories'                 => [ 'Health / Beauty', 'Sports' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/yoga-studio/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/yoga-studio/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/yoga-studio/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-yoga-studio-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/yoga-studio/',
    ],

    [
      'import_file_name'           => 'Optician',
      'categories'                 => [ 'Corporate', 'Shop' ],
      'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/optician/content.xml',
      'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/optician/widgets.wie',
      'import_redux'               => [
        [
          'file_url'    => 'https://cdn.visualmodo.com/library/templates/wpbakery/aesir/optician/redux.json',
          'option_name' => 'vslmd_options',
        ],
      ],
      'import_preview_image_url'   => 'https://aesir.visualmodo.com/wp-content/uploads/2022/01/aesir-optician-cover-768x576.jpg',
      'preview_url'                => 'https://aesir.visualmodo.com/prebuilt-website/optician/',
    ],

  ];
}
add_filter( 'ocdi/import_files', 'ocdi_import_files' );


/*-----------------------------------------------------------------------------------*/
/*	One Click Demo Import - After Setup
/*-----------------------------------------------------------------------------------*/

function ocdi_after_import( $demos ) {
  
  if ( 'Business' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Gym' === $demos['import_file_name'] ) {
    
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Architects' === $demos['import_file_name'] ) {
    
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Creative' === $demos['import_file_name'] ) {
    
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Cafe' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $top_menu = get_term_by( 'name', 'Top Menu', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'top_menu' => $top_menu->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Church' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Construction' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Cryptocurrency' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Creative Studio' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Education' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $side = get_term_by( 'name', 'Side Menu', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'side' => $side->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Employment' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'News' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Financial' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'News' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Fitness' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Restaurant' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Community' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'News' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Hotel' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Writer Blog' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $side = get_term_by( 'name', 'Side Menu', 'nav_menu' );
    $categories = get_term_by( 'Categories', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'side' => $side->term_id,
      'categories' => $categories->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'IT' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Startup' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $copyright = get_term_by( 'name', 'Copyright Menu', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'copyright' => $copyright->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Mechanic' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Hospital' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'News' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Minimalist Agency' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    $footer_right = get_term_by( 'name', 'Footer Right', 'nav_menu' );
    $side_menu = get_term_by( 'name', 'Side Menu', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      'footer_right' => $footer_right->term_id,
      'side_menu' => $side_menu->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Music' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Graphic Designer' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main/Mobile', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    $left = get_term_by( 'name', 'Left', 'nav_menu' );
    $right = get_term_by( 'name', 'Right', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      'left' => $left->term_id,
      'right' => $right->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Nonprofit' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Creative Agency' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $side = get_term_by( 'name', 'Side', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Petshop' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Photographer' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Politic' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    $proposals = get_term_by( 'name', 'Proposals', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      'proposals' => $proposals->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Agency' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    $side = get_term_by( 'name', 'Side', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      'side' => $side->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Real Estate' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Salon' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Fashion Shop' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Digital Agency' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Sports' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Freelancer Designer' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $one_page = get_term_by( 'name', 'One Page', 'nav_menu' );
    $side = get_term_by( 'name', 'Side', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'one_page' => $one_page->term_id,
      'side' => $side->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Travel Blog' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $categories = get_term_by( 'name', 'Categories', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'categories' => $one_page->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Wedding' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Wines' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Web Studio' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Psychology' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Veterinarian' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Barber' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Dentist' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Spa' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Bakery' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Journal' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Nutritionist' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Journal' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Lawyer' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Logistics' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Hosting' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Repair' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Oculist' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Biker' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Swimming Pool' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Coach' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    $footer = get_term_by( 'name', 'Footer', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      'footer' => $footer->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Data' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'ERP' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'School' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'News & Events' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Horse' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Farm' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Home' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Ice Cream' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Electrician' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Start' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Craftbeer' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Mall' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Events' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Eco Food' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Honey' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Bar' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Lab' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Tea' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Model' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Car Specification' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Interior' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Animals' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Manicure' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Carpenter' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Consultant' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Mining' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Whiskey' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Pest Control' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Call Center' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Paintball' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Cleaner' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Shoes' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Eco Meat' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    $blog_page_id  = get_page_by_title( 'OUR BLOG' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Drone' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Garden' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Science' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'News' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Beauty' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Jeweler' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Jeweler' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Fire Brigade' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Scooter Rental' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Dance School' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Fishing School' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Driving' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Industry Factory' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    $blog_page_id  = get_page_by_title( 'BLOG' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Rally Driver' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Marathon' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Start' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Funeral Home' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Boutique' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Boxing' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Aeroclub' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    $blog_page_id  = get_page_by_title( 'NEWS AND EVENTS' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Renovate' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Cakes' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Hello' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Taxi' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Start' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Xmas' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'START' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Language' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Pet' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Football' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    $blog_page_id  = get_page_by_title( 'NEWS' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Clothing' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Birthday' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Music School' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Fast Food' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Ceramic Store' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Astrology' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Pianist' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Florist' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Lingerie' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Food Truck' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'START' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Medical Shop' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Organic' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Glasses' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Artist' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Herbal' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Makeup' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Start' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Festival' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Start' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Catering' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Casino' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Start' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Marketing' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Underwater' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Model 2' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Charity' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Wedding 2' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Horse 2' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Church 2' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'About' );
    $blog_page_id  = get_page_by_title( 'News' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Nursing Home 2' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Language 2' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Makeup 2' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Start' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Lingerie 2' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Psychologist' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'About' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Minimal Photography' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
  } elseif ( 'Jeweler Showcase' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Hairdresser' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Artist Minimal' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Fashion Retail' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Rattan Furniture' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'HOME' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Yoga Studio' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  } elseif ( 'Optician' === $demos['import_file_name'] ) {
    
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Main', 'nav_menu' );
    
    set_theme_mod( 'nav_menu_locations', [
      'primary' => $primary->term_id,
      ]
    );
    
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    
  }
  
}
add_action( 'ocdi/after_import', 'ocdi_after_import' );
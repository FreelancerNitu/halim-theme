<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {


  // Set a unique slug-like ID
  $prefix = 'halim_options';

  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => __('Halim Options', 'halim'),
    'menu_slug'  => 'halim_options',
    'framework_title' => 'Halim Options - <small>Na Shree Nitu</small>',
    'menu_parent' => 'themes.php',
    'menu_type' => 'submenu',
  ));
  
/*****************************
 * Header Options
*****************************/
  CSF::createSection( $prefix, array(
    'id'  => 'header_options',
    'title' => __('Header Options', 'halim'),
    'icon' => 'fas fa-address-card',
    ));
    
 // Create a section
  CSF::createSection( $prefix, array(
   'parent'  => 'header_options',
   'title' => __('Header Left', 'halim'),
   'icon' => 'fas fa-arrow-right',
   'fields' => array(
    array(
      'id' => 'header_email',
      'type' => 'text',
      'title' => __('Email Address', 'halim'),
      'default' => 'info@halim.com'
    ),
    array(
      'id' => 'header_phone',
      'type' => 'text',
      'title' => __('Phone', 'halim'),
      'default' => '122015'
      )
    )
  ));
  
// Create Top Header Icon section
  CSF::createSection($prefix, array(
   'parent' => 'header_options',
   'title'=>__('Header Icons', 'halim'),
   'icon' => 'fas fa-arrow-right',
   'fields' => array(
      array(
        'id' => 'header_icons',
        'title' => 'Header Icons',
        'type' => 'group',
        'button_title' => 'Add New Social Box',
        'fields' => array(
          array(
            'id' => 'social_title',
            'title' => __('Social Title', 'halim'),
            'type' => 'text',
          ),
          array(
            'id' => 'social_link',
            'title' => __('Social Link', 'halim'),
            'type' => 'text',
          ),
          array(
            'id' => 'social_icon',
            'title' => __('Social Icon', 'halim'),
            'type' => 'icon',
          ),
        )
      ),  
     )
  ));
  
  // Header Target Link
  CSF::createSection($prefix, array(
    'parent' => 'header_options',
    'title' => __('Select Link Taget', 'halim'),
    'icon' => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id' => 'header_link_target',
        'title' => __('Select Link Target', 'halim'),
        'type' => 'select',
        'options' => array(
          '_self' => __('Open In Same Tab', 'halim'),
          '_blank' => __('Open In New Tab', 'halim'),
          '_windo' => __('Open In New Window', 'halim'),
        ),
        'default' => '_blank',
      )
    )
  ));


// Create Top Header logo section
  CSF::createSection($prefix, array(
   'parent' => 'header_options',
   'title' => __('Logo', 'halim'),
   'icon' => 'fas fa-arrow-right',
   'fields' => array(
    array(
      'id' => 'logo',
      'type' => 'media',
      'title' => __('Upload Logo', 'halim'),
     )
   )
  ));
/***************************************
 * Header Background Color Options
*****************************************/
  CSF::createSection($prefix, array(
    'parent' => 'header_options',
    'title' => __('Header Styling', 'halim'),
    'icon' => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id' => 'header_background',
        'title' => __('Header Background Color / Image', 'halim'),
        'type' => 'background',
        'output' => array('.header-top'),
      ),
      array(
        'id' => 'header_color',
        'title' => __('Header Text Color', 'halim'),
        'type' => 'color',
        'output' => array('.header-top a')
      ),
      array(
        'id' => 'header_icon_color',
        'title' => __('Header Icon Color', 'halim'),
        'type' => 'color',
        'output' => array('.header-social a')
      ),
      array(
        'id' => 'header_typography',
        'title' => __('Header typography', 'halim'),
        'type' => 'typography',
        'output' => array('.header-top a')
      ),
      array(
        'id' => 'header_link_hover',
        'title' => __('Header Link Hover', 'halim'),
        'type' => 'color',
        'output' => array('.header-social a:hover')
      ),
    )
    ));


/*****************************
 * About Us Options
*****************************/
  CSF::createSection($prefix, array(
   'id' => 'about_options',
   'title' =>__('About Section', 'halim'),
   'icon' => 'fas fa-address-card',
  ));
// About Section Title 
  CSF::createSection($prefix, array(
   'parent' => 'about_options',
   'title' => __('About Section Title', 'halim'),
   'icon' => 'fas fa-arrow-right',
   'fields' => array(
    array(
      'id' => 'about_sec_subtitle',
      'title' => __('Sub Title', 'halim'),
      'type' => 'text',
      'desc' => __('Write About Section Sub Title Here', 'halim'),
      'default' =>__('who we are?', 'halim'),
    ),
    array(
      'id' => 'about_sec_title',
      'title' => __('Title', 'halim'),
      'type' => 'text',
      'desc' => __('Write About Section Title Here', 'halim'),
      'default' =>__('ABOUT US', 'halim'),
    ),
    array(
      'id' => 'about_sec_desc',
      'title' => __('Description', 'halim'),
      'type' => 'textarea',
      'desc' => __('Write About Section Description Here', 'halim'),
      'default' =>__('Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d', 'halim'),
     )
   )
  ));

// About Page Content
  CSF::createSection($prefix, array(
   'parent' => 'about_options',
   'title' => __('About Page Content', 'halim'),
   'icon' => 'fas fa-arrow-right',
   'fields' => array(
    array(
      'id' => 'about_page_title',
      'title' => __('About Page Title', 'halim'),
      'type' => 'text',
      'desc' => __('Write About Page Title Here', 'halim'),
      'default' => __('Welcome To Halim', 'halim')
    ),
    array(
      'id' => 'about_page_desc',
      'title' => __('About Page Description', 'halim'),
      'type' => 'textarea',
      'desc' => __('Write About Page Description Here', 'halim'),
      'default' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda distinctio maxime laborum.', 'halim')
    ),
    array(
      'id' => 'about_sec_btn',
      'title' => __('About Page Link', 'halim'),
      'type' => 'text',
      'desc' => __('Write About Page Link Here', 'halim'),
     )
   )
  ));


// About Page Features
  CSF::createSection($prefix, array(
   'parent' => 'about_options',
   'title' => __('About Page Features', 'halim'),
   'icon' => 'fas fa-arrow-right',
   'fields' => array(
     array(
      'id' => 'about_page_features',
      'title' => __('About Page Features', 'halim'),
      'type' => 'group',
      'button_title' => __('Add New Feature', 'halim'),
      'desc' => __('Write About Page Feature Here', 'halim'),
      'fields' => array(
        array(
          'id' => 'about_features_title',
          'title' =>__('About Features Titel', 'halim'),
          'type' => 'text',
          'default' =>__('Our Mission', 'halim'),
          'desc' => __('Write About Feature Title Here', 'halim'),
        ),
        array(
          'id' => 'about_features_icon',
          'title' =>__('About Features Icon', 'halim'),
          'type' => 'icon',
          'desc' => __('Add About Feature Icon Here', 'halim'),
        ),
        array(
          'id' => 'about_features_desc',
          'title' =>__('About Features Description', 'halim'),
          'type' => 'textarea',
          'default' =>__('Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry', 'halim'),
          'desc' => __('Write About Features Description Here', 'halim'),
        ),
       )
     ),
    )
  ));

// About Page Faq
  CSF::createSection($prefix, array(
   'parent' => 'about_options',
   'title' => __('About Information', 'halim'),
   'fields' => array(
    array(
      'id' => 'about_faq-list',
      'title' => __('About FAQ', 'halim'),
      'type' => 'group',
      'button_title' => __('Add New FAQ', 'halim'),
      'fields' => array(
        array(
          'id' => 'faq_title',
          'title' => __('FAQ Title', 'halim'),
          'type' => 'text',
          'default' =>__('What if Web Design & Development', 'halim'),
          'desc' => __('Write FAQ Title Here', 'halim'),
        ),
        array(
          'id' => 'faq_desc',
          'title' => __('FAQ Description', 'halim'),
          'type' => 'textarea',
          'default' =>__('Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.', 'halim'),
          'desc' => __('Write FAQ Description Here', 'halim'),
        ),
       )
     )
   )
  ));

// About Skills
  CSF::createSection($prefix, array(
   'parent' => 'about_options',
   'title' => __('About Skills', 'halim'),
   'fields' => array(
     array(
      'id' => 'about_skill-list',
      'title' => __('About Skills', 'halim'),
      'type' => 'group',
      'button_title' => __('Add New Skill', 'halim'),
      'fields' => array(
        array(
          'id' => 'skill_title',
          'title' => __('Skill Title', 'halim'),
          'type' => 'text',
          'default' =>__('Html', 'halim'),
          'desc' => __('Write Here Skill Titile', 'halim')
        ),
        array(
          'id' => 'skill_number',
          'title' => __('Skill Number', 'halim'),
          'type' => 'text',
          'default' =>__('90', 'halim'),
          'desc' =>__('Write Here Skill Number', 'halim'),
        ),
       )
     )
    )
  ));
  
/*****************************
 * Services Options
*****************************/
CSF::createSection($prefix, array(
  'id' => 'service_options',
  'title' =>__('Service Section', 'halim'),
  'icon' => 'fas fa-address-card',
 ));
// Service Section Title 
 CSF::createSection($prefix, array(
  'parent' => 'service_options',
  'title' => __('Service Section Title', 'halim'),
  'icon' => 'fas fa-arrow-right',
  'fields' => array(
   array(
     'id' => 'service_sec_subtitle',
     'title' => __('Sub Title', 'halim'),
     'type' => 'text',
     'desc' => __('Write Service Section Sub Title Here', 'halim'),
     'default' => __('who we are?', 'halim'),
   ),
   array(
     'id' => 'service_sec_title',
     'title' => __('Title', 'halim'),
     'type' => 'text',
     'desc' => __('Write Service Section Title Here', 'halim'),
     'default' => __('OUR SERVICES', 'halim'),
   ),
   array(
     'id' => 'service_sec_desc',
     'title' => __('Description', 'halim'),
     'type' => 'textarea',
     'desc' => __('Write Service Section Description Here', 'halim'),
     'default' => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d', 'halim'),
    )
  )
 ));

/*****************************
 * Counter Option
*****************************/ 
  CSF::createSection($prefix, array(
   'id' => 'counter_options',
   'title' =>__('Counter Option', 'halim'),
   'icon' => 'fas fa-address-card',
   'fields' => array(
     array(
      'id' => 'counter_list',
      'title' => __('Counter List', 'halim'),
      'type' => 'group',
      'button_title' => __('Add New Counter', 'halim'),
      'fields' => array(
        array(
          'id' => 'counter_icon',
          'title' =>__('Counter Icon', 'halim'),
          'type' => 'icon',
        ),
        array(
          'id' => 'counter_title',
          'title' =>__('Counter Title', 'halim'),
          'type' => 'text',
          'default' => __('Project Done', 'halim'),
          'desc' => __('Write Here Counter Title', 'halim')
        ),
        array(
          'id' => 'counter_number',
          'title' =>__('Counter Number', 'halim'),
          'type' => 'number',
          'default' => '400',
          'desc' => __('Write Here Counter Number', 'halim')
        ),
       )
     )
    )
  ));

/*****************************
 * Testimonial Options
*****************************/ 
  CSF::createSection($prefix, array(
   'id' => 'testimonial_options',
   'title' => __('Testimonial Section', 'halim'),
   'icon' => 'fas fa-address-card',
  ));

// Section
  CSF::createSection($prefix, array(
   'parent' => 'testimonial_options',
   'title' => __('Testimonial Section Title','halim'),
   'icon' => 'fas fa-arrow-right',
   'fields' => array(
     array(
      'id' => 'testimonial_sec_subtitle',
      'title' =>__('Testimonial Sub Title','halim'),
      'type' => 'text',
      'desc' => __('Write Testimonial Section Sub Title Here', 'halim'),
      'default' =>__('who we are?', 'halim'),
    ),
    array(
      'id' => 'testimonial_sec_title',
      'title' =>__('Testimonial Title','halim'),
      'type' => 'text',
      'desc' => __('Write Testimonial Section Title Here', 'halim'),
      'default' =>__('WHAT CLIENT SAY', 'halim'),
    ),
    array(
      'id' => 'testimonial_sec_desc',
      'title' =>__('Testimonial Description','halim'),
      'type' => 'textarea',
      'desc' => __('Write Testimonial Section Description Here', 'halim'),
      'default' =>__('Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d', 'halim'),
    ),
   )
  ));
  
/*****************************
 * Team Options
*****************************/ 
  CSF::createSection($prefix, array(
   'id' => 'team_options',
   'title' => __('Team Section', 'halim'),
   'icon' => 'fas fa-address-card',
  ));

// Section
  CSF::createSection($prefix, array(
   'parent' => 'team_options',
   'title' => __('Team Section Title','halim'),
   'icon' => 'fas fa-arrow-right',
   'fields' => array(
     array(
      'id' => 'team_sec_subtitle',
      'title' =>__('Team Sub Title','halim'),
      'type' => 'text',
      'desc' => __('Write Team Section Sub Title Here', 'halim'),
      'default' =>__('who we are?', 'halim'),
     ),
     array(
      'id' => 'team_sec_title',
      'title' =>__('Team Title','halim'),
      'type' => 'text',
      'desc' => __('Write Team Section Title Here', 'halim'),
      'default' =>__('CREATIVE TEAM', 'halim'),
     ),
     array(
      'id' => 'team_sec_desc',
      'title' =>__('Team Description','halim'),
      'type' => 'textarea',
      'desc' => __('Write Team Section Description Here', 'halim'),
      'default' =>__('Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d', 'halim'),
     ),
   )
  ));
  
/*****************************
 * Latest news Options
*****************************/ 
  CSF::createSection($prefix, array(
   'id' => 'latest_news_option',
   'title' => __('Lates News Section', 'halim'),
   'icon' => 'fas fa-address-card',
  ));

// Section
  CSF::createSection($prefix, array(
   'parent' => 'latest_news_option',
   'title' => __('Latest News Section Title','halim'),
   'icon' => 'fas fa-arrow-right',
   'fields' => array(
     array(
      'id' => 'latest_sec_subtitle',
      'title' =>__('Latest News Sub Title','halim'),
      'type' => 'text',
      'desc' => __('Write Latest News Section Sub Title Here', 'halim'),
      'default' =>__('who we are?', 'halim'),
     ),
     array(
      'id' => 'latest_sec_title',
      'title' =>__('Latest News Title','halim'),
      'type' => 'text',
      'desc' => __('Write Latest News Section Title Here', 'halim'),
      'default' =>__('LATEST NEWS', 'halim'),
     ),
     array(
      'id' => 'latest_sec_desc',
      'title' =>__('Latest News Description','halim'),
      'type' => 'textarea',
      'desc' => __('Write Latest News Section Description Here', 'halim'),
      'default' =>__('Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d', 'halim'),
     ),
   )
  ));
  
/*****************************
 * CTA Options
*****************************/   
  CSF::createSection($prefix, array(
    'id' => 'cta_options',
    'title' =>__('CTA Option', 'halim'),
    'icon' => 'fas fa-address-card',
    'fields' => array(
      array(
       'id' => 'cta_switch',
       'title' =>__('Show CTA?', 'halim'),
       'type' => 'switcher',
       'default' => true,
      ),
      array(
        'id' => 'cta_title',
        'title' => __('CTA Title','halim'),
        'type' => 'text',
        'default' => __('Best solution for your bsiness','halim'),
        'dependency' => array('cta_switch', '==', 'true'),
        'help' =>__('Write CTA Title Here', 'halim'),
      ),
      array(
        'id' => 'cta_subtitle',
        'title' => __('CTA Sub Title','halim'),
        'type' => 'textarea',
        'default' => __('The can used on large scale projects as well small sceal projects','halim'),
        'dependency' => array('cta_switch', '==', 'true'),
        'help' =>__('Write CTA Sub Title Here', 'halim'),
      ),
      array(
        'id' => 'cta_btn_txt',
        'title' => __('CTA Button Text','halim'),
        'type' => 'text',
        'default' => __('Contact Us','halim'),
        'dependency' => array('cta_switch', '==', 'true'),
        'help' =>__('Write CTA Button Text Here', 'halim'),
      ),
      array(
        'id' => 'cta_btn_url',
        'title' => __('CTA Button Url','halim'),
        'type' => 'text',
        'default' => 'https://www.google.com',
        'dependency' => array('cta_switch', '==', 'true'),
        'help' =>__('Write CTA Button Url Here', 'halim'),
      ),
    )
  ));
  
/*****************************
 * Contact Options
*****************************/
  CSF::createSection($prefix, array(
    'id' => 'contact_options',
    'title' =>__('Contact Option', 'halim'),
    'icon' => 'fas fa-address-card',
    'fields' => array(
      array(
      'id' => 'contact_info',
      'title' =>__('Contact Info', 'halim'),
      'type' => 'group',
      'button_title' =>__('Add New Contact Item', 'halim'),
      'fields' => array(
        array(
          'id' => 'contact_info_title',
          'title' =>__('Contact Info Title', 'halim'),
          'type' => 'text',
          'desc' =>__('Write Here Contact Info Title', 'halim'),
        ),
        array(
          'id' => 'contact_info_icon',
          'title' =>__('Contact Info Icon', 'halim'),
          'type' => 'icon',
          'desc' =>__('Write Here Conatat Info Icon', 'halim'),
        ),
        array(
          'id' => 'contact_info_desc',
          'title' =>__('Contact Info Description', 'halim'),
          'type' => 'textarea',
          'desc' =>__('Write Here Contact Info Description', 'halim'),
        ),
      )
      ),
      array(
        'id' => 'contact_map',
        'type' => 'map',
        'title' =>__('Contact Map', 'halim'),
        'desc' => __('Add Your Contact Map Here', 'halim'),
      )
    
   )
  ));

/*****************************
 * Copyrights Options
*****************************/
  CSF::createSection($prefix, array(
    'id' => 'copyrihgt_options',
    'title' =>__('Copyrights Option', 'halim'),
    'icon' => 'fas fa-address-card',
    'fields' => array(
      array(
        'id' => 'copyright_text',
        'title' =>__('Copyright Text', 'halim'),
        'type' => 'text',
        'default' => __('&copy; All Right Reserved 2022', 'halim'),
        'desc' => __('Write Here Your Copyright Text', 'halim'),
      ),
      array(
        'id' => 'copyright_social',
        'title' =>__('Copyright Social Links', 'halim'),
        'type' => 'group',
        'button_title' =>__('Add New Social Link', 'halim'),
        'fields' => array(
          array(
            'id' => 'copyright_social_title',
            'title' => __('Copyright Social Title', 'halim'),
            'type' => 'text',
            'desc' => __('Add Your Copyright Social Title Here', 'halim'),
          ),
          array(
            'id' => 'copyright_social_icon',
            'title' => __('Copyright Social Icon', 'halim'),
            'type' => 'icon',
            'desc' => __('Add Your Copyright Social Icon Here', 'halim'),
          ),
          array(
            'id' => 'copyright_social_url',
            'title' => __('Copyright Social Url', 'halim'),
            'type' => 'text',
            'desc' => __('Add Your Social URL Here', 'halim'),
          )
        )
      ),
      array(
        'id' => 'copyroght_link_target',
        'title' => __('Select Link Target', 'halim'),
        'type' => 'select',
        'options' => array(
          '_self' => __('Open In Same Tab', 'halim'),
          '_blank' => __('Open In New Tab', 'halim'),
          '_windo' => __('Open In New Window', 'halim'),
        ),
        'default' => '_blank',
      )
    )
  ));
}
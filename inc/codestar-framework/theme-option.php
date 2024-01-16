<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'tranform_framwork';

//
// Create options
//
CSF::createOptions($prefix, array(
  'menu_title' => 'Theme Option',
  'menu_slug'  => 'tranform-theme-option',

));

// Logo
CSF::createSection($prefix, array(
  'id'    => 'tranform-logo',
  'title' => 'tranform Theme Logo ',
  'fields' => array(
    array(
      'id'     => 'logo-header',
      'type'   => 'media',
      'title'  => 'Header Logo',
    ),
    array(
      'id'     => 'logo-footer',
      'type'   => 'media',
      'title'  => 'Footer Logo',

    )
  )
));
// header top
CSF::createSection($prefix, array(
  'id'    => 'tranform-header-top',
  'title' => 'Header Top',
  'icon'  => 'far fa-images',
));
// home header top content
CSF::createSection($prefix, array(
  'parent'    => 'tranform-header-top',
  'title' => 'Home Page Hero ',
  'fields' => array(
    array(
      'id'     => 'home-header_top-repeater',
      'type'   => 'repeater',
      'title'  => 'Home Header top Repeater',
      'button_title' => 'ADD ANOTHER Service',
      'fields' => array(

        array(
          'id'    => 'header-left-icon',
          'type'  => 'icon',
          'title' => 'Time icon'
        ),
        array(
          'id'    => 'header-left-content',
          'type'  => 'text',
          'title' => 'Write Time And Location'
        ),

      ),
    ),

  )
));
// Social Profile
CSF::createSection($prefix, array(
  'id'    => 'tranform-header-social',
  'title' => 'tranform Theme Social ',
));
// home header social
CSF::createSection($prefix, array(
  'parent'    => 'tranform-header-social',
  'title' => 'Header Social ',
  'fields' => array(
    array(
      'id'     => 'header-social-repeater',
      'type'   => 'repeater',
      'title'  => 'Header Social Repeater',
      'button_title' => 'ADD ANOTHER Service',
      'fields' => array(

        array(
          'id'    => 'social-icon',
          'type'  => 'icon',
          'title' => 'Header Social icon'
        ),
        array(
          'id'    => 'social-link',
          'type'  => 'text',
          'title' => 'Header Social Link'
        ),

      ),
    ),

  )
));

// Footer social
CSF::createSection($prefix, array(
  'parent'    => 'tranform-header-social',
  'title' => 'Footer Social ',
  'fields' => array(
    array(
      'id'     => 'footer-social-repeater',
      'type'   => 'repeater',
      'title'  => 'Footer Social Repeater',
      'button_title' => 'ADD ANOTHER Service',
      'fields' => array(

        array(
          'id'    => 'social-name',
          'type'  => 'text',
          'title' => 'Footer Social Name'
        ),
        array(
          'id'    => 'social-link-f',
          'type'  => 'text',
          'title' => 'Footer Social Link'
        ),

      ),
    ),

  )
));

//
// Hero Bg area
//
CSF::createSection($prefix, array(
  'id'    => 'tranform-hero-bg',
  'title' => 'All Hero Section Here',
  'icon'  => 'far fa-images',
));

// home hero
CSF::createSection($prefix, array(
  'parent'    => 'tranform-hero-bg',
  'title' => 'Home Page Hero ',
  'fields' => array(
    array(
      'id' => 'home-hero-bg',
      'title' => 'Home Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'home-hero-heading',
      'title' => 'Home Hero title',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-hero-content',
      'title' => 'Home Hero Content',
      'type'  => 'textarea',
    ),
    array(
      'id' => 'home-hero-btn',
      'title' => 'Home Hero btn 1',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-hero-btn-link',
      'title' => 'Home Hero btn 1 LInk',
      'type'  => 'text',
    ),   
  )
));
// blog hero
CSF::createSection($prefix, array(
  'parent'    => 'tranform-hero-bg',
  'title' => 'Blog Page Hero BG',
  'fields' => array(
    array(
      'id' => 'blog-hero-bg',
      'title' => 'Blog Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'blog-hero-title',
      'title' => 'Blog Hero Title',
      'type'  => 'text',
    )
  )
));

// single post hero
CSF::createSection($prefix, array(
  'parent'    => 'tranform-hero-bg',
  'title' => 'Single Page Hero BG',
  'fields' => array(
    array(
      'id' => 'single-hero-bg',
      'title' => 'Single Hero Bg',
      'type'  => 'media',
    ),
  )
));
// About hero
CSF::createSection($prefix, array(
  'parent'    => 'tranform-hero-bg',
  'title' => 'About Page Hero BG',
  'fields' => array(
    array(
      'id' => 'about-hero-bg',
      'title' => 'About Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'about-hero-title',
      'title' => 'About Hero Title',
      'type'  => 'text',
    )
  )
));
// team hero
CSF::createSection($prefix, array(
  'parent'    => 'tranform-hero-bg',
  'title' => 'Team Page Hero BG',
  'fields' => array(
    array(
      'id' => 'team-hero-bg',
      'title' => 'Team Hero Bg',
      'type'  => 'media',
    ),   
  )
));
// sevices hero
CSF::createSection($prefix, array(
  'parent'    => 'tranform-hero-bg',
  'title' => 'Service Page Hero BG',
  'fields' => array(
    array(
      'id' => 'service-hero-bg',
      'title' => 'Service Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'service-hero-title',
      'title' => 'Service Hero Title',
      'type'  => 'text',
    )
  )
));
// sevices single hero
CSF::createSection($prefix, array(
  'parent'    => 'tranform-hero-bg',
  'title' => 'Service single Page Hero BG',
  'fields' => array(
    array(
      'id' => 'service-single-hero-bg',
      'title' => 'Service single Hero Bg',
      'type'  => 'media',
    ),    
  )
));
// Project hero bg
CSF::createSection($prefix, array(
  'parent'    => 'tranform-hero-bg',
  'title' => 'Project Page Hero BG',
  'fields' => array(
    array(
      'id' => 'project-hero-bg',
      'title' => 'Project Hero Bg',
      'type'  => 'media',
    ),
  )
));
// Projects single hero 
CSF::createSection($prefix, array(
  'parent'    => 'tranform-hero-bg',
  'title' => 'Single project single Page Hero BG',
  'fields' => array(
    array(
      'id' => 'project-single-hero-bg',
      'title' => ' Single project single Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'project-single-hero-name',
      'title' => ' Single project single Name',
      'type'  => 'text',
    ),   
  )
));
// contact hero bg
CSF::createSection($prefix, array(
  'parent'    => 'tranform-hero-bg',
  'title' => 'Contact Page Hero BG',
  'fields' => array(
    array(
      'id' => 'contact-hero-bg',
      'title' => 'Contact Hero Bg',
      'type'  => 'media',
    ),   
  )
));
//Price hero bg
CSF::createSection($prefix, array(
  'parent'    => 'tranform-hero-bg',
  'title' => 'Price Page Hero BG',
  'fields' => array(
    array(
      'id' => 'price-hero-bg',
      'title' => 'Price Hero Bg',
      'type'  => 'media',
    ),
    array(
      'id' => 'price-hero-title',
      'title' => 'Price Hero Title',
      'type'  => 'text',
    )
  )
));
// all section heading Content Area 
CSF::createSection($prefix, array(
  'id'    => 'tranform-section-content',
  'title' => 'All Section Heading Content',
  'icon'  => 'fas fa-heading',
));
// service heading area
CSF::createSection($prefix, array(
  'parent'    => 'tranform-section-content',
  'title' => 'Services Content',
  'fields' => array(
    array(
      'id' => 'service-name',
      'title' => 'Services Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'service-title',
      'title' => 'Services Title',
      'type'  => 'text',
    ),
  )
));
// blog heading area
CSF::createSection($prefix, array(
  'parent'    => 'tranform-section-content',
  'title' => 'Blog Content',
  'fields' => array(
    array(
      'id' => 'blog-name',
      'title' => 'Blog Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'blog-title',
      'title' => 'Blog Title',
      'type'  => 'text',
    ),
  )
));
// all home here themeoption
CSF::createSection($prefix, array(
  'id'    => 'tranform-home',
  'title' => 'Home Page Theme Option ',
));

// Home Why us area
CSF::createSection($prefix, array(
  'parent'    => 'tranform-home',
  'title' => 'Home Page Why Us ',
  'fields' => array(   
    array(
      'id' => 'home-why-us-section_bg',
      'title' => 'Home why-us Section BG',
      'type'  => 'media',
    ),
    array(
      'id' => 'home-why-us-name',
      'title' => 'Home why-us Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-why-us-heading',
      'title' => 'Home why-us Heading',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-why-us-content',
      'title' => 'Home why-us Content',
      'type'  => 'textarea',
    ),
    array(
      'id'     => 'home-why-us-repeater',
      'type'   => 'repeater',
      'title'  => 'Home why-us Repeater',
      'button_title' => 'ADD ANOTHER Service',
      'limit' => 2,
      'fields' => array(

        array(
          'id'    => 'why-us-icon',
          'type'  => 'icon',
          'title' => 'why-us Icon'
        ),
        array(
          'id'    => 'why-us-title',
          'type'  => 'text',
          'title' => 'why-us Title'
        ),      

      ),
    ),
    array(
      'id' => 'home-why-us-bg',
      'title' => 'Home why-us BG',
      'type'  => 'media',
    ),
    array(
      'id' => 'home-why-us-img',
      'title' => 'Home why-us Image',
      'type'  => 'media',
    ),
  )
));
// Home Groth
CSF::createSection($prefix, array(
  'parent'    => 'tranform-home',
  'title' => 'Home Page Growing ',
  'fields' => array(

    array(
      'id' => 'home-Growing-name',
      'title' => 'Home Growing Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-Growing-heading',
      'title' => 'Home Growing Heading',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-Growing-content',
      'title' => 'Home Growing Content',
      'type'  => 'textarea',
    ),
    array(
      'id'     => 'home-Growing-repeater',
      'type'   => 'repeater',
      'title'  => 'Home Growing Repeater',
      'button_title' => 'ADD ANOTHER Service',
      'fields' => array(

        array(
          'id'    => 'Growing-icon',
          'type'  => 'icon',
          'title' => 'Growings Icon'
        ),
        array(
          'id'    => 'Growing-title',
          'type'  => 'text',
          'title' => 'Growing Title'
        ),
        array(
          'id'    => 'Growing-content',
          'type'  => 'text',
          'title' => 'Growing COntent'
        ),

      ),
    ),
  )
));
// Home Gellary
CSF::createSection($prefix, array(
  'parent'    => 'tranform-home',
  'title' => 'Home Page Gellary ',
  'fields' => array(

    array(
      'id' => 'home-gellary-name',
      'title' => 'Gellary Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-gellary-heading',
      'title' => 'Gellary Heading',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-gellary-button',
      'title' => 'GEllary Button NAme',
      'type'  => 'text',
    ),
    array(
      'id' => 'home-gellary-button-link',
      'title' => 'Gellary Button Link',
      'type'  => 'text',
    ),

  )
));
//  About section
CSF::createSection($prefix, array(
  'id'    => 'tranform-about',
  'title' => 'About page About Section',
  'fields' => array(   
    array(
      'id' => 'about-thumb',
      'title' => 'Home About Thumb',
      'type'  => 'media',
    ),
    array(
      'id' => 'about-name',
      'title' => ' About Name',
      'type'  => 'text',
    ),   
    array(
      'id' => 'about-title',
      'title' => ' About Title',
      'type'  => 'text',
    ),   
    array(
      'id' => 'about-content',
      'title' => ' About Content',
      'type'  => 'textarea',
    ),   
)));
// satisfiyed Skill
CSF::createSection($prefix, array(
  'id'    => 'tranform-stisfiyed',
  'title' => 'Page Skill ',
  'fields' => array(

    array(
      'id'     => 'home-skill-repeater',
      'type'   => 'repeater',
      'title'  => 'Home About Skill',
      'button_title' => 'ADD ANOTHER Skill',
      'limit' => 4,
      'fields' => array(

        array(
          'id'    => 'home-skill-plus',
          'type'  => 'text',
          'title' => 'Home Skill NUmber'
        ),
        array(
          'id'    => 'home-skill-title',
          'type'  => 'text',
          'title' => 'Home Skill Title'
        ),
      ),
    ),
  )
));
//  Testimonial
CSF::createSection($prefix, array(
  'id'    => 'tranform-testi',
  'title' => 'Page Feedback ',
  'fields' => array(
    array(
      'id'    => 'home-Feedback-name',
      'type'  => 'text',
      'title' => 'Testimonial Name'
    ),
    array(
      'id'    => 'home-Feedback-title',
      'type'  => 'text',
      'title' => ' Feedback Title'
    ),
    array(
      'id'     => 'home-Feedback-repeater',
      'type'   => 'repeater',
      'title'  => 'Client Feedback',
      'button_title' => 'ADD ANOTHER Feedback',
      'fields' => array(
        array(
          'id'    => 'people-img',
          'type'  => 'media',
          'title' => 'People Image'
        ),
        array(
          'id'    => 'people-name',
          'type'  => 'text',
          'title' => 'People Name'
        ),
        array(
          'id'    => 'people-company',
          'type'  => 'text',
          'title' => 'Company Name'
        ),
        array(
          'id'    => 'home-Feedback-img',
          'type'  => 'media',
          'title' => 'Home Feedback Image'
        ),
        array(
          'id'    => 'home-Feedback-Content',
          'type'  => 'textarea',
          'title' => 'Home Feedback Content'
        ),        
        array(
          'id'     => 'feedback-start-repeater',
          'type'   => 'repeater',
          'title'  => 'Feedback Start',
          'button_title' => 'Add Start',
          'fields' => array(
            array(
              'id'    => 'feedback-start',
              'type'  => 'icon',
              'title' => 'Start Add'
            ),
          )
        ),

      ),
    ),
  )
));
// Contact us heading area
CSF::createSection($prefix, array(
  'id'    => 'tranform-section-contact',
  'title' => 'Contact Heading Section',
  'fields' => array( 
    array(
      'id' => 'contact-us-title',
      'title' => 'Contact us Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'contact-us-content',
      'title' => 'Contact us Content',
      'type'  => 'textarea',
    ),
    array(
      'id'     => 'contact-repeater',
      'type'   => 'repeater',
      'title'  => 'Contact_us NUM',
      'button_title' => 'ADD ANOTHER NUM',
      'limit' => 3,
      'fields' => array(

        array(
          'id'    => 'contact-icon',
          'type'  => 'icon',
          'title' => 'Contact icon'
        ),
        array(
          'id'    => 'contact-title',
          'type'  => 'text',
          'title' => 'title'
        ),       
        array(
          'id'    => 'contact-link',
          'type'  => 'text',
          'title' => 'link Like(mailto:,tel:)'
        ),       
        array(
          'id'    => 'contact-content',
          'type'  => 'text',
          'title' => 'Content'
        ),       
      ),
    ),
  )
));
// sevices  
CSF::createSection($prefix, array(
  'id'    => 'tranform-section-srvice',
  'title' => 'Services  Section',
));
// service Goodness Area
CSF::createSection($prefix, array(
  'parent'    => 'tranform-section-srvice',
  'title' => 'Service Goodness Area',
  'fields' => array(
    array(
      'id' => 'our-goodness-name',
      'title' => 'Our Goodness name',
      'type'  => 'text',
    ),
    array(
      'id' => 'our-goodness-title',
      'title' => 'Our Goodness Title',
      'type'  => 'text',
    ),

    array(
      'id' => 'our-goodness-thumb',
      'title' => 'Our Goodness Thumb',
      'type'  => 'media',
    ),

    array(
      'id'     => 'goodness-repeater',
      'type'   => 'repeater',
      'title'  => 'Our Goodnes Content Area',
      'button_title' => 'Add Our Goodnes List',
      'fields' => array(

        array(
          'id'    => 'our-goodness-img',
          'type'  => 'media',
          'title' => 'Our Goodness Image'
        ),
        array(
          'id'    => 'our-goodness-heading',
          'type'  => 'text',
          'title' => 'Our Goodness Heading Tag'
        ),
        array(
          'id'    => 'our-goodness-content',
          'type'  => 'textarea',
          'title' => 'Our Goodness Content'

        )
      )
    )
  )


));
// team area
CSF::createSection($prefix, array(
  'id'    => 'tranform-section-team',
  'title' => 'Team Content',
  'fields' => array(
    array(
      'id' => 'team-name',
      'title' => 'Team Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'team-title',
      'title' => 'Team Title',
      'type'  => 'text',
    ),
    array(
      'id'     => 'team-repeater',
      'type'   => 'repeater',
      'title'  => 'Team member',
      'button_title' => 'Add Team Member',
      'fields' => array(

        array(
          'id'    => 'team-member-img',
          'type'  => 'media',
          'title' => 'Team Member Image'
        ),       
        array(
          'id'    => 'team-member-name',
          'type'  => 'text',
          'title' => 'Team Member Name'
        ),
        array(
          'id'    => 'team-member-pro',
          'type'  => 'text',
          'title' => 'Team Member Profession'
        ),
        array(
          'id'     => 'member-social-repeater',
          'type'   => 'repeater',
          'title'  => 'Team Social Link',
          'button_title' => 'Add Social',
          'fields' => array(
            array(
              'id'    => 'team-social-icon',
              'type'  => 'icon',
              'title' => 'Team Member Social Icon'
            ),
            array(
              'id'    => 'team-social-link',
              'type'  => 'text',
              'title' => 'Team Member Social Link'
            ),
          )
        ),  
)))));
// tal-why-choose
CSF::createSection($prefix, array(
  'id'    => 'tranform-section-tal-why-choose',
  'title' => 'Why Choose Content',
  'fields' => array(
    array(
      'id' => 'why-choose-thumb',
      'title' => 'Why Choose Thumb Image',
      'type'  => 'media',
    ),
    array(
      'id' => 'why-choose-name',
      'title' => 'Why Choose Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'why-choose-title',
      'title' => 'Why Choose Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'why-choose-content',
      'title' => 'Why Choose Content',
      'type'  => 'textarea',
    ),
    array(
      'id'     => 'why-choose-repeater',
      'type'   => 'repeater',
      'title'  => 'Vission $ Mission',
      'button_title' => 'Add Vission',
      'limit' => 2,
      'fields' => array(

        array(
          'id'    => 'why-choose-vission-img',
          'type'  => 'media',
          'title' => 'Why Choose Image'
        ),       
        array(
          'id'    => 'why-choose-vission-name',
          'type'  => 'text',
          'title' => 'Why Choose Name'
        ),
        array(
          'id'    => 'why-choose-vission-content',
          'type'  => 'textarea',
          'title' => 'Why Choose Content Vision'
        ),
      
         
)))));

// FAQS Area
CSF::createSection($prefix, array(
  'id'    => 'tranform-section-faqs',
  'title' => 'Faqs Section',
  'fields' => array(

    array(
      'id' => 'faqs-name',
      'title' => 'Faqs Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'faqs-title',
      'title' => 'Faqs Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'faqs-thumb',
      'title' => 'Faqs thumb',
      'type'  => 'media',
    ),
    array(
      'id'     => 'faqs-repeater',
      'type'   => 'repeater',
      'title'  => 'FAQ Area',
      'button_title' => 'Add FAQ',
      'fields' => array(

        array(
          'id'    => 'faqs_heading',
          'type'  => 'text',
          'title' => 'Faqs Heading'
        ),
        array(
          'id'    => 'faqs_Content',
          'type'  => 'textarea',
          'title' => 'Faq Content'
        ),

      )
    )
  )
));
// Prices List 
CSF::createSection($prefix, array(
  'id'    => 'tranform-section-price',
  'title' => 'Price Section',
  'fields' => array(

    array(
      'id' => 'price-name',
      'title' => 'Price Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'price-title',
      'title' => 'Price Title',
      'type'  => 'text',
    ),
    array(
      'id'     => 'price-repeater',
      'type'   => 'repeater',
      'title'  => 'Price List Area',
      'button_title' => 'Add Price List',
      'fields' => array(

        array(
          'id'    => 'price-plan',
          'type'  => 'text',
          'title' => 'Price Plan'
        ),       
        array(
          'id'    => 'price-doller',
          'type'  => 'text',
          'title' => 'Doller'
        ),
        array(
          'id'    => 'price-date',
          'type'  => 'text',
          'title' => 'Peckage'
        ),
        array(
          'id'     => 'price-support-repeater',
          'type'   => 'repeater',
          'title'  => 'Price support Area',
          'button_title' => 'Add Support',
          'fields' => array(
            array(
              'id'    => 'price-support',
              'type'  => 'text',
              'title' => 'Price Support'
            ),
          )
        ),
        array(
          'id'    => 'price-button',
          'type'  => 'text',
          'title' => 'Button Name'
        ),

        array(
          'id'    => 'price-button-link',
          'type'  => 'text',
          'title' => 'Button Link'
        ),


      )
    )
  )
));
// Brand Logo
CSF::createSection($prefix, array(
  'id'    => 'tranform-brand-logo',
  'title' => 'Brand LOgo Area',
  'fields' => array(
    array(
      'id'     => 'logo-repeater',
      'type'   => 'repeater',
      'title'  => 'Price List Area',
      'button_title' => 'Add brand Image',
      'fields' => array(

        array(
          'id'    => 'brand-logo',
          'type'  => 'media',
          'title' => 'Brand Logo'
        ),

      )
    )
  )
));
//404 Page 
CSF::createSection($prefix, array(
  'id'    => 'tranform-error-page',
  'title' => 'Error Page',
  'fields' => array(
    array(
      'id' => 'error-thumb',
      'title' => 'Error Page Bg',
      'type'  => 'media',
    ),

    array(
      'id' => 'error-title',
      'title' => 'Error Page Title',
      'type'  => 'text',
    ),
    array(
      'id' => 'error-content',
      'title' => 'Error Page Content',
      'type'  => 'textarea',
    ),
    array(
      'id' => 'error-btn',
      'title' => 'Error Page Button Name',
      'type'  => 'text',
    ),
    array(
      'id' => 'error-btn-link',
      'title' => 'Error Page Button Link',
      'type'  => 'text',
    ),


  )
));

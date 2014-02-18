<?php
/**
 * Krank Option Fields
 * @package Krank
 * Docs (https://github.com/ReduxFramework/ReduxFramework/wiki)
*/

// General Options
$this->sections[] = array(
	'icon' => 'el-icon-cog',
	'title' => __('General Settings', 'redux-framework-demo'),
	'fields' => array(
		// Business Name
		array(
			'id'=>'name',
			'type' => 'text',
			'title' => __('Business Name', 'redux-framework-demo'),
			'subtitle' => __('Please enter your business name', 'redux-framework-demo'),
			'desc' => __('', 'redux-framework-demo'),
			'default' => '',
			'class' => 'small-text'
		),
		// Business Address
		array(
			'id'=>'address',
			'type' => 'text',
			'title' => __('Address', 'redux-framework-demo'),
			'subtitle' => __('Please enter your full address as you would like it to appear on the fron end.', 'redux-framework-demo'),
			'desc' => __('', 'redux-framework-demo'),
			'data' => 'post_type',
			'options' => array(
				'streetAddress'=>'Address 1',
				'addressLocality'=>'Town/City',
				'addressRegion'=>'State/County',
				'postalCode'=>'Zip/Post Code',
				'addressCountry'=>'Country'
			),
			'default' => array(
				'streetAddress'=>'',
				'addressLocality'=>'',
				'addressRegion'=>'',
				'postalCode'=>'',
				'addressCountry'=>''
			),
		),
		// Business Location
		array(
			'id'=>'location',
			'type' => 'text',
			'title' => __('Location', 'redux-framework-demo'),
			'subtitle' => __('Please enter the Latitude and Logitude for your exact location.', 'redux-framework-demo'),
			'desc' => __('', 'redux-framework-demo'),
			'data' => 'post_type',
			'options' => array(
				'latitude'=>'Latitude',
				'longitude'=>'Longitude'
			),
			'default' => array(
				'latitude'=>'',
				'longitude'=>''
			),
		),
		// Business Contact
		array(
			'id'=>'contact',
			'type' => 'text',
			'title' => __('Contact Info', 'redux-framework-demo'),
			'subtitle' => __('Please enter your methods of contact below. Leave blank any methods you do not wish to be displayed on the site.', 'redux-framework-demo'),
			'desc' => __('', 'redux-framework-demo'),
			'data' => 'post_type',
			'options' => array(
				'telephone'=>'Telephone',
				'faxNumber'=>'Fax No',
				'email'=>'Email'
			),
			'default' => array(
				'telephone'=>'',
				'faxNumber'=>'',
				'email'=>''
			),
		),
		// Business Open Hours
		array(
			'id'=>'open',
			'type' => 'text',
			'title' => __('Opening Hours', 'redux-framework-demo'),
			'subtitle' => __('Please enter your business hours', 'redux-framework-demo'),
			'desc' => __('', 'redux-framework-demo'),
			'data' => 'post_type',
			'options' => array(
				'Monday'=>'Monday',
				'Tuesday'=>'Tuesday',
				'Wednesday'=>'Wednesday',
				'Thursday'=>'Thursday',
				'Friday'=>'Friday',
				'Saturday'=>'Saturday',
				'Sunday'=>'Sunday'
			),
			'default' => array(
				'Monday'=>'09:00 - 17:30',
				'Tuesday'=>'09:00 - 17:30',
				'Wednesday'=>'09:00 - 17:30',
				'Thursday'=>'09:00 - 17:30',
				'Friday'=>'09:00 - 17:30',
				'Saturday'=>'09:00 - 17:30',
				'Sunday'=>'09:00 - 16:00'
			),
		),
	)
);

// Krank SEO
$this->sections[] = array(
	'icon' => 'el-icon-search',
	'title' => __('Krank SEO', 'redux-framework-demo'),
	'fields' => array(
		// Allow Search engines
		array(
			'id'=>'search_index',
			'type' => 'switch', 
			'title' => __('Allow searches to index your site', 'redux-framework-demo'),
			'subtitle'=> __('', 'redux-framework-demo'),
			"default" => 1,
			'on' => 'Index',
			'off' => 'No Index',
		),
		// No Index Settings
		array(
			'id'=>'no_index',
			'type' => 'checkbox',
			'title' => __('Select any specific page types you do not wish to be indexed', 'redux-framework-demo'), 
			'subtitle' => __('', 'redux-framework-demo'),
			'desc' => __('', 'redux-framework-demo'),
			'options' => array(
				'cats' => 'Use noindex For Categories',
				'date_arch' => 'Use noindex For Date Archives',
				'auth_arch' => 'Use noindex For Author Archives',
				'tag_arch' => 'Use noindex For Tag Archives',
				'search' => 'Use noindex For Search Results'
			),
		),
		// No Index Pages
		array(
			'id'=>'pages_no_index',
			'type' => 'select',
			'data' => 'pages',
			'multi' => true,
			'title' => __('Noindex specific pages', 'redux-framework-demo'), 
			'subtitle' => __('', 'redux-framework-demo'),
			'desc' => __('', 'redux-framework-demo'),
		),	
		// No index post types
		array(
			'id'=>'post_type_index',
			'type' => 'select',
			'data' => 'post_type',
			'multi' => true,
			'title' => __('Noindex specific post types', 'redux-framework-demo'), 
			'subtitle' => __('', 'redux-framework-demo'),
			'desc' => __('', 'redux-framework-demo'),
		),
		// Google+
		array(
			'id'=>'google_plus',
			'type' => 'text',
			'title' => __('Google Plus Author Profile', 'redux-framework-demo'),
			'subtitle' => __('', 'redux-framework-demo'),
			'desc' => __('Enter the URL of your Google+ profile page. This will add a link to your search listings', 'redux-framework-demo'),
			'default' => '',
			'class' => 'small-text',
			'validate' => 'url'
		),
		// XML Site map
		array(
			'id'=>'sitemap_enable',
			'type' => 'switch', 
			'title' => __('XML Sitemap Generator', 'redux-framework-demo'),
			'subtitle'=> __('Produces sitemap.xml file in the sites root directory for submission to search engines.', 'redux-framework-demo'),
			"default" => 0,
			'on' => 'Enabled',
			'off' => 'Disabled',
		),
		// sitemap change frequency
		array(
			'id'=>'change_freq',
			'type' => 'radio',
			'title' => __('Site Change Frequency', 'redux-framework-demo'), 
			'subtitle' => __('Select how often you change your sites content. This will be added to the XML sitemap to help search engines understand how often they need to index your content.', 'redux-framework-demo'),
			'desc' => __('', 'redux-framework-demo'),
			'options' => array(
				'daily' => 'Daily', 
				'weekly' => 'Weekly', 
				'monthly' => 'Monthly',
				'yearly' => 'Yearly',
				'never' => 'Never'
			), //Must provide key => value pairs for radio options
			'default' => 'monthly'
		),
	)
);

// System Integration
$this->sections[] = array(
	'icon' => 'el-icon-cogs',
	'title' => __('System Integrations', 'redux-framework-demo'),
	'fields' => array(
		// GA on off 
		array(
			'id'=>'ga',
			'type' => 'switch', 
			'title' => __('Google Analytics', 'redux-framework-demo'),
			'subtitle'=> __('Disable if you do not wish to track your site through GA', 'redux-framework-demo'),
			"default" 		=> 0,
			'on' => 'Enabled',
			'off' => 'Disabled',
		),
		// GA Tracking Code
		array(
			'id'=>'ga_code',
			'type' => 'text',
			'title' => __('Google Analytics Tracking Code (Universal Analytics Only)', 'redux-framework-demo'),
			'subtitle' => __('Should look something like UA-XXXXXXXX-X', 'redux-framework-demo'),
			'desc' => __('', 'redux-framework-demo'),
			'default' => '',
			'class' => 'small-text',
		),
	)
);

// Carousels
$this->sections[] = array(
	'icon' => 'el-icon-picture',
	'title' => __('Carousels', 'redux-framework-demo'),
	'fields' => array(
		array(
			'id'=>'home_slides_switch',
			'type' => 'switch', 
			'title' => __('Enable / Disable Home Page Carousel', 'redux-framework-demo'),
			'subtitle'=> __('', 'redux-framework-demo'),
			"default" => 1,
			'on' => 'Enabled',
			'off' => 'Disabled',
		),
		array(
			'id'=>'home_slides',
			'type' => 'slides',
			'title' => __('Homepage Main Carousel', 'redux-framework-demo'),
			'subtitle'=> __('Unlimited slides with drag and drop sortings.', 'redux-framework-demo'),
			'desc' => __('', 'redux-framework-demo'),
			'placeholder' => array(
				'title' => __('Slide Title', 'redux-framework-demo'),
				'description' => __('Slide Description Here', 'redux-framework-demo'),
				'url' => __('Slide URL link', 'redux-framework-demo'),
			),						
		),
	)
);

$this->sections[] = array(
	'type' => 'divide',
);

/**
	Sample Options Below
**/

$this->sections[] = array(
	'title' => __('Home Settings', 'redux-framework-demo'),
	'desc' => __('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at: <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>', 'redux-framework-demo'),
	'icon' => 'el-icon-home',
    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
	'fields' => array(	
		array(
			'id'=>'webFonts',
			'type' => 'media', 
			'title' => __('Web Fonts', 'redux-framework-demo'),
			'compiler' => 'true',
			'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
			'desc'=> __('Basic media uploader with disabled URL input field.', 'redux-framework-demo'),
			'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
			),	
		array(
             'id'=>'section-media-start',
             'type' => 'section', 
             'title' => __('Media Options', 'redux-framework-demo'),
             'subtitle'=> __('With the "section" field you can create indent option sections.', 'redux-framework-demo'),                            
             'indent' => true // Indent all options below until the next 'section' option is set.
             ),    									
		array(
			'id'=>'media',
			'type' => 'media', 
			'url'=> true,
			'title' => __('Media w/ URL', 'redux-framework-demo'),
			'compiler' => 'true',
			//'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
			'desc'=> __('Basic media uploader with disabled URL input field.', 'redux-framework-demo'),
			'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
			'default'=>array('url'=>'http://s.wordpress.org/style/images/codeispoetry.png'),
			),
		array(
             'id'=>'section-media-end',
             'type' => 'section', 
             'indent' => false // Indent all options below until the next 'section' option is set.
             ),  
		array(
			'id'=>'media-nourl',
			'type' => 'media', 
			'title' => __('Media w/o URL', 'redux-framework-demo'),
			'desc'=> __('This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'redux-framework-demo'),
			'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
			),	
		array(
			'id'=>'media-nopreview',
			'type' => 'media', 
			'preview'=> false,
			'title' => __('Media No Preview', 'redux-framework-demo'),
			'desc'=> __('This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'redux-framework-demo'),
			'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
			),			
        array(
            'id' => 'gallery',
            'type' => 'gallery',
            'title' => __('Add/Edit Gallery', 'so-panels'),
            'subtitle' => __('Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'so-panels'),
            'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
            ),
		array(
			'id'=>'slider1',
			'type' => 'slider', 
			'title' => __('JQuery UI Slider Example 1', 'redux-framework-demo'),
			'desc'=> __('JQuery UI slider description. Min: 1, max: 500, step: 3, default value: 45', 'redux-framework-demo'),
			"default" 		=> "45",
			"min" 		=> "1",
			"step"		=> "3",
			"max" 		=> "500",
			),	

		array(
			'id'=>'slider2',
			'type' => 'slider', 
			'title' => __('JQuery UI Slider Example 2 w/ Steps (5)', 'redux-framework-demo'),
			'desc'=> __('JQuery UI slider description. Min: 0, max: 300, step: 5, default value: 75', 'redux-framework-demo'),
			"default" 		=> "75",
			"min" 		=> "0",
			"step"		=> "5",
			"max" 		=> "300",
			),	
		array(
			'id'=>'spinner1',
			'type' => 'spinner', 
			'title' => __('JQuery UI Spinner Example 1', 'redux-framework-demo'),
			'desc'=> __('JQuery UI spinner description. Min:20, max: 100, step:20, default value: 40', 'redux-framework-demo'),
			"default" 	=> "40",
			"min" 		=> "20",
			"step"		=> "20",
			"max" 		=> "100",
			),
		array(
			'id'=>'switch-on',
			'type' => 'switch', 
			'title' => __('Switch On', 'redux-framework-demo'),
			'subtitle'=> __('Look, it\'s on!', 'redux-framework-demo'),
			"default" 		=> 1,
			),	

		array(
			'id'=>'switch-off',
			'type' => 'switch', 
			'title' => __('Switch Off', 'redux-framework-demo'),
			'subtitle'=> __('Look, it\'s on!', 'redux-framework-demo'),
			"default" 		=> 0,
			),	

		array(
			'id'=>'switch-custom',
			'type' => 'switch', 
			'title' => __('Switch - Custom Titles', 'redux-framework-demo'),
			'subtitle'=> __('Look, it\'s on! Also hidden child elements!', 'redux-framework-demo'),
			"default" 		=> 0,
			'on' => 'Enabled',
			'off' => 'Disabled',
			),	

		array(
			'id'=>'switch-fold',
			'type' => 'switch', 
			'required' => array('switch-custom','=','1'),						
			'title' => __('Switch - With Hidden Items (NESTED!)', 'redux-framework-demo'),
			'subtitle'=> __('Also called a "fold" parent.', 'redux-framework-demo'),
			'desc' => __('Items set with a fold to this ID will hide unless this is set to the appropriate value.', 'redux-framework-demo'),
			'default' => 0,
			),	
		array(
			'id'=>'patterns',
			'type' => 'image_select', 
			'tiles' => true,
			'required' => array('switch-fold','equals','0'),	
			'title' => __('Images Option (with pattern=>true)', 'redux-framework-demo'),
			'subtitle'=> __('Select a background pattern.', 'redux-framework-demo'),
			'default' 		=> 0,
			'options' => $sample_patterns
			,
			),
        array(
            "id" => "homepage_blocks_three",
            "type" => "sorter",
            "title" => "Layout Manager Advanced",
            "subtitle" => "You can add multiple drop areas or columns.",
            "compiler"=>'true',
            //'required' => array('switch-fold','equals','0'),	
            'options' => array(
                "enabled" => array(
                    "highlights" => "Highlights",
                    "slider" => "Slider",
                    "staticpage" => "Static Page",
                    "services" => "Services"
                ),
                "disabled" => array(
                ),
                "backup" => array(
                ),                
            ),
            'limits' => array(
            	"disabled" => 1,
            	"backup" => 2,
            ),
        ),
        array(
            "id" => "homepage_blocks",
            "type" => "sorter",
            "title" => "Homepage Layout Manager",
            "desc" => "Organize how you want the layout to appear on the homepage",
            "compiler"=>'true',
            'options' => array(
                "disabled" => array(
                    "highlights" => "Highlights",
                    "slider" => "Slider",			                    
                ),
                "enabled" => array(
                    "staticpage" => "Static Page",
                    "services" => "Services"
                ),
            ),
        ),        
		array(
			'id'=>'slides',
			'type' => 'slides',
			'title' => __('Slides Options', 'redux-framework-demo'),
			'subtitle'=> __('Unlimited slides with drag and drop sortings.', 'redux-framework-demo'),
			'desc' => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo'),
			'placeholder' => array(
				'title' => __('This is a title', 'redux-framework-demo'),
				'description' => __('Description Here', 'redux-framework-demo'),
				'url' => __('Give us a link!', 'redux-framework-demo'),
			),						
		),        
		array(
			'id'=>'presets',
			'type' => 'image_select', 
			'presets' => true,
			'title' => __('Preset', 'redux-framework-demo'),
			'subtitle'=> __('This allows you to set a json string or array to override multiple preferences in your theme.', 'redux-framework-demo'),
			'default' 		=> 0,
			'desc'=> __('This allows you to set a json string or array to override multiple preferences in your theme.', 'redux-framework-demo'),
			'options' => array(
							'1' => array('alt' => 'Preset 1', 'img' => ReduxFramework::$_url.'../sample/presets/preset1.png', 'presets'=>array('switch-on'=>1,'switch-off'=>1, 'switch-custom'=>1)),
							'2' => array('alt' => 'Preset 2', 'img' => ReduxFramework::$_url.'../sample/presets/preset2.png', 'presets'=>'{"slider1":"1", "slider2":"0", "switch-on":"0"}'),
								),
			),							
		array(
			'id'=>'typography6',
			'type' => 'typography', 
			'title' => __('Typography', 'redux-framework-demo'),
			//'compiler'=>true, // Use if you want to hook in your own CSS compiler
			'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'=>true, // Select a backup non-google font in addition to a google font
			//'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
			//'subsets'=>false, // Only appears if google is true and subsets not set to false
			//'font-size'=>false,
			//'line-height'=>false,
			//'word-spacing'=>true, // Defaults to false
			//'letter-spacing'=>true, // Defaults to false
			//'color'=>false,
			//'preview'=>false, // Disable the previewer
			'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
			'output' => array('h2.site-description'), // An array of CSS selectors to apply this font style to dynamically
			'compiler' => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
			'units'=>'px', // Defaults to px
			'subtitle'=> __('Typography option with each property can be called individually.', 'redux-framework-demo'),
			'default'=> array(
				'color'=>"#333", 
				'font-style'=>'700', 
				'font-family'=>'Abel', 
				'google' => true,
				'font-size'=>'33px', 
				'line-height'=>'40px'),
			),	
		),
	);



$this->sections[] = array(
	'type' => 'divide',
);



$this->sections[] = array(
	'icon' => 'el-icon-cogs',
	'title' => __('General Settings', 'redux-framework-demo'),
	'fields' => array(
		array(
			'id'=>'layout',
			'type' => 'image_select',
			'compiler'=>true,
			'title' => __('Main Layout', 'redux-framework-demo'), 
			'subtitle' => __('Select main content and sidebar alignment. Choose between 1, 2 or 3 column layout.', 'redux-framework-demo'),
			'options' => array(
					'1' => array('alt' => '1 Column', 'img' => ReduxFramework::$_url.'assets/img/1col.png'),
					'2' => array('alt' => '2 Column Left', 'img' => ReduxFramework::$_url.'assets/img/2cl.png'),
					'3' => array('alt' => '2 Column Right', 'img' => ReduxFramework::$_url.'assets/img/2cr.png'),
					'4' => array('alt' => '3 Column Middle', 'img' => ReduxFramework::$_url.'assets/img/3cm.png'),
					'5' => array('alt' => '3 Column Left', 'img' => ReduxFramework::$_url.'assets/img/3cl.png'),
					'6' => array('alt' => '3 Column Right', 'img' => ReduxFramework::$_url.'assets/img/3cr.png')
				),
			'default' => '2'
			),

		array(
			'id'=>'tracking-code',
			'type' => 'textarea',
			'required' => array('layout','equals','1'),	
			'title' => __('Tracking Code', 'redux-framework-demo'), 
			'subtitle' => __('Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.', 'redux-framework-demo'),
			'validate' => 'js',
			'desc' => 'Validate that it\'s javascript!',
			),
        
        array(
			'id'=>'css-code',
			'type' => 'ace_editor',
			'title' => __('CSS Code', 'redux-framework-demo'), 
			'subtitle' => __('Paste your CSS code here.', 'redux-framework-demo'),
			'mode' => 'css',
            'theme' => 'monokai',
			'desc' => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
            'default' => "#header{\nmargin: 0 auto;\n}"
			),
        array(
			'id'=>'js-code',
			'type' => 'ace_editor',
			'title' => __('JS Code', 'redux-framework-demo'), 
			'subtitle' => __('Paste your JS code here.', 'redux-framework-demo'),
			'mode' => 'javascript',
            'theme' => 'chrome',
			'desc' => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
            'default' => "jQuery(document).ready(function(){\n\n});"
			),
        array(
			'id'=>'php-code',
			'type' => 'ace_editor',
			'title' => __('JS Code', 'redux-framework-demo'), 
			'subtitle' => __('Paste your JS code here.', 'redux-framework-demo'),
			'mode' => 'php',
            'theme' => 'chrome',
			'desc' => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
            'default' => "jQuery(document).ready(function(){\n\n});"
			),			        

		array(
			'id'=>'footer-text',
			'type' => 'editor',
			'title' => __('Footer Text', 'redux-framework-demo'), 
			'subtitle' => __('You can use the following shortcodes in your footer text: [wp-url] [site-url] [theme-url] [login-url] [logout-url] [site-title] [site-tagline] [current-year]', 'redux-framework-demo'),
			'default' => 'Powered by [wp-url]. Built on the [theme-url].',
			),
		array(
			'id'          => 'password',
			'type'        => 'password',
			'username'    => true,
			'title'       => 'SMTP Account',
			//'placeholder' => array('username' => 'Enter your Username')
		)
	)
);




$this->sections[] = array(
	'icon' => 'el-icon-website',
	'title' => __('Styling Options', 'redux-framework-demo'),
	'fields' => array(
		array(
			'id'=>'stylesheet',
			'type' => 'select',
			'title' => __('Theme Stylesheet', 'redux-framework-demo'), 
			'subtitle' => __('Select your themes alternative color scheme.', 'redux-framework-demo'),
			'options' => array('default.css'=>'default.css', 'color1.css'=>'color1.css'),
			'default' => 'default.css',
			),
		array(
			'id'=>'color-background',
			'type' => 'color',
			'output' => array('.site-title'),
			'title' => __('Body Background Color', 'redux-framework-demo'), 
			'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
			'default' => '#FFFFFF',
			'validate' => 'color',
			),	
		array(
			'id'=>'body-background',
			'type' => 'background',
			'output' => array('body'),
			'title' => __('Body Background', 'redux-framework-demo'), 
			'subtitle' => __('Body background with image, color, etc.', 'redux-framework-demo'),
			//'default' => '#FFFFFF',
			//'validate' => 'color',
			),	
		array(
			'id'=>'color-footer',
			'type' => 'color',
			'title' => __('Footer Background Color', 'redux-framework-demo'), 
			'subtitle' => __('Pick a background color for the footer (default: #dd9933).', 'redux-framework-demo'),
			'default' => '#dd9933',
			'validate' => 'color',
			),
		array(
			'id'=>'color-rgba',
			'type' => 'color_rgba',
			'title' => __('Color RGBA - BETA', 'redux-framework-demo'), 
			'subtitle' => __('Gives you the RGBA color. Still quite experimental. Use at your own risk.', 'redux-framework-demo'),
			'default' => array( 'color' => '#dd9933', 'alpha' => '1.0' ),
			'output' => array('body'),
			'mode' => 'background',
			'validate' => 'colorrgba',
			),			
		array(
			'id'=>'color-header',
			'type' => 'color_gradient',
			'title' => __('Header Gradient Color Option', 'redux-framework-demo'),
			'subtitle' => __('Only color validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'default' => array('from' => '#1e73be', 'to' => '#00897e')
			),
		array(
			'id'=>'link-color',
			'type' => 'link_color',
			'title' => __('Links Color Option', 'redux-framework-demo'),
			'subtitle' => __('Only color validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			//'regular' => false, // Disable Regular Color
			//'hover' => false, // Disable Hover Color
			//'active' => false, // Disable Active Color
			//'visited' => true, // Enable Visited Color
			'default' => array(
				'regular' => '#aaa',
				'hover' => '#bbb',
				'active' => '#ccc',
			)
		),
		array(
			'id'=>'header-border',
			'type' => 'border',
			'title' => __('Header Border Option', 'redux-framework-demo'),
			'subtitle' => __('Only color validation can be done on this field type', 'redux-framework-demo'),
			'output' => array('.site-header'), // An array of CSS selectors to apply this font style to
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'default' => array('border-color' => '#1e73be', 'border-style' => 'solid', 'border-top'=>'3px', 'border-right'=>'3px', 'border-bottom'=>'3px', 'border-left'=>'3px')
			),	
		array(
			'id'=>'spacing',
			'type' => 'spacing',
			'output' => array('.site-header'), // An array of CSS selectors to apply this font style to
			'mode'=>'margin', // absolute, padding, margin, defaults to padding
			'top'=>false, // Disable the top
			//'right' => false, // Disable the right
			//'bottom' => false, // Disable the bottom
			//'left' => false, // Disable the left
			//'all' => true, // Have one field that applies to all
			//'units' => 'em', // You can specify a unit value. Possible: px, em, %
			//'units_extended' => 'true', // Allow users to select any type of unit
			//'display_units' => 'false', // Set to false to hide the units if the units are specified
			'title' => __('Padding/Margin Option', 'redux-framework-demo'),
			'subtitle' => __('Allow your users to choose the spacing or margin they want.', 'redux-framework-demo'),
			'desc' => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'redux-framework-demo'),
			'default' => array('margin-top' => '1px', 'margin-right'=>"2px", 'margin-bottom' => '3px', 'margin-left'=>'4px' )
			),	
		array(
			'id'=>'dimensions',
			'type' => 'dimensions',
			//'units' => 'em', // You can specify a unit value. Possible: px, em, %
			//'units_extended' => 'true', // Allow users to select any type of unit
			'title' => __('Dimensions (Width/Height) Option', 'redux-framework-demo'),
			'subtitle' => __('Allow your users to choose width, height, and/or unit.', 'redux-framework-demo'),
			'desc' => __('You can enable or disable any piece of this field. Width, Height, or Units.', 'redux-framework-demo'),
			'default' => array('width' => 200, 'height'=>'100', )
			),																
		array(
			'id'=>'body-font2',
			'type' => 'typography',
			'title' => __('Body Font', 'redux-framework-demo'),
			'subtitle' => __('Specify the body font properties.', 'redux-framework-demo'),
			'google'=>true,
			'default' => array(
				'color'=>'#dd9933',
				'font-size'=>'30px',
				'font-family'=>'Arial,Helvetica,sans-serif',
				'font-weight'=>'Normal',
				),
			),					
		array(
			'id'=>'custom-css',
			'type' => 'textarea',
			'title' => __('Custom CSS', 'redux-framework-demo'), 
			'subtitle' => __('Quickly add some CSS to your theme by adding it to this block.', 'redux-framework-demo'),
			'desc' => __('This field is even CSS validated!', 'redux-framework-demo'),
			'validate' => 'css',
			),
		array(
			'id'=>'custom-html',
			'type' => 'textarea',
			'title' => __('Custom HTML', 'redux-framework-demo'), 
			'subtitle' => __('Just like a text box widget.', 'redux-framework-demo'),
			'desc' => __('This field is even HTML validated!', 'redux-framework-demo'),
			'validate' => 'html',
			),		
	)
);
	
/**
 *  Note here I used a 'heading' in the sections array construct
 *  This allows you to use a different title on your options page
 * instead of reusing the 'title' value.  This can be done on any 
 * section - kp
 */
$this->sections[] = array(
	'icon'    => 'el-icon-bullhorn',
	'title'   => __('Field Validation', 'redux-framework-demo'),
	'heading' => __('Validate ALL fields within Redux.', 'redux-framework-demo'),
	'desc'    => __('<p class="description">This is the Description. Again HTML is allowed2</p>', 'redux-framework-demo'),
	'fields'  => array(
		array(
			'id'=>'2',
			'type' => 'text',
			'title' => __('Text Option - Email Validated', 'redux-framework-demo'),
			'subtitle' => __('This is a little space under the Field Title in the Options table, additional info is good in here.', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate' => 'email',
			'msg' => 'custom error message',
			'default' => 'test@test.com'
			),	
		array(
			'id'=>'2test',
			'type' => 'text',
			'title' => __('Text Option with Data Attributes', 'redux-framework-demo'),
			'subtitle' => __('You can also pass an options array if you want. Set the default to whatever you like.', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'data' => 'post_type',
			//'options' => array(1=>'One', 2=>'Two'),
			//'default' => array(1=>'Onee', 2=>'Twoo'),
			),						
		array(
			'id'=>'multi_text',
			'type' => 'multi_text',
			'title' => __('Multi Text Option - Color Validated', 'redux-framework-demo'),
			'validate' => 'color',
			'subtitle' => __('If you enter an invalid color it will be removed. Try using the text "blue" as a color.  ;)', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo')
			),
		array(
			'id'=>'3',
			'type' => 'text',
			'title' => __('Text Option - URL Validated', 'redux-framework-demo'),
			'subtitle' => __('This must be a URL.', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate' => 'url',
			'default' => 'http://reduxframework.com'
			),
		array(
			'id'=>'4',
			'type' => 'text',
			'title' => __('Text Option - Numeric Validated', 'redux-framework-demo'),
			'subtitle' => __('This must be numeric.', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate' => 'numeric',
			'default' => '0',
			'class' => 'small-text'
			),
		array(
			'id'=>'comma_numeric',
			'type' => 'text',
			'title' => __('Text Option - Comma Numeric Validated', 'redux-framework-demo'),
			'subtitle' => __('This must be a comma separated string of numerical values.', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate' => 'comma_numeric',
			'default' => '0',
			'class' => 'small-text'
			),
		array(
			'id'=>'no_special_chars',
			'type' => 'text',
			'title' => __('Text Option - No Special Chars Validated', 'redux-framework-demo'),
			'subtitle' => __('This must be a alpha numeric only.', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate' => 'no_special_chars',
			'default' => '0'
			),
		array(
			'id'=>'str_replace',
			'type' => 'text',
			'title' => __('Text Option - Str Replace Validated', 'redux-framework-demo'),
			'subtitle' => __('You decide.', 'redux-framework-demo'),
			'desc' => __('This field\'s default value was changed by a filter hook!', 'redux-framework-demo'),
			'validate' => 'str_replace',
			'str' => array('search' => ' ', 'replacement' => 'thisisaspace'),
			'default' => 'This is the default.'
			),
		array(
			'id'=>'preg_replace',
			'type' => 'text',
			'title' => __('Text Option - Preg Replace Validated', 'redux-framework-demo'),
			'subtitle' => __('You decide.', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate' => 'preg_replace',
			'preg' => array('pattern' => '/[^a-zA-Z_ -]/s', 'replacement' => 'no numbers'),
			'default' => '0'
			),
		array(
			'id'=>'custom_validate',
			'type' => 'text',
			'title' => __('Text Option - Custom Callback Validated', 'redux-framework-demo'),
			'subtitle' => __('You decide.', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate_callback' => 'redux_validate_callback_function',
			'default' => '0'
			),
		array(
			'id'=>'5',
			'type' => 'textarea',
			'title' => __('Textarea Option - No HTML Validated', 'redux-framework-demo'), 
			'subtitle' => __('All HTML will be stripped', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate' => 'no_html',
			'default' => 'No HTML is allowed in here.'
			),
		array(
			'id'=>'6',
			'type' => 'textarea',
			'title' => __('Textarea Option - HTML Validated', 'redux-framework-demo'), 
			'subtitle' => __('HTML Allowed (wp_kses)', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate' => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
			'default' => 'HTML is allowed in here.'
			),
		array(
			'id'=>'7',
			'type' => 'textarea',
			'title' => __('Textarea Option - HTML Validated Custom', 'redux-framework-demo'), 
			'subtitle' => __('Custom HTML Allowed (wp_kses)', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate' => 'html_custom',
			'default' => '<p>Some HTML is allowed in here.</p>',
			'allowed_html' => array('') //see http://codex.wordpress.org/Function_Reference/wp_kses
			),
		array(
			'id'=>'8',
			'type' => 'textarea',
			'title' => __('Textarea Option - JS Validated', 'redux-framework-demo'), 
			'subtitle' => __('JS will be escaped', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate' => 'js'
			),

		)
	);
$this->sections[] = array(
	'icon' => 'el-icon-check',
	'title' => __('Radio/Checkbox Fields', 'redux-framework-demo'),
	'desc' => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
	'fields' => array(
		array(
			'id'=>'10',
			'type' => 'checkbox',
			'title' => __('Checkbox Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'default' => '1'// 1 = on | 0 = off
			),
		array(
			'id'=>'11',
			'type' => 'checkbox',
			'title' => __('Multi Checkbox Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'options' => array('1' => 'Opt 1','2' => 'Opt 2','3' => 'Opt 3'),//Must provide key => value pairs for multi checkbox options
			'default' => array('1' => '1', '2' => '0', '3' => '0')//See how std has changed? you also don't need to specify opts that are 0.
			),
		array(
			'id'=>'checkbox-data',
			'type' => 'checkbox',
			'title' => __('Multi Checkbox Option (with menu data)', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'data' => "menu"
			),	
		array(
			'id'=>'checkbox-sidebar',
			'type' => 'checkbox',
			'title' => __('Multi Checkbox Option (with sidebar data)', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'data' => "sidebars"
			),								
		array(
			'id'=>'12',
			'type' => 'radio',
			'title' => __('Radio Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'options' => array('1' => 'Opt 1', '2' => 'Opt 2', '3' => 'Opt 3'),//Must provide key => value pairs for radio options
			'default' => '2'
			),
		array(
			'id'=>'radio-data',
			'type' => 'radio',
			'title' => __('Multi Checkbox Option (with menu data)', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'data' => "menu"
			),					
		array(
			'id'=>'13',
			'type' => 'image_select',
			'title' => __('Images Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'options' => array(
							'1' => array('title' => 'Opt 1', 'img' => 'images/align-none.png'),
							'2' => array('title' => 'Opt 2', 'img' => 'images/align-left.png'),
							'3' => array('title' => 'Opt 3', 'img' => 'images/align-center.png'),
							'4' => array('title' => 'Opt 4', 'img' => 'images/align-right.png')
								),//Must provide key => value(array:title|img) pairs for radio options
			'default' => '2'
			),
		array(
			'id'=>'image_select',
			'type' => 'image_select',
			'title' => __('Images Option for Layout', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This uses some of the built in images, you can use them for layout options.', 'redux-framework-demo'),
			'options' => array(
							'1' => array('alt' => '1 Column', 'img' => ReduxFramework::$_url.'assets/img/1col.png'),
							'2' => array('alt' => '2 Column Left', 'img' => ReduxFramework::$_url.'assets/img/2cl.png'),
							'3' => array('alt' => '2 Column Right', 'img' => ReduxFramework::$_url.'assets/img/2cr.png'),
							'4' => array('alt' => '3 Column Middle', 'img' => ReduxFramework::$_url.'assets/img/3cm.png'),
							'5' => array('alt' => '3 Column Left', 'img' => ReduxFramework::$_url.'assets/img/3cl.png'),
							'6' => array('alt' => '3 Column Right', 'img' => ReduxFramework::$_url.'assets/img/3cr.png')
								),//Must provide key => value(array:title|img) pairs for radio options
			'default' => '2'
			),
		array(
            'id' => 'text_sortable',
	        'type' => 'sortable',
    	    'title' => __('Sortable Text Option', 'redux-framework-demo'),
        	'subtitle' => __('Define and reorder these however you want.', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
            'options' => array(
	            'si1' => 'Item 1',
    	        'si2' => 'Item 2',
        	    'si3' => 'Item 3',
    	    	)
        	),	
		array(
            'id' => 'check_sortable',
	        'type' => 'sortable',
	        'mode' => 'checkbox', // checkbox or text
    	    'title' => __('Sortable Text Option', 'redux-framework-demo'),
        	'subtitle' => __('Define and reorder these however you want.', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
            'options' => array(
	            'si1' => 'Item 1',
    	        'si2' => 'Item 2',
        	    'si3' => 'Item 3',
    	    	)
        	),	        																						
		)
	);
$this->sections[] = array(
	'icon' => 'el-icon-list-alt',
	'title' => __('Select Fields', 'redux-framework-demo'),
	'desc' => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
	'fields' => array(
		array(
			'id'=>'select',
			'type' => 'select',
			'title' => __('Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'options' => array('1' => 'Opt 1','2' => 'Opt 2','3' => 'Opt 3'),//Must provide key => value pairs for select options
			'default' => '2'
			),
		array(
			'id'=>'15',
			'type' => 'select',
			'multi' => true,
			'title' => __('Multi Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'options' => array('1' => 'Opt 1','2' => 'Opt 2','3' => 'Opt 3'),//Must provide key => value pairs for radio options
			'required' => array('select','equals',array('1','3')),	
			'default' => array('2','3')
			),

	        array(
	            'id'        => 'opt_sel_img',
	            'type'      => 'select_image',
	            'title'     => __('Select Image', 'redux-framework-demo'), 
	            'subtitle'  => __('A preview of the selected image will appear underneath the select box.', 'redux-framework-demo'),
	            'options'   => $sample_patterns,
	            // Alternatively
	            //'options' => Array(
	            //                 'img_name' => 'img_path'
	            //             )
	            'default'   => 'tree_bark.png',
	        ),
			
		array(
			'id'=>'multi-info',
			'type' => 'info',
			'desc' => __('You can easily add a variety of data from WordPress.', 'redux-framework-demo'),
			),
		array(
			'id'=>'select-categories',
			'type' => 'select',
			'data' => 'categories',
			'title' => __('Categories Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),
		array(
			'id'=>'select-categories-multi',
			'type' => 'select',
			'data' => 'categories',
			'multi' => true,
			'title' => __('Categories Multi Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),
		array(
			'id'=>'select-pages',
			'type' => 'select',
			'data' => 'pages',
			'title' => __('Pages Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),
		array(
			'id'=>'pages-multi_select',
			'type' => 'select',
			'data' => 'pages',
			'multi' => true,
			'title' => __('Pages Multi Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),	
		array(
			'id'=>'select-tags',
			'type' => 'select',
			'data' => 'tags',
			'title' => __('Tags Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),
		array(
			'id'=>'tags-multi_select',
			'type' => 'select',
			'data' => 'tags',
			'multi' => true,
			'title' => __('Tags Multi Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),	
		array(
			'id'=>'select-menus',
			'type' => 'select',
			'data' => 'menus',
			'title' => __('Menus Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),
		array(
			'id'=>'menus-multi_select',
			'type' => 'select',
			'data' => 'menu',
			'multi' => true,
			'title' => __('Menus Multi Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),	
		array(
			'id'=>'select-post-type',
			'type' => 'select',
			'data' => 'post_type',
			'title' => __('Post Type Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),
		array(
			'id'=>'post-type-multi_select',
			'type' => 'select',
			'data' => 'post_type',
			'multi' => true,
			'title' => __('Post Type Multi Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),
		array(
			'id'=>'post-type-multi_select_sortable',
			'type' => 'select',
			'data' => 'post_type',
			'multi' => true,
			'sortable' => true,
			'title' => __('Post Type Multi Select Option + Sortable', 'redux-framework-demo'), 
			'subtitle' => __('This field also has sortable enabled!', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),					
		array(
			'id'=>'select-posts',
			'type' => 'select',
			'data' => 'post',
			'title' => __('Posts Select Option2', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),
		array(
			'id'=>'select-posts-multi',
			'type' => 'select',
			'data' => 'post',
			'multi' => true,
			'title' => __('Posts Multi Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),
        array(
			'id'=>'select-roles',
			'type' => 'select',
			'data' => 'roles',
			'title' => __('User Role Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),
        array(
			'id'=>'select-capabilities',
			'type' => 'select',
			'data' => 'capabilities',
			'multi' => true,
			'title' => __('Capabilities Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			),
		array(
			'id'=>'select-elusive',
			'type' => 'select',
			'data' => 'elusive-icons',
			'title' => __('Elusive Icons Select Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('Here\'s a list of all the elusive icons by name and icon.', 'redux-framework-demo'),
			),			
		)
	);
		
		

$theme_info = '<div class="redux-framework-section-desc">';
$theme_info .= '<p class="redux-framework-theme-data description theme-uri">'.__('<strong>Theme URL:</strong> ', 'redux-framework-demo').'<a href="'.$this->theme->get('ThemeURI').'" target="_blank">'.$this->theme->get('ThemeURI').'</a></p>';
$theme_info .= '<p class="redux-framework-theme-data description theme-author">'.__('<strong>Author:</strong> ', 'redux-framework-demo').$this->theme->get('Author').'</p>';
$theme_info .= '<p class="redux-framework-theme-data description theme-version">'.__('<strong>Version:</strong> ', 'redux-framework-demo').$this->theme->get('Version').'</p>';
$theme_info .= '<p class="redux-framework-theme-data description theme-description">'.$this->theme->get('Description').'</p>';
$tabs = $this->theme->get('Tags');
if ( !empty( $tabs ) ) {
	$theme_info .= '<p class="redux-framework-theme-data description theme-tags">'.__('<strong>Tags:</strong> ', 'redux-framework-demo').implode(', ', $tabs ).'</p>';	
}
$theme_info .= '</div>';

if(file_exists(dirname(__FILE__).'/README.md')){
$this->sections['theme_docs'] = array(
			'icon' => ReduxFramework::$_url.'assets/img/glyphicons/glyphicons_071_book.png',
			'title' => __('Documentation', 'redux-framework-demo'),
			'fields' => array(
				array(
					'id'=>'17',
					'type' => 'raw',
					'content' => file_get_contents(dirname(__FILE__).'/README.md')
					),				
			),
			
			);
}//if




// You can append a new section at any time.
$this->sections[] = array(
	'icon' => 'el-icon-eye-open',
	'title' => __('Additional Fields', 'redux-framework-demo'),
	'desc' => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
	'fields' => array(

		array(
			'id'=>'17',
			'type' => 'date',
			'title' => __('Date Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo')
			),
		array(
			'id'=>'21',
			'type' => 'divide'
			),					
		array(
			'id'=>'18',
			'type' => 'button_set',
			'title' => __('Button Set Option', 'redux-framework-demo'), 
			'subtitle' => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc' => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'options' => array('1' => 'Opt 1','2' => 'Opt 2','3' => 'Opt 3'),//Must provide key => value pairs for radio options
			'default' => '2'
			),
		array(
			'id'=>'23',
			'type' => 'info',
            'required' => array('18','equals',array('1','2')),	
			'desc' => __('This is the info field, if you want to break sections up.', 'redux-framework-demo')
        ),
        array(
            'id'=>'info_warning',
            'type'=>'info',
            'style'=>'warning',
            'title'=> __( 'This is a title.', 'redux-framework-demo' ),
            'desc' => __( 'This is an info field with the warning style applied and a header.', 'redux-framework-demo')
        ),
        array(
            'id'=>'info_success',
            'type'=>'info',
            'style'=>'success',
            'icon'=>'el-icon-info-sign',
            'title'=> __( 'This is a title.', 'redux-framework-demo' ),
            'desc' => __( 'This is an info field with the success style applied, a header and an icon.', 'redux-framework-demo')
        ),
		array(
			'id'=>'raw_info',
			'type' => 'info',
			'required' => array('18','equals',array('1','2')),
			'raw_html'=>true,
			'desc' => $sampleHTML,
			),
		array(
			'id'=>"custom_callback",
			'type' => 'callback',
			'title' => __('Custom Field Callback', 'redux-framework-demo'), 
			'subtitle' => __('This is a completely unique field type', 'redux-framework-demo'),
			'desc' => __('This is created with a callback function, so anything goes in this field. Make sure to define the function though.', 'redux-framework-demo'),
			'callback' => 'redux_my_custom_field'
			),
		)

	);   

$this->sections[] = array(
	'type' => 'divide',
);

$this->sections[] = array(
	'icon' => 'el-icon-info-sign',
	'title' => __('Theme Information', 'redux-framework-demo'),
	'desc' => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
	'fields' => array(
		array(
			'id'=>'raw_new_info',
			'type' => 'raw',
			'content' => $item_info,
			)
		),   
	);
<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'WP-Trigger'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	$blogposts_array = array(
		'2' => __( '2', 'WP-Trigger' ),
		'4' => __( '4', 'WP-Trigger' ),
		'6' => __( '6', 'WP-Trigger' ),
		'8' => __( '8', 'WP-Trigger' ),
		'10' => __( '10', 'WP-Trigger' ),
		'12' => __( '10', 'WP-Trigger' ),
		'14' => __( '10', 'WP-Trigger' ),
		'16' => __( '10', 'WP-Trigger' )
	);
	// Background Defaults
		$background_defaults = array(
			'color' => 'transparent',
			'image' => '',
			'repeat' => 'repeat',
			'position' => 'top center',
			'attachment'=>'scroll' );

	//Homepage tab

	$options[] = array(
	'name' => __( 'Header', 'WP-Trigger' ),
	'type' => 'heading'
	);

	//custom hompage
	$options[] = array(
		'name' => __( 'Custom Section One', 'WP-Trigger' ),
		'desc' => __( 'Click here to use Custom Coding', 'WP-Trigger' ),
		'id' => 'section_one_custom',
		'type' => 'checkbox'
	);
	$options[] = array(
		'name' => __( 'Custom', 'WP-Trigger' ),
		'desc' => __( 'Write or copy Code here...', 'WP-Trigger' ),
		'id' => 'section_one_custom_text',
		'std' => 'Write or copy Code here...',
		'type' => 'textarea'
	);
	//End custom hompage


	$options[] = array(
		'name' => __( 'Logo', 'WP-Trigger' ),
		'desc' => __( 'Logo Image', 'WP-Trigger' ),
		'id' => 'logo_150px',
		'type' => 'upload'
	);

	$options[] = array(
		'name' =>  __( 'Intro Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'intro_background',
		'std' => $background_defaults,
		'type' => 'background'
	);

	$options[] = array(
		'name' => __( 'intro message', 'WP-Trigger' ),
		'desc' => __( 'intro message', 'WP-Trigger' ),
		'id' => 'intro_message_h2_text',
		'std' => 'Intro Message h2',
		'type' => 'text'
	);
	//End Homepage tab

	//Page two tab
	$options[] = array(
	'name' => __( 'Section Two', 'WP-Trigger' ),
	'type' => 'heading'
	);

	//custom Page two
	$options[] = array(
		'name' => __( 'Custom Section Two', 'WP-Trigger' ),
		'desc' => __( 'Click here to use Custom Coding', 'WP-Trigger' ),
		'id' => 'section_two_custom',
		'type' => 'checkbox'
	);
	$options[] = array(
		'name' => __( 'Custom', 'WP-Trigger' ),
		'desc' => __( 'Write or copy code here.', 'WP-Trigger' ),
		'id' => 'section_two_custom_text',
		'std' => 'Write or copy code here.',
		'type' => 'textarea'
	);
	//End custom Page two

	$options[] = array(
		'name' => __( 'Heading text', 'WP-Trigger' ),
		'desc' => __( 'Section two heading text.', 'WP-Trigger' ),
		'id' => 'section_two_head_text',
		'std' => 'Section two',
		'type' => 'text'
	);
	$options[] = array(
		'name' =>  __( 'Heading Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'section_two_head_background',
		'std' => $background_defaults,
		'type' => 'background'
	);
	$options[] = array(
		'name' =>  __( 'Section Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'section_two_background',
		'std' => $background_defaults,
		'type' => 'background'
	);
	$options[] = array(
		'name' => __( 'feature title 1', 'WP-Trigger' ),
		'desc' => __( 'feature title 1', 'WP-Trigger' ),
		'id' => 'title_one_text',
		'std' => 'feature title 1',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'feature description 1', 'WP-Trigger' ),
		'desc' => __( 'feature description 1', 'WP-Trigger' ),
		'id' => 'description_one_text',
		'std' => 'feature description 1',
		'type' => 'textarea'
	);
	$options[] = array(
		'name' => __( 'feature image 1', 'WP-Trigger' ),
		'desc' => __( 'This creates a full size uploader that previews the image.', 'WP-Trigger' ),
		'id' => 'feature_one_image',
		'type' => 'upload'
	);



	$options[] = array(
		'name' => __( 'feature title 2', 'WP-Trigger' ),
		'desc' => __( 'feature title 2', 'WP-Trigger' ),
		'id' => 'title_two_text',
		'std' => 'feature title 2',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'feature description 2', 'WP-Trigger' ),
		'desc' => __( 'feature description 2', 'WP-Trigger' ),
		'id' => 'description_two_text',
		'std' => 'feature description 2',
		'type' => 'textarea'
	);
	$options[] = array(
		'name' => __( 'feature image 2', 'WP-Trigger' ),
		'desc' => __( 'This creates a full size uploader that previews the image.', 'WP-Trigger' ),
		'id' => 'feature_two_image',
		'type' => 'upload'
	);



	$options[] = array(
		'name' => __( 'feature title 3', 'WP-Trigger' ),
		'desc' => __( 'feature title 3', 'WP-Trigger' ),
		'id' => 'title_three_text',
		'std' => 'feature title 3',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'feature description 3', 'WP-Trigger' ),
		'desc' => __( 'feature description 3', 'WP-Trigger' ),
		'id' => 'description_three_text',
		'std' => 'feature description 3',
		'type' => 'textarea'
	);
	$options[] = array(
		'name' => __( 'feature image 3', 'WP-Trigger' ),
		'desc' => __( 'This creates a full size uploader that previews the image.', 'WP-Trigger' ),
		'id' => 'feature_three_image',
		'type' => 'upload'
	);
	//End Page two tab

	//Page three tab
	$options[] = array(
	'name' => __( 'Section Three', 'WP-Trigger' ),
	'type' => 'heading'
	);

	//custom Page three
	$options[] = array(
		'name' => __( 'Custom Section Three', 'WP-Trigger' ),
		'desc' => __( 'Click here to use Custom Coding', 'WP-Trigger' ),
		'id' => 'section_three_custom',
		'type' => 'checkbox'
	);
	$options[] = array(
		'name' => __( 'Custom', 'WP-Trigger' ),
		'desc' => __( 'Write or copy code here.', 'WP-Trigger' ),
		'id' => 'section_three_custom_text',
		'std' => '',
		'type' => 'textarea'
	);
	//End custom Page three

	$options[] = array(
		'name' => __( 'Heading text', 'WP-Trigger' ),
		'desc' => __( 'Section three heading text.', 'WP-Trigger' ),
		'id' => 'section_three_head_text',
		'std' => 'Section three',
		'type' => 'text'
	);
	$options[] = array(
		'name' =>  __( 'Heading Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'section_three_head_background',
		'std' => $background_defaults,
		'type' => 'background'
	);

	$options[] = array(
		'name' =>  __( 'Section Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'section_three_background',
		'std' => $background_defaults,
		'type' => 'background'
	);

	//End Page three tab

	//Page four tab
	$options[] = array(
	'name' => __( 'Section Four', 'WP-Trigger' ),
	'type' => 'heading'
	);

	//custom Page four
	$options[] = array(
		'name' => __( 'Custom Section Four', 'WP-Trigger' ),
		'desc' => __( 'Click here to use Custom Coding', 'WP-Trigger' ),
		'id' => 'section_four_custom',
		'type' => 'checkbox'
	);
	$options[] = array(
		'name' => __( 'Custom', 'WP-Trigger' ),
		'desc' => __( 'Write or copy code here.', 'WP-Trigger' ),
		'id' => 'section_four_custom_text',
		'std' => '',
		'type' => 'textarea'
	);
	//End custom Page four
	$options[] = array(
		'name' => __( 'Heading text', 'WP-Trigger' ),
		'desc' => __( 'Section four heading text.', 'WP-Trigger' ),
		'id' => 'section_four_head_text',
		'std' => 'Section four',
		'type' => 'text'
	);
	$options[] = array(
		'name' =>  __( 'Heading Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'section_four_head_background',
		'std' => $background_defaults,
		'type' => 'background'
	);

	$options[] = array(
		'name' => __( 'Number One', 'WP-Trigger' ),
		'desc' => __( 'Section four heading text.', 'WP-Trigger' ),
		'id' => 'number_one',
		'std' => '888',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Number One Text', 'WP-Trigger' ),
		'desc' => __( 'Section four heading text.', 'WP-Trigger' ),
		'id' => 'number_one_text',
		'std' => 'Number One Text',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Number Two', 'WP-Trigger' ),
		'desc' => __( 'Section four heading text.', 'WP-Trigger' ),
		'id' => 'number_two',
		'std' => '888',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Number Two Text', 'WP-Trigger' ),
		'desc' => __( 'Section four heading text.', 'WP-Trigger' ),
		'id' => 'number_two_text',
		'std' => 'Number Two Text',
		'type' => 'text'
	);
	$options[] = array(
		'name' =>  __( 'Section Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'section_four_one_background',
		'std' => $background_defaults,
		'type' => 'background'
	);
	$options[] = array(
		'name' => __( 'Sub Heading Text', 'WP-Trigger' ),
		'desc' => __( 'Section four heading text.', 'WP-Trigger' ),
		'id' => 'sub_head_text',
		'std' => 'Testimonials',
		'type' => 'text'
	);
	$options[] = array(
		'name' =>  __( 'Sub Heading Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'section_four_two_head_background',
		'std' => $background_defaults,
		'type' => 'background'
	);
	$options[] = array(
		'name' =>  __( 'Sub Section Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'section_four_two_background',
		'std' => $background_defaults,
		'type' => 'background'
	);
	//End Page four

	//Page five tab
	$options[] = array(
	'name' => __( 'Section Five', 'WP-Trigger' ),
	'type' => 'heading'
	);

	//custom Page five
	$options[] = array(
		'name' => __( 'Custom Section Five', 'WP-Trigger' ),
		'desc' => __( 'Click here to use Custom Coding', 'WP-Trigger' ),
		'id' => 'section_five_custom',
		'type' => 'checkbox'
	);
	$options[] = array(
		'name' => __( 'Custom', 'WP-Trigger' ),
		'desc' => __( 'Write or copy code here.', 'WP-Trigger' ),
		'id' => 'section_five_custom_text',
		'std' => '',
		'type' => 'textarea'
	);
	//End custom Page five
	$options[] = array(
		'name' => __( 'Heading text', 'WP-Trigger' ),
		'desc' => __( 'Section five heading text.', 'WP-Trigger' ),
		'id' => 'section_five_head_text',
		'std' => 'Section five',
		'type' => 'text'
	);
	$options[] = array(
		'name' =>  __( 'Heading Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'section_five_head_background',
		'std' => $background_defaults,
		'type' => 'background'
	);
	$options[] = array(
		'name' =>  __( 'Section Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'section_five_background',
		'std' => $background_defaults,
		'type' => 'background'
	);
	//End Page five

	// bolg tab
	$imagepath =  get_template_directory_uri() . '/images/';
	$options[] = array(
	'name' => __( 'Blog', 'WP-Trigger' ),
	'type' => 'heading'
	);
	$options[] = array(
		'name' => "Blog Layout",
		'desc' => "Choose your layout.",
		'id' => "blog_layout",
		'std' => "right",
		'type' => "images",
		'options' => array(
			'left' => $imagepath . '2cl.png',
			'center' => $imagepath . '1col.png',
			'right' => $imagepath . '2cr.png'
		)
	);
	$options[] = array(
		'name' => __( 'Header Text', 'WP-Trigger' ),
		'desc' => __( 'Your blog header text.', 'WP-Trigger' ),
		'id' => 'blog_head_text',
		'std' => 'Blog',
		'type' => 'text'
	);
	$options[] = array(
			'name' => __( 'Number of Posts on Homepage', 'theme-textdomain' ),
			'desc' => __( 'Limit number of posts on home page.', 'theme-textdomain' ),
			'id' => 'blogposts_select',
			'std' => '2',
			'type' => 'select',
			'class' => 'mini', //mini, tiny, small
			'options' => $blogposts_array
	);
	$options[] = array(
		'name' =>  __( 'Heading Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'blog_head_background',
		'std' => $background_defaults,
		'type' => 'background'
	);
	$options[] = array(
		'name' =>  __( 'Section Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'section_blog_background',
		'std' => $background_defaults,
		'type' => 'background'
	);

	//end bolg tab

	// footer
	$options[] = array(
	'name' => __( 'Footer', 'WP-Trigger' ),
	'type' => 'heading'
	);
	$options[] = array(
		'name' => __( 'Head Text', 'WP-Trigger' ),
		'desc' => __( 'Write your head text', 'WP-Trigger' ),
		'id' => 'head_text_footer',
		'std' => 'CONTACT US',
		'type' => 'text'
	);
	$options[] = array(
		'name' =>  __( 'Background', 'WP-Trigger' ),
		'desc' => __( 'Change the background CSS.', 'WP-Trigger' ),
		'id' => 'footer_background',
		'std' => $background_defaults,
		'type' => 'background'
	);
	$options[] = array(
		'name' => __( 'Facebook', 'WP-Trigger' ),
		'desc' => __( 'Facebook URL', 'WP-Trigger' ),
		'id' => 'facebook_url',
		'std' => 'https://facebook.com',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Twitter', 'WP-Trigger' ),
		'desc' => __( 'Twitter URL', 'WP-Trigger' ),
		'id' => 'twitter_url',
		'std' => 'https://twitter.com',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Google +', 'WP-Trigger' ),
		'desc' => __( 'GOOGLE Plus URL', 'WP-Trigger' ),
		'id' => 'google_url',
		'std' => 'https://google.com',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Linkedin', 'WP-Trigger' ),
		'desc' => __( 'Linkedin URL', 'WP-Trigger' ),
		'id' => 'linkedin_url',
		'std' => 'https://www.linkedin.com/',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Email', 'WP-Trigger' ),
		'desc' => __( 'Email', 'WP-Trigger' ),
		'id' => 'your_email',
		'std' => 'your@email.com',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Telephone Number', 'WP-Trigger' ),
		'desc' => __( 'Telephone Number', 'WP-Trigger' ),
		'id' => 'your_tel',
		'std' => '999-999-9999',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Footer Text', 'WP-Trigger' ),
		'desc' => __( 'Your footer text.', 'WP-Trigger' ),
		'id' => 'footer_text',
		'std' => '©2016 WPTrigger theme from <a href="http://devmyway.com">Devmyway</a>',
		'type' => 'textarea'
	);
	// shop tab
	$imagepath =  get_template_directory_uri() . '/images/';
	$options[] = array(
	'name' => __( 'Shop', 'WP-Trigger' ),
	'type' => 'heading'
	);
	$options[] = array(
		'name' => "Shop Layout",
		'desc' => "Choose your layout.",
		'id' => "shop_layout",
		'std' => "right",
		'type' => "images",
		'options' => array(
			'left' => $imagepath . '2cl.png',
			'center' => $imagepath . '1col.png',
			'right' => $imagepath . '2cr.png'
		)
	);

	return $options;
}

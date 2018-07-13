<?php if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ab0f5d6a38c6',
	'title' => 'Customization',
	'fields' => array(
		array(
			'key' => 'field_5ab0f63141a69',
			'label' => 'Full Screen',
			'name' => 'mt_home_full_screen',
			'type' => 'true_false',
			'instructions' => 'Select if you want home full screen section',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'ON',
			'ui_off_text' => 'OFF',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'mt_home',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ab0fb02cca9f',
	'title' => 'Gallery Options',
	'fields' => array(
		array(
			'key' => 'field_5ab0fb0e4a005',
			'label' => 'Subtitle text',
			'name' => 'mt_gallery_subtitle',
			'type' => 'text',
			'instructions' => 'Add top page subtitle text',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ab0fb254a006',
			'label' => 'Gallery Images',
			'name' => 'mt_gallery_images',
			'type' => 'gallery',
			'instructions' => 'Add gallery images',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'insert' => 'append',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5ab0fb4c4a007',
			'label' => 'Gallery Template',
			'name' => 'mt_gallery_template',
			'type' => 'select',
			'instructions' => 'Select the gallery template',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'mt_gallery_3cols' => '3 Columns',
				'mt_gallery_4cols' => '4 Columns',
				'mt_gallery_3cols_fs' => '3 Columns Full Screen',
				'mt_gallery_4cols_fs' => '4 Columns Full Screen',
			),
			'default_value' => array(
				0 => 'mt_gallery_3cols',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'mt_gallery',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ab0fa75ac27c',
	'title' => 'Item Customization',
	'fields' => array(
		array(
			'key' => 'field_5ab0fa7f5c3ff',
			'label' => 'Description',
			'name' => 'mt_menu_item_desc',
			'type' => 'text',
			'instructions' => 'Add menu item description',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ab0fa9e5c400',
			'label' => 'Price',
			'name' => 'mt_menu_item_price',
			'type' => 'text',
			'instructions' => 'Add menu item price',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'mt_menu',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ab0fc8068933',
	'title' => 'Page Customization',
	'fields' => array(
		array(
			'key' => 'field_5ab0fc8bfb71f',
			'label' => 'Custom Title',
			'name' => 'mt_page_title',
			'type' => 'text',
			'instructions' => 'Change page title',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ab0fca2fb720',
			'label' => 'Subtitle text',
			'name' => 'mt_page_subtitle',
			'type' => 'text',
			'instructions' => 'Add page subtitle text',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ab0fcbcfb721',
			'label' => 'Top Image Height',
			'name' => 'mt_page_top_imgh',
			'type' => 'text',
			'instructions' => 'Change top page image height. Default is 450px',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
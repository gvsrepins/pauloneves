<?php

/* ----------------------------------------
* To retrieve a value use: $eto_options[$prefix.'var']
----------------------------------------- */

$prefix = 'eto_';

/* ----------------------------------------
* Create the TABS
----------------------------------------- */

$eto_custom_tabs = array(
		array(
			'label'=> __('Rodapé', 'eto'),
			'id'	=> $prefix.'footer'
		),
		array(
			'label'=> __('Redes Sociais', 'eto'),
			'id'	=> $prefix.'social-network'
		)
	);

/* ----------------------------------------
* Options Field Array
----------------------------------------- */

$eto_custom_meta_fields = array(

	/* -- TAB 1 -- */
	array(
		'id'	=> $prefix.'footer', // Use data in $eto_custom_tabs
		'type'	=> 'tab_start'
	),
	
	array(
		'label'=> 'Footer options',
		'id'	=> $prefix.'title',
		'type'	=> 'title'
	),

	array(
		'label'=> 'Linha 1',		
		'id'	=> $prefix.'linha1',
		'type'	=> 'text'
	),

	array(
		'label'=> 'Linha 2',		
		'id'	=> $prefix.'linha2',
		'type'	=> 'text'
	),

	array(
		'type'	=> 'tab_end'
	),

	/* -- END TAB 1-- */

	/* -- TAB 2-- */
	array(
		'id'	=> $prefix.'social-network', // Use data in $eto_custom_tabs
		'type'	=> 'tab_start'
	),
	
	array(
		'label'=> 'Redes Sociais',
		'id'	=> $prefix.'title',
		'type'	=> 'title'
	),
	array(
		'label'=> 'Linkedin',		
		'id'	=> $prefix.'linkedin',
		'type'	=> 'text'
	),

	array(
		'label'=> 'Pinterest',		
		'id'	=> $prefix.'pinterest',
		'type'	=> 'text'
	),

	array(
		'label'=> 'Facebook',		
		'id'	=> $prefix.'facebook',
		'type'	=> 'text'
	),

	array(
		'label'=> 'Twitter',		
		'id'	=> $prefix.'twitter',
		'type'	=> 'text'
	),

	array(
		'type'	=> 'tab_end'
	),

	/* -- END TAB 2- */
);
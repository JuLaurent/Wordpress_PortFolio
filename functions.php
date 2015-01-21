<?php
	
	add_action('init','create_post_types');
	add_action('init','create_nav_menu');
	add_theme_support( 'post-thumbnails' ); 

	function create_post_types(){
		
		$args1 = [
			'label' => 'Réalisations',
			'public' => true,
			'supports' => array( 'title' , 'editor' , 'author' , 'thumbnail' , 'except')
		];

		register_post_type('realisations', $args1);

		$args2 = [
			'label' => 'Compétences',
			'public' => true,
			'supports' => array( 'title' , 'editor' , 'author' , 'thumbnail' , 'except')
		];

		register_post_type('skills', $args2);


		$args3 = [
			'label' => 'Réseaux',
			'public' => true,
			'supports' => array( 'title' , 'editor' , 'author' , 'thumbnail' , 'except')
		];

		register_post_type('reseaux', $args3);

		$args4 = [
			'label' => 'Informations personnelles',
			'public' => true,
			'supports' => array( 'title' , 'editor' , 'author' , 'thumbnail' , 'except')
		];

		register_post_type('info_perso', $args4);
	}
	
	function create_nav_menu(){
		register_nav_menu('top', "Menu principal");
	}
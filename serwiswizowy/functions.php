<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );

register_nav_menu( 'main-menu', 'Menu główne' );
register_nav_menu( 'footer-1', 'Stopka, slot 1' );
register_nav_menu( 'footer-2', 'Stopka, slot 2' );
register_nav_menu( 'footer-3', 'Stopka, slot 3' );
register_nav_menu( 'footer-4', 'Stopka, slot 4' );

// funkcja dodająca klasy do body
function bodyMarkUp(){
	$ret = '';
	
	if( is_admin_bar_showing() ){
		$ret .= ' adminbar ';
		
	}
	
	echo $ret;
}

// generuje HTML menu głównego
function printMainMenu(){
	/*
Array
(
    [0] => WP_Post Object
        (
            [ID] => 16
            [post_author] => 1
            [post_date] => 2018-03-24 09:21:27
            [post_date_gmt] => 2018-03-24 08:21:27
            [post_content] => 
            [post_title] => Strona główna
            [post_excerpt] => 
            [post_status] => publish
            [comment_status] => closed
            [ping_status] => closed
            [post_password] => 
            [post_name] => strona-glowna
            [to_ping] => 
            [pinged] => 
            [post_modified] => 2018-03-24 09:22:24
            [post_modified_gmt] => 2018-03-24 08:22:24
            [post_content_filtered] => 
            [post_parent] => 0
            [guid] => http://serwiswizowy.poligon.scepter.pl/?p=16
            [menu_order] => 1
            [post_type] => nav_menu_item
            [post_mime_type] => 
            [comment_count] => 0
            [filter] => raw
            [db_id] => 16
            [menu_item_parent] => 0
            [object_id] => 16
            [object] => custom
            [type] => custom
            [type_label] => Własny odnośnik
            [title] => Strona główna
            [url] => /
            [target] => 
            [attr_title] => 
            [description] => 
            [classes] => Array
                (
                    [0] => 
                )

            [xfn] => 
        )
	...
)
	*/
	$items = wp_get_nav_menu_items( 'menu-glowne' );
	$page = get_post();
	
	echo "<ul class='navbar-nav mr-auto'>";
	
	foreach( $items as $item ){
		$infix = $page->post_title == $item->title?( "active" ):( "" );
		
		printf(
			"<li class='nav-item'>
				<a class='nav-link %s' href='%s'>%s</a>
			</li>",
			$infix,
			$item->url,
			$item->title
			
		);
		
	}
	
	echo "</ul>";
	
}

// generuje HTML menu w stopce
function printFooterMenu( $id = '', $title = '' ){
	/*
Array
(
    [0] => WP_Post Object
        (
            [ID] => 16
            [post_author] => 1
            [post_date] => 2018-03-24 09:21:27
            [post_date_gmt] => 2018-03-24 08:21:27
            [post_content] => 
            [post_title] => Strona główna
            [post_excerpt] => 
            [post_status] => publish
            [comment_status] => closed
            [ping_status] => closed
            [post_password] => 
            [post_name] => strona-glowna
            [to_ping] => 
            [pinged] => 
            [post_modified] => 2018-03-24 09:22:24
            [post_modified_gmt] => 2018-03-24 08:22:24
            [post_content_filtered] => 
            [post_parent] => 0
            [guid] => http://serwiswizowy.poligon.scepter.pl/?p=16
            [menu_order] => 1
            [post_type] => nav_menu_item
            [post_mime_type] => 
            [comment_count] => 0
            [filter] => raw
            [db_id] => 16
            [menu_item_parent] => 0
            [object_id] => 16
            [object] => custom
            [type] => custom
            [type_label] => Własny odnośnik
            [title] => Strona główna
            [url] => /
            [target] => 
            [attr_title] => 
            [description] => 
            [classes] => Array
                (
                    [0] => 
                )

            [xfn] => 
        )
	...
)
	*/
	$items = wp_get_nav_menu_items( $id );
	$page = get_post();
	
	echo "<ul class='menu-footer d-flex flex-column align-items-center align-items-lg-start'>";
	echo "<li class='title-section'>{$title}</li>";
	
	foreach( $items as $item ){
		
		printf(
			"<li>
				<a href='%s'>%s</a>
			</li>",
			$item->url,
			$item->title
			
		);
		
	}
	
	echo "</ul>";
	
}

// generuje HTML breadcrumbu
function printBreadcrumb(){
	/*
		<header class='breadcrumb d-flex align-items-center'>
			<p class='link-bread'>Strona główna</p>
			<h3>KRAJE</h3>
		</header>
	*/
	$end = false;
	$current = get_post();
	
	echo "<header class='breadcrumb d-flex align-items-center'>";
	echo "<p class='link-bread'><a href='/'>Strona główna</a></p>";
	
	do{
		printf(
			"<h3>
				<a href='%s'>%s</a>
			</h3>",
			get_the_permalink( $current->ID ),
			$current->post_title
			
		);
		
		if( $current->post_parent == 0 ){
			$end = true;
			
		}
		else{
			$current = get_post( $current->post_parent );
			
		}
		
	}
	while( $end === false );
	
	echo "</header>";
	
}


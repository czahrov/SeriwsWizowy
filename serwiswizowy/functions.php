<?php

define( 'DMODE', isset( $_COOKIE[ 'sprytne' ] ) );

// add_theme_support( 'post-thumbnails' );
// add_theme_support( 'widgets' );

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

// formularz z opcjami do wizy
function genWizaOpts(){
	$country = get_post()->post_title;
	$include = __DIR__ . "/cennik/{$country}.php";
	if( file_exists( $include ) ){
		include $include;
		
		// OPCJA
		foreach( $data as $seg_num => $segment ){
			$seg_data = array_merge(
				array(
					'name' => $segment[ 'title' ],
					'value' => $segment[ 'title' ],
					'opts_name' => $segment[ 'title' ] . "-opts",
					'hint' => '',
					'type' => 'checkbox',
					'required' => false,
					'selected' => false,
					
				),
				$segment
			);
			
			if( !empty( $seg_data[ 'hint' ] ) ){
				$hint = sprintf(
					'<div class="help fa fa-question-circle-o">
							<div class="hint">%s</div>
							
						</div>',
					$seg_data[ 'hint' ]
					
				);
				
			}
			else{
				$hint = '';
				
			}
			
			printf(
				'<div class="opt-single col-12">
					<input id="opt%u" class="" type="%s" name="%s" value="%s" hidden %s %s>
					<label for="opt%1$u" class="d-flex align-items-center">
						<div class="checkbox-custom d-flex align-items-center justify-content-center">
							<div class="icon fa fa-check"></div>
						</div>
						<div class="text">
							%s
						</div>
						%s
					</label>
				</div>',
				$seg_num,
				$seg_data[ 'type' ],
				$seg_data[ 'name' ],
				$seg_data[ 'value' ],
				$seg_data[ 'required' ]?( 'checked disabled' ):( '' ),
				$seg_data[ 'selected' ]?( 'checked' ):( '' ),
				$seg_data[ 'title' ],
				$hint
				
			);
			
			// WARIANTY
			foreach( $segment[ 'opts' ] as $opt_num => $opt ){
				
				$opt_data = array_merge(
					array(
						'name' => $seg_data[ 'opts_name' ],
						'value' => $opt[ 'title' ],
						'hint' => '',
						'type' => 'radio',
						'price' => 0,
						'selected' => false,
						
					),
					$opt
					
				);
				
				if( !empty( $opt_data[ 'hint' ] ) ){
					$hint = sprintf(
						'<div class="help fa fa-question-circle-o">
								<div class="hint">%s</div>
								
							</div>',
						$opt_data[ 'hint' ]
						
					);
					
				}
				else{
					$hint = '';
					
				}
				
				printf(
					'<div class="opt-single sub col-12 col-md-6">
						<input id="opt%u-%u" class="" type="%s" name="%s" value="%s" hidden price=%u %s>
						<label for="opt%1$u-%2$u" class="d-flex align-items-center">
							<div class="checkbox-custom d-flex align-items-center justify-content-center">
								<div class="icon fa fa-check"></div>
							</div>
							<div class="text">
								%s
							</div>
							%s
						</label>
					</div>',
					$seg_num,
					$opt_num,
					$opt_data[ 'type' ],
					$opt_data[ 'name' ],
					$opt_data[ 'value' ],
					$opt_data[ 'price' ],
					$opt_data[ 'selected' ]?( 'checked' ):( '' ),
					$opt_data[ 'title' ],
					$hint
					
				);
				
			}
			
		}
		
	}
	
}

// formularz z danymi do wizy
function genWizaDane(){
	$country = $_POST[ 'kraj' ];
	$include = __DIR__ . "/formularz/{$country}.php";
	if( file_exists( $include ) ){
		include $include;
		
	}
	elseif( file_exists( __DIR__ . "/formularz/std.php" ) ){
		include __DIR__ . "/formularz/std.php";
		
	}
	else return false;
		
	// SEGMENT
	foreach( $data as $seg_num => $segment ){
		
		printf(
			'<div class="belka d-none d-md-flex align-items-center">
				<div class="name">
					%s
				</div>
				<div class="sep"></div>
				<div class="numb">
					%u
				</div>
				
			</div>
			<div class="main d-flex flex-wrap align-items-center">
				<h4 class="head d-md-none col-12">
					%1$s
				</h4>',
			$segment[ 'title' ],
			$seg_num+1
			
		);
		
		// POLA
		foreach( $segment[ 'fields' ] as $field_num => $field ){
			$field_data = array_merge(
				array(
					'field_type' => 'input',
					'type' => 'text',
					'name' => $field[ 'title' ],
					'hint' => '',
					'required' => false,
					'atts' => array(),
					
				),
				$field
			);
			
			$required = $field_data['required']?( 'required' ):( '' );
			
			if( !empty( $field['hint'] ) ){
				$hint = sprintf(
					'<div class="help fa fa-question-circle-o">
						<div class="hint">%s</div>
						
					</div>',
					$field['hint']
					
				);
				
			}
			else{
				$hint = '';
				
			}
			
			$atts = '';
			if( !empty( $field_data['atts'] ) ){
				$t = array();
				foreach( $field_data['atts'] as $param => $value ){
					$t[] = sprintf(
						'%s="%s"',
						$param,
						$value
						
					);
					
				}
				
				$atts = implode( " ", $t );
			}
			
			switch( $field_data['field_type'] ){
				case 'input':
					$input = sprintf(
						'<input type="%s" name="%s" %s %s>',
						$field_data['type'],
						$field_data['name'],
						$required,
						$atts
						
					);
					
				break;
				case 'textarea':
					$input = sprintf(
						'<textarea name="%s" %s %s></textarea>',
						$field_data['name'],
						$required,
						$atts
						
					);
					
				break;
				case 'select':
					$opts = "";
					foreach( $field['opts'] as $num_sub => $sub ){
						$sub_data = array_merge(
							array(
								'value' => $sub['title'],
							),
							$sub
						);
						
						$opts .= sprintf(
							'<option value="%s">%s</option>',
							$sub_data['value'],
							$sub_data['title']
							
						);
						
					}
					
					$input = sprintf(
						'<select name="%s" %s %s>%s</select>',
						$field_data['name'],
						$required,
						$atts,
						$opts
						
					);
					
				break;
				
			}
			
			printf(
				'<div class="cell col-12 col-md-4 d-flex flex-column">
					<label class="d-flex align-items-center">
						<div>
							%s
						</div>
						%s
					</label>
					%s
					
				</div>',
				$field_data[ 'title' ],
				$hint,
				$input
				
			);
			
		}
		
		echo "</div>";
		
	}
	
}

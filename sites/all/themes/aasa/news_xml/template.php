<?php
/**
 * Override or insert PHPTemplate variables into the templates.
 */
function phptemplate_preprocess_page(&$vars) {
	 /* Load js and css files */
	drupal_add_js(path_to_theme().'/js/aasa.js');
	drupal_add_css(path_to_theme().'/editor.css');
	$node = aasa_theme_current_node();
	$url = explode('/', $_GET['q']);
	/* BROWSER TITLE */
	$vars['head_title'] = $node->field_browser_title[0]['value'];
	$vars['template'] = 'admin.inc.php';
    $vars['classes'] = $node->type;
	 
	switch($node->type){
		case 'front_page':
			$vars['template'] = 'front.inc.php';
			if($url[2]!='edit'){
				drupal_add_js(path_to_theme().'/js/jquery-1.6.2.js');
				drupal_add_js(path_to_theme().'/js/nivo-slider/jquery.nivo.slider.js');
			}
		break;
	
		case 'internal_page':
		case 'board_of_director':
		case 'education_and_event':
		case 'member_resources':
		case 'membership':
		case 'sponsorship':
		case 'the_cutting_edge':
		case 'the_cutting_edge_past':
		case 'national_conference':
		case 'regional_conferences':
		case 'contact_form':
		case 'webinars_widget':
		case 'widget_container':
		case 'widget_gallery':
	
			$vars['template'] = 'node.tpl.php';
			    if($url[2]!='edit'){
				drupal_add_js(path_to_theme().'/js/jquery-1.6.2.js');
				drupal_add_js(path_to_theme().'/js/nivo-slider/jquery.nivo.slider.js');
			    }
		break;
	 }
	 $vars['node_nid_widget']=$node->nid;

	if($url[0]=='admin' || $url[2]=='edit' || $url[1]=='add'|| $url[2]=='delete') $vars['template'] = 'admin.inc.php';


	if($url[0]=='node' && $url[1]=='add' && $url[2]=='profile' ){ 
	  $vars['template'] = 'node.tpl.php';
	  drupal_add_css(path_to_theme().'/profile.css');
	}
	
	$globals = node_load(56);
    
	/* FOOTER TEXT*/
	$vars['title'] = $globals->title;
	$vars['field_footer_text'] = $globals->field_footer_text[0]['value'];
	$vars['node_nid_widget']= $globals->title;
	
	 /* Reload the javascript and css files */
	 $vars['scripts'] = drupal_get_js();
	 $vars['styles'] = drupal_get_css();

     $vars['active_menu'] = title_internal();
}

function aasa_theme_current_node(){
  if(arg(0)=='node' && is_numeric(arg(1)))
    return node_load(arg(1));
}

function title_internal(){
  return menu_get_active_trail(); 
  $arr[0] =  $class[1]['title'];
  $arr[1] =  $class[1]['href'];
  return $arr;
}

function phptemplate_breadcrumb($breadcrumb){  
  if(drupal_is_front_page())
    return "";
    $bread_arr = drupal_get_breadcrumb();
	$position = count(drupal_get_breadcrumb())-1;
  	$breadcrumb[] = l( ucwords( $bread_arr[$position] ) ,$_GET["q"],array("html"=>TRUE));

	   if (!empty($breadcrumb)) {
	    unset($breadcrumb[0]);
	    $lat = sizeof($breadcrumb)-1;
	    unset($breadcrumb[$lat]);
		$retornado = '<div class="breadcrumb">'. ucfirst(implode(' / ', $breadcrumb)).'</div>';
	  }
	  $url = explode('/', $_GET['q']);
	  if($url[0]=='node' && $url[1]=='add' && $url[2]=='profile' ){ 
	    $retornado = '<div class="breadcrumb"><a href="">Request Membership</a></div>';
	  }
	  if($url[0]=='node' && $url[1]=='edit' && $url[2]=='profile' ){ 
	    $retornado = '<div class="breadcrumb"><a href="">Update Profile</a></div>';
	  }
	  return $retornado;
}


function phptemplate_webform_mail_headers($form_values, $node, $sid, $cid) {
  $headers = array(
    'Content-Type'  => 'text/html; charset=UTF-8; format=flowed; delsp=yes',
    'X-Mailer'      => 'Drupal Webform (PHP/'. phpversion() .')',
  );
  return $headers;
}
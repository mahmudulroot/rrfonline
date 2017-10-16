<?php 

/*
Plugin Name:Uxstock
*/

if (!defined('ABSPATH'))die('-1');
/**
* 
*/
class uxstockVCExtendsAddonsClass 
{
	
	function __construct()
	{
		add_action( 'init' , array ( $this , 'uxstockIntegratewithVC'));
	}

	public function uxstockIntegratewithVC(){
		//Check iF Visual composer Is not Install 
		if( ! defined('WP_VC_VERSION')){

			add_action('admin_notices',array($this,'uxstockshowVersionnotices'));
		}

		//Visual Composer Addons
		include UXSTOCK_ACC_PATH.'/vc-addons/vc-slide.php';
	}

	//show Visual Composer 
	public function uxstockshowVersionnotices(){
		$theme_data = wp_get_theme();
		echo ' <div class="notice notices-warninig">
			<p>'.sprintf(__('<strong>%s</strong> recomanded <strong><a href="'.site_url().'/wp-admin/theme.php?page=tgmpa-install-plugins" target="_blank">Visual Composer</a></strong>Plugin To be install and Active to your site.','uxstock-mahmudul'),$theme_data->get('neme')).'</p>
		</div>';
	}
}

//Finally Initialize Code 
new uxstockVCExtendsAddonsClass();


?>
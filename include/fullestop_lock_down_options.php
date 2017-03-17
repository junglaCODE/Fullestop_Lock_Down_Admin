<?php 

if (!function_exists('flda_fullestop_lock_admin_options')) {
    function flda_fullestop_lock_admin_options(){
		/*incluyendo el paquete de idiomas*/
        include 'lang_plugins.php';
        
        /*SAVING NEW URL NAME FROM ADMIN USER WHICH NEEDS TO USED*/
        
        if(isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'fullestop-lock-down-admin')) {  
        	//Form data sent
            
            if(check_admin_referer( 'fullestop-lock-down-admin' )){
                
            		$fullestop_hide_admin 		= 	'';  
            		$fullestop_login_name		=	'';
                    
                    if(isset($_POST['fullestop_hide_admin'])){
                        $fullestop_hide_admin 		= 	sanitize_text_field($_POST['fullestop_hide_admin']);
                    }
                    
                    if(isset($_POST['fullestop_login_name'])){
                        $fullestop_login_name 		= 	sanitize_title_with_dashes($_POST['fullestop_login_name']);
                    }
                    
                   	
                    $fullestop_disallowed 	= 	array('user', 'wp-admin', 'wp-content', 'wp-includes', 'wp-feed.php', 'index', 'feed', 'rss', 'robots', 'robots.txt', 'wp-login.php',	'wp-login', 'wp-config', 'blog', 'sitemap', 'sitemap.xml');
                    
                    
                    if(empty($fullestop_login_name)){
                    
                    	$fullestop_error	= $__IDIOMA__[$LANG]['fullestop_error'][0];
            			?>
            			<div class="error"><p><strong> <?php _e($__IDIOMA__[$LANG]['fullestop_error'][1],'flda' ); ?> </strong></p></div>
                    <?php
                        
                    }else{
                        if(in_array( $fullestop_login_name, $fullestop_disallowed)){ 
            				$fullestop_disable		=	$__IDIOMA__[$LANG]['fullestop_disable'][0];
            			?>
            			<div class="error"><p><strong> <?php _e($__IDIOMA__[$LANG]['fullestop_disable'][1],'flda' ); ?> </strong></p></div>
            			<?php 
            			}else{
            			     update_option('fullestop_hide_admin',$fullestop_hide_admin);
            				 update_option('fullestop_login_name',$fullestop_login_name);
                            ?>
                            <div class="updated"><p><strong> <?php _e($__IDIOMA__[$LANG]['fullestop_error'][2] ); ?> </strong></p></div>
                            <?php
            			}
                    }
                }
    	   }
           else {
    		      $fullestop_hide_admin 		=	 	get_option('fullestop_hide_admin'); 
    		      $fullestop_login_name 		=	 	get_option('fullestop_login_name');
          }
            
        /*SAVING NEW URL NAME FROM ADMIN USER WHICH NEEDS TO USED*/
            
    	?>
    <div>
    	<form class="fullestop_theme_form" id="flda_form" method="post" >
    		<h3><?php _e("Fullestop Lock Down Admin: ",'flda' ); ?></h3>
    		<p><?php _e($__IDIOMA__[$LANG]['description'],'flda' ); ?></p>
    		<label for="fullestop_hide_admin"><b><?php _e($__IDIOMA__[$LANG]['checked'],'flda' ); ?></b>- </label> 
    		<input type="checkbox" name="fullestop_hide_admin" value="yes" <?php if(isset($fullestop_hide_admin) &&$fullestop_hide_admin == 'yes') echo 'checked = "checked"'; ?>  />
    			<br />
    		<br />
    		<h3><?php _e("WordPress Login URL",'flda' ); ?></h3>
    		<p><?php _e($__IDIOMA__[$LANG]['change_url'],'flda' ); ?><b> <?php echo wp_guess_url().'/'; ?>
    		<input type="text" name="fullestop_login_name" value="<?php if(isset($fullestop_login_name)) echo $fullestop_login_name; ?>" /></b><span style="color:red;"><?php if(isset($fullestop_error)){ echo $fullestop_error; }else if($fullestop_disable){ echo $fullestop_disable; } ?></span>
    		
    		<?php global $auth_obj; $fullestop_url = site_url() . '/'. $fullestop_login_name; ?>
    		<p><?php _e($__IDIOMA__[$LANG]['lastest'],'flda' ); ?> <code><a href="<?php echo $fullestop_url; ?>"><?php echo $fullestop_url; ?></a></code>.</p>
    		 <?php wp_nonce_field( 'fullestop-lock-down-admin');?>
    		<input class='button-primary' type='submit' name='Save' value='<?php _e('Save Options'); ?>' id='submitbutton' />
        </form>
    </div>
<?php 
    }
}
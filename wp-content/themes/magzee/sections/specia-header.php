<section class="header-top-info-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-5">
                <!-- Start Social Media Icons -->
				<?php 
					
					$hide_show_social= get_theme_mod('hide_show_social','1'); 
					$facebook_link= get_theme_mod('facebook_link',''); 
					$linkedin_link= get_theme_mod('linkedin_link',''); 
					$twitter_link= get_theme_mod('twitter_link',''); 
					$googleplus_link= get_theme_mod('googleplus_link',''); 
					$instagram_link= get_theme_mod('instagram_link',''); 
					$dribble_link= get_theme_mod('dribble_link',''); 
					$github_link= get_theme_mod('github_link',''); 
					$bitbucket_link= get_theme_mod('bitbucket_link',''); 
					$email_link= get_theme_mod('email_link',''); 
					$skype_link= get_theme_mod('skype_link',''); 
					$skype_action_link= get_theme_mod('skype_action_link',''); 
					$vk_link= get_theme_mod('vk_link','');
					$pinterest_link= get_theme_mod('pinterest_link','');	
									
				?>
				
				
					<?php if($hide_show_social == '1') { ?>
						<ul class="social pull-left">
							<?php if($facebook_link) { ?> 
								<li><a href="<?php echo esc_url($facebook_link); ?>"><i class="fa fa-facebook"></i></a></li>
							<?php } ?>
							
							<?php if($linkedin_link) { ?> 
							<li><a href="<?php echo esc_url($linkedin_link); ?>"><i class="fa fa-linkedin"></i></a></li>
							<?php } ?>
							
							<?php if($twitter_link) { ?> 
							<li><a href="<?php echo esc_url($twitter_link); ?>"><i class="fa fa-twitter"></i></a></li>
							<?php } ?>
							
							<?php if($googleplus_link) { ?> 
							<li><a href="<?php echo esc_url($googleplus_link); ?>"><i class="fa fa-google-plus"></i></a></li>
							<?php } ?>
							
							<?php if($instagram_link) { ?> 
							<li><a href="<?php echo esc_url($instagram_link); ?>"><i class="fa fa-instagram"></i></a></li>
							<?php } ?>
							
							<?php if($dribble_link) { ?> 
							<li><a href="<?php echo esc_url($dribble_link); ?>"><i class="fa fa-dribbble"></i></a></li>
							<?php } ?>
							
							<?php if($github_link) { ?> 
							<li><a href="<?php echo esc_url($github_link); ?>"><i class="fa fa-github-alt"></i></a></li>
							<?php } ?>
							
							<?php if($bitbucket_link) { ?> 
							<li><a href="<?php echo esc_url($bitbucket_link); ?>"><i class="fa fa-bitbucket"></i></a></li>
							<?php } ?>
							
							<?php if($email_link) { ?> 
							<li><a href="mailto:<?php echo esc_attr($email_link); ?>"><i class="fa fa-envelope-o"></i></a></li>
							<?php } ?>
							
							<?php if($skype_link) { ?> 
							<li><a href="<?php echo esc_attr($skype_link); ?>?<?php echo esc_attr($skype_action_link); ?>"><i class="fa fa-skype"></i></a></li>
							<?php } ?>
							
							<?php if($vk_link) { ?> 
							<li><a href="<?php echo esc_url($vk_link); ?>"><i class="fa fa-vk"></i></a></li>
							<?php } ?>
							
							<?php if($pinterest_link) { ?> 
							<li><a href="<?php echo esc_url($pinterest_link); ?>"><i class="fa fa-pinterest-square"></i></a></li>
							<?php } ?>
						</ul>
					<?php } ?>
                <!-- /End Social Media Icons-->
            </div>
			
			<?php
				$button_label= get_theme_mod('button_label','Book Now');
				$button_url= get_theme_mod('button_url');
				$button_icon= get_theme_mod('button_icon','fa-clock-o'); 			
				$header_cart= get_theme_mod('header_cart','1');
			?>

            <div class="col-md-6 col-sm-7">
				<!-- Start Contact Info -->
				<ul class="info pull-right">
						<?php if($header_cart== '1') :?>
						<li>
							<a href="" class="cart-icon"><i class="fa fa-cart-plus"></i>
								<span class="count">0</span>
							</a>
						</li>
						<?php endif; ?>
						
						<?php if($button_label) :?>
						<li>
							<a href="<?php echo esc_url($button_url); ?>" class="magzee-button"><i class="fa <?php echo esc_attr($button_icon); ?>"></i> <?php echo esc_html($button_label); ?></a>
						</li>
						<?php endif; ?>
				</ul>
				<!-- /End Contact Info -->
			</div>
        </div>
    </div>
</section>

<div class="clearfix"></div>
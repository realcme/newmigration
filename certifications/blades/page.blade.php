<?php
$name=$page_settings['name'];
$head_title="Head
Title";
$certificate=[
'begin_date'=>'01/01/2017',
'dateearned'=>'01/01/2017',
'expiration_date'=>'01/01/2017',
'creditearned'=>'01/01/2017',
'course_title'=>'title',
]
?>
<body class="<?php echo $body_classes; ?>">
  <div id="skip-nav"><a href="#content">Skip to Content</a></div>  
  
	<div id="page">
	
		<!-- ______________________ HEADER _______________________ -->
		
		<div id="header"> 
			
			<?php if($search_box): ?>
				<?php echo $search_box; ?>
			<?php endif; ?>
			
		  	<div id="logo-title">   
			
		  	  <?php if (!empty($logo)): ?>
		  	    <a href="<?php echo $base_path; ?>" title="<?php echo t('Home'); ?>" rel="home" id="logo">
		  	      <img src="<?php echo $logo; ?>" alt="<?php echo t('Home'); ?>" />
		  	    </a>
		  	  <?php endif; ?>

	        <div id="name-and-slogan">
	          <?php if (!empty($site_name)): ?>
	            <h1 id="site-name">
	              <a href="<?php echo $base_path; ?>" title="<?php echo t('Home'); ?>" rel="home"><span><?php echo $site_name; ?></span></a>
	            </h1>
	          <?php endif; ?>
	          <?php if (!empty($site_slogan)): ?>
	            <div id="site-slogan"><?php echo $site_slogan; ?></div>
	          <?php endif; ?>
	        </div> <!-- /name-and-slogan -->

		  	</div> <!-- /logo-title -->
	  	
		  		<?php if ($header): ?>
		  		  <div id="header-region">
		  		    <?php echo $header; ?>
		  		  </div>
		  		<?php endif; ?>
		
	     </div> <!-- /header -->
 			
					<!-- ______________________ MAIN _______________________ -->

		    	<div id="main" class="clearfix">

		  	  		<div id="content">
								<div id="content-inner" class="inner column center">
                  
		  	  		  <?php if ($content_top): ?>
			            <div id="content-top">
			              <?php echo $content_top; ?>
			            </div>
			          <?php endif; ?>

  		        	  <?php if ($breadcrumb || $title || $mission || $messages || $help || $tabs): ?>
				        	  <div id="content-header">
					
				        	    <?php echo $breadcrumb; ?>
				
				        	    <?php if ($title): ?>
				        	      <h1 class="title"><?php echo $title; ?></h1>
				        	    <?php endif; ?>
				
					  	  		  <?php if ($mission): ?>
												<div id="mission"><?php echo $mission; ?></div>
											<?php endif; ?>
											
				        	    <?php echo $messages; ?>
				
				        	    <?php if ($tabs): ?>
				        	      <div class="tabs"><?php echo $tabs; ?></div>
				        	    <?php endif; ?>
				
				        	    <?php echo $help; ?>
				
				        	  </div> <!-- /#content-header -->
				        	<?php endif; ?>

				        	<div id="content-area"> <!-- CONTENT AREA -->
				        	  <?php echo $content; ?>
				        	</div>
				
		  	  		  	<?php echo $feed_icons; ?>
		
		  	  		  	<?php if ($content_bottom): ?>
			              <div id="content-bottom">
			                <?php echo $content_bottom; ?>
			              </div>
			            <?php endif; ?>

		  	  			</div>
							</div> <!-- /content-inner /content -->

				      <div id="navigation" class="menu <?php if (!empty($primary_links)) { echo "withprimary"; } if (!empty($secondary_links)) { echo " withsecondary"; } ?> ">

				        <?php if (!empty($primary_links)): ?>
				          <div id="primary" class="clear-block">
				            <?php echo theme('links', $primary_links, array('class' => 'links primary-links')); ?>
				          </div>
				        <?php endif; ?>

				        <?php if (!empty($secondary_links)): ?>
				          <div id="secondary" class="clear-block">
				            <?php echo theme('links', $secondary_links, array('class' => 'links secondary-links')); ?>
				          </div>
				        <?php endif; ?>

				      </div> <!-- /navigation -->


		  	  		<?php if ($sidebar_left): ?> <!-- SIDEBAR LEFT -->
                <div id="sidebar-first" class="column sidebar first">
                  <div id="sidebar-first-inner" class="inner">
										<?php echo $sidebar_left; ?>
									</div>
		  	  		  </div>
		  	  		<?php endif; ?> <!-- /sidebar-left -->


		  	  		<?php if ($sidebar_right): ?> <!-- SIDEBAR RIGHT -->
                <div id="sidebar-second" class="column sidebar second">
                  <div id="sidebar-second-inner" class="inner">
									  <?php echo $sidebar_right; ?>
									</div>
		  	  		  </div>
		  	  		<?php endif; ?> <!-- /sidebar-right -->

		  	</div> <!-- /main -->
		

				<!-- ______________________ FOOTER _______________________ -->
		
				
    <?php if(!empty($footer_message) || !empty($footer_block)): ?>
  	  <div id="footer">
	      <?php echo $footer_message; ?>
	      <?php echo $footer_block; ?>
  	  </div> <!-- /footer -->
		<?php endif; ?>
		
  	<?php echo $closure; ?>
  </div> <!-- /page -->

</body>

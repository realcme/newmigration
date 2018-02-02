<body class="<?php print $body_classes; ?>">
	<div id="page">

		<div style="margin-bottom:10px;" class="clearfix">&nbsp;</div>
		<div id="page-inner">
		<!-- Our Stuff -->
			<div id="header">
				<div id="header-inner" class="clear-block">
					<?php if ($header): ?>
					<div id="header-blocks">
						<?php print $header; ?>
					</div> <!-- /#header-blocks -->
					<?php endif; ?>
				</div>
			</div> <!-- /#header-inner, /#header -->

			<!-- /Our Stuff -->
			<div id="header" class="clearfix">
				<div class="logo-wrap" style="margin-top:15px; min-width: 89.10891089%;">
					<a href="http://www.aace.com/"><img src="<?php print $img_path ?>/img/AACE-banner.jpg" alt="American Association of Clinical Endocrinologists" style="width:69%;"></a>
					<a href="http://www.medtelligence.net/"><img src="<?php print $img_path ?>/img/medtelligence-banner.png" alt="Medtelligence LLC" style="width:30%;"></a>
				</div>
      		</div> <!-- /#header -->
			<div id="page-main" class="clearfix">
				<div id="main-inner" >
					<div id="content">
						<div id="content-inner">
							<?php if ($mission): ?>
							  <div id="mission"><?php print $mission; ?></div>
							<?php endif; ?>

							<?php if ($content_top): ?>
							  <div id="content-top">
								<?php print $content_top; ?>
							  </div> <!-- /#content-top -->
							<?php endif; ?>

							<?php if ($breadcrumb or $title or $tabs or $help or $messages): ?>
							  <div id="content-header">
								<?php // print $breadcrumb; ?>
								<?php if ($title): ?>
								  <h1 class="title"><?php print $title; ?></h1>
								<?php endif; ?>
								<?php if ($user->uid == 1) { print $messages;} ?>
								<?php if ($tabs): ?>
								  <div class="tabs"><?php print $tabs; ?></div>
								<?php endif; ?>
								<?php print $help; ?>
							  </div> <!-- /#content-header -->
							<?php endif; ?>

							<div id="content-area">
							  <?php print $content; ?>
							</div>

							<?php if ($content_bottom): ?>
							  <div id="content-bottom">
								<?php print $content_bottom; ?>
							  </div> <!-- /#content-bottom -->
							<?php endif; ?>
						</div>
					</div> <!-- /#content-inner, /#content -->
					<div id="sidebar-right">
						<div id="sidebar-right-inner">
							<div id="altcontainer2">
								<?php if ($sidebar_right) {?>
								<div id="companionlogo">
									<img src="<?php print $img_path ?>/img/logo-companion.gif" id="logo-companion" alt="CMECompanion" class="" />
								</div>
								<?php }?>
			  <!-- Accordion Menu Start -->
								<div id="list1">
									<?php print $sidebar_right; ?>
								</div>
							</div><!--  /altcontainer2 -->
						</div>
					</div> <!-- /#sidebar-right-inner, /#sidebar-right -->
					</div>
				</div> <!-- /#main-inner, /#main -->
			<div id="footer-inner">
				<div id="footer-message">
				   <center>
				   <?php print $footer_message; ?><img src="<?php print $img_path ?>/img/footerlogo.png" alt="" class="center" />
				   </center>
				</div>
			</div> <!-- /#footer-inner, /#footer -->
	</div>

  </div> <!-- /#page, /#page-wrapper -->
    <div id="footer"><div class="section">
        <div class="region region-footer">
			<div id="block-block-1" class="block block-block">
				<div class="content">
					<div class="footer-nav">
						<ul>
							<li><a href="https://www.aace.com/">Home</a></li>
							<li><a href="https://www.aace.com/about">About AACE</a></li>
							<li><a href="https://www.aace.com/membership">Membership</a></li>
							<li><a href="http://media.aace.com/">Media</a></li>
							<li><a href="https://www.aace.com/corporate-partners">Corporate AACE Partners (CAP)</a></li>
							<li><a href="https://www.aace.com/copyright-and-privacy-policy">Privacy Policy</a></li>
							<li><a href="https://www.aace.com/contacts">Contacts</a></li>
						</ul>
					</div>
				</div>
			</div>
		  </div>
    	</div>
    </div> <!-- /.section, /#footer -->
</body>

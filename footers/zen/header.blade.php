<div id="header"><div id="header-inner" class="clear-block"> <?php if ($logo || $site_name || $site_slogan): ?> <div id="logo-title"> <?php if ($logo): ?> <div id="logo"><a href="<?php print $base_path; ?>" title="<?php print ('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print ('Home'); ?>" id="logo-image" /></a></div> <?php endif; ?> <?php if ($site_name): ?> <?php // Use an H1 only on the homepage $tag = $is_front ? 'h1' : 'div'; ?> <<?php print $tag; ?> id='site-name'><strong> <a href="<?php print $base_path; ?>" title="<?php print ('Home'); ?>" rel="home"> <?php print $site_name; ?> </a> </strong></<?php print $tag; ?>> <?php endif; ?> <?php if ($site_slogan): ?> <div id='site-slogan'><?php print $site_slogan; ?></div> <?php endif; ?> </div> <!-- /#logo-title --> <?php endif; ?> <?php if ($header): ?> <div id="header-blocks"> <?php print $header; ?> </div> <!-- /#header-blocks --> <?php endif; ?> </div></div> <!-- /#header-inner, /#header -->

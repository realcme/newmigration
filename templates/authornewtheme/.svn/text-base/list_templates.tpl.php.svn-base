<?php
$klas  = 'templates';
$can_create_course = cmeauthoradmin_can_create_course();
$can_create_template = cmeauthoradmin_can_create_template();
if ($can_create_course == FALSE) $klas .= ' nocreate';
?>
<div id='listing' class='<?php print $klas; ?>'>
	<div class='topper'>
		<span class="title"></span>
		<?php if ($can_create_template): ?>
			<span class="plus" title="Create a Template"></span>
		<?php endif; ?>
		<div class="wrapper">
			<span class="lib">
				<label title="List Library Templates"><input value="1" name="library" type="radio" checked="checked" /> Library </label>
				<label title="List User-defined Templates"><input value="0" name="library" type="radio" /> User-defined </label>
			</span>
			<span class="ord">
				<select title="Select template ordering" class="order">
					<option value='order_by_title'>Order by title</option>
					<option value='order_by_date'>Order by date</option>
					<option value='order_by_published'>Order by published date</option>
					<option value='order_by_last_edited'>Order by last edited date</option>
					<option value='order_by_most_popular'>Order by popularity</option>
				</select>
				<span title="Ascending" class="dir"></span>
			</span>
			<span class="sch">
				<input title="Search"  type="text" placeholder="Search" />
				<span title="Clear Search" class="clear"></span>
				<span title="Perform Search" class="search"></span>
			</span>
			<span class="pag">
				<select title="Select range of templates"class="pages">
				</select>
				<span title="Previous" class="prev"></span>
				<span title="Next" class="next"></span>
			</span>
		</div>
	</div>
	<ul></ul>
</div>
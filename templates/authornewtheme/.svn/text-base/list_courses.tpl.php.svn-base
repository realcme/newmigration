<?php
$klas = 'courses';
$can_create_course = cmeauthoradmin_can_create_course();
$can_create_template = cmeauthoradmin_can_create_template();
?>
<div id='listing' class='<?php print $klas; ?>'>
	<div class='topper'>
		<span class="title">All Courses</span>
		<?php if ($can_create_course): ?>
			<span class="plus" title="Create a Course"></span>
		<?php endif; ?>
		<div class="wrapper">
			<select title="Select course ordering" class="order">
				<option value='order_by_title'>Order by title</option>
				<option value='order_by_date'>Order by date</option>
				<option value='order_by_published'>Order by published date</option>
				<option value='order_by_last_edited'>Order by last edited date</option>
				<option value='order_by_template'>Order by template</option>\
			</select>
			<span title="Ascending" class="dir"></span>
			<input title="Search"  type="text" placeholder="Search" />
			<span title="Clear Search" class="clear"></span>
			<span title="Perform Search" class="search"></span>

			<!-- span class="pages"></span -->
			<select title="Select range of courses" class="pages"></select>
			<span title="Previous" class="prev"></span>
			<span title="Next" class="next"></span>
		</div>
	</div>
	<ul></ul>
</div>
<!-- <h2>หมวดหมู่</h2>

<div class="well">
	<ul class="list-unstyled">
<?php
		$args = array(
			'orderby' => 'name',
			'order' => 'ASC'
		);

		$categories = get_categories($args);
		foreach ($categories as $key => $category) {
			echo '<li><span class="glyphicon glyphicon-chevron-right"></span> <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> </li>';
		}
		?>
	</ul>
</div>
<h2>หนังสือ</h2>
<div class="well">
	<ul class="list-unstyled">
		<?php
		$taxonomies = get_terms('Categories');
		foreach ($taxonomies as $taxonomy) {
			echo '<li><span class="glyphicon glyphicon-chevron-right"></span> <a href="' . get_term_link($taxonomy) . '">' . $taxonomy->name . '</a> </li>';
		}
		?>
	</ul>
</div>
<h2>คลังเก็บ</h2>
<div class="well">
	<ul class="list-unstyled">
		<?php
		$args = array(
			'type'            => 'monthly',
			'limit'           => '',
			'format'          => 'html',
			'before'          => '<li><span class="glyphicon glyphicon-chevron-right"></span> ',
			'after'           => '</li>',
			'show_post_count' => true,
			'echo'            => 1,
			'order'           => 'DESC',
	        'post_type'     => 'post'
		);
		wp_get_archives( $args );
		?>
	</ul>
</div> -->
<div class="blog-sidebar">
<ul class="list-unstyled">
<?php dynamic_sidebar('sidebar-1'); ?>
</ul>
</div>

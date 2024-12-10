<?php

require_once "../Links/gen-links.php";

/**
 * This function will generate a post in the Homepage
 *
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version	2.0.0				Will generate a post in the homepage
 * @since	1.8.0
 *
 * @param string $title The post title, it is the problem but more resumed
 * @param string $desc The problem in a more detailed version
 * @param string $block The block where the problem occured
 * @param string $author The student who warned about the problem
 * */
function generate_post_home(string $title, string $desc, string $block, string $author): void {
echo '
<div class="post">
	<div class="post-header">
		<h2 class="post-title" >
			<a href="'.gen_post_link($title, $block, $desc).'" class="no-link">
				<span class="title">'
					.$title.'
				</span>
				<span class="author">
					('.$author.')
				<span>
			</a>
		</h2>
	</div>
	<div class="post-desc">
		<p class="post-text">'.$desc.'</p>
	</div>
</div>';
}


/**
 * This function will generate a post in the profile page
 *
 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
 * @version	2.0.0				Will generate a post in the profile page
 * @since	1.6.0
 *
 * @param string $title The post title, it is the problem but more resumed
 * @param string $desc The problem in a more detailed version
 * @param string $block The block where the problem occured
 * */
function generate_post_profile(string $title, string $desc, string $block): void {
echo '
<div class="post">
	<div class="post-header-container">
		<div class="post-header">
			<h2 class="post-title">
				<a class="no-link" href="'.gen_post_link($title, $block, $desc).'">'
					.$title.
				'</a>
			</h2>
		</div>
	</div>
	<div class="post-desc">
		<p class="post-text">'.$desc.'</p>
	</div>

</div>';
}

?>

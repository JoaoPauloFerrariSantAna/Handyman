<?php

function gen_post_link(string $title, string $block, string $desc): string {
	/**
	 * This function will help to generate the post in all functions
	 *
	 * @author	João Paulo Ferrari Sant'Ana	joaopauloferrarisantana@gmail.com
	 * @version	1.1.0
	 * @since	2.0.0
	 *
	 * @param string $title The post title, it is the problem but more resumed
	 * @param string $desc The problem in a more detailed version
	 * @param string $block The block where the problem occured
	 * @param string $author The student who warned about the problem
	 *
	 * @returns string
	 * */
	$post_dir	= "../Post/";
	$student_post	= "student-post.php?";
	$url_parameters = "ptitle=".$title."&pblock=".$block."&pdesc=".$desc;
	return $post_dir.$student_post.$url_parameters;
}

?>

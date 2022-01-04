<?php
session_start();
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bapnewheroes
 */
get_header();
get_template_part( 'template-parts/content', 'register' );
echo do_shortcode("[ultimatemember form_id='5']");
echo do_shortcode("[ultimatemember form_id='6']");
?>

<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Papyrus2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="<?php echo get_template_directory_uri() . "/favicon.gif"; ?>">

<link href='http://fonts.googleapis.com/css?family=Lato:300,300italic' rel='stylesheet' type='text/css'>

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

<?php wp_head(); ?>
</head>


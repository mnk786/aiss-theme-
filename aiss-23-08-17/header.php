<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?></title>

    <?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>
<body class="<?php if( !is_home()) echo 'inner-body'; ?>" >
<?php get_template_part('template-parts/header/menu', 'menu'); ?>
<div class="clearfix"></div>

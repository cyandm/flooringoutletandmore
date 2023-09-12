<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>

    <?php
    if (function_exists('get_field')) {
        $headField = get_field('head_tags', get_option('page_on_front'));
        if (isset($headField)) {
            echo $headField;
        }
    }
    ?>
</head>

<body>
    <?php
    if (function_exists('get_field')) {
        $headField = get_field('top_body', get_option('page_on_front'));
        if (isset($headField)) {
            echo $headField;
        }
    }
    ?>
    <div class="cursor" data-mouse="scroll"></div>

    <header class="home-header">
        <div class="flex-col">
            <div data-mouse="explore">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>

            <div class="flex-col">
                <div class="search">
                    <form id="homeContactForm" action="/" method="get">
                        <div class="form_control">
                            <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search By Title" />
                            <i class="icon-search"></i>
                        </div>
                    </form>
                </div>
                <div>
                    <?php wp_nav_menu(array(
                        'menu' => 'header-menu'
                    )) ?>
                    <i class="icon-menu mobile-menu" id="mobile-menu-opener"></i>
                </div>
            </div>
        </div>

        <?php $front_page_id = get_option('page_on_front'); ?>
        <a href="tel:<?= get_field('phone_number_1', $front_page_id) ?>" class="btn bg_secondary1 header-home-call">
            <i class="icon-phone"></i>
            call us now
        </a>
    </header>

    <div class="only_mobile" id="monile-menu-container">
        <div class="head">
            <?php
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
            ?>

            <i class="icon-close" id="mobile-menu-closer"></i>
        </div>
        <div class="menu">
            <?php wp_nav_menu(array(
                'menu' => 'header-menu',
                'container_id' => 'monile-menu-container-content'
            )) ?>
        </div>

        <div class="social">
            <?php get_template_part('templates/footer', 'social'); ?>
        </div>
    </div>
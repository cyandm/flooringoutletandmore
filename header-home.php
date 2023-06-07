<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>
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
                            <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search" />
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
        <!--
        <a href="#" class="btn_icon_between bg_secondary1">
            login
            <i class="icon-Component-2-1"></i>
        </a>
        -->
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
    </div>
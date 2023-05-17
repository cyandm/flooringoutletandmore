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
                            <input type="text" name="s" id="search" value="<?php the_search_query(); ?>"
                                placeholder="Search" />

                            <i class="icon-Component-2-1"></i>
                        </div>
                    </form>
                </div>
                <div>
                    <?php wp_nav_menu([
                        'menu' => 'header',
                    ]) ?>
                    <i class="icon-Component-2-1 mobile-menu"></i>
                </div>
            </div>
        </div>
        <a href="#" class="btn_icon_between bg_secondary1">
            login

            <i class="icon-Component-2-1"></i>
        </a>

    </header>

    <div class="home-footer only-desktop">
        <a href="#" data-mouse="instagram"><i class="icon-Component-2-1 mobile-menu"></i></a>
        <a href="#" data-mouse="telegram"><i class="icon-Component-2-1 mobile-menu"></i></a>
        <a href="#" data-mouse="whats app"><i class="icon-Component-2-1 mobile-menu"></i></a>
    </div>
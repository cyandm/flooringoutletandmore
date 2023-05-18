<?php get_header() ?>
<main class="single-product">
    <h1>
        <?php echo get_the_title() ?>
    </h1>
    <hr>
    <div class="top">
        <div class="tabs">
            <div class="headings">
                <span data-tab="description" class="show">description</span>
                <span data-tab="specification">specification</span>
                <span data-tab="technical">technical</span>
            </div>
            <div class="content">
                <div data-tab="description" class="show">
                    <h2>item description</h2>
                    <?php echo _(get_field('product_desc')) ?>
                </div>
                <div data-tab="specification">
                    <h2>item specification</h2>

                </div>
                <div data-tab="technical">
                    <h2>item technical</h2>
                    <?php echo _(get_field('product_tech')) ?>
                </div>
            </div>
        </div>
        <div class="product-images">

        </div>
    </div>
</main>
<?php get_footer() ?>
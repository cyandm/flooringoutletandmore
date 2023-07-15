<?php
$formUrl = isset($args["formUrl"]) ? $args["formUrl"] : "";
$getCats = isset($args["getCats"]) ? $args["getCats"] : [];
$getBrands = isset($args["getBrands"]) ? $args["getBrands"] : [];
$getFilters = isset($args["getFilters"]) ? $args["getFilters"] : [];
?>

<form id="archiveSideBar" class="side-bar" action="<?php echo $formUrl; ?>" method="GET">
  <div class="applay-filter only-desktop">
    <button class="btn_no_icon bg_secondary2" id="archiveSideBarApply">
      <i class="icon-filter"></i>
      Apply
    </button>
    <button class="btn_no_icon bg_white filter-clear" id="archiveSideBarClear">
      <i class="icon-clear-filter"></i>
      Clear
    </button>
  </div>

  <div class="only-mobile heading">
    <i class="icon-close" id="archiveSideBarCloser"></i>
    <span class="h2">
      Filters
    </span>
  </div>

  <?php if (count($getCats) > 0) : ?>
    <div class="box">
      <div class="title">
        <span>Category</span>
        <i class="icon-arrow-down-2"></i>
      </div>
      <div class="box-container">
        <div class="checkbox-container">

          <?php foreach ($getCats as $cat) : ?>
            <?php if ($cat["count"] > 0) : ?>
              <div class="checkbox-wrapper">
                <label for="<?php echo 'cat-' . $cat['id'] ?>"><?php echo $cat['name']; ?></label>
                <div class="inner-checkbox">
                  <input type="checkbox" name="<?php echo 'cat-' . $cat['id']; ?>" id="<?php echo 'cat-' . $cat['id']; ?>" value="on" <?php echo isset($_GET['cat-' . $cat['id']]) ? "checked" : ""; ?> />
                  <span class="checkmark"></span>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (count($getBrands) > 0) : ?>
    <div class="box">
      <div class="title">
        <span>Brands</span>
        <i class="icon-arrow-down-2"></i>
      </div>
      <div class="box-container">
        <div class="checkbox-container">

          <?php foreach ($getBrands as $cat) : ?>
            <div class="checkbox-wrapper">
              <label for="<?php echo 'cat-' . $cat['id'] ?>"><?php echo $cat['name']; ?></label>
              <div class="inner-checkbox">
                <input type="checkbox" name="<?php echo 'cat-' . $cat['id']; ?>" id="<?php echo 'cat-' . $cat['id']; ?>" value="on" <?php echo isset($_GET['cat-' . $cat['id']]) ? "checked" : ""; ?> />
                <span class="checkmark"></span>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php foreach ($getFilters as $filterId => $filterCat) : ?>
    <?php if ($filterCat["parent"] == 0 && $filterCat['slug'] != 'species') : ?>
      <div class="box <?= $filterCat["name"] . '-filter' ?>">
        <div class="title">
          <span><?php echo $filterCat["name"] ?></span>
          <i class="icon-arrow-down-2"></i>
        </div>
        <div class="box-container">
          <div class="checkbox-container">
            <?php foreach ($getFilters as $fId => $fCat) : ?>
              <?php if ($fCat["parent"] == $filterCat["id"]) : ?>
                <div class="checkbox-wrapper">
                  <label for="<?php echo 'cat-' . $fCat["id"] ?>"><?php echo $fCat["name"] ?></label>
                  <div class="inner-checkbox">
                    <input type="checkbox" name="<?php echo 'cat-' . $fCat["id"] ?>" id="<?php echo 'cat-' . $fCat["id"] ?>" value="on" <?php echo isset($_GET['cat-' . $fCat['id']]) ? "checked" : ""; ?>>
                    <span class="checkmark"></span>
                  </div>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>

  <div class="applay-filter only-mobile">
    <button class="btn_no_icon bg_secondary2" type="submit">
      <i class="icon-filter"></i>
      Apply
    </button>
    <button class="btn_no_icon bg_white filter-clear" id="archiveSideBarClearMobile">
      <i class="icon-clear-filter"></i>
      Clear
    </button>
  </div>

  <?php if (is_search()) : ?>
    <input type="hidden" name="s" value="<?php the_search_query(); ?>">
  <?php endif; ?>
  <input type="hidden" name="filter" value="on">
</form>

<div class="only-mobile">
  <button id="archiveSideBarOpener" class="btn_icon_between bg_secondary2 sidebar-opener">
    <i class="icon-filter"></i>
    <span>Filters</span>
    <i class="icon-arrow-right-2"></i>
  </button>
</div>
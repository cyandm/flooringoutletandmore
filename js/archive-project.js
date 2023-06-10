jQuery(document).ready(function ($) {
  const projectArchiveArticle = $('.archive-project-article .article-content');
  const projectArchiveGalleryCloser = $('.archive-project-article .image-sliders .icon-close');

  if (projectArchiveArticle) {
    $(projectArchiveArticle).on("click", function (e) {
      e.preventDefault();
      const parent = $(e.target).next(".image-sliders");
      $(parent).addClass("show");
    });

    $(projectArchiveGalleryCloser).on("click", function (e) {
      e.preventDefault();
      const parent = $(e.target).parents(".image-sliders");
      $(parent).removeClass("show");
    });

  }
})
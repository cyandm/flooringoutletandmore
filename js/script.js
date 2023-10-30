jQuery(document).ready(function ($) {
  const archiveSideBar = document.querySelector("#archiveSideBar");
  const archiveSideBarHandlers = document.querySelectorAll("#archiveSideBar .title");
  const archiveSideBarChecks = document.querySelectorAll(".inner-checkbox input[type='checkbox']");
  const archiveSideBarClear = document.querySelectorAll("#archiveSideBarClear, #archiveSideBarClearMobile");
  const archiveSideBarApply = document.querySelector("#archiveSideBarApply");
  const archiveFilterChips = document.querySelectorAll("#archive-filter-chips .icon-close");
  const archiveSideBarOpener = document.querySelectorAll("#archiveSideBarOpener, #archiveSideBarCloser, #archiveSideBarCloserMobile");
  const archiveSideBarHidden = document.querySelector("input[name='filter']");

  if (archiveSideBar) {
    const checkIsFiltered = () => {
      let isFilter = "off";

      archiveSideBarChecks.forEach((checkbox) => {
        if (checkbox.checked == true) {
          isFilter = "on";
          return;
        }
      });

      archiveSideBarHidden.value = isFilter;
    }

    const checkOpen = () => {
      archiveSideBarChecks.forEach((checkbox) => {
        if (checkbox.checked == true) {
          $(checkbox).parents(".box-container").addClass("open");
        }
      });
    }
    checkOpen();

    archiveSideBarApply.addEventListener("click", (e) => {
      e.preventDefault();
      checkIsFiltered();
      $(archiveSideBar).submit();
    });

    archiveSideBarHandlers.forEach((handler) => {
      handler.addEventListener("click", (e) => {
        e.preventDefault();
        handler.nextElementSibling.classList.toggle("open");
      });
    });

    archiveSideBarClear.forEach((clearEl) => {
      clearEl.addEventListener("click", (e) => {
        e.preventDefault();

        archiveSideBarChecks.forEach((checkbox) => {
          checkbox.checked = false;
        });

        archiveSideBarHidden.value = "off";
        $(archiveSideBar).submit();
      });
    });

    archiveSideBarOpener.forEach((btns) => {
      btns.addEventListener("click", (e) => {
        e.preventDefault();
        archiveSideBar.classList.toggle("open");
      });
    });

    archiveFilterChips.forEach((closer) => {
      closer.addEventListener("click", (e) => {
        e.preventDefault();
        const target = e.target;
        const targetCheck = document.getElementById(target.getAttribute("data-filter"));
        if (targetCheck)
          targetCheck.checked = false;

        checkIsFiltered();
        $(archiveSideBar).submit();
      });
    });
  }
});

jQuery(document).ready(function ($) {
  const monileMenuContainer = document.getElementById("monile-menu-container");
  const mobileMenuOpener = document.getElementById("mobile-menu-opener");
  const mobileMenuCloser = document.getElementById("mobile-menu-closer");

  if (monileMenuContainer) {
    $(mobileMenuOpener).on("click", function (e) {
      e.preventDefault();
      document.body.style.overflow = "hidden";
      monileMenuContainer.classList.toggle("open");
    });

    $(mobileMenuCloser).on("click", function (e) {
      e.preventDefault();
      document.body.style.overflow = "";
      monileMenuContainer.classList.remove("open");
    });

    const subMenus = $("#monile-menu-container ul .menu-item-has-children > a");
    $(subMenus).append("<i class='icon-arrow-down-2'></i>");

    const subMenusOpener = $("#monile-menu-container ul .menu-item-has-children > a > i");
    $(subMenusOpener).on('click', function (e) {
      const target = e.target;
      const targetSub = $(target).parents('a').next('.sub-menu');

      $(targetSub).slideToggle(300, function () {
        $(targetSub).toggleClass('open');
      });
    });
  }
});

jQuery(document).ready(function ($) {
  const dropDownOpener = document.getElementById("dropDownOpener");

  if (dropDownOpener) {
    dropDownOpener.addEventListener("click", function (e) {

      $(dropDownOpener).find(".virtual-options").toggleClass("open");
    });
  }
});

jQuery(document).ready(function ($) {
  const inputSearch = document.querySelector("input#search");

  if (inputSearch) {
    const placeholdersTxt = [
      "Brand",
      "Type",
      "Collection",
      "Color",
      "Thickness",
      "Product",
      "Name",
      "Category",
    ];
    const txtMaxCount = placeholdersTxt.length;

    let txtCounter = 0;
    const placeholderInterval = setInterval(function () {
      if (txtCounter >= txtMaxCount)
        txtCounter = txtCounter - txtMaxCount;

      let newTxt = "Search By ";
      const newPlc = placeholdersTxt[txtCounter].split("");

      let plcCounter = 0;
      function setChar() {
        if (plcCounter < newPlc.length) {
          newTxt = newTxt + newPlc[plcCounter];
          $(inputSearch).attr('placeholder', newTxt);
          setTimeout(setChar, 120);
        }
        plcCounter++;
      }
      setChar();

      txtCounter++;
    }, 2000);

  }
});

jQuery(document).ready(function ($) {
  const faqItems = $("main.special-offer-page > .content section .faq-content .context .faq-item");

  $(faqItems).on("click", function (e) {
    const current = $(this);
    const slideItem = $(this).find(".item-content p");
    const btnItem = $(this).find(".btn");
    const allSlides = $(faqItems).find(".item-content p");
    const allBtns = $(faqItems).find(".btn");
    const duration = 300;

    if ($(current).hasClass("close")) {
      $(faqItems).removeClass("open");
      $(faqItems).addClass("close");
      $(allBtns).text("+");
      $(allSlides).slideUp(duration, function () { });

      $(current).removeClass("close");
      $(current).addClass("open");
      $(btnItem).text("-")
      $(slideItem).slideDown(duration, function () { });
    } else {
      $(current).removeClass("open");
      $(current).addClass("close");
      $(btnItem).text("+")
      $(slideItem).slideUp(duration, function () { });
    }
  });
});

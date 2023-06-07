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
    mobileMenuOpener.addEventListener("click", function (e) {
      e.preventDefault();
      document.body.style.overflow = "hidden";
      monileMenuContainer.classList.toggle("open");
    });

    mobileMenuCloser.addEventListener("click", function (e) {
      e.preventDefault();
      document.body.style.overflow = "";
      monileMenuContainer.classList.remove("open");
    });

    const subMenus = $("#monile-menu-container ul.sub-menu");
    $(subMenus).prev("a").append("<i class='icon-arrow-down-2'></i>");
  }
});
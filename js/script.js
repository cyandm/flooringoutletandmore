const archiveSideBar = document.querySelector("#archiveSideBar");
const archiveSideBarHandlers = archiveSideBar.querySelectorAll("#archiveSideBar .title");
const archiveSideBarChecks = archiveSideBar.querySelectorAll(".inner-checkbox input[type='checkbox']");
const archiveSideBarClear = document.querySelectorAll("#archiveSideBarClear, #archiveSideBarClearMobile");
const archiveFilterChips = document.querySelectorAll("#archive-filter-chips .icon-close");
const archiveSideBarOpener = document.querySelectorAll("#archiveSideBarOpener, #archiveSideBarCloser, #archiveSideBarCloserMobile");

if (archiveSideBar) {
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
        archiveSideBar.submit();
      });
    });
  });

  archiveSideBarOpener.forEach(btns => {
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
      archiveSideBar.submit();
    });
  });
}

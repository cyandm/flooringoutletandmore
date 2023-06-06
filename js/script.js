const dropDownOpener = document.querySelector('#dropDownOpener');

if (dropDownOpener) {
  dropDownOpener.addEventListener('click', () => {
    dropDownOpener.querySelector('.virtual-options').classList.toggle('open');
  });
}

/****************************************** Side Bar */
const sideBar = document.querySelector('#sideBar');
const sideBarHandlers = document.querySelectorAll('.title');

const sideBarOpener = document.querySelector('#sideBarOpener');
const sideBarCloser = document.querySelector('#sideBarCloser');

if (sideBarHandlers) {
  sideBarHandlers.forEach((handler) => {
    handler.addEventListener('click', () => {
      handler.nextElementSibling.classList.toggle('open');
    });
  });
}

if (sideBarOpener) {
  sideBarOpener.addEventListener('click', () => {
    sideBar.classList.add('open');
  });

  sideBarCloser.addEventListener('click', () => {
    sideBar.classList.remove('open');
  });
}

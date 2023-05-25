const sideBar = document.querySelector('#sideBar');
const sideBarHandlers = sideBar.querySelectorAll('.title');

const sideBarOpener = document.querySelector('#sideBarOpener');
const sideBarCloser = document.querySelector('#sideBarCloser');

sideBarHandlers.forEach((handler) => {
  handler.addEventListener('click', () => {
    handler.nextElementSibling.classList.toggle('open');
  });
});

sideBarOpener.addEventListener('click', () => {
  sideBar.classList.add('open');
});

sideBarCloser.addEventListener('click', () => {
  sideBar.classList.remove('open');
});

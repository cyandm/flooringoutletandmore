const sideBar = document.querySelector('.side-bar');
const sideBarHandlers = sideBar.querySelectorAll('.title');

sideBarHandlers.forEach((handler) => {
  handler.addEventListener('click', () => {
    handler.nextElementSibling.classList.toggle('open');
  });
});

const sidebar = document.querySelector('.menu-sidebar');
const sideIcon = document.querySelector('.wrap-menu-icon');
const mainContent = document.querySelector('.main-content');

sideIcon.addEventListener('click', function () {
    sidebar.classList.toggle('sidebar-close');
    mainContent.classList.toggle('wide');
});
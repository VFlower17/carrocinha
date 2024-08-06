const menuToggle = document.querySelector('.menu-toggle');
const sidebar = document.querySelector('.sidebar');
const closeMenu = document.querySelector('.triangle');

menuToggle.addEventListener('click', () => {sidebar.classList.toggle('active');});
closeMenu.addEventListener('click', () => {sidebar.classList.remove('active');});
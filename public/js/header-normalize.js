// Смена стилей в Header на всех страницах кроме Home.php 

// Получение элементов
const header = document.querySelector('header');
const logotypeText = document.querySelectorAll('.logo-text');
const headerNavLinks = document.querySelectorAll('.nav_link');
const authBtn = document.querySelector('.auth_btn');
const regBtn = document.querySelector('.reg_btn');
const userStatus = document.querySelector('.status');

// Замена стилей на нужной странице
header.classList.remove('scrolled');
logotypeText.forEach(text => text.classList.remove('scrolled'));
headerNavLinks.forEach(link => link.classList.remove('scrolled'));
regBtn.classList.remove('scrolled');
authBtn.classList.remove('scrolled');
userStatus.classList.remove('scrolled');
actionIcon.style.opacity = '0';


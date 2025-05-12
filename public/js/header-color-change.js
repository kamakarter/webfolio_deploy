// замена стилей header при скролле 
const header = document.querySelector('header');
const logotypeText = document.querySelectorAll('.logo-text');
const headerNavLinks = document.querySelectorAll('.nav_link');
const authBtn = document.querySelector('.auth_btn');
const regBtn = document.querySelector('.reg_btn');
const userStatus = document.querySelector('.status');

let triggerPoint = 500;

window.addEventListener('scroll', () => {
    if (window.scrollY < triggerPoint){
        header.classList.add('scrolled');
        logotypeText.forEach(text => text.classList.add('scrolled'));
        headerNavLinks.forEach(link => link.classList.add('scrolled')); 
        regBtn.classList.add('scrolled');
        authBtn.classList.add('scrolled');
        userStatus.classList.add('scrolled');
        actionIcon.style.opacity = '0';
        
    }

    else {
        header.classList.remove('scrolled');
        logotypeText.forEach(text => text.classList.remove('scrolled'));
        headerNavLinks.forEach(link => link.classList.remove('scrolled')); 
        regBtn.classList.remove('scrolled');
        authBtn.classList.remove('scrolled');
        userStatus.classList.remove('scrolled');
        actionIcon.style.opacity = '0';
    }
});

// const OpenUserActionsModal = document.querySelector('.header-user_action_button_js');
    // const UserActionsModal = document.querySelector('.header-user_actions_modal');
    // const IconArowModal = document.querySelector('.header-action_icon_arrow');
    
    // OpenUserActionsModal.addEventListener('mouseover', () => {
    //     UserActionsModal.classList.add('visible');
    //     IconArowModal.classList.add('rotate');
    // });

    // OpenUserActionsModal.addEventListener('mouseout', () => {
    //     UserActionsModal.classList.remove('visible');
    //     IconArowModal.classList.remove('rotate');
    // });
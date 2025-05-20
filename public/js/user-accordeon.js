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


const OpenUserActionsModal = document.querySelector('.header-user_action_button_js');
const UserActionsModal = document.querySelector('.header-user_actions_modal');
const IconArowModal = document.querySelector('.header-action_icon_arrow');
                    
OpenUserActionsModal.addEventListener('click', () => {
    UserActionsModal.classList.toggle('visible');
    IconArowModal.classList.toggle('rotate');
});

// Дополнительно: закрывать модальное окно при клике вне его
document.addEventListener('click', (e) => {
    if (!OpenUserActionsModal.contains(e.target) && !UserActionsModal.contains(e.target)) {
        UserActionsModal.classList.remove('visible');
        IconArowModal.classList.remove('rotate');
    }
}); 
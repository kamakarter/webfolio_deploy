const OpenUserActionsModal = document.querySelector('.header-user_action_button_js');
const UserActionsModal = document.querySelector('.header-user_actions_modal');
const IconArowModal = document.querySelector('.header-action_icon_arrow');
                    
OpenUserActionsModal.addEventListener('mouseover', () => {
    UserActionsModal.classList.add('visible');
    IconArowModal.classList.add('rotate');
});

OpenUserActionsModal.addEventListener('mouseout', () => {
    UserActionsModal.classList.remove('visible');
    IconArowModal.classList.remove('rotate');
});
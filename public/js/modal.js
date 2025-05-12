
    const modalWindow = document.querySelector('.modal');
    const closeModalBtn = document.querySelector('.modal_close_icon');
    const openModalBtn = document.querySelector('.user-avatar_edit_icon');

    openModalBtn.addEventListener('click', function() {
        modalWindow.classList.add('modal-visible');
    });

    closeModalBtn.addEventListener('click', function() {
        modalWindow.classList.add('modal-reverse-animation');
        modalWindow.classList.remove('modal-visible');
    });

    
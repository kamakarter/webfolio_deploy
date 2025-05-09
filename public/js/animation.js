document.addEventListener('DOMContentLoaded', () => {
    const boxes = document.querySelectorAll('.animate');

    function checkVisibility() {
        const triggerBottom = window.innerHeight / 5 * 10; 

        boxes.forEach(box => {
            const boxTop = box.getBoundingClientRect().bottom;

            if (boxTop < triggerBottom) {
                box.classList.add('visible');
            } else {
                box.classList.remove('visible');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    
    // Проверяем сразу, чтобы активировать анимацию на загруженной странице
    checkVisibility();
});

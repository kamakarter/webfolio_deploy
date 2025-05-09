document.addEventListener('DOMContentLoaded', function() {
    const accordions = document.querySelectorAll('.accordeon');

    accordions.forEach((accordion) => {
        const questionBox = accordion.querySelector('.accodeon-question_box');
        const contentBox = accordion.querySelector('.accordeon-content_box');
        const accordeonIcon = accordion.querySelector('.accordeon-icon');

        questionBox.addEventListener('click', function() {
            const isVisible = contentBox.classList.toggle('visible');

            if (isVisible){
                const scrollHeight = contentBox.scrollHeight;
                contentBox.style.maxHeight = scrollHeight + 'px';
                accordeonIcon.classList.add('rotate');
            }
            else {
                contentBox.style.maxHeight = '0';
                accordeonIcon.classList.remove('rotate');
            }
        });
    });
});
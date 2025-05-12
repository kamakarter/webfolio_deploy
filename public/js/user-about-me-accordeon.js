

    const fullUserDescription = document.querySelector('.placeholder_for_user_data_about');
    const btnOpenFullDescription = document.querySelector('.btn_for_user_data_about');
    console.log('fullUserDescription:', fullUserDescription);
    console.log('btnOpenFullDescription:', btnOpenFullDescription);
    if (fullUserDescription && btnOpenFullDescription) {
        btnOpenFullDescription.addEventListener('click', function() {
            fullUserDescription.classList.toggle('full-size');
            if (fullUserDescription.classList.contains('full-size')) {
                btnOpenFullDescription.innerHTML = 'Закрыть описание';
            } else {
                btnOpenFullDescription.innerHTML = 'Показать полное описание';
            }
        });
    }

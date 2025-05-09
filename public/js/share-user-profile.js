// Функция для копирования значения атрибута href
function copyHref() {
    // Находим элемент с id ShareMyProfile
    var element = document.getElementById("ShareMyProfile");

    // Проверяем, что элемент найден и что у него есть атрибут href
    if (element && element.hasAttribute("href")) {
        // Получаем значение атрибута href
        var hrefValue = element.getAttribute("href");

        // Создаем временный textarea элемент для копирования значения href
        var textarea = document.createElement("textarea");
        textarea.value = hrefValue; // Записываем в textarea значение href
        document.body.appendChild(textarea);

        // Выбираем и копируем текст из textarea
        textarea.select();
        textarea.setSelectionRange(0, 99999); // Для мобильных устройств

        // Копируем в буфер обмена
        try {
        document.execCommand("copy");
        alert("Ссылка скопирована в буфер обмена!");
        } catch (err) {
        alert("Не удалось скопировать ссылку.");
        }

        // Удаляем временный элемент
        document.body.removeChild(textarea);
    } else {
        alert("Элемент с id 'ShareMyProfile' не найден или у него нет атрибута href.");
    }
    }

// Пример вызова функции при нажатии на кнопку (если она есть)
document.getElementById("ShareMyProfile").addEventListener("click", copyHref);
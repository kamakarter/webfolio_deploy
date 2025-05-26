document.getElementById('copyUserLink').addEventListener('click', async function(e) {
    e.preventDefault();
    const userLink = document.getElementById('userValue').textContent.trim();
    
    try {
        // Современный способ
        if (navigator.clipboard) {
            await navigator.clipboard.writeText(userLink);
            alert('Ссылка скопирована в буфер обмена');
            return;
        }
        
        // Fallback для старых браузеров
        const textarea = document.createElement('textarea');
        textarea.value = userLink;
        document.body.appendChild(textarea);
        textarea.select();
        
        if (document.execCommand('copy')) {
            alert('Ссылка скопирована в буфер обмена');
        }
        
        document.body.removeChild(textarea);
        
    } catch (err) {
        alert('Не удалось скопировать ссылку');
        console.error('Ошибка:', err);
    }
});
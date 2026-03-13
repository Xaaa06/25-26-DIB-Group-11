// CURRENTLY NOT IMPORTANT (JUNBIN)
document.addEventListener('DOMContentLoaded', function() {
    const flashContainer = document.querySelector('.flash-container');
    if (flashContainer) {
        setTimeout(() => {
            flashContainer.classList.add('fade-out');
            setTimeout(() => {
                flashContainer.style.display = 'none';
            }, 300);
        }, 5000);

        const closeBtn = flashContainer.querySelector('.flash-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                flashContainer.classList.add('fade-out');
                setTimeout(() => {
                    flashContainer.style.display = 'none';
                }, 300);
            });
        }
    }
});
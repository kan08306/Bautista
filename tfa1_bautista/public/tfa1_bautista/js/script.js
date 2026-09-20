const themeButton = document.querySelector('.theme-toggle');
const themeLabel = document.querySelector('.theme-label');
const menuToggle = document.querySelector('.menu-toggle');

function applyTheme(theme) {
    const darkMode = theme === 'dark';
    document.body.classList.toggle('dark-mode', darkMode);
    document.documentElement.style.colorScheme = darkMode ? 'dark' : 'light';
    themeLabel.textContent = darkMode ? 'Light' : 'Dark';
    themeButton.setAttribute('aria-label', darkMode ? 'Switch to light mode' : 'Switch to dark mode');
}

const savedTheme = localStorage.getItem('ken-pos-theme') || 'light';
applyTheme(savedTheme);

themeButton.addEventListener('click', () => {
    const nextTheme = document.body.classList.contains('dark-mode') ? 'light' : 'dark';
    localStorage.setItem('ken-pos-theme', nextTheme);
    applyTheme(nextTheme);
});

document.addEventListener('click', (event) => {
    if (!event.target.closest('.site-header')) {
        menuToggle.checked = false;
    }
});

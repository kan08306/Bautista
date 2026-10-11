const themeButton = document.querySelector('.theme-toggle');
const themeLabel = document.querySelector('.theme-label');

function applyTheme(theme) {
    const darkMode = theme === 'dark';
    document.body.classList.toggle('dark-mode', darkMode);
    document.documentElement.style.colorScheme = darkMode ? 'dark' : 'light';

    if (themeLabel && themeButton) {
        themeLabel.textContent = darkMode ? 'Light' : 'Dark';
        themeButton.setAttribute('aria-label', darkMode ? 'Switch to light mode' : 'Switch to dark mode');
    }
}

const savedTheme = localStorage.getItem('ken-pos-theme') || 'light';
applyTheme(savedTheme);

if (themeButton) {
    themeButton.addEventListener('click', () => {
        const nextTheme = document.body.classList.contains('dark-mode') ? 'light' : 'dark';
        localStorage.setItem('ken-pos-theme', nextTheme);
        applyTheme(nextTheme);
    });
}

const menuToggle = document.querySelector('.menu-toggle');

if (menuToggle) {
    document.addEventListener('click', (event) => {
        if (!event.target.closest('.site-header')) {
            menuToggle.checked = false;
        }
    });
}

const avatarInput = document.querySelector('input[name="avatar"]');
const avatarPreview = document.querySelector('[data-avatar-preview]');
const fileNameOutput = document.querySelector('[data-file-name]');
let previewUrl = null;

if (avatarInput && avatarPreview && fileNameOutput) {
    avatarInput.addEventListener('change', () => {
        const file = avatarInput.files[0];

        if (previewUrl) {
            URL.revokeObjectURL(previewUrl);
            previewUrl = null;
        }

        if (!file) {
            fileNameOutput.textContent = 'No new file selected';
            return;
        }

        fileNameOutput.textContent = file.name;

        if (file.type === 'image/jpeg' || file.type === 'image/png') {
            previewUrl = URL.createObjectURL(file);
            avatarPreview.src = previewUrl;
            avatarPreview.alt = 'Preview of the selected avatar';
        }
    });
}

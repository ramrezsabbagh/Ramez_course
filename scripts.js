function toggleNav() {
    const links = document.getElementById('nav-links');
    links.classList.toggle('show');
}

if (typeof document !== 'undefined') {
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('nav-toggle');
    if (toggle) {
        toggle.addEventListener('click', toggleNav);
    }

    const form = document.getElementById('contact-form');
    if (form) {
        form.addEventListener('submit', event => {
            if (!validateForm(form)) {
                event.preventDefault();
            } else {
                document.getElementById('form-status').textContent = 'Form submitted!';
                event.preventDefault();
            }
        });
    }
});
}

function validateForm(form) {
    const email = form.email.value;
    const name = form.name.value;
    const message = form.message.value;
    const emailRegex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    if (!name.trim() || !emailRegex.test(email) || !message.trim()) {
        return false;
    }
    return true;
}

if (typeof module !== 'undefined') {
    module.exports = { validateForm };
}

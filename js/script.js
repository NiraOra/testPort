$(document).ready(function() {
    $('#main-container').addClass('show');
});

$(document).addEventListener('scroll', () => {
    document.querySelectorAll('.fade-in').forEach(element => {
        if (element.getBoundingClientRect().top < window.innerHeight) {
        element.classList.add('visible');
        }
    });
});
const header = document.getElementById('siteHeader');
const mobileToggle = document.getElementById('mobileToggle');
const navMenu = document.getElementById('navMenu');
const topBtn = document.getElementById('topBtn');
let lastScrollY = window.scrollY;

window.addEventListener('scroll', function () {
    const currentScrollY = window.scrollY;

    if (currentScrollY > 80) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }

    if (currentScrollY > lastScrollY && currentScrollY > 120) {
        header.classList.add('hide');
    } else {
        header.classList.remove('hide');
    }

    lastScrollY = currentScrollY;
    setActiveNav();
});

mobileToggle.addEventListener('click', function () {
    navMenu.classList.toggle('open');
});

document.querySelectorAll('.nav-menu a').forEach(function (link) {
    link.addEventListener('click', function () {
        navMenu.classList.remove('open');
    });
});

topBtn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

function setActiveNav() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-menu a');
    let current = 'home';

    sections.forEach(function (section) {
        const sectionTop = section.offsetTop - 160;
        if (window.scrollY >= sectionTop) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(function (link) {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
}

const subProjectModal = document.getElementById('subProjectModal');

if (subProjectModal) {
    subProjectModal.addEventListener('show.bs.modal', function (event) {
        const card = event.relatedTarget;
        const title = card.getAttribute('data-title');
        const desc = card.getAttribute('data-desc');

        document.getElementById('subModalTitle').textContent = title;
        document.getElementById('subModalDesc').textContent = desc;
    });
}

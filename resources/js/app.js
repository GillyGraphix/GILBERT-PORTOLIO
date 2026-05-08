import './bootstrap';
const themeToggle = document.getElementById('theme-toggle');

if (themeToggle) {
    themeToggle.addEventListener('click', () => {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const nextTheme = currentTheme === 'dark' ? 'light' : 'dark';

        document.documentElement.setAttribute('data-theme', nextTheme);
        localStorage.setItem('portfolio-theme', nextTheme);
    });
}

const scenes = document.querySelectorAll('[data-parallax-scene]');

scenes.forEach((scene) => {
    const cards = scene.querySelectorAll('[data-parallax-card]');

    const resetCards = () => {
        cards.forEach((card) => {
            card.style.transform = '';
        });
    };

    scene.addEventListener('mousemove', (event) => {
        const rect = scene.getBoundingClientRect();
        const x = event.clientX - rect.left;
        const y = event.clientY - rect.top;

        const centerX = rect.width / 2;
        const centerY = rect.height / 2;

        const moveX = (x - centerX) / centerX;
        const moveY = (y - centerY) / centerY;

        cards.forEach((card) => {
            const depth = Number(card.dataset.depth || 20);
            const translateX = moveX * depth;
            const translateY = moveY * depth;
            const rotateY = moveX * 10;
            const rotateX = moveY * -10;

            card.style.transform = `translate3d(${translateX}px, ${translateY}px, 0) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });
    });

    scene.addEventListener('mouseleave', resetCards);
});

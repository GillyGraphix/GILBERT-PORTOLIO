<script>
    const root = document.documentElement;
    const nav = document.getElementById('main-nav');
    const revealSections = document.querySelectorAll('.reveal-section');
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileNavPanel = document.getElementById('mobile-nav-panel');
    const menuOpenIcon = document.getElementById('menu-open-icon');
    const menuCloseIcon = document.getElementById('menu-close-icon');

    const toggleMobileMenu = (forceState = null) => {
        if (!mobileNavPanel) return;

        const shouldOpen = forceState !== null
            ? forceState
            : !mobileNavPanel.classList.contains('is-open');

        mobileNavPanel.classList.toggle('is-open', shouldOpen);
        menuOpenIcon?.classList.toggle('hidden', shouldOpen);
        menuCloseIcon?.classList.toggle('hidden', !shouldOpen);
        
        // Ku-update ARIA kwa accessibility
        mobileMenuToggle?.setAttribute('aria-expanded', shouldOpen);
    };

    // MUHIMU SANA: Hii ndio inatoa pazia na kuonyesha content baada ya page kuload
    window.addEventListener('load', () => {
        document.body.classList.add('is-loaded');
    });

    mobileMenuToggle?.addEventListener('click', () => toggleMobileMenu());

    mobileNavPanel?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => toggleMobileMenu(false));
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            toggleMobileMenu(false);
        }
    });

    window.addEventListener('scroll', () => {
        nav?.classList.toggle('scrolled', window.scrollY > 20);
    }, { passive: true });

    // INTERSECTION OBSERVER YETU IPO SAFI!
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { rootMargin: '0px 0px -10% 0px', threshold: 0.1 });

    revealSections.forEach((section) => revealObserver.observe(section));

    // ==============================================================
    // CANVAS SCRIPT (Imewekwa kuwa Dark Mode moja kwa moja)
    // ==============================================================
    const canvas = document.getElementById('gridCanvas');
    
    if (canvas) {
        const ctx = canvas.getContext('2d');
        const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const config = {
            gridSize: window.innerWidth < 640 ? 36 : 45,
            particleCount: reducedMotion ? 0 : (window.innerWidth < 768 ? 26 : 50),
            particleSpeedMin: 0.5,
            particleSpeedMax: 3,
            particleColors: ['#f4c95d', '#ff7a00', '#00d1b2'], // Rangi za Dark Mode pekee
            trailLength: 80,
            rippleDuration: 2000,
            rippleMaxRadius: 200,
            isDark: true // Imelazimishwa kuwa true
        };

        const occupiedLines = {
            horizontal: new Set(),
            vertical: new Set()
        };

        const characters = "0123456789!@#$%^&*()<>?";

        function createGrid() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            const lineColor = 'rgba(255, 255, 255, 0.04)'; // Rangi ya grid kwa dark mode
            ctx.strokeStyle = lineColor;
            ctx.lineWidth = 1;

            for (let y = 0; y < canvas.height; y += config.gridSize) {
                ctx.beginPath();
                ctx.moveTo(0, y);
                ctx.lineTo(canvas.width, y);
                ctx.stroke();
            }

            for (let x = 0; x < canvas.width; x += config.gridSize) {
                ctx.beginPath();
                ctx.moveTo(x, 0);
                ctx.lineTo(x, canvas.height);
                ctx.stroke();
            }
        }

        class Particle {
            constructor() {
                this.color = config.particleColors[Math.floor(Math.random() * config.particleColors.length)];
                this.speed = Math.random() * (config.particleSpeedMax - config.particleSpeedMin) + config.particleSpeedMin;
                this.reset();
            }

            update() {
                this.trail.push({ x: this.x, y: this.y });
                if (this.trail.length > config.trailLength) this.trail.shift();

                if (this.active) {
                    if (this.direction === 'horizontal') {
                        this.x += this.speed;
                        if (this.x > canvas.width) {
                            this.active = false;
                            occupiedLines.horizontal.delete(this.y);
                        }
                    } else {
                        this.y += this.speed;
                        if (this.y > canvas.height) {
                            this.active = false;
                            occupiedLines.vertical.delete(this.x);
                        }
                    }
                } else {
                    const allTrailPointsOffScreen = this.trail.every(point =>
                        (this.direction === 'horizontal' && point.x > canvas.width) ||
                        (this.direction === 'vertical' && point.y > canvas.height)
                    );

                    if (allTrailPointsOffScreen) {
                        this.reset();
                    }
                }
            }

            draw() {
                for (let i = 0; i < this.trail.length; i++) {
                    const point = this.trail[i];
                    const alpha = (i / this.trail.length);
                    ctx.fillStyle = this.color;
                    ctx.globalAlpha = alpha;
                    ctx.beginPath();
                    ctx.arc(point.x, point.y, 0.8, 0, Math.PI * 2);
                    ctx.fill();
                    ctx.globalAlpha = 1;
                }
            }

            findAvailableLine() {
                const maxAttempts = 100;
                let attempts = 0;

                while (attempts < maxAttempts) {
                    if (Math.random() > 0.5) {
                        const y = Math.round(Math.random() * canvas.height / config.gridSize) * config.gridSize;
                        if (!occupiedLines.horizontal.has(y)) {
                            this.direction = 'horizontal';
                            this.x = 0;
                            this.y = y;
                            occupiedLines.horizontal.add(y);
                            return true;
                        }
                    } else {
                        const x = Math.round(Math.random() * canvas.width / config.gridSize) * config.gridSize;
                        if (!occupiedLines.vertical.has(x)) {
                            this.direction = 'vertical';
                            this.x = x;
                            this.y = 0;
                            occupiedLines.vertical.add(x);
                            return true;
                        }
                    }
                    attempts++;
                }

                return false;
            }

            reset() {
                if (this.findAvailableLine()) {
                    this.trail = [];
                    this.active = true;
                    this.speed = Math.random() * (config.particleSpeedMax - config.particleSpeedMin) + config.particleSpeedMin;
                } else {
                    this.active = false;
                    this.trail = [];
                }
            }
        }

        const particles = Array(config.particleCount).fill().map(() => new Particle());

        let ripples = [];

        class Ripple {
            constructor(x, y) {
                this.x = x;
                this.y = y;
                this.radius = 0;
                this.maxRadius = config.rippleMaxRadius;
                this.startTime = Date.now();
            }

            update() {
                const elapsed = Date.now() - this.startTime;
                this.radius = (elapsed / config.rippleDuration) * this.maxRadius;
            }

            draw() {
                const alpha = 1 - (this.radius / this.maxRadius);
                ctx.strokeStyle = `rgba(244, 201, 93, ${alpha})`;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.stroke();

                if (Math.random() < 0.3) {
                    ctx.fillStyle = `rgba(255, 122, 0, ${alpha})`;
                    ctx.font = "14px monospace";
                    const char = characters[Math.floor(Math.random() * characters.length)];
                    ctx.fillText(char, this.x + (Math.random() - 0.5) * this.radius * 2, this.y + (Math.random() - 0.5) * this.radius * 2);
                }
            }

            isComplete() {
                return this.radius >= this.maxRadius;
            }
        }

        function animate() {
            createGrid();

            particles.forEach((particle) => {
                particle.update();
                particle.draw();
            });

            ripples = ripples.filter((ripple) => !ripple.isComplete());
            ripples.forEach((ripple) => {
                ripple.update();
                ripple.draw();
            });

            requestAnimationFrame(animate);
        }

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            config.gridSize = window.innerWidth < 640 ? 36 : 45;

            occupiedLines.horizontal.clear();
            occupiedLines.vertical.clear();

            particles.forEach((particle) => particle.reset());
        });

        window.addEventListener('click', (event) => {
            const x = event.clientX;
            const y = event.clientY;
            ripples.push(new Ripple(x, y));
        });

        animate();
    }
</script>
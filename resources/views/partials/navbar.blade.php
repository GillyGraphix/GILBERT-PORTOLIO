<style>
    /* === 1. MISTARI YA NAVBAR === */
    .nav-btn-line {
        transition: background-color 0.3s ease, opacity 0.3s ease;
    }
    
    #mobile-menu-toggle:hover .nav-btn-line {
        background-color: var(--accent-gold);
    }

    /* === 2. ANIMATIONS (X NA MISTARI 3) === */
    .menu-closing #line-1 { animation: slideInLeft 0.4s cubic-bezier(0.4, 0, 0.2, 1) forwards; }
    .menu-closing #line-2 { animation: slideInLeft 0.4s cubic-bezier(0.4, 0, 0.2, 1) forwards 0.1s; } 
    .menu-closing #line-3 { animation: slideInRight 0.4s cubic-bezier(0.4, 0, 0.2, 1) forwards; }

    @keyframes slideInLeft {
        0% { transform: translateX(-20px); opacity: 0; }
        100% { transform: translateX(0) translateY(0) rotate(0deg); opacity: 1; }
    }
    @keyframes slideInRight {
        0% { transform: translateX(20px); opacity: 0; }
        100% { transform: translateX(0) translateY(0) rotate(0deg); opacity: 1; }
    }

    .menu-open #line-1 { animation: formXTopLeft 0.4s cubic-bezier(0.4, 0, 0.2, 1) forwards; }
    .menu-open #line-3 { animation: formXBottomRight 0.4s cubic-bezier(0.4, 0, 0.2, 1) forwards; }
    .menu-open #line-2 { opacity: 0; transform: scaleX(0); transition: all 0.2s ease; }

    @keyframes formXTopLeft {
        0% { transform: translate(-15px, -15px) rotate(45deg); opacity: 0; }
        100% { transform: translate(0, 5px) rotate(45deg); opacity: 1; }
    }
    @keyframes formXBottomRight {
        0% { transform: translate(15px, 15px) rotate(-45deg); opacity: 0; }
        100% { transform: translate(0, -5px) rotate(-45deg); opacity: 1; }
    }

    /* === 3. ACTIVE LINK INDICATOR & BREATHING UNDERLINE === */
    .nav-link-item.active {
        color: var(--accent-gold) !important;
        font-weight: 700;
    }
    
    .nav-link-item.active::after {
        content: '';
        position: absolute;
        left: 5%;
        bottom: -6px;
        width: 90%;
        height: 2px;
        background-color: var(--accent-gold);
        border-radius: 2px;
        animation: breatheGlow 2s infinite ease-in-out;
    }

    .mobile-nav-panel .nav-link-item.active::after {
        bottom: 6px;
        left: 16px;
        width: calc(100% - 32px);
    }

    @keyframes breatheGlow {
        0%, 100% { opacity: 0.4; box-shadow: 0 0 2px var(--accent-gold); transform: scaleX(0.8); }
        50% { opacity: 1; box-shadow: 0 0 12px var(--accent-gold); transform: scaleX(1); }
    }

    /* === 4. MBWEMBWE ZA BORDER INAYOZUNGUKA (SPINNING BORDER) === */
    .nav-shell {
        position: relative;
        overflow: hidden;
        border-radius: 9999px;
        background: transparent; /* Tunatumia pseudo-element kuweka background */
    }

    /* Huyu ndiye anayetengeneza rangi zinazozunguka */
    .nav-shell::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 200vw; /* Upana mkubwa kufunika pembe zote */
        height: 200vw;
        background: conic-gradient(
            from 0deg,
            transparent 0%,
            var(--accent-gold) 15%,
            transparent 30%,
            transparent 50%,
            var(--accent-teal) 65%,
            transparent 80%
        );
        animation: spinNavBorder 4s linear infinite;
        z-index: -2;
    }

    /* Huyu ndiye anayeficha katikati ili rangi ionekane kama border (mstari) */
    .nav-shell::after {
        content: "";
        position: absolute;
        inset: 1px; /* 1px inawakilisha unene wa border */
        border-radius: 9999px;
        background: rgba(26, 18, 11, 0.95); /* #1a120b */
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        z-index: -1;
    }

    @keyframes spinNavBorder {
        0% { transform: translate(-50%, -50%) rotate(0deg); }
        100% { transform: translate(-50%, -50%) rotate(360deg); }
    }

    /* Hakikisha vitu vya ndani vinakaa juu ya background */
    .nav-shell > * {
        position: relative;
        z-index: 10;
    }
</style>

<header id="main-header" class="pointer-events-none fixed inset-x-0 top-4 z-50 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 transition-all duration-500 ease-in-out transform">
    <!-- Nimeondoa class za border na background hapa kwa sababu CSS inafanya hiyo kazi sasa -->
    <nav id="main-nav" class="nav-shell pointer-events-auto flex items-center justify-between px-4 py-4 transition-all duration-300 sm:px-5 shadow-lg shadow-[rgba(0,0,0,0.5)]">
        
        <!-- SEHEMU YA LOGO NA JINA -->
        <div class="flex items-center gap-2">
            <p class="text-sm font-bold uppercase tracking-widest text-[var(--accent-gold)] drop-shadow-md">MY PORTFOLIO.</p>
        </div>

        <!-- MENU YA PC -->
        <div class="hidden items-center gap-8 text-sm font-medium md:flex">
            <a href="#" class="nav-link-item relative transition text-[var(--text-soft)] hover:text-white">Home</a>
            <a href="#about" class="nav-link-item relative transition text-[var(--text-soft)] hover:text-white">About</a>
            <a href="#skills" class="nav-link-item relative transition text-[var(--text-soft)] hover:text-white">Skills</a>
            <a href="#services" class="nav-link-item relative transition text-[var(--text-soft)] hover:text-white">Services</a>
            <a href="#projects" class="nav-link-item relative transition text-[var(--text-soft)] hover:text-white">Projects</a>
            
            <!-- Let's Talk Button -->
            <a href="#contact" class="ml-4 rounded-full bg-[var(--accent-gold)] px-6 py-2.5 text-sm font-bold text-[#1b1207] transition-all hover:brightness-110 hover:-translate-y-0.5 shadow-[0_0_15px_rgba(244,201,93,0.3)]">
                Let's Talk
            </a>
        </div>

        <!-- MENU YA SIMU -->
        <div class="flex items-center md:hidden">
            <button id="mobile-menu-toggle" type="button" class="relative z-[100] block h-10 w-10 overflow-hidden rounded-full border border-[var(--line)] bg-transparent cursor-pointer touch-manipulation">
                <span id="line-1" class="nav-btn-line pointer-events-none absolute left-[10px] top-[14px] h-[2px] w-5 bg-white"></span>
                <span id="line-2" class="nav-btn-line pointer-events-none absolute left-[10px] top-[19px] h-[2px] w-5 bg-white"></span>
                <span id="line-3" class="nav-btn-line pointer-events-none absolute left-[10px] top-[24px] h-[2px] w-5 bg-white"></span>
            </button>
        </div>
    </nav>

    <!-- DROP-DOWN PANEL YA SIMU -->
    <div id="mobile-nav-panel" class="mobile-nav-panel pointer-events-none absolute left-4 right-4 top-[110%] z-40 mt-2 origin-top scale-95 rounded-[1.75rem] border border-[var(--line)] bg-[#1a120b]/95 p-5 opacity-0 backdrop-blur-xl transition-all duration-300 ease-out md:hidden shadow-2xl">
        <div class="flex flex-col gap-2 text-sm font-semibold text-white">
            <a href="#" class="nav-link-item mobile-menu-link relative rounded-xl px-4 py-3 transition hover:bg-white/10 hover:text-[var(--accent-gold)]">Home</a>
            <a href="#about" class="nav-link-item mobile-menu-link relative rounded-xl px-4 py-3 transition hover:bg-white/10 hover:text-[var(--accent-gold)]">About</a>
            <a href="#skills" class="nav-link-item mobile-menu-link relative rounded-xl px-4 py-3 transition hover:bg-white/10 hover:text-[var(--accent-gold)]">Skills</a>
            <a href="#services" class="nav-link-item mobile-menu-link relative rounded-xl px-4 py-3 transition hover:bg-white/10 hover:text-[var(--accent-gold)]">Services</a>
            <a href="#projects" class="nav-link-item mobile-menu-link relative rounded-xl px-4 py-3 transition hover:bg-white/10 hover:text-[var(--accent-gold)]">Projects</a>
            <a href="#contact" class="nav-link-item mobile-menu-link relative rounded-xl px-4 py-3 transition hover:bg-white/10 hover:text-[var(--accent-gold)]">Contact</a>
            
            <div class="mt-2 pt-4 border-t border-[rgba(255,255,255,0.1)]">
                <a href="#contact" class="mobile-menu-link flex w-full items-center justify-center rounded-xl bg-[var(--accent-gold)] px-4 py-3.5 text-base font-bold text-[#1b1207] transition hover:brightness-110 shadow-lg">
                    Let's Talk
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    if ('scrollRestoration' in history) { history.scrollRestoration = 'manual'; }
    window.scrollTo(0, 0);

    document.addEventListener('DOMContentLoaded', () => {
        const header = document.getElementById('main-header');
        const toggleBtn = document.getElementById('mobile-menu-toggle');
        const mobilePanel = document.getElementById('mobile-nav-panel');
        const mobileLinks = document.querySelectorAll('.mobile-menu-link');
        const navItems = document.querySelectorAll('.nav-link-item');
        let lastScrollTop = 0;

        function toggleMobileMenu() {
            const isClosed = mobilePanel.classList.contains('opacity-0');
            if (isClosed) {
                toggleBtn.classList.add('menu-open');
                toggleBtn.classList.remove('menu-closing');
                mobilePanel.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
                mobilePanel.classList.add('opacity-100', 'scale-100', 'pointer-events-auto');
            } else {
                toggleBtn.classList.remove('menu-open');
                toggleBtn.classList.add('menu-closing');
                mobilePanel.classList.remove('opacity-100', 'scale-100', 'pointer-events-auto');
                mobilePanel.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
            }
        }

        toggleBtn.addEventListener('click', toggleMobileMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMobileMenu));

        function updateActiveLink() {
            const sections = document.querySelectorAll('section[id]');
            let currentSection = "home";

            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 50) {
                currentSection = "contact";
            } 
            else if (window.scrollY < 150) {
                currentSection = "home";
            } 
            else {
                let minVal = 999999;
                sections.forEach(section => {
                    const rect = section.getBoundingClientRect();
                    const dist = Math.abs(rect.top - 150);
                    if (dist < minVal) {
                        minVal = dist;
                        currentSection = section.getAttribute('id');
                    }
                });
            }

            navItems.forEach(link => {
                link.classList.remove("active");
                const href = link.getAttribute("href");
                if (currentSection === "home" && href === "#") link.classList.add("active");
                else if (href === `#${currentSection}`) link.classList.add("active");
            });
        }

        window.addEventListener('scroll', () => {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                header.classList.add('-translate-y-[150%]', 'opacity-0');
            } else {
                header.classList.remove('-translate-y-[150%]', 'opacity-0');
            }
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;

            updateActiveLink();
        });

        updateActiveLink();
    });
</script>
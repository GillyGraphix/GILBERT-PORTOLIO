<!-- resources/views/partials/hero.blade.php -->
<style>
    /* CSS kwa ajili ya kuzungusha (orbit) vibox clockwise */
    
    /* Mzunguko wa Simu (Mobile) - Radius ndogo (10rem) yasitoke nje ya kioo */
    @media (max-width: 767px) {
        @keyframes orbit-backend {
            /* 225deg inaiweka kuanzia Juu Kushoto */
            from { transform: translate(-50%, -50%) rotate(225deg) translateX(10rem) rotate(-225deg); }
            to   { transform: translate(-50%, -50%) rotate(585deg) translateX(10rem) rotate(-585deg); }
        }
        @keyframes orbit-design {
            /* 45deg inaiweka kuanzia Chini Kulia */
            from { transform: translate(-50%, -50%) rotate(45deg) translateX(10rem) rotate(-45deg); }
            to   { transform: translate(-50%, -50%) rotate(405deg) translateX(10rem) rotate(-405deg); }
        }
    }

    /* Mzunguko wa PC (Desktop) - Radius kubwa (15rem) */
    @media (min-width: 768px) {
        @keyframes orbit-backend {
            from { transform: translate(-50%, -50%) rotate(225deg) translateX(15rem) rotate(-225deg); }
            to   { transform: translate(-50%, -50%) rotate(585deg) translateX(15rem) rotate(-585deg); }
        }
        @keyframes orbit-design {
            from { transform: translate(-50%, -50%) rotate(45deg) translateX(15rem) rotate(-45deg); }
            to   { transform: translate(-50%, -50%) rotate(405deg) translateX(15rem) rotate(-405deg); }
        }
    }
    
    .orbit-badge-1 {
        animation: orbit-backend 20s linear infinite;
        top: 50%;
        left: 50%;
    }
    
    .orbit-badge-2 {
        animation: orbit-design 20s linear infinite;
        top: 50%;
        left: 50%;
    }
    
    /* Inasimamisha mzunguko ukiweka mouse juu yake */
    .orbit-badge-1:hover, .orbit-badge-2:hover {
        animation-play-state: paused;
        cursor: pointer;
    }
</style>

<!-- 
    MAREKEBISHO HAPA:
    1. 'pt-4' - Inapunguza nafasi ya juu kwenye SIMU (mzigo unapanda juu).
    2. 'lg:pt-32' - Inaongeza nafasi ya juu kwenye PC (mzigo unashuka chini).
    3. '-mt-2' - Inasaidia kuvuta section juu kidogo kuelekea kwenye Navbar.
-->
<section class="relative mx-auto max-w-7xl px-6 pb-12 pt-4 -mt-0 lg:px-8 lg:pb-16 lg:pt-1 lg:-mt-16">
    <div class="grid items-start lg:items-center gap-16 lg:grid-cols-2">
        
        <div class="relative z-10 pt-0">
            <!-- Badge: Open for freelance -->
            <div class="hero-elem delay-100 inline-flex items-center gap-0 rounded-full border border-[var(--line)] bg-[var(--bg-card)] px-4 py-2 text-xs font-semibold uppercase tracking-widest text-[var(--accent-teal)] backdrop-blur">
                <span class="relative flex h-2 w-2">   
                </span>
                Open for freelance projects
            </div>

            <!-- Heading: Hi, I am Gilbert -->
            <h1 class="mt-4 text-5xl font-black leading-[1.1] sm:text-6xl lg:text-7xl">
                <span class="hero-elem delay-200 block mb-2 text-2xl font-medium tracking-normal text-[var(--text-soft)] sm:text-3xl">
                    Hi, I am <span class="text-[var(--accent-gold)]">Gilbert Gervas</span>
                </span>
                <span class="hero-elem delay-300 block">
                    <span class="bg-gradient-to-r from-[var(--accent-orange)] to-[var(--accent-gold)] bg-clip-text text-transparent">Software</span>
                </span>
                <span class="hero-elem delay-300 block">
                    <span class="bg-gradient-to-r from-[var(--accent-orange)] to-[var(--accent-gold)] bg-clip-text text-transparent">Developer</span> &
                </span>
                <span class="hero-elem delay-400 block text-[var(--accent-teal)]">Graphic Designer.</span>
            </h1>

            <!-- Bio Section -->
            <div class="hero-elem delay-500 mt-10 border-l-4 border-[var(--accent-gold)] pl-6">
                <p class="text-2xl font-bold tracking-tight text-[var(--text-main)] sm:text-3xl">
                    Code with clarity. <br/> Design with impact.
                </p>
                <p class="mt-4 max-w-md text-base text-[var(--text-soft)]">
                    I help brands build clean digital products and strong visual identities that feel modern and memorable.
                </p>
            </div>

            <!-- Badges -->
            <div class="hero-elem delay-500 mt-8 flex flex-wrap gap-3 text-sm">
                <span class="rounded-full border border-[var(--line)] bg-[var(--bg-card)] px-4 py-2 text-[var(--text-soft)]">Based in Tanzania</span>
                <span class="rounded-full border border-[var(--line)] bg-[var(--bg-card)] px-4 py-2 text-[var(--text-soft)]">Available Worldwide</span>
            </div>

            <!-- CTA Buttons -->
            <div class="hero-elem delay-500 mt-10 flex flex-wrap gap-4">
                <a href="#projects" class="rounded-full bg-[var(--text-main)] px-8 py-4 text-sm font-bold text-[var(--bg-main)] transition hover:bg-[var(--accent-gold)] hover:text-[#1b1207]">
                    View My Work
                </a>
                
                <!-- HAPA NDIPO PAMEBADILISHWA: Nimeweka showCVAlert(event) badala ya alert() -->
                <a href="#" onclick="showCVAlert(event)" class="inline-flex items-center gap-2 rounded-full border border-[var(--line)] bg-[var(--bg-card)] px-8 py-4 text-sm font-bold text-[var(--text-main)] transition hover:border-[var(--accent-gold)]/40 hover:text-[var(--accent-gold)]">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Download CV
                </a>
            </div>
        </div>

        <!-- Right Side: Profile Image -->
        <div class="hero-elem delay-400 relative z-10 mx-auto mt-12 w-full max-w-md lg:mt-0 lg:max-w-none lg:ml-auto">
            <div class="relative mx-auto aspect-[4/5] w-full max-w-[460px] float-slow">
                <div class="absolute inset-0 z-10 rounded-[2.5rem] border border-[var(--line)] bg-[var(--bg-card)] p-2 shadow-2xl backdrop-blur-sm overflow-hidden">
                    <!-- Picha yako -->
                    <img 
                        src="{{ asset('images/gilbert-profile.jpg') }}" 
                        alt="Gilbert Profile" 
                        class="h-full w-full rounded-[2.2rem] object-cover"
                    >
                </div>

                <!-- Floating Badges zinazozunguka -->
                
                <!-- 1. Backend Laravel Badge -->
                <div class="orbit-badge-1 glass-badge absolute z-20 flex items-center gap-3 rounded-2xl p-4 shadow-xl">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FF2D20]/20 text-[#FF2D20]">
                        <img src="{{ asset('images/laravel-icon.svg') }}" alt="Backend Icon" class="h-6 w-6 object-contain">
                    </div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-[var(--text-muted)]">Backend</p>
                        <p class="font-bold text-[var(--text-main)]">Laravel</p>
                    </div>
                </div>

                <!-- 2. Design Adobe Badge -->
                <div class="orbit-badge-2 glass-badge absolute z-20 flex items-center gap-3 rounded-2xl p-4 shadow-xl">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FF0000]/10 text-[#FF0000]">
                        <img src="{{ asset('images/adobe-icon.svg') }}" alt="Adobe Icon" class="h-6 w-6 object-contain">
                    </div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-[var(--text-muted)]">Design</p>
                        <p class="font-bold text-[var(--text-main)]">Adobe</p>
                    </div>
                </div>

                <!-- Decorative elements -->
                <div class="absolute -z-10 h-full w-full rotate-6 rounded-[2.5rem] border border-[var(--accent-gold)]/30 bg-transparent"></div>
                <div class="absolute -bottom-10 left-1/2 -z-20 h-40 w-40 -translate-x-1/2 rounded-full bg-[var(--accent-orange)]/30 blur-3xl"></div>
            </div>
        </div>
    </div>
</section>

<!-- KIKASHA CHA CUSTOM ALERT (TOAST) KWA AJILI YA CV -->
<div id="custom-cv-alert" class="fixed bottom-10 left-1/2 -translate-x-1/2 z-[9999] flex items-center gap-4 rounded-2xl border border-[var(--accent-teal)] bg-[#1a120b] px-6 py-4 shadow-[0_10px_30px_rgba(0,209,178,0.2)] transition-all duration-500 translate-y-24 opacity-0 pointer-events-none">
    
    <!-- Icon ya Info (Teal) -->
    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[rgba(0,209,178,0.1)] text-[var(--accent-teal)]">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </div>
    
    <!-- Maelezo -->
    <div>
        <p class="text-sm font-bold text-[var(--accent-gold)] uppercase tracking-wider">Coming Soon!</p>
        <p class="text-sm text-[var(--text-soft)]">My CV will be uploaded shortly.</p>
    </div>
</div>

<!-- JAVASCRIPT YA KUITANGAZA NA KUIFICHA -->
<script>
    function showCVAlert(event) {
        event.preventDefault(); // Inazuia page isiruke juu
        const cvAlert = document.getElementById('custom-cv-alert');
        
        // Pandisha kikasha juu na kionyeshe (Fade in & Slide up)
        cvAlert.classList.remove('translate-y-24', 'opacity-0');
        cvAlert.classList.add('translate-y-0', 'opacity-100');
        
        // Kifiche baada ya sekunde 4 (Fade out & Slide down)
        setTimeout(() => {
            cvAlert.classList.remove('translate-y-0', 'opacity-100');
            cvAlert.classList.add('translate-y-24', 'opacity-0');
        }, 4000);
    }
</script>
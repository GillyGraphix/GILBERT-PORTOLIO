<!-- resources/views/partials/hero.blade.php -->
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
            <div class="hero-elem delay-100 inline-flex items-center gap-2 rounded-full border border-[var(--line)] bg-[var(--bg-card)] px-4 py-2 text-xs font-semibold uppercase tracking-widest text-[var(--accent-teal)] backdrop-blur">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[var(--accent-teal)] opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-[var(--accent-teal)]"></span>
                </span>
                Open for freelance projects
            </div>

            <!-- Heading: Hi, I am Gilbert -->
            <h1 class="mt-4 text-5xl font-black leading-[1.1] sm:text-6xl lg:text-7xl">
                <span class="hero-elem delay-200 block mb-2 text-2xl font-medium tracking-normal text-[var(--text-soft)] sm:text-3xl">
                    Hi, I am <span class="text-[var(--accent-gold)]">Gilbert Gervas</span>
                </span>
                <span class="hero-elem delay-300 block">
                    <span class="bg-gradient-to-r from-[var(--accent-orange)] to-[var(--accent-gold)] bg-clip-text text-transparent">Web</span>
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
                
                <!-- HAPA NDIPO PAMEBADILISHWA: Nimeweka alert ya JavaScript kuzuia error -->
                <a href="#" onclick="alert('Coming Soon! CV will be uploaded shortly.'); return false;" class="inline-flex items-center gap-2 rounded-full border border-[var(--line)] bg-[var(--bg-card)] px-8 py-4 text-sm font-bold text-[var(--text-main)] transition hover:border-[var(--accent-gold)]/40 hover:text-[var(--accent-gold)]">
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

                <!-- Floating Badges (Hidden on mobile to keep it clean) -->
                <div class="floating-badge-left glass-badge absolute -left-8 top-1/4 z-20 hidden md:flex items-center gap-3 rounded-2xl p-4 shadow-xl float-delay">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FF2D20]/20 text-[#FF2D20]">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M11.968 1.48c-.687 0-1.37.112-2.02.327-.514.168-1.02.4-1.5.696L2.616 5.86c-1.4.81-2.264 2.302-2.264 3.918v5.626c0 1.616.864 3.108 2.264 3.918l5.832 3.357c.48.296.986.528 1.5.696.65.215 1.333.327 2.02.327.687 0 1.37-.112 2.02-.327.514-.168 1.02-.4 1.5-.696l5.832-3.357c1.4-.81 2.264-2.302 2.264-3.918v-5.626c0-1.616-.864-3.108-2.264-3.918l-5.832-3.357c-.48-.296-.986-.528-1.5-.696-.65-.215-1.333-.327-2.02-.327zm.032 2.852l5.72 3.292-5.72 3.29-5.72-3.29 5.72-3.292zM6.208 8.012l5.76 3.315v6.588l-5.76-3.315V8.012zm11.584 0v6.588l-5.76 3.315V11.327l5.76-3.315z"/></svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-wider text-[var(--text-muted)]">Backend</p>
                        <p class="font-bold text-[var(--text-main)]">Laravel</p>
                    </div>
                </div>

                <!-- Decorative elements -->
                <div class="absolute -z-10 h-full w-full rotate-6 rounded-[2.5rem] border border-[var(--accent-gold)]/30 bg-transparent"></div>
                <div class="absolute -bottom-10 left-1/2 -z-20 h-40 w-40 -translate-x-1/2 rounded-full bg-[var(--accent-orange)]/30 blur-3xl"></div>
            </div>
        </div>
    </div>
</section>
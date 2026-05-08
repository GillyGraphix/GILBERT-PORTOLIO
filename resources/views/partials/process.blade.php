<!-- resources/views/partials/process.blade.php -->
<style>
    /* UTUNDU WA GRID INAYOTEMBEA (MOVING GRID) */
    .animated-grid {
        /* Nimeongeza Opacity hapa kutoka 0.06 hadi 0.15 ili grid ionekane zaidi */
        background-size: 50px 50px;
        background-image: 
            linear-gradient(to right, rgba(26, 18, 11, 0.20) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(26, 18, 11, 0.20) 1px, transparent 1px);
        animation: panGrid 2s linear infinite;
    }
    
    @keyframes panGrid {
        0% { background-position: 0 0; }
        100% { background-position: 50px 50px; } 
    }

    /* Animation ya namba zinapocheza kidogo */
    @keyframes pulseSoft {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.7; transform: scale(1.1); }
    }
    .step-number { animation: pulseSoft 3s ease-in-out infinite; }
</style>

<!-- BACKGROUND YA KAKI (#dfd6c2) -->
<section id="process" class="relative z-10 bg-[#dfd6c2] py-24 text-[#1a120b] overflow-hidden">
    
    <!-- GRID NYUMA INAYOTEMBEA (Sasa inaonekana zaidi) -->
    <div class="absolute inset-0 z-0 animated-grid pointer-events-none"></div>

    <!-- FADE EDGES: Ili grid isikatike ghafla juu na chini -->
    <div class="absolute inset-0 z-0 bg-gradient-to-b from-[#dfd6c2] via-transparent to-[#dfd6c2] pointer-events-none opacity-80"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        
        <!-- HEADING SEHEMU (Maandishi meusi/kahawia juu ya Kaki) -->
        <div class="max-w-2xl reveal-section">
            <span class="text-xs font-bold uppercase tracking-[0.3em] text-[var(--accent-orange)] drop-shadow-sm">The Roadmap</span>
            <h2 class="mt-4 text-4xl font-black sm:text-5xl lg:text-6xl text-[#1a120b]">How I <span class="text-transparent bg-clip-text bg-gradient-to-r from-[var(--accent-orange)] to-[var(--accent-gold)]">work.</span></h2>
            <p class="mt-6 text-[#4a3f35] max-w-lg font-semibold">A structured approach to turning complex ideas into functional, high-end digital solutions.</p>
        </div>

        <!-- GRID YA PROCESS (MABOX YA CHOCOLATE) -->
        <div class="relative mt-20 grid gap-8 md:grid-cols-2 xl:grid-cols-4 reveal-section" style="transition-delay: 200ms;">
            
            <!-- CONNECTING LINES (Desktop Only) -->
            <div class="hidden xl:block absolute top-1/2 left-0 w-full h-px border-t-2 border-dashed border-[#1a120b]/20 -translate-y-1/2 z-0"></div>

            <!-- Hatua 01: Discover (Chocolate Box) -->
            <div class="group relative rounded-[2.5rem] border border-[#523521] bg-[#3b2516] p-8 shadow-xl transition-all duration-500 hover:-translate-y-2 hover:border-[var(--accent-orange)] hover:shadow-[0_15px_30px_rgba(255,122,0,0.2)] overflow-hidden">
                <p class="step-number text-xs font-black uppercase tracking-widest text-[var(--accent-orange)]">01 / Discover</p>
                <!-- Maandishi meupe -->
                <h3 class="mt-6 text-2xl font-bold text-white">Research</h3>
                <p class="mt-4 text-sm leading-7 text-[#dfd6c2]">I learn about your goals, audience, and what the project needs to achieve to build a solid foundation.</p>
                
                <!-- Accent bar chini inayosambaa ukigusa -->
                <div class="mt-8 h-1 w-0 bg-[var(--accent-orange)] transition-all duration-500 group-hover:w-full shadow-[0_0_10px_var(--accent-orange)]"></div>
            </div>
            
            <!-- Hatua 02: Design (Chocolate Box) -->
            <div class="group relative rounded-[2.5rem] border border-[#523521] bg-[#3b2516] p-8 shadow-xl transition-all duration-500 hover:-translate-y-2 hover:border-[var(--accent-teal)] hover:shadow-[0_15px_30px_rgba(0,209,178,0.2)] overflow-hidden">
                <p class="step-number text-xs font-black uppercase tracking-widest text-[var(--accent-teal)]" style="animation-delay: 0.5s;">02 / Design</p>
                <h3 class="mt-6 text-2xl font-bold text-white">Visual Identity</h3>
                <p class="mt-4 text-sm leading-7 text-[#dfd6c2]">I shape the structure, feel, and visual direction, creating high-fidelity designs that align with your brand.</p>
                
                <div class="mt-8 h-1 w-0 bg-[var(--accent-teal)] transition-all duration-500 group-hover:w-full shadow-[0_0_10px_var(--accent-teal)]"></div>
            </div>
            
            <!-- Hatua 03: Build (Chocolate Box) -->
            <div class="group relative rounded-[2.5rem] border border-[#523521] bg-[#3b2516] p-8 shadow-xl transition-all duration-500 hover:-translate-y-2 hover:border-[var(--accent-gold)] hover:shadow-[0_15px_30px_rgba(244,201,93,0.2)] overflow-hidden">
                <p class="step-number text-xs font-black uppercase tracking-widest text-[var(--accent-gold)]" style="animation-delay: 1s;">03 / Build</p>
                <h3 class="mt-6 text-2xl font-bold text-white">Development</h3>
                <p class="mt-4 text-sm leading-7 text-[#dfd6c2]">I turn concepts into clean, responsive code using Laravel and modern stacks, ensuring speed and reliability.</p>
                
                <div class="mt-8 h-1 w-0 bg-[var(--accent-gold)] transition-all duration-500 group-hover:w-full shadow-[0_0_10px_var(--accent-gold)]"></div>
            </div>
            
            <!-- Hatua 04: Refine (Chocolate Box) -->
            <div class="group relative rounded-[2.5rem] border border-[#523521] bg-[#3b2516] p-8 shadow-xl transition-all duration-500 hover:-translate-y-2 hover:border-white hover:shadow-[0_15px_30px_rgba(255,255,255,0.2)] overflow-hidden">
                <p class="step-number text-xs font-black uppercase tracking-widest text-white" style="animation-delay: 1.5s;">04 / Launch</p>
                <h3 class="mt-6 text-2xl font-bold text-white">Optimization</h3>
                <p class="mt-4 text-sm leading-7 text-[#dfd6c2]">Final polishing, SEO checks, and performance tuning to ensure your product is sharp and ready for the world.</p>
                
                <div class="mt-8 h-1 w-0 bg-white transition-all duration-500 group-hover:w-full shadow-[0_0_10px_white]"></div>
            </div>

        </div>
    </div>
</section>
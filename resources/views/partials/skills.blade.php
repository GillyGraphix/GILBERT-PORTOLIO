<style>
    /* CSS KWA AJILI YA MADUARA KUZUNGUKA KWA ULAINI */
    .circle-progress {
        transition: stroke-dashoffset 1.5s cubic-bezier(0.4, 0, 0.2, 1);
        transform: rotate(-90deg);
        transform-origin: 50% 50%;
    }
    .skill-card:hover .circle-bg {
        stroke: var(--accent-gold);
        opacity: 0.15;
    }
    
    /* CSS ya kufanya Icon (Picha/SVG) ivimbe ukipitisha mouse */
    .skill-icon-wrapper img {
        transition: transform 0.3s ease;
    }
    .skill-card:hover .skill-icon-wrapper img {
        transform: scale(1.15);
    }
</style>

<section id="skills" class="relative z-10 scroll-mt-28 bg-[var(--surface-light-2)] py-16 text-[var(--surface-text)] transition-colors duration-500">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        
        <div class="max-w-3xl reveal-section">
            <span class="text-sm font-bold uppercase tracking-widest text-[var(--accent-orange)]">My Skills</span>
            <h2 class="mt-3 text-3xl font-black sm:text-4xl">Software & Proficiencies</h2>
            <p class="mt-4 text-base leading-7 text-[var(--surface-text-soft)]">
                I work across both development and creative design, ensuring every project benefits from a solid technical structure and stunning visual quality.
            </p>
        </div>

        <div class="mt-10 grid gap-6 lg:grid-cols-2 reveal-section" style="transition-delay: 200ms;">
            
            <!-- BOX LA KWANZA: DEVELOPMENT STACK -->
            <div class="rounded-2xl border border-[var(--surface-line)] bg-white p-5 shadow-sm transition-all duration-300 hover:border-[var(--accent-orange)] hover:shadow-2xl">
                
                <div class="mb-4 flex items-center justify-between gap-3 border-b border-[var(--surface-line)] pb-3">
                    <div>
                        <p class="text-[11px] font-bold uppercase tracking-widest text-[var(--accent-orange)]">Software Tools</p>
                        <h3 class="mt-1 text-lg font-black text-[var(--surface-text)]">Development Stack</h3>
                    </div>
                    <div class="rounded-full bg-[var(--accent-orange)]/10 px-3 py-1.5 text-[11px] font-bold uppercase tracking-widest text-[var(--accent-orange)]">
                        Code
                    </div>
                </div>

                <!-- Icons Grid Imepunguzwa Gap Zaidi -->
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                    
                    <div class="skill-card group flex flex-col items-center">
                        <div class="relative flex h-20 w-20 items-center justify-center">
                            <svg class="h-full w-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" class="circle-bg text-gray-200 opacity-30 transition-colors duration-300" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" stroke-linecap="round" 
                                    class="circle-progress text-[#FF2D20] js-progress" 
                                    stroke-dasharray="251.2" stroke-dashoffset="251.2" data-percent="75" />
                            </svg>
                            <div class="skill-icon-wrapper absolute flex items-center justify-center">
                                <img src="{{ asset('images/icons/laravel.svg') }}" alt="Laravel" class="h-8 w-8 object-contain">
                            </div>
                        </div>
                        <p class="mt-2 font-bold text-sm text-[var(--surface-text)]">Laravel</p>
                        <p class="text-[11px] font-semibold text-[#FF2D20]">75%</p>
                    </div>

                    <div class="skill-card group flex flex-col items-center">
                        <div class="relative flex h-20 w-20 items-center justify-center">
                            <svg class="h-full w-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" class="circle-bg text-gray-200 opacity-30 transition-colors duration-300" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" stroke-linecap="round" 
                                    class="circle-progress text-[#777BB4] js-progress" 
                                    stroke-dasharray="251.2" stroke-dashoffset="251.2" data-percent="80" />
                            </svg>
                            <div class="skill-icon-wrapper absolute flex items-center justify-center">
                                <img src="{{ asset('images/icons/php.svg') }}" alt="PHP" class="h-8 w-8 object-contain">
                            </div>
                        </div>
                        <p class="mt-2 font-bold text-sm text-[var(--surface-text)]">PHP</p>
                        <p class="text-[11px] font-semibold text-[#777BB4]">80%</p>
                    </div>

                    <div class="skill-card group flex flex-col items-center">
                        <div class="relative flex h-20 w-20 items-center justify-center">
                            <svg class="h-full w-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" class="circle-bg text-gray-200 opacity-30 transition-colors duration-300" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" stroke-linecap="round" 
                                    class="circle-progress text-[#06B6D4] js-progress" 
                                    stroke-dasharray="251.2" stroke-dashoffset="251.2" data-percent="80" />
                            </svg>
                            <div class="skill-icon-wrapper absolute flex items-center justify-center">
                                <img src="{{ asset('images/icons/tailwind.svg') }}" alt="Tailwind CSS" class="h-8 w-8 object-contain">
                            </div>
                        </div>
                        <p class="mt-2 font-bold text-sm text-[var(--surface-text)]">Tailwind</p>
                        <p class="text-[11px] font-semibold text-[#06B6D4]">80%</p>
                    </div>

                    <div class="skill-card group flex flex-col items-center">
                        <div class="relative flex h-20 w-20 items-center justify-center">
                            <svg class="h-full w-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" class="circle-bg text-gray-200 opacity-30 transition-colors duration-300" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" stroke-linecap="round" 
                                    class="circle-progress text-[#E34F26] js-progress" 
                                    stroke-dasharray="251.2" stroke-dashoffset="251.2" data-percent="80" />
                            </svg>
                            <div class="skill-icon-wrapper absolute flex items-center justify-center">
                                <img src="{{ asset('images/icons/html.svg') }}" alt="HTML5" class="h-8 w-8 object-contain">
                            </div>
                        </div>
                        <p class="mt-2 font-bold text-sm text-[var(--surface-text)]">HTML5</p>
                        <p class="text-[11px] font-semibold text-[#E34F26]">80%</p>
                    </div>

                    <div class="skill-card group flex flex-col items-center">
                        <div class="relative flex h-20 w-20 items-center justify-center">
                            <svg class="h-full w-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" class="circle-bg text-gray-200 opacity-30 transition-colors duration-300" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" stroke-linecap="round" 
                                    class="circle-progress text-[#4479A1] js-progress" 
                                    stroke-dasharray="251.2" stroke-dashoffset="251.2" data-percent="80" />
                            </svg>
                            <div class="skill-icon-wrapper absolute flex items-center justify-center">
                                <img src="{{ asset('images/icons/mysql.svg') }}" alt="MySQL" class="h-8 w-8 object-contain">
                            </div>
                        </div>
                        <p class="mt-2 font-bold text-sm text-[var(--surface-text)]">MySQL</p>
                        <p class="text-[11px] font-semibold text-[#4479A1]">80%</p>
                    </div>

                    <div class="skill-card group flex flex-col items-center">
                        <div class="relative flex h-20 w-20 items-center justify-center">
                            <svg class="h-full w-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" class="circle-bg text-gray-200 opacity-30 transition-colors duration-300" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" stroke-linecap="round" 
                                    class="circle-progress text-[#4B8BBE] js-progress" 
                                    stroke-dasharray="251.2" stroke-dashoffset="251.2" data-percent="20" />
                            </svg>
                            <div class="skill-icon-wrapper absolute flex items-center justify-center">
                                <img src="{{ asset('images/icons/python.svg') }}" alt="Python" class="h-7 w-7 object-contain">
                            </div>
                        </div>
                        <p class="mt-2 font-bold text-sm text-[var(--surface-text)]">Python</p>
                        <p class="text-[11px] font-semibold text-[#4B8BBE]">20%</p>
                    </div>

                </div>
            </div>

            <!-- BOX LA PILI: CREATIVE STACK -->
            <div class="rounded-2xl border border-[var(--surface-line)] bg-white p-5 shadow-sm transition-all duration-300 hover:border-[var(--accent-teal)] hover:shadow-2xl">
                
                <div class="mb-4 flex items-center justify-between gap-3 border-b border-[var(--surface-line)] pb-3">
                    <div>
                        <p class="text-[11px] font-bold uppercase tracking-widest text-[var(--accent-teal)]">Design Tools</p>
                        <h3 class="mt-1 text-lg font-black text-[var(--surface-text)]">Creative Stack</h3>
                    </div>
                    <div class="rounded-full bg-[var(--accent-teal)]/10 px-3 py-1.5 text-[11px] font-bold uppercase tracking-widest text-[var(--accent-teal)]">
                        Design
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                    
                    <div class="skill-card group flex flex-col items-center">
                        <div class="relative flex h-20 w-20 items-center justify-center">
                            <svg class="h-full w-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" class="circle-bg text-gray-200 opacity-30 transition-colors duration-300" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" stroke-linecap="round" 
                                    class="circle-progress text-[#31A8FF] js-progress" 
                                    stroke-dasharray="251.2" stroke-dashoffset="251.2" data-percent="85" />
                            </svg>
                            <div class="skill-icon-wrapper absolute flex items-center justify-center">
                                <img src="{{ asset('images/icons/photoshop.svg') }}" alt="Photoshop" class="h-8 w-8 object-contain">
                            </div>
                        </div>
                        <p class="mt-2 font-bold text-sm text-[var(--surface-text)] text-center">Photoshop</p>
                        <p class="text-[11px] font-semibold text-[#31A8FF]">85%</p>
                    </div>

                    <div class="skill-card group flex flex-col items-center">
                        <div class="relative flex h-20 w-20 items-center justify-center">
                            <svg class="h-full w-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" class="circle-bg text-gray-200 opacity-30 transition-colors duration-300" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" stroke-linecap="round" 
                                    class="circle-progress text-[#FF9A00] js-progress" 
                                    stroke-dasharray="251.2" stroke-dashoffset="251.2" data-percent="85" />
                            </svg>
                            <div class="skill-icon-wrapper absolute flex items-center justify-center">
                                <img src="{{ asset('images/icons/illustrator.svg') }}" alt="Illustrator" class="h-8 w-8 object-contain">
                            </div>
                        </div>
                        <p class="mt-2 font-bold text-sm text-[var(--surface-text)] text-center">Illustrator</p>
                        <p class="text-[11px] font-semibold text-[#FF9A00]">85%</p>
                    </div>

                    <div class="skill-card group flex flex-col items-center">
                        <div class="relative flex h-20 w-20 items-center justify-center">
                            <svg class="h-full w-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" class="circle-bg text-gray-200 opacity-30 transition-colors duration-300" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" stroke-linecap="round" 
                                    class="circle-progress text-[#997DB7] js-progress" 
                                    stroke-dasharray="251.2" stroke-dashoffset="251.2" data-percent="85" />
                            </svg>
                            <div class="skill-icon-wrapper absolute flex items-center justify-center">
                                <img src="{{ asset('images/icons/premiere.svg') }}" alt="Premiere" class="h-8 w-8 object-contain">
                            </div>
                        </div>
                        <p class="mt-2 font-bold text-sm text-[var(--surface-text)]">Premiere</p>
                        <p class="text-[11px] font-semibold text-[#997DB7]">85%</p>
                    </div>

                    <div class="skill-card group flex flex-col items-center">
                        <div class="relative flex h-20 w-20 items-center justify-center">
                            <svg class="h-full w-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" class="circle-bg text-gray-200 opacity-30 transition-colors duration-300" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" stroke-linecap="round" 
                                    class="circle-progress text-[#000000] js-progress" 
                                    stroke-dasharray="251.2" stroke-dashoffset="251.2" data-percent="80" />
                            </svg>
                            <div class="skill-icon-wrapper absolute flex items-center justify-center">
                                <img src="{{ asset('images/icons/capcut.svg') }}" alt="CapCut" class="h-8 w-8 object-contain">
                            </div>
                        </div>
                        <p class="mt-2 font-bold text-sm text-[var(--surface-text)]">CapCut</p>
                        <p class="text-[11px] font-semibold text-gray-800">80%</p>
                    </div>

                    <div class="skill-card group flex flex-col items-center">
                        <div class="relative flex h-20 w-20 items-center justify-center">
                            <svg class="h-full w-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" class="circle-bg text-gray-200 opacity-30 transition-colors duration-300" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" stroke-linecap="round" 
                                   class="circle-progress text-[#07b9ce] js-progress" 
                                   stroke-dasharray="251.2" stroke-dashoffset="251.2" data-percent="80" />
                            </svg>
                            <div class="skill-icon-wrapper absolute flex items-center justify-center">
                                <img src="{{ asset('images/icons/canva.svg') }}" alt="Canva" class="h-8 w-8 object-contain">
                            </div>
                        </div>
                        <p class="mt-2 font-bold text-sm text-[var(--surface-text)] text-center">Canva </p>
                        <p class="text-[11px] font-semibold text-[#07b9ce]">85%</p>
                    </div>

                    <div class="skill-card group flex flex-col items-center">
                        <div class="relative flex h-20 w-20 items-center justify-center">
                            <svg class="h-full w-full" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" class="circle-bg text-gray-200 opacity-30 transition-colors duration-300" />
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="6" fill="none" stroke-linecap="round" 
                                   class="circle-progress text-[#74c365] js-progress" 
                                   stroke-dasharray="251.2" stroke-dashoffset="251.2" data-percent="80" />
                            </svg>
                            <div class="skill-icon-wrapper absolute flex items-center justify-center">
                                <img src="{{ asset('images/icons/affinity.svg') }}" alt="Affinity" class="h-8 w-8 object-contain">
                            </div>
                        </div>
                        <p class="mt-2 font-bold text-sm text-[var(--surface-text)] text-center">Affinity</p>
                        <p class="text-[11px] font-semibold text-[#74c365]">80%</p>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const progressCircles = document.querySelectorAll('.js-progress');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const circle = entry.target;
                    
                    const percent = circle.getAttribute('data-percent');
                    const circumference = 251.2;
                    const targetOffset = circumference - (circumference * percent / 100);
                    
                    setTimeout(() => {
                        circle.style.strokeDashoffset = targetOffset;
                    }, 300);
                    
                    observer.unobserve(circle);
                }
            });
        }, { threshold: 0.3 }); 

        progressCircles.forEach(circle => {
            observer.observe(circle);
        });
    });
</script>
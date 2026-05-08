<style>
    /* BACKGROUND YA KI-SANAA */
    .artistic-bg {
        background-color: #0c0805; 
        background-image: 
            radial-gradient(#3a2618 1px, transparent 1px),
            radial-gradient(#1f140c 1px, transparent 1px);
        background-position: 0 0, 20px 20px;
        background-size: 40px 40px;
    }

    /* Kuzuia User Ku-Select na Ku-Drag Picha kwa Asili ya Browser */
    .no-select {
        user-select: none;
        -webkit-user-drag: none;
    }

    /* Ficha scrollbar */
    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .gallery-track {
        display: flex;
        width: max-content;
    }

    /* Muonekano wa Mouse wakati wa kuvuta */
    .cursor-grab { cursor: grab; }
    .cursor-grabbing { cursor: grabbing !important; }

    /* Hii inazuia Modal kufunguka kimakosa wakati una-swipe */
    .disable-clicks * {
        pointer-events: none !important;
    }
</style>

<section id="gallery" x-data="{ modalOpen: false, currentImage: '' }" class="artistic-bg relative z-10 scroll-mt-28 py-24 text-[var(--text-main)] transition-colors duration-500 overflow-hidden border-y border-[#2d1f10]">
    
    <div class="absolute inset-0 bg-gradient-to-b from-[#0c0805] via-transparent to-[#0c0805] z-0 pointer-events-none"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8 mb-16">
        <div class="text-center max-w-2xl mx-auto reveal-section">
            <span class="text-sm font-bold uppercase tracking-widest text-[var(--accent-gold)]">Design Gallery</span>
            <h2 class="mt-4 text-4xl font-black sm:text-5xl text-white">Visual Archives</h2>
            <p class="mt-4 text-lg text-[var(--text-soft)]">A moving collection of branding systems, promotional posters, and creative assets. <br><span class="text-[var(--accent-gold)]">Drag or swipe to explore faster.</span></p>
        </div>
    </div>

    <div class="relative z-10 w-full scroller-container mb-12">
        <div class="absolute left-0 top-0 bottom-0 w-16 md:w-32 bg-gradient-to-r from-[#0c0805] to-transparent z-20 pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-16 md:w-32 bg-gradient-to-l from-[#0c0805] to-transparent z-20 pointer-events-none"></div>
        
        <div class="js-scroller cursor-grab overflow-x-auto hide-scrollbar w-full" data-direction="left">
            <div class="gallery-track gap-6 px-3">
                <div @click="modalOpen = true; currentImage = '{{ asset('images/logos/logo1.jpg') }}'" class="group relative h-64 w-64 flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-gold)] transition-colors">
                    <img src="{{ asset('images/logos/logo1.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center pointer-events-none">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                    </div>
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/logos/logo2.jpg') }}'" class="group relative h-64 w-64 flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-gold)] transition-colors">
                    <img src="{{ asset('images/logos/logo2.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/logos/logo3.jpg') }}'" class="group relative h-64 w-64 flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-gold)] transition-colors">
                    <img src="{{ asset('images/logos/logo3.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/logos/logo4.jpg') }}'" class="group relative h-64 w-64 flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-gold)] transition-colors">
                    <img src="{{ asset('images/logos/logo4.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/logos/logo5.jpg') }}'" class="group relative h-64 w-64 flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-gold)] transition-colors">
                    <img src="{{ asset('images/logos/logo5.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/logos/logo6.jpg') }}'" class="group relative h-64 w-64 flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-gold)] transition-colors">
                    <img src="{{ asset('images/logos/logo6.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                </div>

                <div @click="modalOpen = true; currentImage = '{{ asset('images/logos/logo1.jpg') }}'" class="group relative h-64 w-64 flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-gold)] transition-colors">
                    <img src="{{ asset('images/logos/logo1.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/logos/logo2.jpg') }}'" class="group relative h-64 w-64 flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-gold)] transition-colors">
                    <img src="{{ asset('images/logos/logo2.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/logos/logo3.jpg') }}'" class="group relative h-64 w-64 flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-gold)] transition-colors">
                    <img src="{{ asset('images/logos/logo3.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/logos/logo4.jpg') }}'" class="group relative h-64 w-64 flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-gold)] transition-colors">
                    <img src="{{ asset('images/logos/logo4.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/logos/logo5.jpg') }}'" class="group relative h-64 w-64 flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-gold)] transition-colors">
                    <img src="{{ asset('images/logos/logo5.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/logos/logo6.jpg') }}'" class="group relative h-64 w-64 flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-gold)] transition-colors">
                    <img src="{{ asset('images/logos/logo6.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                </div>
            </div>
        </div>
    </div>

    <div class="relative z-10 w-full scroller-container mt-10">
        <div class="absolute left-0 top-0 bottom-0 w-16 md:w-32 bg-gradient-to-r from-[#0c0805] to-transparent z-20 pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-16 md:w-32 bg-gradient-to-l from-[#0c0805] to-transparent z-20 pointer-events-none"></div>
        
        <div class="js-scroller cursor-grab overflow-x-auto hide-scrollbar w-full" data-direction="right">
            <div class="gallery-track gap-6 px-3">
                <div @click="modalOpen = true; currentImage = '{{ asset('images/posters/poster1.jpg') }}'" class="group relative h-[420px] w-[300px] flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-teal)] transition-colors">
                    <img src="{{ asset('images/posters/poster1.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center pointer-events-none">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/posters/poster2.jpg') }}'" class="group relative h-[420px] w-[300px] flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-teal)] transition-colors">
                    <img src="{{ asset('images/posters/poster2.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/posters/poster3.jpg') }}'" class="group relative h-[420px] w-[300px] flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-teal)] transition-colors">
                    <img src="{{ asset('images/posters/poster3.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/posters/poster4.jpg') }}'" class="group relative h-[420px] w-[300px] flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-teal)] transition-colors">
                    <img src="{{ asset('images/posters/poster4.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/posters/poster5.jpg') }}'" class="group relative h-[420px] w-[300px] flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-teal)] transition-colors">
                    <img src="{{ asset('images/posters/poster5.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/posters/poster6.jpg') }}'" class="group relative h-[420px] w-[300px] flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-teal)] transition-colors">
                    <img src="{{ asset('images/posters/poster6.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                </div>

                <div @click="modalOpen = true; currentImage = '{{ asset('images/posters/poster1.jpg') }}'" class="group relative h-[420px] w-[300px] flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-teal)] transition-colors">
                    <img src="{{ asset('images/posters/poster1.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/posters/poster2.jpg') }}'" class="group relative h-[420px] w-[300px] flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-teal)] transition-colors">
                    <img src="{{ asset('images/posters/poster2.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/posters/poster3.jpg') }}'" class="group relative h-[420px] w-[300px] flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-teal)] transition-colors">
                    <img src="{{ asset('images/posters/poster3.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/posters/poster4.jpg') }}'" class="group relative h-[420px] w-[300px] flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-teal)] transition-colors">
                    <img src="{{ asset('images/posters/poster4.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/posters/poster5.jpg') }}'" class="group relative h-[420px] w-[300px] flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-teal)] transition-colors">
                    <img src="{{ asset('images/posters/poster5.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                </div>
                <div @click="modalOpen = true; currentImage = '{{ asset('images/posters/poster6.jpg') }}'" class="group relative h-[420px] w-[300px] flex-shrink-0 overflow-hidden rounded-[2rem] border border-[#2d1f10] bg-[#1a110a] shadow-xl hover:border-[var(--accent-teal)] transition-colors">
                    <img src="{{ asset('images/posters/poster6.jpg') }}" oncontextmenu="return false;" class="no-select h-full w-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                </div>
            </div>
        </div>
    </div>

    <div x-show="modalOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[120] flex items-center justify-center bg-black/90 p-4 backdrop-blur-sm"
         style="display: none;">
         
        <div @click="modalOpen = false" class="absolute inset-0 cursor-pointer"></div>

        <div class="relative z-10 max-w-5xl max-h-[90vh]">
            <button @click="modalOpen = false" class="absolute -top-12 right-0 text-white hover:text-[var(--accent-gold)] transition-colors focus:outline-none">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            
            <img :src="currentImage" oncontextmenu="return false;" class="no-select rounded-lg shadow-2xl max-h-[85vh] object-contain border border-[#2d1f10]">
            <p class="text-center text-gray-500 text-sm mt-4 font-semibold uppercase tracking-widest">© {{ date('Y') }} Protected Work</p>
        </div>
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const scrollers = document.querySelectorAll('.js-scroller');

        scrollers.forEach(scroller => {
            let isPaused = false;
            let resumeTimeout;
            let reqId;
            let scrollSpeed = scroller.dataset.direction === 'left' ? 1 : -1;
            
            // Variables za Drag (PC)
            let isDown = false;
            let startX;
            let scrollLeft;

            // Kuanzia katikati kwa zile zinazoenda kulia (ili zisigonge ukuta)
            if (scrollSpeed === -1) {
                setTimeout(() => {
                    scroller.scrollLeft = scroller.scrollWidth / 2;
                }, 100);
            }

            // Function ya kusimamia loop (Hii inafanya picha zisikate iwe auto au swipe)
            function manageLoop() {
                if (scrollSpeed === 1) { 
                    if (scroller.scrollLeft >= scroller.scrollWidth / 2) {
                        scroller.scrollLeft -= scroller.scrollWidth / 2;
                    } else if (scroller.scrollLeft <= 0) {
                        scroller.scrollLeft += scroller.scrollWidth / 2;
                    }
                } else { 
                    if (scroller.scrollLeft <= 0) {
                        scroller.scrollLeft += scroller.scrollWidth / 2;
                    } else if (scroller.scrollLeft >= scroller.scrollWidth / 2) {
                        scroller.scrollLeft -= scroller.scrollWidth / 2;
                    }
                }
            }

            // Function ya kujiendesha yenyewe
            function autoScroll() {
                if (!isPaused && !isDown) {
                    scroller.scrollLeft += scrollSpeed;
                    manageLoop();
                }
                reqId = requestAnimationFrame(autoScroll);
            }
            reqId = requestAnimationFrame(autoScroll);

            function pauseScroll() {
                isPaused = true;
                clearTimeout(resumeTimeout);
            }

            function resumeScroll() {
                clearTimeout(resumeTimeout);
                resumeTimeout = setTimeout(() => { isPaused = false; }, 2000); 
            }

            // MOUSE EVENTS (Kuvuta na Mouse kwenye PC)
            scroller.addEventListener('mousedown', (e) => {
                isDown = true;
                pauseScroll();
                scroller.classList.add('cursor-grabbing');
                startX = e.pageX - scroller.offsetLeft;
                scrollLeft = scroller.scrollLeft;
            });

            scroller.addEventListener('mouseleave', () => {
                isDown = false;
                scroller.classList.remove('cursor-grabbing');
                scroller.classList.remove('disable-clicks');
                resumeScroll();
            });

            scroller.addEventListener('mouseup', () => {
                isDown = false;
                scroller.classList.remove('cursor-grabbing');
                resumeScroll();
                // Toa block ya click baada ya sekunde kadhaa kuzuia modal kufunguka kimakosa
                setTimeout(() => scroller.classList.remove('disable-clicks'), 50);
            });

            scroller.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - scroller.offsetLeft;
                const walk = (x - startX) * 2; // Spidi ya kuvuta na mouse
                
                // Kama umevuta sana, zuia 'click' isifungue modal
                if (Math.abs(walk) > 10) {
                    scroller.classList.add('disable-clicks');
                }
                
                scroller.scrollLeft = scrollLeft - walk;
                manageLoop();
            });

            // TOUCH EVENTS (Kuvuta na Kidole kwenye Simu)
            scroller.addEventListener('touchstart', pauseScroll, { passive: true });
            scroller.addEventListener('touchmove', pauseScroll, { passive: true });
            scroller.addEventListener('touchend', resumeScroll);
            scroller.addEventListener('scroll', manageLoop, { passive: true }); // Loop inafanya kazi hata uki-swipe
        });
    });
</script>
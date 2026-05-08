<button id="back-to-top" aria-label="Back to Top" class="fixed bottom-8 right-8 z-[60] flex h-12 w-12 items-center justify-center rounded-full bg-[#1a120b]/90 backdrop-blur-md border border-[var(--line)] text-[var(--text-main)] shadow-2xl transition-all duration-500 opacity-0 pointer-events-none translate-y-4 hover:border-[var(--accent-gold)] hover:bg-[var(--accent-gold)] hover:text-[#1b1207] hover:scale-110">
    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
</button>

<footer class="relative z-10 overflow-hidden border-t border-[var(--line)] bg-[var(--bg-section)] pb-8 pt-16 text-[var(--text-muted)] transition-colors duration-500 mt-20">
    
    <canvas id="footerCanvas" class="absolute inset-0 h-full w-full z-0 pointer-events-none"></canvas>

    <div class="absolute inset-0 z-0 bg-gradient-to-t from-[var(--bg-section)] via-[var(--bg-section)]/80 to-[var(--bg-section)]/20 pointer-events-none"></div>

    <div class="absolute -left-20 bottom-0 z-0 h-96 w-96 animate-pulse rounded-full bg-[var(--accent-orange)]/10 blur-[100px] pointer-events-none" style="animation-duration: 4s;"></div>
    <div class="absolute right-10 top-10 z-0 h-96 w-96 animate-pulse rounded-full bg-[var(--accent-teal)]/10 blur-[100px] pointer-events-none" style="animation-duration: 5s;"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-3">
            
            <div>
                <p class="text-xl font-bold uppercase tracking-widest text-[var(--accent-gold)]">GILBERT G.</p>
                <p class="mt-4 max-w-xs text-sm leading-6">
                    Merging modern development with bold creative expression. Based in Tanzania, building for the world.
                </p>
                <p class="mt-4 font-semibold text-[var(--accent-orange)]">
                    Let's build the next big thing together.
                </p>
            </div>

            <div>
                <p class="text-sm font-bold uppercase tracking-widest text-[var(--text-main)]">Quick Links</p>
                <ul class="mt-4 flex flex-col gap-3 text-sm">
                    <li><a href="#about" class="transition hover:text-[var(--accent-gold)]">About</a></li>
                    <li><a href="#projects" class="transition hover:text-[var(--accent-gold)]">Projects</a></li>
                    <li><a href="#services" class="transition hover:text-[var(--accent-gold)]">Services</a></li>
                    <li><a href="#gallery" class="transition hover:text-[var(--accent-gold)]">Gallery</a></li>
                    <li><a href="#contact" class="transition hover:text-[var(--accent-gold)]">Contact</a></li>
                </ul>
            </div>

            <div>
                <p class="text-sm font-bold uppercase tracking-widest text-[var(--text-main)]">Connect With Me</p>
                <div class="mt-6 flex flex-wrap gap-4">
                    
                    <a href="https://github.com/GillyGraphix" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-full border border-[var(--line)] bg-[var(--bg-card)] text-[var(--text-main)] transition hover:-translate-y-1 hover:border-[var(--text-main)] hover:bg-[var(--text-main)] hover:text-[var(--bg-main)]">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                    </a>
                    
                    <a href="https://www.linkedin.com/in/gilbert-amani-9023b5233?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-full border border-[var(--line)] bg-[var(--bg-card)] text-[var(--text-main)] transition hover:-translate-y-1 hover:border-[#0A66C2] hover:bg-[#0A66C2] hover:text-white">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    
                    <a href="https://www.behance.net/gilbertamani" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-full border border-[var(--line)] bg-[var(--bg-card)] text-[var(--text-main)] transition hover:-translate-y-1 hover:border-[#1769ff] hover:bg-[#1769ff] hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 7h-7v-2h7v2zm1.726 10c-.442 1.297-2.029 3-5.101 3-3.074 0-5.564-1.729-5.564-5.675 0-3.91 2.325-5.92 5.466-5.92 3.082 0 4.964 1.782 5.375 4.426.078.506.109 1.188.096 2.14h-7.618c.159 1.914 1.742 2.681 3.12 2.681 1.792 0 2.434-1.127 2.763-2.193h2.463zm-5.263-6.52c-1.393 0-2.348.917-2.613 2.164h5.279c-.279-1.282-1.242-2.164-2.666-2.164zm-9.463-3.48h-9v14h9c2.165 0 3.791-1.042 3.791-3.238 0-1.464-.816-2.523-2.032-2.909 1.139-.338 1.777-1.353 1.777-2.628 0-2.612-2.115-5.225-5.536-5.225zm-5 8h4.093c1.171 0 1.954.516 1.954 1.488 0 1.054-.914 1.631-2.083 1.631h-3.964v-3.119zm0-2.593v-2.807h3.766c1.077 0 1.76.452 1.76 1.359 0 .977-.852 1.448-1.922 1.448h-3.604z"/></svg>
                    </a>
                    
                    <a href="https://www.instagram.com/gilly._graphix?igsh=dmk4bjJ6eTkzMjkw" target="_blank" rel="noopener noreferrer" class="flex h-10 w-10 items-center justify-center rounded-full border border-[var(--line)] bg-[var(--bg-card)] text-[var(--text-main)] transition hover:-translate-y-1 hover:border-[#E1306C] hover:bg-gradient-to-tr hover:from-[#f09433] hover:via-[#e6683c] hover:to-[#bc1888] hover:text-white">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-16 flex flex-col items-center justify-between gap-6 border-t border-[var(--line)] pt-8 pb-4 text-sm sm:flex-row">
            <p>© {{ date('Y') }}. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <p class="flex items-center gap-2">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[var(--accent-teal)] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-[var(--accent-teal)]"></span>
                    </span>
                    Creative Developer & Brand Strategist
                </p>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const backToTopBtn = document.getElementById('back-to-top');

        // Event ya kuonyesha/kuficha button kulingana na scroll
        window.addEventListener('scroll', () => {
            // Kama ameshuka chini zaidi ya pixel 300, onyesha button
            if (window.scrollY > 300) {
                backToTopBtn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-4');
                backToTopBtn.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
            } else {
                // Kama yuko juu, ficha button
                backToTopBtn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-4');
                backToTopBtn.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
            }
        });

        // Event ya kubonyeza ili kurudi juu
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Hii inafanya ipande kwa ulaini, sio kwa kustukiza
            });
        });
    });
</script>
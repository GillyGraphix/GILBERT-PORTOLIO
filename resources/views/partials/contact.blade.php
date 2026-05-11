<style>
    /* UTUNDU WA ANIMATIONS ZA ICONS NA MAWIMBI */
    .wave-slow { animation: pingWave 3s cubic-bezier(0, 0, 0.2, 1) infinite; }
    @keyframes pingWave {
        0% { transform: scale(1); opacity: 0.6; }
        75%, 100% { transform: scale(2); opacity: 0; }
    }

    /* EMAIL ANIMATION */
    .mail-flap { animation: mailFlap 4s ease-in-out infinite; transform-origin: center 8px; }
    @keyframes mailFlap {
        0%, 10% { transform: scaleY(1); }
        20%, 80% { transform: scaleY(-1); }
        90%, 100% { transform: scaleY(1); }
    }
    .mail-paper { animation: mailPaper 4s ease-in-out infinite; }
    @keyframes mailPaper {
        0%, 20% { transform: translateY(0) scale(0.5); opacity: 0; }
        30% { transform: translateY(-8px) scale(0.8); opacity: 1; }
        60% { transform: translateY(-24px) scale(1.2); opacity: 0; }
        100% { transform: translateY(0); opacity: 0; }
    }

    /* WHATSAPP ANIMATION (SHAKE & PULSE) */
    .wa-shake { animation: waShake 3s ease-in-out infinite; transform-origin: center; }
    @keyframes waShake {
        0%, 80%, 100% { transform: rotate(0) scale(1); }
        82%, 86% { transform: rotate(15deg) scale(1.1); }
        84%, 88% { transform: rotate(-15deg) scale(1.1); }
    }

    /* LOCATION ANIMATION */
    .loc-bounce { animation: locBounce 2.5s ease-in-out infinite; }
    @keyframes locBounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-6px); }
        60% { transform: translateY(-3px); }
    }

    /* GALAXY ORBITS */
    .orbit-cw-1 { animation: spinCW 45s linear infinite; }
    .orbit-ccw-1 { animation: spinCCW 45s linear infinite; }
    .orbit-ccw-2 { animation: spinCCW 35s linear infinite; }
    .orbit-cw-2 { animation: spinCW 35s linear infinite; }
    .orbit-cw-3 { animation: spinCW 25s linear infinite; }
    .orbit-ccw-3 { animation: spinCCW 25s linear infinite; }

    @keyframes spinCW { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
    @keyframes spinCCW { from { transform: rotate(0deg); } to { transform: rotate(-360deg); } }
</style>

<section id="contact" class="relative z-10 scroll-mt-28 bg-[var(--bg-main)] py-16 sm:py-24 text-[var(--text-main)] overflow-hidden transition-colors duration-500">
    
    <!-- GALAXY BACKGROUND EFFECT -->
    <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.6)_1px,transparent_1px)] bg-[size:24px_24px] opacity-20"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.8)_2px,transparent_2px)] bg-[size:64px_64px] opacity-30"></div>
        
        <div class="absolute top-0 right-0 w-[50vw] h-[50vw] bg-purple-900/20 rounded-full blur-[120px] mix-blend-screen opacity-60"></div>
        <div class="absolute bottom-0 left-0 w-[60vw] h-[60vw] bg-blue-900/10 rounded-full blur-[150px] mix-blend-screen opacity-50"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[40vw] h-[40vw] bg-[var(--accent-teal)]/5 rounded-full blur-[100px] opacity-40"></div>
        
        <!-- WRAPPER YA MIZUNGUKO -->
        <div class="absolute top-1/2 right-0 -translate-y-1/2 translate-x-[15%] w-[800px] h-[800px] flex items-center justify-center opacity-60 sm:opacity-80 lg:opacity-100">
            <!-- OUTER ORBIT (Location) -->
            <div class="absolute w-[800px] h-[800px] rounded-full border border-[rgba(255,122,0,0.4)] orbit-cw-1">
                <div class="absolute -bottom-6 left-1/2 -ml-6 w-12 h-12">
                    <div class="w-full h-full rounded-full bg-[#1a120b] border-2 border-[rgba(255,122,0,0.8)] text-[var(--accent-orange)] flex items-center justify-center shadow-[0_0_20px_rgba(255,122,0,0.6)] orbit-ccw-1 backdrop-blur-md">
                        <svg class="h-5 w-5 loc-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </div>
                </div>
            </div>
            <!-- MIDDLE ORBIT (WhatsApp) -->
            <div class="absolute w-[550px] h-[550px] rounded-full border border-[rgba(0,209,178,0.4)] orbit-ccw-2">
                <div class="absolute top-1/2 -right-6 -mt-6 w-12 h-12">
                    <a href="https://wa.me/255672454057" target="_blank" class="w-full h-full rounded-full bg-[#1a120b] border-2 border-[rgba(0,209,178,0.8)] text-[var(--accent-teal)] flex items-center justify-center shadow-[0_0_20px_rgba(0,209,178,0.6)] orbit-cw-2 backdrop-blur-md transition-transform hover:scale-110">
                        <!-- REAL WHATSAPP ICON -->
                        <svg class="h-6 w-6 wa-shake" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.414 0 .018 5.393 0 12.03c0 2.123.554 4.197 1.604 6.046L0 24l6.149-1.613a11.77 11.77 0 005.897 1.57h.005c6.633 0 12.032-5.397 12.035-12.034a11.762 11.762 0 00-3.522-8.513z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- INNER ORBIT (Email) -->
            <div class="absolute w-[300px] h-[300px] rounded-full border border-[rgba(244,201,93,0.4)] orbit-cw-3">
                <div class="absolute -top-6 left-1/2 -ml-6 w-12 h-12">
                    <a href="mailto:gilbertamani29@gmail.com" class="w-full h-full rounded-full bg-[#1a120b] border-2 border-[rgba(244,201,93,0.8)] text-[var(--accent-gold)] flex items-center justify-center shadow-[0_0_20px_rgba(244,201,93,0.6)] orbit-ccw-3 backdrop-blur-md transition-transform hover:scale-110">
                        <svg class="h-5 w-5 overflow-visible" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <rect class="mail-paper" x="6" y="8" width="12" height="6" fill="currentColor" stroke="none" rx="1" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8v10a2 2 0 002 2h12a2 2 0 002-2V8" />
                            <path class="mail-flap" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8l6.9 4.6a2 2 0 002.2 0L20 8" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
        <div class="grid gap-12 lg:gap-16 lg:grid-cols-[1fr_0.85fr]">
            
            <div class="reveal-section backdrop-blur-sm rounded-3xl sm:rounded-[2.5rem] py-4 sm:p-0">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-widest text-[var(--accent-orange)]">Contact</span>
                <h2 class="mt-3 sm:mt-4 text-3xl sm:text-4xl font-black leading-tight lg:text-5xl">Let&apos;s build something clear, memorable, and useful.</h2>
                <p class="mt-4 sm:mt-6 text-base sm:text-lg leading-7 sm:leading-8 text-[var(--text-soft)]">
                    If you need a website, a visual identity, or both, I&apos;m open to freelance projects and creative collaborations. Drop me a message below.
                </p>

                <!-- SUCCESS ALERT -->
                <div id="success-alert" class="mt-6 hidden justify-between items-center gap-3 rounded-2xl border border-[rgba(0,209,178,0.4)] bg-[rgba(0,209,178,0.1)] p-4 text-sm font-medium text-[var(--accent-teal)] backdrop-blur-md transition-opacity duration-500 opacity-0">
                    <div class="flex items-center gap-3">
                        <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span id="success-message-text"></span>
                    </div>
                    <span id="countdown-timer" class="text-xs font-bold px-2 py-1 bg-[rgba(0,209,178,0.2)] rounded-lg"></span>
                </div>

                <form id="contactForm" action="{{ url('/send-message') }}" method="POST" class="mt-8 sm:mt-10 grid gap-5 sm:gap-6">
                    @csrf 
                    <div class="grid gap-5 sm:gap-6 md:grid-cols-2">
                        <div>
                            <label for="name" class="block text-xs sm:text-sm font-semibold text-[var(--text-main)]">Your Name</label>
                            <input type="text" name="name" id="name" placeholder="Ashley Kelon" required class="mt-2 block w-full rounded-xl sm:rounded-2xl border border-[var(--line)] bg-[#1a120b] px-4 py-3 sm:py-3.5 text-sm sm:text-base text-[var(--text-main)] outline-none transition focus:border-[var(--accent-gold)] focus:ring-1 focus:ring-[var(--accent-gold)]">
                        </div>
                        <div>
                            <label for="email" class="block text-xs sm:text-sm font-semibold text-[var(--text-main)]">Your Email</label>
                            <input type="email" name="email" id="email" placeholder="ashleykelon@example.com" required class="mt-2 block w-full rounded-xl sm:rounded-2xl border border-[var(--line)] bg-[#1a120b] px-4 py-3 sm:py-3.5 text-sm sm:text-base text-[var(--text-main)] outline-none transition focus:border-[var(--accent-gold)] focus:ring-1 focus:ring-[var(--accent-gold)]">
                        </div>
                    </div>
                    <div>
                        <label for="message" class="block text-xs sm:text-sm font-semibold text-[var(--text-main)]">Message</label>
                        <textarea name="message" id="message" rows="4" placeholder="Tell me about your project..." required class="mt-2 block w-full rounded-xl sm:rounded-2xl border border-[var(--line)] bg-[#1a120b] px-4 py-3 sm:py-3.5 text-sm sm:text-base text-[var(--text-main)] outline-none transition focus:border-[var(--accent-gold)] focus:ring-1 focus:ring-[var(--accent-gold)]"></textarea>
                    </div>
                    <div>
                        <button id="submitBtn" type="submit" class="inline-flex items-center justify-center gap-2 rounded-full bg-[var(--text-main)] px-6 sm:px-8 py-3.5 sm:py-4 text-sm font-bold text-[var(--bg-main)] transition hover:bg-[var(--accent-gold)] hover:text-[#1b1207] w-full sm:w-auto">
                            <span>Send Message</span>
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </button>
                    </div>
                </form>
            </div>

            <div class="grid content-start gap-4 sm:gap-5 lg:pt-12 reveal-section" style="transition-delay: 200ms;">
                
                <a href="mailto:gilbertamani29@gmail.com" class="block relative overflow-hidden rounded-3xl sm:rounded-[2rem] border border-[rgba(244,201,93,0.3)] bg-gradient-to-br from-[rgba(244,201,93,0.15)] to-[rgba(244,201,93,0.02)] p-4 sm:p-6 backdrop-blur-xl shadow-[0_8px_32px_rgba(244,201,93,0.15)] transition-all duration-300 hover:-translate-y-1 hover:border-[rgba(244,201,93,0.6)] hover:from-[rgba(244,201,93,0.25)] hover:shadow-[0_16px_40px_rgba(244,201,93,0.3)]">
                    <div class="flex items-center gap-3 sm:gap-4 relative z-10">
                        <div class="relative flex h-12 w-12 sm:h-14 sm:w-14 shrink-0 items-center justify-center">
                            <span class="absolute inline-flex h-full w-full rounded-xl sm:rounded-2xl bg-[rgba(244,201,93,0.4)] wave-slow"></span>
                            <div class="relative flex h-full w-full items-center justify-center rounded-xl sm:rounded-2xl border border-[rgba(244,201,93,0.2)] bg-[rgba(244,201,93,0.1)] text-[var(--accent-gold)] shadow-inner backdrop-blur-md">
                                <svg class="h-5 w-5 sm:h-6 sm:w-6 overflow-visible" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <rect class="mail-paper" x="6" y="8" width="12" height="6" fill="currentColor" stroke="none" rx="1" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8v10a2 2 0 002 2h12a2 2 0 002-2V8" />
                                    <path class="mail-flap" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8l6.9 4.6a2 2 0 002.2 0L20 8" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <p class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-[var(--text-soft)]">Email</p>
                            <p class="mt-0.5 sm:mt-1 text-sm sm:text-lg font-semibold text-[var(--text-main)] drop-shadow-md break-all">gilbertamani29@gmail.com</p>
                        </div>
                    </div>
                </a>

                <!-- WHATSAPP CARD WITH UPDATED ICON -->
                <a href="https://wa.me/255672454057" target="_blank" class="relative block overflow-hidden rounded-3xl sm:rounded-[2rem] border border-[rgba(0,209,178,0.3)] bg-gradient-to-br from-[rgba(0,209,178,0.15)] to-[rgba(0,209,178,0.02)] p-4 sm:p-6 backdrop-blur-xl shadow-[0_8px_32px_rgba(0,209,178,0.15)] transition-all duration-300 hover:-translate-y-1 hover:border-[rgba(0,209,178,0.6)] hover:from-[rgba(0,209,178,0.25)] hover:shadow-[0_16px_40px_rgba(0,209,178,0.3)]">
                    <div class="flex items-center gap-3 sm:gap-4 relative z-10">
                        <div class="relative flex h-12 w-12 sm:h-14 sm:w-14 shrink-0 items-center justify-center">
                            <span class="absolute inline-flex h-full w-full rounded-xl sm:rounded-2xl bg-[rgba(0,209,178,0.4)] wave-slow"></span>
                            <div class="relative flex h-full w-full items-center justify-center rounded-xl sm:rounded-2xl border border-[rgba(0,209,178,0.2)] bg-[rgba(0,209,178,0.1)] text-[var(--accent-teal)] shadow-inner backdrop-blur-md">
                                <svg class="h-6 w-6 wa-shake" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.414 0 .018 5.393 0 12.03c0 2.123.554 4.197 1.604 6.046L0 24l6.149-1.613a11.77 11.77 0 005.897 1.57h.005c6.633 0 12.032-5.397 12.035-12.034a11.762 11.762 0 00-3.522-8.513z"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <p class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-[var(--text-soft)]">WhatsApp</p>
                            <p class="mt-0.5 sm:mt-1 text-sm sm:text-lg font-semibold text-[var(--text-main)] drop-shadow-md">+255672454057</p>
                        </div>
                    </div>
                </a>

                <div class="relative overflow-hidden rounded-3xl sm:rounded-[2rem] border border-[rgba(255,122,0,0.3)] bg-gradient-to-br from-[rgba(255,122,0,0.15)] to-[rgba(255,122,0,0.02)] p-4 sm:p-6 backdrop-blur-xl shadow-[0_8px_32px_rgba(255,122,0,0.15)] transition-all duration-300 hover:-translate-y-1 hover:border-[rgba(255,122,0,0.6)] hover:from-[rgba(255,122,0,0.25)] hover:shadow-[0_16px_40px_rgba(255,122,0,0.3)]">
                    <div class="flex items-center gap-3 sm:gap-4 relative z-10">
                        <div class="relative flex h-12 w-12 sm:h-14 sm:w-14 shrink-0 items-center justify-center">
                            <span class="absolute inline-flex h-full w-full rounded-xl sm:rounded-2xl bg-[rgba(255,122,0,0.4)] wave-slow" style="animation-delay: 1s;"></span>
                            <div class="relative flex h-full w-full items-center justify-center rounded-xl sm:rounded-2xl border border-[rgba(255,122,0,0.2)] bg-[rgba(255,122,0,0.1)] text-[var(--accent-orange)] shadow-inner backdrop-blur-md">
                                <svg class="loc-bounce h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            </div>
                        </div>
                        <div>
                            <p class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-[var(--text-soft)]">Location</p>
                            <p class="mt-0.5 sm:mt-1 text-sm sm:text-lg font-semibold text-[var(--text-main)] drop-shadow-md">Moshi-Kilimanjaro</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ERROR TOAST WITH CLOSE BUTTON -->
<div id="custom-error-alert" class="fixed bottom-10 left-1/2 -translate-x-1/2 z-[9999] flex items-center justify-between gap-4 rounded-2xl border border-[var(--accent-orange)] bg-[#1a120b] px-6 py-4 shadow-[0_10px_30px_rgba(255,122,0,0.2)] transition-all duration-500 translate-y-24 opacity-0 pointer-events-none min-w-[320px] max-w-[90vw]">
    
    <div class="flex items-center gap-4">
        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[rgba(255,122,0,0.1)] text-[var(--accent-orange)]">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>
        <div>
            <p class="text-xs font-bold text-[var(--accent-gold)] uppercase tracking-wider">Notice</p>
            <p id="error-message-text" class="text-sm text-[var(--text-soft)] leading-snug"></p>
        </div>
    </div>

    <button type="button" onclick="closeErrorToast()" class="p-1.5 hover:bg-white/10 rounded-xl transition-colors">
        <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const successAlert = document.getElementById('success-alert');
        const successMessageText = document.getElementById('success-message-text');
        const countdownTimer = document.getElementById('countdown-timer');
        
        const errorAlert = document.getElementById('custom-error-alert');
        const errorMessageText = document.getElementById('error-message-text');
        
        let countdownInterval;
        let toastTimeout; 

        function showErrorToast(message) {
            errorMessageText.innerText = message;
            errorAlert.classList.remove('pointer-events-none', 'translate-y-24', 'opacity-0');
            errorAlert.classList.add('translate-y-0', 'opacity-100');
            clearTimeout(toastTimeout);
            toastTimeout = setTimeout(() => { closeErrorToast(); }, 15000); 
        }

        window.closeErrorToast = function() {
            errorAlert.classList.remove('translate-y-0', 'opacity-100');
            errorAlert.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
        };

        form.addEventListener('submit', function(e) {
            e.preventDefault(); 
            const originalBtnHtml = submitBtn.innerHTML;
            submitBtn.innerHTML = `<span class="flex items-center gap-2">Sending... <svg class="h-4 w-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg></span>`;
            submitBtn.disabled = true;

            successAlert.classList.add('hidden');
            successAlert.classList.remove('flex', 'opacity-100');
            successAlert.classList.add('opacity-0');
            clearInterval(countdownInterval);

            fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
            })
            .then(async response => {
                const data = await response.json(); 
                if (response.ok) {
                    successMessageText.innerText = data.message;
                    successAlert.classList.remove('hidden');
                    successAlert.classList.add('flex');
                    setTimeout(() => { successAlert.classList.remove('opacity-0'); successAlert.classList.add('opacity-100'); }, 10);
                    form.reset(); 
                    let timeLeft = 10;
                    countdownTimer.innerText = `${timeLeft}s`;
                    countdownInterval = setInterval(() => {
                        timeLeft--;
                        countdownTimer.innerText = `${timeLeft}s`;
                        if (timeLeft <= 0) {
                            clearInterval(countdownInterval); 
                            successAlert.classList.remove('opacity-100');
                            successAlert.classList.add('opacity-0');
                            setTimeout(() => { successAlert.classList.add('hidden'); successAlert.classList.remove('flex'); }, 500); 
                        }
                    }, 1000); 
                } else if (response.status === 422) {
                    let errorList = data.errors ? Object.values(data.errors).flat().join(', ') : data.message;
                    showErrorToast(errorList || "Please verify your input.");
                } else if (response.status === 419) {
                    showErrorToast("Session expired. Please refresh the page.");
                } else {
                    showErrorToast(data.message || "An unexpected error occurred.");
                }
            })
            .catch(error => { showErrorToast('Connection error. Please check your internet.'); })
            .finally(() => {
                submitBtn.innerHTML = originalBtnHtml;
                submitBtn.disabled = false;
            });
        });
    });
</script>
<meta charset="UTF-8">
<!-- Tumeongeza viewport-fit=cover kwa ajili ya simu -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<title>Gilbert | Bold Creative Afro-Tech</title>

<!-- FAVICON YAKO -->
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

<!-- SEO Meta Tags -->
<meta name="description" content="Gilbert is a Software Developer and Graphic Designer based in Tanzania. I build clean digital products and strong visual identities.">
<meta name="keywords" content="Software Developer, Graphic Designer, Laravel, Web Development, Branding, Tanzania">
<meta name="author" content="Gilbert">

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Theme Logic -->
<script>
    (() => {
        const savedTheme = localStorage.getItem('portfolio-theme');
        document.documentElement.setAttribute('data-theme', savedTheme ?? 'dark');
    })();
</script>

<!-- STYLES ZAKO -->
<style>
    :root {
        --bg-main: #120f0a;
        --bg-section: #22170d;
        --bg-soft: #2d1f10;
        --bg-card: rgba(255, 255, 255, 0.05);
        --bg-card-solid: rgba(255, 255, 255, 0.08);
        --text-main: #ffffff;
        --text-soft: #d6cdc2;
        --text-muted: #b8aa98;
        --line: rgba(255, 255, 255, 0.12);
        --accent-gold: #f4c95d;
        --accent-orange: #ff7a00;
        --accent-teal: #00d1b2;
        --surface-light: #f6ead8;
        --surface-light-2: #f8f1e7;
        --surface-text: #22170d;
        --surface-text-soft: #6a5440;
        --surface-line: #ecd9c5;
    }

    html[data-theme="light"] {
        --bg-main: #f8f1e7;
        --bg-section: #f6ead8;
        --bg-soft: #fffaf3;
        --bg-card: rgba(255, 255, 255, 0.72);
        --bg-card-solid: rgba(255, 255, 255, 0.92);
        --text-main: #22170d;
        --text-soft: #5d4836;
        --text-muted: #86684d;
        --line: rgba(34, 23, 13, 0.10);
        --surface-light: #fff8ef;
        --surface-light-2: #ffffff;
        --surface-text: #22170d;
        --surface-text-soft: #6a5440;
        --surface-line: #ead7c3;
    }

    html {
        scroll-behavior: smooth;
        scrollbar-width: thin;
        scrollbar-color: var(--line) var(--bg-main);
    }

    ::-webkit-scrollbar {
        width: 8px;
    }
    ::-webkit-scrollbar-track {
        background: var(--bg-main);
    }
    ::-webkit-scrollbar-thumb {
        background: var(--line);
        border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: var(--accent-gold);
    }

    .page-shell { isolation: isolate; }
    .nav-shell.scrolled {
        background: color-mix(in srgb, var(--bg-main) 78%, transparent);
        border-color: color-mix(in srgb, var(--accent-gold) 16%, var(--line));
        box-shadow: 0 16px 44px rgba(0, 0, 0, 0.15);
    }
    
    .float-slow { animation: floatSlow 7s ease-in-out infinite; }
    .float-medium { animation: floatMedium 5s ease-in-out infinite; }
    .float-delay { animation: floatDelay 8s ease-in-out infinite; }

    @keyframes floatSlow {
        0%, 100% { transform: translate3d(0, 0, 0); }
        50% { transform: translate3d(0, -18px, 0); }
    }

    @keyframes floatMedium {
        0%, 100% { transform: translate3d(0, 0, 0); }
        50% { transform: translate3d(0, -12px, 0); }
    }

    @keyframes floatDelay {
        0%, 100% { transform: translate3d(0, 0, 0); }
        50% { transform: translate3d(0, -24px, 0); }
    }

    .hero-elem {
        opacity: 0;
        transform: translateY(30px);
        filter: blur(5px);
        transition: opacity 800ms ease, transform 1000ms cubic-bezier(0.22, 1, 0.36, 1), filter 1000ms ease;
    }

    body.is-loaded .hero-elem {
        opacity: 1;
        transform: translateY(0);
        filter: blur(0);
    }

    .delay-100 { transition-delay: 100ms; }
    .delay-200 { transition-delay: 200ms; }
    .delay-300 { transition-delay: 300ms; }
    .delay-400 { transition-delay: 400ms; }
    .delay-500 { transition-delay: 500ms; }

    .reveal-section {
        opacity: 0;
        transform: translateY(40px);
        transition: all 1s ease-out;
    }

    .reveal-section.is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .glass-badge {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    #gridCanvas {
        position: fixed;
        left: 0;
        top: 0;
        width: 100vw;
        height: 100vh;
        z-index: 0; /* IMERUDI KUWA 0 ILI CANVAS IONEKANE VIZURI */
        pointer-events: none;
    }

    .mobile-nav-panel {
        opacity: 0;
        transform: translateY(-10px);
        pointer-events: none;
        transition: opacity 250ms ease, transform 250ms ease;
    }

    .mobile-nav-panel.is-open {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    .floating-badge-left,
    .floating-badge-right {
        transition: transform 300ms ease;
    }

    .skill-progress {
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 1.2s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .reveal-section.is-visible .skill-progress {
        transform: scaleX(1);
    }
</style>
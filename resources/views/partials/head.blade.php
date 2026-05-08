<!-- resources/views/partials/head.blade.php -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gilbert | Bold Creative Afro-Tech</title>

<!-- SEO Meta Tags -->
<meta name="description" content="Gilbert is a Web Developer and Graphic Designer based in Tanzania. I build clean digital products and strong visual identities.">
<meta name="keywords" content="Web Developer, Graphic Designer, Laravel, Web Development, Branding, Tanzania">
<meta name="author" content="Gilbert">

<!-- Open Graph / Social Media Meta Tags -->
<meta property="og:title" content="Gilbert | Bold Creative Afro-Tech">
<meta property="og:description" content="Code with clarity. Design with impact. Modern web development and brand identity.">
<meta property="og:image" content="{{ asset('images/og-image.jpg') }}"> <!-- Utaweka picha yako nzuri hapa badae -->
<meta property="og:url" content="https://gilbert.co.tz">
<meta property="og:type" content="website">

<!-- Pro-Tip: Kwa Development, CDN ni sawa. Wakati wa kuweka live (production), ni vizuri kutumia Vite ku-compile CSS yako -->
<script src="https://cdn.tailwindcss.com"></script>

<script>
    (() => {
        const savedTheme = localStorage.getItem('portfolio-theme');
        document.documentElement.setAttribute('data-theme', savedTheme ?? 'dark');
    })();
</script>

<style>
    /* CSS Variables zetu za mwanzo */
    :root, html[data-theme="dark"] {
        --bg-main: #120f0a;
        --bg-section: #22170d;
        --bg-soft: #2d1f10;
        --bg-card: rgba(255, 255, 255, 0.05);
        --text-main: #ffffff;
        --text-soft: #d6cdc2;
        --text-muted: #b8aa98;
        --line: rgba(255, 255, 255, 0.12);
        --accent-gold: #f4c95d;
        --accent-orange: #ff7a00;
        --accent-teal: #00d1b2;
    }
    
    /* REKEBISHO LIKO HAPA: Tumeiwekea mabano na variables za Light Mode */
    html[data-theme="light"] {
        --bg-main: #ffffff;
        --bg-section: #f3f4f6; /* Rangi ya kijivu hafifu */
        --bg-soft: #e5e7eb;
        --bg-card: #ffffff;
        --text-main: #111827; /* Rangi nyeusi */
        --text-soft: #4b5563;
        --text-muted: #6b7280;
        --line: #e5e7eb;
        --accent-gold: #d97706;
        --accent-orange: #ea580c;
        --accent-teal: #0d9488;
    }
    
    html { scroll-behavior: smooth; }

    /* CUSTOM SCROLLBAR (Idea namba 8) */
    ::-webkit-scrollbar {
        width: 10px;
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

    /* Zile animations zetu zote za mwanzo zinabaki hapa... */
</style>
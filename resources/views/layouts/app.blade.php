<!DOCTYPE html>
<html lang="sw" data-theme="dark" class="dark">
<head>
    {{-- 
      Hapa tunaita lile faili letu tulilolisafisha ambalo lina:
      1. Meta tags zote
      2. Tailwind CDN
      3. CSS Variables ZOTE za Dark Mode pekee (Zile za Light tunazitoa)
    --}}
    @include('partials.head')

    {{-- Hii ni ile trick yako nzuri ya kuzuia transition flashing wakati page inaload --}}
    <style>
        body:not(.is-loaded) * {
            transition: none !important;
        }
    </style>

    {{-- HII NDIO SCRIPT YA ALPINE.JS KWA AJILI YA LIGHTBOX KWENYE GALLERY --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-[var(--bg-main)] text-[var(--text-main)] antialiased selection:bg-[var(--accent-gold)] selection:text-[#1b1207]">

    <div id="page-shell" class="page-shell relative">

        <!-- TOP WRAPPER: Hero + About pekee -->
        <div class="relative w-full overflow-hidden bg-[var(--bg-main)]">

            <!-- Canvas yetu na z-0 kama tulivyokubaliana -->
            <canvas id="gridCanvas" class="absolute inset-0 h-full w-full z-0 pointer-events-none"></canvas>

            <div class="absolute inset-0 z-0 h-full w-full pointer-events-none bg-[linear-gradient(to_right,rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:72px_72px] opacity-10"></div>

            <div class="absolute -left-20 top-20 z-0 h-96 w-96 rounded-full bg-[var(--accent-orange)]/10 blur-[100px] pointer-events-none"></div>
            <div class="absolute right-10 top-40 z-0 h-96 w-96 rounded-full bg-[var(--accent-teal)]/10 blur-[100px] pointer-events-none"></div>

            @include('partials.navbar')

            <main class="relative z-10 pt-32 lg:pt-40">
                @include('partials.hero')
                @include('partials.about') 
            </main>
        </div>

        <!-- BOTTOM SECTIONS -->
        <div class="relative z-10 bg-[var(--bg-main)]">
            @include('partials.skills')
            @include('partials.services')
            @include('partials.projects')
            @include('partials.gallery')
            @include('partials.process')
            @include('partials.contact')
        </div>

        @include('partials.footer')
    </div>

    @include('partials.scripts')

</body>
</html>
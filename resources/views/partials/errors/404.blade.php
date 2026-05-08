<!-- resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="sw" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | Page Not Found - Gilbert</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --bg-main: #120f0a;
            --text-main: #ffffff;
            --text-soft: #d6cdc2;
            --accent-gold: #f4c95d;
            --accent-orange: #ff7a00;
        }
        /* Simple floating animation kwa ajili ya background elements */
        @keyframes float {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-20px) scale(1.05); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-[var(--bg-main)] text-[var(--text-main)] antialiased flex items-center justify-center min-h-screen relative overflow-hidden">
    
    <!-- Ambient Background Glows (Inaleta muonekano wa kisasa) -->
    <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-[var(--accent-orange)]/10 rounded-full blur-[100px] animate-float"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-[var(--accent-gold)]/10 rounded-full blur-[120px] animate-pulse"></div>

    <div class="text-center px-6 relative z-10 max-w-2xl mx-auto">
        
        <!-- 404 Text - Imekuzwa na kupewa Drop Shadow -->
        <h1 class="text-[8rem] md:text-[12rem] leading-none font-black tracking-tighter bg-gradient-to-br from-[var(--accent-orange)] via-[var(--accent-gold)] to-yellow-200 bg-clip-text text-transparent drop-shadow-2xl">
            404
        </h1>
        
        <div class="mt-4 md:mt-8">
            <h2 class="text-2xl md:text-4xl font-bold tracking-tight text-[var(--text-main)]">
                Umekosea Njia 🚧
            </h2>
            <p class="mt-4 text-base md:text-lg text-[var(--text-soft)]">
                The page you are looking for doesn't exist, has been moved, or is currently under construction.
            </p>
        </div>
        
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
            <!-- Primary Button (Back to Home) -->
            <a href="{{ url('/') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-full bg-[var(--text-main)] px-8 py-4 text-sm font-bold text-[var(--bg-main)] transition-all duration-300 hover:bg-[var(--accent-gold)] hover:text-[#1b1207] hover:scale-105 hover:shadow-[0_0_20px_rgba(244,201,93,0.4)]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Home
            </a>
            
            <!-- Secondary Button (View Projects fallback) -->
            <a href="{{ url('/#projects') }}" class="w-full sm:w-auto inline-flex items-center justify-center rounded-full border border-[var(--text-soft)]/30 bg-transparent px-8 py-4 text-sm font-bold text-[var(--text-soft)] transition-all duration-300 hover:border-[var(--accent-orange)] hover:text-[var(--accent-orange)] hover:bg-[var(--accent-orange)]/5">
                View My Work
            </a>
        </div>

    </div>

</body>
</html>
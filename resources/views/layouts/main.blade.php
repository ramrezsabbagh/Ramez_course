<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sentrix')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui']
                    },
                    colors: {
                        primary: '#6B21A8',
                        secondary: '#2563EB'
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans bg-gray-50 text-gray-900 antialiased">
    @php($isArabic = app()->getLocale() === 'ar')
    <header class="relative z-50 bg-white/80 backdrop-blur border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between {{ $isArabic ? 'flex-row-reverse' : '' }}">
            <a href="{{ url(app()->getLocale()) }}" class="flex items-center gap-2 {{ $isArabic ? 'flex-row-reverse text-right' : '' }}">
                <span class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white font-bold">S</span>
                <div>
                    <p class="text-lg font-semibold text-gray-900">Sentrix</p>
                    <p class="text-sm text-gray-500">{{ $isArabic ? 'شبكات • كاميرات • خوادم' : 'Networks • Cameras • Servers' }}</p>
                </div>
            </a>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium {{ $isArabic ? 'flex-row-reverse' : '' }}">
                <a href="#home" class="text-gray-700 hover:text-primary transition">{{ $isArabic ? 'الرئيسية' : 'Home' }}</a>
                <a href="#services" class="text-gray-700 hover:text-primary transition">{{ $isArabic ? 'الخدمات' : 'Services' }}</a>
                <a href="#projects" class="text-gray-700 hover:text-primary transition">{{ $isArabic ? 'المشاريع' : 'Projects' }}</a>
                <a href="#why" class="text-gray-700 hover:text-primary transition">{{ $isArabic ? 'لماذا سينتريكس' : 'Why Sentrix' }}</a>
                <a href="#contact" class="text-gray-700 hover:text-primary transition">{{ $isArabic ? 'تواصل معنا' : 'Contact' }}</a>
            </nav>
            <div class="flex items-center gap-4 {{ $isArabic ? 'flex-row-reverse' : '' }}">
                <a href="{{ url('ar') }}" class="text-sm font-semibold {{ $isArabic ? 'text-primary' : 'text-gray-500 hover:text-primary transition' }}">عربي</a>
                <span class="text-gray-300">|</span>
                <a href="{{ url('en') }}" class="text-sm font-semibold {{ !$isArabic ? 'text-primary' : 'text-gray-500 hover:text-primary transition' }}">EN</a>
                <button class="md:hidden text-gray-700 focus:outline-none" id="mobile-nav-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-nav" class="md:hidden hidden border-t border-gray-100">
            <nav class="px-6 py-4 space-y-4 text-sm font-medium {{ $isArabic ? 'text-right' : 'text-left' }}">
                <a href="#home" class="block text-gray-700 hover:text-primary transition">{{ $isArabic ? 'الرئيسية' : 'Home' }}</a>
                <a href="#services" class="block text-gray-700 hover:text-primary transition">{{ $isArabic ? 'الخدمات' : 'Services' }}</a>
                <a href="#projects" class="block text-gray-700 hover:text-primary transition">{{ $isArabic ? 'المشاريع' : 'Projects' }}</a>
                <a href="#why" class="block text-gray-700 hover:text-primary transition">{{ $isArabic ? 'لماذا سينتريكس' : 'Why Sentrix' }}</a>
                <a href="#contact" class="block text-gray-700 hover:text-primary transition">{{ $isArabic ? 'تواصل معنا' : 'Contact' }}</a>
            </nav>
        </div>
    </header>

    <main class="relative">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-6 py-12 grid gap-8 md:grid-cols-3 {{ $isArabic ? 'text-right' : '' }}">
            <div class="space-y-3">
                <h3 class="text-xl font-semibold text-white">Sentrix</h3>
                <p>{{ $isArabic ? 'شركة تقنية متخصصة في حلول الشبكات، أنظمة المراقبة، وإدارة الخوادم.' : 'Technology company specializing in network solutions, surveillance systems, and server management.' }}</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">{{ $isArabic ? 'روابط سريعة' : 'Quick Links' }}</h3>
                <ul class="space-y-2">
                    <li><a href="#home" class="hover:text-white transition">{{ $isArabic ? 'الرئيسية' : 'Home' }}</a></li>
                    <li><a href="#services" class="hover:text-white transition">{{ $isArabic ? 'الخدمات' : 'Services' }}</a></li>
                    <li><a href="#projects" class="hover:text-white transition">{{ $isArabic ? 'المشاريع' : 'Projects' }}</a></li>
                    <li><a href="#why" class="hover:text-white transition">{{ $isArabic ? 'لماذا سينتريكس' : 'Why Sentrix' }}</a></li>
                    <li><a href="#contact" class="hover:text-white transition">{{ $isArabic ? 'تواصل معنا' : 'Contact' }}</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">{{ $isArabic ? 'تابعنا' : 'Follow Us' }}</h3>
                <div class="flex gap-4 {{ $isArabic ? 'flex-row-reverse' : '' }}">
                    <a href="https://www.linkedin.com" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 8.75h4v12.5H3zM9.5 8.75h3.83v1.71h.06c.53-1 1.82-2.06 3.75-2.06 4 0 4.74 2.63 4.74 6.05v6.55h-4v-5.81c0-1.39-.03-3.18-1.94-3.18-1.95 0-2.25 1.52-2.25 3.08v5.91h-4z" />
                        </svg>
                    </a>
                    <a href="https://www.facebook.com" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12a10 10 0 10-11.5 9.95v-7.05H8v-2.9h2.5V9.5c0-2.45 1.45-3.8 3.67-3.8 1.06 0 2.17.19 2.17.19v2.4h-1.22c-1.2 0-1.58.75-1.58 1.52v1.82H16.5l-.4 2.9h-2.23v7.05A10 10 0 0022 12z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center transition" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 7a5 5 0 100 10 5 5 0 000-10zm0 8.2A3.2 3.2 0 1115.2 12 3.2 3.2 0 0112 15.2zm5.5-8.7a1.2 1.2 0 11-1.2 1.2 1.2 1.2 0 011.2-1.2z" />
                            <path d="M17.8 4H6.2A2.2 2.2 0 004 6.2v11.6A2.2 2.2 0 006.2 20h11.6a2.2 2.2 0 002.2-2.2V6.2A2.2 2.2 0 0017.8 4zm.7 14.4a.7.7 0 01-.7.7H6.2a.7.7 0 01-.7-.7V6.2a.7.7 0 01.7-.7h11.6a.7.7 0 01.7.7z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="border-t border-white/10 py-4">
            <p class="text-center text-sm text-gray-500">© 2025 Sentrix — {{ $isArabic ? 'جميع الحقوق محفوظة' : 'All Rights Reserved' }}</p>
        </div>
    </footer>

    <script>
        const toggle = document.getElementById('mobile-nav-toggle');
        const mobileNav = document.getElementById('mobile-nav');
        if (toggle && mobileNav) {
            toggle.addEventListener('click', () => {
                mobileNav.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>

@extends('layouts.main')

@section('title', app()->getLocale() === 'ar' ? 'سينتريكس - شبكات، كاميرات، خوادم' : 'Sentrix - Networks, Cameras, Servers')

@section('content')
@php($isArabic = app()->getLocale() === 'ar')
<section id="home" class="relative min-h-screen flex items-center bg-fixed bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1581093588401-22d07c8a2f5b?auto=format&fit=crop&w=1600&q=80');">
    <div class="absolute inset-0 bg-gradient-to-r from-purple-900/80 to-blue-700/70"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-6 py-32 w-full">
        <div class="flex flex-col md:flex-row {{ $isArabic ? 'md:flex-row-reverse text-right' : 'text-left' }} items-center gap-16">
            <div class="flex-1 space-y-6">
                <h1 class="text-5xl md:text-6xl font-bold text-white leading-tight">
                    {{ $isArabic ? 'سينتريكس — شبكات • كاميرات • خوادم' : 'Sentrix — Networks • Cameras • Servers' }}
                </h1>
                <p class="text-xl text-gray-200">
                    {{ $isArabic ? 'حلول ذكية للبنية التحتية التقنية' : 'Intelligent solutions for modern infrastructure' }}
                </p>
                <a href="#services" class="mt-8 inline-block bg-gradient-to-r from-purple-600 to-blue-500 hover:from-purple-700 hover:to-blue-600 text-white font-semibold py-3 px-6 rounded-full shadow-lg transition">
                    {{ $isArabic ? 'اكتشف الخدمات' : 'Explore Services' }}
                </a>
            </div>
            <div class="flex-1">
                <div class="bg-white/10 backdrop-blur rounded-3xl p-8 shadow-2xl border border-white/10">
                    <h2 class="text-2xl font-semibold text-white mb-4 {{ $isArabic ? 'text-right' : 'text-left' }}">
                        {{ $isArabic ? 'نقود التحول الرقمي' : 'Driving Digital Transformation' }}
                    </h2>
                    <p class="text-gray-200 leading-relaxed {{ $isArabic ? 'text-right' : 'text-left' }}">
                        {{ $isArabic ? 'نقدم حلولاً متكاملة في مجال الشبكات، أنظمة المراقبة، وإدارة الخوادم لتطوير أعمالكم بأعلى معايير الاعتمادية والأمان.' : 'We deliver integrated solutions across networking, surveillance systems, and server management to elevate your operations with reliability and security.' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 text-white flex flex-col items-center gap-2">
        <span class="text-xs tracking-widest uppercase">{{ $isArabic ? 'استمر للأسفل' : 'Scroll Down' }}</span>
        <span class="w-10 h-10 border border-white/60 rounded-full flex items-center justify-center animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7" />
            </svg>
        </span>
    </div>
</section>

<section id="services" class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">{{ $isArabic ? 'خدماتنا' : 'Our Services' }}</h2>
            <p class="mt-3 text-gray-600">{{ $isArabic ? 'حلول متكاملة لتقوية البنية التقنية لمنشأتكم.' : 'Comprehensive solutions to strengthen your technical infrastructure.' }}</p>
        </div>
        @php
            $services = [
                [
                    'title' => $isArabic ? 'تصميم الشبكات' : 'Network Design',
                    'description' => $isArabic ? 'تصميم شبكات موثوقة وقابلة للتوسع مع أحدث التقنيات.' : 'Designing scalable and reliable networks using cutting-edge technology.',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6l4 2" /></svg>'
                ],
                [
                    'title' => $isArabic ? 'أنظمة المراقبة' : 'CCTV Setup',
                    'description' => $isArabic ? 'حلول مراقبة متقدمة مع تحليلات ذكية ورؤية واضحة.' : 'Advanced surveillance solutions with smart analytics and crystal-clear vision.',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553 2.276A2 2 0 0120 14.09V17a2 2 0 01-2 2h-4" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 10h16M4 14h8m-8 4h8" /></svg>'
                ],
                [
                    'title' => $isArabic ? 'إدارة الخوادم' : 'Server Maintenance',
                    'description' => $isArabic ? 'إدارة شاملة للخوادم لضمان الأداء العالي والجاهزية.' : 'End-to-end server management ensuring performance and uptime.',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7h16M4 12h16M4 17h16" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7v10" /></svg>'
                ],
                [
                    'title' => $isArabic ? 'الأمن السيبراني' : 'Cybersecurity',
                    'description' => $isArabic ? 'حماية شاملة للبنية الرقمية ضد التهديدات والهجمات.' : 'Comprehensive protection for your digital infrastructure against threats.',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3l8 4v5c0 5-3.5 9.5-8 10-4.5-.5-8-5-8-10V7l8-4z" /></svg>'
                ],
            ];
        @endphp
        <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($services as $service)
                <div class="bg-white shadow-lg rounded-xl p-8 hover:shadow-xl transition border border-gray-100">
                    <div class="mb-6">
                        {!! $service['icon'] !!}
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $service['title'] }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="projects" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">{{ $isArabic ? 'مشاريعنا' : 'Our Projects' }}</h2>
            <p class="mt-3 text-gray-600">{{ $isArabic ? 'نماذج من مشاريعنا الناجحة في مختلف القطاعات.' : 'Highlights from successful deployments across industries.' }}</p>
        </div>
        <div class="grid gap-8 md:grid-cols-3">
            @php
                $projects = [
                    [
                        'title' => $isArabic ? 'ترقية بنية الشبكات لشركة تقنية' : 'Network Upgrade for Tech Enterprise',
                        'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=900&q=80'
                    ],
                    [
                        'title' => $isArabic ? 'نظام مراقبة متكامل لمجمع تجاري' : 'Integrated Surveillance for Retail Complex',
                        'image' => 'https://images.unsplash.com/photo-1581091215367-59ab6c0b6f45?auto=format&fit=crop&w=900&q=80'
                    ],
                    [
                        'title' => $isArabic ? 'مركز بيانات آمن وموثوق' : 'Secure and Reliable Data Center',
                        'image' => 'https://images.unsplash.com/photo-1527443154391-507e9dc6c5cc?auto=format&fit=crop&w=900&q=80'
                    ],
                ];
            @endphp
            @foreach ($projects as $project)
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end">
                        <div class="p-6 text-white">
                            <h3 class="text-lg font-semibold">{{ $project['title'] }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="why" class="py-20 bg-gradient-to-r from-primary to-secondary text-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold">{{ $isArabic ? 'لماذا تختار سينتريكس؟' : 'Why Choose Sentrix?' }}</h2>
            <p class="mt-3 text-white/80">{{ $isArabic ? 'قيمنا الأساسية تعزز ثقة شركائنا وتضمن نجاح مشاريعهم.' : 'Our core values inspire trust and ensure project success.' }}</p>
        </div>
        <div class="grid gap-10 md:grid-cols-3 text-center">
            <div class="space-y-4 p-8 bg-white/10 rounded-2xl shadow-lg shadow-black/10">
                <div class="mx-auto w-14 h-14 rounded-full bg-white/20 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7l9 6 9-6-9-5-9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 7v10l9 5 9-5V7" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold">{{ $isArabic ? 'الاعتمادية العالية' : 'High Reliability' }}</h3>
                <p class="text-white/80">{{ $isArabic ? 'نهتم بتقديم حلول مستقرة ومستدامة تدعم أعمالكم دون انقطاع.' : 'We build resilient and dependable solutions that keep your operations running.' }}</p>
            </div>
            <div class="space-y-4 p-8 bg-white/10 rounded-2xl shadow-lg shadow-black/10">
                <div class="mx-auto w-14 h-14 rounded-full bg-white/20 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8h.01" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12c0 1.519-.353 2.956-.98 4.236-.628 1.28-1.538 2.402-2.642 3.272-1.103.87-2.375 1.47-3.74 1.742-1.366.272-2.78.207-4.114-.19-1.335-.397-2.556-1.11-3.557-2.065C4.967 17.04 4.2 15.59 3.879 14.02 3.558 12.45 3.694 10.83 4.273 9.33 4.851 7.83 5.85 6.5 7.166 5.5 8.482 4.5 10.064 3.873 11.726 3.68 13.389 3.487 15.07 3.735 16.6 4.4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold">{{ $isArabic ? 'الابتكار التقني' : 'Technical Innovation' }}</h3>
                <p class="text-white/80">{{ $isArabic ? 'فريقنا يواكب أحدث التقنيات لتقديم أفضل الحلول المتطورة.' : 'Our experts leverage emerging technologies to deliver cutting-edge solutions.' }}</p>
            </div>
            <div class="space-y-4 p-8 bg-white/10 rounded-2xl shadow-lg shadow-black/10">
                <div class="mx-auto w-14 h-14 rounded-full bg-white/20 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 14l-6 6-6-6" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 10l-6-6-6 6" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold">{{ $isArabic ? 'دعم مستمر' : 'Continuous Support' }}</h3>
                <p class="text-white/80">{{ $isArabic ? 'نقدم خدمات دعم متواصلة لضمان جاهزية الأنظمة طوال الوقت.' : 'We provide ongoing support services to guarantee system readiness around the clock.' }}</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-20 bg-gradient-to-br from-blue-900 via-primary to-secondary text-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid gap-12 lg:grid-cols-2 items-start">
            <div class="bg-white/10 backdrop-blur rounded-3xl p-8 shadow-2xl border border-white/10">
                <h2 class="text-3xl font-semibold mb-6">{{ $isArabic ? 'تواصل معنا' : 'Get in Touch' }}</h2>
                <p class="text-white/80 mb-8">{{ $isArabic ? 'نتطلع إلى مناقشة احتياجاتكم التقنية وتقديم الحلول المناسبة.' : 'We look forward to discussing your technical needs and crafting tailored solutions.' }}</p>
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium mb-2" for="name">{{ $isArabic ? 'الاسم الكامل' : 'Full Name' }}</label>
                        <input type="text" id="name" name="name" class="w-full rounded-xl border-0 focus:ring-2 focus:ring-secondary/60 text-gray-900 px-4 py-3" placeholder="{{ $isArabic ? 'أدخل اسمك' : 'Enter your name' }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2" for="email">{{ $isArabic ? 'البريد الإلكتروني' : 'Email Address' }}</label>
                        <input type="email" id="email" name="email" class="w-full rounded-xl border-0 focus:ring-2 focus:ring-secondary/60 text-gray-900 px-4 py-3" placeholder="{{ $isArabic ? 'أدخل بريدك الإلكتروني' : 'Enter your email' }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2" for="message">{{ $isArabic ? 'رسالتك' : 'Your Message' }}</label>
                        <textarea id="message" name="message" rows="4" class="w-full rounded-xl border-0 focus:ring-2 focus:ring-secondary/60 text-gray-900 px-4 py-3" placeholder="{{ $isArabic ? 'أخبرنا كيف يمكننا مساعدتك' : 'Tell us how we can help' }}"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-purple-500 to-blue-500 hover:from-purple-600 hover:to-blue-600 text-white font-semibold py-3 rounded-xl shadow-lg transition">
                        {{ $isArabic ? 'إرسال الرسالة' : 'Send Message' }}
                    </button>
                </form>
            </div>
            <div class="space-y-8 {{ $isArabic ? 'text-right' : 'text-left' }}">
                <h3 class="text-3xl font-semibold">{{ $isArabic ? 'معلومات التواصل' : 'Contact Information' }}</h3>
                <p class="text-white/80 leading-relaxed">
                    {{ $isArabic ? 'فريق سينتريكس جاهز للإجابة على استفساراتكم وتقديم الدعم اللازم على مدار الساعة.' : 'The Sentrix team is ready to answer inquiries and provide continuous support around the clock.' }}
                </p>
                <div class="space-y-4">
                    <div class="flex items-center gap-4 {{ $isArabic ? 'flex-row-reverse text-right' : '' }}">
                        <span class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.517 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1c-9.389 0-17-7.611-17-17V5z" />
                            </svg>
                        </span>
                        <div>
                            <p class="text-sm text-white/70">{{ $isArabic ? 'هاتف' : 'Phone' }}</p>
                            <p class="text-lg font-semibold">+966 555 123 456</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 {{ $isArabic ? 'flex-row-reverse text-right' : '' }}">
                        <span class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 12A4 4 0 118 12a4 4 0 018 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14v7" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 21h8" />
                            </svg>
                        </span>
                        <div>
                            <p class="text-sm text-white/70">{{ $isArabic ? 'العنوان' : 'Address' }}</p>
                            <p class="text-lg font-semibold">{{ $isArabic ? 'الرياض، المملكة العربية السعودية' : 'Riyadh, Saudi Arabia' }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 {{ $isArabic ? 'flex-row-reverse text-right' : '' }}">
                        <span class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 12H8" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 16v-8" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2 12a10 10 0 1120 0 10 10 0 01-20 0z" />
                            </svg>
                        </span>
                        <div>
                            <p class="text-sm text-white/70">{{ $isArabic ? 'البريد الإلكتروني' : 'Email' }}</p>
                            <p class="text-lg font-semibold">contact@sentrix.io</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

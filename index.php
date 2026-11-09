<?php
$title = "Emvy Dorm — Find your place, Book your space";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!--  NAVBAR  -->
    <nav class="navbar">
        <div class="nav-brand">
            <span class="brand-accent">EMVY</span>
        </div>
        <ul class="nav-links" id="navLinks">
            <li><a href="index.php"   class="nav-link active" data-i18n="nav.home">Home</a></li>
            <li><a href="rooms.php"   class="nav-link" data-i18n="nav.rooms">Rooms</a></li>
            <li><a href="reserve.php" class="nav-link" data-i18n="nav.reserve">Reserve</a></li>
            <li><a href="contact.php" class="nav-link" data-i18n="nav.contact">Contact</a></li>
        </ul>

        <!-- Language Changer -->
        <div class="lang-switcher" id="langSwitcher">
            <button class="lang-btn" id="langBtn" aria-haspopup="true" aria-expanded="false">
                <span class="lang-flag" id="langFlag">🌐</span>
                <span class="lang-label" id="langLabel">EN</span>
                <svg class="lang-caret" viewBox="0 0 10 6" width="10" height="6" aria-hidden="true">
                    <path d="M0 0l5 6 5-6z" fill="currentColor"/>
                </svg>
            </button>
            <ul class="lang-dropdown" id="langDropdown" role="menu">
                <li role="menuitem"><button class="lang-option active" data-lang="en">🇺🇸 English</button></li>
                <li role="menuitem"><button class="lang-option" data-lang="tl">🇵🇭 Tagalog</button></li>
                <li role="menuitem"><button class="lang-option" data-lang="cbk">🇵🇭 Chavacano</button></li>
            </ul>
        </div>

        <a href="reserve.php" class="btn btn-primary nav-cta" data-i18n="nav.bookNow">Book Now</a>
        <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false" aria-controls="navLinks">
            <span></span><span></span><span></span>
        </button>
    </nav>

    <!-- ===================== HERO ===================== -->
    <section id="home" class="hero">
        <div class="hero-inner">
            <div class="hero-content">
                <span class="hero-badge" data-i18n="hero.badge">🎓 Student Housing</span>
                <h1 class="hero-title"><span data-i18n="hero.titleLine1">Find your place,</span><br><span class="text-accent" data-i18n="hero.titleLine2">Book your space.</span></h1>
                <p class="hero-subtitle" data-i18n="hero.subtitle">
                    Safe, comfortable, and affordable dormitory rooms for students.
                    Reserve online in minutes — no paperwork hassle.
                </p>
                <div class="hero-actions">
                    <a href="rooms.php"   class="btn btn-primary" data-i18n="hero.browseRooms">Browse Rooms</a>
                    <a href="reserve.php" class="btn btn-outline" data-i18n="hero.makeReservation">Make a Reservation</a>
                </div>
                <div class="hero-stats">
                    <div class="stat"><strong>3+</strong><span data-i18n="hero.stat.rooms">Rooms</span></div>
                    <div class="stat-divider"></div>
                    <div class="stat"><strong>100%</strong><span data-i18n="hero.stat.secure">Secure</span></div>
                    <div class="stat-divider"></div>
                    <div class="stat"><strong>24/7</strong><span data-i18n="hero.stat.support">Support</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FEATURES ===================== -->
    <section id="features" class="features section">
        <div class="container">
            <h2 class="section-title"><span data-i18n="features.title">Why choose </span><span class="text-accent">Emvy Dorm?</span></h2>
            <p class="section-subtitle" data-i18n="features.subtitle">Everything you need for a comfortable student life.</p>
            <div class="features-grid">
                <div class="feature-card feature-span-2 card-featured-pink">
                    <span class="feature-tag">01 · Security</span>
                    <h3 data-i18n="features.secure.title">Secure &amp; Safe</h3>
                    <p data-i18n="features.secure.desc">24-hour security and CCTV monitoring throughout the building.</p>
                </div>
                <div class="feature-card card-white">
                    <span class="feature-tag">02 · Wi-Fi</span>
                    <h3 data-i18n="features.wifi.title">Free Wi-Fi</h3>
                    <p data-i18n="features.wifi.desc">High-speed internet included in every room at no extra cost.</p>
                </div>
                <div class="feature-card card-white">
                    <span class="feature-tag">03 · Cleaning</span>
                    <h3 data-i18n="features.housekeeping.title">Housekeeping</h3>
                    <p data-i18n="features.housekeeping.desc">Regular cleaning and maintenance to keep your room spotless.</p>
                </div>
                <div class="feature-card feature-span-2 card-white">
                    <span class="feature-tag">04 · Booking</span>
                    <h3 data-i18n="features.booking.title">Easy Booking</h3>
                    <p data-i18n="features.booking.desc">Reserve your room online in minutes with instant confirmation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FOOTER ===================== -->
    <footer class="footer">
        <div class="container footer-inner">
            <span class="brand-accent">EMVY</span>
            <p class="footer-copy">&copy; <?= date('Y') ?> Emvy Dormitory. <span data-i18n="footer.rights">All rights reserved.</span></p>
            <nav class="footer-links">
                <a href="index.php"   data-i18n="nav.home">Home</a>
                <a href="rooms.php"   data-i18n="nav.rooms">Rooms</a>
                <a href="reserve.php" data-i18n="nav.reserve">Reserve</a>
                <a href="contact.php" data-i18n="nav.contact">Contact</a>
            </nav>
        </div>
    </footer>

    <script>
        // ===================== i18n TRANSLATIONS =====================
        const translations = {
            en: {
                'nav.home':    'Home',
                'nav.rooms':   'Rooms',
                'nav.reserve': 'Reserve',
                'nav.contact': 'Contact',
                'nav.bookNow': 'Book Now',

                'hero.badge':          'Student Housing',
                'hero.titleLine1':     'Find your place,',
                'hero.titleLine2':     'Book your space.',
                'hero.subtitle':       'Safe, comfortable, and affordable dormitory rooms for students. Reserve online in minutes — no paperwork hassle.',
                'hero.browseRooms':    'Browse Rooms',
                'hero.makeReservation':'Make a Reservation',
                'hero.stat.rooms':     'Rooms',
                'hero.stat.secure':    'Secure',
                'hero.stat.support':   'Support',

                'features.title':              'Why choose ',
                'features.subtitle':           'Everything you need for a comfortable student life.',
                'features.secure.title':       'Secure & Safe',
                'features.secure.desc':        '24-hour security and CCTV monitoring throughout the building.',
                'features.wifi.title':         'Free Wi-Fi',
                'features.wifi.desc':          'High-speed internet included in every room at no extra cost.',
                'features.housekeeping.title': 'Housekeeping',
                'features.housekeeping.desc':  'Regular cleaning and maintenance to keep your room spotless.',
                'features.booking.title':      'Easy Booking',
                'features.booking.desc':       'Reserve your room online in minutes with instant confirmation.',

                'rooms.title':       'Available ',
                'rooms.subtitle':    'Choose the room that fits your needs and budget.',
                'rooms.available':   'Available',
                'rooms.maintenance': 'Maintenance',
                'rooms.unavailable': 'Unavailable',
                'rooms.capacity':    'Capacity:',
                'rooms.size':        'Size:',
                'rooms.sharedBath':  'Shared bathroom',
                'rooms.privateBath': 'Private bathroom',
                'rooms.perMonth':    '/month',
                'rooms.reserve':     'Reserve',

                'reserve.title':        'Make a ',
                'reserve.subtitle':     "Fill in the form below and we'll confirm your booking.",
                'reserve.studentNo':    'Student No.',
                'reserve.fullName':     'Full Name',
                'reserve.email':        'Email Address',
                'reserve.preferredRoom':'Preferred Room',
                'reserve.selectRoom':   'Select a room',
                'reserve.checkIn':      'Check-in Date',
                'reserve.checkOut':     'Check-out Date',
                'reserve.message':      'Message / Special Requests',
                'reserve.submit':       'Submit Reservation',

                'contact.title':    'Get in ',
                'contact.subtitle': "Have questions? We're happy to help.",
                'contact.address':  'Address',
                'contact.phone':    'Phone',
                'contact.email':    'Email',

                'footer.rights': 'All rights reserved.',
            },

            tl: {
                'nav.home':    'Tahanan',
                'nav.rooms':   'Mga Silid',
                'nav.reserve': 'Magreserba',
                'nav.contact': 'Makipag-ugnayan',
                'nav.bookNow': 'Mag-book Na',

                'hero.badge':          '🎓 Tirahan ng Estudyante',
                'hero.titleLine1':     'Hanapin ang iyong lugar,',
                'hero.titleLine2':     'I-book ang iyong espasyo.',
                'hero.subtitle':       'Ligtas, komportable, at abot-kayang mga silid sa dormitoryo para sa mga estudyante. Mag-reserve online sa ilang minuto — walang abala sa papel.',
                'hero.browseRooms':    'Tingnan ang mga Silid',
                'hero.makeReservation':'Gumawa ng Reserbasyon',
                'hero.stat.rooms':     'Mga Silid',
                'hero.stat.secure':    'Ligtas',
                'hero.stat.support':   'Suporta',

                'features.title':              'Bakit pumili ng ',
                'features.subtitle':           'Lahat ng kailangan mo para sa komportableng buhay estudyante.',
                'features.secure.title':       'Ligtas at Protektado',
                'features.secure.desc':        '24-oras na seguridad at CCTV monitoring sa buong gusali.',
                'features.wifi.title':         'Libreng Wi-Fi',
                'features.wifi.desc':          'Mabilis na internet kasama sa bawat silid nang walang dagdag na bayad.',
                'features.housekeeping.title': 'Paglilinis',
                'features.housekeeping.desc':  'Regular na paglilinis at pagpapanatili para manatiling malinis ang iyong silid.',
                'features.booking.title':      'Madaling Pag-book',
                'features.booking.desc':       'Mag-reserve ng iyong silid online sa ilang minuto na may agarang kumpirmasyon.',

                'rooms.title':       'Mga Available na ',
                'rooms.subtitle':    'Piliin ang silid na angkop sa iyong pangangailangan at badyet.',
                'rooms.available':   'Available',
                'rooms.maintenance': 'Pagpapanatili',
                'rooms.unavailable': 'Hindi Available',
                'rooms.capacity':    'Kapasidad:',
                'rooms.size':        'Sukat:',
                'rooms.sharedBath':  'Shared na banyo',
                'rooms.privateBath': 'Sariling banyo',
                'rooms.perMonth':    '/buwan',
                'rooms.reserve':     'I-reserve',

                'reserve.title':        'Gumawa ng ',
                'reserve.subtitle':     'Punan ang form sa ibaba at iko-confirm namin ang iyong booking.',
                'reserve.studentNo':    'Numero ng Estudyante',
                'reserve.fullName':     'Buong Pangalan',
                'reserve.email':        'Email Address',
                'reserve.preferredRoom':'Gustong Silid',
                'reserve.selectRoom':   'Pumili ng silid',
                'reserve.checkIn':      'Petsa ng Check-in',
                'reserve.checkOut':     'Petsa ng Check-out',
                'reserve.message':      'Mensahe / Espesyal na Kahilingan',
                'reserve.submit':       'Isumite ang Reserbasyon',

                'contact.title':    'Makipag-',
                'contact.subtitle': 'May mga katanungan? Masaya kaming tumulong.',
                'contact.address':  'Address',
                'contact.phone':    'Telepono',
                'contact.email':    'Email',

                'footer.rights': 'Lahat ng karapatan ay nakalaan.',
            },

            cbk: {
                'nav.home':    'Casa',
                'nav.rooms':   'Mga Cuarto',
                'nav.reserve': 'Reservar',
                'nav.contact': 'Contacto',
                'nav.bookNow': 'Reservar Ya',

                'hero.badge':          '🎓 Vivienda para Estudiante',
                'hero.titleLine1':     'Busca tu lugar,',
                'hero.titleLine2':     'Reserva tu espacio.',
                'hero.subtitle':       'Seguro, cómodo, y asequible na mga cuarto del dormitorio para con los estudiantes. Reserva online en minutos — sin molestia de papel.',
                'hero.browseRooms':    'Mira los Cuartos',
                'hero.makeReservation':'Hace una Reservación',
                'hero.stat.rooms':     'Mga Cuarto',
                'hero.stat.secure':    'Seguro',
                'hero.stat.support':   'Apoyo',

                'features.title':              '¿Por qué escoge ',
                'features.subtitle':           'Todo el que necesita para una cómoda vida estudiantil.',
                'features.secure.title':       'Seguro y Protegido',
                'features.secure.desc':        'Seguridad de 24 horas y monitoreo de CCTV en todo el edificio.',
                'features.wifi.title':         'Wi-Fi Libre',
                'features.wifi.desc':          'Internet de alta velocidad incluido en cada cuarto sin costo adicional.',
                'features.housekeeping.title': 'Limpieza',
                'features.housekeeping.desc':  'Limpieza y mantenimiento regular para mantener tu cuarto impecable.',
                'features.booking.title':      'Fácil Reservación',
                'features.booking.desc':       'Reserva tu cuarto online en minutos con confirmación instantánea.',

                'rooms.title':       'Mga Cuarto na ',
                'rooms.subtitle':    'Escoge el cuarto que conviene con tus necesidades y presupuesto.',
                'rooms.available':   'Disponible',
                'rooms.maintenance': 'Mantenimiento',
                'rooms.unavailable': 'No Disponible',
                'rooms.capacity':    'Capacidad:',
                'rooms.size':        'Tamaño:',
                'rooms.sharedBath':  'Baño compartido',
                'rooms.privateBath': 'Baño propio',
                'rooms.perMonth':    '/mes',
                'rooms.reserve':     'Reservar',

                'reserve.title':        'Hace una ',
                'reserve.subtitle':     'Llena el formulario abajo y vamos a confirmar tu reservación.',
                'reserve.studentNo':    'Número de Estudiante',
                'reserve.fullName':     'Nombre Completo',
                'reserve.email':        'Correo Electrónico',
                'reserve.preferredRoom':'Cuarto Preferido',
                'reserve.selectRoom':   'Escoge un cuarto',
                'reserve.checkIn':      'Fecha de Check-in',
                'reserve.checkOut':     'Fecha de Check-out',
                'reserve.message':      'Mensaje / Petición Especial',
                'reserve.submit':       'Enviar Reservación',

                'contact.title':    'Comunícate ',
                'contact.subtitle': '¿Tiene preguntas? Con gusto vamos a ayudar.',
                'contact.address':  'Dirección',
                'contact.phone':    'Teléfono',
                'contact.email':    'Correo',

                'footer.rights': 'Todos los derechos reservados.',
            }
        };

        const langMeta = {
            en:  { label: 'EN',  flag: '🇺🇸' },
            tl:  { label: 'TL',  flag: '🇵🇭' },
            cbk: { label: 'CBK', flag: '🇵🇭' },
        };

        let currentLang = localStorage.getItem('lang') || 'en';

        function applyLang(lang) {
            currentLang = lang;
            localStorage.setItem('lang', lang);
            const t = translations[lang];

            // Translate all data-i18n elements
            document.querySelectorAll('[data-i18n]').forEach(el => {
                const key = el.getAttribute('data-i18n');
                if (t[key] !== undefined) {
                    // For inputs / selects use placeholder / value; otherwise innerHTML
                    if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                        el.placeholder = t[key];
                    } else if (el.tagName === 'OPTION') {
                        el.textContent = t[key];
                    } else {
                        el.textContent = t[key];
                    }
                }
            });

            // Update lang button label
            document.getElementById('langLabel').textContent = langMeta[lang].label;
            document.getElementById('langFlag').textContent  = langMeta[lang].flag;

            // Update active option highlight
            document.querySelectorAll('.lang-option').forEach(btn => {
                btn.classList.toggle('active', btn.dataset.lang === lang);
            });

            // Update html lang attribute
            document.documentElement.lang = lang;
        }

        // ===================== LANG DROPDOWN TOGGLE =====================
        const langBtn      = document.getElementById('langBtn');
        const langDropdown = document.getElementById('langDropdown');

        langBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            const open = langDropdown.classList.toggle('open');
            langBtn.setAttribute('aria-expanded', open);
        });

        document.querySelectorAll('.lang-option').forEach(btn => {
            btn.addEventListener('click', () => {
                applyLang(btn.dataset.lang);
                langDropdown.classList.remove('open');
                langBtn.setAttribute('aria-expanded', 'false');
            });
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', () => {
            langDropdown.classList.remove('open');
            langBtn.setAttribute('aria-expanded', 'false');
        });

        // Apply saved language on load
        applyLang(currentLang);

        // ===================== MOBILE HAMBURGER =====================
        const hamburger = document.getElementById('hamburger');
        const navLinks  = document.querySelector('.nav-links');

        function closeMenu() {
            navLinks.classList.remove('open');
            hamburger.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }

        hamburger.addEventListener('click', () => {
            const isOpen = navLinks.classList.toggle('open');
            hamburger.classList.toggle('active', isOpen);
            hamburger.setAttribute('aria-expanded', String(isOpen));
            // Lock body scroll while the menu is open
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Close the menu when a nav link inside it is tapped
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // Reset menu state if the viewport grows past the mobile breakpoint
        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) closeMenu();
        });

        // ===================== ACTIVE NAV ON SCROLL =====================
        const sections = document.querySelectorAll('section[id]');
        const links    = document.querySelectorAll('.nav-link');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(s => {
                if (window.scrollY >= s.offsetTop - 80) current = s.id;
            });
            links.forEach(l => {
                const href = l.getAttribute('href');
                if (href.startsWith('#')) {
                    l.classList.toggle('active', href === '#' + current);
                } else if (href === 'index.php') {
                    l.classList.toggle('active', current === 'home' || current === '');
                }
            });
        });
    </script>

</body>
</html>

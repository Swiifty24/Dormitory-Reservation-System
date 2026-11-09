<?php
$title = "Emvy Dorm — Contact";
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
    <style>
        /* Pin footer to the very bottom even on short pages */
        body { display: flex; flex-direction: column; min-height: 100vh; }
        main { flex: 1; }
    </style>
</head>
<body>

    <!--  NAVBAR  -->
    <nav class="navbar">
        <div class="nav-brand">
            <span class="brand-accent">EMVY</span>
        </div>
        <ul class="nav-links">
            <li><a href="index.php"   class="nav-link" data-i18n="nav.home">Home</a></li>
            <li><a href="rooms.php"   class="nav-link" data-i18n="nav.rooms">Rooms</a></li>
            <li><a href="reserve.php" class="nav-link" data-i18n="nav.reserve">Reserve</a></li>
            <li><a href="contact.php" class="nav-link active" data-i18n="nav.contact">Contact</a></li>
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
        <button class="hamburger" id="hamburger" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
    </nav>

    <!-- ===================== CONTACT ===================== -->
    <main>
        <section id="contact" class="section">
            <div class="container">
                <h2 class="section-title">Get in <span class="text-accent" data-i18n="contact.title">Touch</span></h2>
            </div>
        </section>
    </main>

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
        // ===================== i18N TRANSLATIONS =====================
        const translations = {
            en: {
                'nav.home':    'Home',
                'nav.rooms':   'Rooms',
                'nav.reserve': 'Reserve',
                'nav.contact': 'Contact',
                'nav.bookNow': 'Book Now',

                'contact.title': 'Touch',

                'footer.rights': 'All rights reserved.',
            },

            tl: {
                'nav.home':    'Tahanan',
                'nav.rooms':   'Mga Silid',
                'nav.reserve': 'Magreserba',
                'nav.contact': 'Makipag-ugnayan',
                'nav.bookNow': 'Mag-book Na',

                'contact.title': 'Ugnayan',

                'footer.rights': 'Lahat ng karapatan ay nakalaan.',
            },

            cbk: {
                'nav.home':    'Casa',
                'nav.rooms':   'Mga Cuarto',
                'nav.reserve': 'Reservar',
                'nav.contact': 'Contacto',
                'nav.bookNow': 'Reservar Ya',

                'contact.title': 'Contacto',

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

            document.querySelectorAll('[data-i18n]').forEach(el => {
                const key = el.getAttribute('data-i18n');
                if (t[key] !== undefined) {
                    if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                        el.placeholder = t[key];
                    } else {
                        el.textContent = t[key];
                    }
                }
            });

            document.getElementById('langLabel').textContent = langMeta[lang].label;
            document.getElementById('langFlag').textContent  = langMeta[lang].flag;

            document.querySelectorAll('.lang-option').forEach(btn => {
                btn.classList.toggle('active', btn.dataset.lang === lang);
            });

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

        document.addEventListener('click', () => {
            langDropdown.classList.remove('open');
            langBtn.setAttribute('aria-expanded', 'false');
        });

        applyLang(currentLang);

        // ===================== MOBILE HAMBURGER =====================
        const hamburger = document.getElementById('hamburger');
        const navLinks  = document.querySelector('.nav-links');
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('open');
            hamburger.classList.toggle('active');
        });
    </script>

</body>
</html>

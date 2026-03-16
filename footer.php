<footer id="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-inner">

            <!-- Brand -->
            <div class="footer-brand">
                <div class="footer-logo">NextIn <span>HRMS</span></div>
                <p>World's Simplest HR Software. Automate, streamline, and scale your HR operations with confidence.</p>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#modules">All Modules</a></li>
                    <li><a href="#faq">Why NextIn HRMS</a></li>
                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdTr6lcO4AYBsPt0wA8rkr-pU031X8Tknhg2GV0EM2yJ9UF9g/viewform" target="_blank" rel="noopener noreferrer">Schedule Demo</a></li>
                </ul>
            </div>

            <!-- Features List -->
            <div class="footer-col">
                <h4>Features</h4>
                <ul>
                    <li><a href="#features">Attendance Management</a></li>
                    <li><a href="#features">Leave Management</a></li>
                    <li><a href="#features">Payroll Processing</a></li>
                    <li><a href="#features">Task Management</a></li>
                    <li><a href="#features">Live Tracking</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-col">
                <h4>Contact Us</h4>
                <a href="tel:+919876543210" class="contact-item" aria-label="Call us">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.13 3.18 2 2 0 012.11 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 8.09a16 16 0 006 6l.46-.46a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                    </svg>
                    +91 98765 43210
                </a>
                <a href="mailto:info@nextincube.com" class="contact-item" aria-label="Email us">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="2" y="4" width="20" height="16" rx="2"/>
                        <path d="M2 7l10 7 10-7"/>
                    </svg>
                    info@nextincube.com
                </a>
                <a href="https://wa.me/919876543210" class="contact-item" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
                    </svg>
                    Chat on WhatsApp
                </a>
            </div>

        </div><!-- /.footer-inner -->

        <div class="footer-bottom">
            <p>&copy; <?php echo esc_html( date('Y') ); ?> <a href="https://nextincube.com" target="_blank" rel="noopener noreferrer">NextIn Cube Solution LLP</a>. All rights reserved.</p>
            <p>Made with &#10084; for modern HR teams</p>
        </div>

    </div><!-- /.container -->
</footer>

<script>
(function () {
    'use strict';

    // ── Mobile hamburger toggle ──────────────────────────────
    var btn  = document.getElementById('hamburger-btn');
    var menu = document.getElementById('primary-nav');
    if (btn && menu) {
        btn.addEventListener('click', function () {
            var isOpen = menu.classList.toggle('open');
            btn.classList.toggle('open', isOpen);
            btn.setAttribute('aria-expanded', String(isOpen));
        });
        // Close menu on link click
        menu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                menu.classList.remove('open');
                btn.classList.remove('open');
                btn.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // ── Sticky header shadow ─────────────────────────────────
    var header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', function () {
            header.classList.toggle('scrolled', window.scrollY > 10);
        }, { passive: true });
    }

    // ── FAQ accordion ────────────────────────────────────────
    document.querySelectorAll('.faq-question').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var item = this.closest('.faq-item');
            var wasOpen = item.classList.contains('open');
            // Close all
            document.querySelectorAll('.faq-item').forEach(function (el) {
                el.classList.remove('open');
                el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
            });
            // Toggle clicked
            if (!wasOpen) {
                item.classList.add('open');
                this.setAttribute('aria-expanded', 'true');
            }
        });
    });
})();
</script>

<?php wp_footer(); ?>
</body>
</html>

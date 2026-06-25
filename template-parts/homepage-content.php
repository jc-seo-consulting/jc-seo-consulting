<!-- Navigation -->
    <nav>
        <div class="container">
            <div class="logo">JC SEO Consulting</div>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#results">Results</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Transform Your Digital Presence</h1>
        <p class="subtitle">Expert SEO & AEO strategies that drive measurable growth</p>
        <a href="#contact" class="cta">Get Started</a>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="profile-placeholder">
            Photo Placeholder
        </div>
        <div class="about-content">
            <h2>Julia Contreras</h2>
            <p>I'm an SEO consultant with 10 years of experience helping brands grow their organic visibility — from leading SEO strategy at a global digital marketing agency to running my own independent practice since 2021. These days, my focus has expanded beyond traditional search: helping B2B and enterprise clients show up not just in Google, but in ChatGPT, Perplexity, Google AI Overviews, and other AI-powered platforms.</p>
            <p>I specialize in AI/LLM visibility optimization (AEO/AIO), technical SEO, content strategy, and E-E-A-T — building strategies grounded in real data and reporting that executive teams can actually act on. Whether it's auditing a site's technical health, building out structured data and schema, or tracking share-of-voice against competitors in AI search results, my approach stays the same: clear priorities, measurable outcomes, no fluff.</p>
            <a href="https://www.linkedin.com/in/julia-contreras/" target="_blank" class="linkedin-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
                Connect on LinkedIn
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <h2>Services</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"></div>
                <h3>01 — AI Visibility Optimization (AEO/AIO)</h3>
                <p>Get your brand cited and recommended in ChatGPT, Perplexity, Google AI Overviews, and Copilot.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"></div>
                <h3>02 — Search Engine Optimization (SEO)</h3>
                <p>Improve rankings, organic traffic, and visibility in Google and Bing.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"></div>
                <h3>03 — Technical SEO & Schema</h3>
                <p>Site audits, structured data, and the technical foundation search engines and AI need to find and trust your content.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"></div>
                <h3>04 — Content Strategy & E-E-A-T</h3>
                <p>Content that builds topical authority, earns trust, and gets cited — by readers and AI alike.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"></div>
                <h3>05 — Competitive & Share-of-Voice Analysis</h3>
                <p>Track exactly where you stand against competitors in search and AI results, with a roadmap to close the gap.</p>
            </div>
            <div class="service-card">
                <div class="service-icon"></div>
                <h3>06 — SEO Strategy & Executive Reporting</h3>
                <p>Custom roadmaps and reporting tied to real business outcomes, built for stakeholders and the C-suite.</p>
            </div>
        </div>
    </section>

    <!-- Results Section -->
    <section id="results" class="results">
        <h2>Proven Results</h2>
        <div class="results-grid">
            <div class="result-card">
                <div class="company">[Client / Industry]</div>
                <div class="industry">[Industry detail]</div>
                <div class="metric" data-target="0">0%</div>
                <div class="description">[What improved — e.g. increase in organic traffic]</div>
                <div class="timeframe">[Timeframe — e.g. Achieved in X months]</div>
            </div>
            <div class="result-card">
                <div class="company">[Client / Industry]</div>
                <div class="industry">[Industry detail]</div>
                <div class="metric" data-target="0">0%</div>
                <div class="description">[What improved]</div>
                <div class="timeframe">[Timeframe]</div>
            </div>
            <div class="result-card">
                <div class="company">[Client / Industry]</div>
                <div class="industry">[Industry detail]</div>
                <div class="metric" data-target="0">0%</div>
                <div class="description">[What improved]</div>
                <div class="timeframe">[Timeframe]</div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Let's Work Together</h2>
        <p>Ready to elevate your digital presence and achieve measurable growth?</p>
        <a href="/contact/" class="cta">Get in Touch</a>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 JC SEO Consulting. All rights reserved.</p>
    </footer>

    <script>
        // Animated counter for results
        function animateCounter(element, target, duration = 2000) {
            const start = 0;
            const increment = target / (duration / 16); // 60 FPS
            let current = start;
            
            const card = element.closest('.result-card');
            card.classList.add('animating');
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                    card.classList.remove('animating');
                }
                element.textContent = Math.floor(current) + '%';
            }, 16);
        }

        // Intersection Observer to trigger animation when scrolled into view
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const metricElement = entry.target.querySelector('.metric');
                    if (metricElement && !metricElement.classList.contains('animated')) {
                        const target = parseInt(metricElement.getAttribute('data-target'));
                        animateCounter(metricElement, target);
                        metricElement.classList.add('animated');
                    }
                }
            });
        }, observerOptions);

        // Observe all result cards
        document.addEventListener('DOMContentLoaded', () => {
            const resultCards = document.querySelectorAll('.result-card');
            resultCards.forEach(card => observer.observe(card));
        });

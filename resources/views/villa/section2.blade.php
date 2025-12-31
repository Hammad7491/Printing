{{-- resources/views/villa/section1.blade.php --}}
<section class="gx-villa" id="gxVillaProduct" aria-label="Villa Sign Details">
    <div class="gx-container">
        <div class="gx-villa-grid">
            {{-- LEFT: Gallery --}}
            <div class="gx-gal" data-gx-gallery>
                <div class="gx-gal-main">
                    <img
                        class="gx-gal-mainimg is-active"
                        src="{{ asset('assets/images/VillaSign/Villa8.jpg') }}"
                        alt="Villa Sign"
                        loading="eager"
                        decoding="async"
                    />
                </div>

                {{-- Thumbnails (5 images) --}}
                <div class="gx-gal-thumbs" role="list" aria-label="Villa Sign gallery thumbnails">
                    <button class="gx-thumb is-active" type="button" role="listitem"
                            data-src="{{ asset('assets/images/VillaSign/Villa1.jpg') }}" aria-label="View image 1">
                        <img src="{{ asset('assets/images/VillaSign/Villa2.jpg') }}" alt="Villa thumbnail 1" loading="lazy">
                    </button>

                    <button class="gx-thumb" type="button" role="listitem"
                            data-src="{{ asset('assets/images/VillaSign/Villa2.jpg') }}" aria-label="View image 2">
                        <img src="{{ asset('assets/images/VillaSign/Villa3.jpg') }}" alt="Villa thumbnail 2" loading="lazy">
                    </button>

                    <button class="gx-thumb" type="button" role="listitem"
                            data-src="{{ asset('assets/images/VillaSign/Villa3.jpg') }}" aria-label="View image 3">
                        <img src="{{ asset('assets/images/VillaSign/Villa4.jpg') }}" alt="Villa thumbnail 3" loading="lazy">
                    </button>

                    <button class="gx-thumb" type="button" role="listitem"
                            data-src="{{ asset('assets/images/Villa sign/Villa4.jpg') }}" aria-label="View image 4">
                        <img src="{{ asset('assets/images/VillaSign/Villa5.jpg') }}" alt="Villa thumbnail 4" loading="lazy">
                    </button>

                    <button class="gx-thumb" type="button" role="listitem"
                            data-src="{{ asset('assets/images/VillaSign/Villa5.jpg') }}" aria-label="View image 5">
                        <img src="{{ asset('assets/images/VillaSign/Villa6.jpg') }}" alt="Villa thumbnail 5" loading="lazy">
                    </button>
                </div>
            </div>

            {{-- RIGHT: Content --}}
            <aside class="gx-info" aria-label="Villa Sign information">
                <header class="gx-info-head">
                    <span class="gx-pill">Outdoor • Indoor</span>

                    <h1 class="gx-h1">Signature Villa Number Signs</h1>

                    <p class="gx-sub">
                        A clean, modern look for your entrance — durable materials, sharp finishing, and a premium feel that lasts.
                    </p>
                </header>

                {{-- Single content block (no tabs, no extra headings) --}}
                <div class="gx-panel">
                    <h3 class="gx-h3">Made for entrances that deserve attention</h3>

                    <p class="gx-p">
                        Ideal for villas, gates, and home entrances. Designed to stay neat in heat, dust, and outdoor exposure —
                        while keeping the look minimal and elegant.
                    </p>

                    <ul class="gx-bullets">
                        <li>Weather-proof coating for long life</li>
                        <li>Clean edges with secure mounting</li>
                        <li>Custom size, color & layout options</li>
                    </ul>

                    <div class="gx-mini">
                        <div class="gx-mini-item">
                            <div class="gx-mini-k">Finish</div>
                            <div class="gx-mini-v">Matte / Gloss / Brushed</div>
                        </div>
                        <div class="gx-mini-item">
                            <div class="gx-mini-k">Materials</div>
                            <div class="gx-mini-v">Acrylic • Aluminum • Stainless Steel • ACP</div>
                        </div>
                        <div class="gx-mini-item">
                            <div class="gx-mini-k">Extras</div>
                            <div class="gx-mini-v">3D letters • Optional LED backlight</div>
                        </div>
                    </div>
                </div>

                {{-- CTA --}}
                <div class="gx-cta">
                    <button class="gx-btn" type="button" aria-label="Get quote for Villa Sign">
                        Request a Quote
                    </button>

                    <p class="gx-note">
                        <span class="gx-dot" aria-hidden="true"></span>
                        Quick delivery • Premium finishing • UAE-quality standard
                    </p>
                </div>
            </aside>
        </div>
    </div>
</section>

{{-- FAQ SECTION --}}
<section class="gx-faqs" id="gxFaqs" aria-label="Frequently Asked Questions">
    <div class="gx-container">
        <div class="gx-faq-card">
            <h2 class="gx-faq-title">Frequently Asked Questions</h2>

            <div class="gx-faq-list" data-gx-faq>
                <div class="gx-faq is-open">
                    <button class="gx-q" type="button" aria-expanded="true">
                        How do I share my villa number/design for a quote?
                        <span class="gx-ic" aria-hidden="true"></span>
                    </button>
                    <div class="gx-a">
                        <p>
                            Send your villa number, preferred size, and a photo of the wall/gate (optional). We’ll suggest the best
                            material and finishing for a clean outdoor look.
                        </p>
                    </div>
                </div>

                <div class="gx-faq">
                    <button class="gx-q" type="button" aria-expanded="false">
                        Which material is best for heat and outdoor conditions?
                        <span class="gx-ic" aria-hidden="true"></span>
                    </button>
                    <div class="gx-a" hidden>
                        <p>
                            Acrylic, aluminum, stainless steel, and ACP are all strong options. The best choice depends on sunlight,
                            exposure to dust, and the look you want (matte, gloss, brushed).
                        </p>
                    </div>
                </div>

                <div class="gx-faq">
                    <button class="gx-q" type="button" aria-expanded="false">
                        Can you help with mounting style and positioning?
                        <span class="gx-ic" aria-hidden="true"></span>
                    </button>
                    <div class="gx-a" hidden>
                        <p>
                            Yes. We’ll guide you with spacing, alignment, and mounting type so the sign sits perfectly and looks professional.
                        </p>
                    </div>
                </div>

                <div class="gx-faq">
                    <button class="gx-q" type="button" aria-expanded="false">
                        Can I get custom colors and optional LED backlight?
                        <span class="gx-ic" aria-hidden="true"></span>
                    </button>
                    <div class="gx-a" hidden>
                        <p>
                            Absolutely. We can match colors and provide optional LED backlight depending on the design and placement.
                        </p>
                    </div>
                </div>

                <div class="gx-faq">
                    <button class="gx-q" type="button" aria-expanded="false">
                        What is the usual production time?
                        <span class="gx-ic" aria-hidden="true"></span>
                    </button>
                    <div class="gx-a" hidden>
                        <p>
                            It depends on size and materials, but most orders are completed quickly after design confirmation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== Font (premium + clean) ===== */
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap');

.gx-villa, .gx-faqs{
    font-family: Manrope, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";
}

/* ===== Villa layout ===== */
.gx-villa{ padding: 26px 0 44px; }
.gx-villa-grid{
    display:grid;
    grid-template-columns: 1.18fr .82fr;
    gap: 22px;
    align-items:start;
}

/* ===== Gallery ===== */
.gx-gal{
    background:#fff;
    border-radius: 22px;
    box-shadow: 0 18px 60px rgba(2,6,23,.08);
    overflow:hidden;
}
.gx-gal-main{
    position:relative;
    height: 520px;
    background: #f4f6f8;
}
.gx-gal-mainimg{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
    opacity:0;
    transform: translateX(14px);
    transition: opacity .35s ease, transform .35s ease;
}
.gx-gal-mainimg.is-active{
    opacity:1;
    transform: translateX(0);
}
.gx-gal-thumbs{
    display:flex;
    gap: 10px;
    padding: 12px;
    overflow:auto;
    background: #fff;
}
.gx-thumb{
    border:0;
    padding:0;
    cursor:pointer;
    border-radius: 14px;
    overflow:hidden;
    width: 110px;
    height: 72px;
    flex: 0 0 auto;
    background:#eef2f5;
    box-shadow: 0 10px 24px rgba(2,6,23,.08);
    transition: transform .18s ease, box-shadow .18s ease, opacity .18s ease;
    opacity:.78;
}
.gx-thumb img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}
.gx-thumb:hover{ transform: translateY(-1px); opacity:1; }
.gx-thumb.is-active{
    opacity:1;
    box-shadow: 0 14px 34px rgba(2,6,23,.12);
    outline: 2px solid rgba(234,88,12,.22);
    outline-offset: 0;
}

/* ===== Right info card ===== */
.gx-info{
    background:#fff;
    border-radius: 22px;
    box-shadow: 0 18px 60px rgba(2,6,23,.08);
    padding: 18px;
}
.gx-info-head{ margin-bottom: 14px; }

.gx-pill{
    display:inline-flex;
    align-items:center;
    gap: 8px;
    padding: 8px 12px;
    border-radius: 999px;
    background: rgba(2,6,23,.04);
    color: rgba(15,23,42,.75);
    font-weight: 700;
    font-size: 12px;
    letter-spacing: .01em;
}

.gx-h1{
    margin: 10px 0 8px;
    font-weight: 800;
    letter-spacing: -0.03em;
    color:#0b1220;
    font-size: clamp(22px, 2.6vw, 36px);
    line-height: 1.08;
}
.gx-sub{
    margin:0;
    color: rgba(15,23,42,.70);
    font-weight: 500;
    line-height: 1.7;
    font-size: 14.5px;
}

/* ===== Content panel ===== */
.gx-panel{
    margin-top: 12px;
    background: rgba(2,6,23,.03);
    border-radius: 18px;
    padding: 14px;
}
.gx-h3{
    margin: 0 0 10px;
    font-size: 15px;
    font-weight: 800;
    color:#0f172a;
    letter-spacing: -.01em;
}
.gx-p{
    margin: 0 0 12px;
    color: rgba(15,23,42,.74);
    font-weight: 500;
    line-height: 1.75;
    font-size: 13.75px;
}
.gx-bullets{
    margin: 0;
    padding-left: 18px;
    color: rgba(15,23,42,.76);
    font-weight: 600;
    line-height: 1.9;
    font-size: 13.5px;
}

/* ===== Mini specs ===== */
.gx-mini{
    margin-top: 12px;
    display:grid;
    gap: 10px;
}
.gx-mini-item{
    background:#fff;
    border-radius: 14px;
    padding: 10px 12px;
    box-shadow: 0 10px 24px rgba(2,6,23,.08);
}
.gx-mini-k{
    font-weight: 800;
    font-size: 12px;
    color:#0f172a;
    margin-bottom: 4px;
}
.gx-mini-v{
    font-weight: 600;
    font-size: 13px;
    color: rgba(15,23,42,.72);
    line-height: 1.6;
}

/* ===== CTA ===== */
.gx-cta{
    margin-top: 14px;
    display:flex;
    gap: 12px;
    align-items:center;
    flex-wrap: wrap;
}
.gx-btn{
    border:0;
    cursor:pointer;
    padding: 12px 18px;
    border-radius: 999px;
    font-weight: 800;
    color:#fff;
    background: linear-gradient(135deg, #e11d48 0%, #f97316 55%, #f59e0b 120%);
    box-shadow: 0 18px 42px rgba(234,88,12,.18);
    transition: transform .18s ease, filter .18s ease;
}
.gx-btn:hover{ transform: translateY(-1px); filter: brightness(1.02); }
.gx-note{
    margin:0;
    display:flex;
    align-items:center;
    gap: 8px;
    color: rgba(15,23,42,.68);
    font-weight: 700;
    font-size: 12px;
}
.gx-dot{
    width: 10px; height: 10px;
    border-radius: 999px;
    background: linear-gradient(135deg, #e11d48, #f59e0b);
    box-shadow: 0 10px 22px rgba(225,29,72,.14);
}

/* ===== FAQ ===== */
.gx-faqs{ padding: 8px 0 54px; }
.gx-faq-card{
    background:#fff;
    border-radius: 22px;
    box-shadow: 0 18px 60px rgba(2,6,23,.08);
    padding: 22px;
}
.gx-faq-title{
    margin: 0 0 14px;
    text-align:center;
    font-weight: 900;
    color:#0f172a;
    letter-spacing: -0.02em;
    font-size: clamp(18px, 2.2vw, 26px);
}
.gx-faq{
    padding: 14px 2px;
    border-top: 1px solid rgba(2,6,23,.08);
}
.gx-faq:first-child{ border-top: 0; }

.gx-q{
    width: 100%;
    border: 0;
    background: transparent;
    cursor: pointer;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap: 14px;
    padding: 8px 6px;
    text-align:left;

    color:#0f172a;
    font-weight: 800;
    font-size: 14px;
}
.gx-ic{
    width: 22px; height: 22px;
    border-radius: 999px;
    background: rgba(2,6,23,.06);
    position: relative;
    flex: 0 0 auto;
}
.gx-ic::before{
    content:"";
    position:absolute;
    top: 50%; left: 50%;
    width: 7px; height: 7px;
    border-right: 2px solid rgba(15,23,42,.75);
    border-bottom: 2px solid rgba(15,23,42,.75);
    transform: translate(-50%, -60%) rotate(45deg);
    transition: transform .18s ease;
}
.gx-faq.is-open .gx-ic::before{
    transform: translate(-50%, -40%) rotate(225deg);
}
.gx-a{
    padding: 0 6px 6px;
    color: rgba(15,23,42,.74);
    font-weight: 600;
    line-height: 1.75;
    font-size: 13.5px;
}
.gx-a p{ margin: 8px 0 0; }

/* ===== Responsive ===== */
@media (max-width: 980px){
    .gx-villa-grid{ grid-template-columns: 1fr; }
    .gx-gal-main{ height: 440px; }
}
@media (max-width: 520px){
    .gx-gal-main{ height: 340px; }
    .gx-thumb{ width: 92px; height: 62px; }
    .gx-info{ padding: 16px; }
    .gx-btn{ width: 100%; text-align:center; }
    .gx-note{ width: 100%; justify-content:center; }
    .gx-faq-card{ padding: 18px; }
}
</style>

<script>
/* Gallery + FAQ (simple, clean) */
(() => {
    // ----- Gallery (thumbnail -> main image with slide)
    const gal = document.querySelector('[data-gx-gallery]');
    if (gal) {
        const main = gal.querySelector('.gx-gal-mainimg');
        const thumbs = Array.from(gal.querySelectorAll('.gx-thumb'));

        const setActiveThumb = (activeBtn) => {
            thumbs.forEach(b => b.classList.toggle('is-active', b === activeBtn));
        };

        const swapImage = (src, activeBtn) => {
            if (!main || !src || main.getAttribute('src') === src) return;

            main.classList.remove('is-active');
            window.setTimeout(() => {
                main.setAttribute('src', src);
                main.classList.add('is-active');
                if (activeBtn) setActiveThumb(activeBtn);
            }, 140);
        };

        thumbs.forEach(btn => {
            btn.addEventListener('click', () => swapImage(btn.dataset.src, btn));
        });
    }

    // ----- FAQ accordion (one open at a time)
    const faqRoot = document.querySelector('[data-gx-faq]');
    if (faqRoot) {
        const items = Array.from(faqRoot.querySelectorAll('.gx-faq'));

        const closeItem = (item) => {
            const btn = item.querySelector('.gx-q');
            const ans = item.querySelector('.gx-a');
            item.classList.remove('is-open');
            if (btn) btn.setAttribute('aria-expanded', 'false');
            if (ans) ans.hidden = true;
        };

        const openItem = (item) => {
            const btn = item.querySelector('.gx-q');
            const ans = item.querySelector('.gx-a');
            item.classList.add('is-open');
            if (btn) btn.setAttribute('aria-expanded', 'true');
            if (ans) ans.hidden = false;
        };

        items.forEach((item) => {
            const btn = item.querySelector('.gx-q');
            const ans = item.querySelector('.gx-a');

            if (item.classList.contains('is-open')) {
                if (btn) btn.setAttribute('aria-expanded', 'true');
                if (ans) ans.hidden = false;
            } else {
                if (btn) btn.setAttribute('aria-expanded', 'false');
                if (ans) ans.hidden = true;
            }

            if (btn) {
                btn.addEventListener('click', () => {
                    const isOpen = item.classList.contains('is-open');
                    items.forEach(closeItem);
                    if (!isOpen) openItem(item);
                });
            }
        });
    }
})();
</script>

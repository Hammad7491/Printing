{{-- SECTION 2: Print & Cut Stickers (Video first + Gallery + FAQ) --}}
<section class="gx-print" id="gxPrintGallery" aria-label="Print & Cut Stickers Gallery">
    <div class="gx-container">

        <div class="gx-print-center">
            {{-- ✅ Video FIRST --}}
            <div class="gx-video-card" aria-label="Print & Cut Stickers video">
                <video class="gx-video" controls playsinline preload="metadata">
                    <source src="{{ asset('assets/images/Print/Print8.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            {{-- ✅ Gallery --}}
            <div class="gx-gal" data-gx-gallery>
                <div class="gx-gal-main">
                    <img
                        class="gx-gal-mainimg"
                        src="{{ asset('assets/images/Print/Print9.jpg') }}"
                        alt="Print & Cut Stickers"
                        loading="eager"
                        decoding="async"
                    />
                </div>

                {{-- Thumbnails (6 images) --}}
                <div class="gx-gal-thumbs" role="list" aria-label="Print & Cut Stickers gallery thumbnails">
                    <button class="gx-thumb is-active" type="button" role="listitem"
                            data-src="{{ asset('assets/images/Print/Print1.jpg') }}" aria-label="View image 1">
                        <img src="{{ asset('assets/images/Print/Print2.jpg') }}" alt="Print thumbnail 1" loading="lazy" decoding="async">
                    </button>

                    <button class="gx-thumb" type="button" role="listitem"
                            data-src="{{ asset('assets/images/Print/Print3.jpg') }}" aria-label="View image 2">
                        <img src="{{ asset('assets/images/Print/Print3.jpg') }}" alt="Print thumbnail 2" loading="lazy" decoding="async">
                    </button>

                    <button class="gx-thumb" type="button" role="listitem"
                            data-src="{{ asset('assets/images/Print/Print4.png') }}" aria-label="View image 3">
                        <img src="{{ asset('assets/images/Print/Print4.png') }}" alt="Print thumbnail 3" loading="lazy" decoding="async">
                    </button>

                    <button class="gx-thumb" type="button" role="listitem"
                            data-src="{{ asset('assets/images/Print/Print5.jpg') }}" aria-label="View image 4">
                        <img src="{{ asset('assets/images/Print/Print5.jpg') }}" alt="Print thumbnail 4" loading="lazy" decoding="async">
                    </button>

                    <button class="gx-thumb" type="button" role="listitem"
                            data-src="{{ asset('assets/images/Print/Print6.jpg') }}" aria-label="View image 5">
                        <img src="{{ asset('assets/images/Print/Print6.jpg') }}" alt="Print thumbnail 5" loading="lazy" decoding="async">
                    </button>

                    <button class="gx-thumb" type="button" role="listitem"
                            data-src="{{ asset('assets/images/Print/Print7.jpg') }}" aria-label="View image 6">
                        <img src="{{ asset('assets/images/Print/Print7.jpg') }}" alt="Print thumbnail 6" loading="lazy" decoding="async">
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- FAQ SECTION --}}
<section class="gx-faqs" id="gxPrintFaqs" aria-label="Frequently Asked Questions">
    <div class="gx-container">
        <div class="gx-faq-card">
            <h2 class="gx-faq-title">Frequently Asked Questions</h2>

            <div class="gx-faq-list" data-gx-faq>
                <div class="gx-faq is-open">
                    <button class="gx-q" type="button" aria-expanded="true">
                        What do you need to start my sticker order?
                        <span class="gx-ic" aria-hidden="true"></span>
                    </button>
                    <div class="gx-a">
                        <p>
                            Share your artwork (AI/PDF/PNG), required size, quantity, and finish (matte/gloss).
                            If you don’t have a cutline, we can create it for contour cutting.
                        </p>
                    </div>
                </div>

                <div class="gx-faq">
                    <button class="gx-q" type="button" aria-expanded="false">
                        What is the difference between Die-Cut and Kiss-Cut?
                        <span class="gx-ic" aria-hidden="true"></span>
                    </button>
                    <div class="gx-a" hidden>
                        <p>
                            Die-Cut (contour cut) cuts through the sticker and backing for a single custom shape.
                            Kiss-Cut only cuts the sticker layer, leaving the backing intact (easy peel on sheets).
                        </p>
                    </div>
                </div>

                <div class="gx-faq">
                    <button class="gx-q" type="button" aria-expanded="false">
                        Are Print &amp; Cut stickers waterproof and outdoor-safe?
                        <span class="gx-ic" aria-hidden="true"></span>
                    </button>
                    <div class="gx-a" hidden>
                        <p>
                            Yes — with premium vinyl and proper lamination, stickers can handle water, sunlight,
                            and daily handling. Tell us where you’ll apply them so we suggest the best material.
                        </p>
                    </div>
                </div>

                <div class="gx-faq">
                    <button class="gx-q" type="button" aria-expanded="false">
                        Do you offer matte/gloss lamination and special finishes?
                        <span class="gx-ic" aria-hidden="true"></span>
                    </button>
                    <div class="gx-a" hidden>
                        <p>
                            Yes. Matte and gloss laminate are available for protection and premium look.
                            Special options (transparent vinyl, white ink base, etc.) can be done on request.
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
                            Production depends on size, quantity, and finishing, but most orders are completed
                            quickly after design approval.
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

.gx-print, .gx-faqs{
    font-family: Manrope, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";
}

.gx-print *, .gx-faqs *{ box-sizing: border-box; }

/* Scoped container */
.gx-print .gx-container,
.gx-faqs  .gx-container{
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 18px;
}

/* ===== Section 2 layout (CENTER ONLY) ===== */
.gx-print{ padding: 18px 0 16px; }

.gx-print-center{
    display:flex;
    flex-direction: column;
    align-items:center;
    gap: 14px;
}

/* Video card (FIRST) */
.gx-video-card{
    width: min(920px, 100%);
    background:#fff;
    border-radius: 22px;
    box-shadow: 0 14px 44px rgba(2,6,23,.08);
    overflow:hidden;
}
.gx-video{
    width: 100%;
    height: auto;
    display:block;
    background: #0b1020;
    aspect-ratio: 16 / 9;
}

/* Gallery card */
.gx-gal{
    width: min(920px, 100%);
    background:#fff;
    border-radius: 22px;
    box-shadow: 0 14px 44px rgba(2,6,23,.08);
    overflow:hidden;
}

/* Main image */
.gx-gal-main{
    position:relative;
    width: 100%;
    height: clamp(260px, 60vw, 520px);
    background: #f4f6f8;
}
.gx-gal-mainimg{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    object-fit: cover;
    display:block;
    transform: translateX(0);
    opacity: 1;
    transition: opacity .22s ease, transform .22s ease;
}
.gx-gal-mainimg.is-fade{
    opacity: .18;
    transform: translateX(10px);
}

/* Thumbnails */
.gx-gal-thumbs{
    display:flex;
    gap: 10px;
    padding: 12px;
    overflow-x:auto;
    overflow-y:hidden;
    background: #fff;
    -webkit-overflow-scrolling: touch;
    scroll-snap-type: x mandatory;
}
.gx-gal-thumbs::-webkit-scrollbar{ height: 8px; }
.gx-gal-thumbs::-webkit-scrollbar-thumb{
    background: rgba(15,23,42,.12);
    border-radius: 999px;
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
    scroll-snap-align: start;
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

/* MOBILE: show ALL 6 thumbnails */
@media (max-width: 560px){
    .gx-print .gx-container,
    .gx-faqs  .gx-container{ padding: 0 14px; }

    .gx-video-card,
    .gx-gal{ border-radius: 18px; }

    .gx-gal-main{ height: clamp(240px, 78vw, 380px); }

    .gx-gal-thumbs{
        display:grid;
        grid-template-columns: repeat(6, minmax(0, 1fr));
        gap: 8px;
        overflow: hidden;
        padding: 10px;
    }
    .gx-thumb{
        width: 100%;
        height: 54px;
        border-radius: 12px;
        box-shadow: 0 8px 18px rgba(2,6,23,.07);
    }
}

/* ===== FAQ ===== */
.gx-faqs{ padding: 12px 0 54px; }
.gx-faq-card{
    background:#fff;
    border-radius: 22px;
    box-shadow: 0 14px 44px rgba(2,6,23,.08);
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

@media (max-width: 520px){
    .gx-faq-card{ padding: 18px; border-radius: 18px; }
}
</style>

<script>
/* Gallery + FAQ (supports multiple sections) */
(() => {
    // ----- Galleries
    document.querySelectorAll('[data-gx-gallery]').forEach((gal) => {
        const main = gal.querySelector('.gx-gal-mainimg');
        const thumbs = Array.from(gal.querySelectorAll('.gx-thumb'));
        if (!main || !thumbs.length) return;

        const setActiveThumb = (activeBtn) => {
            thumbs.forEach(b => b.classList.toggle('is-active', b === activeBtn));
        };

        const swapImage = (src, activeBtn) => {
            if (!src || main.getAttribute('src') === src) return;

            main.classList.add('is-fade');
            window.setTimeout(() => {
                main.setAttribute('src', src);
                main.onload = () => main.classList.remove('is-fade');
                if (activeBtn) setActiveThumb(activeBtn);
            }, 120);
        };

        thumbs.forEach(btn => btn.addEventListener('click', () => swapImage(btn.dataset.src, btn)));
    });

    // ----- FAQ accordions
    document.querySelectorAll('[data-gx-faq]').forEach((faqRoot) => {
        const items = Array.from(faqRoot.querySelectorAll('.gx-faq'));
        if (!items.length) return;

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
    });
})();
</script>

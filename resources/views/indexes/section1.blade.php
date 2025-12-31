{{-- resources/views/partials/hero.blade.php --}}
@php
    // ✅ Local banners (public/assets/images/banner/)
    $banners = [
        [
            'url' => asset('assets/images/banner/banner.png'),
            'alt' => 'Genix Printing Banner 1',
        ],
        [
            'url' => asset('assets/images/banner/banner1.png'),
            'alt' => 'Genix Printing Banner 2',
        ],
        [
            'url' => asset('assets/images/banner/banner3.png'),
            'alt' => 'Genix Printing Banner 3',
        ],
    ];
@endphp

<section class="gx-hero" id="gxHero" aria-label="Banner slider">
    <div class="gx-container">
        <div class="gx-hero-shell">
            <div class="gx-hero-slider" data-gx-slider>
                {{-- Slides --}}
                <div class="gx-slides" data-gx-track aria-live="polite">
                    @foreach($banners as $i => $b)
                        <article class="gx-slide {{ $i === 0 ? 'is-active' : '' }}"
                                 data-gx-slide
                                 aria-roledescription="slide"
                                 aria-label="{{ $i+1 }} of {{ count($banners) }}">
                            <img
                                class="gx-banner"
                                data-gx-banner="{{ $i }}"
                                src="{{ $b['url'] }}"
                                alt="{{ $b['alt'] }}"
                                loading="{{ $i === 0 ? 'eager' : 'lazy' }}"
                                decoding="async"
                            />
                        </article>
                    @endforeach
                </div>

                {{-- Controls --}}
                <button class="gx-arrow gx-prev" type="button" aria-label="Previous banner" data-gx-prev>
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M15.5 5a1 1 0 0 1 .7 1.71L11.9 11l4.3 4.29A1 1 0 1 1 14.8 16.7l-5-5a1 1 0 0 1 0-1.42l5-5A1 1 0 0 1 15.5 5Z"/>
                    </svg>
                </button>

                <button class="gx-arrow gx-next" type="button" aria-label="Next banner" data-gx-next>
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8.5 19a1 1 0 0 1-.7-1.71L12.1 13 7.8 8.71A1 1 0 1 1 9.2 7.3l5 5a1 1 0 0 1 0 1.42l-5 5A1 1 0 0 1 8.5 19Z"/>
                    </svg>
                </button>

                {{-- Dots --}}
                <div class="gx-dots" role="tablist" aria-label="Banner dots">
                    @foreach($banners as $i => $b)
                        <button class="gx-dotbtn {{ $i === 0 ? 'is-active' : '' }}"
                                type="button"
                                aria-label="Go to banner {{ $i+1 }}"
                                data-gx-dot="{{ $i }}"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== Banner-only Hero ===== */
.gx-hero{ padding: 18px 0 28px; }
.gx-hero-shell{
    border-radius: 26px;
    overflow: hidden;
    border: 1px solid rgba(15,23,42,.10);
    background: rgba(255,255,255,.55);
    box-shadow: 0 18px 55px rgba(2,6,23,.10);
}
.gx-hero-slider{ position: relative; }

/* Track */
.gx-slides{
    display:flex;
    width: 100%;
    transform: translateX(0%);
    transition: transform .55s cubic-bezier(.22,.8,.24,1);
}

/* Slide */
.gx-slide{
    position: relative;
    min-width: 100%;
    padding: 0;
    margin: 0;
}

/* Banner image */
.gx-banner{
    width: 100%;
    height: clamp(220px, 30vw, 440px);
    display:block;
    object-fit: cover;
    object-position: center;
    background: linear-gradient(135deg, rgba(2,6,23,.06), rgba(2,6,23,.02));
}

/* Controls */
.gx-arrow{
    position:absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 44px;
    height: 44px;
    border-radius: 16px;
    border: 1px solid rgba(15,23,42,.12);
    background: rgba(255,255,255,.78);
    box-shadow: 0 18px 40px rgba(2,6,23,.10);
    cursor:pointer;
    display:grid;
    place-items:center;
    z-index: 5;
    transition: transform .18s ease, background .18s ease, opacity .18s ease;
    opacity: .96;
}
.gx-arrow svg{ width: 22px; height: 22px; fill: rgba(15,23,42,.88); }
.gx-arrow:hover{
    background: rgba(255,255,255,.95);
    transform: translateY(-50%) scale(1.03);
    opacity: 1;
}
.gx-prev{ left: 14px; }
.gx-next{ right: 14px; }

/* Dots */
.gx-dots{
    position:absolute;
    left: 0; right: 0;
    bottom: 14px;
    display:flex;
    justify-content:center;
    gap: 10px;
    z-index: 5;
}
.gx-dotbtn{
    width: 10px; height: 10px;
    border-radius: 999px;
    border: 0;
    cursor:pointer;
    background: rgba(15,23,42,.18);
    transition: transform .18s ease, background .18s ease, width .18s ease;
}
.gx-dotbtn.is-active{
    background: linear-gradient(135deg, #e11d48 0%, #f59e0b 120%);
    width: 28px;
}

/* Responsive */
@media (max-width: 980px){
    .gx-prev{ left: 10px; }
    .gx-next{ right: 10px; }
}
@media (max-width: 520px){
    .gx-arrow{ width: 40px; height: 40px; border-radius: 14px; }
    .gx-dots{ bottom: 10px; }
}

/* Reduced motion */
@media (prefers-reduced-motion: reduce){
    .gx-slides{ transition: none; }
    .gx-arrow:hover{ transform: translateY(-50%); }
}
</style>

<script>
(() => {
    const root = document.querySelector('[data-gx-slider]');
    if (!root) return;

    const track  = root.querySelector('[data-gx-track]');
    const slides = Array.from(root.querySelectorAll('[data-gx-slide]'));
    const prev   = root.querySelector('[data-gx-prev]');
    const next   = root.querySelector('[data-gx-next]');
    const dots   = Array.from(root.querySelectorAll('[data-gx-dot]'));

    let index = 0;
    let timer = null;
    const intervalMs = 5000;

    const setActive = (i) => {
        index = (i + slides.length) % slides.length;
        track.style.transform = `translateX(-${index * 100}%)`;

        dots.forEach((d, idx) => {
            const active = idx === index;
            d.classList.toggle('is-active', active);
            d.setAttribute('aria-current', active ? 'true' : 'false');
        });
    };

    const start = () => {
        stop();
        timer = setInterval(() => setActive(index + 1), intervalMs);
    };

    const stop = () => {
        if (timer) clearInterval(timer);
        timer = null;
    };

    prev?.addEventListener('click', () => { setActive(index - 1); start(); });
    next?.addEventListener('click', () => { setActive(index + 1); start(); });

    dots.forEach((btn) => {
        btn.addEventListener('click', () => {
            const i = Number(btn.getAttribute('data-gx-dot'));
            if (!Number.isNaN(i)) { setActive(i); start(); }
        });
    });

    root.addEventListener('mouseenter', stop);
    root.addEventListener('mouseleave', start);
    root.addEventListener('focusin', stop);
    root.addEventListener('focusout', start);

    setActive(0);
    start();
})();
</script>

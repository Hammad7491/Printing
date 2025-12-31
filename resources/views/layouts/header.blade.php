{{-- resources/views/partials/header.blade.php --}}
<header class="gx-header" id="gxHeader">
    <div class="gx-container">
        <div class="gx-bar">
            {{-- Left: Logo (your image) --}}
            <a href="{{ route('indexes') }}" class="gx-logo" aria-label="Genix Home">
                <img
                    class="gx-logo-img"
                    src="{{ asset('assets/images/logo.png') }}"
                    alt="Genix Printing"
                    loading="eager"
                    decoding="async"
                />
            </a>

            {{-- Center: Search (smaller) --}}
            <form class="gx-search" action="{{ route('indexes') }}" method="GET" role="search" aria-label="Search products">
                <label class="sr-only" for="gxSearchTop">Search</label>

                <div class="gx-search-wrap">
                    <input
                        id="gxSearchTop"
                        class="gx-search-input"
                        type="search"
                        name="q"
                        value="{{ request('q') }}"
                        placeholder="Search"
                        autocomplete="off"
                    />

                    <button class="gx-search-iconbtn" type="submit" aria-label="Search">
                        <svg class="gx-ico" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M10.5 3a7.5 7.5 0 1 0 4.63 13.4l3.74 3.74a1 1 0 0 0 1.41-1.41l-3.74-3.74A7.5 7.5 0 0 0 10.5 3Zm0 2a5.5 5.5 0 1 1 0 11 5.5 5.5 0 0 1 0-11Z"/>
                        </svg>
                    </button>
                </div>
            </form>

            {{-- Right: Reviews (clean, no outer border/shadow) --}}
            <div class="gx-reviews" aria-label="Customer reviews summary">
                <div class="gx-review-avatar" aria-hidden="true"></div>

                <div class="gx-review-meta">
                    <div class="gx-stars" aria-label="5 out of 5 stars">
                        <span class="gx-star" aria-hidden="true">★</span>
                        <span class="gx-star" aria-hidden="true">★</span>
                        <span class="gx-star" aria-hidden="true">★</span>
                        <span class="gx-star" aria-hidden="true">★</span>
                        <span class="gx-star" aria-hidden="true">★</span>
                    </div>

                    <div class="gx-review-text">
                        <span class="gx-score">5.0</span>
                        <span class="gx-sep">•</span>
                        <span class="gx-count">120+ reviews</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap');

:root{
    --gx-font: "Plus Jakarta Sans", ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";
    --gx-bg: rgba(255,255,255,.78);
    --gx-text: #0f172a;
    --gx-muted: #64748b;
    --gx-border: rgba(15,23,42,.12);
    --gx-accent: #e11d48;
    --gx-accent2: #f59e0b;
    --gx-ring: 0 0 0 4px rgba(225,29,72,.14);
    --gx-max: 1180px;
}

*{ box-sizing:border-box; }
.gx-header, .gx-header *{ font-family: var(--gx-font); }

.sr-only{
    position:absolute!important;
    width:1px;height:1px;
    padding:0;margin:-1px;overflow:hidden;
    clip:rect(0,0,0,0);white-space:nowrap;border:0;
}

.gx-container{
    max-width: var(--gx-max);
    margin: 0 auto;
    padding: 14px 18px;
}

.gx-header{
    position: sticky;
    top: 0;
    z-index: 50;
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    background: var(--gx-bg);
    border-bottom: 1px solid var(--gx-border);
}

/* Main bar */
.gx-bar{
    display:grid;
    grid-template-columns: auto 1fr auto; /* logo | search | reviews */
    align-items:center;
    gap: 14px;
    padding: 12px 14px;
    border-radius: 22px;
    background: rgba(255,255,255,.65);
    border: 1px solid var(--gx-border);
    box-shadow: 0 14px 44px rgba(2,6,23,.08);
}

/* Logo */
.gx-logo{
    display:flex;
    align-items:center;
    text-decoration:none;
    user-select:none;
}
.gx-logo-img{
    height: 44px;
    width: auto;
    display:block;
    object-fit: contain;
}

/* Search (smaller) */
.gx-search{
    margin: 0;
    width: 100%;
    max-width: 440px;          /* smaller than before */
    justify-self: center;
}
.gx-search-wrap{
    display:flex;
    align-items:center;
    gap: 10px;

    padding: 8px 10px;         /* smaller padding */
    border-radius: 999px;
    background: rgba(255,255,255,.92);
    border: 1px solid var(--gx-border);
    box-shadow: 0 10px 28px rgba(2,6,23,.06);
    transition: box-shadow .18s ease, border-color .18s ease, background .18s ease;
}
.gx-search-wrap:focus-within{
    border-color: rgba(225,29,72,.35);
    box-shadow: var(--gx-ring), 0 16px 40px rgba(2,6,23,.10);
    background: rgba(255,255,255,.98);
}
.gx-search-input{
    flex: 1;
    border: 0;
    outline: none;
    font-size: 14px;
    color: var(--gx-text);
    background: transparent;
    padding: 6px 8px;
}
.gx-search-input::placeholder{ color: rgba(100,116,139,.9); }

.gx-search-iconbtn{
    border: 0;
    cursor: pointer;
    width: 40px;               /* smaller button */
    height: 40px;
    border-radius: 999px;
    color: #fff;
    display:grid;
    place-items:center;
    background: linear-gradient(135deg, var(--gx-accent) 0%, #fb7185 55%, var(--gx-accent2) 120%);
    box-shadow: 0 14px 26px rgba(225,29,72,.18);
    transition: transform .18s ease, filter .18s ease;
}
.gx-search-iconbtn:hover{ transform: translateY(-1px); filter: brightness(1.03); }
.gx-ico{ width: 18px; height: 18px; fill: currentColor; opacity: .95; }

/* Reviews (clean: no border/shadow box) */
.gx-reviews{
    display:flex;
    align-items:center;
    gap: 10px;

    padding: 0;               /* remove pill padding */
    background: transparent;  /* remove floating background */
    border: 0;                /* remove border */
    box-shadow: none;         /* remove shadow */
    white-space: nowrap;
}
.gx-review-avatar{
    width: 38px; height: 38px;
    border-radius: 999px;
    background:
        radial-gradient(120% 120% at 30% 20%, rgba(245,158,11,.35), transparent 55%),
        radial-gradient(120% 120% at 70% 60%, rgba(225,29,72,.25), transparent 55%),
        rgba(15,23,42,.06);
}
.gx-review-meta{ display:flex; flex-direction:column; gap: 2px; }
.gx-stars{ display:flex; gap: 2px; line-height: 1; }
.gx-star{ font-size: 14px; color: rgba(245,158,11,.95); }
.gx-review-text{
    font-weight: 800;
    font-size: 13px;
    color: rgba(15,23,42,.72);
}
.gx-score{ color: var(--gx-text); }
.gx-sep{ margin: 0 6px; color: rgba(15,23,42,.38); }
.gx-count{ color: rgba(15,23,42,.62); }

/* Responsive */
@media (max-width: 980px){
    .gx-search{ max-width: 380px; }
}
@media (max-width: 740px){
    .gx-bar{
        grid-template-columns: 1fr auto;
        grid-template-areas:
            "logo reviews"
            "search search";
        row-gap: 10px;
    }
    .gx-logo{ grid-area: logo; }
    .gx-reviews{ grid-area: reviews; justify-self: end; }
    .gx-search{ grid-area: search; max-width: none; justify-self: stretch; }
}
@media (max-width: 420px){
    .gx-container{ padding: 12px 14px; }
    .gx-bar{ padding: 12px 12px; border-radius: 20px; }
    .gx-logo-img{ height: 40px; }
    .gx-search-iconbtn{ width: 38px; height: 38px; }
    .gx-review-text{ font-size: 12.5px; }
}
</style>

{{-- resources/views/partials/header.blade.php --}}
<header class="gx-header" id="gxHeader">
    <div class="gx-container">
        <div class="gx-bar">
            {{-- Left: Logo --}}
            <a href="{{ route('indexes') }}" class="gx-logo" aria-label="Genix Home">
                {{-- If you have a real logo image, use this instead:
                <img class="gx-logo-img" src="{{ asset('assets/images/logo.png') }}" alt="Genix Printing">
                --}}
                <span class="gx-logo-mark" aria-hidden="true">G</span>
                <span class="gx-logo-text">
                    <span class="gx-logo-name">Genix</span>
                    <span class="gx-logo-tag">printing</span>
                </span>
            </a>

            {{-- Center: Search --}}
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

            {{-- Right: Reviews --}}
            <div class="gx-reviews" aria-label="Customer reviews summary">
                <div class="gx-review-avatar" aria-hidden="true"></div>

                <div class="gx-review-meta">
                    <div class="gx-stars" aria-label="5 out of 5 stars">
                        <span class="gx-star is-on" aria-hidden="true">★</span>
                        <span class="gx-star is-on" aria-hidden="true">★</span>
                        <span class="gx-star is-on" aria-hidden="true">★</span>
                        <span class="gx-star is-on" aria-hidden="true">★</span>
                        <span class="gx-star is-on" aria-hidden="true">★</span>
                    </div>

                    <div class="gx-review-text">
                        <span class="gx-score">5.0</span>
                        <span class="gx-sep">•</span>
                        <span class="gx-count">120+ reviews</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Mobile: Search + Reviews row --}}
        <div class="gx-mobile-row">
            <form class="gx-search gx-search--mobile" action="{{ route('indexes') }}" method="GET" role="search" aria-label="Search products">
                <label class="sr-only" for="gxSearchM">Search</label>

                <div class="gx-search-wrap">
                    <input
                        id="gxSearchM"
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

            <div class="gx-reviews gx-reviews--mobile" aria-label="Customer reviews summary">
                <div class="gx-review-avatar" aria-hidden="true"></div>

                <div class="gx-review-meta">
                    <div class="gx-stars" aria-label="5 out of 5 stars">
                        <span class="gx-star is-on" aria-hidden="true">★</span>
                        <span class="gx-star is-on" aria-hidden="true">★</span>
                        <span class="gx-star is-on" aria-hidden="true">★</span>
                        <span class="gx-star is-on" aria-hidden="true">★</span>
                        <span class="gx-star is-on" aria-hidden="true">★</span>
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
/* ===== Header: Logo | Search | Reviews ===== */
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
    padding: 14px 16px;
    border-radius: 22px;
    background: rgba(255,255,255,.65);
    border: 1px solid var(--gx-border);
    box-shadow: 0 14px 44px rgba(2,6,23,.08);
}

/* Logo */
.gx-logo{
    display:flex;
    align-items:center;
    gap: 10px;
    color: var(--gx-text);
    user-select:none;
    text-decoration:none;
    flex: 0 0 auto;
}
.gx-logo-img{ height:44px; width:auto; display:block; }
.gx-logo-mark{
    width: 44px; height: 44px;
    border-radius: 14px;
    display:grid; place-items:center;
    font-weight: 900;
    letter-spacing: .5px;
    color: #fff;
    background: radial-gradient(120% 120% at 20% 10%, var(--gx-accent2) 0%, var(--gx-accent) 55%, #7c3aed 100%);
    box-shadow: 0 18px 40px rgba(225,29,72,.22);
}
.gx-logo-text{ display:flex; flex-direction:column; line-height:1; }
.gx-logo-name{ font-size: 18px; font-weight: 900; letter-spacing: .2px; }
.gx-logo-tag{
    margin-top: 3px;
    font-size: 12px;
    font-weight: 800;
    color: var(--gx-muted);
    letter-spacing: .14em;
    text-transform: uppercase;
}

/* Search (center) */
.gx-search{
    margin: 0;
    width: 100%;
    max-width: 620px;
    justify-self: center;
}
.gx-search-wrap{
    display:flex;
    align-items:center;
    gap: 10px;
    padding: 10px 12px;
    border-radius: 999px;
    background: rgba(255,255,255,.92);
    border: 1px solid var(--gx-border);
    box-shadow: 0 10px 28px rgba(2,6,23,.06);
    transition: box-shadow .18s ease, border-color .18s ease, background .18s ease;
}
.gx-search-wrap:focus-within{
    border-color: rgba(225,29,72,.35);
    box-shadow: var(--gx-ring), 0 18px 45px rgba(2,6,23,.10);
    background: rgba(255,255,255,.98);
}
.gx-search-input{
    flex: 1;
    border: 0;
    outline: none;
    font-size: 15px;
    color: var(--gx-text);
    background: transparent;
    padding: 6px 6px;
}
.gx-search-input::placeholder{ color: rgba(100,116,139,.9); }

.gx-search-iconbtn{
    border: 0;
    cursor: pointer;
    width: 44px;
    height: 44px;
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

/* Reviews (right) */
.gx-reviews{
    display:flex;
    align-items:center;
    gap: 10px;
    padding: 8px 10px;
    border-radius: 16px;
    background: rgba(255,255,255,.55);
    border: 1px solid rgba(15,23,42,.10);
    box-shadow: 0 12px 30px rgba(2,6,23,.06);
    white-space: nowrap;
}
.gx-review-avatar{
    width: 36px; height: 36px;
    border-radius: 999px;
    background:
        radial-gradient(120% 120% at 30% 20%, rgba(245,158,11,.35), transparent 55%),
        radial-gradient(120% 120% at 70% 60%, rgba(225,29,72,.25), transparent 55%),
        rgba(15,23,42,.06);
    border: 1px solid rgba(15,23,42,.10);
}
.gx-review-meta{ display:flex; flex-direction:column; gap: 2px; }
.gx-stars{ display:flex; gap: 2px; line-height: 1; }
.gx-star{
    font-size: 14px;
    color: rgba(245,158,11,.95); /* amber */
}
.gx-review-text{
    font-weight: 800;
    font-size: 12.5px;
    color: rgba(15,23,42,.72);
}
.gx-score{ color: var(--gx-text); }
.gx-sep{ margin: 0 6px; color: rgba(15,23,42,.38); }
.gx-count{ color: rgba(15,23,42,.62); }

/* Mobile extra row */
.gx-mobile-row{
    display:none;
    margin-top: 10px;
    gap: 10px;
}
.gx-search--mobile{ max-width: none; justify-self: stretch; }
.gx-reviews--mobile{ justify-content: center; width: 100%; }

/* Responsive */
@media (max-width: 980px){
    .gx-bar{ grid-template-columns: auto 1fr auto; }
    .gx-search{ max-width: 520px; }
    .gx-review-text{ display:none; } /* keep it clean on medium screens */
}
@media (max-width: 740px){
    .gx-bar{
        grid-template-columns: auto auto;
        gap: 12px;
    }
    .gx-search{ display:none; }
    .gx-reviews{ padding: 8px 10px; }
    .gx-mobile-row{ display:grid; grid-template-columns: 1fr; }
}
@media (max-width: 420px){
    .gx-logo-name{ font-size: 16px; }
    .gx-logo-mark{ width: 42px; height: 42px; }
    .gx-container{ padding: 12px 14px; }
    .gx-bar{ padding: 12px 12px; border-radius: 20px; }
    .gx-search-iconbtn{ width: 42px; height: 42px; }
}
</style>

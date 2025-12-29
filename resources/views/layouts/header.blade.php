{{-- resources/views/partials/header.blade.php --}}
<header class="gx-header" id="gxHeader">
    <div class="gx-container">
        <div class="gx-bar">
            {{-- Left: Logo --}}
            <a href="{{ route('indexes') }}" class="gx-logo" aria-label="Genix Home">
                <span class="gx-logo-mark" aria-hidden="true">G</span>
                <span class="gx-logo-text">
                    <span class="gx-logo-name">Genix</span>
                    <span class="gx-logo-tag">printing</span>
                </span>
            </a>

            {{-- Center: Desktop Nav --}}
            <nav class="gx-nav" aria-label="Primary navigation">
                <a href="{{ route('indexes') }}"
                   class="gx-navlink {{ request()->routeIs('indexes') ? 'is-active' : '' }}">
                    Home
                </a>

                <a href=""
                   class="gx-navlink {{ request()->routeIs('products*') ? 'is-active' : '' }}">
                    Products
                </a>

                <a href=""
                   class="gx-navlink {{ request()->routeIs('services*') ? 'is-active' : '' }}">
                    Services
                </a>

                <a href=""
                   class="gx-navlink {{ request()->routeIs('about') ? 'is-active' : '' }}">
                    About
                </a>

                <a href=""
                   class="gx-navlink {{ request()->routeIs('contact') ? 'is-active' : '' }}">
                    Contact Us
                </a>
            </nav>

            {{-- Right: Search input with icon (desktop) + Mobile toggle --}}
            <div class="gx-right">
                <form class="gx-search" action="" method="GET" role="search">
                    <label class="sr-only" for="gxSearchTop">Search</label>
                    <div class="gx-search-wrap">
                        <input
                            id="gxSearchTop"
                            class="gx-search-input"
                            type="search"
                            name="q"
                            value="{{ request('q') }}"
                            placeholder="Search products..."
                            autocomplete="off"
                        />

                        <button class="gx-search-iconbtn" type="submit" aria-label="Search">
                            <svg class="gx-ico" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M10.5 3a7.5 7.5 0 1 0 4.63 13.4l3.74 3.74a1 1 0 0 0 1.41-1.41l-3.74-3.74A7.5 7.5 0 0 0 10.5 3Zm0 2a5.5 5.5 0 1 1 0 11 5.5 5.5 0 0 1 0-11Z"/>
                            </svg>
                        </button>
                    </div>
                </form>

                <button class="gx-burger" type="button" aria-label="Open menu" aria-controls="gxMobile" aria-expanded="false" id="gxBurger">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile panel --}}
    <div class="gx-mobile" id="gxMobile" hidden>
        <div class="gx-mobile-inner">
            <div class="gx-mobile-top">
                <div class="gx-mobile-title">Menu</div>
                <button class="gx-mobile-close" type="button" aria-label="Close menu" id="gxClose">Close</button>
            </div>

            <form class="gx-search gx-search-mobile" action="" method="GET" role="search">
                <label class="sr-only" for="gxSearchM">Search</label>
                <div class="gx-search-wrap gx-search-wrap--mobile">
                    <input
                        id="gxSearchM"
                        class="gx-search-input"
                        type="search"
                        name="q"
                        value="{{ request('q') }}"
                        placeholder="Search products..."
                        autocomplete="off"
                    />

                    <button class="gx-search-iconbtn" type="submit" aria-label="Search">
                        <svg class="gx-ico" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M10.5 3a7.5 7.5 0 1 0 4.63 13.4l3.74 3.74a1 1 0 0 0 1.41-1.41l-3.74-3.74A7.5 7.5 0 0 0 10.5 3Zm0 2a5.5 5.5 0 1 1 0 11 5.5 5.5 0 0 1 0-11Z"/>
                        </svg>
                    </button>
                </div>
            </form>

            <nav class="gx-mobile-nav" aria-label="Mobile navigation">
                <a href="{{ route('indexes') }}" class="{{ request()->routeIs('indexes') ? 'is-active' : '' }}">Home</a>
                <a href="" class="{{ request()->routeIs('products*') ? 'is-active' : '' }}">Products</a>
                <a href="" class="{{ request()->routeIs('services*') ? 'is-active' : '' }}">Services</a>
                <a href="" class="{{ request()->routeIs('about') ? 'is-active' : '' }}">About</a>
                <a href="" class="{{ request()->routeIs('contact') ? 'is-active' : '' }}">Contact Us</a>
            </nav>
        </div>
    </div>
</header>

<style>
/* ===== Font (clean + modern) ===== */
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

/* ===== Single row layout ===== */
.gx-bar{
    display:flex;
    align-items:center;
    justify-content:space-between;
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
    flex: 0 0 auto;
    text-decoration:none;
}
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
.gx-logo-name{
    font-size: 18px;
    font-weight: 900;
    letter-spacing: .2px;
}
.gx-logo-tag{
    margin-top: 3px;
    font-size: 12px;
    font-weight: 800;
    color: var(--gx-muted);
    letter-spacing: .14em;
    text-transform: uppercase;
}

/* Nav center */
.gx-nav{
    display:flex;
    align-items:center;
    justify-content:center;
    gap: 6px;
    flex: 1;
    min-width: 0;
}
.gx-navlink{
    text-decoration:none;
    appearance:none;
    border: 0;
    background: transparent;
    cursor: pointer;

    color: rgba(15,23,42,.88);
    font-weight: 800;
    font-size: 13px;
    padding: 10px 14px;
    border-radius: 14px;
    transition: background .18s ease, color .18s ease, transform .18s ease, box-shadow .18s ease;
    white-space: nowrap;
}
.gx-navlink:hover{
    background: rgba(225,29,72,.08);
    color: var(--gx-text);
    transform: translateY(-1px);
}
.gx-navlink.is-active{
    background: rgba(15,23,42,.06);
    box-shadow: inset 0 0 0 1px rgba(15,23,42,.10);
}

/* Right side */
.gx-right{
    display:flex;
    align-items:center;
    gap: 10px;
    flex: 0 0 auto;
}

/* Search input (right) */
.gx-search{
    margin: 0;
    width: 320px;
    max-width: 40vw;
}
.gx-search-wrap{
    display:flex;
    align-items:center;
    gap: 10px;
    padding: 8px 10px;
    border-radius: 16px;
    background: rgba(255,255,255,.9);
    border: 1px solid var(--gx-border);
    box-shadow: 0 10px 28px rgba(2,6,23,.06);
    transition: box-shadow .18s ease, border-color .18s ease;
}
.gx-search-wrap:focus-within{
    border-color: rgba(225,29,72,.35);
    box-shadow: var(--gx-ring), 0 18px 45px rgba(2,6,23,.10);
}
.gx-search-input{
    flex: 1;
    border: 0;
    outline: none;
    font-size: 14px;
    color: var(--gx-text);
    background: transparent;
}
.gx-search-input::placeholder{ color: rgba(100,116,139,.9); }

.gx-search-iconbtn{
    border: 0;
    cursor: pointer;
    width: 38px;
    height: 38px;
    border-radius: 14px;
    color: #fff;
    display:grid;
    place-items:center;
    background: linear-gradient(135deg, var(--gx-accent) 0%, #fb7185 55%, var(--gx-accent2) 120%);
    box-shadow: 0 14px 26px rgba(225,29,72,.18);
    transition: transform .18s ease, filter .18s ease;
}
.gx-search-iconbtn:hover{ transform: translateY(-1px); filter: brightness(1.03); }
.gx-search-iconbtn:active{ transform: translateY(0px); }

.gx-ico{ width: 18px; height: 18px; fill: currentColor; opacity: .95; }

/* Burger */
.gx-burger{
    display:none;
    width: 44px; height: 44px;
    border-radius: 16px;
    border: 1px solid var(--gx-border);
    background: rgba(255,255,255,.7);
    cursor:pointer;
    position: relative;
}
.gx-burger span{
    position:absolute;
    left: 12px; right: 12px;
    height: 2px;
    background: var(--gx-text);
    border-radius: 999px;
    transition: transform .18s ease, top .18s ease, opacity .18s ease;
}
.gx-burger span:nth-child(1){ top: 14px; }
.gx-burger span:nth-child(2){ top: 21px; }
.gx-burger span:nth-child(3){ top: 28px; }

/* ===== Mobile panel ===== */
.gx-mobile{
    border-top: 1px solid var(--gx-border);
    background: rgba(255,255,255,.92);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
}
.gx-mobile-inner{
    max-width: var(--gx-max);
    margin: 0 auto;
    padding: 14px 18px 18px;
}
.gx-mobile-top{
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom: 10px;
}
.gx-mobile-title{
    font-weight: 900;
    color: var(--gx-text);
}
.gx-mobile-close{
    border: 1px solid var(--gx-border);
    background: rgba(255,255,255,.85);
    border-radius: 12px;
    padding: 8px 10px;
    font-weight: 900;
    cursor:pointer;
}
.gx-search-wrap--mobile{
    padding: 10px 12px;
    border-radius: 18px;
}
.gx-search-mobile{
    width: 100%;
    max-width: none;
}

/* Mobile links */
.gx-mobile-nav{
    display:grid;
    gap: 10px;
    margin-top: 12px;
}
.gx-mobile-nav a{
    text-decoration:none;
    border: 1px solid var(--gx-border);
    background: rgba(255,255,255,.85);
    color: var(--gx-text);
    font-weight: 850;
    padding: 12px 14px;
    border-radius: 16px;
    transition: background .18s ease, transform .18s ease;
}
.gx-mobile-nav a:hover{ transform: translateY(-1px); background: rgba(225,29,72,.06); }
.gx-mobile-nav a.is-active{
    background: rgba(15,23,42,.06);
    box-shadow: inset 0 0 0 1px rgba(15,23,42,.10);
}

/* ===== Responsive ===== */
@media (max-width: 1000px){
    .gx-search{ width: 280px; }
}
@media (max-width: 900px){
    .gx-nav{ display:none; }
    .gx-search{ width: 240px; max-width: 52vw; }
    .gx-burger{ display:inline-block; }
}
@media (max-width: 640px){
    .gx-search{ display:none; }
}
@media (max-width: 420px){
    .gx-logo-name{ font-size: 16px; }
    .gx-logo-mark{ width: 42px; height: 42px; }
    .gx-container{ padding: 12px 14px; }
    .gx-bar{ padding: 12px 12px; }
}
</style>

<script>
(() => {
    const burger = document.getElementById('gxBurger');
    const closeBtn = document.getElementById('gxClose');
    const panel  = document.getElementById('gxMobile');
    if (!burger || !panel) return;

    const setOpen = (open) => {
        burger.setAttribute('aria-expanded', String(open));
        if (open) {
            panel.hidden = false;
            const spans = burger.querySelectorAll('span');
            if (spans.length === 3) {
                spans[0].style.top = '21px';
                spans[0].style.transform = 'rotate(45deg)';
                spans[1].style.opacity = '0';
                spans[2].style.top = '21px';
                spans[2].style.transform = 'rotate(-45deg)';
            }
        } else {
            panel.hidden = true;
            const spans = burger.querySelectorAll('span');
            if (spans.length === 3) {
                spans[0].style.top = '14px';
                spans[0].style.transform = 'rotate(0deg)';
                spans[1].style.opacity = '1';
                spans[2].style.top = '28px';
                spans[2].style.transform = 'rotate(0deg)';
            }
        }
    };

    burger.addEventListener('click', () => {
        const isOpen = burger.getAttribute('aria-expanded') === 'true';
        setOpen(!isOpen);
    });

    closeBtn?.addEventListener('click', () => setOpen(false));

    window.addEventListener('resize', () => {
        if (window.innerWidth > 900) setOpen(false);
    });

    document.addEventListener('click', (e) => {
        const isOpen = burger.getAttribute('aria-expanded') === 'true';
        if (!isOpen) return;
        if (e.target.closest('#gxHeader')) return;
        setOpen(false);
    });

    panel.addEventListener('click', (e) => {
        const link = e.target.closest('.gx-mobile-nav a');
        if (!link) return;
        setOpen(false);
    });
})();
</script>

{{-- resources/views/partials/header.blade.php --}}
<header class="gx-header" id="gxHeader">
    <div class="gx-container">
        <div class="gx-bar">

            {{-- Left: Logo --}}
            <a href="{{ route('indexes') }}" class="gx-logo" aria-label="Genix Home">
                <img
                    class="gx-logo-img"
                    src="{{ asset('assets/images/logo.png') }}"
                    alt="Genix Printing"
                    loading="eager"
                    decoding="async"
                />
            </a>

            {{-- Right: Search (moved to right side, reviews removed) --}}
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

        </div>
    </div>
</header>

<style>
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap');

:root{
    --gx-font: "Plus Jakarta Sans", ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";
    --gx-bg: rgba(255,255,255,.78);
    --gx-text: #0f172a;
    --gx-border: rgba(15,23,42,.10);
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
    padding: 12px 18px;
}

/* Header shell */
.gx-header{
    position: sticky;
    top: 0;
    z-index: 50;
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    background: var(--gx-bg);
    border-bottom: 0;
}

/* ✅ Layout: Logo left, Search right */
.gx-bar{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap: 14px;
    padding: 6px 0;
    flex-wrap: wrap; /* mobile wrap */
}

/* Logo */
.gx-logo{ display:flex; align-items:center; text-decoration:none; user-select:none; }
.gx-logo-img{
    height: 78px;
    width: auto;
    max-width: 300px;
    display:block;
    object-fit: contain;
}

/* ✅ Search on right */
.gx-search{
    margin: 0;
    width: min(420px, 100%);
    margin-left: auto; /* pushes to right */
}

/* Search UI */
.gx-search-wrap{
    height: 44px;
    display:flex;
    align-items:center;
    gap: 8px;

    padding: 4px 4px 4px 12px;
    border-radius: 999px;
    background: rgba(255,255,255,.92);
    border: 1px solid var(--gx-border);
    box-shadow: 0 10px 26px rgba(2,6,23,.06);
    transition: box-shadow .18s ease, border-color .18s ease, background .18s ease;
}
.gx-search-wrap:focus-within{
    border-color: rgba(225,29,72,.28);
    box-shadow: var(--gx-ring), 0 14px 34px rgba(2,6,23,.10);
    background: rgba(255,255,255,.98);
}
.gx-search-input{
    flex: 1;
    min-width: 0;
    height: 100%;
    border: 0;
    outline: none;
    font-size: 13.5px;
    font-weight: 600;
    color: var(--gx-text);
    background: transparent;
    padding: 0;
}
.gx-search-input::placeholder{ color: rgba(100,116,139,.90); }

.gx-search-iconbtn{
    border: 0;
    cursor: pointer;
    width: 36px;
    height: 36px;
    border-radius: 999px;
    color: #fff;
    display:grid;
    place-items:center;
    background: linear-gradient(135deg, var(--gx-accent) 0%, #fb7185 55%, var(--gx-accent2) 120%);
    box-shadow: 0 12px 22px rgba(225,29,72,.18);
    transition: transform .18s ease, filter .18s ease;
}
.gx-search-iconbtn:hover{ transform: translateY(-1px); filter: brightness(1.03); }
.gx-ico{ width: 16px; height: 16px; fill: currentColor; opacity: .95; }

/* Responsive */
@media (max-width: 980px){
    .gx-search{ width: min(360px, 100%); }
    .gx-logo-img{ height: 65px; }
}

/* ✅ On small screens: logo top, search full width under it */
@media (max-width: 740px){
    .gx-bar{ align-items: center; }
    .gx-search{
        width: 100%;
        margin-left: 0;
    }
}

@media (max-width: 420px){
    .gx-container{ padding: 10px 14px; }

    .gx-logo-img{
        height: 53px;
        max-width: 230px;
    }

    .gx-search-wrap{
        height: 42px;
        padding: 4px 4px 4px 10px;
        box-shadow: 0 10px 22px rgba(2,6,23,.06);
    }
    .gx-search-input{ font-size: 13px; }
    .gx-search-iconbtn{ width: 34px; height: 34px; }
    .gx-ico{ width: 15px; height: 15px; }
}
</style>

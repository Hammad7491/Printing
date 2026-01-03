{{-- resources/views/partials/header.blade.php --}}
@php
    /**
     * ✅ Put the Canva review avatar image in ONE of these paths (public/...)
     * Example: public/assets/images/review-avatar.png
     */
    $reviewAvatarCandidates = [
        'assets/images/review-avatar.png',
        'assets/images/review-avatar.jpg',
        'assets/images/reviews/review-avatar.png',
        'assets/images/reviews/review-avatar.jpg',
        'assets/images/reviews/avatar.png',
        'assets/images/reviews/avatar.jpg',
    ];

    $reviewAvatarUrl = null;
    foreach ($reviewAvatarCandidates as $p) {
        if (file_exists(public_path($p))) {
            $reviewAvatarUrl = asset($p);
            break;
        }
    }
@endphp

<header class="gx-header" id="gxHeader">
    <div class="gx-container">
        <div class="gx-bar">
            {{-- Left: Logo (✅ +15% size) --}}
            <a href="{{ route('indexes') }}" class="gx-logo" aria-label="Genix Home">
                <img
                    class="gx-logo-img"
                    src="{{ asset('assets/images/logo.png') }}"
                    alt="Genix Printing"
                    loading="eager"
                    decoding="async"
                />
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

            {{-- Right: Reviews (✅ Avatar TOP, Stars BELOW like Canva reference) --}}
            <div class="gx-reviews" aria-label="Customer reviews summary">
                <div class="gx-review-avatar" aria-hidden="true">
                    @if($reviewAvatarUrl)
                        <img class="gx-review-img" src="{{ $reviewAvatarUrl }}" alt="" loading="eager" decoding="async">
                    @else
                        {{-- fallback (if image not added yet) --}}
                        <svg class="gx-review-ic" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 12.2c2.55 0 4.6-2.1 4.6-4.7S14.55 2.8 12 2.8 7.4 4.9 7.4 7.5s2.05 4.7 4.6 4.7Z"/>
                            <path d="M4.2 20.6c.9-4 4.1-6.2 7.8-6.2s6.9 2.2 7.8 6.2c.1.5-.3 1-.8 1H5c-.5 0-.9-.5-.8-1Z"/>
                        </svg>
                    @endif
                </div>

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
                    <span class="gx-count">5+ reviews</span>
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

/* Layout */
.gx-bar{
    display:grid;
    grid-template-columns: auto 1fr auto;
    align-items:center;
    gap: 12px;
    padding: 6px 0;
}

/* ✅ Logo (+15%) */
.gx-logo{ display:flex; align-items:center; text-decoration:none; user-select:none; }
.gx-logo-img{
    height: 72px;           /* +15% */
    width: auto;
    max-width: 300px;
    display:block;
    object-fit: contain;
}

/* ✅ Search (smaller height + smart) */
.gx-search{
    margin: 0;
    width: 100%;
    max-width: 390px;
    justify-self: center;
}
.gx-search-wrap{
    height: 44px;                 /* ✅ fixed compact height */
    display:flex;
    align-items:center;
    gap: 8px;

    padding: 4px 4px 4px 12px;    /* ✅ smaller + clean */
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
    padding: 0;                   /* height controlled by wrap */
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

/* ✅ Reviews: Avatar TOP, Stars BELOW (like reference) */
.gx-reviews{
    display:flex;
    flex-direction: column;     /* ✅ vertical stack */
    align-items:center;
    gap: 6px;
    white-space: nowrap;
    padding: 0;
}

/* avatar circle */
.gx-review-avatar{
    width: 37px;
    height: 37px;
    border-radius: 999px;
    background:
        radial-gradient(120% 120% at 30% 20%, rgba(245,158,11,.20), transparent 58%),
        radial-gradient(120% 120% at 70% 70%, rgba(225,29,72,.18), transparent 58%),
        rgba(15,23,42,.05);
    border: 1px solid rgba(15,23,42,.10);
    box-shadow: 0 12px 26px rgba(2,6,23,.10);
    display:grid;
    place-items:center;
    overflow:hidden;
}
.gx-review-img{
    width: 90%;
    height: 90%;
    object-fit: cover;
    display:block;
}
.gx-review-ic{ width: 20px; height: 20px; fill: rgba(15,23,42,.60); }

/* stars under avatar */
.gx-stars{ display:flex; gap: 2px; line-height: 1; }
.gx-star{ font-size: 10px; color: rgba(245,158,11,.95); }

/* rating line */
.gx-review-text{
    font-weight: 700;
    font-size: 9.5px;
    color: rgba(15,23,42,.72);
    line-height: 1;
}
.gx-score{ color: var(--gx-text); }
.gx-sep{ margin: 0 0px; color: rgba(15,23,42,.38); }
.gx-count{ color: rgba(15,23,42,.62); }

/* Responsive */
@media (max-width: 980px){
    .gx-search{ max-width: 340px; }
    .gx-logo-img{ height: 65px; }
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
    .gx-search{
        grid-area: search;
        justify-self: center;
        width: 100%;
        max-width: 520px;
    }
}
@media (max-width: 420px){
    .gx-container{ padding: 10px 14px; }

    .gx-logo-img{
        height: 53px;
        max-width: 230px;
    }

    /* extra compact search for small phones */
    .gx-search-wrap{
        height: 42px;
        padding: 4px 4px 4px 10px;
        box-shadow: 0 10px 22px rgba(2,6,23,.06);
    }
    .gx-search-input{ font-size: 13px; }
    .gx-search-iconbtn{ width: 34px; height: 34px; }
    .gx-ico{ width: 15px; height: 15px; }

    .gx-review-avatar{ width: 40px; height: 40px; }
    .gx-review-text{ font-size: 12px; }
    .gx-star{ font-size: 12.5px; }
}
</style>

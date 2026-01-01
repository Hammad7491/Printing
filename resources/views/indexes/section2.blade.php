{{-- resources/views/partials/categories.blade.php --}}
<section class="gx-cats" id="gxCategories" aria-label="Categories">
    <div class="gx-container">

        {{-- ✅ Top Tabs (12 items) - SAME SEQUENCE --}}
        <div class="gx-tabs-wrap" aria-label="Category quick tabs wrap">
            <div class="gx-tabs" aria-label="Category quick tabs">
                <a class="gx-tab" href="#" role="button">Name Plates</a>
                <a class="gx-tab" href="#" role="button">Reception Sign</a>
                <a class="gx-tab" href="#" role="button">Villa &amp; Home Sign</a>
                <a class="gx-tab" href="#" role="button">Labels &amp; Tags</a>

                <a class="gx-tab" href="#" role="button">Print &amp; Cut Stickers</a>
                <a class="gx-tab" href="#" role="button">Neon sign</a>
                <a class="gx-tab" href="#" role="button">Cutouts &amp; Props</a>
                <a class="gx-tab" href="#" role="button">Balloons &amp; Arches</a>

                <a class="gx-tab" href="#" role="button">Flags</a>
                <a class="gx-tab" href="#" role="button">Fashion</a>
                <a class="gx-tab" href="#" role="button">Metal Sticker</a>
                <a class="gx-tab" href="#" role="button">Stands</a>
            </div>
        </div>

        {{-- ✅ 12 Categories (4 in a row) --}}
        <div class="gx-cats-grid">

            {{-- 1) Name Plates --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/Name/Name1.jpg') }}" alt="Name Plates" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Name Plates</h3>
                    <a class="gx-cat-link" href="{{ route('name') }}" aria-label="Open Name Plates">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- 2) Reception Sign --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/reception/reception.jpg') }}" alt="Reception Sign" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Reception Sign</h3>
                    <a class="gx-cat-link" href="#" aria-label="Open Reception Sign">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- 3) Villa & Home Sign --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/VillaSign/Villa1.jpg') }}" alt="Villa & Home Sign" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Villa &amp; Home Sign</h3>
                    <a class="gx-cat-link" href="{{ route('villa') }}" aria-label="Open Villa & Home Sign">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- 4) Labels & Tags --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/Labels/Label4.jpg') }}" alt="Labels & Tags" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Labels &amp; Tags</h3>
                    <a class="gx-cat-link" href="{{ route('label') }}" aria-label="Open Labels & Tags">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- 5) Print & Cut Stickers --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/Print/Print2.jpg') }}" alt="Print & Cut Stickers" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Print &amp; Cut Stickers</h3>
                    <a class="gx-cat-link" href="{{ route('print') }}" aria-label="Open Print & Cut Stickers">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- 6) Neon sign --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/neon/Neon2.jpg') }}" alt="Neon sign" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Neon sign</h3>
                    <a class="gx-cat-link" href="{{ route('neon') }}" aria-label="Open Neon sign">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- 7) Cutouts & Props --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/cutt/cut.png') }}" alt="Cutouts & Props" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Cutouts &amp; Props</h3>
                    <a class="gx-cat-link" href="#" aria-label="Open Cutouts & Props">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- 8) Balloons & Arches --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/ballons/ballon.jpeg') }}" alt="Balloons & Arches" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Balloons &amp; Arches</h3>
                    <a class="gx-cat-link" href="{{ route('ballon') }}" aria-label="Open Balloons & Arches">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- 9) Flags --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/Flags/Flags.jpg') }}" alt="Flags" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Flags</h3>
                    <a class="gx-cat-link" href="{{ route('flag') }}" aria-label="Open Flags">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- 10) Fashion --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/fashion/fashion3.jpeg') }}" alt="Fashion" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Fashion</h3>
                    <a class="gx-cat-link" href="{{ route('fashion') }}" aria-label="Open Fashion">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- 11) Metal Sticker --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/metal/metal.png') }}" alt="Metal Sticker" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Metal Sticker</h3>
                    <a class="gx-cat-link" href="#" aria-label="Open Metal Sticker">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- 12) Stands --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/stands/stand1.jpeg') }}" alt="Stands" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Stands</h3>
                    <a class="gx-cat-link" href="{{ route('stand') }}" aria-label="Open Stands">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

        </div>
    </div>
</section>

<style>
/* ===== Categories Section ===== */
.gx-cats{ padding: 18px 0 36px; }

/* ✅ single gray border around the whole tabs bar (NO gray background on tabs/buttons) */
.gx-tabs-wrap{
    border: 1px solid rgba(15,23,42,.16);
    background: transparent;   /* ✅ removed gray background */
    padding: 10px;
    margin-bottom: 14px;
}

/* Tabs container */
.gx-tabs{
    display:flex;
    flex-wrap: nowrap;
    gap: 12px;
    padding: 0;
    background: transparent;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
}
.gx-tabs::-webkit-scrollbar{ display:none; }

/* ✅ Tabs: NO border + NO gray background + sharp corners */
.gx-tab{
    flex: 0 0 auto;
    min-width: 170px;
    text-decoration:none;

    display:inline-flex;
    align-items:center;
    justify-content:center;

    padding: 12px 16px;

    border: 0;
    border-radius: 0;
    background: transparent; /* ✅ removed gray background */

    font-weight: 950;
    font-size: 14px;
    letter-spacing: .02em;
    color: rgba(15,23,42,.85);

    transition: transform .18s ease, color .18s ease;
    white-space: nowrap;
}
.gx-tab:hover{
    transform: translateY(-1px);
    color: rgba(15,23,42,.98);
}
.gx-tab:active{ transform: translateY(0); }

/* ✅ Grid: 4 in a row */
.gx-cats-grid{
    display:grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 14px;
}

/* ✅ Card: sharp corners (NO rounded) */
.gx-cat{
    border-radius: 0; /* ✅ sharp corners */
    border: 1px solid rgba(15,23,42,.10);
    background: rgba(255,255,255,.60);
    box-shadow: 0 18px 55px rgba(2,6,23,.08);
    overflow:hidden;
    transition: transform .18s ease, box-shadow .18s ease, background .18s ease;
    display:flex;
    flex-direction:column;
    min-height: 0;
    height: auto;
}
.gx-cat:hover{
    transform: translateY(-3px);
    background: rgba(255,255,255,.80);
    box-shadow: 0 28px 70px rgba(2,6,23,.12);
}

/* Image area (sharp corners) */
.gx-cat-media{
    position: relative;
    height: 210px;
    background: rgba(15,23,42,.04);
    overflow:hidden;
    border-radius: 0;
}
.gx-cat-img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    display:block;
    border-radius: 0;
    transform: scale(1);
    transition: transform .45s cubic-bezier(.22,.8,.24,1), filter .45s cubic-bezier(.22,.8,.24,1);
}
.gx-cat:hover .gx-cat-img{
    transform: scale(1.06);
    filter: saturate(1.05) contrast(1.02);
}
.gx-cat-overlay{
    position:absolute;
    inset:0;
    background: linear-gradient(180deg, rgba(2,6,23,.00) 0%, rgba(2,6,23,.08) 45%, rgba(2,6,23,.18) 100%);
    pointer-events:none;
}

/* Body */
.gx-cat-body{
    padding: 12px 14px 14px;
    display:flex;
    flex-direction:column;
    gap: 6px;
    margin-top: 0;
}
.gx-cat-title{
    margin: 0;
    font-size: 15px;
    font-weight: 1000;
    color: #e11d48;
    letter-spacing: -0.01em;
    line-height: 1.2;
}
.gx-cat-link{
    border: 0;
    background: transparent;
    cursor:pointer;
    padding: 0;
    text-align:left;

    font-weight: 900;
    font-size: 12px;
    color: rgba(15,23,42,.74);
    text-transform: lowercase;
    letter-spacing: .02em;

    display:inline-flex;
    align-items:center;
    gap: 8px;
    width: fit-content;
    text-decoration: none;
    line-height: 1.2;
}
.gx-cat-link:hover{ color: rgba(15,23,42,.92); }

.gx-chev{
    width: 18px; height: 18px;
    border-radius: 999px;
    border: 1px solid rgba(15,23,42,.14);
    background: rgba(255,255,255,.75);
    position: relative;
    display:inline-block;
    flex: 0 0 auto;
}
.gx-chev::before{
    content:"";
    position:absolute;
    top: 50%; left: 50%;
    width: 6px; height: 6px;
    border-right: 2px solid rgba(15,23,42,.70);
    border-bottom: 2px solid rgba(15,23,42,.70);
    transform: translate(-55%, -55%) rotate(45deg);
}

/* Responsive */
@media (max-width: 1100px){
    .gx-cats-grid{ grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 900px){
    .gx-cats-grid{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .gx-cat-media{ height: 200px; }
}
@media (max-width: 520px){
    .gx-cats-grid{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .gx-cat-media{ height: 185px; }
    .gx-cat-title{ font-size: 14px; }

    .gx-tab{ min-width: 150px; font-size: 13px; padding: 11px 14px; }
    .gx-tabs-wrap{ padding: 8px; }

    .gx-cat-body{ padding: 10px 12px 12px; gap: 5px; }
}
@media (max-width: 360px){
    .gx-cats-grid{ grid-template-columns: 1fr; }
}
</style>

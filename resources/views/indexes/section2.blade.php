{{-- resources/views/partials/categories.blade.php --}}
<section class="gx-cats" id="gxCategories" aria-label="Categories">
    <div class="gx-container">

        {{-- Top Tabs (ONLY UI pills, no filtering) --}}
        <div class="gx-tabs" aria-label="Category quick tabs">
            <a class="gx-tab" href="#" role="button">Office Sign</a>
            <a class="gx-tab" href="#" role="button">Home/Villa Sign</a>
            <a class="gx-tab" href="#" role="button">Labels &amp; Tags</a>
            <a class="gx-tab" href="#" role="button">Print &amp; Cut Sticker</a>
            <a class="gx-tab" href="#" role="button">Stands &amp; Backdrops</a>
            <a class="gx-tab" href="#" role="button">Flags &amp; Fabric</a>
        </div>

        <div class="gx-cats-grid">
            {{-- Card 1 --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/Flags/Flags.jpg') }}" alt="Flags Sign" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Flags Sign</h3>
                    <a class="gx-cat-link" href="#" aria-label="Open Flags Sign">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- Card 2 (Villa link added) --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/VillaSign/Villa1.jpg') }}" alt="Villa Sign" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Villa Sign</h3>
                    <a class="gx-cat-link" href="{{ route('villa') }}" aria-label="Open Villa Sign">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- Card 3 --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/neon/Neon2.jpg') }}" alt="Neon Sign" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Neon Sign</h3>
                    <a class="gx-cat-link" href="#" aria-label="Open Neon Sign">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- Card 4 --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/Name/Name1.jpg') }}" alt="Name & Board Sign" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Name &amp; Board Sign</h3>
                    <a class="gx-cat-link" href="#" aria-label="Open Name & Board Sign">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- Card 5 --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/Labels/Label4.jpg') }}" alt="Labels" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Labels</h3>
                    <a class="gx-cat-link" href="#" aria-label="Open Labels">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>

            {{-- Card 6 --}}
            <article class="gx-cat">
                <div class="gx-cat-media">
                    <img class="gx-cat-img" src="{{ asset('assets/images/Print/Print2.jpg') }}" alt="Print & Cut Stickers" loading="lazy">
                    <div class="gx-cat-overlay" aria-hidden="true"></div>
                </div>
                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Print &amp; Cut Stickers</h3>
                    <a class="gx-cat-link" href="#" aria-label="Open Print & Cut Stickers">
                        visit page of this item <span class="gx-chev" aria-hidden="true"></span>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<style>
/* ===== Categories Section (Images) ===== */
.gx-cats{ padding: 18px 0 36px; }

/* ===== Top Tabs (ONLY) ===== */
.gx-tabs{
    display:flex;
    flex-wrap: wrap;
    gap: 10px;
    padding: 10px;
    border-radius: 18px;
    border: 1px solid rgba(15,23,42,.10);
    background: rgba(255,255,255,.62);
    box-shadow: 0 18px 55px rgba(2,6,23,.08);
    margin-bottom: 14px;
}
.gx-tab{
    text-decoration:none;
    display:inline-flex;
    align-items:center;
    justify-content:center;

    padding: 10px 14px;
    border-radius: 999px;

    font-weight: 950;
    font-size: 13px;
    color: rgba(15,23,42,.80);
    background: rgba(15,23,42,.08);
    transition: transform .18s ease, background .18s ease, color .18s ease, box-shadow .18s ease;
    white-space: nowrap;
}
.gx-tab:hover{
    transform: translateY(-1px);
    background: rgba(225,29,72,.10);
    color: rgba(15,23,42,.92);
}
.gx-tab:active{ transform: translateY(0); }

/* Grid */
.gx-cats-grid{
    display:grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 14px;
}

/* Card */
.gx-cat{
    border-radius: 22px;
    border: 1px solid rgba(15,23,42,.10);
    background: rgba(255,255,255,.60);
    box-shadow: 0 18px 55px rgba(2,6,23,.08);
    overflow:hidden;
    transition: transform .18s ease, box-shadow .18s ease, background .18s ease;
    display:flex;
    flex-direction:column;
    min-height: 340px;
}
.gx-cat:hover{
    transform: translateY(-3px);
    background: rgba(255,255,255,.80);
    box-shadow: 0 28px 70px rgba(2,6,23,.12);
}

/* Image area */
.gx-cat-media{
    position: relative;
    height: 240px;
    background: rgba(15,23,42,.04);
    overflow:hidden;
}
.gx-cat-img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform: scale(1);
    transition: transform .45s cubic-bezier(.22,.8,.24,1), filter .45s cubic-bezier(.22,.8,.24,1);
    display:block;
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
    gap: 8px;
    margin-top: auto;
}
.gx-cat-title{
    margin: 0;
    font-size: 16px;
    font-weight: 1000;
    color: #e11d48;
    letter-spacing: -0.01em;
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
}
.gx-cat-link:hover{ color: rgba(15,23,42,.92); }

.gx-chev{
    width: 18px; height: 18px;
    border-radius: 999px;
    border: 1px solid rgba(15,23,42,.14);
    background: rgba(255,255,255,.75);
    position: relative;
    display:inline-block;
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
@media (max-width: 900px){
    .gx-cats-grid{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .gx-cat{ min-height: 330px; }
    .gx-cat-media{ height: 230px; }
}
@media (max-width: 520px){
    .gx-cats-grid{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .gx-cat{ min-height: 300px; }
    .gx-cat-media{ height: 200px; }
    .gx-cat-title{ font-size: 14px; }
}
@media (max-width: 360px){
    .gx-cats-grid{ grid-template-columns: 1fr; }
}
</style>

{{-- resources/views/partials/categories.blade.php --}}
<section class="gx-cats" id="gxCategories" aria-label="Categories">
    <div class="gx-container">
        <div class="gx-cats-head">
            <div class="gx-cats-titlewrap">
                <h2 class="gx-cats-title">Shop by Category</h2>
                <p class="gx-cats-sub">Choose what you need — premium materials, clean finishing, and fast turnaround.</p>
            </div>

            <div class="gx-cats-actions">
                <button class="gx-cats-btn" type="button">View All</button>
            </div>
        </div>

        <div class="gx-cats-grid">
            {{-- Card 1 --}}
            <article class="gx-cat">
                <div class="gx-cat-media gx-media-1" aria-hidden="true">
                    <div class="gx-cat-float gx-float-a"></div>
                    <div class="gx-cat-float gx-float-b"></div>
                    <div class="gx-cat-float gx-float-c"></div>
                </div>

                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Flags Sign</h3>
                    <button class="gx-cat-link" type="button" aria-label="Open Reception Sign">
                        visit page of this item
                        <span class="gx-chev" aria-hidden="true"></span>
                    </button>
                </div>
            </article>

            {{-- Card 2 --}}
            <article class="gx-cat">
                <div class="gx-cat-media gx-media-2" aria-hidden="true">
                    <div class="gx-gridlines"></div>
                </div>

                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Villa Sign</h3>
                    <button class="gx-cat-link" type="button" aria-label="Open Name Plate Sign">
                        visit page of this item
                        <span class="gx-chev" aria-hidden="true"></span>
                    </button>
                </div>
            </article>

            {{-- Card 3 --}}
            <article class="gx-cat">
                <div class="gx-cat-media gx-media-3" aria-hidden="true">
                    <div class="gx-wave"></div>
                </div>

                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Neon Sign</h3>
                    <button class="gx-cat-link" type="button" aria-label="Open Villa & Home Sign">
                        visit page of this item
                        <span class="gx-chev" aria-hidden="true"></span>
                    </button>
                </div>
            </article>

            {{-- Card 4 --}}
            <article class="gx-cat">
                <div class="gx-cat-media gx-media-4" aria-hidden="true">
                    <div class="gx-tag"></div>
                    <div class="gx-tag gx-tag-2"></div>
                </div>

                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Name &amp; Board Sign</h3>
                    <button class="gx-cat-link" type="button" aria-label="Open Labels & Tags">
                        visit page of this item
                        <span class="gx-chev" aria-hidden="true"></span>
                    </button>
                </div>
            </article>

            {{-- Card 5 --}}
            <article class="gx-cat">
                <div class="gx-cat-media gx-media-5" aria-hidden="true">
                    <div class="gx-sticker"></div>
                    <div class="gx-sticker gx-sticker-2"></div>
                </div>

                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Labels</h3>
                    <button class="gx-cat-link" type="button" aria-label="Open Stickers">
                        visit page of this item
                        <span class="gx-chev" aria-hidden="true"></span>
                    </button>
                </div>
            </article>

            
            {{-- Card 6 --}}
            <article class="gx-cat">
                <div class="gx-cat-media gx-media-6" aria-hidden="true">
                    <div class="gx-neonline"></div>
                    <div class="gx-neonline gx-neonline-2"></div>
                </div>

                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Print & Cut Stickers</h3>
                    <button class="gx-cat-link" type="button" aria-label="Open Neon Sign">
                        visit page of this item
                        <span class="gx-chev" aria-hidden="true"></span>
                    </button>
                </div>
            </article>

            {{-- Card 7 --}}
            <article class="gx-cat">
                <div class="gx-cat-media gx-media-7" aria-hidden="true">
                    <div class="gx-confetti"></div>
                </div>

                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Party Work</h3>
                    <button class="gx-cat-link" type="button" aria-label="Open Party Work">
                        visit page of this item
                        <span class="gx-chev" aria-hidden="true"></span>
                    </button>
                </div>
            </article>

            {{-- Card 8 --}}
            <article class="gx-cat">
                <div class="gx-cat-media gx-media-8" aria-hidden="true">
                    <div class="gx-fabric"></div>
                </div>

                <div class="gx-cat-body">
                    <h3 class="gx-cat-title">Flags &amp; Fabric</h3>
                    <button class="gx-cat-link" type="button" aria-label="Open Flags & Fabric">
                        visit page of this item
                        <span class="gx-chev" aria-hidden="true"></span>
                    </button>
                </div>
            </article>
        </div>
    </div>
</section>

<style>
/* ===== Categories Section ===== */
.gx-cats{
    padding: 18px 0 36px;
}
.gx-cats-head{
    display:flex;
    align-items:flex-end;
    justify-content:space-between;
    gap: 14px;
    margin-bottom: 14px;
}
.gx-cats-titlewrap{ max-width: 620px; }
.gx-cats-title{
    margin: 0;
    font-weight: 1000;
    letter-spacing: -0.02em;
    color: #0f172a;
    font-size: clamp(18px, 2.2vw, 26px);
}
.gx-cats-sub{
    margin: 6px 0 0;
    color: rgba(15,23,42,.62);
    font-weight: 800;
    font-size: 14px;
    line-height: 1.6;
}
.gx-cats-actions{ flex: 0 0 auto; }
.gx-cats-btn{
    appearance:none;
    border: 1px solid rgba(15,23,42,.12);
    background: rgba(255,255,255,.75);
    border-radius: 16px;
    padding: 10px 12px;
    font-weight: 950;
    cursor:pointer;
    color: #0f172a;
    box-shadow: 0 12px 28px rgba(2,6,23,.06);
    transition: transform .18s ease, background .18s ease;
}
.gx-cats-btn:hover{ transform: translateY(-1px); background: rgba(255,255,255,.92); }

/* Grid */
.gx-cats-grid{
    display:grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
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
    min-height: 260px;
}
.gx-cat:hover{
    transform: translateY(-3px);
    background: rgba(255,255,255,.80);
    box-shadow: 0 28px 70px rgba(2,6,23,.12);
}
.gx-cat-media{
    position: relative;
    height: 170px;
    background: rgba(15,23,42,.04);
}
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
    color: #e11d48; /* match your accent */
    letter-spacing: -0.01em;
}
.gx-cat-link{
    appearance:none;
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
}
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

/* ===== Media backgrounds (simple modern patterns) ===== */
.gx-media-1{
    background:
        radial-gradient(420px 220px at 20% 25%, rgba(245,158,11,.18), transparent 55%),
        radial-gradient(420px 220px at 80% 35%, rgba(225,29,72,.14), transparent 55%),
        linear-gradient(180deg, rgba(255,255,255,.85), rgba(255,255,255,.70));
}
.gx-cat-float{
    position:absolute;
    border-radius: 18px;
    border: 1px solid rgba(15,23,42,.10);
    background: rgba(255,255,255,.55);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    box-shadow: 0 18px 50px rgba(2,6,23,.10);
}
.gx-float-a{ width: 120px; height: 70px; left: 14px; top: 18px; transform: rotate(-6deg); }
.gx-float-b{ width: 160px; height: 90px; right: 16px; top: 28px; transform: rotate(5deg); }
.gx-float-c{ width: 90px; height: 55px; left: 58px; bottom: 18px; transform: rotate(2deg); }

.gx-media-2{
    background:
        radial-gradient(420px 240px at 30% 25%, rgba(99,102,241,.16), transparent 55%),
        linear-gradient(180deg, rgba(255,255,255,.85), rgba(255,255,255,.70));
}
.gx-gridlines{
    position:absolute; inset: 12px;
    border-radius: 18px;
    background:
        linear-gradient(rgba(15,23,42,.06) 1px, transparent 1px) 0 0 / 22px 22px,
        linear-gradient(90deg, rgba(15,23,42,.06) 1px, transparent 1px) 0 0 / 22px 22px;
    mask-image: radial-gradient(circle at 30% 30%, #000 0%, #000 55%, transparent 80%);
    opacity: .8;
}

.gx-media-3{
    background:
        radial-gradient(420px 240px at 70% 30%, rgba(34,197,94,.14), transparent 55%),
        radial-gradient(420px 240px at 25% 60%, rgba(245,158,11,.14), transparent 60%),
        linear-gradient(180deg, rgba(255,255,255,.85), rgba(255,255,255,.70));
}
.gx-wave{
    position:absolute;
    inset: 0;
    opacity: .9;
    background:
        radial-gradient(60px 28px at 18% 52%, rgba(15,23,42,.07) 30%, transparent 31%) 0 0 / 120px 80px,
        radial-gradient(60px 28px at 78% 56%, rgba(15,23,42,.06) 30%, transparent 31%) 0 0 / 140px 90px;
    filter: blur(.2px);
}

.gx-media-4{
    background:
        radial-gradient(420px 240px at 75% 35%, rgba(225,29,72,.14), transparent 55%),
        radial-gradient(420px 240px at 20% 35%, rgba(56,189,248,.14), transparent 55%),
        linear-gradient(180deg, rgba(255,255,255,.85), rgba(255,255,255,.70));
}
.gx-tag{
    position:absolute;
    width: 150px; height: 95px;
    left: 18px; top: 28px;
    border-radius: 18px;
    border: 1px solid rgba(15,23,42,.10);
    background: rgba(255,255,255,.60);
    box-shadow: 0 18px 45px rgba(2,6,23,.10);
    transform: rotate(-6deg);
}
.gx-tag::after{
    content:"";
    position:absolute;
    top: 16px; right: 16px;
    width: 14px; height: 14px;
    border-radius: 999px;
    background: rgba(225,29,72,.18);
    border: 1px solid rgba(225,29,72,.22);
}
.gx-tag-2{
    width: 170px; height: 105px;
    left: auto; right: 18px;
    top: 46px;
    transform: rotate(5deg);
}

.gx-media-5{
    background:
        radial-gradient(420px 240px at 60% 30%, rgba(245,158,11,.14), transparent 55%),
        radial-gradient(420px 240px at 25% 60%, rgba(99,102,241,.12), transparent 60%),
        linear-gradient(180deg, rgba(255,255,255,.85), rgba(255,255,255,.70));
}
.gx-sticker{
    position:absolute;
    width: 160px; height: 100px;
    left: 18px; top: 34px;
    border-radius: 22px;
    border: 1px solid rgba(15,23,42,.10);
    background: rgba(255,255,255,.62);
    box-shadow: 0 18px 50px rgba(2,6,23,.10);
    transform: rotate(-5deg);
}
.gx-sticker-2{
    width: 190px; height: 120px;
    left: auto; right: 18px; top: 46px;
    transform: rotate(6deg);
}

.gx-media-6{
    background:
        radial-gradient(420px 240px at 30% 25%, rgba(236,72,153,.14), transparent 55%),
        radial-gradient(420px 240px at 80% 35%, rgba(56,189,248,.14), transparent 55%),
        linear-gradient(180deg, rgba(255,255,255,.85), rgba(255,255,255,.70));
}
.gx-neonline{
    position:absolute;
    left: 20px; right: 20px;
    top: 54px;
    height: 10px;
    border-radius: 999px;
    background: linear-gradient(135deg, rgba(236,72,153,.55), rgba(56,189,248,.55), rgba(245,158,11,.45));
    filter: blur(.3px);
    opacity: .9;
}
.gx-neonline-2{
    top: 92px;
    height: 8px;
    opacity: .65;
}

.gx-media-7{
    background:
        radial-gradient(420px 240px at 30% 30%, rgba(245,158,11,.16), transparent 55%),
        radial-gradient(420px 240px at 75% 40%, rgba(225,29,72,.14), transparent 55%),
        linear-gradient(180deg, rgba(255,255,255,.85), rgba(255,255,255,.70));
}
.gx-confetti{
    position:absolute; inset: 0;
    background:
        radial-gradient(circle at 20% 25%, rgba(225,29,72,.22) 0 3px, transparent 3px) 0 0 / 70px 70px,
        radial-gradient(circle at 65% 35%, rgba(245,158,11,.22) 0 3px, transparent 3px) 0 0 / 90px 90px,
        radial-gradient(circle at 35% 70%, rgba(56,189,248,.18) 0 3px, transparent 3px) 0 0 / 80px 80px;
    opacity: .7;
}

.gx-media-8{
    background:
        radial-gradient(420px 240px at 25% 35%, rgba(34,197,94,.14), transparent 55%),
        radial-gradient(420px 240px at 80% 55%, rgba(99,102,241,.14), transparent 55%),
        linear-gradient(180deg, rgba(255,255,255,.85), rgba(255,255,255,.70));
}
.gx-fabric{
    position:absolute; inset: 14px;
    border-radius: 20px;
    border: 1px solid rgba(15,23,42,.10);
    background:
        linear-gradient(135deg, rgba(255,255,255,.50), rgba(255,255,255,.12)),
        repeating-linear-gradient(90deg, rgba(15,23,42,.05) 0 2px, transparent 2px 12px);
    opacity: .85;
}

/* ===== Responsive ===== */
@media (max-width: 1100px){
    .gx-cats-grid{ grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 820px){
    .gx-cats-head{ align-items:flex-start; flex-direction:column; }
    .gx-cats-grid{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .gx-cat{ min-height: 250px; }
}
@media (max-width: 520px){
    .gx-cats-grid{ grid-template-columns: 1fr; }
    .gx-cat-media{ height: 165px; }
}
</style>

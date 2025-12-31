{{-- resources/views/villa/section1.blade.php --}}
<section class="gx-prod" id="gxVillaProduct" aria-label="Villa Sign Details">
    <div class="gx-container">
        <div class="gx-prod-wrap">
            {{-- Left: Image --}}
            <div class="gx-prod-left">
                <div class="gx-prod-media">
                    <img
                        class="gx-prod-img"
                        src="{{ asset('assets/images/VillaSign/Villa9.jpg') }}"
                        alt="Villa Sign"
                        loading="lazy"
                    />
                </div>
            </div>

            {{-- Right: Content --}}
            <div class="gx-prod-right">
                <div class="gx-prod-head">
                    <h1 class="gx-prod-title">Villa Sign</h1>
                    <p class="gx-prod-sub">
                        Premium outdoor/indoor signage with clean finishing and long-lasting materials.
                    </p>
                </div>

                {{-- Tabs --}}
                <div class="gx-tabs" data-gx-tabs>
                    <div class="gx-tablist" role="tablist" aria-label="Product details tabs">
                        <button class="gx-tab is-active" type="button" role="tab" aria-selected="true" aria-controls="gxTabAbout" id="gxTabBtnAbout">
                            About
                        </button>
                        <button class="gx-tab" type="button" role="tab" aria-selected="false" aria-controls="gxTabSpecs" id="gxTabBtnSpecs">
                            Specifications
                        </button>
                    </div>

                    <div class="gx-tabpanes">
                        {{-- About --}}
                        <div class="gx-pane is-active" role="tabpanel" id="gxTabAbout" aria-labelledby="gxTabBtnAbout">
                            <h3 class="gx-block-title">Villa Sign</h3>
                            <p class="gx-text">
                                Perfect for villas, home entrances, gates, and building numbers. Designed to look premium
                                and stay durable in outdoor conditions.
                            </p>

                            <ul class="gx-list">
                                <li>Weather-resistant finish</li>
                                <li>Clean edges &amp; professional mounting</li>
                                <li>Custom sizes &amp; colors available</li>
                            </ul>
                        </div>

                        {{-- Specifications --}}
                        <div class="gx-pane" role="tabpanel" id="gxTabSpecs" aria-labelledby="gxTabBtnSpecs" hidden>
                            <h3 class="gx-block-title">Specifications</h3>

                            <div class="gx-specs">
                                <div class="gx-spec">
                                    <div class="gx-spec-k">Basic Materials</div>
                                    <div class="gx-spec-v">Acrylic, Aluminum, Stainless Steel, ACP, Forex</div>
                                </div>
                                <div class="gx-spec">
                                    <div class="gx-spec-k">Supporting Material</div>
                                    <div class="gx-spec-v">PVC Vinyl Sticker, Transformer, Wiring, Silicon Glue, Double Sided Tape, Screws</div>
                                </div>
                                <div class="gx-spec">
                                    <div class="gx-spec-k">Options</div>
                                    <div class="gx-spec-v">3D Letters, LED Backlight (optional), Matte/Gloss finishing</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- CTA --}}
                <div class="gx-prod-cta">
                    <button class="gx-order" type="button" aria-label="Order Now">
                        Order Now
                    </button>

                    <div class="gx-prod-note">
                        <span class="gx-dot" aria-hidden="true"></span>
                        Fast turnaround • Premium finishing • UAE-quality standard
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== Clean Pro Font (system-first) ===== */
.gx-prod,
.gx-prod *{
    font-family: ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Inter, Roboto, Arial, "Noto Sans", "Helvetica Neue", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/* ===== Product Detail (Clean + Professional) ===== */
.gx-prod{ padding: 26px 0 44px; }

/* layout */
.gx-prod-wrap{
    display:grid;
    grid-template-columns: 1.15fr .85fr;
    gap: 22px;
    align-items:start;
}

/* left image (no border, clean shadow) */
.gx-prod-media{
    border-radius: 26px;
    overflow:hidden;
    background: #fff;
    box-shadow: 0 18px 60px rgba(2,6,23,.10);
}
.gx-prod-img{
    width:100%;
    height: 560px;
    display:block;
    object-fit: cover;
    transform: scale(1);
}

/* right card (no heavy borders) */
.gx-prod-right{
    border-radius: 26px;
    background: #fff;
    box-shadow: 0 18px 60px rgba(2,6,23,.08);
    padding: 18px 18px 20px;
}

/* heading */
.gx-prod-title{
    margin: 0 0 6px;
    font-weight: 800;
    letter-spacing: -0.02em;
    color: #0f172a;
    font-size: clamp(22px, 2.4vw, 34px);
    line-height: 1.15;
}
.gx-prod-sub{
    margin: 0;
    color: rgba(15,23,42,.62);
    font-weight: 500;
    line-height: 1.65;
    font-size: 14px;
}

/* tabs (simple pills) */
.gx-tabs{ margin-top: 16px; }

.gx-tablist{
    display:flex;
    gap: 10px;
    padding: 6px;
    border-radius: 999px;
    background: rgba(15,23,42,.05);
}
.gx-tab{
    flex: 1 1 auto;
    appearance:none;
    border: 0;
    background: transparent;
    border-radius: 999px;
    padding: 11px 12px;
    font-weight: 600;
    cursor:pointer;
    color: rgba(15,23,42,.78);
    transition: background .18s ease, color .18s ease, transform .18s ease;
}
.gx-tab:hover{ transform: translateY(-1px); background: rgba(255,255,255,.70); }
.gx-tab.is-active{
    color: #0f172a;
    background: #fff;
    box-shadow: 0 12px 30px rgba(2,6,23,.08);
}

/* pane */
.gx-tabpanes{ margin-top: 12px; }
.gx-pane{
    border-radius: 18px;
    background: rgba(15,23,42,.03);
    padding: 14px 14px 12px;
}
.gx-pane[hidden]{ display:none; }

.gx-block-title{
    margin: 0 0 8px;
    font-weight: 700;
    color: #0f172a;
    letter-spacing: -0.01em;
    font-size: 15px;
}
.gx-text{
    margin: 0 0 10px;
    color: rgba(15,23,42,.70);
    font-weight: 450;
    line-height: 1.75;
    font-size: 13px;
}
.gx-list{
    margin: 0;
    padding-left: 18px;
    color: rgba(15,23,42,.70);
    font-weight: 500;
    line-height: 1.85;
    font-size: 13px;
}

/* specs (clean blocks) */
.gx-specs{ display:grid; gap: 10px; }
.gx-spec{
    border-radius: 14px;
    background: #fff;
    box-shadow: 0 10px 26px rgba(2,6,23,.06);
    padding: 10px 12px;
}
.gx-spec-k{
    font-weight: 700;
    color: #0f172a;
    font-size: 12.5px;
    margin-bottom: 4px;
}
.gx-spec-v{
    color: rgba(15,23,42,.70);
    font-weight: 450;
    font-size: 12.5px;
    line-height: 1.6;
}

/* CTA */
.gx-prod-cta{
    margin-top: 16px;
    display:flex;
    align-items:center;
    gap: 12px;
    flex-wrap: wrap;
}
.gx-order{
    appearance:none;
    border: 0;
    cursor:pointer;
    padding: 12px 18px;
    border-radius: 999px;
    font-weight: 700;
    color: #fff;
    background: linear-gradient(135deg, #e11d48 0%, #f97316 55%, #f59e0b 120%);
    box-shadow: 0 16px 36px rgba(225,29,72,.18);
    transition: transform .18s ease, filter .18s ease;
}
.gx-order:hover{ transform: translateY(-1px); filter: brightness(1.03); }
.gx-order:active{ transform: translateY(0px); }

.gx-prod-note{
    display:flex;
    align-items:center;
    gap: 8px;
    color: rgba(15,23,42,.62);
    font-weight: 500;
    font-size: 12px;
}
.gx-dot{
    width: 10px; height: 10px;
    border-radius: 999px;
    background: linear-gradient(135deg, #e11d48, #f59e0b);
    box-shadow: 0 10px 20px rgba(225,29,72,.14);
}

/* ===== Responsive ===== */
@media (max-width: 980px){
    .gx-prod-wrap{ grid-template-columns: 1fr; }
    .gx-prod-img{ height: 440px; }
}
@media (max-width: 520px){
    .gx-prod-right{ padding: 16px; }
    .gx-tablist{ border-radius: 18px; padding: 8px; }
    .gx-tab{ padding: 10px 12px; }
    .gx-prod-img{ height: 340px; }
    .gx-order{ width: 100%; text-align:center; }
    .gx-prod-note{ width: 100%; justify-content:center; }
}
</style>

<script>
(() => {
    const root = document.querySelector('[data-gx-tabs]');
    if (!root) return;

    const tabs = Array.from(root.querySelectorAll('[role="tab"]'));
    const panes = Array.from(root.querySelectorAll('[role="tabpanel"]'));

    const activate = (btn) => {
        tabs.forEach(t => {
            const active = t === btn;
            t.classList.toggle('is-active', active);
            t.setAttribute('aria-selected', active ? 'true' : 'false');
        });

        panes.forEach(p => {
            const shouldShow = p.id === btn.getAttribute('aria-controls');
            p.hidden = !shouldShow;
            p.classList.toggle('is-active', shouldShow);
        });
    };

    tabs.forEach(btn => btn.addEventListener('click', () => activate(btn)));
})();
</script>

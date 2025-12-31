{{-- resources/views/labels/section1.blade.php --}}
<section class="gx-prod" id="gxLabelProduct" aria-label="Labels Details">
    <div class="gx-container">
        <div class="gx-prod-wrap">
            {{-- Left: Image --}}
            <div class="gx-prod-left">
                <div class="gx-prod-media">
                    <img
                        class="gx-prod-img"
                        src="{{ asset('assets/images/Labels/Label8.jpg') }}"
                        alt="Labels"
                        loading="lazy"
                        decoding="async"
                    />
                </div>
            </div>

            {{-- Right: Content --}}
            <div class="gx-prod-right">
                <div class="gx-prod-head">
                    <h1 class="gx-prod-title">Labels</h1>
                    <p class="gx-prod-sub">
                        Premium product & packaging labels with clean finishing, strong adhesive, and long-lasting print.
                    </p>
                </div>

                {{-- About then Specifications (NO tabs) --}}
                <div class="gx-details">
                    {{-- About --}}
                    <div class="gx-section">
                        <h2 class="gx-sec-title">About</h2>
                        <p class="gx-sec-text">
                            Perfect for product packaging, jars, bottles, boxes, and branding. Choose sheet labels for small runs,
                            or roll labels for faster application and bulk orders.
                        </p>

                        <ul class="gx-bullets">
                            <li>Sharp print quality for logos, text, QR &amp; barcodes</li>
                            <li>Strong adhesion options (permanent / removable)</li>
                            <li>Custom shapes (die-cut / kiss-cut), sizes &amp; finishes</li>
                        </ul>
                    </div>

                    {{-- Specifications --}}
                    <div class="gx-section gx-section--specs">
                        <h2 class="gx-sec-title">Specifications</h2>

                        <div class="gx-specrows" role="list">
                            <div class="gx-specrow" role="listitem">
                                <div class="gx-spec-k">Basic Materials:</div>
                                <div class="gx-spec-v">Paper, Vinyl (PVC), Polyester (PET), Clear/White Film</div>
                            </div>

                            <div class="gx-specrow" role="listitem">
                                <div class="gx-spec-k">Supporting Material:</div>
                                <div class="gx-spec-v">Pressure-sensitive adhesive (permanent/removable), release liner, optional overlaminate</div>
                            </div>

                            <div class="gx-specrow" role="listitem">
                                <div class="gx-spec-k">Options:</div>
                                <div class="gx-spec-v">Sheet or Roll labels • Matte/Gloss • UV/moisture-resistant options • Custom cut shapes</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- CTA --}}
                <div class="gx-prod-cta">
                    <a class="gx-order" href="https://wa.me/message/KLYDN27V7PDVA1" target="_blank" rel="noopener" aria-label="Order Labels on WhatsApp">
                        Order Now
                    </a>

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

/* ===== Product Detail (match image height + remove floating look) ===== */
.gx-prod{ padding: 18px 0 28px; }

/* layout */
.gx-prod-wrap{
    display:grid;
    grid-template-columns: 1.15fr .85fr;
    gap: 18px;
    align-items: stretch;
}

/* left image */
.gx-prod-media{
    border-radius: 24px;
    overflow:hidden;
    background: #fff;
    box-shadow: 0 10px 26px rgba(2,6,23,.08);
    height: 520px;
}
.gx-prod-img{
    width:100%;
    height: 100%;
    display:block;
    object-fit: cover;
}

/* right content */
.gx-prod-right{
    height: 520px;
    overflow: hidden;
    border-radius: 24px;
    background: #fff;
    border: 1px solid rgba(15,23,42,.08);
    box-shadow: none;
    padding: 16px 16px 14px;
    display:flex;
    flex-direction:column;
}

.gx-prod-title{
    margin: 0 0 4px;
    font-weight: 900;
    letter-spacing: -0.02em;
    color: #0f172a;
    font-size: 26px;
    line-height: 1.15;
}
.gx-prod-sub{
    margin: 0;
    color: rgba(15,23,42,.62);
    font-weight: 600;
    line-height: 1.55;
    font-size: 12.5px;
}

.gx-details{
    margin-top: 10px;
    flex: 1 1 auto;
    overflow: auto;
    padding-right: 6px;
}
.gx-details::-webkit-scrollbar{ width: 8px; }
.gx-details::-webkit-scrollbar-thumb{
    background: rgba(15,23,42,.12);
    border-radius: 999px;
}
.gx-details::-webkit-scrollbar-track{ background: transparent; }

.gx-section{ padding: 10px 0 6px; }
.gx-section--specs{ padding-top: 8px; }

.gx-sec-title{
    margin: 0 0 8px;
    font-weight: 900;
    color: #0f172a;
    font-size: 15px;
    position: relative;
    padding-bottom: 8px;
}
.gx-sec-title::after{
    content:"";
    position:absolute;
    left: 0;
    bottom: 0;
    width: 44px;
    height: 3px;
    border-radius: 999px;
    background: linear-gradient(90deg, #f97316 0%, #e11d48 70%, #f59e0b 120%);
}

.gx-sec-text{
    margin: 0 0 8px;
    color: rgba(15,23,42,.70);
    font-weight: 550;
    line-height: 1.7;
    font-size: 12.5px;
}

.gx-bullets{
    margin: 0;
    padding-left: 18px;
    color: rgba(15,23,42,.70);
    font-weight: 650;
    line-height: 1.8;
    font-size: 12.5px;
}
.gx-bullets li{ margin: 3px 0; }

.gx-specrows{
    display:grid;
    gap: 10px;
    margin-top: 2px;
}
.gx-specrow{
    padding: 8px 0;
    border-bottom: 1px solid rgba(15,23,42,.08);
}
.gx-specrow:last-child{ border-bottom: 0; }

.gx-spec-k{
    font-weight: 900;
    color: #0f172a;
    font-size: 12px;
    margin-bottom: 3px;
}
.gx-spec-v{
    color: rgba(15,23,42,.70);
    font-weight: 550;
    font-size: 12px;
    line-height: 1.6;
}

.gx-prod-cta{
    margin-top: 10px;
    padding-top: 10px;
    border-top: 1px solid rgba(15,23,42,.08);
    display:flex;
    align-items:center;
    gap: 10px;
    flex-wrap: wrap;
}

.gx-order{
    appearance:none;
    border: 0;
    cursor:pointer;
    padding: 11px 16px;
    border-radius: 999px;
    font-weight: 900;
    font-size: 14px;
    color: #fff;
    text-decoration:none;
    background: linear-gradient(135deg, #e11d48 0%, #f97316 55%, #f59e0b 120%);
    box-shadow: 0 12px 26px rgba(225,29,72,.18);
    transition: transform .18s ease, filter .18s ease;
}
.gx-order:hover{ transform: translateY(-1px); filter: brightness(1.03); }
.gx-order:active{ transform: translateY(0px); }

.gx-prod-note{
    display:flex;
    align-items:center;
    gap: 8px;
    color: rgba(15,23,42,.62);
    font-weight: 650;
    font-size: 11.5px;
}
.gx-dot{
    width: 9px; height: 9px;
    border-radius: 999px;
    background: linear-gradient(135deg, #e11d48, #f59e0b);
    box-shadow: 0 10px 18px rgba(225,29,72,.12);
}

@media (max-width: 980px){
    .gx-prod-wrap{ grid-template-columns: 1fr; }
    .gx-prod-media{ height: 420px; }
    .gx-prod-right{ height: auto; }
    .gx-details{ overflow: visible; padding-right: 0; }
}
@media (max-width: 520px){
    .gx-prod-media{ height: 320px; border-radius: 20px; }
    .gx-prod-right{ border-radius: 20px; padding: 14px; }
    .gx-order{ width: 100%; text-align:center; }
    .gx-prod-note{ width: 100%; justify-content:center; }
}
</style>

{{-- resources/views/partials/footer.blade.php --}}
<footer class="gx-footer" id="gxFooter" aria-label="Footer">
    <div class="gx-container">
        <div class="gx-footer-bar">
            {{-- Left: Brand --}}
            <div class="gx-footer-brand" aria-label="Genix Printing">
                <span class="gx-footer-name">Genix</span>
                <span class="gx-footer-tag">printing</span>
            </div>

            {{-- Right: Social icons (no links) --}}
            <div class="gx-footer-social" aria-label="Social media">
                <button class="gx-social-btn" type="button" aria-label="Facebook">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M13.5 22v-8h2.7l.4-3h-3.1V9.2c0-.9.3-1.5 1.6-1.5H16.8V5.1c-.3 0-1.4-.1-2.7-.1-2.6 0-4.4 1.6-4.4 4.6V11H7v3h2.7v8h3.8Z"/>
                    </svg>
                </button>

                <button class="gx-social-btn" type="button" aria-label="YouTube">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M21.6 7.2a3 3 0 0 0-2.1-2.1C17.6 4.6 12 4.6 12 4.6s-5.6 0-7.5.5A3 3 0 0 0 2.4 7.2 31.7 31.7 0 0 0 2 12a31.7 31.7 0 0 0 .4 4.8 3 3 0 0 0 2.1 2.1c1.9.5 7.5.5 7.5.5s5.6 0 7.5-.5a3 3 0 0 0 2.1-2.1A31.7 31.7 0 0 0 22 12a31.7 31.7 0 0 0-.4-4.8ZM10 15.3V8.7L16 12l-6 3.3Z"/>
                    </svg>
                </button>

                <button class="gx-social-btn" type="button" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9A3.5 3.5 0 0 0 20 16.5v-9A3.5 3.5 0 0 0 16.5 4h-9ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm5.8-2.2a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0Z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</footer>

<style>
/* ===== Footer ===== */
.gx-footer{
    padding: 18px 0 26px;
}
.gx-footer-bar{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap: 14px;

    padding: 14px 16px;
    border-radius: 22px;
    border: 1px solid rgba(15,23,42,.10);
    background: rgba(255,255,255,.65);
    box-shadow: 0 14px 44px rgba(2,6,23,.08);

    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
}

/* Brand */
.gx-footer-brand{
    display:flex;
    align-items:baseline;
    gap: 10px;
    user-select:none;
}
.gx-footer-name{
    font-weight: 1000;
    letter-spacing: -0.02em;
    color: #0f172a;
    font-size: 18px;
}
.gx-footer-tag{
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: .18em;
    color: rgba(15,23,42,.55);
    font-size: 12px;
}

/* Social */
.gx-footer-social{
    display:flex;
    align-items:center;
    gap: 10px;
}
.gx-social-btn{
    appearance:none;
    border: 1px solid rgba(15,23,42,.12);
    background: rgba(255,255,255,.75);
    cursor:pointer;

    width: 44px;
    height: 44px;
    border-radius: 16px;

    display:grid;
    place-items:center;

    box-shadow: 0 12px 28px rgba(2,6,23,.06);
    transition: transform .18s ease, background .18s ease, box-shadow .18s ease;
}
.gx-social-btn:hover{
    transform: translateY(-1px);
    background: rgba(255,255,255,.92);
    box-shadow: 0 18px 40px rgba(2,6,23,.10);
}
.gx-social-btn:active{ transform: translateY(0px); }

.gx-social-btn svg{
    width: 20px;
    height: 20px;
    fill: rgba(15,23,42,.88);
}

/* Responsive */
@media (max-width: 520px){
    .gx-footer-bar{
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
    }
    .gx-footer-social{
        width: 100%;
        justify-content: flex-end;
    }
}
</style>

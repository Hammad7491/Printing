{{-- resources/views/partials/footer.blade.php --}}
<footer class="gx-footer" id="gxFooter" aria-label="Footer">
    <div class="gx-container">
        <div class="gx-footer-bar">

            {{-- Left: Phone + Email (replace Genix printing) --}}
            <div class="gx-footer-contact" aria-label="Contact info">
                <a class="gx-contact-row" href="tel:+971561247035" aria-label="Call +971 56 124 7035">
                    <span class="gx-ci" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <path d="M6.6 10.8c1.5 3 3.7 5.2 6.7 6.7l2.2-2.2c.3-.3.8-.4 1.2-.2 1 .4 2.2.7 3.4.7.7 0 1.3.6 1.3 1.3V21c0 .7-.6 1.3-1.3 1.3C10.5 22.3 1.7 13.5 1.7 2.9 1.7 2.2 2.3 1.6 3 1.6h3.6c.7 0 1.3.6 1.3 1.3 0 1.2.2 2.4.7 3.4.1.4 0 .9-.2 1.2l-1.8 2.3Z"/>
                        </svg>
                    </span>
                    <span class="gx-contact-text">+971 56 124 7035</span>
                </a>

                <a class="gx-contact-row" href="mailto:info@genixxprinting.com" aria-label="Email genixprinting@gmail.com">
                    <span class="gx-ci" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2Zm0 4-8 5L4 8V6l8 5 8-5v2Z"/>
                        </svg>
                    </span>
                    <span class="gx-contact-text">genixprinting@gmail.com</span>
                </a>
            </div>

            {{-- Right: Social icons (WITH links) --}}
            <div class="gx-footer-social" aria-label="Social media">

                {{-- WhatsApp --}}
                <a class="gx-social-btn" href="https://wa.me/message/KLYDN27V7PDVA1" target="_blank" rel="noopener"
                   aria-label="WhatsApp Genix Printing">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12.04 2C6.52 2 2.06 6.47 2.06 11.98c0 1.77.46 3.49 1.35 5.02L2 22l5.13-1.35c1.45.79 3.08 1.21 4.9 1.21h.01c5.51 0 9.98-4.47 9.98-9.98C22.02 6.47 17.55 2 12.04 2Zm0 18.27h-.01c-1.56 0-3.08-.42-4.39-1.22l-.31-.18-3.04.8.81-2.96-.2-.31a8.27 8.27 0 0 1-1.27-4.41c0-4.56 3.71-8.27 8.27-8.27 2.2 0 4.27.86 5.83 2.42a8.2 8.2 0 0 1 2.42 5.83c0 4.56-3.71 8.3-8.11 8.3Zm4.53-6.2c-.25-.12-1.47-.72-1.7-.8-.23-.08-.4-.12-.57.13-.17.25-.65.8-.8.96-.15.17-.29.19-.54.06-.25-.12-1.05-.38-2.01-1.23-.75-.66-1.25-1.48-1.4-1.73-.15-.25-.02-.38.11-.51.11-.11.25-.29.38-.43.13-.15.17-.25.25-.41.08-.17.04-.32-.02-.44-.06-.13-.57-1.36-.78-1.86-.2-.49-.41-.41-.57-.42h-.49c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.09 0 1.23.9 2.42 1.03 2.59.13.17 1.78 2.72 4.31 3.81.6.26 1.07.42 1.44.53.6.19 1.15.16 1.59.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.09.15-1.18-.06-.09-.23-.16-.48-.28Z"/>
                    </svg>
                </a>

                {{-- Instagram --}}
                <a class="gx-social-btn" href="https://www.instagram.com/genixprinting5" target="_blank" rel="noopener"
                   aria-label="Instagram">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9A5.5 5.5 0 0 1 16.5 22h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 2A3.5 3.5 0 0 0 4 7.5v9A3.5 3.5 0 0 0 7.5 20h9A3.5 3.5 0 0 0 20 16.5v-9A3.5 3.5 0 0 0 16.5 4h-9ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm5.8-2.2a1.1 1.1 0 1 1-2.2 0 1.1 1.1 0 0 1 2.2 0Z"/>
                    </svg>
                </a>

                {{-- Facebook --}}
                <a class="gx-social-btn" href="https://www.facebook.com/genixprinting5" target="_blank" rel="noopener"
                   aria-label="Facebook">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M13.5 22v-8h2.7l.4-3h-3.1V9.2c0-.9.3-1.5 1.6-1.5H16.8V5.1c-.3 0-1.4-.1-2.7-.1-2.6 0-4.4 1.6-4.4 4.6V11H7v3h2.7v8h3.8Z"/>
                    </svg>
                </a>

                {{-- LinkedIn --}}
                <a class="gx-social-btn" href="https://www.linkedin.com/in/zohaibasif5" target="_blank" rel="noopener"
                   aria-label="LinkedIn">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M6.5 6.7A2.2 2.2 0 1 1 6.5 2.3a2.2 2.2 0 0 1 0 4.4ZM4.5 21.5V8.7h4V21.5h-4ZM13 8.4c2.6 0 4.5 1.7 4.5 5.2v7.9h-4v-7c0-1.8-.6-3-2.1-3-1.1 0-1.8.8-2.1 1.5-.1.3-.1.8-.1 1.2v7.3h-4s.1-11.8 0-12.8h4v1.8c.5-.8 1.6-2.1 3.8-2.1Z"/>
                    </svg>
                </a>

            </div>
        </div>
    </div>
</footer>

<style>
/* ===== Footer ===== */
.gx-footer{ padding: 18px 0 26px; }

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

/* Left Contact (phone + email) */
.gx-footer-contact{
    display:flex;
    flex-direction: column;
    gap: 6px;
    user-select:none;
}
.gx-contact-row{
    display:inline-flex;
    align-items:center;
    gap: 10px;
    text-decoration:none;
    color: rgba(15,23,42,.88);
    font-weight: 900;
    letter-spacing: -0.01em;
}
.gx-contact-row:hover{ color: rgba(15,23,42,.98); }

.gx-ci{
    width: 36px;
    height: 36px;
    border-radius: 14px;
    border: 1px solid rgba(15,23,42,.12);
    background: rgba(255,255,255,.75);
    display:grid;
    place-items:center;
    box-shadow: 0 12px 28px rgba(2,6,23,.06);
}
.gx-ci svg{
    width: 18px;
    height: 18px;
    fill: rgba(15,23,42,.88);
}
.gx-contact-text{
    font-size: 18px;
    font-weight: 900;
}

/* Social */
.gx-footer-social{
    display:flex;
    align-items:center;
    gap: 10px;
}

/* keep same class, just allow <a> too */
.gx-social-btn{
    appearance:none;
    border: 1px solid rgba(15,23,42,.12);
    background: rgba(255,255,255,.75);
    cursor:pointer;
    text-decoration:none;

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
    .gx-contact-text{ font-size: 16px; }
}
</style>

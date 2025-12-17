<style>
    .footer {
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f1626 100%);
        color: #e8e8e8;
        position: relative;
        overflow: hidden;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="%23ffffff" opacity="0.02"/><circle cx="80" cy="40" r="1" fill="%23ffffff" opacity="0.02"/><circle cx="40" cy="70" r="1" fill="%23ffffff" opacity="0.02"/><circle cx="90" cy="90" r="1" fill="%23ffffff" opacity="0.02"/><circle cx="10" cy="90" r="1" fill="%23ffffff" opacity="0.02"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        pointer-events: none;
    }

    .footer-content {
        position: relative;
        z-index: 1;
        padding: 60px 0 40px;
    }

    .logo-container {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        animation: slideInLeft 0.8s ease-out;
    }

    .logo-image {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 25px rgba(40, 167, 69, 0.3);
        transition: all 0.3s ease;
        padding: 2px;
    }

    .logo-image:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 35px rgba(40, 167, 69, 0.4);
    }

    .logo-image img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }

    .logo-text h5 {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 700;
        margin-bottom: 8px;
        font-size: 1.4rem;
    }

    .logo-text p {
        color: #b8c1cc;
        font-size: 0.9rem;
        line-height: 1.4;
        margin-bottom: 0;
    }

    .contact-section {
        animation: slideInLeft 0.8s ease-out 0.2s both;
    }

    .contact-title {
        color: #28a745;
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 20px;
        position: relative;
        display: inline-block;
    }

    .contact-title::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 30px;
        height: 3px;
        background: linear-gradient(90deg, #28a745, #20c997);
        border-radius: 2px;
    }

    .contact-list li {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        color: #d1d5db;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        padding: 8px;
        border-radius: 8px;
    }

    .contact-list li:hover {
        color: #ffffff;
        background: rgba(40, 167, 69, 0.1);
        transform: translateX(5px);
    }

    .contact-list i {
        background: linear-gradient(135deg, #28a745, #20c997);
        color: white;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
        flex-shrink: 0;
    }

    .social-links {
        margin-top: 25px;
        animation: slideInLeft 0.8s ease-out 0.4s both;
    }

    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.05);
        color: #b8c1cc;
        text-decoration: none;
        margin-right: 15px;
        transition: all 0.4s ease;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .social-links a:hover {
        background: linear-gradient(135deg, #28a745, #20c997);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(40, 167, 69, 0.4);
        text-decoration: none;
    }

    .social-links a:nth-child(1):hover { background: linear-gradient(135deg, #1877f2, #42a5f5); }
    .social-links a:nth-child(2):hover { background: linear-gradient(135deg, #e1306c, #fd5949); }
    .social-links a:nth-child(3):hover { background: linear-gradient(135deg, #1da1f2, #0d8bd9); }
    .social-links a:nth-child(4):hover { background: linear-gradient(135deg, #000000, #25f4ee); }
    .social-links a:nth-child(5):hover { background: linear-gradient(135deg, #0077b5, #00a0dc); }

    .right-section {
        animation: slideInRight 0.8s ease-out 0.3s both;
    }

    .opening-hours-card {
        background: linear-gradient(135deg, rgba(40, 167, 69, 0.15) 0%, rgba(32, 201, 151, 0.15) 100%);
        border: 1px solid rgba(40, 167, 69, 0.2);
        border-radius: 16px;
        padding: 30px;
        backdrop-filter: blur(10px);
        width: 380px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .opening-hours-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #28a745, #20c997);
    }

    .opening-hours-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(40, 167, 69, 0.2);
    }

    .opening-hours-title {
        color: #28a745;
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 20px;
    }

    .hours-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 12px;
        padding: 8px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .hours-row:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }

    .hours-day {
        color: #d1d5db;
        font-weight: 500;
    }

    .hours-time {
        color: #ffffff;
        font-weight: 600;
    }

    .map-container {
        border-radius: 16px;
        overflow: hidden;
        width: 100%;
        max-width: 420px;
        height: 280px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        border: 3px solid rgba(40, 167, 69, 0.2);
        transition: all 0.3s ease;
    }

    .map-container:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        border-color: rgba(40, 167, 69, 0.4);
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
        filter: grayscale(20%) contrast(1.1);
        transition: all 0.3s ease;
    }

    .map-container:hover iframe {
        filter: grayscale(0%) contrast(1.2);
    }

    .copyright {
        background: rgba(0, 0, 0, 0.3);
        padding: 20px 0;
        margin-top: 40px;
        text-align: center;
        color: #b8c1cc;
        font-size: 0.9rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @media (max-width: 768px) {
        .footer-content {
            padding: 40px 0 20px;
        }
        
        .right-section {
            flex-direction: column !important;
            align-items: center !important;
            gap: 30px !important;
        }
        
        .opening-hours-card {
            width: 100%;
            max-width: 350px;
        }
        
        .map-container {
            max-width: 100%;
        }
        
        .logo-container {
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }
        
        .logo-text {
            text-align: center;
        }
    }
</style>

<footer class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row gy-5">
                <!-- Kiri: Logo & Kontak -->
                <div class="col-md-6">
                    <!-- Logo & Nama -->
                    <div class="logo-container">
                        <div class="logo-image">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo PWM DIY">
                        </div>
                        <div class="logo-text ms-3">
                            <h5 class="mb-1">PWM DIY</h5>
                            <p>Lembaga Pengembang Usaha Mikro Kecil dan Menengah <br>Pimpinan Pusat Muhammadiyah</p>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="contact-section">
                        <h6 class="contact-title">Contact</h6>
                        <ul class="list-unstyled contact-list">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Jl. Menteng Raya No. 62, Jakarta.</span>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <span>(021) 3193 4747</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span>lpumkmpm@gmail.com</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Sosial Media -->
                    <div class="social-links">
                        <a href="#" title="Facebook" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" title="Instagram" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" title="Twitter" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" title="TikTok" aria-label="TikTok">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>

                <!-- Kanan: Opening Hours & Map -->
                <div class="col-md-6 right-section d-flex flex-column flex-md-row gap-4 justify-content-md-center align-items-md-start">
                    <!-- Opening Hours -->
                    <div class="opening-hours-card">
                        <h6 class="opening-hours-title">Opening Hours</h6>
                        <div class="hours-row">
                            <span class="hours-day">Weekdays</span>
                            <span class="hours-time">08:00 - 16:00</span>
                        </div>
                        <div class="hours-row">
                            <span class="hours-day">Weekend</span>
                            <span class="hours-time">Off</span>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="map-container">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7574857207896!2d110.39920567525263!3d-7.815475692205095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57155af5c437%3A0x69c999170e6b790f!2sPimpinan%20Wilayah%20Muhammadiyah%20(PWM)%20DIY!5e0!3m2!1sid!2sid!4v1757346954916!5m2!1sid!2sid" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="PWM DIY Location">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="copyright">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} PWM DIY. All rights reserved. | Lembaga Pengembang UMKM</p>
        </div>
    </div>
</footer>
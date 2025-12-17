<?php $__env->startSection('title', 'Profil & Pengurus'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .hero-section {
        background: linear-gradient(to right, #1d4ed8, #1e3a8a);
        min-height: 100vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .profile-title {
        color: #a3ff00;
        font-size: 3rem;
        font-weight: 800;
        letter-spacing: 3px;
        text-transform: uppercase;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        margin-bottom: 8rem;
    }

    .profile-name {
        color: #a3ff00;
        font-size: 4rem;
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .profile-position {
        color: white;
        font-size: 1.8rem;
        font-weight: 600;
        margin-bottom: 2rem;
        opacity: 0.95;
    }

    .profile-description {
        color: rgba(255,255,255,0.9);
        font-size: 1.1rem;
        line-height: 1.8;
        text-align: justify;
        max-width: 600px;
    }

    .profile-image {
        max-height: 500px;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        transform: rotate(-2deg);
        transition: transform 0.3s ease;
    }

    .profile-image:hover {
        transform: rotate(0deg) scale(1.02);
    }

    .team-section {
        background: linear-gradient(180deg, #0f172a 0%, #1e293b 100%);
        padding: 4rem 0;
    }

    .team-member {
        text-align: center;
        margin-bottom: 2rem;
        transition: transform 0.3s ease;
    }

    .team-member:hover {
        transform: translateY(-10px);
    }

    .team-avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #a3ff00;
        box-shadow: 0 10px 20px rgba(163, 255, 0, 0.2);
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }

    .team-avatar:hover {
        box-shadow: 0 15px 30px rgba(163, 255, 0, 0.4);
    }

    .team-name {
        color: #a3ff00;
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .team-position {
        color: rgba(255,255,255,0.8);
        font-size: 0.9rem;
        font-weight: 500;
    }

    .about-section {
        background: linear-gradient(to right, #1d4ed8, #1e3a8a);
        padding: 5rem 0;
        position: relative;
    }

    .section-title {
        color: #a3ff00;
        font-size: 2.5rem;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 2rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .about-text {
        color: rgba(255,255,255,0.9);
        font-size: 1.2rem;
        line-height: 1.8;
        text-align: justify;
    }

    .about-image {
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        transform: rotate(2deg);
        transition: transform 0.3s ease;
    }

    .about-image:hover {
        transform: rotate(0deg);
    }

    .vision-mission-section {
        background: linear-gradient(to right, #1d4ed8, #1e3a8a);
        padding: 5rem 0;
    }

    .vision-card, .mission-card {
        background: rgba(5, 95, 70, 0.9);
        border-radius: 20px;
        padding: 2.5rem;
        height: 100%;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(163, 255, 0, 0.2);
        transition: all 0.3s ease;
    }

    .vision-card:hover, .mission-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        border-color: rgba(163, 255, 0, 0.4);
    }

    .vision-title, .mission-title {
        color: #a3ff00;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .vision-text, .mission-text {
        color: white;
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .mission-list {
        color: white;
        padding-left: 0;
    }

    .mission-list li {
        margin-bottom: 0.8rem;
        font-size: 1rem;
        line-height: 1.6;
        list-style: none;
        position: relative;
        padding-left: 2rem;
    }

    .mission-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        top: 0;
        color: #a3ff00;
        font-weight: bold;
        font-size: 1.2rem;
    }

    @media (max-width: 768px) {
        .profile-title {
            font-size: 2rem;
        }
        
        .profile-name {
            font-size: 2.5rem;
        }
        
        .profile-position {
            font-size: 1.3rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .hero-section {
            min-height: auto;
            padding: 3rem 0;
        }
        
        .profile-image {
            max-height: 300px;
            margin-top: 2rem;
        }
        
        .team-avatar {
            width: 80px;
            height: 80px;
        }
        
        .vision-card, .mission-card {
            padding: 2rem;
            margin-bottom: 2rem;
        }
    }
    .hero-section {
        background: linear-gradient(to right, #1d4ed8, #1e3a8a);
        min-height: 100vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }
    /* ... (dan seterusnya untuk semua CSS kustom Anda) ... */
    @media (max-width: 768px) {
        /* ... (media query Anda tetap sama di sini) ... */
    }
</style>

<div class="container-fluid px-0">

    <?php if($penguruses->count() > 0): ?>
        <?php
            $main = $penguruses->first();
            $others = $penguruses->slice(1);
        ?>

        <section class="hero-section">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h3 class="profile-title" data-aos="fade-up">Profile</h3>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="hero-content">
                            <h1 class="profile-name" data-aos="fade-right" data-aos-delay="200"><?php echo e($main->nama); ?></h1>
                            <h4 class="profile-position" data-aos="fade-right" data-aos-delay="400"><?php echo e($main->jabatan); ?></h4>
                            <p class="profile-description" data-aos="fade-right" data-aos-delay="600"><?php echo e($main->deskripsi); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 text-center">
                        <?php if($main->gambar): ?>
                            <img src="<?php echo e(asset('storage/' . $main->gambar)); ?>" 
                                alt="<?php echo e($main->nama); ?>" 
                                class="img-fluid profile-image"
                                data-aos="zoom-in" data-aos-delay="300">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-section">
            <div class="container">
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $others; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pengurus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-sm-4 col-md-2 col-lg-2">
                            <div class="team-member" data-aos="fade-up" data-aos-delay="<?php echo e(100 * $key); ?>">
                                <?php if($pengurus->gambar): ?>
                                    <img src="<?php echo e(asset('storage/' . $pengurus->gambar)); ?>" 
                                        alt="<?php echo e($pengurus->nama); ?>" 
                                        class="team-avatar">
                                <?php endif; ?>
                                <div class="team-name"><?php echo e($pengurus->nama); ?></div>
                                <div class="team-position"><?php echo e($pengurus->jabatan); ?></div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <h3 class="section-title" data-aos="fade-up">Tentang Kami</h3>
                    <p class="about-text" data-aos="fade-right" data-aos-delay="200">
                        Kampung Bausasran, bagian dari Kecamatan Danurejan, Yogyakarta,
                        dinamai dari tokoh Tumenggung Bausasra, seorang abdi dalem ahli bangunan dari Puro Pakualaman.
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 text-center">
                    <img src="<?php echo e(asset('images/US.jpeg')); ?>" 
                          alt="Tentang Kami" 
                          class="img-fluid about-image"
                          data-aos="zoom-in" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section>

    <section class="vision-mission-section">
        <div class="container">
            <h3 class="section-title text-center mb-5" data-aos="fade-down">Visi dan Misi</h3>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="vision-card" data-aos="flip-right">
                        <h5 class="vision-title">Visi:</h5>
                        <p class="vision-text mb-0">Mewujudkan masyarakat urban yang mandiri dan sehat melalui pertanian organik berkelanjutan.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="mission-card" data-aos="flip-left">
                        <h5 class="mission-title">Misi:</h5>
                        <ul class="mission-list mb-0">
                            <li data-aos="fade-left" data-aos-delay="100">Mengembangkan pertanian organik berbasis komunitas di lingkungan perkotaan.</li>
                            <li data-aos="fade-left" data-aos-delay="200">Meningkatkan kesadaran masyarakat akan pentingnya konsumsi pangan sehat.</li>
                            <li data-aos="fade-left" data-aos-delay="300">Memberdayakan warga melalui pelatihan dan edukasi pertanian organik.</li>
                            <li data-aos="fade-left" data-aos-delay="400">Menciptakan ekosistem pertanian ramah lingkungan dan berkelanjutan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views/noauth/pengurus/index.blade.php ENDPATH**/ ?>
<section class="section">
    <div class="container">
        <div class="lead-header flex-row">
            <div class="lead-image-col">
                <!-- Dynamic Profile Image -->
                <img src="<?= base_url('uploads/' . get_setting('img_profile', 'mujeeb.png')) ?>" alt="Mujeeb Ur Rehman" class="profile-photo-large">
            </div>
            <div class="lead-text-col">
                <h1>Mujeeb Ur Rehman</h1>
                <p class="role">
                    Lead Counsel, LegalLords LLP<br>
                    Chairperson, <a href="https://LawyersinAction.org/" target="_blank" rel="noopener">Lawyers in Action</a>
                </p>
            </div>
        </div>

        <div class="prose mt-4">
            <h2>Profile</h2>
            <!-- Dynamic Bio -->
            <p><?= nl2br(esc(get_setting('lc_bio'))) ?></p>

            <h2>Qualifications</h2>
            <!-- Dynamic Qualifications -->
            <p><?= nl2br(esc(get_setting('lc_qualifications'))) ?></p>

            <h2>Experience</h2>
            <!-- Dynamic Experience -->
            <p><?= nl2br(esc(get_setting('lc_experience'))) ?></p>

            <h2>Notable Matters</h2>
        </div>

        <ul class="matter-list">
            <?php foreach ($notable_matters as $matter): ?>
            <li>
                <strong><a href="<?= base_url('notable-matters/' . $matter['id']) ?>" style="color: var(--navy); text-decoration: none;"><?= esc($matter['title']) ?></a></strong>
                <span class="matter-meta"><?= esc($matter['court']) ?> &middot; <?= esc($matter['area_of_law']) ?></span>
                <p><?= esc($matter['description']) ?></p>
                <p style="margin-top: 0.5rem; margin-bottom: 0;"><a href="<?= base_url('notable-matters/' . $matter['id']) ?>" class="link-arrow">Read more &rarr;</a></p>
            </li>
            <?php endforeach; ?>
        </ul>
        
        <p class="mt-4"><a href="<?= base_url('notable-matters') ?>" class="link-arrow">View all notable matters &rarr;</a></p>

        <div class="prose mt-4">
            <h2>Professional Profiles &amp; Affiliations</h2>
            
            <!-- Dynamic Social Media Logos -->
            <div class="social-icons">
                <?php if(get_setting('social_linkedin')): ?>
                    <a href="<?= get_setting('social_linkedin') ?>" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                <?php endif; ?>
                
                <?php if(get_setting('social_twitter')): ?>
                    <a href="<?= get_setting('social_twitter') ?>" target="_blank" rel="noopener" aria-label="X (Twitter)"><i class="fa-brands fa-x-twitter"></i></a>
                <?php endif; ?>
                
                <?php if(get_setting('social_instagram')): ?>
                    <a href="<?= get_setting('social_instagram') ?>" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <?php endif; ?>
                
                <?php if(get_setting('social_facebook')): ?>
                    <a href="<?= get_setting('social_facebook') ?>" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
                <?php endif; ?>
                
                <?php if(get_setting('social_youtube')): ?>
                    <a href="<?= get_setting('social_youtube') ?>" target="_blank" rel="noopener" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                <?php endif; ?>
            </div>

            <p class="small-note mt-4">Social profiles are linked for professional reference only. They are not intended as a means of solicitation.</p>

            <p class="mt-4"><a href="<?= base_url('contact') ?>" class="btn btn-primary">Contact via Firm</a></p>
        </div>
    </div>
</section>
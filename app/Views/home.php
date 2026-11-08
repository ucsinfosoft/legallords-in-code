<section class="hero">
    <div class="container">
        <h1><?= get_setting('hero_title', 'LegalLords LLP') ?></h1>
        <p class="hero-sub"><?= get_setting('hero_text') ?></p>
        <div class="hero-cta">
            <a href="<?= base_url('contact') ?>" class="btn btn-primary">Contact Us</a>
            <a href="<?= base_url('lead-counsel') ?>" class="btn btn-outline">Lead Counsel</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>Practice Areas</h2>
        <div class="grid-3">
            <?php foreach ($practice_areas as $area): ?>
            <a href="<?= base_url('practice-areas/' . esc($area['slug'])) ?>" class="card">
                <h3><?= esc($area['name']) ?></h3>
                <p><?= esc($area['short_description']) ?></p>
            </a>
            <?php endforeach; ?>
        </div>
        <p class="text-center mt-4"><a href="<?= base_url('practice-areas') ?>" class="link-arrow">View all practice areas →</a></p>
    </div>
</section>

<!-- Lead Counsel Section -->
<section class="section section-alt">
    <div class="container lead-preview flex-row reverse">
        <div class="lead-text-col">
            <!-- Removed <h2>Lead Counsel</h2> -->
            <h2>Mujeeb Ur Rehman</h2>
            <p class="role">Lead Counsel, LegalLords LLP<br>Chairperson, <a href="https://LawyersinAction.org/" target="_blank" rel="noopener">Lawyers in Action</a></p>
            <p>Delhi-based advocate and human rights activist. Represents clients in criminal, constitutional, and bail matters before the Delhi High Court and district courts.</p>
            <a href="<?= base_url('lead-counsel') ?>" class="link-arrow">Full profile →</a>
        </div>
        <div class="lead-image-col">
            <img src="<?= base_url('uploads/' . get_setting('img_profile', 'mujeeb.png')) ?>" alt="Mujeeb Ur Rehman" class="profile-photo">
        </div>
    </div>
</section>

<!-- Notable Matters Section -->
<section class="section">
    <div class="container">
        <h2>Notable Matters</h2>
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
        <p class="text-center mt-4"><a href="<?= base_url('notable-matters') ?>" class="link-arrow">View all notable matters →</a></p>
    </div>
</section>

<!-- Careers Section (Button moved to right) -->
<section class="section section-alt">
    <div class="container">
        <h2>Careers &amp; Internships</h2>
        <?php if ($latest_career): ?>
            <div class="card career-card flex-between">
                <div class="career-content">
                    <h3><?= esc($latest_career['title']) ?> <span class="badge"><?= esc($latest_career['type']) ?></span></h3>
                    <p><?= esc($latest_career['description']) ?></p>
                </div>
                <div class="career-action">
                    <a href="<?= base_url('careers') ?>" class="btn btn-outline" style="border-color:var(--navy); color:var(--navy);">View Details &amp; Apply</a>
                </div>
            </div>
        <?php else: ?>
            <p>There are no open positions at this time.</p>
        <?php endif; ?>
        <p class="text-center mt-4"><a href="<?= base_url('careers') ?>" class="link-arrow">View all vacancies →</a></p>
    </div>
</section>
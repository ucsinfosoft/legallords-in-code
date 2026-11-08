<section class="section">
    <div class="container">
        <h1>Careers &amp; Internships</h1>
        <!-- Text line removed -->

        <?php if (empty($careers)): ?>
            <p>There are no open positions at this time. Please check back later.</p>
        <?php else: ?>
            <?php foreach ($careers as $career): ?>
            <!-- Added flex-between classes to align right -->
            <div class="card career-card flex-between">
                <div class="career-content">
                    <h2><?= esc($career['title']) ?> <span class="badge"><?= esc($career['type']) ?></span></h2>
                    <p><?= esc($career['description']) ?></p>
                    <h3>Eligibility</h3>
                    <p><?= esc($career['eligibility']) ?></p>
                </div>
                <div class="career-action">
                    <a href="mailto:mail@legallords.in?subject=Application for <?= urlencode($career['title']) ?>" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
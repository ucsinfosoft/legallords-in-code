<section class="section">
    <div class="container">
        <!-- Breadcrumb removed -->
        <h1>Notable Matters</h1>
        <p style="margin-bottom: 2rem; color: var(--muted);">A factual overview of representative experience and notable matters handled by the firm.</p>
        
        <?php if (empty($matters)): ?>
            <p>Information about notable matters will be updated soon.</p>
        <?php else: ?>
            <ul class="matter-list">
                <?php foreach ($matters as $matter): ?>
                <li>
                    <strong><a href="<?= base_url('notable-matters/' . $matter['id']) ?>" style="color: var(--navy); text-decoration: none;"><?= esc($matter['title']) ?></a></strong>
                    <span class="matter-meta"><?= esc($matter['court']) ?> &middot; <?= esc($matter['area_of_law']) ?></span>
                    <p><?= esc($matter['description']) ?></p>
                    <p style="margin-top: 0.5rem; margin-bottom: 0;"><a href="<?= base_url('notable-matters/' . $matter['id']) ?>" class="link-arrow">Read more &rarr;</a></p>
                </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
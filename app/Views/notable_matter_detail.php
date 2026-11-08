<section class="section">
    <div class="container prose">
        <p class="breadcrumb"><a href="<?= base_url('notable-matters') ?>">Notable Matters</a> / <?= esc($matter['title']) ?></p>
        
        <h1><?= esc($matter['title']) ?></h1>
        <p class="role" style="margin-bottom: 2rem;"><?= esc($matter['court']) ?> · <?= esc($matter['area_of_law']) ?></p>
        
        <div style="font-size: 1.05rem; line-height: 1.8;">
            <?= nl2br(esc($matter['description'])) ?>
        </div>
        
        <p class="mt-4"><a href="<?= base_url('notable-matters') ?>" class="link-arrow">← Back to all matters</a></p>
    </div>
</section>
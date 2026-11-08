<section class="section">
    <div class="container">
        <h1>Practice Areas</h1>
        <div class="grid-2">
            <?php foreach ($practice_areas as $area): ?>
            <a href="<?= base_url('practice-areas/' . esc($area['slug'])) ?>" class="card">
                <h2><?= esc($area['name']) ?></h2>
                <p><?= esc($area['short_description']) ?></p>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
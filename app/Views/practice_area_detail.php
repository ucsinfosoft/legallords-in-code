<section class="section">
    <div class="container prose">
        <p class="breadcrumb"><a href="<?= base_url('practice-areas') ?>">Practice Areas</a> / <?= esc($area['name']) ?></p>
        <h1><?= esc($area['name']) ?></h1>
        <?= $area['full_description'] ?>
        <p><a href="<?= base_url('contact') ?>" class="btn btn-primary">Contact the Firm</a></p>
    </div>
</section>
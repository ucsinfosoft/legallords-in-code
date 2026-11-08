<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<h1>Edit Page: <?= esc($page['title']) ?></h1>
<?php if(session()->getFlashdata('success')): ?>
    <div class="alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<form action="<?= base_url('admin/pages/update/' . $page['slug']) ?>" method="post">
    <?= csrf_field() ?>
    <div class="form-group">
        <label>Page Title</label>
        <input type="text" name="title" value="<?= esc($page['title']) ?>" required>
    </div>
    <div class="form-group">
        <label>SEO Meta Description</label>
        <textarea name="meta_description" rows="2"><?= esc($page['meta_description']) ?></textarea>
    </div>
    <div class="form-group">
        <label>Page Content (HTML allowed)</label>
        <textarea name="content" rows="15" style="font-family: monospace;"><?= esc($page['content']) ?></textarea>
    </div>
    <button type="submit" class="btn btn-save">Save Changes</button>
</form>
<?= $this->endSection() ?>
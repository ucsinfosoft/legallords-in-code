<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1><?= isset($matter) ? 'Edit' : 'Add' ?> Notable Matter</h1>
        
<?php $action = isset($matter) ? base_url('admin/notable-matters/update/' . $matter['id']) : base_url('admin/notable-matters/store'); ?>

<form action="<?= $action ?>" method="post">
    <?= csrf_field() ?>
    
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" value="<?= isset($matter) ? esc($matter['title']) : '' ?>" required>
    </div>

    <div class="form-group">
        <label>Court</label>
        <input type="text" name="court" value="<?= isset($matter) ? esc($matter['court']) : '' ?>">
    </div>

    <div class="form-group">
        <label>Area of Law</label>
        <input type="text" name="area_of_law" value="<?= isset($matter) ? esc($matter['area_of_law']) : '' ?>">
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" rows="5" required><?= isset($matter) ? esc($matter['description']) : '' ?></textarea>
    </div>

    <div class="form-group">
        <label>Sort Order (0 is first)</label>
        <input type="number" name="sort_order" value="<?= isset($matter) ? esc($matter['sort_order']) : '0' ?>">
    </div>

    <div class="form-group">
        <label>
            <input type="checkbox" name="is_active" value="1" <?= (isset($matter) && $matter['is_active'] == 1) ? 'checked' : '' ?>> 
            Is Active (Visible on website)
        </label>
    </div>

    <button type="submit" class="btn btn-save">Save Matter</button>
    <a href="<?= base_url('admin/notable-matters') ?>" style="margin-left: 15px; color: #666; text-decoration: none;">Cancel</a>
</form>

<?= $this->endSection() ?>
<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1><?= isset($area) ? 'Edit' : 'Add' ?> Practice Area</h1>
        
<?php $action = isset($area) ? base_url('admin/practice-areas/update/' . $area['id']) : base_url('admin/practice-areas/store'); ?>

<form action="<?= $action ?>" method="post">
    <?= csrf_field() ?>
    
    <div class="form-group">
        <label>Name (e.g., Criminal Law)</label>
        <input type="text" name="name" value="<?= isset($area) ? esc($area['name']) : '' ?>" required>
    </div>
    
    <div class="form-group">
        <label>Short Description (Shows on Homepage)</label>
        <textarea name="short_description" rows="2" required><?= isset($area) ? esc($area['short_description']) : '' ?></textarea>
    </div>

    <div class="form-group">
        <label>Full Description (Shows on the specific page)</label>
        <textarea name="full_description" rows="6" required><?= isset($area) ? esc($area['full_description']) : '' ?></textarea>
    </div>

    <div class="form-group">
        <label>Sort Order (0 is first)</label>
        <input type="number" name="sort_order" value="<?= isset($area) ? esc($area['sort_order']) : '0' ?>">
    </div>

    <div class="form-group">
        <label>
            <input type="checkbox" name="is_active" value="1" <?= (isset($area) && $area['is_active'] == 1) ? 'checked' : '' ?>> 
            Is Active (Visible on website)
        </label>
    </div>

    <button type="submit" class="btn btn-save">Save Practice Area</button>
    <a href="<?= base_url('admin/practice-areas') ?>" style="margin-left: 15px; color: #666; text-decoration: none;">Cancel</a>
</form>

<?= $this->endSection() ?>
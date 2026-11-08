<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1><?= isset($career) ? 'Edit' : 'Add' ?> Career Vacancy</h1>
        
<?php $action = isset($career) ? base_url('admin/careers/update/' . $career['id']) : base_url('admin/careers/store'); ?>

<form action="<?= $action ?>" method="post">
    <?= csrf_field() ?>
    
    <div class="form-group">
        <label>Job Title (e.g., Legal Internship 2026)</label>
        <input type="text" name="title" value="<?= isset($career) ? esc($career['title']) : '' ?>" required>
    </div>

    <div class="form-group">
        <label>Type</label>
        <select name="type">
            <option value="Internship" <?= (isset($career) && $career['type'] == 'Internship') ? 'selected' : '' ?>>Internship</option>
            <option value="Job" <?= (isset($career) && $career['type'] == 'Job') ? 'selected' : '' ?>>Job</option>
        </select>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" rows="4" required><?= isset($career) ? esc($career['description']) : '' ?></textarea>
    </div>

    <div class="form-group">
        <label>Eligibility</label>
        <textarea name="eligibility" rows="4" required><?= isset($career) ? esc($career['eligibility']) : '' ?></textarea>
    </div>

    <div class="form-group">
        <label>
            <input type="checkbox" name="is_active" value="1" <?= (isset($career) && $career['is_active'] == 1) ? 'checked' : '' ?>> 
            Is Active (Visible on website)
        </label>
    </div>

    <button type="submit" class="btn btn-save">Save Vacancy</button>
    <a href="<?= base_url('admin/careers') ?>" style="margin-left: 15px; color: #666; text-decoration: none;">Cancel</a>
</form>

<?= $this->endSection() ?>
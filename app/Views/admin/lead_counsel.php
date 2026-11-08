<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1>Manage Lead Counsel Profile & Social Links</h1>
<?php if(session()->getFlashdata('success')): ?>
    <div class="alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<form action="<?= base_url('admin/lead-counsel/update') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    
    <h3>Profile Photo</h3>
    <div class="form-group">
        <label>Current Photo:</label><br>
        <img src="<?= base_url('uploads/'.$img_profile) ?>" height="120" class="current-img">
        <label>Upload New Photo:</label>
        <input type="file" name="img_profile">
    </div>

    <h3>Profile Details</h3>
    <div class="form-group">
        <label>Biography (Profile):</label>
        <textarea name="lc_bio" rows="5"><?= esc($lc_bio) ?></textarea>
    </div>
    <div class="form-group">
        <label>Qualifications:</label>
        <textarea name="lc_qualifications" rows="4"><?= esc($lc_qualifications) ?></textarea>
    </div>
    <div class="form-group">
        <label>Experience:</label>
        <textarea name="lc_experience" rows="5"><?= esc($lc_experience) ?></textarea>
    </div>

    <h3>Social Media Links</h3>
    <div class="form-group"><label>LinkedIn URL:</label><input type="text" name="social_linkedin" value="<?= esc($social_linkedin ?? '') ?>"></div>
    <div class="form-group"><label>Twitter/X URL:</label><input type="text" name="social_twitter" value="<?= esc($social_twitter ?? '') ?>"></div>
    <div class="form-group"><label>Instagram URL:</label><input type="text" name="social_instagram" value="<?= esc($social_instagram ?? '') ?>"></div>
    <div class="form-group"><label>Facebook URL:</label><input type="text" name="social_facebook" value="<?= esc($social_facebook ?? '') ?>"></div>
    <div class="form-group"><label>YouTube URL:</label><input type="text" name="social_youtube" value="<?= esc($social_youtube ?? '') ?>"></div>

    <button type="submit" class="btn btn-save">Update Profile</button>
</form>

<?= $this->endSection() ?>
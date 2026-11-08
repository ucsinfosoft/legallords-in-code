<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1>Global Settings & Images</h1>
<?php if(session()->getFlashdata('success')): ?>
    <div class="alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<form action="<?= base_url('admin/settings/update') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    
    <h3>Site Images</h3>
    <div class="form-group"><label>Logo:</label><br><img src="<?= base_url('uploads/'.$img_logo) ?>" height="40" class="current-img"> <input type="file" name="img_logo"></div>
    <div class="form-group"><label>Favicon:</label><br><img src="<?= base_url('uploads/'.$img_favicon) ?>" height="20" class="current-img"> <input type="file" name="img_favicon"></div>

    <h3>Homepage Content</h3>
    <div class="form-group"><label>Tagline:</label><input type="text" name="site_tagline" value="<?= esc($site_tagline) ?>"></div>
    <div class="form-group"><label>Hero Title:</label><input type="text" name="hero_title" value="<?= esc($hero_title) ?>"></div>
    <div class="form-group"><label>Hero Paragraph:</label><textarea name="hero_text" rows="2"><?= esc($hero_text) ?></textarea></div>

    <h3>Contact Details</h3>
    <div class="form-group"><label>Phone:</label><input type="text" name="phone" value="<?= esc($phone) ?>"></div>
    <div class="form-group"><label>Mobile:</label><input type="text" name="mobile" value="<?= esc($mobile) ?>"></div>
    <div class="form-group"><label>Email:</label><input type="email" name="email" value="<?= esc($email) ?>"></div>
    <div class="form-group"><label>Address (HTML allowed):</label><textarea name="address" rows="2"><?= esc($address) ?></textarea></div>

    <h3>Google Map</h3>
    <div class="form-group">
        <label>Map Iframe HTML (Paste the entire &lt;iframe&gt; code here):</label>
        <textarea name="google_map_embed" rows="6"><?= esc($google_map_embed) ?></textarea>
    </div>

    <button type="submit" class="btn btn-save">Save Settings</button>
</form>

<?= $this->endSection() ?>
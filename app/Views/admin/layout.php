<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Admin Panel | LegalLords' ?></title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; display: flex; background: #f4f6f9; color: #333; }
        .sidebar { width: 260px; background: #1a2744; color: #fff; height: 100vh; padding: 20px 0; position: fixed; }
        .sidebar h2 { text-align: center; margin-top: 0; margin-bottom: 30px; font-size: 24px; letter-spacing: 1px; }
        .sidebar a { color: #b0c4de; display: block; padding: 15px 25px; text-decoration: none; border-left: 4px solid transparent; transition: 0.3s; }
        .sidebar a:hover, .sidebar a.active { background: #2c3e5f; color: #fff; border-left-color: #b8963e; }
        .content { margin-left: 260px; padding: 40px; width: calc(100% - 260px); box-sizing: border-box; }
        
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: #fff; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #e0e0e0; }
        th { background: #f8f9fa; font-weight: 600; }
        
        .btn { padding: 10px 15px; text-decoration: none; border-radius: 4px; font-size: 14px; color: #fff; border: none; cursor: pointer; display: inline-block; transition: 0.2s; }
        .btn-add { background: #28a745; margin-bottom: 20px; }
        .btn-edit { background: #007bff; }
        .btn-delete { background: #dc3545; }
        .btn-save { background: #28a745; font-size: 16px; padding: 12px 20px; }
        
        .form-group { margin-bottom: 20px; background: #fff; padding: 20px; border-radius: 6px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        label { display: block; margin-bottom: 8px; font-weight: 600; color: #1a2744; }
        input[type="text"], input[type="number"], input[type="email"], input[type="file"], select, textarea { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-family: inherit; }
        
        .alert-success { background: #d4edda; color: #155724; padding: 15px; border-radius: 4px; margin-bottom: 20px; border-left: 4px solid #28a745; }
        .current-img { display: block; margin-bottom: 10px; border: 1px solid #ddd; padding: 5px; background: #fff; border-radius: 4px; }
    </style>
</head>
<body>
    <?php 
        function is_active($path) {
            return strpos(current_url(), base_url($path)) !== false ? 'active' : '';
        }
        $current = uri_string();
    ?>
    <div class="sidebar">
        <h2>LegalLords</h2>
        <a href="<?= base_url('admin') ?>" class="<?= $current == 'admin' ? 'active' : '' ?>">Dashboard</a>
        <a href="<?= base_url('admin/settings') ?>" class="<?= is_active('admin/settings') ?>">Global Settings</a>
        <a href="<?= base_url('admin/lead-counsel') ?>" class="<?= is_active('admin/lead-counsel') ?>">Lead Counsel</a>
        <a href="<?= base_url('admin/practice-areas') ?>" class="<?= is_active('admin/practice-areas') ?>">Practice Areas</a>
        <a href="<?= base_url('admin/notable-matters') ?>" class="<?= is_active('admin/notable-matters') ?>">Notable Matters</a>
        <a href="<?= base_url('admin/careers') ?>" class="<?= is_active('admin/careers') ?>">Careers</a>
        <a href="<?= base_url('admin/pages') ?>" class="<?= is_active('admin/pages') ?>">Static Pages</a>
        <a href="<?= base_url('admin/logout') ?>" style="color: #ff6b6b; margin-top: 30px;">Logout</a>
    </div>
    <div class="content">
        <?= $this->renderSection('content') ?>
    </div>
</body>
</html>
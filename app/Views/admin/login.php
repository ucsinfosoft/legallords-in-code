<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login | LegalLords</title>
    <style>
        body { font-family: sans-serif; background: #1a2744; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { background: #fff; padding: 2rem; border-radius: 8px; width: 100%; max-width: 350px; }
        h2 { text-align: center; color: #1a2744; margin-top: 0; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #b8963e; color: #1a2744; border: none; border-radius: 4px; font-weight: bold; cursor: pointer; }
        .error { color: red; text-align: center; font-size: 14px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Admin Login</h2>
        <?php if(session()->getFlashdata('msg')):?>
            <div class="error"><?= session()->getFlashdata('msg') ?></div>
        <?php endif;?>
        <form action="<?= base_url('admin/login') ?>" method="post">
            <?= csrf_field() ?>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
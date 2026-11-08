<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1>Notable Matters</h1>
<a href="<?= base_url('admin/notable-matters/create') ?>" class="btn btn-add">+ Add New Matter</a>
        
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Court</th>
        <th>Active</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($matters as $matter): ?>
    <tr>
        <td><?= $matter['id'] ?></td>
        <td><?= esc($matter['title']) ?></td>
        <td><?= esc($matter['court']) ?></td>
        <td><?= $matter['is_active'] ? 'Yes' : 'No' ?></td>
        <td>
            <a href="<?= base_url('admin/notable-matters/edit/' . $matter['id']) ?>" class="btn btn-edit">Edit</a>
            <a href="<?= base_url('admin/notable-matters/delete/' . $matter['id']) ?>" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?= $this->endSection() ?>
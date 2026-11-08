<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1>Practice Areas</h1>
<a href="<?= base_url('admin/practice-areas/create') ?>" class="btn btn-add">+ Add New Area</a>
        
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Sort Order</th>
        <th>Active</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($areas as $area): ?>
    <tr>
        <td><?= $area['id'] ?></td>
        <td><?= esc($area['name']) ?></td>
        <td><?= esc($area['sort_order']) ?></td>
        <td><?= $area['is_active'] ? 'Yes' : 'No' ?></td>
        <td>
            <a href="<?= base_url('admin/practice-areas/edit/' . $area['id']) ?>" class="btn btn-edit">Edit</a>
            <a href="<?= base_url('admin/practice-areas/delete/' . $area['id']) ?>" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?= $this->endSection() ?>
<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h1>Careers & Internships</h1>
<a href="<?= base_url('admin/careers/create') ?>" class="btn btn-add">+ Add New Vacancy</a>
        
<table>
    <tr>
        <th>Date</th>
        <th>Title</th>
        <th>Type</th>
        <th>Active</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($careers as $career): ?>
    <tr>
        <td><?= date('d M Y', strtotime($career['created_at'])) ?></td>
        <td><?= esc($career['title']) ?></td>
        <td><?= esc($career['type']) ?></td>
        <td><?= $career['is_active'] ? 'Yes' : 'No' ?></td>
        <td>
            <a href="<?= base_url('admin/careers/edit/' . $career['id']) ?>" class="btn btn-edit">Edit</a>
            <a href="<?= base_url('admin/careers/delete/' . $career['id']) ?>" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?= $this->endSection() ?>
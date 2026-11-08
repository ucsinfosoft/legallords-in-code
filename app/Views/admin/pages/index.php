<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>
<h1>Static Pages</h1>
<table>
    <tr>
        <th>Page Title</th>
        <th>Slug (URL)</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($pages as $page): ?>
    <tr>
        <td><?= esc($page['title']) ?></td>
        <td><?= esc($page['slug']) ?></td>
        <td>
            <a href="<?= base_url('admin/pages/edit/' . $page['slug']) ?>" class="btn btn-edit">Edit Page</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>
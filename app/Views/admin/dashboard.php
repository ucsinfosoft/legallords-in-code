<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<style>
    .dashboard-header { margin-bottom: 30px; }
    .dashboard-header h1 { color: #1a2744; margin-bottom: 10px; }
    .dashboard-header p { color: #666; font-size: 16px; }
    
    .dashboard-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }
    
    .dash-card {
        background: #fff;
        border-radius: 8px;
        padding: 25px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        border-left: 5px solid #b8963e;
        transition: transform 0.2s, box-shadow 0.2s;
        text-decoration: none;
        display: flex;
        flex-direction: column;
    }
    
    .dash-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .dash-card h3 {
        margin: 0 0 10px 0;
        color: #1a2744;
        font-size: 18px;
    }
    
    .dash-card p {
        margin: 0;
        color: #666;
        font-size: 14px;
        line-height: 1.5;
        flex-grow: 1;
    }
</style>

<div class="dashboard-header">
    <h1>Welcome, <?= session()->get('username') ?></h1>
    <p>Select an option below or from the sidebar to manage your website content.</p>
</div>

<div class="dashboard-grid">
    <!-- Global Settings -->
    <a href="<?= base_url('admin/settings') ?>" class="dash-card">
        <h3>Global Settings & Images</h3>
        <p>Manage your logo, favicon, contact details, homepage hero text, and Google Maps embed.</p>
    </a>

    <!-- Lead Counsel -->
    <a href="<?= base_url('admin/lead-counsel') ?>" class="dash-card">
        <h3>Lead Counsel Profile</h3>
        <p>Update the profile photo, biography, qualifications, experience, and social media links.</p>
    </a>

    <!-- Practice Areas -->
    <a href="<?= base_url('admin/practice-areas') ?>" class="dash-card">
        <h3>Practice Areas</h3>
        <p>Add, edit, or remove the legal practice areas displayed on the homepage and website.</p>
    </a>

    <!-- Notable Matters -->
    <a href="<?= base_url('admin/notable-matters') ?>" class="dash-card">
        <h3>Notable Matters</h3>
        <p>Manage the list of representative cases and notable matters handled by the firm.</p>
    </a>

    <!-- Careers -->
    <a href="<?= base_url('admin/careers') ?>" class="dash-card">
        <h3>Careers & Internships</h3>
        <p>Post new job vacancies or internship opportunities for prospective applicants.</p>
    </a>

    <!-- Static Pages -->
    <a href="<?= base_url('admin/pages') ?>" class="dash-card">
        <h3>Static Pages</h3>
        <p>Edit the content and SEO metadata for pages like About, Disclaimer, Privacy Policy, and Terms.</p>
    </a>
</div>

<?= $this->endSection() ?>
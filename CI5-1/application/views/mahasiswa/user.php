<h1> Ini adalah Halaman User </h1>

<h1>Hello, <?php echo $this->session->userdata('level'); ?>!</h1>
<a href=" <?= base_url().'login/logout';?>">logout</a>
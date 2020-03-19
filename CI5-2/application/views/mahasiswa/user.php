<h1>ini halaman user<h1>
<h1>Hello, <?php echo $this->session->userdata('user'); ?>!</h1>
<a href=" <?= base_url().'login/logout';?>">logout</a>
<br>
<?php
    foreach($this->session->userdata() as $value){
    echo "-: $value<br>";
}?>

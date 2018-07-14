<?php
// application/views/news/success.php

$this->load->view($this->config->item('theme') . 'header');
?>

<p>Yay! You entered data!</p>
<p>Wouldn't it be great if we showed it to you??</p>
<p><a href="<?php echo site_url('news/') ?>">View article</a></p>
<p><a href="<?php echo site_url('news/create/') ?>">Create Another</a></p>
<?php
$this->load->view($this->config->item('theme') . 'footer');
?>
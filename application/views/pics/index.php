<?php 
// application/views/pics/index.php 

$this->load->view($this->config->item('theme') . 'header');?>

<h2><?php echo $title; ?></h2>
<div><?=anchor('pics/search', 'Search New Tags')?></div>

<?php foreach ($pics as $pic): ?>

        <h4><?php echo $pic['title']; ?></h4>
        
        <p><a href="<?php echo site_url('pics/'.$pic['tag']); ?>">View images</a></p>

<?php endforeach; 
$this->load->view($this->config->item('theme') . 'footer');
?>

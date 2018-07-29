<?php 
// application/views/pics/index.php 

$this->load->view($this->config->item('theme') . 'header');?>

<h2><?php echo $title; ?></h2>
<div><?=anchor('pics/search', 'Search New Tags')?></div>

<?php foreach ($pics as $pic): ?>

        <h3><?php echo $pic['title']; ?></h3>
        <div class="main">
                <?php echo $pic['tag']; ?>
        </div>
        <p><a href="<?php echo site_url('pics/'.$pic['tag']); ?>">View images</a></p>

<?php endforeach; 
$this->load->view($this->config->item('theme') . 'footer');
?>

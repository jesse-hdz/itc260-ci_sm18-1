<?php 
// application/views/pics/search.php 

$this->load->view($this->config->item('theme') . 'header');
?>
<h2><?php echo $title; ?></h2>
<?=validation_errors(); ?>
<?=form_open('pics/search'); ?>

    <input type="input" name="title" placeholder="Search Title"/><br />
    <input type="input" name="tag" placeholder="Tag (no spaces)"/><br />

    <input type="submit" name="submit" value="View Images" />

</form>

<?php 
$this->load->view($this->config->item('theme') . 'footer');
?>

<?php 
// application/views/pics/view.php 

$this->load->view($this->config->item('theme') . 'header');

foreach ($pics as $pic) 
{
    $size = 'm';
    $photo_url = 'http://farm' . $pic->farm . 'staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
    echo '<div>';
    echo $pic->title;
    echo '</div>';
}   

$this->load->view($this->config->item('theme') . 'footer');
?>
<?php
// application/controllers/Pics.php
class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                $this->load->helper('url_helper');
                $this->config->set_item('banner', 'Flickr Images');
        }

        public function index()
        {
                $data['pics'] = $this->pics_model->get_pics();
                $data['title'] = 'Pics Archive';

                $this->load->view('pics/index',$data);
        }

        public function view($tag = NULL)
        {
            $data['pics'] = $this->pics_model->get_pics($tag);

            if (empty($data['pics']))
            {
                show_404();
            }

            $data['title'] = $data['pics']['title'];
            
            $this->load->view('pics/view', $data);   
        }

        public function search()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Enter tag to display images';

            $this->form_validation->set_rules('tags', 'Tags', 'required');

            if ($this->form_validation->run() === FALSE)
            {// form incomplete
                $this->load->view('pics/search', $data);
            }else{// form complete
                $tag = $this->pics_model->set_tags();
                
                
                if($tag!==false)
                {// tag has been entered, show success and images
                    feedback('Success!','info');
                    redirect('/pics/view/' . $tag);
                }else{// error detected, redirect to search again
                    feedback('Error!','error');
                    redirect('/pics/search/');
                }
            }
        }
}
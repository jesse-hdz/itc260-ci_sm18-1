<?php
// application/models/Picss_model.php
class Pics_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_pics($tag = FALSE)
        {
            // Flickr-api key @custom_config
            $api_key = $this->config->item('flickr-api_key');
  
            if ($tag === FALSE)
            {
                $query = $this->db->get('sm18_flickr');
                return $query->result_array();
            }

            $query = $this->db->get_where('sm18_flickr', array('tag' => $tag));
            return $query->row_array();

            // Flickr URL Build
            $perPage = 25;
            $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
            $url.= '&api_key=' . $api_key;
            $url.= '&tags=' . $tag;
            $url.= '&per_page=' . $perPage;
            $url.= '&format=json';
            $url.= '&nojsoncallback=1';
    
            return $pics;
        }
        public function set_tags()
        {
                $this->load->helper('url');

                $slug = url_title($this->input->post('title'), 'dash', TRUE);

                $data = array(
                        'title' => $this->input->post('title'),
                        'tag' => $slug
                );

                if ($this->db->insert('sm18_flickr', $data)) 
                { // data inserted, pass back slug
                        redirect('pics/view/' . $slug);
                        return $slug;
                } else { // failure, pass back false
                        return false;
                }
                
        }
}

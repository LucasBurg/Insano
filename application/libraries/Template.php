<?php
class Template
{
    private $data;
    
    private $ci;
    
    private $js;
    
    private $css;
    
    public function __construct()
    {
        $this->ci  =& get_instance();
        $this->js  = array();
        $this->css = array();
        
        $this->add_css(base_url('assets\bootstrap-3.3.7\css\bootstrap.min.css'));
        $this->add_js(base_url('assets\jquery\jquery-3.0.0.slim.min.js'));
        $this->add_js(base_url('assets\bootstrap-3.3.7\js\bootstrap.min.js'));
    }
    
    public function load_view($view, $data = null)
    {
        if (!file_exists("application/views/{$view}.php")) {
            show_404();
        } else {
            $this->data['page_var'] = $data;
            $this->load_css();
            $this->load_js();
            $this->data['content']  = $this->ci->load->view($view, $this->data, true);
            $this->ci->load->view('templates/default/layout', $this->data);
        }
    }
    
    public function add_js($file)
    {
        $this->js[]['file'] = $file;
    }
    
    public function add_css($file)
    {
        $this->css[]['file'] = $file;
    }
    
    private function load_css()
    {
        $this->data['css_head'] = '';
        foreach ($this->css as $item) {
            $this->data['css_head'] .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"{$item['file']}\">".PHP_EOL;
        }
    }
    
    private function load_js()
    {
        $this->data['js_footer'] = '';
        foreach ($this->js as $item) {
            $this->data['js_footer'] .= "<script type=\"text/javascript\" src=\"{$item['file']}\"></script>".PHP_EOL;
        }
    }
}

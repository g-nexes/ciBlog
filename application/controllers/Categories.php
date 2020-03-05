<?php
class Categories extends CI_Controller{
    public function index(){
        //Loading the page view by index controller
        $data['title'] = 'Categories';

        $data['categories'] = $this->category_model-> get_categories();

        $this->load->view('templates/header');
        $this->load->view('categories/index', $data);
        $this->load->view('templates/footer');
    }

    //Create Categories
    public function create(){
        //Check login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        $data['title'] = 'Create category';

        $this->form_validation->set_rules('name','Name','required|is_unique[categories.name]',array(
            'is_unique' => 'This category already exists.'
        ));

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('categories/create', $data);
            $this->load->view('templates/footer');
        }else {
            $this->category_model->create_categroy();
            $this->session->set_flashdata('category_created','Your category has been created');
            redirect('categories');
        }
    }

    //To call up all the categorised posts
    public function posts($id)
    {
        $data['title'] = $this->category_model->get_category($id)->name;
        $data['posts'] = $this->post_model->get_posts_by_category($id);

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }

    //Deletes a category based on id
    public function delete($id){
        //Check login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        $this->category_model->delete_category($id);
        $this->session->set_flashdata('category_deleted','Category has been deleted');
        redirect('categories');
    }
}

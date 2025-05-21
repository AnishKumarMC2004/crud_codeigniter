<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Main_model');
    }
    
    public function login() {
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $this->input->post('name');
            $password = $this->input->post('password');
            $recaptchaResponse = $this->input->post('g-recaptcha-response');
            $secretkey = '6LfJXRorAAAAAPZbN-DRWPQRegB6tRyQm-qhrXgJ';

            $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$recaptchaResponse");

            $responseData = json_decode($verifyResponse);

            if ($responseData->success) {
                if ($this->Main_model->login($name, $password)) {
                    $this->session->set_userdata('user', $name);
                    redirect('main/read');
                } else {
                    echo "<script>alert('Invalid credentials!');</script>";
                }
            } else {
                echo "<script>alert('reCAPTCHA verification failed. Please try again.');</script>";
            }
        }
        $this->load->view('login');
    }

    public function register() {
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $this->input->post('name');
            $password = $this->input->post('password');
            $age = $this->input->post('age');
            $place = $this->input->post('place');

            if ($this->Main_model->register($name, $password, $age, $place)) {
                redirect('main/login');
            } else {
                echo "Registration failed.";
            }
        } else {
            $this->load->view('register');
        }
    }

    public function read() {

        if (!$this->session->userdata('user')) redirect('main/login');

        $data['workers'] = $this->Main_model->getAll();
        $this->load->view('read', $data);
    }

    public function update($id = null) {
        if (!$this->session->userdata('user')) redirect('main/login');
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $this->input->post('name');
            $age = $this->input->post('age');
            $place = $this->input->post('place');
            $this->Main_model->update($id, $name, $age, $place);
            redirect('main/read');
        } else {
            $data['work'] = $this->Main_model->getById($id);
            $this->load->view('update', $data);
        }
    }
    
    public function delete($id) {

        $this->Main_model->delete($id);
        redirect('main/read');
    }

    public function logout() {
        
        session_destroy();
        redirect('main/login');
    }
}
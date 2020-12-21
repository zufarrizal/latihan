<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model');
    }
    public function index()
    {
        $data['user'] = $this->User_Model->getAllUser();

        $data['title'] = "Latihan";
        $this->load->view('template/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->User_Model->getAllUser();

        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]|min_length[4]');
        $this->form_validation->set_rules('password2', 'Password 2', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah User";
            $this->load->view('template/header', $data);
            $this->load->view('user/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username'), true),
                'fullname' => htmlspecialchars($this->input->post('fullname'), true),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            $this->db->insert('user', $data);
            redirect('user');
        }
    }

    public function ubah($id)
    {
        $data['user'] = $this->User_Model->getUserById($id);

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Ubah User";
            $this->load->view('template/header', $data);
            $this->load->view('user/ubah', $data);
            $this->load->view('template/footer');
        } else {
            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $fullname = $this->input->post('fullname');
            $email = $this->input->post('email');

            $this->db->set('username', $username);
            $this->db->set('fullname', $fullname);
            $this->db->set('email', $email);

            $this->db->where('id', $id);
            $this->db->update('user');
            redirect('user');
        }
    }

    public function lihat($id)
    {
        $data['user'] = $this->User_Model->getUserById($id);

        $data['title'] = "Lihat Data";
        $this->load->view('template/header', $data);
        $this->load->view('user/lihat', $data);
        $this->load->view('template/footer');
    }
    public function hapus($id)
    {
        $data['user'] = $this->User_Model->getUserById($id);
        $this->User_Model->deleteUser($id);
        redirect('user');
    }
}

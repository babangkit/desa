<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $useraktif = $this->session->userdata('username');
        if ($useraktif) {
            redirect('home');
        } else {
            $this->form_validation->set_rules('username', 'Username', 'trim|required', [
                'required' => '*NIK wajib diisi!'
            ]);
            $this->form_validation->set_rules('password', 'Password', 'trim|required', [
                'required' => '*Password wajib diisi!'
            ]);

            if ($this->form_validation->run() == false) {

                $data['title'] = 'Halaman Login';
                $this->load->view('auth/index', $data);
            } else {
                $this->_login();
            }
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['username' => $username])->row_array();
        if ($user['id'] == 1) {
            //if ($user['is_active'] == 1) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                ];

                $this->session->set_userdata($data);

                redirect('home');
            } else {
                $this->session->set_flashdata('berhasil', '
                <script>
                toastr.error("Password yang anda masukan salah!", "Terjadi Kesalahan", {
                    timeOut: 5000,
                    closeButton: true,
                    progressBar: true,
                    positionClass: "toast-top-right"
                })
                </script>');
                redirect('auth');
            }
            //} else {
            //    $this->session->set_flashdata('message', "User tidak Aktif");
            //    redirect('auth');
            //}
        } else {
            $this->session->set_flashdata('berhasil', '
            <script>
            toastr.error("NIK/User yang anda masukan bukan admin!", "Terjadi Kesalahan", {
                timeOut: 5000,
                closeButton: true,
                progressBar: true,
                positionClass: "toast-top-right"
            })
            </script>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => '*Nama wajib diisi!',
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'required' => '*Username wajib diisi!',
            'is_unique' => '*Username telah terdaftar!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => '*Email wajib diisi!',
            'valid_email' => '*Email tidak sesuai!',
            'is_unique' => '*Email telah terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'required' => '*Password wajib diisi!',
            'min_length' => '*Password Terlalu Pendek!',
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Registrasi';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/footer');
        } else {
            $data = [

                'username' => htmlspecialchars($this->input->post('username', true)),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()


            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', "<script>
                    
            $.notify({
                icon: 'far fa-laugh-wink',
                title: 'Success!!',
                message: 'Pendaftaran berhasil, silahkan log in!'
            }, {
                type: 'success',
                placement: {
                    from: 'top',
                    align: 'right'
                },
                time: 1000,
            });
        </script>");
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('berhasil', '
            <script>
            toastr.success("Anda berasil keluar dari sistem!", "Berhasil", {
                timeOut: 5000,
                closeButton: true,
                progressBar: true,
                positionClass: "toast-top-right"
            })
            </script>');
        redirect('auth');
    }
}

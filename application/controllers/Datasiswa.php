<?php
class datasiswa extends CI_Controller
{

    public function index()

    {

        $this->load->view('view-form-datasiswa');
    }

    public function cetak()
    {
        
        $this->form_validation->set_rules('Nama', 'Nama siswa', 
'required|min_length[3]', [
            'required' => 'Nama siswa Harus diisi',
            'min_lenght' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('NIS', 'NIS siswa', 
'required|min_length[3]', [
            'required' => 'NIS siswa Harus diisi',
            'min_lenght' => 'NIS terlalu pendek'
        ]);

        $this->form_validation->set_rules('Kelas', 'Kelas siswa', 
'required|min_length[3]', [
            'required' => 'Kelas siswa Harus diisi',
            'min_lenght' => 'Kelas terlalu pendek'
        ]);

        $this->form_validation->set_rules('Tanggal Lahir', 'Tanggal Lahir', 
'required|min_length[3]', [
            'required' => 'Tanggal Lahir siswa Harus diisi',
            'min_lenght' => 'Tanggal Lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('Tempat lahir', 'Tempat Lahir', 
'required|min_length[3]', [
            'required' => 'Tempat Lahir siswa Harus diisi',
            'min_lenght' => 'Tempat Lahir siswa terlalu pendek'
        ]);

        $this->form_validation->set_rules('Alamat', 'Alamat siswa', 
'required|min_length[3]', [
            'required' => 'Alamat siswa Harus diisi',
            'min_lenght' => 'Alamat terlalu pendek'
        ]);

        $this->form_validation->set_rules('Jenis Kelamin', 'Jenis Kelamin', 
'required|min_length[3]', [
            'required' => 'Jenis Kelamin siswa Harus diisi',
            'min_lenght' => 'Jenis kelamin terlalu pendek'
        ]);

        $this->form_validation->set_rules('Agama', 'Agama', 
'required|min_length[3]', [
            'required' => 'Agama siswa Harus diisi',
            'min_lenght' => 'Agama terlalu pendek'
        ]);
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-datasiswa');
        } else {
            $data = [
                'nama'          => $this->input->post('Nama'),
                'NIS'           => $this->input->post('NIS'),
                'Kelas'         => $this->input->post('Kelas'),
                'Tanggal Lahir' => $this->input->post('Tanggal Lahir'),
                'Tempat Lahir'  => $this->input->post('Tempat Lahir'),
                'Alamat'        => $this->input->post('Alamat'),
                'Jenis kelamin' => $this->input->post('Jenis kelamin'),
                'Agama'         => $this->input->post('Agama')
            ];

            $this->load->view('view-data-Siswa', $data);
        }
    }
}
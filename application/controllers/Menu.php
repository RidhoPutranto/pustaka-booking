<?php
class Menu extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('menu_model');
    }

    public function index() {
        $data['menus'] = $this->menu_model->get_menus();
        $this->load->view('menu/index', $data);
    }

    public function create() {
        $this->load->view('menu/add_menu');
    }
    
    public function store() {
        // Mendapatkan data dari formulir
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
    
        // Menyimpan data ke dalam database
        $data = array(
            'nama' => $nama,
            'harga' => $harga
        );
    
        $this->menu_model->add_menu($data);
    
        // Redirect ke halaman utama setelah menyimpan
        redirect('menu');
    }
    
    public function edit($id) {
        $data['menu'] = $this->menu_model->get_menu_by_id($id);
        $this->load->view('menu/edit_menu', $data);
    }
    

    public function update($id) {
        // Mendapatkan data dari formulir
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
    
        // Menyimpan data ke dalam array
        $data = array(
            'nama' => $nama,
            'harga' => $harga
        );
    
        // Memperbarui data menu ke dalam database berdasarkan ID
        $this->menu_model->update_menu($id, $data);
    
        // Redirect ke halaman utama setelah memperbarui
        redirect('menu');
    }
    
    public function delete($id) {
        // Hapus data menu berdasarkan ID
        $this->menu_model->delete_menu($id);
    
        // Redirect ke halaman utama setelah menghapus
        redirect('menu');
    }
    
}
?>

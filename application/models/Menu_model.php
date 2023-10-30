<?php
class Menu_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_menus() {
        $query = $this->db->get('menu');
        return $query->result();
    }

    public function add_menu($data) {
        $this->db->insert('menu', $data);
    }

    public function get_menu_by_id($id) {
        $query = $this->db->get_where('menu', array('id' => $id));
        return $query->row();
    }

    public function update_menu($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('menu', $data);
    }

    public function delete_menu($id) {
        $this->db->where('id', $id);
        $this->db->delete('menu');
    }
}
?>

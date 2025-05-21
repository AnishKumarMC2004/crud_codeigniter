<?php 
class Main_model extends CI_Model {

     public function getAll() {
        $this->db->select('workers1.id, workers1.name, workers2.age, workers2.place');
        $this->db->from('workers1');
        $this->db->join('workers2', 'workers1.id = workers2.id');
        return $this->db->get()->result();
    }

    public function register($name, $password, $age, $place) {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $this->db->insert('workers1', ['name' => $name, 'password' => $hashed]);
        $id = $this->db->insert_id();
        return $this->db->insert('workers2', ['id' => $id, 'age' => $age, 'place' => $place]);
    }

    public function login($name, $password) {
    $this->db->where('name', $name);
    $query = $this->db->get('workers1');

    if ($query->num_rows() == 1) {
        $user = $query->row();
        return password_verify($password, $user->password);
    }
    return false;
    } 

    public function getById($id) {
        $this->db->select('workers1.name, workers2.age, workers2.place');
        $this->db->from('workers1');
        $this->db->join('workers2', 'workers1.id = workers2.id');
        $this->db->where('workers1.id', $id);
        return $this->db->get()->row();
    }
    
    public function update($id,$name, $age, $place) {
        $this->db->where('id', $id)->update('workers1', ['name' => $name]);
        $this->db->where('id', $id)->update('workers2', ['age' => $age, 'place' => $place]);
    }

    public function delete($id) {
        $this->db->where('id', $id)->delete('workers2');
        $this->db->where('id', $id)->delete('workers1');
    }
}

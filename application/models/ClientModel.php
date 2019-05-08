<?php
class ClientModel extends CI_Model
{
    public function get_All()
    {
        $query = $this->db->get('client');
        return $query->    result_array();
    }

    public function authentification($nom, $password){
		$this->load->library('encrypt');
		$key = 'key';
		$encrypted_string = $this->encrypt->encode($password, $key);
        $query = $this->db->query('SELECT * FROM client');
        foreach($query->result_array() as $row){
        if($row['nom'] == $nom && $this->encrypt->decode($row['password'], $key) == $password)
            return 1;
        }
        return 0;
    }

    public function get_LP($login,$pass)
    {
        return $this->db->get_where('client',array('nom' => $login,'password'=>$pass))->result_array();
    }
    public function get_byID($id)
    {
        return $this->db->get_where('client',array('idclient' => $id))->row();
    }
    public function delete($id)
    {
            $this->db->where('idclient', $id);
            $this->db->delete('client');
    }
    public function update($id,$nom)
    {
            $this->nom = $nom;
            $this->db->where('idclient',$id);
            $this->db->update('client',$this);
    }
    public  function insert($nom,$login,$password)
    {
            $this->nom = $nom;
            $this->login = $login;
            $this->password = $password;
            $this->db->insert('client', $this);
    }
   /* public function selectAll(){
        return   $this->db->query(" select * FROM `facturedetail` group BY idproduit ORDER BY somme asc");
    } */


}

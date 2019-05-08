<?php
class CategorieModel extends CI_Model 
{
    //base 

    public function get_All()
    {
        $query = $this->db->get('categorie');
        return $query->    result_array();
    }

    public function get_byID($id)
    {
        return $this->db->get_where('categorie',array('idcategorie' => $id))->row()->nom;
    }
	
    public  function insert($nom)
    {
            $this->nom = $nom;
			$this->db->insert('categorie', $this);
    }

    public function update($id,$nom)
    {
			$this->nom = $nom;
            $this->db->where('idcategorie',$id);
            $this->db->update('categorie',$this);
    }

    public function delete($id)
    {
            $this->db->where('idcategorie', $id);
            $this->db->delete('categorie');
    }
    /* public function total(){
        
          return   $this->db->query(" SELECT count(*)as somme FROM `client` ")->row()->somme;       
    }*/
}
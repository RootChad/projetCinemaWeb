<?php
class Categorie_FilmModel extends CI_Model 
{
    //base 

    public function get_All()
    {
        $query = $this->db->get('categorie_film');
        return $query->    result_array();
    }

    public function get_byIDCAT($id)
    {
        return $this->db->get_where('categorie_film',array('idcategorie' => $id))->result_array();
    }
	public function get_byIDCAT($id)
    {
        return $this->db->get_where('categorie_film',array('idfilm' => $id))->result_array();
    }
    public  function insert($idcategorie,$idfilm)
    {
            $this->idcategorie = $idcategorie;
            $this->idfilm = $idfilm;
			$this->db->insert('categorie_film', $this);
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
            $this->db->delete('categorie_film');
    }
   
}
<?php
class CalendrierModel extends CI_Model
{
    //base

    public function get_All()
    {
        $query = $this->db->get('calendrier');
        return $query->    result_array();
    }

    public function get_byID($id)
    {
        return $this->db->get_where('calendrier',array('idcalendrier' => $id))->row()->calendrier;
    }

    public  function insert($prix,$idfilm,$date,$heure)
    {
            $this->prix = $prix;
            $this->idfilm = $idfilm;
            $this->date = $date;
			      $this->heure = $heure;
            $this->db->insert('calendrier', $this);
    }

    public function update($id,$prix,$idfilm,$date,$heure)
    {
            $this->prix = $prix;
            $this->idfilm = $idfilm;
            $this->date = $date;
            $this->heure = $heure;
            $this->db->where('idcalendrier',$id);
            $this->db->update('calendrier',$this);
    }

    public function delete($id)
    {
            $this->db->where('idcalendrier', $id);
            $this->db->delete('calendrier');
    }

     public function getAllwithTitre(){

          return   $this->db->query("SELECT c.idcalendrier,c.prix,c.idfilm,c.date,c.heure,f.titre,f.image FROM calendrier c join film f on c.idfilm=f.idfilm ")-> result_array();
    }
	public function getAllBYJOUR($jour){

          return   $this->db->query("SELECT c.idcalendrier,c.prix,c.idfilm,c.date,c.heure,f.titre,f.image FROM calendrier c join film f on c.idfilm=f.idfilm where c.date='".$jour."'")-> result_array();
    }
	public function getById($id){

          return   $this->db->query("SELECT c.idcalendrier,c.prix,c.idfilm,c.date,c.heure,f.titre,f.image FROM calendrier c join film f on c.idfilm=f.idfilm where c.idcalendrier=".$id)-> result_array();
    }
}

<?php
class FilmModel extends CI_Model
{
    //base

    public function get_All()
    {
        $query = $this->db->get('film');
        return $query->    result_array();
    }

    public function get_byID($id)
    {
        return $this->db->get_where('film',array('idfilm' => $id))->result_array();
    }

    public  function insert($titre,$notefilm,$duree,$datesortie,$image,$idgenre,$description)
    {
            $this->titre = $titre;
            $this->notefilm = $notefilm;
            $this->duree = $duree;
			$this->datesortie = $datesortie;
            $this->image = $image;
            $this->idgenre = $idgenre;
            $this->description = $description;
            $this->indexation=$titre."".$notefilm."".$duree."".$datesortie."".$image."".$idgenre."".$description;
            $this->db->insert('film', $this);
    }

    public function update($id,$titre,$notefilm,$duree,$datesortie,$image,$idgenre,$description)
    {
			      $this->titre = $titre;
            $this->notefilm = $notefilm;
            $this->duree = $duree;
			      $this->datesortie = $datesortie;
            $this->image = $image;
            $this->idgenre = $idgenre;
            $this->description = $description;
            $this->indexation=$titre."".$notefilm."".$duree."".$datesortie."".$image."".$idgenre."".$description;
            $this->db->where('idfilm',$id);
            $this->db->update('film',$this);
    }
	public function updateImage($id,$nom)
    {
            $this->id = $id;
            $this->nom = $nom;
            $this->db->where('idfilm',$id);
            $this->db->update('film',$this);
    }
    public function delete($id)
    {
            $this->db->where('idfilm', $id);
            $this->db->delete('film');
    }
    public function recherche($req){

         $query = $this->db->query(" SELECT c.idfilm,c.titre,c.notefilm,c.duree,c.image,c.datesortie,c.idgenre,c.description,f.nom FROM film c join categorie f on c.idgenre=f.idcategorie where c.`indexation` LIKE '".$req."'");
         return $query->result_array();
    }
	 public function getAllwithGenre(){

          return   $this->db->query("SELECT c.idfilm,c.titre,c.notefilm,c.duree,c.image,c.datesortie,c.idgenre,c.description,f.nom FROM film  c join categorie f on c.idgenre=f.idcategorie ")-> result_array();
    }
    /* public function total(){

          return   $this->db->query(" SELECT count(*)as somme FROM `client` ")->row()->somme;
    }*/
}

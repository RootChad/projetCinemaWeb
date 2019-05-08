<?php
class ReservationModel extends CI_Model
{
    //base

    public function get_All()
    {
        $query = $this->db->get('reservation');
        return $query->    result_array();
    }

    public function get_byID($id)
    {
        return $this->db->get_where('reservation',array('idreservation' => $id))->result_array();
    }

    public  function insert($idFilm,$statut,$date,$prix,$idclient)
    {
            $this->idfilm = $idFilm;
            $this->statut = $statut;
            $this->date = $date;
			      $this->prix = $prix;
            $this->idclient = $idclient;
            $this->db->insert('film', $this);
    }

    public function update($id,$idFilm,$statut,$date,$prix,$idclient)
    {
			$this->idfilm = $idFilm;
            $this->statut = $statut;
            $this->date = $date;
			$this->prix = $prix;
            $this->idclient = $idclient;
            $this->db->where('idreservation',$id);
            $this->db->update('reservation',$this);
    }

    public function delete($id)
    {
            $this->db->where('idreservation', $id);
            $this->db->delete('reservation');
    }

}

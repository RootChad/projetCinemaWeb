<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackControl extends CI_Controller {

//----------------------------FONCTIONS POUR GERER LES PAGES BACKOFFICE----------------------------------///
	public function index()
	{
		$this->load->helper('url');
		$this->load->Model("FilmModel");
		$this->load->Model("CategorieModel");
		$data = array('films' => $this->FilmModel->getAllwithGenre(),'categories' => $this->CategorieModel->get_All());
		$this->load->view('/back/films',$data);
	}
	public function toFilms()
	{
		$this->load->helper('url');
		$this->load->Model("FilmModel");
		$this->load->Model("CategorieModel");
		$data = array('films' => $this->FilmModel->getAllwithGenre(),'categories' => $this->CategorieModel->get_All());
		$this->load->view('/back/films',$data);
	}
	public function toCategories()
	{
		$this->load->helper('url');
		$this->load->Model("CategorieModel");
		$data = array('categories' => $this->CategorieModel->get_All());
		$this->load->view('/back/categories',$data);
	}
	public function toCalendrier()
	{
		$this->load->helper('url');
		$this->load->Model("CalendrierModel");
		$this->load->Model("FilmModel");
		$data = array('calendrier' => $this->CalendrierModel->getAllwithTitre(),'films' => $this->FilmModel->getAllwithGenre());
		$this->load->view('/back/calendrier',$data);
	}
	public function toReservations()
	{
		$this->load->helper('url');
		$this->load->Model("ReservationModel");
		$data = array('reservations' => $this->ReservationModel->get_All());
		$this->load->view('/back/reservations',$data);
	}
	public function toClients()
	{
		$this->load->helper('url');
		$this->load->Model("ClientModel");
		$data = array('clients' => $this->ClientModel->get_All());
		$this->load->view('/back/clients',$data);
	}
	public function toLogin()
	{
		$this->load->helper('url');
		
		$this->load->view('/back/login');
	}
	public function connexion() {
		$this->load->helper('url');
		$this->load->library('encrypt');
		$login = $this->input->post("login");
		$pass = $this->input->post("password");
		$this->load->model("ClientModel");
		$key = 'key';
		$encrypted_string = $this->encrypt->encode($pass, $key);
		
		$return = $this->ClientModel->authentification($login,$pass);
		$client['clients'] = $this->ClientModel->get_LP($login,$pass);
		$this->load->library('session');
		$url=$this->config->base_url();
        $this->session;
		foreach($client['clients'] as $row)
        {
			$this->session->set_userdata('admin',$row['idclient']);
        }
		if($return == 1){
		
		redirect($url.'BackOffice', 'refresh');
		}
		else {
			redirect($url.'toLogin', 'refresh');
	
		}
	}
	function deconnexion(){
		
	
		 $this->load->helper('url');
		 	$this->load->library('session');
			$url=$this->config->base_url();
			$this->session->sess_destroy();
		redirect($url.'Login', 'refresh');
	}
	//----------------------------FONCTIONS POUR LES FILMS----------------------------------///
	  function ajouterFilm() {
				$this->load->helper('url');
				$this->load->model('CategorieModel');
			$this->load->Model("FilmModel");
			
			//------------------uploat IMAGE--------------//
			 
        $config['upload_path'] = './assets/images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
                  $this->load->library('upload', $config);
                  $this->upload->initialize($config); 
        if ( ! $this->upload->do_upload('upload'))
        {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            //echo "<p>File sucesfully uploaded</p>";
            
            
          echo  $_FILES['upload']['name'];
           $image =  $_FILES['upload']['name'];
			
			//---------------------------------------------//
			$titre = $this->input->post("titre");
			$notefilm = $this->input->post("note");
			$durée = $this->input->post("durée");
			$datesortie = $this->input->post("date");
			//$image = $this->input->post("image");
			$idgenre = $this->input->post("idgenre");
			$description = $this->input->post("description");
			$this->FilmModel->insert($titre,$notefilm,$durée,$datesortie,$image,$idgenre,$description);
			$data = array('films' => $this->FilmModel->getAllwithGenre(),'categories' => $this->CategorieModel->get_All());
			$this->load->view('back/films',$data);
		}
	  }
		function toModifierFilm(){
				$this->load->helper('url');
		   $this->load->model('FilmModel');
		   $this->load->model('CategorieModel');
		   $this->load->helper('url');
		   $id = $this->input->get("id");
			 $titre = $this->input->get("titre");
			 $notefilm = $this->input->get("note");
			 $durée = $this->input->get("duree");
			 $datesortie =str_replace("_","/", $this->input->get("date"));
			 
			 $image = $this->input->get("image");
			 $idgenre = $this->input->get("idgenre");
			  echo $datesortie;
			 
				 
			 $nom= $this->CategorieModel->get_byID($idgenre);
			 $description = str_replace("_"," ",$this->input->get("description"));
			
			 $this->load->Model("FilmModel");

		   $data = array('nom'=>$nom,'id'=>$id,'titre' =>$titre,'notefilm'=>$notefilm,'duree'=>$durée,'datesortie'=>$datesortie,'image'=>$image,'idgenre'=>$idgenre,'description'=>$description,'categories' => $this->CategorieModel->get_All());
		   $this->load->view('back/modifFilm',$data);
	   }
		function modifierFilm(){
				$this->load->helper('url');
		   $this->load->model('FilmModel');
		   $this->load->model('CategorieModel');
		   $this->load->helper('url');
		   $id = $this->input->post("id");
			 $titre = $this->input->post("titre");
			 $notefilm = $this->input->post("note");
			 $duree = $this->input->post("durée");
			 $datesortie = $this->input->post("date");
			 $idgenre = $this->input->post("idgenre");
			 $defaut = $this->input->post("defaut");
			 $description = $this->input->post("description");
			 $image=$this->input->post("upload");
			 //------------------uploat IMAGE--------------//
					 
				$config['upload_path'] = './assets/images';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '1024';
				$config['max_height'] = '768';
						  $this->load->library('upload', $config);
						  $this->upload->initialize($config); 
				if ( ! $this->upload->do_upload('upload'))
				{
					$error = array('error' => $this->upload->display_errors());
					
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$image= $_FILES['upload']['name'];
					
			
				}
				if($image==""){
						$image=$defaut;						
					}
				echo $image;
			//---------------------------------------------//	
		   $this->FilmModel-> update($id,$titre,$notefilm,$duree,$datesortie,$image,$idgenre,$description);
		   $data = array('films' => $this->FilmModel->getAllwithGenre(),'categories' => $this->CategorieModel->get_All());
		   $this->load->view('back/films',$data);
	    }
		 function supprimerFilm(){
			 	$this->load->helper('url');
		   $this->load->model('FilmModel');
		   $this->load->model('CategorieModel');
			 $this->load->helper('url');
			$id = $this->input->get("id");
		   $this->FilmModel->delete($id);
			 $data = array('films' => $this->FilmModel->getAllwithGenre(),'categories' => $this->CategorieModel->get_All());
			$this->load->view('back/films',$data);
	   }
		 function find(){
            $this->load->helper('url');
             $this->load->model('FilmModel');
             $this->load->model('CategorieModel');
             $req=$this->input->post('req');
             if(count(explode("%",$req))==1)
                $req="%".$req."%";
             $data=array('films' => $this->FilmModel->recherche($req),'categories' => $this->CategorieModel->get_All());
             $this->load->view('back/resultats',$data);
		}

		//----------------------------FONCTIONS POUR LES CATEGORIES----------------------------------///
		function ajouterCategorie() {
		 $this->load->helper('url');
		 $this->load->Model("CategorieModel");
		 $nom = $this->input->post("nom");
		 $this->CategorieModel->insert($nom);
		 $data = array('categories' => $this->CategorieModel->get_All());
		 $this->load->view('back/categories',$data);
		 }
		 function toModifierCategorie(){
			 $this->load->model('CategorieModel');
			 $this->load->helper('url');
			 $id = $this->input->get("id");
			 $nom = $this->input->get("nom");
		 	 $data = array('id'=>$id,'nom' =>$nom);
		 	 $this->load->view('back/modifCategorie',$data);
		  }
	 function modifierCategorie(){
			$this->load->model('CategorieModel');
			$this->load->helper('url');
			$id = $this->input->post("id");
			$nom = $this->input->post("nom");
			$this->CategorieModel->update($id,$nom);
			$data = array('categories' => $this->CategorieModel->get_All());
 		  $this->load->view('back/categories',$data);
		}
		function supprimerCategorie(){
			$this->load->model('CategorieModel');
			$this->load->helper('url');
			$id = $this->input->get("id");
			$this->CategorieModel->delete($id);
			$data = array('categories' => $this->CategorieModel->get_All());
 		  $this->load->view('back/categories',$data);
		}

		//----------------------------FONCTIONS POUR LES Clients----------------------------------///
		 function ajouterClient() {
		   $this->load->helper('url');
		   $this->load->library('encrypt');
			 $nom = $this->input->post("nom");
			 $login = $this->input->post("login");
			 $password = $this->input->post("password");
	 	 	 $this->load->Model("ClientModel");
			 $key = 'key';
			 $encrypted_string = $this->encrypt->encode($password, $key);
			
			 $this->ClientModel->insert($nom,$login,$encrypted_string);
			 $data = array('clients' => $this->ClientModel->get_All());
			 $this->load->view('back/clients',$data);
		 }

		function toModifierClient(){
			 $this->load->model('ClientModel');
			 $this->load->helper('url');
			 $id = $this->input->get("id");
			 $nom = $this->input->get("nom");
		 	 $data = array('id'=>$id,'nom' =>$nom);
		 	 $this->load->view('back/modifClient',$data);
		  }
		   function modifierClient(){
			$this->load->model('ClientModel');
			$this->load->helper('url');
			$id = $this->input->post("id");
			$nom = $this->input->post("nom");
			$this->ClientModel->update($id,$nom);
			$data = array('clients' => $this->ClientModel->get_All());
 		    $this->load->view('back/clients',$data);
		}
			function supprimerClient(){
				$this->load->model('ClientModel');
				$id = $this->input->get("id");
				$this->load->helper('url');
				$this->ClientModel->delete($id);
				$data = array('clients' => $this->ClientModel->get_All());
 			  $this->load->view('back/clients',$data);
			}
			//----------------------------FONCTIONS POUR LES RESERVATIONS----------------------------------///
			
				//----------------------------FONCTIONS POUR LES CALENDRIER----------------------------------///
				function ajouterCalendrier() {
					$this->load->helper('url');
					$this->load->Model("CalendrierModel");
					$prix = $this->input->post("prix");
					$idfilm = $this->input->post("idfilm");
					$date = $this->input->post("date");
					$heure = $this->input->post("heure");
					$this->CalendrierModel->insert($prix,$idfilm,$date,$heure);
					$this->load->Model("FilmModel");
					$data = array('calendrier' => $this->CalendrierModel->getAllwithTitre(),'films' => $this->FilmModel->getAllwithGenre());
					$this->load->view('back/calendrier',$data);
				}
				function toModifierCalendrier(){
						$this->load->helper('url');
					   $this->load->model('CalendrierModel');
					   $this->load->model('FilmModel');
					   $this->load->helper('url');
					   $id = $this->input->get("id");
						 $prix = $this->input->get("prix");
 					 $idfilm = $this->input->get("idfilm");
 					 $date = $this->input->get("date");
 					 $heure = $this->input->get("heure");
					 $heure = str_replace("_",":",$heure);
					 $cal= $this->CalendrierModel->getById($id);
				   $data = array('id'=>$id,'prix' =>$prix,'idfilm'=>$idfilm,'date'=>$date,'heure'=>$heure,'films' => $this->FilmModel->getAllwithGenre(),'cal'=>$cal);
				   $this->load->view('back/modifCalendrier',$data);
			   }
				function modfiCalendrier(){
						$this->load->helper('url');
				   $this->load->model('CalendrierModel');
				   $this->load->helper('url');
					 $id = $this->input->post("id");
					 $prix = $this->input->post("prix");
 					 $idfilm = $this->input->post("idfilm");
 					 $date = $this->input->post("date");
 					 $heure = $this->input->post("heure");
					 
					 
					 $this->load->Model("CalendrierModel");
				   $this->CalendrierModel-> update($id,$prix,$idfilm,$date,$heure);
				   $this->load->Model("FilmModel");
					$data = array('calendrier' => $this->CalendrierModel->getAllwithTitre(),'films' => $this->FilmModel->getAllwithGenre());
					$this->load->view('/back/calendrier',$data);
			   }
				 function supprimerCalendrier(){
				 	$this->load->helper('url');
					$this->load->model('CalendrierModel');
					$this->load->helper('url');
					$id = $this->input->get("id");
					$this->CalendrierModel->delete($id);
					$this->load->Model("FilmModel");
					$data = array('calendrier' => $this->CalendrierModel->getAllwithTitre(),'films' => $this->FilmModel->getAllwithGenre());
					$this->load->view('/back/calendrier',$data);
				   }
				 function findCalendrier(){
		            $this->load->helper('url');
		             $this->load->model('FilmModel');
		             $req=$this->input->post('req');
		             if(count(explode("%",$req))==1)
		                $req="%".$req."%";
		             $data=array('films' => $this->FilmModel->recherche($req));
		             $this->load->view('back/resultats',$data);
		    }
}
			
			



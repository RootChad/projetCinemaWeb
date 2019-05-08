<?php 
    class PageControl extends CI_Controller {

	public function __construct()
        {
             parent::__construct();
        }
    public function index() {  
			$this->load->helper('url');	 
		    $this->load->model("FilmModel");
			
			$data = array('films' => $this->FilmModel->get_All());
			
			$this->load->view('front/index.php',$data);
	}
    public function toAcceuil() {
            $this->load->helper('url');	 
		    $this->load->model("FilmModel");
			$data = array('films' => $this->FilmModel->get_All());
			$this->load->view('front/index.php',$data);
    }
	public function toFilm() {
            $this->load->helper('url');	 
		    $this->load->model("FilmModel");
			$this->load->model("CategorieModel");
			$data = array('films' => $this->FilmModel->getAllwithGenre(),'categories'=>$this->CategorieModel->get_All());
			$this->load->view('front/films.php',$data);
    }
	public function toCalendrier() {
            $this->load->helper('url');	 
		    $this->load->model("CalendrierModel");			
			$data = array(	'lundi' => $this->CalendrierModel->getAllBYJOUR("lundi"),
							'mardi' => $this->CalendrierModel->getAllBYJOUR("mardi"),
							'mercredi' => $this->CalendrierModel->getAllBYJOUR("mercredi"),
							'jeudi' => $this->CalendrierModel->getAllBYJOUR("jeudi"),
							'vendredi' => $this->CalendrierModel->getAllBYJOUR("vendredi"),
							'samedi' => $this->CalendrierModel->getAllBYJOUR("samedi")					
						);
			$this->load->view('front/calendrier.php',$data);
    }
	public function toFiche() {
            $this->load->helper('url');	 
		    $this->load->model("FilmModel");
			$id=$this->input->get('id');
			$data = array('film' => $this->FilmModel->get_byID($id));
			$this->load->view('front/fiche.php',$data);
    }
	public function toResultat() {
            $this->load->helper('url');	 
		    $this->load->model("FilmModel");
			$data = array('films' => $this->FilmModel->get_All());
			$this->load->view('front/index.php',$data);
    }
	 function find(){
             $this->load->helper('url');
             $this->load->model('FilmModel');
			 $this->load->model("CategorieModel");
             $req=$this->input->post('search');
             if(count(explode("%",$req))==1)
                $req="%".$req."%";
             $data=array('films' => $this->FilmModel->recherche($req),'categories'=>$this->CategorieModel->get_All());
             $this->load->view('front/resultats',$data);
    }
	public function connexion() {
		 $this->load->helper('url');
		$login = $this->input->post("login");
		$pass = $this->input->post("password");
		$key = 'key';
		$encrypted_string = $this->encrypt->encode($pass, $key);
		echo $encrypted_string;
		$this->load->model("ClientModel");
		$return = $this->ClientModel->authentification($login,$pass);
		$client['clients'] = $this->ClientModel->get_LP($login,$pass);
		$this->load->library('session');
        $this->session;
		foreach($client['clients'] as $row)
        {
			$this->session->set_userdata('id',$row['id']);
        }
		if($return == 1){
		
		$this->load->view('back/login');
		}
		else {
			redirect('', 'refresh');
	
		}
	}
	
	
	public function connexionAdmin() {
		 $this->load->helper('url');
		$login = $this->input->post("login");
		$pass = $this->input->post("Password");
		$this->load->model("AdminModel");
		$return = $this->AdminModel->authentification($login,$pass);
		$admin['admin'] = $this->AdminModel->get_LP($login,$pass);
				 
		if($return == 1){
		
		$newdata =null;
	
		$this->load->library('Layout');
		$this->layout->view('web/Test');
		}
		else {
			redirect('', 'refresh');
		
		}
	}
	function deconnexion(){
		
	
		 $this->load->helper('url');
		 	$this->load->library('session');
			
			//session_start();	
			$this->session->unset_userdata('id');
	//$this->load->library('Layout');
		//$this->load->view('web/index');
		redirect('', 'refresh');
	}

}
?>
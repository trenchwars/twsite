<?php
	class Squad extends TW_Controller {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			if($this->input->post('squad_name') != '') {
				$this->load->model('squads');

				if($squadId = $this->squads->getIdByName($this->input->post('squad_name'))) {
					redirect('squad/view/'.$squadId);
				} else {
					$this->session->set_flashdata('error_message', 'Could not locate squad by the name of "'.$this->input->post('squad_name').'"');
					redirect('squad/index');
				}
			}
				
			$this->load->view('include/header');
			$this->load->view('squad_index');
			$this->load->view('include/footer');
		}

		public function view($squadId) {
			$this->load->model('squads');

			if(!$squadData = $this->squads->findById($squadId)) {
				var_dump($squadData);
				die();
				$this->session->set_flashdata('error_message', 'Squad does not exist.');
				redirect('squad/index');
			}

			$this->load->view('include/header');
			$this->load->vieW('squad_view', array('squadData' => $squadData));
			$this->load->vieW('include/footer');
		}

		public function edit() {
		}
	}

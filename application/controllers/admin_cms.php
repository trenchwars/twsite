<?php
	class Admin_cms extends TW_Controller {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->load->model('cms_model');
			
			$items = $this->cms_model->getList();

			$this->load->view('include/header');
			$this->load->view('admin_css_index', array('items' => $items));
			$this->load->view('include/footer');
		}

		public function edit($item) {
			$this->load->model('cms_model');

			if($this->input->post('contents')) $this->cms_model->set($item, $this->input->post('contents'));

			$contents = $this->cms_model->get($item);

			$this->load->view('include/header');
			$this->load->view('admin_css_edit', array('contents' => $contents));
			$this->load->view('include/footer');
		}

		public function view() {
			$this->load->view('include/header');
			$this->load->view('admin_css_view');
			$this->load->view('include/footer');
		}
	}

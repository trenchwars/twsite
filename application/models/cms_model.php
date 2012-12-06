<?php
	class Cms_model extends TW_Model {
		public function __construct() {
			parent::__construct();
		}

		public function set($cmsName, $content) {
			file_put_contents(APPPATH.$this->config->item('static_cms_location').$cmsName.'.txt', $content);
		}

		public function get($cmsName) {
			return file_get_contents(APPPATH.$this->config->item('static_cms_location').$cmsName.'.txt');
		}

		public function getList() {
			$this->load->helper('directory');
			$files = directory_map(APPPATH.$this->config->item('static_cms_location'), 1);
			
			// remove index.html and file extensions from results
			foreach($files as $k=>$v) {
				if($v == 'index.html') unset($files[$k]); 
				else $files[$k] = str_replace('.txt','',$v);
			}

			return $files;
		}
	}

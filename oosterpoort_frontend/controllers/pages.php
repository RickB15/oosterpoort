<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Oosterpoort_Controller {
	public function view_public_page($page = 'default') {
		if( !file_exists(APPPATH.'views/public_pages/'.$page.'.php') ) {
			show_404();
		}
		if( $page === 'default' ) {
			$data['title'] = 'Oosterpoort | Groningen';
		} else {
			if( strpos($page, '_') !== false ) {
				$data['title'] = ucfirst( explode('_', $page)[0] ).' '.ucfirst( explode('_', $page)[1] ).' | Oosterpoort';
			} else {
				$data['title'] = ucfirst($page).' | Oosterpoort';
			}
		}
		$data['page'] = $page;
		$data['lang'] = 'nl';

		$this->load->view('template/skeleton', $data);
		$this->load->view('public_pages/'.$page, $data);
		$this->load->view('template/footer');
	}
	public function view_private_page($page = 'default') {
		if( !file_exists(APPPATH.'views/private_pages/'.$page.'.php') ) {
			show_404();
		}
		if( $page === 'default' ) {
			$data['title'] = 'Oosterpoort | Groningen';
		} else {
			if( strpos($page, '_') !== false ) {
				$data['title'] = ucfirst( explode('_', $page)[0] ).' '.ucfirst( explode('_', $page)[1] ).' | Oosterpoort';
			} else {
				$data['title'] = ucfirst($page).' | Oosterpoort';
			}
		}
		$data['page'] = $page;
		$data['lang'] = 'nl';
		$this->load->view('template/private_skeleton', $data);
		$this->load->view('private_pages/'.$page, $data);
		$this->load->view('template/private_footer');
	}
}
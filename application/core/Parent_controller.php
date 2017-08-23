<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parent_controller extends CI_Controller {

		public function __construct(){
			  parent::__construct();
				$this->data['judul'] = 'SISTEM APLIKASI IZIN DAN TUGAS BELAJAR KEMENTERIAN XXX';
				$this->load->helper('langit');
				/*
				session list - role access
				1.superadmin = all menu, all master
				2.ppic = request goods and view status
				3.adminproduksi = using goods and result goods
				4.purchasing = request goods for payment status
				5.supervisor = report using and result goods
				*/
		}



}

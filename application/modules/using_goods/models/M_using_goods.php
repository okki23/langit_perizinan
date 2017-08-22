<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_using_goods extends Parent_model {

	public function get_new($arrdata){
		$setting = new StdClass();

				foreach ($arrdata as $key => $column_order) {
						$setting->$column_order = '';
				}

				return $setting;
	}

	public function opt_goods(){
	 return	$this->db->get('m_goods')->result();
	}

	public function list_using_goods(){
		return $this->db->query('select a.*,b.nama_barang from t_using_goods a
		left join m_goods b on b.id = a.id_barang')->result();
	}

	public function update_when_save($datapos){
		return $this->db->query("update m_goods set qty = qty - $datapos[qty] where id = '$datapos[id_barang]' ");
	}

	public function update_when_update($datapos){
		return $this->db->query("update m_goods set qty = qty - $datapos[qty] where id = '$datapos[id_barang]' ");
	}

	public function update_when_delete($id,$qty){

		return $this->db->query("update m_goods set qty = qty + $qty
		where id = '$id' ");

	}


		public function get_no(){
			$query = $this->db->query("SELECT SUBSTR(MAX(kode_produksi),-7) AS id  FROM t_using_goods");
						//$query = $this->db->query("select max(personnel_id) as id from human_pa_md_emp_personal");

			return $query;
		}


}

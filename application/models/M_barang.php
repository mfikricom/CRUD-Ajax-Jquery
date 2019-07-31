<?php
class M_barang extends CI_Model{

	function barang_list(){
		$hasil=$this->db->query("SELECT * FROM tbl_barang");
		return $hasil->result();
	}

	function simpan_barang($kobar,$nabar,$harga){
		$hasil=$this->db->query("INSERT INTO tbl_barang (barang_kode,barang_nama,barang_harga)VALUES('$kobar','$nabar','$harga')");
		return $hasil;
	}

	function get_barang_by_kode($kobar){
		$hsl=$this->db->query("SELECT * FROM tbl_barang WHERE barang_kode='$kobar'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'barang_kode' => $data->barang_kode,
					'barang_nama' => $data->barang_nama,
					'barang_harga' => $data->barang_harga,
					);
			}
		}
		return $hasil;
	}

	function update_barang($kobar,$nabar,$harga){
		$hasil=$this->db->query("UPDATE tbl_barang SET barang_nama='$nabar',barang_harga='$harga' WHERE barang_kode='$kobar'");
		return $hasil;
	}

	function hapus_barang($kobar){
		$hasil=$this->db->query("DELETE FROM tbl_barang WHERE barang_kode='$kobar'");
		return $hasil;
	}
	
}
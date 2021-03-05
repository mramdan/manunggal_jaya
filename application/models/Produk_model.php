<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    var $table = 'ref_produk';

    public function get_list_produk()
    {
        $this->db->start_cache();
        $this->db->from($this->table);
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->result();
    }

    public function save($data)
    {
        // var_dump($data);
        $r = $this->db->insert($this->table, $data);

        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Berhasil Simpan Data';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Gagal Simpan Data';
        }
        return $res;
    }

    public function delete_by_id($id)
    {
        $q = $this->db->query("select foto from $this->table where id_produk = $id")->row();
        $foto = $q->foto;

        // var_dump($foto);
        $path = 'assets/uploads/produk/';
        //hapus file
        if (file_exists($path . $foto)) {
            unlink($path . $foto);
        }
        $this->db->where('id_produk', $id);
        $r = $this->db->delete($this->table);

        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Berhasil Hapus Data';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Gagal Hapus Data';
        }
        return json_encode($res);
    }

    public function get_by_id($id)
    {
        $this->db->start_cache();
        $this->db->from($this->table);
        $this->db->where('id_produk', $id);
        $this->db->stop_cache();
        $query = $this->db->get();
        $this->db->flush_cache();
        return $query->row();
    }

    public function update($where, $data)
    {
        $r = $this->db->update($this->table, $data, $where);
        if ($r) {
            $res['status'] = '00';
            $res['type'] = 'success';
            $res['mess'] = 'Berhasil Update Data';
        } else {
            $res['status'] = '01';
            $res['type'] = 'warning';
            $res['mess'] = 'Gagal Update Data';
        }
        return $res;
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Asurat extends CI_Model
{
    public function getAllSurat()
    {
        
        $query =   "SELECT *
                    FROM `surat`
                    ORDER BY `created_at` DESC ";

        return $this->db->query($query)->result_array();
    }

    public function getJenisSurat($id)
    {

        $query =   "SELECT `surat`.`id`, `surat`.`judul_surat`, `surat`.`nomor`, `surat`.`created_at`,`surat`.`jenis`, `surat`.`user`, `jenis_surat`.`judul`, `jenis_surat`.`header`,`jenis_surat`.`footer`
                    FROM `surat` JOIN `jenis_surat`
                    ON `surat`.`jenis` = `jenis_surat`.`id`
                    WHERE `surat`.`id` = ".$id."";

        return $this->db->query($query)->result_array();
    }
}
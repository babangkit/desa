<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Aanggaran extends CI_Model
{
    public function getAllVariabel()
    {

        $query =   "SELECT *
                    FROM `a_variabel`
                    WHERE id_variabel!='0' && id_variabel!='1'
                    ORDER BY `date_created` DESC ";

        return $this->db->query($query)->result_array();
    }


    public function getAnggaran($id)
    {

        $query =   "SELECT *
                    FROM `a_variabel` 
                    WHERE `id_variabel` = " . $id . "";

        return $this->db->query($query)->result_array();
    }


    public function getPoin()
    {

        $query =   "SELECT *
                    FROM  `a_poin`
                    ORDER BY `id` DESC";

        return $this->db->query($query)->result_array();
    }

    public function totalPoin()
    {

        $query =   "SELECT *
                    FROM  `a_poin`";

        return $this->db->query($query)->result_array();
    }

    public function totalAspirasiUnix()
    {

        $query =   "SELECT DISTINCT *
                    FROM  `a_poin`";

        return $this->db->query($query)->result_array();
    }

    public function getTotalPoin()
    {
        $query =   "SELECT `a_variabel`.`nama`, `a_variabel`.`keterangan`, `a_poin`.`id_variabel`,
                    COUNT(IF( `a_poin`.`id_variabel` = `a_poin`.`id_variabel`, `a_poin`.`id_variabel`, NULL)) AS total_variabel, 
                    SUM(`a_poin`.`jumlah`) / COUNT(IF( `a_poin`.`id_variabel` = `a_poin`.`id_variabel`, `a_poin`.`id_variabel`, NULL)) AS jumlah
                    FROM `a_poin` LEFT JOIN `a_variabel` USING(`id_variabel`)
                    GROUP BY `id_variabel`
                    ORDER BY `jumlah` DESC                    
                    ";

        return $this->db->query($query)->result_array();
    }

    public function voting()
    {

        $query =   "SELECT `a_variabel`.`nama`,
                    COUNT(IF( `a_poin`.`id_variabel` = `a_poin`.`id_variabel`, `a_poin`.`id_variabel`, NULL)) AS total_variabel, 
                    SUM(`a_poin`.`jumlah`) / COUNT(IF( `a_poin`.`id_variabel` = `a_poin`.`id_variabel`, `a_poin`.`id_variabel`, NULL)) AS jumlah
                    FROM `a_poin`
                    JOIN `a_variabel` USING(`id_variabel`)
                    WHERE `keterangan` = 1
                    GROUP BY `id_variabel`";

        return $this->db->query($query)->result_array();
    }

    public function totalVoting()
    {

        $query =   "SELECT `a_variabel`.`nama`, `a_voting`.`id_variabel`, `a_voting`.`user`, 
                    COUNT(IF( `a_voting`.`setuju` = 1 , `a_voting`.`setuju`, NULL)) AS total_setuju,
                    COUNT(IF( `a_voting`.`tidak` = 1 , `a_voting`.`tidak`, NULL)) total_tidak
                    FROM `a_voting`
                    JOIN `a_variabel` USING(`id_variabel`)
                    WHERE `a_variabel`.`keterangan` = 1
                    GROUP BY `id_variabel`";

        return $this->db->query($query)->result_array();
    }

    public function jumlahvariabel()
    {
        $query =   "SELECT COUNT(id_variabel) AS total_id FROM `a_variabel`";

        return $this->db->query($query)->result_array();
    }

    public function jumlahpengajuan()
    {
        $query =   "SELECT COUNT(ID) AS total FROM `a_aspirasi`";

        return $this->db->query($query)->result_array();
    }

    public function menu()
    {
        $query =   "SELECT * FROM `menu`";

        return $this->db->query($query)->result_array();
    }

    public function totalketerangan()
    {
        $query =   "SELECT ID as total FROM `a_voting` ORDER BY id DESC LIMIT 1";


        return $this->db->query($query)->result_array();
    }

    public function sstabel()
    {
        $query =   "SELECT `nama`, `id_variabel`, keterangan
                    FROM `a_variabel`
                    WHERE `keterangan` = 1
                    GROUP BY `id_variabel`";

        return $this->db->query($query)->result_array();
    }
}

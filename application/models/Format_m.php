<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Format_m
 *
 * @author Lenovo
 */
class Format_m extends CI_Model{
    function bulan($tgl) {
        $bulan = substr($tgl, 5, 2);
        Switch ($bulan) {
            case 1 : $bulan = "Januari";
                Break;
            case 2 : $bulan = "Februari";
                Break;
            case 3 : $bulan = "Maret";
                Break;
            case 4 : $bulan = "April";
                Break;
            case 5 : $bulan = "Mei";
                Break;
            case 6 : $bulan = "Juni";
                Break;
            case 7 : $bulan = "Juli";
                Break;
            case 8 : $bulan = "Agustus";
                Break;
            case 9 : $bulan = "September";
                Break;
            case 10 : $bulan = "Oktober";
                Break;
            case 11 : $bulan = "November";
                Break;
            case 12 : $bulan = "Desember";
                Break;
        }
        return $bulan;
    }

    function tgl($tgl) {
        $hari = substr($tgl, 8, 2);
        $tahun = substr($tgl, 0, 4);
        $nama_bulan = $this->bulan($tgl);
        $tgl_oke = $hari . ' ' . $nama_bulan . ' ' . $tahun;
        return $tgl_oke;
    }
    
    function jam($jam) {
        $wkt = substr($jam, 11, 9);
        return 'pukul : ' . $wkt . ' WIB';
        //pukulnya dapat diganti
    }
}

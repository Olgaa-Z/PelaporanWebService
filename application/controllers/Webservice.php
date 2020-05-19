<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Webservice
 *
 * @author Lenovo
 */
class Webservice extends CI_Controller{

     //WEBSERVICE BERITA
    function select_berita() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Berita_m->select_berita();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_berita'] = $value->id_berita;
                $response['judul'] = $value->judul;
                $response['kategori'] = $value->kategori;
                $response['isi'] = $value->isi;
                $response['gambar'] = $value->gambar;
                $response['tanggal'] = $this->Format_m->tgl($value->tanggal).",".$this->Format_m->jam($value->tanggal);
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_berita($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Berita_m->select_berita_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_berita'] = $value->id_berita;
                $response['judul'] = $value->judul;
                $response['kategori'] = $value->kategori;
                $response['isi'] = $value->isi;
                $response['gambar'] = $value->gambar;
                $response['tanggal'] = $this->Format_m->tgl($value->tanggal).",".$this->Format_m->jam($value->tanggal);
                
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

// CATEGORY

    function select_category() {
        //menampilkan semua data dari tabel category
        $response = array();
        $data['data'] = array();

        $result = $this->Category_m->select_db();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['category_id'] = $value->category_id;
                $response['category_name'] = $value->category_name;
                $response['category_description'] = $value->category_description;
                $response['category_image'] = $value->category_image;
                array_push($data['data'], $response);
            }
 
            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_category($id) {
        //menampilkan data dari tabel category berdasarkan category_id
        //id_category dapat dari get

        $response = array();
        $data['data'] = array();

        $result = $this->Category_m->select_category_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['category_id'] = $value->category_id;
                $response['category_name'] = $value->category_name;
                $response['category_description'] = $value->category_description;
                $response['category_image'] = $value->category_image;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }



    // PRODUCT

    function select_product() {
        //menampilkan semua data dari tabel category
        $response = array();
        $data['data'] = array();

        $result = $this->Product_m->select_db();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['product_id'] = $value->product_id;
                $response['product_name'] = $value->product_name;
                $response['product_description'] = $value->product_description;
                $response['product_stock'] = $value->product_stock;
                $response['product_price'] = $value->product_price;
                $response['product_image'] = $value->product_image;
                $response['category_id'] = $value->category_id;
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }


    function select_by_get_product($id) {
        //menampilkan data dari tabel category berdasarkan category_id
        //id_category dapat dari get

        $response = array();
        $data['data'] = array();

        $result = $this->Product_m->select_product_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['product_id'] = $value->product_id;
                $response['product_name'] = $value->product_name;
                $response['product_description'] = $value->product_description;
                $response['product_stock'] = $value->product_stock;
                $response['product_price'] = $value->product_price;
                $response['product_image'] = $value->product_image;
                $response['category_id'] = $value->category_id;

                array_push($data['data'], $response );
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }


    // HELP

    function select_help() {
        //menampilkan semua data dari tabel category
        $response = array();
        $data['data'] = array();

        $result = $this->Help_m->select_db();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['help_id'] = $value->help_id;
                $response['help_name'] = $value->help_name;
                $response['help_description'] = $value->help_description;
                $response['help_image'] = $value->help_image;
                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_by_get_help($id) {
        //menampilkan data dari tabel category berdasarkan category_id
        //id_category dapat dari get

        $response = array();
        $data['data'] = array();

        $result = $this->Help_m->select_help_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['help_id'] = $value->help_id;
                $response['help_name'] = $value->help_name;
                $response['help_description'] = $value->help_description;
                $response['help_image'] = $value->help_image;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';



            die(json_encode($response));
        $idProduk = $this->input->post('id_produk');
        $quantity = $this->input->post('quantity');
        $userId = $this->input->post('id_user');
        //prepare data for insert
        }
    function select_addtocart(){
    }
        $data = [
            'user_id' => $userId,
            'product_id' => $idProduk,
            'quantity' => $quantity
        ];

        //insert process
        //call the function from model
        
        if($this->Cart_m->insert_db($data)){
            echo json_encode(['status'=> '0', 'response' => 'Produk berhasil ditambahkan']);
        }else{
            echo json_encode(['status'=> '1', 'response' => 'Produk gagal ditambahkan']);
        }


    }



    


}

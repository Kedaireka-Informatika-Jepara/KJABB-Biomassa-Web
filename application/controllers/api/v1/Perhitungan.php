<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH  . 'core/Api_Controller.php';

class Perhitungan extends Api_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("Perhitungan_model");
    }

    private function sendResponse($status, $message, $input_data, $response_code)
    {
        $data['status'] = $status;

        $data['message'] = $message;

        $data['data'] = $input_data;

        $this->response($data, $response_code);
    }

    public function index_get()
    {
        $biota_id = $this->get('biota_id');

        $user_id = $this->get('user_id');

        if ($user_id === null) {
            $this->sendResponse(false, "User Id Tidak Tersedia", [], self::HTTP_BAD_REQUEST);
        }

        if ($biota_id === null) {
            $this->sendResponse(false, "Biota Id Tidak Tersedia", [], self::HTTP_BAD_REQUEST);
        } else {
            $perhitungan = $this->Perhitungan_model->getPerhitungan($biota_id);

            $this->sendResponse(true, "", $perhitungan, self::HTTP_OK);
        }
    }


    public function index_delete()
    {
        $perhitungan_id = $this->delete('perhitungan_id');

        $user_id = $this->delete('user_id');

        if ($user_id === null) {
            $this->sendResponse(false, "User Id Tidak Tersedia", [], self::HTTP_BAD_REQUEST);
        }

        if ($perhitungan_id === null) {
            $this->sendResponse(false, "Biota Id Tidak Tersedia", [], self::HTTP_BAD_REQUEST);
        } else {
            if ($this->Perhitungan_model->deletePerhitungan($perhitungan_id) > 0) {

                $this->sendResponse(true, "Data Berhasil Dihapus", [], self::HTTP_OK);
            } else {
                $this->sendResponse(false, "Perhitungan Id Tidak Ditemukan", [], self::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $input['hidup'] = $this->post('hidup');

        $input['mati'] = $this->post('mati');

        $input['tanggal_hitung'] = $this->post('tanggal_hitung');

        $input['biota_id'] = $this->post('biota_id');

        $input['user_id'] = $this->post('user_id');

        if ($this->post('user_id') === null) {
            $this->sendResponse(false, "User Id Tidak Tersedia", [], self::HTTP_BAD_REQUEST);
        }

        try {
            if ($this->Perhitungan_model->createPerhitungan($input) > 0) {
                $this->sendResponse(true, "Data Berhasil Ditambahkan", [], self::HTTP_CREATED);
            } else {
                $this->sendResponse(false, "Data Gagal Ditambahkan", [], self::HTTP_BAD_REQUEST);
            }
        } catch (Exception $e) {
            $this->sendResponse(false, $e->getMessage(), [], self::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $perhitungan_id = $this->put('perhitungan_id');

        $input['hidup'] = $this->put('hidup');

        $input['mati'] = $this->put('mati');

        $input['tanggal_hitung'] = $this->put('tanggal_hitung');

        $input['biota_id'] = $this->put('biota_id');

        $input['user_id'] = $this->put('user_id');

        if ($this->put('user_id') === null) {
            $this->sendResponse(false, "User Id Tidak Tersedia", [], self::HTTP_BAD_REQUEST);
        }

        try {
            if ($this->Perhitungan_model->updatePerhitungan($perhitungan_id, $input) > 0) {
                $this->sendResponse(true, "Data Berhasil Diubah", [], self::HTTP_OK);
            } else {
                $this->sendResponse(false, "Tidak Ada Perubahan Data", [], self::HTTP_BAD_REQUEST);
            }
        } catch (Exception $e) {
            $this->sendResponse(false, $e->getMessage(), [], self::HTTP_BAD_REQUEST);
        }
    }
}

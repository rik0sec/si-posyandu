<?php

namespace App\Models;

use CodeIgniter\Model;

class M_balita extends Model
{
    protected $table = "balita";
    protected $primaryKey = "id_balita";
    protected $orderBy = "nama_balita";
    protected $orderByType = "ASC";

    protected $dbs;

    public function __construct()
    {
        parent::__construct();

        $this->dbs = \Config\Database::connect();
        $this->dbs = $this->dbs->table($this->table);
    }

    // Menampilkan semua data
    public function list_all()
    {
        $this->dbs->orderBy($this->orderBy, $this->orderByType);

        $query = $this->dbs->get();

        return $query->getResult();
    }

    // Tambah data
    public function add($data)
    {
        if ($this->dbs->insert($data)) {
            return "success";
        } else {
            return "failed";
        }
    }

    // Ambil satu data
    public function getData($idBalita)
    {
        $db = db_connect();

        $query = $db->query("
            SELECT *
            FROM balita
            WHERE id_balita='$idBalita'
        ");

        return $query->getRow();
    }

    // Update data
    public function updateData(
        $idBalita,
        $nik,
        $namaBalita,
        $jk,
        $tglLahir,
        $namaIbu,
        $namaAyah,
        $alamat,
        $noHp
    ) {

        $message = "";

        $db = db_connect();

        try {

            if (!$db->simpleQuery("
                UPDATE balita
                SET
                    nik='$nik',
                    nama_balita='$namaBalita',
                    jenis_kelamin='$jk',
                    tanggal_lahir='$tglLahir',
                    nama_ibu='$namaIbu',
                    nama_ayah='$namaAyah',
                    alamat='$alamat',
                    no_hp='$noHp'
                WHERE id_balita='$idBalita'
            ")) {

                $message = $db->error();

            } else {

                $message = "success";

            }

        } catch (\Exception $e) {

            $message = $e->getMessage();

        }

        return $message;
    }

    // Hapus data
    public function deleteData($idBalita)
    {
        $message = "";

        $db = db_connect();

        try {

            if (!$db->simpleQuery("
                DELETE FROM balita
                WHERE id_balita='$idBalita'
            ")) {

                $message = $db->error();

            } else {

                $message = "success";

            }

        } catch (\Exception $e) {

            $message = $e->getMessage();

        }

        return $message;
    }
}
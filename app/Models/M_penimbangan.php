<?php

namespace App\Models;

use CodeIgniter\Model;

class M_penimbangan extends Model
{
    protected $table = "penimbangan";
    protected $primaryKey = "id_penimbangan";
    protected $orderBy = "tanggal";
    protected $orderByType = "DESC";

    protected $dbs;

    public function __construct()
    {
        parent::__construct();

        $this->dbs = \Config\Database::connect();
        $this->dbs = $this->dbs->table($this->table);
    }

    public function list_all()
    {
        $db = db_connect();

        $query = $db->query("
            SELECT
                p.*,
                b.nama_balita,
                pt.nama_petugas,
                i.nama_imunisasi
            FROM penimbangan p
            JOIN balita b
                ON p.id_balita=b.id_balita
            JOIN petugas pt
                ON p.id_petugas=pt.id_petugas
            LEFT JOIN imunisasi i
                ON p.id_imunisasi=i.id_imunisasi
            ORDER BY p.tanggal DESC
        ");

        return $query->getResult();
    }

    public function add($data)
    {
        if($this->dbs->insert($data)){
            return "success";
        }else{
            return "failed";
        }
    }

    public function getData($id)
    {
        $db = db_connect();

        $query = $db->query("
            SELECT *
            FROM penimbangan
            WHERE id_penimbangan='$id'
        ");

        return $query->getRow();
    }

    public function updateData(
        $id,
        $id_balita,
        $id_petugas,
        $id_imunisasi,
        $tanggal,
        $umur,
        $bb,
        $tb,
        $lk,
        $status,
        $catatan
    ){

        $db=db_connect();

        $message="";

        try{

            if(!$db->simpleQuery("

                UPDATE penimbangan SET

                id_balita='$id_balita',

                id_petugas='$id_petugas',

                id_imunisasi='$id_imunisasi',

                tanggal='$tanggal',

                umur_bulan='$umur',

                berat_badan='$bb',

                tinggi_badan='$tb',

                lingkar_kepala='$lk',

                status_gizi='$status',

                catatan='$catatan'

                WHERE id_penimbangan='$id'

            ")){

                $message=$db->error();

            }else{

                $message="success";

            }

        }catch(\Exception $e){

            $message=$e->getMessage();

        }

        return $message;

    }

    public function deleteData($id)
    {

        $db=db_connect();

        $message="";

        try{

            if(!$db->simpleQuery("

                DELETE FROM penimbangan

                WHERE id_penimbangan='$id'

            ")){

                $message=$db->error();

            }else{

                $message="success";

            }

        }catch(\Exception $e){

            $message=$e->getMessage();

        }

        return $message;

    }

    public function laporan()
{
    return $this->db->table('penimbangan p')
        ->select('p.*, b.nama_balita, i.nama_imunisasi, pt.nama_petugas')
        ->join('balita b', 'b.id_balita = p.id_balita')
        ->join('imunisasi i', 'i.id_imunisasi = p.id_imunisasi', 'left')
        ->join('petugas pt', 'pt.id_petugas = p.id_petugas')
        ->orderBy('p.tanggal', 'DESC')
        ->get()
        ->getResultArray();
}

}
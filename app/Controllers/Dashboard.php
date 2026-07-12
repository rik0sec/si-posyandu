<?php
namespace App\Controllers;
use App\Models\M_balita;
use App\Models\M_petugas;
use App\Models\M_imunisasi;
use App\Models\M_penimbangan;
class Dashboard extends BaseController
{
protected $balitaModel;
protected $petugasModel;
protected $imunisasiModel;
protected $penimbanganModel;
public function __construct()
    {
$this->balitaModel = new M_balita();
$this->petugasModel = new M_petugas();
$this->imunisasiModel = new M_imunisasi();
$this->penimbanganModel = new M_penimbangan();
    }
public function index()
    {
$semuaPenimbangan = $this->penimbanganModel->list_all();

$data = [
'title'                 => 'Dashboard Posyandu',
'jumlah_balita'      => count($this->balitaModel->list_all()),
'jumlah_petugas'     => count($this->petugasModel->list_all()),
'jumlah_imunisasi'   => count($this->imunisasiModel->list_all()),
'jumlah_penimbangan' => count($semuaPenimbangan),
'penimbangan_terbaru' => array_slice($semuaPenimbangan, 0, 5),
'chart_penimbangan'   => $this->olahDataChart($semuaPenimbangan),
        ];
return view('dashboard/index', $data);
    }

    /**
     * Mengolah data penimbangan menjadi rata-rata BB & TB per bulan
     * untuk ditampilkan sebagai grafik tren di dashboard.
     */
    private function olahDataChart(array $data): array
    {
        $grup = [];

        foreach ($data as $row) {
            if (empty($row->tanggal)) {
                continue;
            }

            $bulanKey = date('Y-m', strtotime($row->tanggal));

            if (!isset($grup[$bulanKey])) {
                $grup[$bulanKey] = ['bb' => [], 'tb' => []];
            }

            $grup[$bulanKey]['bb'][] = (float) $row->berat_badan;
            $grup[$bulanKey]['tb'][] = (float) $row->tinggi_badan;
        }

        ksort($grup);

        // Ambil 6 bulan terakhir yang ada datanya
        $grup = array_slice($grup, -6, 6, true);

        $labels = [];
        $rataBB = [];
        $rataTB = [];

        $namaBulan = [
            '01' => 'Jan', '02' => 'Feb', '03' => 'Mar', '04' => 'Apr',
            '05' => 'Mei', '06' => 'Jun', '07' => 'Jul', '08' => 'Agu',
            '09' => 'Sep', '10' => 'Okt', '11' => 'Nov', '12' => 'Des',
        ];

        foreach ($grup as $bulanKey => $isi) {
            [$tahun, $bulan] = explode('-', $bulanKey);
            $labels[] = $namaBulan[$bulan] . ' ' . $tahun;
            $rataBB[]  = round(array_sum($isi['bb']) / count($isi['bb']), 2);
            $rataTB[]  = round(array_sum($isi['tb']) / count($isi['tb']), 2);
        }

        return [
            'labels' => $labels,
            'bb'     => $rataBB,
            'tb'     => $rataTB,
        ];
    }
}
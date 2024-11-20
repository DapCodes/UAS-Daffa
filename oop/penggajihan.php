<?php
class Penggajihan
{
    public $gaji;
    public $bonus;
    public $potongan;
    public $gajiBersih;

    public function gaji($jabatan)
    {
        if ($jabatan == "Kepala Sekolah") {
            $this->gaji = 10000000;
        } elseif ($jabatan == "Wakasek") {
            $this->gaji = 7000000;
        } elseif ($jabatan == "Guru") {
            $this->gaji = 5000000;
        } elseif ($jabatan == "Karyawan") {
            $this->gaji = 2500000;
        } else {
            $this->gaji = 0;
        }

        return $this->gaji;
    }

    public function bonus($statusKerja)
    {
        if ($statusKerja == "Tetap") {
            $this->bonus = 1000000;
        } elseif ($statusKerja == "Kontrak") {
            $this->bonus = 0;
        } else {
            $this->bonus = 0;
        }

        return $this->bonus;
    }

    public function potongan($bpjs, $cicilan, $pinjaman, $infaq)
    {
        $this->potongan = $bpjs + $cicilan + $pinjaman + $infaq;
        return $this->potongan;
    }

    public function gajiBersih()
    {
        $this->gajiBersih = $this->gaji + $this->bonus - $this->potongan;
        return $this->gajiBersih;
    }
}
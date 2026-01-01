<?php

namespace App\Imports;

use App\Models\Umkm;
use App\Models\Kategori;
use App\Models\Daerah;
use App\Models\Sektor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterImport;

class UmkmImport implements ToModel, WithHeadingRow, WithEvents
{
    public int $successCount = 0;
    public int $failedCount  = 0;

    public function model(array $row)
    {
        try {
            // Trim semua string
            $row = array_map(fn ($v) => is_string($v) ? trim($v) : $v, $row);

            // ==============================
            // DEFAULT RELASI (WAJIB ADA)
            // ==============================
            $kategori = Kategori::firstOrCreate(['nama' => 'Umum']);
            $daerah   = Daerah::firstOrCreate(['nama' => 'Tidak diketahui']);
            $sektor   = Sektor::firstOrCreate(['nama' => 'Lainnya']);

            // ==============================
            // VALIDASI ENUM (ANTI ERROR)
            // ==============================
            $jenisKelamin = in_array($row['jenis_kelamin'] ?? null, ['laki-laki', 'perempuan'])
                ? $row['jenis_kelamin']
                : null;

            $usia = in_array($row['usia'] ?? null, ['<20', '20-29', '30-39', '40-49', '>50'])
                ? $row['usia']
                : null;

            $pendidikan = in_array($row['pendidikan_terakhir'] ?? null, ['SD/SMP', 'SMA/SMK', 'Diploma', 'S1', 'S2/S3'])
                ? $row['pendidikan_terakhir']
                : null;

            $statusLokasi = in_array($row['status_lokasi'] ?? null, ['Milik', 'Sewa'])
                ? $row['status_lokasi']
                : null;

            $sumberModal = in_array($row['sumber_modal'] ?? null, [
                'modal pribadi',
                'pinjaman keluarga',
                'bank',
                'koperasi/leasing',
                'program pemerintah/lainnya'
            ]) ? $row['sumber_modal'] : null;

            $metodePemasaran = in_array($row['metode_pemasaran'] ?? null, ['offline', 'online', 'offline&online'])
                ? $row['metode_pemasaran']
                : null;

            $this->successCount++;

            return new Umkm([
                'nama'                   => $row['nama_umkm'],
                'pemilik'                => $row['pemilik'] ?? null,
                'jenis_kelamin'          => $jenisKelamin,
                'usia'                   => $usia,
                'pendidikan_terakhir'    => $pendidikan,
                'tahun_berdiri'          => isset($row['tahun_berdiri']) ? (int) $row['tahun_berdiri'] : null,
                'status_lokasi'          => $statusLokasi,
                'sumber_modal'           => $sumberModal,
                'metode_pemasaran'       => $metodePemasaran,
                'hambatan_pemasaran'     => $row['hambatan_pemasaran'] ?? null,
                'kebutuhan_pengembangan' => $row['kebutuhan_pengembangan'] ?? null,
                'alamat'                 => $row['alamat'] ?? null,
                'no_telp'                => $row['no_telepon'] ?? null,
                'jumlah_karyawan'        => isset($row['jumlah_karyawan']) ? (int) $row['jumlah_karyawan'] : null,

                'kategori_id' => $kategori->id,
                'daerah_id'   => $daerah->id,
                'sektor_id'   => $sektor->id,
            ]);
        } catch (\Throwable $e) {
            $this->failedCount++;

            \Log::error('Gagal import UMKM', [
                'row'   => $row,
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }

    public function registerEvents(): array
    {
        return [
            AfterImport::class => function () {
                session()->flash(
                    'success',
                    "Import selesai. Berhasil: {$this->successCount} data, Gagal: {$this->failedCount} data."
                );
            },
        ];
    }
}

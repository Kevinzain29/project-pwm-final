<?php

namespace App\Exports;

use App\Models\Umkm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UmkmExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Umkm::with(['kategori', 'daerah', 'sektor'])->get();
    }

    public function headings(): array
    {
        return [
            'Nama UMKM',
            'Pemilik',
            'Jenis Kelamin',
            'Usia',
            'Pendidikan Terakhir',
            'Tahun Berdiri',
            'Status Lokasi',
            'Sumber Modal',
            'Metode Pemasaran',
            'Hambatan Pemasaran',
            'Kebutuhan Pengembangan',
            'Alamat',
            'No Telepon',
            'Jumlah Karyawan',
            'Kategori',
            'Daerah',
            'Sektor',
        ];
    }

    public function map($umkm): array
    {
        return [
            $umkm->nama,
            $umkm->pemilik,
            $umkm->jenis_kelamin,
            $umkm->usia,
            $umkm->pendidikan_terakhir,
            $umkm->tahun_berdiri,
            $umkm->status_lokasi,
            $umkm->sumber_modal,
            $umkm->metode_pemasaran,
            $umkm->hambatan_pemasaran,
            $umkm->kebutuhan_pengembangan,
            $umkm->alamat,
            $umkm->no_telp,
            $umkm->jumlah_karyawan,
            $umkm->kategori?->nama,
            $umkm->daerah?->nama,
            $umkm->sektor?->nama,
        ];
    }
}

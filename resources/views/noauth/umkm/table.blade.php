{{-- resources/views/noauth/umkm/_table.blade.php --}}
<div id="umkmTable">
    {{-- Menambahkan pembungkus responsive di sini --}}
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th class="text-nowrap">No</th>
                    <th class="text-nowrap">Nama UMKM</th>
                    <th class="text-nowrap">Daerah</th>
                    <th class="text-nowrap">Sektor</th>
                    <th class="text-nowrap">Kategori</th>
                </tr>
            </thead>
            <tbody>
                @forelse($umkms as $umkm)
                    <tr>
                        <td>{{ $umkm->id }}</td>
                        <td class="text-nowrap">{{ $umkm->nama }}</td>
                        <td class="text-nowrap">{{ $umkm->daerah->nama ?? '-' }}</td>
                        <td class="text-nowrap">{{ $umkm->sektor->nama ?? '-' }}</td>
                        <td class="text-nowrap">{{ $umkm->kategori->nama ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">Tidak ada data UMKM</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $umkms->withQueryString()->links('layouts.pagination') }}
    </div>
</div>
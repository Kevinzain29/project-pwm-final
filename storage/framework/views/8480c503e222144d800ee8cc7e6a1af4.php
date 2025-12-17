<?php $__env->startSection('title', 'Statistik Data UMKM'); ?>

<?php $__env->startSection('content'); ?>
<style>
    /* PALET WARNA BARU */
    :root {
        --color-primary: #007bff; /* Biru Primer yang lebih cerah/modern */
        --color-secondary: #6c757d; /* Abu-abu sekunder */
        --color-accent: #ffc107; /* Kuning/Orange untuk Aksen */
        --color-background: #f8f9fa; /* Latar belakang halaman yang lebih netral */
        --color-card-bg: #ffffff; /* Latar belakang kartu */
        --shadow-light: 0 4px 12px rgba(0, 0, 0, 0.08); /* Bayangan lebih halus */
        --shadow-hover: 0 6px 16px rgba(0, 0, 0, 0.15);
    }
        
    /* Ganti Latar Belakang Body */
    body {
        background: linear-gradient(to right, #1d4ed8, #1e3a8a);
        /* Ganti gradasi biru dengan warna latar netral agar konten lebih menonjol */
    }

    /* Judul Utama */
    .section-title {
        text-align: center;
        color: var(--color-primary); /* Ubah ke warna primer */
        font-weight: 700;
        margin-bottom: 40px;
        font-size: 36px;
        padding-bottom: 10px;
        border-bottom: 3px solid var(--color-accent); /* Tambahkan garis bawah aksen */
        display: inline-block;
        width: auto;
        margin-left: auto;
        margin-right: auto;
    }

    /* Kartu Statistik (Stat Card) */
    .stat-card {
        background: var(--color-card-bg);
        border-radius: 12px;
        padding: 30px 20px;
        text-align: center;
        box-shadow: var(--shadow-light);
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        transition: all 0.3s ease;
        border-left: 5px solid var(--color-primary); /* Aksen garis samping */
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-hover);
    }

    .stat-card p {
        margin-bottom: 5px;
        color: var(--color-secondary);
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .stat-number {
        font-size: 42px; /* Lebih besar */
        font-weight: 800;
        color: var(--color-primary);
        margin: 0;
    }

    /* Kartu Chart (Chart Card) */
    .chart-card {
        background: var(--color-card-bg);
        border-radius: 12px;
        padding: 20px;
        box-shadow: var(--shadow-light);
        height: 100%;
        display: flex;
        flex-direction: column;
        margin-bottom: 1.5rem;
        border: 1px solid #e9ecef; /* Border tipis */
    }

    .chart-card h6 {
        color: #333;
        font-weight: 700;
        text-align: center;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
        margin-bottom: 15px;
    }
    
    /* Header Chart Utama */
    .card-header-main {
        background: var(--color-primary) !important;
        color: white;
        border-radius: 10px 10px 0 0 !important; /* Gunakan border radius yang konsisten */
        padding: 10px 15px !important;
        margin-bottom: 0.5rem !important;
    }
    
    /* Style untuk tombol filter bulan */
    .bulan-btn.active {
        background-color: var(--color-accent) !important;
        color: var(--color-primary) !important;
        border-color: var(--color-accent) !important;
        font-weight: bold;
    }
    .bulan-btn {
        transition: background-color 0.2s ease, transform 0.1s ease;
        border-radius: 20px;
        color: var(--color-primary);
        border-color: var(--color-primary);
    }
    .bulan-btn:hover {
        background-color: var(--color-accent);
        color: var(--color-primary);
        transform: scale(1.05);
    }
    
    /* Dropdown Filter */
    .form-select.w-auto {
        min-width: 150px;
        border-radius: 8px;
    }
    
    /* Tabel */
    #tabelUmkm {
        padding: 30px !important;
        border-top: 5px solid var(--color-primary);
    }
    
    @media (max-width: 768px) {
        .chart-card, .stat-card {
            min-height: auto;
        }
        .section-title {
            font-size: 28px;
        }
    }
</style>

<div class="container py-5">
    <div class="text-center">
        <h2 class="section-title" style="color: #ffffff;">Dashboard Statistik Data UMKM 📈</h2>
    </div>

    <div class="row mb-5 justify-content-center">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-card">
                <p>Total UMKM</p>
                <div class="stat-number text-primary"><?php echo e(number_format($totalUmkm)); ?></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-card" style="border-left-color: #28a745;"> <p>Total Karyawan</p>
                <div class="stat-number text-success"><?php echo e(number_format($totalKaryawan)); ?></div>
            </div>
        </div>
        
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="chart-card">
                <h6>Distribusi UMKM berdasarkan Kategori</h6>
                <div class="chart-container">
                    <canvas id="chartKategori"></canvas>
                </div>  
            </div>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="chart-card">
                <h6>Pertumbuhan Bulanan (Akumulasi <?php echo e($tahunSekarang); ?>)</h6>
                <div class="chart-container">
                    <canvas id="chartBulanan"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="chart-card">
                <h6>Pertumbuhan Tahunan (Total UMKM)</h6>
                <div class="chart-container">
                    <canvas id="chartTahunan"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="chart-card">
                <h6>Distribusi UMKM per Sektor</h6>
                <div class="chart-container">
                    <canvas id="chartSektor"></canvas>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center mb-5">
        <div class="col-12">
            <div class="chart-card p-0">
                <div class="card-header-main d-flex flex-wrap justify-content-between align-items-center mb-3 p-3">
                    <span class="fw-bold fs-5">📊 Grafik Statistik Detail</span>
                    <div class="d-flex gap-2 flex-wrap">
                        <select id="tahunFilter" class="form-select form-select-sm w-auto">
                            <option value="all" <?php echo e(request('tahun','all')=='all'?'selected':''); ?>>Semua Tahun</option>
                            <?php $__currentLoopData = $daftarTahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tahun); ?>" <?php echo e(request('tahun')==$tahun?'selected':''); ?>>
                                    <?php echo e($tahun); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <select id="chartSelector" class="form-select form-select-sm w-auto">
                            <option value="umkm">Pertumbuhan UMKM</option>
                            <option value="karyawan">Pertumbuhan Karyawan</option>
                            <option value="kategori">UMKM per Kategori</option>
                            <option value="daerah">UMKM per Daerah</option>
                            <option value="sektor">UMKM per Sektor</option>
                        </select>
                    </div>
                </div>

                <div class="card-body pt-0 px-3">
                    <div class="d-flex flex-wrap gap-2 mb-3" id="bulanFilter">
                        <?php $__currentLoopData = range(1,12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bulan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button type="button"
                                class="btn btn-sm btn-outline-primary bulan-btn <?php echo e(request('bulan','all')==$bulan?'active':''); ?>"
                                data-bulan="<?php echo e($bulan); ?>">
                                <?php echo e(\Carbon\Carbon::create()->month($bulan)->translatedFormat('M')); ?>

                            </button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <button type="button"
                            class="btn btn-sm btn-outline-primary bulan-btn <?php echo e(request('bulan','all')=='all'?'active':''); ?>"
                            data-bulan="all">Semua Bulan</button>
                    </div>

                    <div class="chart-container chart-container-lg mb-4">
                        <canvas id="chartUtama"></canvas>
                    </div>
                    <div class="row g-2 mb-3" id="summaryCards">
                        </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="chart-card mt-4 p-4" id="tabelUmkm">
        <h5 class="fw-bold text-primary mb-3"><i class="bi bi-table me-2"></i> Data Detail UMKM</h5>
        <form method="GET" action="<?php echo e(route('noauth.umkm.index')); ?>" id="searchForm" class="mb-3 d-flex">
            <input type="hidden" name="tahun" value="<?php echo e(request('tahun','all')); ?>">
            <input type="hidden" name="bulan" value="<?php echo e(request('bulan','all')); ?>">
            <input type="text" name="nama" value="<?php echo e(request('nama')); ?>" class="form-control me-2" placeholder="Cari UMKM berdasarkan nama..." id="searchInput">
            <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i> Cari</button>
        </form>
        
        <!-- <div id="umkmTable">
            
        </div> -->

        <div class="d-flex justify-content-end mb-3">
            <button id="resetFilters" class="btn btn-sm btn-outline-danger">
                Reset Semua Filter
            </button>
        </div>

        <div id="umkmTable">
            <?php echo $__env->make('noauth.umkm.table', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Fungsi untuk format angka
        const formatNumber = (num) => {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
        
        const colors = [
            '#007bff', '#28a745', '#ffc107', '#dc3545', '#17a2b8', '#6610f2',
            '#e83e8c', '#fd7e14', '#20c997', '#6c757d'
        ]; // Warna yang lebih solid dan konsisten
        const bulanLabels = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];

        // === Data dari backend (Tetap sama) ===
        const statistikBulanan = <?php echo json_encode($statistikBulanan, 15, 512) ?>;
        const statistikTahunan = <?php echo json_encode($statistikTahunan, 15, 512) ?>;
        const karyawanBulanan 	= <?php echo json_encode($karyawanBulanan, 15, 512) ?>;
        const kategoriBulanan 	= <?php echo json_encode($kategoriBulanan, 15, 512) ?>;
        const daerahBulanan 	= <?php echo json_encode($daerahBulanan, 15, 512) ?>;
        const sektorBulanan 	= <?php echo json_encode($sektorBulanan, 15, 512) ?>;
        const kategoris 		= <?php echo json_encode($kategoris, 15, 512) ?>;
        const daerahs 		 	= <?php echo json_encode($daerahs, 15, 512) ?>;
        const sektors 		 	= <?php echo json_encode($sektors, 15, 512) ?>;

        // ... (sisanya dari inisialisasi data, tidak perlu diubah) ...
        let dataBulanan = Array(12).fill(0);
        for (const [bulan, total] of Object.entries(statistikBulanan)) {
            const idx = parseInt(bulan) - 1;
            if (idx >= 0 && idx < 12) dataBulanan[idx] = total ?? 0;
        }
        let dataKaryawan = Array(12).fill(0);
        for (const [bulan, total] of Object.entries(karyawanBulanan)) {
            const idx = parseInt(bulan) - 1;
            if (idx >= 0 && idx < 12) dataKaryawan[idx] = total ?? 0;
        }

        // === Chart utama ===
        const ctx = document.getElementById('chartUtama').getContext('2d');
        let chartUtama = null; // Inisialisasi null, akan dibuat di updateChart

        // === Summary Cards (PERUBAHAN UTAMA DI SINI) ===
        function updateSummaryCards(labels, values, isLineChart = true){
            const c = document.getElementById("summaryCards");
            c.innerHTML = "";
            
            // Tentukan label untuk Total: jika line chart (bulanan) pakai 'Grand Total', jika bar chart (distribusi) pakai 'Total Keseluruhan'
            const totalLabel = isLineChart ? 'Grand Total' : 'Total Keseluruhan';
            const grandTotal = values.reduce((a,b)=>a+(parseInt(b)||0),0);

            // Tambahkan Total di bagian paling kiri jika Line Chart, atau paling kanan jika Bar Chart
            if (isLineChart) {
                 c.innerHTML += `
                    <div class="col-lg-2 col-md-3 col-6 mb-2">
                        <div class="card text-center shadow-sm bg-light border-primary border-3">
                            <div class="card-body p-2">
                                <h6 class="mb-1 text-primary">${totalLabel}</h6>
                                <h5 class="fw-bold mb-0 text-success">${formatNumber(grandTotal)}</h5>
                            </div>
                        </div>
                    </div>`;
            }

            // Cards per item/bulan
            labels.forEach((l,i)=>{
                const value = parseInt(values[i]) || 0;
                c.innerHTML += `
                    <div class="col-lg-2 col-md-3 col-6 mb-2">
                        <div class="card text-center shadow-sm">
                            <div class="card-body p-2">
                                <h6 class="mb-1 text-muted">${l}</h6>
                                <h5 class="fw-bold text-primary mb-0">${formatNumber(value)}</h5>
                            </div>
                        </div>
                    </div>`;
            });
            
            // Tambahkan Total di bagian paling kanan jika Bar Chart
            if (!isLineChart) {
                c.innerHTML += `
                    <div class="col-lg-2 col-md-3 col-6 mb-2 ms-auto">
                        <div class="card text-center shadow-sm bg-light border-primary border-3">
                            <div class="card-body p-2">
                                <h6 class="mb-1 text-primary">${totalLabel}</h6>
                                <h5 class="fw-bold mb-0 text-success">${formatNumber(grandTotal)}</h5>
                            </div>
                        </div>
                    </div>`;
            }
        }

        // === Update Chart & Summary ===
        function updateChart(type, bulan = null) {
            let ds = [], lbl = [], val = [];
            let isLine = false;

            if (type === 'umkm') {
                isLine = true;
                let d = [...dataBulanan];
                if (bulan !== null) d = [d[bulan]];
                ds = [{ label: 'Total UMKM', data: d, borderColor: colors[0], backgroundColor: 'rgba(0,123,255,0.1)', fill: 'origin', tension: 0.4 }];
                lbl = bulan !== null ? [bulanLabels[bulan]] : bulanLabels;
                val = bulan !== null ? [dataBulanan[bulan]] : dataBulanan;

            } else if (type === 'karyawan') {
                isLine = true;
                let d = [...dataKaryawan];
                if (bulan !== null) d = [d[bulan]];
                ds = [{ label: 'Total Karyawan', data: d, borderColor: colors[1], backgroundColor: 'rgba(40,167,69,0.1)', fill: 'origin', tension: 0.4 }];
                lbl = bulan !== null ? [bulanLabels[bulan]] : bulanLabels;
                val = bulan !== null ? [dataKaryawan[bulan]] : dataKaryawan;

            } else if (type === 'kategori') {
                lbl = kategoris.map(k => k.nama);
                val = lbl.map(nama => {
                    const dataPerBulan = kategoriBulanan[nama] ?? {};
                    return Object.values(dataPerBulan).reduce((a, b) => a + b, 0);
                });
                // Sorting untuk visualisasi yang lebih baik
                const sortable = lbl.map((l, i) => ({ label: l, value: val[i] })).sort((a, b) => b.value - a.value);
                lbl = sortable.map(item => item.label);
                val = sortable.map(item => item.value);

                ds = [{
                    label: 'UMKM per Kategori',
                    data: val,
                    backgroundColor: lbl.map((_, i) => colors[i % colors.length]),
                    borderColor: '#fff', // Border putih agar lebih menonjol
                    borderWidth: 2
                }];

            } else if (type === 'daerah') {
                lbl = daerahs.map(d => d.nama);
                val = lbl.map(nama => {
                    const dataPerBulan = daerahBulanan[nama] ?? {};
                    return Object.values(dataPerBulan).reduce((a, b) => a + b, 0);
                });
                
                // Sorting untuk visualisasi yang lebih baik
                const sortable = lbl.map((l, i) => ({ label: l, value: val[i] })).sort((a, b) => b.value - a.value);
                lbl = sortable.map(item => item.label);
                val = sortable.map(item => item.value);

                ds = [{
                    label: 'UMKM per Daerah',
                    data: val,
                    backgroundColor: lbl.map((_, i) => colors[i % colors.length]),
                    borderColor: '#fff',
                    borderWidth: 2
                }];

            } else if (type === 'sektor') {
                lbl = sektors.map(s => s.nama);
                val = lbl.map(nama => {
                    const dataPerBulan = sektorBulanan[nama] ?? {};
                    return Object.values(dataPerBulan).reduce((a, b) => a + b, 0);
                });
                
                // Sorting untuk visualisasi yang lebih baik
                const sortable = lbl.map((l, i) => ({ label: l, value: val[i] })).sort((a, b) => b.value - a.value);
                lbl = sortable.map(item => item.label);
                val = sortable.map(item => item.value);

                ds = [{
                    label: 'UMKM per Sektor',
                    data: val,
                    backgroundColor: lbl.map((_, i) => colors[i % colors.length]),
                    borderColor: '#fff',
                    borderWidth: 2
                }];
            }

            const chartType = isLine ? 'line' : 'bar';

            if (chartUtama) chartUtama.destroy(); // Hapus chart lama
            chartUtama = new Chart(ctx, {
                type: chartType,
                data: { labels: lbl, datasets: ds },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // Penting untuk container-lg
                    plugins: { legend: { display: true } },
                    scales: { y: { beginAtZero: true } }
                }
            });

            updateSummaryCards(lbl, val, isLine);
            enableClickFilter(chartUtama, type); // Panggil kembali click filter
        }

        // === Event listeners untuk filter di chart utama (Tetap sama) ===
        // ... (kode event listeners untuk chartSelector, bulanFilter, dan tahunFilter, tidak perlu diubah) ...
        document.getElementById('chartSelector').addEventListener('change',()=> {
            updateChart(document.getElementById('chartSelector').value);
        });
        document.querySelectorAll('.bulan-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const b = this.dataset.bulan;
                const currentChartType = document.getElementById('chartSelector').value; 
                
                // Pindahkan logika aktifasi button
                document.querySelectorAll('.bulan-btn').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                if (b === 'all') {
                    updateChart(currentChartType, null);
                    updateTable({ bulan: 'all' });
                } else {
                    updateChart(currentChartType, parseInt(b) - 1);
                    updateTable({ bulan: parseInt(b) });
                }
            });
        });
        document.getElementById('tahunFilter').addEventListener('change',function(){
            let url=new URL(window.location.href);
            url.searchParams.set('tahun',this.value);
            window.location.href=url.toString();
        });


        // === Modifikasi fungsi filter tabel dan klik chart agar konsisten ===
        let activeFilters = {
            nama: $('#searchInput').val() || '',
            tahun: $('input[name="tahun"]').val() || 'all',
            bulan: $('input[name="bulan"]').val() || 'all',
            kategori_id: null,
            daerah_id: null,
            sektor_id: null,
        };

        function updateTable(extraParams = {}) {
            Object.assign(activeFilters, extraParams); // Gabungkan filter baru
            
            // Tambahkan parameter reset untuk filter spesifik saat berganti
            if (!extraParams.kategori_id) activeFilters.kategori_id = null;
            if (!extraParams.daerah_id) activeFilters.daerah_id = null;
            if (!extraParams.sektor_id) activeFilters.sektor_id = null;
            if (!extraParams.tahun) activeFilters.tahun = $('input[name="tahun"]').val() || 'all'; // Pastikan tahun tetap terambil
            if (!extraParams.bulan) activeFilters.bulan = $('input[name="bulan"]').val() || 'all'; // Pastikan bulan tetap terambil

            $.get("<?php echo e(route('noauth.umkm.index')); ?>", activeFilters, function (data) {
                $('#umkmTable').html($(data).find('#umkmTable').html());
            });
        }
        
        function setActiveBulan(bulan) {
            $('.bulan-btn').removeClass('active');
            if(bulan === 'all'){
                $('.bulan-btn[data-bulan="all"]').addClass('active');
                $('input[name="bulan"]').val('all');
            } else {
                $('.bulan-btn[data-bulan="'+bulan+'"]').addClass('active');
                $('input[name="bulan"]').val(bulan);
            }
        }

        function enableClickFilter(chart, type) {
            chart.options.onClick = function(evt, elements) {
                if (elements.length > 0) {
                    const idx = elements[0].index;
                    const label = chart.data.labels[idx];
                    let newFilter = {};

                    // Reset semua filter spesifik kecuali tahun/bulan
                    newFilter.kategori_id = null;
                    newFilter.daerah_id = null;
                    newFilter.sektor_id = null;
                    
                    // Filter berdasarkan tipe chart
                    if (type === 'bulan') {
                        const bulanIndex = bulanLabels.indexOf(label) + 1;
                        setActiveBulan(bulanIndex);
                        updateChart('umkm', bulanIndex - 1); // Pindahkan chart utama ke mode bulanan
                        newFilter.bulan = bulanIndex;
                    } 
                    else if (type === 'tahun') { 
                        newFilter.tahun = label;
                    } 
                    else if (type === 'kategori') {
                        const kategoriObj = kategoris.find(k => k.nama === label);
                        if (kategoriObj) newFilter.kategori_id = kategoriObj.id;
                    } 
                    else if (type === 'daerah') {
                        const daerahObj = daerahs.find(d => d.nama === label);
                        if (daerahObj) newFilter.daerah_id = daerahObj.id;
                    } 
                    else if (type === 'sektor') {
                        const sektorObj = sektors.find(s => s.nama === label);
                        if (sektorObj) newFilter.sektor_id = sektorObj.id;
                    }

                    updateTable(newFilter);
                }
            };
        }
        
        // === Chart kecil (Disesuaikan agar menggunakan warna yang solid) ===
        function simpleLineChart(id, l, d, type = 'bulan') {
            const c = new Chart(document.getElementById(id), {
                type: 'line',
                data: {
                    labels: l,
                    datasets: [{
                        label: 'Total',
                        data: d,
                        borderColor: colors[0],
                        backgroundColor: 'rgba(0,123,255,0.1)',
                        fill: 'origin',
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: { y: { beginAtZero: true } }
                }
            });
            enableClickFilter(c, type);
            return c;
        }

        function simplePieChart(id, labels, data, type) {
             const c = new Chart(document.getElementById(id), {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        data: labels.map((_, i) => data[i] ?? 0),
                        backgroundColor: labels.map((_, i) => colors[i % 3]), // Hanya 3 warna agar visual lebih konsisten
                        borderColor: '#fff',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { position: 'bottom' } }
                }
            });
            enableClickFilter(c, type);
            return c;
        }
        
        function simpleBarChart(id,labels,data,type){
             const c = new Chart(document.getElementById(id),{
                type:'bar',
                data:{
                    labels:labels,
                    datasets:[{
                        label:'Total',
                        data:labels.map((_,i)=>data[i] ?? 0),
                        backgroundColor:labels.map((_,i)=>colors[i%colors.length]),
                        borderColor:labels.map((_,i)=>'#fff'),
                        borderWidth: 1
                    }]
                },
                options:{
                    responsive:true,
                    maintainAspectRatio: false,
                    plugins:{ legend:{ display:false } },
                    scales:{ y:{ beginAtZero:true } }
                }
            });
            enableClickFilter(c, type);
            return c;
        }


        // === Inisialisasi Chart Kecil ===
        const lblKategori = kategoris.map(k => k.nama);
        const valKategori = lblKategori.map(nama => kategoriBulanan[nama]
            ? Object.values(kategoriBulanan[nama]).reduce((a,b)=>a+b,0)
            : 0);
        const lblTahunan = Object.keys(statistikTahunan);
        const valTahunan = Object.values(statistikTahunan);

        simpleLineChart('chartBulanan', bulanLabels, dataBulanan, 'bulan');
        simpleLineChart('chartTahunan', lblTahunan, valTahunan, 'tahun');
        simplePieChart('chartKategori', lblKategori, valKategori, 'kategori');
        
        // Panggil kembali Chart Sektor (tetap menggunakan Bar Chart untuk visualisasi distribusi yang lebih jelas)
        const lblSektor = sektors.map(s => s.nama);
        const valSektor = lblSektor.map(nama => sektorBulanan[nama]
            ? Object.values(sektorBulanan[nama]).reduce((a,b)=>a+b,0)
            : 0);
        simpleBarChart('chartSektor', lblSektor, valSektor, 'sektor');

        // === AJAX Search & Pagination (Tetap sama, gunakan updateTable yang baru) ===
        let timer = null;
        $('#searchInput').on('input', function () {
            clearTimeout(timer);
            const keyword = $(this).val();
            timer = setTimeout(() => {
                activeFilters.nama = keyword;
                updateTable();
            }, 500); // Penundaan sedikit lebih lama
        });
        $(document).on('click', '#umkmTable .pagination a', function (e) {
            e.preventDefault();
            const href = $(this).attr('href');
            if (href) {
                // Ambil semua filter aktif saat ini, kecuali nama karena sudah di-set
                const params = new URLSearchParams(activeFilters);
                params.delete('nama');
                
                // Gabungkan filter dengan URL pagination
                let paginationUrl = new URL(href);
                params.forEach((value, key) => {
                    if (value !== 'all' && value !== 'null' && value !== null) {
                         paginationUrl.searchParams.set(key, value);
                    }
                });
                
                $.get(paginationUrl.toString(), function (data) {
                    $('#umkmTable').html($(data).find('#umkmTable').html());
                });
            }
        });
        
        // === Inisialisasi Chart Utama ===
        updateChart('umkm'); // Tampilkan chart UMKM bulanan secara default
        // === Inisialisasi Tabel UMKM ===
        // updateTable(); // Memuat tabel UMKM dengan filter default saat halaman dimuat
        // === Modifikasi fungsi updateTable ===
        function updateTable(extraParams = {}) {
            Object.assign(activeFilters, extraParams);
            
            // ... (Logika filter reset/merge yang lain) ...
            if (!extraParams.kategori_id) activeFilters.kategori_id = null;
            if (!extraParams.daerah_id) activeFilters.daerah_id = null;
            if (!extraParams.sektor_id) activeFilters.sektor_id = null;
            if (!extraParams.tahun) activeFilters.tahun = $('input[name="tahun"]').val() || 'all';
            if (!extraParams.bulan) activeFilters.bulan = $('input[name="bulan"]').val() || 'all';

            $.get("<?php echo e(route('noauth.umkm.index')); ?>", activeFilters, function (data) {
                // Cek apakah data yang dikembalikan mengandung elemen #umkmTable
                if ($(data).find('#umkmTable').length) {
                    // Jika Route mengembalikan seluruh view dashboard atau view dengan kontainer
                    $('#umkmTable').html($(data).find('#umkmTable').html());
                } else {
                    // Jika Route HANYA mengembalikan konten partial (tabel saja)
                    $('#umkmTable').html(data); 
                }
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                // Tampilkan error di console untuk debugging
                console.error("AJAX Error loading table:", textStatus, errorThrown, jqXHR.responseText);
                $('#umkmTable').html('<p class="text-danger">Gagal memuat data UMKM. Cek console untuk detail error.</p>');
            });
        }
        document.getElementById('resetFilters').addEventListener('click', function() {
            // Reset semua filter
            activeFilters = {
                kategori_id: null,
                daerah_id: null,
                sektor_id: null,
                bulan: null
            };

            // Tampilkan kembali chart default
            updateChart('umkm');

            // Reload tabel dengan data awal
            updateTable();

            // Jika ada dropdown filter (misal bulan), reset ke default
            const filterSkala = document.getElementById('filterSkalaKategori');
            if (filterSkala) filterSkala.value = 'all';
        });
        });
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\project-pwm-final\resources\views/noauth/umkm/index.blade.php ENDPATH**/ ?>
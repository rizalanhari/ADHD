@extends('layout.mainUser')

@section('judul')
DASHBOARD
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Pengertian</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-8">
                <div class="col-110">
                    <img src="{{ asset('/') }}dist/img/adhd.jpg" class="product-image" alt="Product Image">
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <nav class="w-100">
                <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="false">Pengertian ADHD</a>
                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Penyebab ADHD</a>
                    <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="true">Jenis dan Gejala ADHD</a>
                </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade active show" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                    ADHD (Attention Deficit Hyperactivity Disorder) merupakan gangguan yang memperlambat proses kembang anak,
                    dimana anak tersebut mengalami kesulitan memperhatikan sesuatu secara konsisten atau kesulitan dalam berkonsentrasi.
                    Kenyataannya, ADHD ini tidak selalu disertai dengan gangguan hiperaktif. Oleh karena itu, makna istilah ADHD di Indonesia,
                    lazimnya diterjemahkan menjadi Gangguan Pemusatan Perhatian dengan atau tanpa Hiperaktif (GPP/H) (Sugiarmin, 2007).
                    ADHD merupakan suatu kelainan perkembangan yang terjadi pada masa anak dan dapat berlangsung sampai masa remaja.
                    Gangguan perkembangan tersebut berbentuk suatu spectrum, sehingga tingkat kesulitannya akan berbeda dari satu anak dengan anak yang lainnya.</div>
                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                    ADHD merupakan salah satu gangguan perkembangan pada anak yang bisa dianggap serius dan harus diwaspadai.
                    Suatu penyakit pasti ada penyebabnya, dan tidak mungkin muncul begitu saja.
                    Penyakit ADHD bisa terjadi karena beberapa faktor seperti faktor bawaan fisik maupun faktor lingkungan (Aini,2013).
                    <br>
                    <strong>1. Faktor Bawaan Fisik</strong>
                    <br>
                    Faktor bawaan fisik bisa juga dikatakan faktor yang berasal dari genetika biologis.
                    ADHD berkaitan erat dengan faktor keturunan dimana 60% anak beresiko terkena ADHD jika orang tuanya juga terdeteksi gangguan ADHD,
                    dan pada kasus anak kembar jika salah satunya mengalami ADHD maka resiko saudarnya terkena ADHD juga sebesar 70-80% (Mohamad, 2007).
                    Faktor fisik disebabkan karena beberapa hal, antara lain (Aini,2013):
                    <br>
                    a) Hereditas, Faktor hereditas mempunyai persentase 80% sebagai penyebab ADHD.
                    Faktor ini dikarenakan adanya riwayat keluarga yang mengalami ADHD dan kelainan psikopatologis,
                    seperti conduct disorder, mood disorder, anxiety disorder.
                    <br>
                    b) Metabolisme tubuh, metabolisme tubuh anak yang mengalami ADHD berbeda dengan anak normal.
                    <br>
                    c) Ketidakseimbangan unsur-unsur kimiawi dalam tubuh
                    <br>
                    d) Volume otak anak yang mengalami ADHD cenderung lebih kecil sekitar 3%-4% dari anak normal.
                    Pada anak ADHD juga mengalami keterlambatan pada beberapa wilayah otak khususnya di bagian cortex.
                    <br>
                    e) Komplikasi Pranatal, Natal dan Postnatal Ibu hamil yang mengkonsumsi alkohol,
                    nikotin dari rokok, dan kontaminasi logam berat atau timah berpotensi besar melahirkan seorang anak dengan gangguan ADHD.
                    Pada saat melahirkan, bayi akan mengalami lahir prematur, keracunan, mengalami trauma pada frontal otak, dan juga berat badan dibawah normal.
                    <br>
                    <strong>2. Faktor Neurobiologis</strong>
                    <br>
                    Berdasarkan hasil tes MRI (Magnetic Resonance Imaging), pemeriksaan untuk otak dengan menggunakan teknologi tinggi.
                    Anak yang mengalami ADHD pada otak bagian depannya mengalami ketidaknormalan,
                    dimana adanya kerusakan fungsi lobus prefrontal yang berhubungan dengan bagian bawah korteks serebal secara kolektif (basal ganglia).
                    Selain itu korteks prefrontal pada anak ADHD lebih kecil dibandingkan dengan anak yang tidak mengalami gangguan ADHD (Mohammad, 2007).
                    <br>
                    <strong>3. Faktor Lingkungan</strong>
                    <br>
                    Pola asuh anak yang salah seperti orangtua yang merokok di sekitar anak sehingga anak menghisap asapnya,
                    anak terlalu banyak mengkonsumsi zat adiptif, serta respon negatif lingkungan dan pemberian label anak nakal.
                </div>
                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
                    Pembagian jenis dan gejala ADHD berikut mengacu pada buku DSM V (Diagnostic and Statistical Manual of Mental Disorders),
                    DSM merupakan sebuah buku diagnostik manual untuk mengetahui gangguan-gangguan psikologi yang berisikan kriteria-kriteria gejala yang nampak.
                    Berdasarkan DSM V,2013 (Diagnostic and Statistical Manual of Mental Disorders) ada tiga jenis kategori pada penderita ADHD, yaitu:
                    <br>
                    <strong>1. Inattention</strong>
                    <br>
                    Seorang anak yang mengalami ADHD dengan jenis inattention gejala utamanya ditandai dengan kurangnya kemampuan untuk memusatkan perhatian atau konsentransi.
                    Gejala dari inattention meliputi:
                    <br>
                    a) Sering gagal dalam memperhatikan sesuatu secara detail atau membuat kesalahan yang tidak terkontrol dalam aktivitasnya, seperti saat sekolah, bekerja, atau aktivitas keseharian lainnya.
                    <br>
                    b) Mengalami kesulitan untuk tetap berkonsentrasi atau menjaga perhatian ketika ada tugas atau sedang bermain, seperti sulitnya untuk tetap fokus saat pelajaran.
                    <br>
                    c) Cenderung tidak mendengarkan ketika sesorang sedang berbicara dengannya.
                    <br>
                    d) Sulit untuk diarahkan, sulit mengikuti petunjuk yang diberikan untuk menyelesaikan tugas-tugas yang diberikan.
                    <br>
                    e) Mengalami kesulitan dalam mengatur tugas atau kegiatan sehari-harinya
                    <br>
                    f) Menghindari atau tidak menyukai kegiatan yang membutuhkan usaha yang berkesinambungan atau duduk diam.
                    <br>
                    g) Sering meninggalkan atau melupakan suatu barang yang berhubungan dengan tugas atau aktivitasnya, seperti meniggalkan pensil, handphone,dsb.
                    <br>
                    h) Dengan mudah perhatiannya teralihkan karena pengaruh rangsangan dari luar yang tidak ada kaitannya dengan kegiatan yang sedang dilakukan.
                    <br>
                    i) Seringkali lupa dengan kegiatan sehari-harinya.
                    <br>
                    <strong>2. Hyperactivity</strong>
                    <br>
                    Seorang anak yang mengalami ADHD dengan jenis hyperactivity gejala utamanya ditandai dengan perilaku yang berlebihan atau perilaku tidak bisa diam.
                    Gerakan yang dilakukan melebihi gerakan pada anak seusianya, dimana anak dengan jenis ini tidak mampu mengontrol serta mengkoordinasikan aktivitas motoriknya.
                    Gejala dari hyperactivity meliputi:
                    <br>
                    a) Sering merasa gelisah, ditandai dengan tangan dan kaki selalu bergerak ketika duduk.
                    <br>
                    b) Tidak bisa tenang atau duduk diam dalam jangka waktu yang lama pada situasi yang mengharuskannya untuk tetap duduk.
                    <br>
                    c) Sering berlari dari satu tempat ketempat lainnya atau memanjat-manjat secara berlebihan dalam situasi yang tidak seharusnya.
                    <br>
                    d) Sulit bermain dengan tenang, ketika bermain lebih sering mondar-mandir kesana-kemari.
                    <br>
                    e) Selalu ingin memegang benda yang dilihat
                    <br>
                    f) Banyak bicara / bicara berlebihan
                    <br>
                    g) Sering membuat gaduh suasana
                    <br>
                    <strong>3. Impulsif</strong>
                    <br>
                    Seorang anak yang mengalami ADHD dengan jenis impulsif gejala utamanya ditandai dengan kesulitan dalam mengontrol diri,
                    cenderung terburu-buru dan tidak sabaran. Tindakan yang mereka lakukan tidak disertai dengan pemikiran yang matang dan tanpa mempertimbangkan
                    prioritas kegiatannya. Gejala dari Impulsif meliputi:
                    <br>
                    a) Sering mengeluarkaan perkataan tanpa dipikir terlebih dahulu, menjawab pertanyaan sebelum pertanyaan tersebut berakhir.
                    <br>
                    b) Tidak sabaran dalam menunggu giliran atau antrian
                    <br>
                    c) Suka menyela atau mengambil sesuatu secara paksa, semisal mengambil mainan teman dengan paksaan.
                    <br>
                    d) Bertindak tanpa dipikir dahulu
                    <br>
                    <br>
                    Gejala-gejala dari setiap jenis tersebut bisa dikategorikan kedalam jenis ADHD jika memenuhi beberapa kriteria yang ada, meliputi:
                    <br>
                    a) Memenuhi 6 atau lebih gejala terkait dalam kurun waktu pengamatan paling tidak selama 6 bulan dalam masa perkembangan yang bisa dianggap menganggu aktivitasnya dan tidak sesuai dengan usia perkembangannya
                    <br>
                    b) Gejala-gejala tersebut muncul sebelum usia 7 tahun
                    <br>
                    c) Gejala tersebut muncul ketika mereka berada dalama pengamatan 2 tempat atau lebih (disekolah, dirumah)
                    <br>
                    d) Harus ada bukti jelas terkait gejala yang dialami
                    <br>
                    e) Gejala tidak terjadi secara eksklusif bersamaan selama mengalami gangguan perkembangan pervasive, skizofrenia, atau gannguan psikotik dan tidak disertain gangguan mental lainnya seperti gangguan suasana hati, gangguan kecemasan, atau gangguan kepribadian.
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection
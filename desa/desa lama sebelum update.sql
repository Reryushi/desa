-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2021 pada 22.12
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `a1_peraturan_desa`
--

CREATE TABLE `a1_peraturan_desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_ditetapkan` date NOT NULL,
  `tentang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kesepakatan` date NOT NULL,
  `tgl_lapor` date NOT NULL,
  `tgl_undang_lembaran_desa` date NOT NULL,
  `tgl_undang_berita_desa` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `a1_peraturan_desa`
--

INSERT INTO `a1_peraturan_desa` (`id`, `jenis`, `tgl_ditetapkan`, `tentang`, `uraian`, `tgl_kesepakatan`, `tgl_lapor`, `tgl_undang_lembaran_desa`, `tgl_undang_berita_desa`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'perpu', '2021-07-15', 'sss', 'assd', '2021-07-15', '2021-07-15', '2021-07-15', '2021-07-17', 'ssss', '2021-07-16 00:50:27', '2021-07-16 00:50:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a2_keputusan_kades`
--

CREATE TABLE `a2_keputusan_kades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_keputusan_kades` date NOT NULL,
  `tentang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lapor` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a3_inventaris_kekayaan_desa`
--

CREATE TABLE `a3_inventaris_kekayaan_desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_barang_bangunan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_barang_bangunan` enum('sendiri','pemerintah','provinsi','kab_kota','sumbangan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_keadaan_barang` enum('baik','rusak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghapusan_barang_bangunan` enum('rusak','dijual','disumbangkan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_penghapusan` date NOT NULL,
  `penghapusan_keadaan_barang` enum('baik','rusak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `a3_inventaris_kekayaan_desa`
--

INSERT INTO `a3_inventaris_kekayaan_desa` (`id`, `jenis_barang_bangunan`, `asal_barang_bangunan`, `asal_keadaan_barang`, `penghapusan_barang_bangunan`, `tgl_penghapusan`, `penghapusan_keadaan_barang`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'tester', 'sendiri', 'baik', 'rusak', '2021-07-20', 'baik', 'tester 1', '2021-07-21 15:19:05', '2021-07-21 15:19:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a4_aparat_desa`
--

CREATE TABLE `a4_aparat_desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat_golongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pend_terakhir` enum('SMA','D3','S1','S2','S3','lainnya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_keputusan_pengangkatan` date NOT NULL,
  `tgl_keputusan_pemberhentian` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `a4_aparat_desa`
--

INSERT INTO `a4_aparat_desa` (`id`, `nama`, `niap`, `nip`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `pangkat_golongan`, `jabatan`, `pend_terakhir`, `tgl_keputusan_pengangkatan`, `tgl_keputusan_pemberhentian`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Alin', '2131', '32131', 'Laki-Laki', 'sadsa', '2021-07-14', 'islam', '4', 'ssad', 'SMA', '2021-07-20', '2021-07-21', 'sadsa', '2021-07-21 14:36:31', '2021-07-21 14:36:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a5_tanah_kas_desa`
--

CREATE TABLE `a5_tanah_kas_desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asal_tanah_kas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` double NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perolehan_tanah` enum('milik_desa','pemerintah','provinsi','kab_kota') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_perolehan` date NOT NULL,
  `jenis_tanah` enum('sawah','tegal','kebun','tambak_kolam','tanah_kering_darat') COLLATE utf8mb4_unicode_ci NOT NULL,
  `patok_tanda_batas` enum('ada','tidak_ada') COLLATE utf8mb4_unicode_ci NOT NULL,
  `papan_nama` enum('ada','tidak_ada') COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peruntukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mutasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a6_tanah_desa`
--

CREATE TABLE `a6_tanah_desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_perorangan_badan_hukum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml` double NOT NULL,
  `status_hak_tanah` enum('HM','HGB','HP','HGU','HPL','MA','VI','TN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `penggunaan_tanah` enum('perumahan','perdangan_jasa','perkantoran','industri','fasilitas_umum','sawah','tegalan','perkebunan','peternakan_perikanan','hutan_belukan','hutan_lindung','mutasi_tanah','tanah_kosong','lainnya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `a7_agenda`
--

CREATE TABLE `a7_agenda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_penerimaan_pengiriman_surat` date NOT NULL,
  `nomor_masuk` bigint(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `pengirim_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_singkat_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_keluar` bigint(20) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `ditujukan_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_surat_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `a7_agenda`
--

INSERT INTO `a7_agenda` (`id`, `tgl_penerimaan_pengiriman_surat`, `nomor_masuk`, `tgl_masuk`, `pengirim_masuk`, `isi_singkat_masuk`, `nomor_keluar`, `tgl_keluar`, `ditujukan_keluar`, `isi_surat_keluar`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, '2021-07-21', 1231, '2021-07-20', 'tes', 'tester', 12, '2021-07-22', 'aaaa', 'sasad', 'asad', '2021-07-21 13:48:26', '2021-07-21 13:48:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a8_ekspedisi`
--

CREATE TABLE `a8_ekspedisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `tgl_surat` date NOT NULL,
  `nomor_surat` bigint(20) NOT NULL,
  `isi_singkat_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ditujukan_kepada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `a8_ekspedisi`
--

INSERT INTO `a8_ekspedisi` (`id`, `tgl_pengiriman`, `tgl_surat`, `nomor_surat`, `isi_singkat_surat`, `ditujukan_kepada`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '2021-07-21', '2021-07-22', 21312, 'asdsada', 'awsad', 'aaa', '2021-07-21 15:09:58', '2021-07-21 15:09:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a9_lembar_berita_desa`
--

CREATE TABLE `a9_lembar_berita_desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_peraturan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_ditetapkan` date NOT NULL,
  `tentang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_diundangkan` date NOT NULL,
  `nomor_diundangkan` bigint(20) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `a9_lembar_berita_desa`
--

INSERT INTO `a9_lembar_berita_desa` (`id`, `jenis_peraturan`, `tgl_ditetapkan`, `tentang`, `tgl_diundangkan`, `nomor_diundangkan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'tester', '2021-07-20', 'tester', '2021-07-20', 123, 'ttttsss', '2021-07-21 15:34:33', '2021-07-21 15:34:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `b1_buku_induk_penduduk`
--

CREATE TABLE `b1_buku_induk_penduduk` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` char(20) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `tidak_buta_huruf` tinyint(1) NOT NULL DEFAULT 1,
  `wn` char(3) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status_di_kk` varchar(50) NOT NULL,
  `nik` char(20) NOT NULL,
  `nomor_kk` char(20) NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `b1_buku_induk_penduduk`
--

INSERT INTO `b1_buku_induk_penduduk` (`id`, `nama_lengkap`, `jenis_kelamin`, `status_perkawinan`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan_terakhir`, `pekerjaan`, `tidak_buta_huruf`, `wn`, `alamat`, `status_di_kk`, `nik`, `nomor_kk`, `ket`, `created_at`, `updated_at`) VALUES
(2, 'Alingga', '0', 'Belum Menikah', 'Tangerang', '2003-06-17', '', 'Diploma', 'Freelance', 1, 'wni', 'jl teuku umar', 'Anak', '12789301237', '07892136123', 'tidak ada', '2021-07-07 16:09:07', '2021-07-07 16:09:07'),
(3, 'Alingga', 'L', 'Belum Menikah', 'Tangerang', '2003-06-17', 'Islam', 'Diploma', 'Freelance', 1, 'wni', 'jl teuku umar', 'Anak', '12789301237', '07892136123', 'sadassss', '2021-07-07 16:09:47', '2021-07-16 18:25:21'),
(6, 'tester', 'L', 'Belum Menikah', 'ssa', '2021-07-14', 'Islam', 'Tidak Bersekolah', 'sssad', 1, 'wni', 'hhhh', 'Anak', '12312', '321312', 'tes', '2021-07-16 18:24:15', '2021-07-16 18:24:15'),
(7, 'tester', 'L', 'Belum Menikah', 'ssa', '2021-07-14', 'Islam', 'Tidak Bersekolah', 'sssad', 1, 'wni', 'hhhh', 'Anak', '12312', '321312', 'tes', '2021-07-16 18:24:36', '2021-07-16 18:24:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `b2_buku_mutasi_penduduk`
--

CREATE TABLE `b2_buku_mutasi_penduduk` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` char(3) NOT NULL,
  `wn` char(5) NOT NULL,
  `datang_dari` varchar(50) DEFAULT NULL,
  `tanggal_datang` date DEFAULT NULL,
  `pindah_ke` varchar(50) DEFAULT NULL,
  `tanggal_pindah` date DEFAULT NULL,
  `meninggal` varchar(50) DEFAULT NULL,
  `tanggal_meninggal` date DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `b2_buku_mutasi_penduduk`
--

INSERT INTO `b2_buku_mutasi_penduduk` (`id`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `wn`, `datang_dari`, `tanggal_datang`, `pindah_ke`, `tanggal_pindah`, `meninggal`, `tanggal_meninggal`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'Alinggaaaa', 'tangerang', '2021-07-08', 'L', 'wni', 'bumi', '2021-07-07', 'namek', '2021-07-08', NULL, NULL, 'sss', '2021-07-10 08:37:14', '2021-07-10 08:44:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `b3_buku_rekapitulasi_jumlah_penduduk`
--

CREATE TABLE `b3_buku_rekapitulasi_jumlah_penduduk` (
  `id` int(11) NOT NULL,
  `nama_dusun` varchar(50) NOT NULL,
  `wna_awal_l` int(10) NOT NULL,
  `wna_awal_p` int(10) NOT NULL,
  `wni_awal_l` int(10) NOT NULL,
  `wni_awal_p` int(10) NOT NULL,
  `jml_kk_awal` int(10) NOT NULL,
  `jml_anggota_awal` int(10) NOT NULL,
  `jml_jiwa_awal` int(10) NOT NULL,
  `wna_lahir_l` int(10) NOT NULL,
  `wna_lahir_p` int(10) NOT NULL,
  `wni_lahir_l` int(10) NOT NULL,
  `wni_lahir_p` int(10) NOT NULL,
  `wna_datang_l` int(10) NOT NULL,
  `wna_datang_p` int(10) NOT NULL,
  `wni_datang_l` int(10) NOT NULL,
  `wni_datang_p` int(10) NOT NULL,
  `wna_meninggal_l` int(10) NOT NULL,
  `wna_meninggal_p` int(10) NOT NULL,
  `wni_meninggal_l` int(10) NOT NULL,
  `wni_meninggal_p` int(10) NOT NULL,
  `wna_pindah_l` int(10) NOT NULL,
  `wna_pindah_p` int(10) NOT NULL,
  `wni_pindah_l` int(10) NOT NULL,
  `wni_pindah_p` int(10) NOT NULL,
  `wna_akhir_l` int(10) NOT NULL,
  `wna_akhir_p` int(10) NOT NULL,
  `wni_akhir_l` int(10) NOT NULL,
  `wni_akhir_p` int(10) NOT NULL,
  `jml_kk_akhir` int(10) NOT NULL,
  `jml_anggota_akhir` int(10) NOT NULL,
  `jml_jiwa_akhir` int(10) NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `b3_buku_rekapitulasi_jumlah_penduduk`
--

INSERT INTO `b3_buku_rekapitulasi_jumlah_penduduk` (`id`, `nama_dusun`, `wna_awal_l`, `wna_awal_p`, `wni_awal_l`, `wni_awal_p`, `jml_kk_awal`, `jml_anggota_awal`, `jml_jiwa_awal`, `wna_lahir_l`, `wna_lahir_p`, `wni_lahir_l`, `wni_lahir_p`, `wna_datang_l`, `wna_datang_p`, `wni_datang_l`, `wni_datang_p`, `wna_meninggal_l`, `wna_meninggal_p`, `wni_meninggal_l`, `wni_meninggal_p`, `wna_pindah_l`, `wna_pindah_p`, `wni_pindah_l`, `wni_pindah_p`, `wna_akhir_l`, `wna_akhir_p`, `wni_akhir_l`, `wni_akhir_p`, `jml_kk_akhir`, `jml_anggota_akhir`, `jml_jiwa_akhir`, `ket`, `created_at`, `updated_at`) VALUES
(3, 'dusun 1 sugih', 123, 123, 123, 213, 30, 43, 73, 21, 2, 3123, 321, 123, 231, 321, 312, 123, 12, 31, 3213, 123, 321, 231, 312, 321, 312, 312, 213, 24, 57, 81, 'sadasssss', '2021-07-10 14:45:52', '2021-07-10 15:18:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `b4_buku_penduduk_sementara`
--

CREATE TABLE `b4_buku_penduduk_sementara` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `nomor_identitas` char(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kebangsaan` char(5) NOT NULL,
  `keturunan` varchar(50) NOT NULL,
  `datang_dari` varchar(50) NOT NULL,
  `tujuan_kedatangan` varchar(255) NOT NULL,
  `nama_didatangi` varchar(50) NOT NULL,
  `alamat_didatangi` varchar(255) NOT NULL,
  `tanggal_datang` date NOT NULL,
  `tanggal_pergi` date NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `b4_buku_penduduk_sementara`
--

INSERT INTO `b4_buku_penduduk_sementara` (`id`, `nama_lengkap`, `jenis_kelamin`, `nomor_identitas`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `kebangsaan`, `keturunan`, `datang_dari`, `tujuan_kedatangan`, `nama_didatangi`, `alamat_didatangi`, `tanggal_datang`, `tanggal_pergi`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'ssss', 'L', '21321312', 'sasad', '2021-07-01', 'zzasa', 'wni', 'asd', 'sadsa', 'asdsadsadsa sad sa', 'aaaaa', 'ffffsadsa', '2021-07-10', '2021-07-16', 'asdsa', '2021-07-10 12:04:11', '2021-07-10 12:13:11'),
(3, 'asdasd', 'L', '12312', 'sadsa', '2021-07-09', 'asdsadsa', 'wna', 'asdsad', 'sdasdas', 'asda as', 'sssss', 'sad sadsa', '2021-07-10', '2021-07-11', 'sada', '2021-07-10 12:12:23', '2021-07-10 12:12:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `b5_buku_ktp_dan_kk`
--

CREATE TABLE `b5_buku_ktp_dan_kk` (
  `id` int(11) NOT NULL,
  `no_kk` char(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` char(20) NOT NULL,
  `jenis_kelamin` char(5) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status_perkawinan` char(50) NOT NULL,
  `tempat_ektp_keluar` varchar(50) NOT NULL,
  `tanggal_ektp_keluar` date NOT NULL,
  `status_hub_keluarga` varchar(50) NOT NULL,
  `wn` char(5) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tgl_tinggal_didesa` date NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `b5_buku_ktp_dan_kk`
--

INSERT INTO `b5_buku_ktp_dan_kk` (`id`, `no_kk`, `nama_lengkap`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `gol_darah`, `agama`, `pendidikan`, `pekerjaan`, `alamat`, `status_perkawinan`, `tempat_ektp_keluar`, `tanggal_ektp_keluar`, `status_hub_keluarga`, `wn`, `nama_ayah`, `nama_ibu`, `tgl_tinggal_didesa`, `ket`, `created_at`, `updated_at`) VALUES
(1, '123123', 'tester 1', '321312', 'L', 'bumi', '2021-07-08', 'A', 'Islam', 'TK', 'tidak ada', 'sadawedas sssss', 'Belum Meni', 'bumi', '0000-00-00', 'Anak', 'wni', 'aaaaa', 'bbbbb', '2021-07-08', 'azazaza', '2021-07-10 07:43:53', '2021-07-10 08:03:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c1_buku_apbd`
--

CREATE TABLE `c1_buku_apbd` (
  `id` int(11) NOT NULL,
  `tahun_anggaran` char(10) NOT NULL,
  `anggaran_1` int(20) DEFAULT NULL,
  `ket_1` text DEFAULT NULL,
  `anggaran_1_1` int(20) DEFAULT NULL,
  `ket_1_1` text DEFAULT NULL,
  `anggaran_1_1_1` int(20) DEFAULT NULL,
  `ket_1_1_1` text DEFAULT NULL,
  `anggaran_1_1_2` int(20) DEFAULT NULL,
  `ket_1_1_2` text DEFAULT NULL,
  `anggaran_1_1_3` int(20) DEFAULT NULL,
  `ket_1_1_3` text DEFAULT NULL,
  `anggaran_1_2` int(50) DEFAULT NULL,
  `ket_1_2` text DEFAULT NULL,
  `anggaran_1_2_1` int(20) DEFAULT NULL,
  `ket_1_2_1` text DEFAULT NULL,
  `anggaran_1_2_2` int(20) DEFAULT NULL,
  `ket_1_2_2` text DEFAULT NULL,
  `anggaran_1_2_3` int(20) DEFAULT NULL,
  `ket_1_2_3` text DEFAULT NULL,
  `anggaran_1_2_4` int(20) DEFAULT NULL,
  `ket_1_2_4` text DEFAULT NULL,
  `anggaran_1_2_4_1` int(20) DEFAULT NULL,
  `ket_1_2_4_1` text DEFAULT NULL,
  `anggaran_1_2_4_2` int(20) DEFAULT NULL,
  `ket_1_2_4_2` text DEFAULT NULL,
  `anggaran_1_3` int(20) DEFAULT NULL,
  `ket_1_3` text DEFAULT NULL,
  `anggaran_1_3_1` int(20) DEFAULT NULL,
  `ket_1_3_1` text DEFAULT NULL,
  `anggaran_1_3_2` int(20) DEFAULT NULL,
  `ket_1_3_2` text DEFAULT NULL,
  `anggaran_2` int(20) DEFAULT NULL,
  `ket_2` text DEFAULT NULL,
  `anggaran_2_1` int(20) DEFAULT NULL,
  `ket_2_1` text DEFAULT NULL,
  `anggaran_2_1_1` int(20) DEFAULT NULL,
  `ket_2_1_1` text DEFAULT NULL,
  `anggaran_2_1_1_1` int(20) DEFAULT NULL,
  `ket_2_1_1_1` text DEFAULT NULL,
  `anggaran_2_1_1_1_a` int(50) DEFAULT NULL,
  `ket_2_1_1_1_a` text DEFAULT NULL,
  `anggaran_2_1_1_1_b` int(20) DEFAULT NULL,
  `ket_2_1_1_1_b` text DEFAULT NULL,
  `anggaran_2_1_1_1_c` int(20) DEFAULT NULL,
  `ket_2_1_1_1_c` text DEFAULT NULL,
  `anggaran_2_1_2` int(20) DEFAULT NULL,
  `ket_2_1_2` text DEFAULT NULL,
  `anggaran_2_1_2_2` int(20) DEFAULT NULL,
  `ket_2_1_2_2` text DEFAULT NULL,
  `anggaran_2_1_2_2_a` int(20) DEFAULT NULL,
  `ket_2_1_2_2_a` text DEFAULT NULL,
  `anggaran_2_1_2_2_b` int(20) DEFAULT NULL,
  `ket_2_1_2_2_b` text DEFAULT NULL,
  `anggaran_2_1_2_2_c` int(20) DEFAULT NULL,
  `ket_2_1_2_2_c` text DEFAULT NULL,
  `anggaran_2_1_2_2_d` int(20) DEFAULT NULL,
  `ket_2_1_2_2_d` text DEFAULT NULL,
  `anggaran_2_1_2_2_e` int(20) DEFAULT NULL,
  `ket_2_1_2_2_e` text DEFAULT NULL,
  `anggaran_2_1_2_2_f` int(20) DEFAULT NULL,
  `ket_2_1_2_2_f` text DEFAULT NULL,
  `anggaran_2_1_2_2_g` int(20) DEFAULT NULL,
  `ket_2_1_2_2_g` text DEFAULT NULL,
  `anggaran_2_1_2_2_h` int(20) DEFAULT NULL,
  `ket_2_1_2_2_h` text DEFAULT NULL,
  `anggaran_2_1_2_2_i` int(20) DEFAULT NULL,
  `ket_2_1_2_2_i` text DEFAULT NULL,
  `anggaran_2_1_2_2_j` int(20) DEFAULT NULL,
  `ket_2_1_2_2_j` text DEFAULT NULL,
  `anggaran_2_1_2_3` int(20) DEFAULT NULL,
  `ket_2_1_2_3` text DEFAULT NULL,
  `anggaran_2_1_2_3_a` int(20) DEFAULT NULL,
  `ket_2_1_2_3_a` text DEFAULT NULL,
  `anggaran_2_1_2_3_b` int(20) DEFAULT NULL,
  `ket_2_1_2_3_b` text DEFAULT NULL,
  `anggaran_2_1_2_3_c` int(20) DEFAULT NULL,
  `ket_2_1_2_3_c` text DEFAULT NULL,
  `anggaran_2_1_2_3_d` int(20) DEFAULT NULL,
  `ket_2_1_2_3_d` text DEFAULT NULL,
  `anggaran_2_1_3` int(20) DEFAULT NULL,
  `ket_2_1_3` text DEFAULT NULL,
  `anggaran_2_1_3_2` int(20) DEFAULT NULL,
  `ket_2_1_3_2` text DEFAULT NULL,
  `anggaran_2_1_3_2_a` int(20) DEFAULT NULL,
  `ket_2_1_3_2_a` text DEFAULT NULL,
  `anggaran_2_1_3_2_b` int(20) DEFAULT NULL,
  `ket_2_1_3_2_b` text DEFAULT NULL,
  `anggaran_2_1_3_2_c` int(20) DEFAULT NULL,
  `ket_2_1_3_2_c` text DEFAULT NULL,
  `anggaran_2_1_3_2_d` int(50) DEFAULT NULL,
  `ket_2_1_3_2_d` text DEFAULT NULL,
  `anggaran_2_1_4` int(20) DEFAULT NULL,
  `ket_2_1_4` text DEFAULT NULL,
  `anggaran_2_1_4_2` int(20) DEFAULT NULL,
  `ket_2_1_4_2` text DEFAULT NULL,
  `anggaran_2_1_4_2_a` int(20) DEFAULT NULL,
  `ket_2_1_4_2_a` text DEFAULT NULL,
  `anggaran_2_1_4_2_b` int(20) DEFAULT NULL,
  `ket_2_1_4_2_b` text DEFAULT NULL,
  `anggaran_2_1_4_2_c` int(20) DEFAULT NULL,
  `ket_2_1_4_2_c` text DEFAULT NULL,
  `anggaran_2_1_4_2_d` int(20) DEFAULT NULL,
  `ket_2_1_4_2_d` text DEFAULT NULL,
  `anggaran_2_2` int(20) DEFAULT NULL,
  `ket_2_2` text DEFAULT NULL,
  `anggaran_2_2_1` int(20) DEFAULT NULL,
  `ket_2_2_1` text DEFAULT NULL,
  `anggaran_2_2_1_2` int(20) DEFAULT NULL,
  `ket_2_2_1_2` text DEFAULT NULL,
  `anggaran_2_2_1_2_a` int(20) DEFAULT NULL,
  `ket_2_2_1_2_a` text DEFAULT NULL,
  `anggaran_2_2_1_2_b` int(20) DEFAULT NULL,
  `ket_2_2_1_2_b` text DEFAULT NULL,
  `anggaran_2_2_1_2_c` int(20) DEFAULT NULL,
  `ket_2_2_1_2_c` text DEFAULT NULL,
  `anggaran_2_2_1_3` int(20) DEFAULT NULL,
  `ket_2_2_1_3` text DEFAULT NULL,
  `anggaran_2_2_1_3_a` int(20) DEFAULT NULL,
  `ket_2_2_1_3_a` text DEFAULT NULL,
  `anggaran_2_2_1_3_b` int(20) DEFAULT NULL,
  `ket_2_2_1_3_b` text DEFAULT NULL,
  `anggaran_2_2_1_3_c` int(20) DEFAULT NULL,
  `ket_2_2_1_3_c` text DEFAULT NULL,
  `anggaran_2_2_2` int(20) DEFAULT NULL,
  `ket_2_2_2` text DEFAULT NULL,
  `anggaran_2_2_2_2` int(20) DEFAULT NULL,
  `ket_2_2_2_2` text DEFAULT NULL,
  `anggaran_2_2_2_2_a` int(20) DEFAULT NULL,
  `ket_2_2_2_2_a` text DEFAULT NULL,
  `anggaran_2_2_2_2_b` int(20) DEFAULT NULL,
  `ket_2_2_2_2_b` text DEFAULT NULL,
  `anggaran_2_2_2_2_c` int(20) DEFAULT NULL,
  `ket_2_2_2_2_c` text DEFAULT NULL,
  `anggaran_2_2_2_3` int(20) DEFAULT NULL,
  `ket_2_2_2_3` text DEFAULT NULL,
  `anggaran_2_2_2_3_a` int(20) DEFAULT NULL,
  `ket_2_2_2_3_a` text DEFAULT NULL,
  `anggaran_2_2_2_3_b` int(20) DEFAULT NULL,
  `ket_2_2_2_3_b` text DEFAULT NULL,
  `anggaran_2_2_2_3_c` int(20) DEFAULT NULL,
  `ket_2_2_2_3_c` text DEFAULT NULL,
  `anggaran_2_2_3` int(20) DEFAULT NULL,
  `ket_2_2_3` text DEFAULT NULL,
  `anggaran_2_3` int(20) DEFAULT NULL,
  `ket_2_3` text DEFAULT NULL,
  `anggaran_2_3_1` int(20) DEFAULT NULL,
  `ket_2_3_1` text DEFAULT NULL,
  `anggaran_2_3_1_2` int(20) DEFAULT NULL,
  `ket_2_3_1_2` text DEFAULT NULL,
  `anggaran_2_3_1_2_a` int(20) DEFAULT NULL,
  `ket_2_3_1_2_a` text DEFAULT NULL,
  `anggaran_2_3_1_2_b` int(20) DEFAULT NULL,
  `ket_2_3_1_2_b` text DEFAULT NULL,
  `anggaran_2_3_1_2_c` int(20) DEFAULT NULL,
  `ket_2_3_1_2_c` text DEFAULT NULL,
  `anggaran_2_3_1_2_d` int(20) DEFAULT NULL,
  `ket_2_3_1_2_d` text DEFAULT NULL,
  `anggaran_2_3_2` int(20) DEFAULT NULL,
  `ket_2_3_2` text DEFAULT NULL,
  `anggaran_2_4` int(20) DEFAULT NULL,
  `ket_2_4` text DEFAULT NULL,
  `anggaran_2_4_1` int(20) DEFAULT NULL,
  `ket_2_4_1` text DEFAULT NULL,
  `anggaran_2_4_1_2` int(20) DEFAULT NULL,
  `ket_2_4_1_2` text DEFAULT NULL,
  `anggaran_2_4_1_2_a` int(20) DEFAULT NULL,
  `ket_2_4_1_2_a` text DEFAULT NULL,
  `anggaran_2_4_1_2_b` int(20) DEFAULT NULL,
  `ket_2_4_1_2_b` text DEFAULT NULL,
  `anggaran_2_4_1_2_c` int(20) DEFAULT NULL,
  `ket_2_4_1_2_c` text DEFAULT NULL,
  `anggaran_2_4_1_2_d` int(20) DEFAULT NULL,
  `ket_2_4_1_2_d` text DEFAULT NULL,
  `anggaran_2_4_2` int(20) DEFAULT NULL,
  `ket_2_4_2` text DEFAULT NULL,
  `anggaran_2_5` int(20) DEFAULT NULL,
  `ket_2_5` text DEFAULT NULL,
  `anggaran_2_5_1` int(20) DEFAULT NULL,
  `ket_2_5_1` text DEFAULT NULL,
  `anggaran_2_5_1_2` int(20) DEFAULT NULL,
  `ket_2_5_1_2` text DEFAULT NULL,
  `anggaran_2_5_1_2_a` int(20) DEFAULT NULL,
  `ket_2_5_1_2_a` text DEFAULT NULL,
  `anggaran_2_5_1_2_b` int(20) DEFAULT NULL,
  `ket_2_5_1_2_b` text DEFAULT NULL,
  `anggaran_2_5_1_2_c` int(20) DEFAULT NULL,
  `ket_2_5_1_2_c` text DEFAULT NULL,
  `anggaran_2_5_2` int(20) DEFAULT NULL,
  `ket_2_5_2` text DEFAULT NULL,
  `anggaran_3` int(20) DEFAULT NULL,
  `ket_3` text DEFAULT NULL,
  `anggaran_3_1` int(20) DEFAULT NULL,
  `ket_3_1` text DEFAULT NULL,
  `anggaran_3_1_1` int(20) DEFAULT NULL,
  `ket_3_1_1` text DEFAULT NULL,
  `anggaran_3_1_2` int(20) DEFAULT NULL,
  `ket_3_1_2` text DEFAULT NULL,
  `anggaran_3_1_3` int(11) DEFAULT NULL,
  `ket_3_1_3` text DEFAULT NULL,
  `anggaran_3_2` int(11) DEFAULT NULL,
  `ket_3_2` text DEFAULT NULL,
  `anggaran_3_2_1` int(20) DEFAULT NULL,
  `ket_3_2_1` text DEFAULT NULL,
  `anggaran_3_2_2` int(20) DEFAULT NULL,
  `ket_3_2_2` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `c1_buku_apbd`
--

INSERT INTO `c1_buku_apbd` (`id`, `tahun_anggaran`, `anggaran_1`, `ket_1`, `anggaran_1_1`, `ket_1_1`, `anggaran_1_1_1`, `ket_1_1_1`, `anggaran_1_1_2`, `ket_1_1_2`, `anggaran_1_1_3`, `ket_1_1_3`, `anggaran_1_2`, `ket_1_2`, `anggaran_1_2_1`, `ket_1_2_1`, `anggaran_1_2_2`, `ket_1_2_2`, `anggaran_1_2_3`, `ket_1_2_3`, `anggaran_1_2_4`, `ket_1_2_4`, `anggaran_1_2_4_1`, `ket_1_2_4_1`, `anggaran_1_2_4_2`, `ket_1_2_4_2`, `anggaran_1_3`, `ket_1_3`, `anggaran_1_3_1`, `ket_1_3_1`, `anggaran_1_3_2`, `ket_1_3_2`, `anggaran_2`, `ket_2`, `anggaran_2_1`, `ket_2_1`, `anggaran_2_1_1`, `ket_2_1_1`, `anggaran_2_1_1_1`, `ket_2_1_1_1`, `anggaran_2_1_1_1_a`, `ket_2_1_1_1_a`, `anggaran_2_1_1_1_b`, `ket_2_1_1_1_b`, `anggaran_2_1_1_1_c`, `ket_2_1_1_1_c`, `anggaran_2_1_2`, `ket_2_1_2`, `anggaran_2_1_2_2`, `ket_2_1_2_2`, `anggaran_2_1_2_2_a`, `ket_2_1_2_2_a`, `anggaran_2_1_2_2_b`, `ket_2_1_2_2_b`, `anggaran_2_1_2_2_c`, `ket_2_1_2_2_c`, `anggaran_2_1_2_2_d`, `ket_2_1_2_2_d`, `anggaran_2_1_2_2_e`, `ket_2_1_2_2_e`, `anggaran_2_1_2_2_f`, `ket_2_1_2_2_f`, `anggaran_2_1_2_2_g`, `ket_2_1_2_2_g`, `anggaran_2_1_2_2_h`, `ket_2_1_2_2_h`, `anggaran_2_1_2_2_i`, `ket_2_1_2_2_i`, `anggaran_2_1_2_2_j`, `ket_2_1_2_2_j`, `anggaran_2_1_2_3`, `ket_2_1_2_3`, `anggaran_2_1_2_3_a`, `ket_2_1_2_3_a`, `anggaran_2_1_2_3_b`, `ket_2_1_2_3_b`, `anggaran_2_1_2_3_c`, `ket_2_1_2_3_c`, `anggaran_2_1_2_3_d`, `ket_2_1_2_3_d`, `anggaran_2_1_3`, `ket_2_1_3`, `anggaran_2_1_3_2`, `ket_2_1_3_2`, `anggaran_2_1_3_2_a`, `ket_2_1_3_2_a`, `anggaran_2_1_3_2_b`, `ket_2_1_3_2_b`, `anggaran_2_1_3_2_c`, `ket_2_1_3_2_c`, `anggaran_2_1_3_2_d`, `ket_2_1_3_2_d`, `anggaran_2_1_4`, `ket_2_1_4`, `anggaran_2_1_4_2`, `ket_2_1_4_2`, `anggaran_2_1_4_2_a`, `ket_2_1_4_2_a`, `anggaran_2_1_4_2_b`, `ket_2_1_4_2_b`, `anggaran_2_1_4_2_c`, `ket_2_1_4_2_c`, `anggaran_2_1_4_2_d`, `ket_2_1_4_2_d`, `anggaran_2_2`, `ket_2_2`, `anggaran_2_2_1`, `ket_2_2_1`, `anggaran_2_2_1_2`, `ket_2_2_1_2`, `anggaran_2_2_1_2_a`, `ket_2_2_1_2_a`, `anggaran_2_2_1_2_b`, `ket_2_2_1_2_b`, `anggaran_2_2_1_2_c`, `ket_2_2_1_2_c`, `anggaran_2_2_1_3`, `ket_2_2_1_3`, `anggaran_2_2_1_3_a`, `ket_2_2_1_3_a`, `anggaran_2_2_1_3_b`, `ket_2_2_1_3_b`, `anggaran_2_2_1_3_c`, `ket_2_2_1_3_c`, `anggaran_2_2_2`, `ket_2_2_2`, `anggaran_2_2_2_2`, `ket_2_2_2_2`, `anggaran_2_2_2_2_a`, `ket_2_2_2_2_a`, `anggaran_2_2_2_2_b`, `ket_2_2_2_2_b`, `anggaran_2_2_2_2_c`, `ket_2_2_2_2_c`, `anggaran_2_2_2_3`, `ket_2_2_2_3`, `anggaran_2_2_2_3_a`, `ket_2_2_2_3_a`, `anggaran_2_2_2_3_b`, `ket_2_2_2_3_b`, `anggaran_2_2_2_3_c`, `ket_2_2_2_3_c`, `anggaran_2_2_3`, `ket_2_2_3`, `anggaran_2_3`, `ket_2_3`, `anggaran_2_3_1`, `ket_2_3_1`, `anggaran_2_3_1_2`, `ket_2_3_1_2`, `anggaran_2_3_1_2_a`, `ket_2_3_1_2_a`, `anggaran_2_3_1_2_b`, `ket_2_3_1_2_b`, `anggaran_2_3_1_2_c`, `ket_2_3_1_2_c`, `anggaran_2_3_1_2_d`, `ket_2_3_1_2_d`, `anggaran_2_3_2`, `ket_2_3_2`, `anggaran_2_4`, `ket_2_4`, `anggaran_2_4_1`, `ket_2_4_1`, `anggaran_2_4_1_2`, `ket_2_4_1_2`, `anggaran_2_4_1_2_a`, `ket_2_4_1_2_a`, `anggaran_2_4_1_2_b`, `ket_2_4_1_2_b`, `anggaran_2_4_1_2_c`, `ket_2_4_1_2_c`, `anggaran_2_4_1_2_d`, `ket_2_4_1_2_d`, `anggaran_2_4_2`, `ket_2_4_2`, `anggaran_2_5`, `ket_2_5`, `anggaran_2_5_1`, `ket_2_5_1`, `anggaran_2_5_1_2`, `ket_2_5_1_2`, `anggaran_2_5_1_2_a`, `ket_2_5_1_2_a`, `anggaran_2_5_1_2_b`, `ket_2_5_1_2_b`, `anggaran_2_5_1_2_c`, `ket_2_5_1_2_c`, `anggaran_2_5_2`, `ket_2_5_2`, `anggaran_3`, `ket_3`, `anggaran_3_1`, `ket_3_1`, `anggaran_3_1_1`, `ket_3_1_1`, `anggaran_3_1_2`, `ket_3_1_2`, `anggaran_3_1_3`, `ket_3_1_3`, `anggaran_3_2`, `ket_3_2`, `anggaran_3_2_1`, `ket_3_2_1`, `anggaran_3_2_2`, `ket_3_2_2`, `created_at`, `updated_at`) VALUES
(1, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `c2_buku_rencana_anggaran`
--

CREATE TABLE `c2_buku_rencana_anggaran` (
  `id` int(11) NOT NULL,
  `tahun_anggaran` text NOT NULL,
  `bidang` char(20) DEFAULT NULL,
  `kegiatan` char(20) DEFAULT NULL,
  `waktu_pelaksanaan` date DEFAULT NULL,
  `uraian` varchar(255) DEFAULT NULL,
  `volume` int(20) DEFAULT NULL,
  `harga_satuan` int(20) DEFAULT NULL,
  `jumlah` int(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `c2_buku_rencana_anggaran`
--

INSERT INTO `c2_buku_rencana_anggaran` (`id`, `tahun_anggaran`, `bidang`, `kegiatan`, `waktu_pelaksanaan`, `uraian`, `volume`, `harga_satuan`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, '2020', '112', '112a', '2021-07-16', 'tester', 53, 1000, 53000, NULL, '2021-07-15 17:56:05'),
(2, '2021', '1122', 'a', '2021-07-10', 'sdasd', 213, 1231, 262203, '2021-07-15 17:38:14', '2021-07-15 17:46:46'),
(4, '2021', '13', 'a', '2021-07-15', 'sssss', 20, 1000, 20000, '2021-07-15 17:43:17', '2021-07-15 17:43:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c3_buku_kas_pembantu`
--

CREATE TABLE `c3_buku_kas_pembantu` (
  `id` int(11) NOT NULL,
  `bidang` char(20) DEFAULT NULL,
  `kegiatan` char(20) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `uraian` varchar(255) DEFAULT NULL,
  `dari_bendahara` int(20) DEFAULT NULL,
  `swadaya_masyarakat` int(20) DEFAULT NULL,
  `nomor_bukti` char(20) DEFAULT NULL,
  `beli_barang_jasa` int(20) DEFAULT NULL,
  `beli_modal` int(20) DEFAULT NULL,
  `pengembalian_ke_bendahara` int(20) DEFAULT NULL,
  `saldo_kas` int(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `c3_buku_kas_pembantu`
--

INSERT INTO `c3_buku_kas_pembantu` (`id`, `bidang`, `kegiatan`, `tanggal`, `uraian`, `dari_bendahara`, `swadaya_masyarakat`, `nomor_bukti`, `beli_barang_jasa`, `beli_modal`, `pengembalian_ke_bendahara`, `saldo_kas`, `created_at`, `updated_at`) VALUES
(1, '112', 'a', '2021-07-08', 'tester', 2000, 5000, '12', 4000, 6000, 2000, 0, NULL, NULL),
(2, NULL, NULL, '2021-07-15', 'testersss', 1200, 2, '1', 22, 55, 1, 0, '2021-07-15 19:10:25', '2021-07-15 19:12:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c4_buku_kas_umum`
--

CREATE TABLE `c4_buku_kas_umum` (
  `id` int(11) NOT NULL,
  `tahun_anggaran` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kode_rekening` char(10) DEFAULT NULL,
  `uraian` varchar(255) DEFAULT NULL,
  `penerimaan` int(20) DEFAULT NULL,
  `pengeluaran` int(20) DEFAULT NULL,
  `no_bukti` char(20) DEFAULT NULL,
  `pengeluaran_komulatif` int(20) DEFAULT NULL,
  `saldo` int(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `c4_buku_kas_umum`
--

INSERT INTO `c4_buku_kas_umum` (`id`, `tahun_anggaran`, `tanggal`, `kode_rekening`, `uraian`, `penerimaan`, `pengeluaran`, `no_bukti`, `pengeluaran_komulatif`, `saldo`, `created_at`, `updated_at`) VALUES
(1, NULL, '2021-07-16', '112', 'tidak ada', 3000, 1000, '12', 1000, 2000, '2021-07-15 20:07:56', '2021-07-15 20:10:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c5_buku_kas_prpl`
--

CREATE TABLE `c5_buku_kas_prpl` (
  `id` int(11) NOT NULL,
  `tahun_anggaran` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pajak` varchar(255) DEFAULT NULL,
  `retribusi` varchar(255) DEFAULT NULL,
  `pl` varchar(255) DEFAULT NULL,
  `pemotongan` int(20) DEFAULT NULL,
  `penyetoran` int(20) DEFAULT NULL,
  `saldo` int(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `c5_buku_kas_prpl`
--

INSERT INTO `c5_buku_kas_prpl` (`id`, `tahun_anggaran`, `tanggal`, `pajak`, `retribusi`, `pl`, `pemotongan`, `penyetoran`, `saldo`, `created_at`, `updated_at`) VALUES
(1, NULL, '2021-07-16', 'tes12', 'tes2', 'tes3', 111, 333, 222, '2021-07-15 20:28:43', '2021-07-15 20:30:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c6_buku_bank_desa`
--

CREATE TABLE `c6_buku_bank_desa` (
  `id` int(11) NOT NULL,
  `tahun_anggaran` text DEFAULT NULL,
  `bulan` char(20) DEFAULT NULL,
  `bank_cabang` varchar(50) DEFAULT NULL,
  `rek_no` char(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `uraian` varchar(255) DEFAULT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `setoran` int(20) DEFAULT NULL,
  `bunga` int(20) DEFAULT NULL,
  `penarikan` int(20) DEFAULT NULL,
  `pajak` int(20) DEFAULT NULL,
  `biaya` int(20) DEFAULT NULL,
  `saldo` int(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `c6_buku_bank_desa`
--

INSERT INTO `c6_buku_bank_desa` (`id`, `tahun_anggaran`, `bulan`, `bank_cabang`, `rek_no`, `tanggal`, `uraian`, `bukti`, `setoran`, `bunga`, `penarikan`, `pajak`, `biaya`, `saldo`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, '2021-07-17', 'tes1123', 'tes2', 22, 33, 12555, 32, 12, 1231, '2021-07-15 20:50:39', '2021-07-15 20:52:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d1_rencana_kerja_pembangunan`
--

CREATE TABLE `d1_rencana_kerja_pembangunan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_proyek_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_biaya` enum('pemerintah','provinsi','kab_kota','swadaya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pelaksana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manfaat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `d2_kegiatan_pembangunan`
--

CREATE TABLE `d2_kegiatan_pembangunan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_proyek_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_dana` enum('pemerintah','provinsi','kab_kota','swadaya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `waktu` time NOT NULL,
  `sifat_proyek` enum('baru','lanjutan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelaksana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `d3_inventaris_hasil_pembangunan`
--

CREATE TABLE `d3_inventaris_hasil_pembangunan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_hasil_bangunan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` double NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `d4_kader_pemberdayaan_masy`
--

CREATE TABLE `d4_kader_pemberdayaan_masy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_kursus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `venue` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `name`, `image`, `date`, `venue`, `price`, `capacity`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Holi 2018', '1.jpg', '2018-05-18', 'Hotel Garden Area', 2500, 550, 'Albatross Concert and Holi Celebration 2018. Enjoy with live music and tank wash after holi.', 1, '2020-07-01 23:05:15', NULL),
(2, 'Food Festa', '2.jpg', '2018-04-18', 'Hotel Garden Area', 3500, 350, 'Cultural Performance with food testing sessions.', 1, '2020-07-01 23:05:15', NULL),
(3, 'South Asian Youth Summit', '3.jpg', '2018-04-20', 'Leonat Conference Hall', 0, 250, 'Discussion of youth involvement in protection of cultural heritage.', 1, '2020-07-01 23:05:15', NULL),
(4, 'Regional Minority Society Conference', '4.jpg', '2018-04-15', 'Darfurd Conference Hall', 0, 100, 'Leaders of minority society discuss the involvement in politics.', 1, '2020-07-01 23:05:15', NULL),
(5, 'Bankers Society Annual Summit', '5.jpg', '2018-04-10', 'Kafe Conference Hall', 5400, 60, 'Talks by industry veterans on Central Bank limits on foreign loans.', 1, '2020-07-01 23:05:15', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `events2`
--

CREATE TABLE `events2` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_bed` int(5) DEFAULT NULL,
  `room_cost` int(30) DEFAULT NULL,
  `status` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events2`
--

INSERT INTO `events2` (`id`, `title`, `extra_bed`, `room_cost`, `status`, `start_time`, `end_time`, `description`, `created_at`, `updated_at`, `deleted_at`, `room_id`, `user_id`) VALUES
(32, '1', NULL, 300000, NULL, '2020-07-24 20:50:00', '2020-07-24 20:50:00', '1', '2020-07-24 06:53:48', '2020-07-24 06:53:48', NULL, 3, 2),
(33, '2', NULL, 300000, NULL, '2020-07-24 20:50:00', '2020-07-24 20:50:00', '2', '2020-07-24 06:54:00', '2020-07-24 06:54:00', NULL, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_bookings`
--

CREATE TABLE `event_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `number_of_tickets` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `payment` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL,
  `event_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Air Conditioner', 'air_conditioner.png', 1, '2020-07-01 23:05:15', NULL),
(2, 'Anytime HotWater', 'hotwater.png', 1, NULL, NULL),
(3, 'Parking', 'parking.png', 1, '2020-07-01 23:05:15', NULL),
(4, 'Television', 'television.png', 1, '2020-07-01 23:05:15', NULL),
(5, 'Wifi', 'wifi.png', 1, '2020-07-01 23:05:15', NULL),
(6, 'Fan', 'fan.png', 1, '2020-08-10 04:52:57', '2020-08-10 04:52:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `facility_room_type`
--

CREATE TABLE `facility_room_type` (
  `facility_id` int(10) UNSIGNED NOT NULL,
  `room_type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `facility_room_type`
--

INSERT INTO `facility_room_type` (`facility_id`, `room_type_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-07-01 23:05:15', NULL),
(3, 1, '2020-07-01 23:05:15', NULL),
(4, 1, '2020-07-01 23:05:15', NULL),
(5, 1, '2020-07-01 23:05:15', NULL),
(1, 2, '2020-07-01 23:05:15', NULL),
(3, 2, '2020-07-01 23:05:15', NULL),
(3, 3, '2020-07-01 23:05:15', NULL),
(5, 3, '2020-07-01 23:05:15', NULL),
(2, 1, NULL, NULL),
(6, 3, '2020-08-09 21:53:44', '2020-08-09 21:53:44'),
(5, 2, '2020-08-09 21:59:01', '2020-08-09 21:59:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foods`
--

CREATE TABLE `foods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Appetizer','Soup','Salad','Main Course','Dessert') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `room_type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_29_024654_create_slider_table', 1),
(4, '2018_03_29_024713_create_facilities_table', 1),
(5, '2018_03_29_024753_create_room_types_table', 1),
(6, '2018_03_29_024939_create_facility_room_type_table', 1),
(7, '2018_03_29_025055_create_images_table', 1),
(8, '2018_03_29_025121_create_rooms_table', 1),
(9, '2018_03_29_025157_create_room_bookings_table', 1),
(10, '2018_03_29_025158_create_reviews_table', 1),
(11, '2018_03_29_031146_create_foods_table', 1),
(12, '2018_03_29_031207_create_food_orders_table', 1),
(13, '2018_04_07_022022_create_events_table', 1),
(14, '2018_04_08_025158_create_event_bookings_table', 1),
(15, '2018_05_06_035355_create_pages_table', 1),
(16, '2018_05_06_050318_create_subscribers_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id`, `title`, `url_title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About', 'about', 'Nuwono Tasya Guesthouse merupakan sebuah tempat penginapan, dengan mengedepankan budaya adat lampung, yang menjadikannya daya tarik tersendiri. Lokasi dari Nuwono Tasya Guesthouse sendiri juga dapat dibilang cukup strategis. Sistem kepegawaian di Nuwono Tasya juga bersifat half-family, dimana semua pegawai atau karyawan disini dianggap keluarga, tetapi masih dengan profesionalitas kerja masing masing', 1, '2020-07-01 23:05:15', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_ktp` int(16) DEFAULT NULL,
  `no_kk` int(16) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `usia` int(3) DEFAULT NULL,
  `warga_negara` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `gol_darah` varchar(3) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `email`, `username`, `password`, `no_ktp`, `no_kk`, `tempat_lahir`, `tgl_lahir`, `usia`, `warga_negara`, `agama`, `sex`, `pekerjaan`, `alamat`, `gol_darah`, `status`, `pendidikan`) VALUES
(1, 'Alingga Maheswara', 'alingga@mail.com', 'alingga-01', '5c68e2c29e19b6c4284017cd194021b49daf5fa8', 123456789, 987654321, 'Tangerang', '2000-05-17', 21, 'WNI', 'islam', 'laki-laki', 'mahasiswa', 'jl teuku umar', 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `review` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` enum('0','1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval_status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `room_booking_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_number` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT 1,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Available',
  `room_type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `capacity` char(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rooms`
--

INSERT INTO `rooms` (`id`, `room_number`, `description`, `available`, `status`, `room_type_id`, `created_at`, `updated_at`, `capacity`, `deleted_at`) VALUES
(1, '1', '', 1, 'Available', 1, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'VIP', NULL),
(2, '2', '', 1, 'Available', 1, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'VIP', NULL),
(3, '3', '', 1, 'Available', 1, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'VIP', NULL),
(4, '4', '', 1, 'Available', 2, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'DELUXE', NULL),
(5, '5', '', 0, 'Available', 2, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'DELUXE', NULL),
(6, '6', '', 1, 'Available', 2, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'DELUXE', NULL),
(7, '7', '', 0, 'Available', 2, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'DELUXE', NULL),
(8, '8', '', 1, 'Available', 2, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'DELUXE', NULL),
(9, '9', '', 0, 'Available', 2, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'DELUXE', NULL),
(10, '10', '', 1, 'Available', 2, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'DELUXE', NULL),
(11, '11', '', 0, 'Available', 2, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'DELUXE', NULL),
(12, '12', '', 0, 'Available', 3, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'STANDAR', NULL),
(13, '13', '', 1, 'Available', 3, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'STANDAR', NULL),
(14, '14', '', 1, 'Available', 3, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'STANDAR', NULL),
(15, '15', '', 1, 'Available', 3, '2020-07-01 23:05:15', '2020-07-01 23:05:15', 'STANDAR', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `room_bookings`
--

CREATE TABLE `room_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime DEFAULT NULL,
  `extra_bed` int(20) DEFAULT 0,
  `room_cost` int(11) NOT NULL,
  `status` enum('pending','checked_in','checked_out','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment` tinyint(1) DEFAULT 0,
  `bukti` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `room_bookings`
--

INSERT INTO `room_bookings` (`id`, `title`, `room_id`, `user_id`, `start_time`, `end_time`, `extra_bed`, `room_cost`, `status`, `payment`, `bukti`, `created_at`, `updated_at`, `deleted_at`) VALUES
(110, 'VIP (Kanjeng)', 1, 1, '2020-08-08 00:00:00', '2020-08-09 00:00:00', NULL, 300000, 'pending', 0, NULL, '2020-08-07 22:01:53', '2021-07-16 08:31:38', '2021-07-16 08:31:38'),
(111, 'DELUXE (Kyai)', 4, 1, '2020-08-08 00:00:00', '2020-08-09 00:00:00', NULL, 160000, 'pending', 0, NULL, '2020-08-07 22:02:06', '2021-07-16 08:31:38', '2021-07-16 08:31:38'),
(112, 'VIP (Kanjeng)', 2, 1, '2020-08-08 00:00:00', '2020-08-12 00:00:00', NULL, 1200000, 'pending', 0, NULL, '2020-08-07 22:02:21', '2021-07-16 08:31:38', '2021-07-16 08:31:38'),
(113, 'VIP (Kanjeng)', 1, 1, '2021-07-16 00:00:00', '2021-07-17 00:00:00', NULL, 300000, 'pending', 0, NULL, '2021-07-16 09:10:25', '2021-07-16 11:10:30', '2021-07-16 11:10:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `room_types`
--

CREATE TABLE `room_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_per_day` int(11) NOT NULL,
  `extra_bed` int(2) DEFAULT NULL,
  `discount_percentage` int(11) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `room_types`
--

INSERT INTO `room_types` (`id`, `name`, `cost_per_day`, `extra_bed`, `discount_percentage`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'VIP (Kanjeng)', 300000, 2, 0, 'KANJENG', 1, '2020-07-01 23:05:14', '2020-07-01 23:05:14'),
(2, 'DELUXE (Kyai)', 160000, 1, 0, 'KIAY', 1, '2020-07-01 23:05:14', '2020-07-01 23:05:14'),
(3, 'STANDAR (Adien)', 125000, 1, 0, 'ADIEN', 1, '2020-07-01 23:05:14', '2020-07-01 23:05:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_title` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_title` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_text` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `name`, `small_title`, `big_title`, `description`, `link`, `link_text`, `status`, `created_at`, `updated_at`) VALUES
(12, 'tubaba.jpg', 'Portal Pemerintah Tubaba', 'Portal', NULL, NULL, 'View', 1, '2021-07-16 08:49:21', '2021-07-16 08:49:21'),
(13, '1.jpg', 'Gunung Katun Tanjungan', 'Alam', NULL, NULL, 'View', 1, '2021-07-16 08:49:49', '2021-07-16 08:49:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_ket_kepolisian`
--

CREATE TABLE `s_ket_kepolisian` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `penduduk_id` int(11) NOT NULL,
  `form_keterangan` varchar(255) DEFAULT NULL,
  `tgl_surat` date NOT NULL,
  `surat_berakhir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s_ket_kepolisian`
--

INSERT INTO `s_ket_kepolisian` (`id`, `judul`, `nomor_surat`, `penduduk_id`, `form_keterangan`, `tgl_surat`, `surat_berakhir`, `created_at`, `updated_at`) VALUES
(1, 'tes baru', '1/D/2021', 1, NULL, '2021-06-17', '2021-07-17', '2021-06-17 13:16:46', '2021-06-17 13:16:46'),
(2, 'testing akhir', '2/D/2021', 1, 'tessssss', '2021-06-17', '2021-07-17', '2021-06-17 13:19:14', '2021-06-17 13:19:14'),
(3, 'seaaaa', '123', 2, 'sada', '2021-07-23', '2021-07-24', '2021-07-22 19:54:14', '2021-07-22 19:54:14'),
(4, 'sada', '123', 1, 'asdas', '2021-07-23', '2021-07-24', '2021-07-22 19:55:46', '2021-07-22 19:55:46'),
(5, 'sadasssss', '12331', 1, 'asdas', '2021-07-23', '2021-07-24', '2021-07-22 19:56:48', '2021-07-22 19:56:48'),
(6, 'sadas', '123', 32, 'sadsa', '2021-07-22', '2021-07-24', '2021-07-22 19:57:04', '2021-07-22 19:57:04'),
(7, 'tesss aaa', '123', 1, 'teas', '2021-07-22', '2021-07-24', '2021-07-22 20:01:11', '2021-07-22 20:01:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_ket_penduduk`
--

CREATE TABLE `s_ket_penduduk` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `penduduk_id` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tgl_surat` date NOT NULL,
  `surat_berakhir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s_ket_penduduk`
--

INSERT INTO `s_ket_penduduk` (`id`, `judul`, `nomor_surat`, `penduduk_id`, `keterangan`, `tgl_surat`, `surat_berakhir`, `created_at`, `updated_at`) VALUES
(1, 'Testing1', '1/D/2021', 1, 'tes', '2021-06-17', '2021-07-17', '2021-06-17 12:50:25', '2021-06-17 12:50:25'),
(2, 'Tester baru', '2/D/2021', 1, 'tes hasil', '2021-06-17', '2021-07-17', '2021-06-17 13:12:44', '2021-06-17 13:12:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_ket_pengantar`
--

CREATE TABLE `s_ket_pengantar` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nomor_surat` varchar(15) NOT NULL,
  `penduduk_id` int(11) NOT NULL,
  `keperluan` varchar(255) DEFAULT NULL,
  `tgl_surat` date NOT NULL,
  `surat_berakhir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s_ket_pengantar`
--

INSERT INTO `s_ket_pengantar` (`id`, `judul`, `nomor_surat`, `penduduk_id`, `keperluan`, `tgl_surat`, `surat_berakhir`, `created_at`, `updated_at`) VALUES
(12, 'Ket Pengantar 1', '1/D/2021', 1, 'Tester', '2021-06-18', '2021-06-19', '2021-06-17 23:10:36', '2021-06-17 23:10:36'),
(13, 'keterangan', '2/D/2021', 1, 'contoh', '2026-06-18', '2021-07-18', '2021-06-18 01:31:30', '2021-06-18 01:31:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female','others') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nik`, `gender`, `phone`, `email`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Sistem', 'others', '07834542', 'admin', '$2y$10$yMGYfcY0rG.6u8/Drez5/uQ0Gtx.VfloEXBdApGP5Xb..pot8JHCO', 'admin', 1, 'wT3cdKMPMo7Jls4y37wpV6ZTTuyS0Mt5WYl3jIt5gJcXjdkWXSI9oOiZZjbH', '2020-07-12 03:08:38', '2020-07-12 03:08:38'),
(2, 'Alingga', 'Maheswara', 'male', '9866893439', 'alingga@mail.com', '$2y$10$UPwKWivl/BeeMmTBw8ds8Oc3LZA5oP.bpjRouxDjd2lKbWy0v1sRu', 'user', 1, 'iX9xsA0oHD5BIFiAAACt8uFSPC0EOS37Ce4PoK5OAgsXZUb2pP9RRhDbuoKr', '2020-07-01 23:05:14', '2020-07-12 04:00:01'),
(3, 'Assyanggi Okta', 'Harahap', 'male', NULL, 'assyanggi@gmail.com', '$2y$10$BM6xxX1qhdq9GiyG8Qy.lOy8FQh.WjbrIFWutxTRMsI.UcorIQv3W', 'user', 1, 'bxpLh1j51wQizGYWlLrhKsuPtdyaMmOBGleOcPwnIYo81dB4VEz5HZCgz6Nm', '2020-07-09 00:45:56', '2020-07-09 00:45:56'),
(122, 'tester', '0975667', 'male', '0976567', 'tester@mail.com', '$2y$10$sjOWHE2IvT3GqIAOfeeGzeHKChbEpD2OAieIH2k7zoYzZnNLWei3e', 'user', 1, '44oftGpOUhrGF6wZmJzNeCrtKmoJ8DDwhH8DFA9eKtvLkVDeL8ls0s7dveAU', '2020-08-02 23:25:54', '2020-08-02 23:25:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `a1_peraturan_desa`
--
ALTER TABLE `a1_peraturan_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `a2_keputusan_kades`
--
ALTER TABLE `a2_keputusan_kades`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `a3_inventaris_kekayaan_desa`
--
ALTER TABLE `a3_inventaris_kekayaan_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `a4_aparat_desa`
--
ALTER TABLE `a4_aparat_desa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `a4_aparat_desa_niap_unique` (`niap`),
  ADD UNIQUE KEY `a4_aparat_desa_nip_unique` (`nip`);

--
-- Indeks untuk tabel `a5_tanah_kas_desa`
--
ALTER TABLE `a5_tanah_kas_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `a6_tanah_desa`
--
ALTER TABLE `a6_tanah_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `a7_agenda`
--
ALTER TABLE `a7_agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `a8_ekspedisi`
--
ALTER TABLE `a8_ekspedisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `a9_lembar_berita_desa`
--
ALTER TABLE `a9_lembar_berita_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `b1_buku_induk_penduduk`
--
ALTER TABLE `b1_buku_induk_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `b2_buku_mutasi_penduduk`
--
ALTER TABLE `b2_buku_mutasi_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `b3_buku_rekapitulasi_jumlah_penduduk`
--
ALTER TABLE `b3_buku_rekapitulasi_jumlah_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `b4_buku_penduduk_sementara`
--
ALTER TABLE `b4_buku_penduduk_sementara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `b5_buku_ktp_dan_kk`
--
ALTER TABLE `b5_buku_ktp_dan_kk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c1_buku_apbd`
--
ALTER TABLE `c1_buku_apbd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c2_buku_rencana_anggaran`
--
ALTER TABLE `c2_buku_rencana_anggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c3_buku_kas_pembantu`
--
ALTER TABLE `c3_buku_kas_pembantu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c4_buku_kas_umum`
--
ALTER TABLE `c4_buku_kas_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c5_buku_kas_prpl`
--
ALTER TABLE `c5_buku_kas_prpl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c6_buku_bank_desa`
--
ALTER TABLE `c6_buku_bank_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `d1_rencana_kerja_pembangunan`
--
ALTER TABLE `d1_rencana_kerja_pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `d2_kegiatan_pembangunan`
--
ALTER TABLE `d2_kegiatan_pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `d3_inventaris_hasil_pembangunan`
--
ALTER TABLE `d3_inventaris_hasil_pembangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `d4_kader_pemberdayaan_masy`
--
ALTER TABLE `d4_kader_pemberdayaan_masy`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_name_unique` (`name`);

--
-- Indeks untuk tabel `events2`
--
ALTER TABLE `events2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventsrooms_room_id_foreign` (`room_id`),
  ADD KEY `eventsrooms_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `event_bookings`
--
ALTER TABLE `event_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_bookings_user_id_index` (`user_id`),
  ADD KEY `event_bookings_event_id_index` (`event_id`);

--
-- Indeks untuk tabel `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `facilities_name_unique` (`name`);

--
-- Indeks untuk tabel `facility_room_type`
--
ALTER TABLE `facility_room_type`
  ADD KEY `facility_room_type_facility_id_index` (`facility_id`),
  ADD KEY `facility_room_type_room_type_id_index` (`room_type_id`);

--
-- Indeks untuk tabel `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_room_type_id_index` (`room_type_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_room_booking_id_index` (`room_booking_id`);

--
-- Indeks untuk tabel `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_room_number_unique` (`room_number`),
  ADD KEY `rooms_room_type_id_index` (`room_type_id`);

--
-- Indeks untuk tabel `room_bookings`
--
ALTER TABLE `room_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_bookings_room_id_index` (`room_id`),
  ADD KEY `room_bookings_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `room_types_name_unique` (`name`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `s_ket_kepolisian`
--
ALTER TABLE `s_ket_kepolisian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_catatan_penduduk_id` (`penduduk_id`);

--
-- Indeks untuk tabel `s_ket_penduduk`
--
ALTER TABLE `s_ket_penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ket_penduduk_id` (`penduduk_id`);

--
-- Indeks untuk tabel `s_ket_pengantar`
--
ALTER TABLE `s_ket_pengantar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_penduduk_id` (`penduduk_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `a1_peraturan_desa`
--
ALTER TABLE `a1_peraturan_desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `a2_keputusan_kades`
--
ALTER TABLE `a2_keputusan_kades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `a3_inventaris_kekayaan_desa`
--
ALTER TABLE `a3_inventaris_kekayaan_desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `a4_aparat_desa`
--
ALTER TABLE `a4_aparat_desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `a5_tanah_kas_desa`
--
ALTER TABLE `a5_tanah_kas_desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `a6_tanah_desa`
--
ALTER TABLE `a6_tanah_desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `a7_agenda`
--
ALTER TABLE `a7_agenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `a8_ekspedisi`
--
ALTER TABLE `a8_ekspedisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `a9_lembar_berita_desa`
--
ALTER TABLE `a9_lembar_berita_desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `b1_buku_induk_penduduk`
--
ALTER TABLE `b1_buku_induk_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `b2_buku_mutasi_penduduk`
--
ALTER TABLE `b2_buku_mutasi_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `b3_buku_rekapitulasi_jumlah_penduduk`
--
ALTER TABLE `b3_buku_rekapitulasi_jumlah_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `b4_buku_penduduk_sementara`
--
ALTER TABLE `b4_buku_penduduk_sementara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `b5_buku_ktp_dan_kk`
--
ALTER TABLE `b5_buku_ktp_dan_kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `c1_buku_apbd`
--
ALTER TABLE `c1_buku_apbd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `c2_buku_rencana_anggaran`
--
ALTER TABLE `c2_buku_rencana_anggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `c3_buku_kas_pembantu`
--
ALTER TABLE `c3_buku_kas_pembantu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `c4_buku_kas_umum`
--
ALTER TABLE `c4_buku_kas_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `c5_buku_kas_prpl`
--
ALTER TABLE `c5_buku_kas_prpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `c6_buku_bank_desa`
--
ALTER TABLE `c6_buku_bank_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `d1_rencana_kerja_pembangunan`
--
ALTER TABLE `d1_rencana_kerja_pembangunan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `d2_kegiatan_pembangunan`
--
ALTER TABLE `d2_kegiatan_pembangunan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `d3_inventaris_hasil_pembangunan`
--
ALTER TABLE `d3_inventaris_hasil_pembangunan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `d4_kader_pemberdayaan_masy`
--
ALTER TABLE `d4_kader_pemberdayaan_masy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `events2`
--
ALTER TABLE `events2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `event_bookings`
--
ALTER TABLE `event_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT untuk tabel `room_bookings`
--
ALTER TABLE `room_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `s_ket_kepolisian`
--
ALTER TABLE `s_ket_kepolisian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `events2`
--
ALTER TABLE `events2`
  ADD CONSTRAINT `eventsrooms_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eventsrooms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `event_bookings`
--
ALTER TABLE `event_bookings`
  ADD CONSTRAINT `event_bookings_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `facility_room_type`
--
ALTER TABLE `facility_room_type`
  ADD CONSTRAINT `facility_room_type_facility_id_foreign` FOREIGN KEY (`facility_id`) REFERENCES `facilities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `facility_room_type_room_type_id_foreign` FOREIGN KEY (`room_type_id`) REFERENCES `room_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_room_type_id_foreign` FOREIGN KEY (`room_type_id`) REFERENCES `room_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_room_booking_id_foreign` FOREIGN KEY (`room_booking_id`) REFERENCES `room_bookings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_room_type_id_foreign` FOREIGN KEY (`room_type_id`) REFERENCES `room_types` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `room_bookings`
--
ALTER TABLE `room_bookings`
  ADD CONSTRAINT `room_bookings_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `room_bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

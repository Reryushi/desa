@extends('layouts.admin')
@section('content')
<style>
    .form-control {
        background-color:white;
    }

    .card {
        background-color:#ebedf0;
    }
</style>

<!-- style="padding:20px " -->
<div class="card">
    <div class="card-header" style="padding:10px ">
        Buat Data Induk Penduduk
    </div>

    <div class="card-body">
    <form  style="padding:20px "  action="{{ route("admin.buku_apbd.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h4 style="text-align:center; padding-top:30px">BUKU ANGGARAN PENDAPATAN DAN BELANJA DESA</h4>
            <h5 style="text-align:center;">PEMERINTAH DESA GUNUNG KATUN TANJUNGAN</h5>
            <h5 style="text-align:center; padding-bottom:30px">TAHUN ANGGARAN <input type="text" id="pendapatan_1" 
                        name="tahun_anggaran" class="" 
                        value="{{$buku_apbd->tahun_anggaran}}"></h5>
                
            <table class=" table table-bordered  table-hover datatable">
            
                <thead>
                <tr>
                    <th colspan="4">Kode Rekening</th>
                    <th>Uraian</th>
                    <th>Anggaran (Rp.) </th>
                    <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>PENDAPATAN</td>
                    <td> 
                        <input type="number" id="pendapatan_1" 
                        name="anggaran_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_1}}">
                    </td>
                    <td>
                        <input type="text" id="ket_1" 
                        name="ket_1" class="form-control" 
                        value="{{$buku_apbd->ket_1}}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td> </td>
                    <td> </td>
                    <td>Pendapatan Asli Desa</td>
                    <td> 
                        <input type="number" id="" 
                        name="anggaran_1_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_1}}">
                    </td>
                    <td>
                        <input type="text" id="" 
                        name="ket_1_1" class="form-control" 
                        value="{{$buku_apbd->ket_1_1}}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td> </td>
                    <td>Hasil Usaha</td>
                    <td> 
                        <input type="number" id="" 
                        name="anggaran_1_1_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_1_1}}">
                    </td>
                    <td>
                        <input type="text" id="" 
                        name="ket_1_1_1" class="form-control" 
                        value="{{$buku_apbd->ket_1_1_1}}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>2</td>
                    <td> </td>
                    <td>Swadaya,  Partisipasi dan Gotong  Royong</td>
                    <td> 
                        <input type="number" id="" 
                        name="anggaran_1_1_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_1_2}}">
                    </td>
                    <td>
                        <input type="text" id="" 
                        name="ket_1_1_2" class="form-control" 
                        value="{{$buku_apbd->ket_1_1_2}}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>3</td>
                    <td> </td>
                    <td>Lain-lain Pendapatan Asli Desa&nbsp;&nbsp;&nbsp;yang sah</td>
                    <td> 
                        <input type="number" id="" 
                        name="anggaran_1_1_3" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_1_3}}">
                    </td>
                    <td>
                        <input type="text" id="" 
                        name="ket_1_1_3" class="form-control" 
                        value="{{$buku_apbd->ket_1_1_3}}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td> </td>
                    <td> </td>
                    <td>Pendapatan Transfer</td>
                    <td> 
                        <input type="number" id="" 
                        name="anggaran_1_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_2}}">
                    </td>
                    <td>
                        <input type="text" id="" 
                        name="ket_1_2" class="form-control" 
                        value="{{$buku_apbd->ket_1_2}}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>1</td>
                    <td> </td>
                    <td>Dana Desa</td>
                    <td> 
                        <input type="number" id="" 
                        name="anggaran_1_2_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_2_1}}">
                    </td>
                    <td>
                        <input type="text" id="" 
                        name="ket_1_2_1" class="form-control" 
                        value="{{$buku_apbd->ket_1_2_1}}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                    <td> </td>
                    <td>Bagian dari hasil pajak&nbsp;&nbsp;&nbsp;&amp; retribusi daerah Kabupaten/ Kota</td>
                    <td> 
                        <input type="number" id="" 
                        name="anggaran_1_2_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_2_2}}">
                    </td>
                    <td>
                        <input type="text" id="" 
                        name="ket_1_2_2" class="form-control" 
                        value="{{$buku_apbd->ket_1_2_2}}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td> </td>
                    <td>Alokasi Dana Desa</td>
                    <td> 
                        <input type="number"
                        name="anggaran_1_2_3" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_2_3}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_1_2_3" class="form-control" 
                        value="{{$buku_apbd->ket_1_2_3}}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>4</td>
                    <td> </td>
                    <td>Bantuan Keuangan</td>
                    <td> 
                        <input type="number-"
                        name="anggaran_1_2_4" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_2_4}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_1_2_4" class="form-control" 
                        value="{{$buku_apbd->ket_1_2_4}}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>4</td>
                    <td>1</td>
                    <td>Bantuan Provinsi</td>
                    <td> 
                        <input type="number"
                        name="anggaran_1_2_4_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_2_4_1}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_1_2_4_1" class="form-control" 
                        value="{{$buku_apbd->ket_1_2_4_1}}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>4</td>
                    <td>2</td>
                    <td>Bantuan Kabupaten / Kota</td>
                    <td> 
                        <input type="number"
                        name="anggaran_1_2_4_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_2_4_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_1_2_4_2" class="form-control" 
                        value="{{$buku_apbd->ket_1_2_4_2}}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>3</td>
                    <td> </td>
                    <td> </td>
                    <td>Pendapatan Lain lain</td>
                    <td> 
                        <input type="number"
                        name="anggaran_1_3" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_3}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_1_3" class="form-control" 
                        value="{{$buku_apbd->ket_1_3}}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>3</td>
                    <td>1</td>
                    <td> </td>
                    <td>Hibah&nbsp;&nbsp;&nbsp; dan Sumbangan dari pihak ke-3 yang tidak mengikat</td>
                    <td> 
                        <input type="number"
                        name="anggaran_1_3_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_3_1}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_1_3_1" class="form-control" 
                        value="{{$buku_apbd->ket_1_3_1}}">
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>3</td>
                    <td>2</td>
                    <td> </td>
                    <td>Lain-lain&nbsp;&nbsp;&nbsp; Pendapatan Desa yang sah</td>
                    <td> 
                        <input type="number"
                        name="anggaran_1_3_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_1_3_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_1_3_2" class="form-control" 
                        value="{{$buku_apbd->ket_1_3_2}}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>JUMLAH PENDAPATAN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>BELANJA</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2" class="form-control" 
                        value="{{$buku_apbd->ket_2}}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1</td>
                    <td> </td>
                    <td> </td>
                    <td>Bidang Penyelenggaraan&nbsp;&nbsp;&nbsp; Pemerintahan Desa</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1" class="form-control" 
                        value="{{$buku_apbd->ket_2_1}}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td> </td>
                    <td>Penghasilan Tetap dan Tunjangan</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_1}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_1" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_1}}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>Belanja Pegawai:</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_1_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_1_1}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_1_1" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_1_1}}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-    Penghasilan Tetap&nbsp;&nbsp;&nbsp;Kepala Desa  dan Perangkat</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_1_1_a" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_1_1_a}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_1_1_a" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_1_1_a}}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-    Tunjangan Kepala&nbsp;&nbsp;&nbsp;Desa dan Perangkat </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_1_1_b" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_1_1_b}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_1_1_b" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_1_1_b}}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-     Tunjangan&nbsp;&nbsp;&nbsp;BPD </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_1_1_c" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_1_1_c}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_1_1_c" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_1_1_c}}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1</td>
                    <td>2</td>
                    <td> </td>
                    <td>Operasional Perkantoran</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2}}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                    <td>Belanja Barang dan Jasa</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_2}}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Alat Tulis&nbsp;&nbsp;&nbsp;Kantor</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_2_a" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_2_a}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_2_a" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_2_a}}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Benda&nbsp;&nbsp;&nbsp;POS</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_2_b" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_2_b}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_2_b" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_2_b}}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Pakaian&nbsp;&nbsp;&nbsp;Dinas dan Atribut</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_2_c" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_2_c }}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_2_c" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_2_c }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Pakaian&nbsp;&nbsp;&nbsp;Dinas</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_2_d" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_2_d}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_2_d" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_2_d }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Alat&nbsp;&nbsp;&nbsp;dan Bahan Kebersihan</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_2_e" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_2_e }}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_2_e" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_2_e }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Perjalanan&nbsp;&nbsp;&nbsp;Dinas</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_2_f" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_2_f }}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_2_f" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_2_f }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Pemeliharaan</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_2_g" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_2_g }}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_2_g" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_2_g }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Air,&nbsp;&nbsp;&nbsp;Listrik,dasn Telepon</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_2_h" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_2_h }}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_2_h" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_2_h }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Honor</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_2_i" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_2_i }}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_2_i" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_2_i }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   dst…………………..</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_2_j" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_2_j }}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_2_j" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_2_j }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>Belanja Modal</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_3" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_3 }}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_3" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_3 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Komputer</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_3_a" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_3_a }}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_3_a" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_3_a }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Meja&nbsp;&nbsp;&nbsp;dan Kursi</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_3_b" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_3_b }}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_3_b" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_3_b }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Mesin&nbsp;&nbsp;&nbsp;TIK</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_3_c" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_3_c }}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_3_c" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_3_c }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   dst……………………..</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_2_3_d" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_2_3_d}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_2_3_d" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_2_3_d }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1</td>
                    <td>3</td>
                    <td> </td>
                    <td>Operasional BPD</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_3" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_3}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_3" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_3 }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1</td>
                    <td>3</td>
                    <td>2</td>
                    <td>Belanja Barang dan Jasa</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_3_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_3_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_3_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_3_2 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   ATK</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_3_2_a" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_3_2_a}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_3_2_a" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_3_2_a }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Penggandaan</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_3_2_b" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_3_2_b}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_3_2_b" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_3_2_b }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Konsumsi&nbsp;&nbsp;&nbsp;Rapat</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_3_2_c" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_3_2_c}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_3_2_c" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_3_2_c }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   dst&nbsp;&nbsp;&nbsp;………………………….</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_3_2_d" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_3_2_d}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_3_2_d" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_3_2_d }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1</td>
                    <td>4</td>
                    <td> </td>
                    <td>Operasional RT/ RW</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_4" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_4}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_4" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_4 }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1</td>
                    <td>4</td>
                    <td>2</td>
                    <td>Belanja Barang dan Jasa</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_4_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_4_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_4_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_4_2 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   ATK</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_4_2_a" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_4_2_a}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_4_2_a" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_4_2_a }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Penggandaan</td>
                    <td> 
                        <input type="text"
                        name="anggaran_2_1_4_2_b" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_4_2_b}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_4_2_b" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_4_2_b }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Konsumsi&nbsp;&nbsp;&nbsp;Rapat</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_4_2_c" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_4_2_c}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_4_2_c" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_4_2_c }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   dst&nbsp;&nbsp;&nbsp;………………………….</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_1_4_2_d" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_1_4_2_d}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_1_4_2_d" class="form-control" 
                        value="{{$buku_apbd->ket_2_1_4_2_d }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td> </td>
                    <td> </td>
                    <td>Bidang Pelaksanaan Pembangunan&nbsp;&nbsp;&nbsp;Desa</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_2 }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td> </td>
                    <td>Perbaikan Saluran Irigasi</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_1}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_1" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_1 }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>2</td>
                    <td>Belanja Barang dan jasa</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_1_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_1_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_1_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_1_2 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Upah&nbsp;&nbsp;&nbsp;Kerja</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_1_2_a" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_1_2_a}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_1_2_a" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_1_2_a }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Honor</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_1_2_b" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_1_2_b}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_1_2_b" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_1_2_b }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   dst………………..</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_1_2_c" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_1_2_c}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_1_2_c" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_1_2_c }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>1</td>
                    <td>3</td>
                    <td>Belanja Modal</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_1_3" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_1_3}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_1_3" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_1_3 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Semen</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_1_3_a" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_1_3_a}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_1_3_a" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_1_3_a }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   Material</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_1_3_b" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_1_3_b}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_1_3_b" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_1_3_b }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-   dst…………</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_1_3_c" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_1_3_c}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_1_3_c" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_1_3_c }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td> </td>
                    <td>Pengaspalan  jalan &nbsp;&nbsp;&nbsp;desa </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_2 }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>Belanja Barang dan Jasa :</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_2_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_2_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_2_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_2_2 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Upah Kerja</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_2_2_a" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_2_2_a}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_2_2_a" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_2_2_a }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Honor</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_2_2_b" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_2_2_b}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_2_2_b" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_2_2_b }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  dst…………………………………..</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_2_2_c" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_2_2_c}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_2_2_c" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_2_2_c }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>3</td>
                    <td>Belanja  Modal:</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_2_3" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_2_3}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_2_3" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_2_3 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Aspal </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_2_3_a" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_2_3_a}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_2_3_a" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_2_3_a }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Pasir </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_2_3_b" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_2_3_b}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_2_3_b" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_2_3_b }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  dst ……………</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_2_3_c" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_2_3_c}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_2_3_c" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_2_3_c }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2</td>
                    <td>3</td>
                    <td> </td>
                    <td>Kegiatan……………………………</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_2_3" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_2_3}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_2_3" class="form-control" 
                        value="{{$buku_apbd->ket_2_2_3 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>3</td>
                    <td> </td>
                    <td> </td>
                    <td>Bidang Pembinaan&nbsp;&nbsp;&nbsp;Kemasyarakatan </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_3" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_3}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_3" class="form-control" 
                        value="{{$buku_apbd->ket_2_3 }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>3</td>
                    <td>1</td>
                    <td> </td>
                    <td>Kegiatan Pembinaan Ketentraman dan&nbsp;&nbsp;&nbsp;Ketertiban</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_3_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_3_1}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_3_1" class="form-control" 
                        value="{{$buku_apbd->ket_2_3_1 }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>3</td>
                    <td>1</td>
                    <td>2</td>
                    <td>Belanja Barang dan Jasa:</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_3_1_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_3_1_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_3_1_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_3_1_2 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Honor&nbsp;&nbsp;&nbsp;Pelatih </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_3_1_2_a" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_3_1_2_a}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_3_1_2_a" class="form-control" 
                        value="{{$buku_apbd->ket_2_3_1_2_a }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Konsumsi </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_3_1_2_b" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_3_1_2_b}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_3_1_2_b" class="form-control" 
                        value="{{$buku_apbd->ket_2_3_1_2_b }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Bahan&nbsp;&nbsp;&nbsp;Pelatihan</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_3_1_2_c" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_3_1_2_c}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_3_1_2_c" class="form-control" 
                        value="{{$buku_apbd->ket_2_3_1_2_c }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  dst…………………</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_3_1_2_d" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_3_1_2_d}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_3_1_2_d" class="form-control" 
                        value="{{$buku_apbd->ket_2_3_1_2_d }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>3</td>
                    <td>2</td>
                    <td> </td>
                    <td>Kegiatan…………………….</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_3_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_3_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_3_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_3_2 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>4</td>
                    <td> </td>
                    <td> </td>
                    <td>Bidang Pemberdayaan&nbsp;&nbsp;&nbsp;Masyarakat </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_4" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_4}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_4" class="form-control" 
                        value="{{$buku_apbd->ket_2_4 }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>4</td>
                    <td>1</td>
                    <td> </td>
                    <td>Kegiatan Pelatihan Kepala Desa dan&nbsp;&nbsp;&nbsp;Perangkat</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_4_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_4_1}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_4_1" class="form-control" 
                        value="{{$buku_apbd->ket_2_4_1 }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>4</td>
                    <td>1</td>
                    <td>2</td>
                    <td>Belanja Barang  dan Jasa:</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_4_1_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_4_1_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_4_1_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_4_1_2 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Honor&nbsp;&nbsp;&nbsp;pelatih</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_4_1_2_a" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_4_1_2_a}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_4_1_2_a" class="form-control" 
                        value="{{$buku_apbd->ket_2_4_1_2_a }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Konsumsi  </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_4_1_2_b" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_4_1_2_b}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_4_1_2_b" class="form-control" 
                        value="{{$buku_apbd->ket_2_4_1_2_b }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Bahan&nbsp;&nbsp;&nbsp;pelatihan </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_4_1_2_c" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_4_1_2_c}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_4_1_2_c" class="form-control" 
                        value="{{$buku_apbd->ket_2_4_1_2_c }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  dst…………………</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_4_1_2_d" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_4_1_2_d}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_4_1_2_d" class="form-control" 
                        value="{{$buku_apbd->ket_2_4_1_2_d }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>4</td>
                    <td>2</td>
                    <td> </td>
                    <td>Kegiatan………………………..</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_4_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_4_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_4_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_4_2 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>5</td>
                    <td> </td>
                    <td> </td>
                    <td>Bidang Tak Terduga </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_5" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_5}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_5" class="form-control" 
                        value="{{$buku_apbd->ket_2_5 }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>5</td>
                    <td>1</td>
                    <td> </td>
                    <td>Kegiatan Kejadian Luar Biasa </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_5_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_5_1}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_5_1" class="form-control" 
                        value="{{$buku_apbd->ket_2_5_1 }}">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>5</td>
                    <td>1</td>
                    <td>2</td>
                    <td>Belanja Barang  dan Jasa:</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_5_1_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_5_1_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_5_1_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_5_1_2 }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Honor&nbsp;&nbsp;&nbsp;tim </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_5_1_2_a" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_5_1_2_a}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_5_1_2_a" class="form-control" 
                        value="{{$buku_apbd->ket_2_5_1_2_a }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Konsumsi</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_5_1_2_b" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_5_1_2_b}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_5_1_2_b" class="form-control" 
                        value="{{$buku_apbd->ket_2_5_1_2_b }}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  Obat-obatan </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_5_1_2_c" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_5_1_2_c}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_5_1_2_c" class="form-control" 
                        value="{{$buku_apbd->ket_2_5_1_2_c}}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>-  dst…………………… </td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_5_1_2_d" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_5_1_2_d}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_5_1_2_d" class="form-control" 
                        value="{{$buku_apbd->ket_2_5_1_2_d}}">
                    </td>
                </tr>
                
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2 </td>
                    <td>5 </td>
                    <td>2 </td>
                    <td> </td>
                    <td>Kegiatan………………………</td>
                    <td> 
                        <input type="number"
                        name="anggaran_2_5_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_2_5_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_2_5_2" class="form-control" 
                        value="{{$buku_apbd->ket_2_5_2}}">
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>JUMLAH  BELANJA </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td>SURPLUS / DEFISIT</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td>PEMBIAYAAN </td>
                    <td> 
                        <input type="number"
                        name="anggaran_3" class="form-control" 
                        value="{{$buku_apbd->anggaran_3}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_3" class="form-control" 
                        value="{{$buku_apbd->ket_3}}">
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1</td>
                    <td></td>
                    <td> </td>
                    <td>Penerimaan Pembiayaan </td>
                    <td> 
                        <input type="number"
                        name="anggaran_3_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_3_1}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_3_1" class="form-control" 
                        value="{{$buku_apbd->ket_3_1}}">
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1</td>
                    <td>1</td>
                    <td> </td>
                    <td>SILPA </td>
                    <td> 
                        <input type="number"
                        name="anggaran_3_1_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_3_1_1}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_3_1_1" class="form-control" 
                        value="{{$buku_apbd->ket_3_1_1}}">
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1 </td>
                    <td>2 </td>
                    <td> </td>
                    <td>Pencairan Dana Cadangan </td>
                    <td> 
                        <input type="number"
                        name="anggaran_3_1_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_3_1_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_3_1_2" class="form-control" 
                        value="{{$buku_apbd->ket_3_1_2}}">
                    </td>
                </tr>
                <tr>
                    <td>3 </td>
                    <td>1 </td>
                    <td>3 </td>
                    <td> </td>
                    <td>Hasil Kekayaan Desa Yang&nbsp;&nbsp;&nbsp;dipisahkan </td>
                    <td> 
                        <input type="number"
                        name="anggaran_3_1_3" class="form-control" 
                        value="{{$buku_apbd->anggaran_3_1_3}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_3_1_3" class="form-control" 
                        value="{{$buku_apbd->ket_3_1_3}}">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td> </td>
                    <td>JUMLAH  ( RP )</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2</td>
                    <td></td>
                    <td> </td>
                    <td>Pengeluaran   Pembiayaan </td>
                    <td> 
                        <input type="number"
                        name="anggaran_3_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_3_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_3_2" class="form-control" 
                        value="{{$buku_apbd->ket_3_2}}">
                    </td>
                </tr>
                <tr>
                    <td>3 </td>
                    <td>2 </td>
                    <td>1 </td>
                    <td> </td>
                    <td>Pembentukan Dana Cadangan </td>
                    <td> 
                        <input type="number"
                        name="anggaran_3_2_1" class="form-control" 
                        value="{{$buku_apbd->anggaran_3_2_1}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_3_2_1" class="form-control" 
                        value="{{$buku_apbd->ket_3_2_1}}">
                    </td>
                </tr>
                <tr>
                    <td>3 </td>
                    <td>2 </td>
                    <td>2 </td>
                    <td> </td>
                    <td>Penyertaan Modal Desa </td>
                    <td> 
                        <input type="number"
                        name="anggaran_3_2_2" class="form-control" 
                        value="{{$buku_apbd->anggaran_3_2_2}}">
                    </td>
                    <td>
                        <input type="text"
                        name="ket_3_2_2" class="form-control" 
                        value="{{$buku_apbd->ket_3_2_2}}">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>JUMLAH ( RP )</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>

            </table>

            <h5 style="text-align:right; padding:50px 120px 0 0">DISETUJUI OLEH</h5>
            <h5 style="text-align:right;">KEPALA DESA GUNUNG KATUN TANJUNGAN</h5>
            <h5 style="text-align:right; padding:50px 180px 0 0">TTD</h5>
            <h5 style="text-align:right; padding:0 110px 0 0">(...................................)</h5>  
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
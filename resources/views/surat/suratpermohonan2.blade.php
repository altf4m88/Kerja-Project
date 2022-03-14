<!DOCTYPE html>
<html>
<head>
    <title>Surat Permohonan Kelompok</title>
    <style>
        body{
            margin-left: 60px;
            margin-right: 60px;
        }
    </style>
</head>
<body>
    <p style="text-align: center">Sekolah Menengah Kejuruan Wikrama <br>
    Jalan Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim <br> Kota Bogor  Provinsi Jawa Barat , Kode Pos 16146 <br>
    Telepon : (0251) 8242411 , Email : prohumasi@smkwikrama.net <br>
    Laman : www.smkwikrama.sch.id</p>
    <hr>

    <p>No   : {{ $date }}</p>
    <p>Hal   : Permohonaan Praktik Kerja Lapangan</p>
    <p>Lampiran   : 1 Berkas</p>
    <br>
    <p>Yth. {{ $penjabat }}</p>
    <p>{{ $namaperusahaan }}</p>
    <p>{{ $alamatperusahaan }}</p>
    {{-- <p>{{ $perusahaan }}</p> --}}
    {{-- <p>{{ $alamat_perusahaan }}</p> --}}
    <br>
    <p>Dengan hormat,</p>
    <p style="text-align: justify">dalam rangka pelaksanaan Pendidikan Vokasi terkait dengan program <i>link and match</i> 
    guna meningkatkan kompetensi, peserta didik diwajibkan untuk melaksanakan Praktik
    Kerja Lapangan (PKL). Oleh karena itu kami mengajukan permohonan kepada Bapak/ibu
    Pimpinan Perusahaan agar dapat menerima peserta didik kami sebagai berikut (terlampir);</p>

    

    <p style="text-align: justify">Demikian surat permohonan ini kami ajukan, atas perhatian Bapak/Ibu, kami
    mengucapkan terima kasih.</p>
    <br>
    <br>
    <br>
    <p style="float: right;">Bogor , {{ $date }}</p>
    <br>
    <p style="margin-left:82%; margin-top:20px">Kepala SMK</p>
        <br>
        <br>
        <br>
        <br>
        <br>
    <p style="float: right;"><b>Iin Mulyani, S.Si.</b></p>
    
    <form style="margin-top: 60%;">
        <table border="1" style="margin-left: 20px;">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Kompetensi Keahlian</td>
                <td>Kelas</td>
            </tr>
            @foreach ($siswa as $item)
            <tr>
                <td>{{$item ['no']}}</td>
                <td>{{$item ['nama']}}</td>
                <td>{{$item ['kompetensikeahlian']}}</td>
                <td>{{$item ['kelas']}}</td>
            </tr>
            @endforeach
        </table>
    </form>


</body>

</html>
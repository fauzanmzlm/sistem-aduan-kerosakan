<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        
@import url(https://fonts.googleapis.com/css?family=Roboto:100,300,400,900,700,500,300,100);
*{
  margin: 0;
  box-sizing: border-box;

}
body{
  background: #ffffff;
  font-family: 'Roboto', sans-serif;

  font-size: 13px;
  color: rgb(0, 0, 0);
}
::selection {background: #f31544; color: #FFF;}
::moz-selection {background: #f31544; color: #FFF;}
/* h1{
  font-size: 1.5em;
  color: #222;
}
h2{font-size: .9em;}
h3{
  font-size: 1.2em;
  font-weight: 300;
  line-height: 2em;
}
p{
  font-size: .7em;
  color: #666;
  line-height: 1.2em;
} */

.main-table {
  width: 100%;
  /* border: 1px solid black; */
  border-collapse: collapse;
}
.main-table > tbody > tr > td {
  border: 1px solid black;
}

.table-4 {
    border-collapse: collapse;
    width: 100%;
    /* background-color: #f31544; */
}
.table-4 > tbody > tr {
    border: none;
}
.table-4 > tbody > td {
    border: none;
}
.table-4 tbody td:nth-child(1) {
    width: 60px;
}
.table-4 tbody td:nth-child(2) {
    width: 10px;
    text-align: center;
}
.table-4 tbody td:nth-child(3) {
    /* width: 80px; */
}


.table-5 {
    border-collapse: collapse;
    width: 100%;
    /* background-color: blue; */
}
.table-5 > tbody > tr {
    border: none;
}
.table-5 > tbody > td {
    border: none;
}
.table-5 tbody td:nth-child(1) {
    width: 180px;
}
.table-5 tbody td:nth-child(2) {
    width: 10px;
    text-align: center;
}
.table-5 tbody td:nth-child(3) {
    /* width: 80px; */
}


.table-6 {
    border-collapse: collapse;
    width: 100%;
    /* background-color: yellow; */
    /* padding: 0px 5px 0px 5px;  */
}
.table-6 tbody tr:nth-child(1) td {
    text-align: center;
}
.table-6 tbody td {
    border: 1px solid black;
}
.table-6 tbody tr td:nth-child(1) {
    width: 30px;
    text-align: center;
}
.table-6 tbody tr td:nth-child(2) {
    /* text-align: left; */
}
.table-6 tbody tr td:nth-child(3) {
    width: 90px;
}




.table-7 {
    border-collapse: collapse;
    width: 100%;
    /* background-color: rgb(36, 148, 54); */
}
/* .table-7 tbody tr:nth-child(1) td {
    text-align: center;
}
.table-7 tbody td {
    border: 1px solid black;
}
.table-7 tbody tr td:nth-child(1) {
    width: 30px;
    text-align: center;
}
.table-7 tbody tr td:nth-child(2) {
    text-align: left;
}
.table-7 tbody tr td:nth-child(3) {
    width: 90px;
} */




.table-8 {
    border-collapse: collapse;
    width: 100%;
    /* background-color: cyan; */
}




#outer-circle {
    margin: auto;
    background: #000000;
    border-radius: 50%;
    height: 50px;
    width: 65px;
    position: relative;
    /* 
        Child elements with absolute positioning will be 
        positioned relative to this div 
    */
 }
    #inner-circle {
        position: absolute;
        background: #ffffff;
        border-radius: 50%;
        moz-border-radius: 50%;
        webkit-border-radius: 50%;
        height: 49px;
        width: 64px;
        /*
            Put top edge and left edge in the center
        */
        top: 50%;
        left: 50%;
        margin: -24.5px 0px 0px -32px;
        /* 
            Offset the position correctly with
            minus half of the width and minus half of the height 
        */
    }
    </style>
</head>

<body>

    <div id="form">
        <div class="" style="margin: 30px;">
            <div style="margin-bottom: 10px;">
                <table style="width: 100%;">
                    <tbody>
                        <tr>
                            <td><p><u><b>BORANG LAPORAN KEROSAKAN INFRASTRUKTUR (BLKI)</b></u></p></td>
                        </tr>
                        <tr>
                            <td><p>Diisi dalam 3 salinan (Bercop Penerimaan) dan disimpan oleh:</p></td>
                        </tr>
                        <tr>
                            <td align="left">
                                <p>1 salinan untuk Pelapor</p>
                                <p>1 salinan untuk Penolong Jurutera</p>
                                <p>1 salinan Pegawai jabatan</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <table class="main-table">
                <tbody>
                    <tr>
                        <td width="65%">
                            <div style="padding: 10px 10px 10px 10px;">
                                <table class="table-4">
                                    <tbody>
                                        <tr>
                                            <td>JABATAN</td>
                                            <td>:</td>
                                            <td>JTMK</td>
                                        </tr>
                                        <tr>
                                            <td>LOKASI</td>
                                            <td>:</td>
                                            <td>KG. MENGKUANG</td>
                                        </tr>
                                        <tr>
                                            <td>TARIKH</td>
                                            <td>:</td>
                                            <td>10/10/2022</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                        <td align="center">
                            <div><b><i>Diisi oleh Penolong Jurutera</i></b></div>
                            <div>(Bil.Aduan)</div>
                            <div>
                                <img width="80px" height="40px" src="{{ asset('argon/img/oval.png') }}" alt="">
                            </div>
                            <div style="position: absolute;
                                top: 186px;
                                left: 635px;
                                transform: translate(-50%, -50%); 
                                width: 70px; 
                                text-align: center;">
                                12
                            </div>
                            <div>Cop Penerimaan</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div style="margin: 10px 10px 10px 10px;">
                                <table class="table-7">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" align="left">
                                                <b>BUTIRAN KEROSAKAN INFRASTRUKTUR DAN PERALATAN</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="65%"></td>
                                            <td>
                                                <div style="margin: 55px 10px 10px 10px;">
                                                    <table style="width: 100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td style="border-bottom: 1px solid black; width: 200px;"></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>(Nama : MUHAMMAD FAUZAN<span style="float: right;">)</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>Tarikh : 10/10/2022</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><i>(Pegawai yang melapor kerosakan hendaklah manandatangani ruangan yang disediakan)</i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div style="padding: 10px 10px 20px 10px;"><b>Tindakan Penolong Jurutera :</b></div>
                            <div style="margin: 0px 20px 0px 20px;">
                                <table class="table-6">
                                    <tbody>
                                        <tr>
                                            <td>Bil</td>
                                            <td>Kategori Kerosakan</td>
                                            <td>Tandakan (/)</td>
                                        </tr>
                                        <tr>
                                            <td>a</td>
                                            <td>Kerosakan yang boleh dibaiki terus</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>b</td>
                                            <td>Kerosakan yang boleh dibaiki tetapi memerlukan perolehan alat ganti</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>c</td>
                                            <td>Kerosakan yang perlu dibaiki oleh pembekal luar</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>d</td>
                                            <td>Kerosakan yang tidak ekonomi untuk dibaiki</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="margin: 10px;">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Telah diperiksa pada :</td>
                                            <td align="center" style="border-bottom: 1px dotted black; width: 120px;">10/10/2020</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="margin: 20px 10px 10px 10px;">
                                <table class="table-8">
                                    <tbody>
                                        <tr>
                                            <td style="width: 60px;">Ulasan :</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid black;">Lorem Ipsum Donor Sit Amet</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid black;">Lorem Ipsum Donor Sit Amet</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="padding: 75px 10px 10px 10px;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>(Nama : MUHAMMAD FAUZAN<span style="float: right;">)</span></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Penolong Jurutera JA29 PKT</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Tarikh :</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div style="padding: 10px 10px 10px 10px;"><b>Pengesahan Pegawai Pembangunan/PPP/Ketua Unit</b></div>
                            <div style="padding: 60px 10px 10px 10px;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td style="border-bottom: 1px solid black; width: 200px;"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>(Nama : MUHAMMAD FAUZAN<span style="float: right;">)</span></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Tarikh :</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="padding: 10px 10px 10px 10px;">
                                <i><b>(Pegawai Pembangunan/PPP/Ketua Unit hendaklah menandatangani ruangan yang disediakan)</b></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left" style="border: none;">
                            <div style="margin-top: 10px;">PS-09(2)(01-06-14)</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
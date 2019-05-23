<DOCTYPE! html>
<head>
<title>Certificate of Study Program</title>
<meta charset="utf-8">
<style>

.halaman
{
width: 100%;
height: auto;
Margin:10 auto;
background-color: #FFFFFF;
}

#h2
{
color:black;
}

.h1
{
width:100%;
}

#isi
{
width: auto;
height: auto;
padding: 80px;
background-color: #FFFFFF;
font-family: arial;
color:black;
}

#coeg
{
color:black;
}

#td
{
width: 120;

}

#tds
{
width: 90;
}

#tdi
{
width: 100
}

#ttd
{
width: 440
}
</style>
</head>

<body class ="halaman">

<table id="coeg" class="h1" >
<tr>
  <td align="center">
    <img src= "<?= base_url('asset/logo.png');?>" width="100"/>
  </td>
</tr>
<tr >
<td id="h2" style="font-size:18;" align="center"><strong>MINISTRY OF RELIGIOUS AFFAIRS</strong></td>
</tr>

<tr>
<td id="h2" style="font-size:18;" align="center"><strong>STATE ISLAMIC UNIVERSITY</strong></td>
</tr>

<tr>
<td id="h2" style="font-size:18;" align="center"><strong>SUNAN GUNUNG DJATI BANDUNG</strong></td>
</tr>

<tr>
<td id="h2" style="font-size:14;" align="center">
<br><strong>herewith has declared that: </strong></td>
</tr>

<tr>
<td id="h2" style="font-size:14;" align="center">
<br></td>
</tr>




<HR ALIGN="Center” SIZE="10" COLOR="#000000">
<br>
<table class="h1">
<tr>
<td id="h2" style="font-size:18;" align="center"><strong>SURAT KETERANGAN</strong></td>
</tr>

<tr>
<td id="h2" style="font-size:10.7;" align="center">Nomor : B-0051/Un.05/III.7/PP.00.9/02/2019</td>
</tr>





<table id="coeg">

<tr>
<p style="margin-left:60">
Yang bertanda tangan di bawah ini :<br>
</p>
<td id="tds" valign="top"></td>
<td id="td" valign="top">Nama</td>
<td valign="top">:</td>
<td valign="top”">Dr.Asep Supriadin, M.Si</td>
</tr>

<tr>
<td id="tds" valign="top"></td>
<td id="td" valign="top">NIP.</td>
<td valign="top">:</td>
<td valign="top">19730518 199903 1 004</td>
</tr>

<tr>
<td id="tds" valign="top"></td>
<td id="td" valign="top">Pangkat/Gol.</td>
<td valign="top">:</td>
<td valign="top" >Penata Tk.I-III/d</td>
</tr>

<tr>
<td id="tds" valign="top"></td>
<td id="td" valign="top”">Jabatan</td>
<td valign="top">:</td>
<td valign="top">Wakil Dekan Bidang Kemahasiswaan, Alumni dan Kerjasama</td>
</tr>



<table id="coeg">
<tr>
<p style="margin-left:60">
Menerangkan bahwa :<br>
</p>
<td id="tds" valign="top"></td>
<td id="td" valign="top" >Nama</td>
<td valign="top">:</td>
<td id="nama" valign="top”"></td>
</tr>

<tr>
<td id="tds" valign="top"></td>
<td id="td" valign="top">NIM</td>
<td valign="top">:</td>
<td id="nim" valign="top"></td>
</tr>

<tr>
<td id="tds" valign="top"></td>
<td id="td" valign="top">Jurusan</td>
<td valign="top">:</td>
<td id="jurusan" valign="top" ></td>
</tr>

<tr>
<td id="tds" valign="top"></td>
<td id="td" valign="top”">Semester</td>
<td valign="top">:</td>
<td id="semester" valign="top"></td>
</tr>

</table>
<p style="margin-left:60">adalah mahasiswa Fakultas Sains dan Teknologi UIN Sunan Gunung Djati Bandung yang menurut 
pengetahuan kami dan data dari Jurusan bahwa yang bersangkutan :</p>
<p style="margin-left:60">
Mahasiswa Aktif pada Fakultas Sains dan Teknologi UIN Sunan Gunung Djati Bandung, tahun Akademik 2018/2019.<br>
</p >
<p style="margin-left:60">
Surat keterangan ini dibuat dengan sesungguhnya, sebagai rekomendasi untuk <span id="tujuan"></span>.<br>
</p>
<p style="margin-left:60" align="justify">
Demikian surat keterangan ini kami buat, agar dapat dipergunakan sebagaimana mestinya.
</p><br>
</div>

<table id="coeg" class="h1">

<tr >
<td id="ttd" rowspan="10">

</td>
<td style="font-size:16;" align="left">Bandung, 17 Mei 2019</td>
</tr>

<tr>
<td style="font-size:16;" align="left">an.Dekan,</td>
</tr>

<tr>
<td style="font-size:16;" align="left">Wakil Dekan Bidang Kemahasiswaan,</td>
</tr>

<tr>
<td style="font-size:16;" align="left">Alumni dan Kerjasama,</td>
</tr>

<tr>
<td style="font-size:16;" align="left"> '</td>
</tr>
<tr>
<td style="font-size:16;" align="left"> '</td>
</tr>
<tr>
<td style="font-size:16;" align="left"> '</td>
</tr>
<tr>
<td style="font-size:16;" align="left"><strong>Dr.Asep Supriadin, M.Si<strong></td>
</tr>
<tr>
<td style="font-size:16;" align="left">NIP. 19730518 199903 1 004</td>
</tr>
</table>
<br><br><br>
<span align="left">
Tembusan
<br>Dekan Fakultas Sains dan Teknologi UIN Sunan Gunung Djati Bandung
</span>

<script>
var url = window.location.href;
var nama = getQueryVariable("nama");
var nim = getQueryVariable("nim"); 
var jurusan = getQueryVariable("jurusan"); 
var semester = getQueryVariable("semester"); 
var tujuan = getQueryVariable("tujuan"); 
document.getElementById("nama").innerHTML = nama;
document.getElementById("nim").innerHTML = nim;
document.getElementById("jurusan").innerHTML = jurusan;
document.getElementById("semester").innerHTML = semester;
document.getElementById("tujuan").innerHTML = tujuan;

function getQueryVariable(variable)
{ 
  var query = window.location.search.substring(1); 
  var vars = query.split("&"); 
  for (var i=0;i<vars.length;i++)
  { 
    var pair = vars[i].split("="); 
    if (pair[0] == variable)
    { 
      return unescape(pair[1]); 
    } 
  }
  return -1; //not found 
}
</script>
</body>
</html>
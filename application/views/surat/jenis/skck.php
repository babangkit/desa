<!-- /.BIO -->
</br>
                      <table cellspacing="0">
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. Nama Lengkap</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$user['name'];?></td>
                      </tr>
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. Jenis Kelamin</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$bio['Jk'];?></td>
                      </tr>
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. Tempat Tanggal Lahir</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$hasil2;?> / <?=$date3;?></td>
                      </tr>
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. Warga Negara</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$bio['Warga'];?></td>
                      </tr>
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. Agama</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$bio['Agama'];?></td>
                      </tr>
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. Status Perkawinan</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$bio['Status'];?></td>
                      </tr>
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. No. KTP/NIK</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$user['username'];?></td>
                      </tr>
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. Pekerjaan</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$bio['Pekerjaan'];?></td>
                      </tr>
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. Alamat</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$user['address'];?></td>
                      </tr>
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"></td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">&nbsp;&nbsp;&nbsp;KECAMATAN LUMBIR KABUPATEN BANYUMAS </td>
                      </tr>
                      </table>
                      </div>
                      </br>
                      <p>Berdasarkan Surat Keterangan dari Ketua Rukun Warga <?= $rw ?> Nomor <?= $date1 ?> Tanggal <?= $date2 ?> dan menurut pengakuan yang bersangkutan sampai saat ini belum pernah tersangkut yustisi/urusan kepolisian.</p>
                      <?= $js['footer'] ?>
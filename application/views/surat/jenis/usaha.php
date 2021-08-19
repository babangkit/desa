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
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. Tempat/Tanggal Lahir</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$hasil2;?> / <?=$date3;?></td>
                      </tr>
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. Warga Negara/Agama</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$bio['Warga'];?> / <?=$bio['Agama'];?></td>
                      </tr>
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. No.KTP/NIK</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$user['username'];?></td>
                      </tr>   
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. Pekerjaan</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; <?=$bio['Pekerjaan'];?></td>
                      </tr>                     
                      <tr>
                      <td style="padding: 0 40px; padding-bottom: 3px;"><?=$i++;?>. Alamat</td>
                      <td style="padding: 0 10px; padding-bottom: 3px;">:&nbsp; KEDUNGGEDE, RT.<?=$rt;?> / RW.<?=$rw;?></td>
                      </tr>
                      </table>
                      </div>
                      </br>
                      Berdasarkan Surat Keterangan dari Ketua Rukun Tetangga <?= $rw ?> Nomor <?= $date1 ?> Tanggal <?= $date2 ?>, bahwa yang bersangkutan betul warga Desa Kedunggede dan menurut pengakuan yang bersangkutan mempunyai usaha ..... .
                      </br>
                      <div style="padding: 0 40px; padding-top: 10px;">Surat keterangan ini diperlukan untuk ........</div>
                      <p><?= $js['footer'] ?></p>
<section class="content-header">
  <h1><i class="fa fa-kaaba"></i> &nbsp; Tambah Dana Haji yang Ditempatkan  </h1>        
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
  
        <?php 

        if(isset($_POST['submit'])) {

           // Buat sebuah tag form untuk proses import data ke database
          echo form_open_multipart(base_url('keuanganhaji/import_posisi_penempatan_produk/'.$file_excel), 'class="form-horizontal"' );

          
          echo "<table class='table table-bordered table-striped'>
         
          <tr>
            <th>Bulan</th>
            <th>Giro</th>
            <th>Tabungan</th>
            <th>Deposito</th>
            <th>Jumlah</th>            
          </tr>";
          
          $numrow = 1;     

          foreach($sheet as $row){ 
            // Ambil data pada excel sesuai Kolom            

            $bulan=$row['A']; 
            $giro=$row['B']; 
            $tabungan=$row['B']; 
            $deposito=$row['C']; 
            $jumlah=$row['D'];
           

            if($numrow > 1){
              
              echo "<tr>";
              echo "<td>".$bulan."</td>"; 
              echo "<td>".$giro."</td>";
              echo "<td>".$tabungan."</td>";
              echo "<td>".$deposito."</td>";
              echo "<td>".$jumlah."</td>";            
              echo "</tr>";
            }
            
            $numrow++; // Tambah 1 setiap kali looping
          }
          
          echo "</table>";          
       
          ?>  
           
          <?php
            echo "<hr>";
            
            // Buat sebuah tombol untuk mengimport data ke database
            echo "<button class='btn btn-success' type='submit' name='import'>Import</button>";
            echo " <a class='btn btn-warning' href='".base_url("keuanganhaji/posisi_penempatan_produk")."'>Cancel</a>";
         
          
          echo form_close(); 

        } else {

          echo form_open_multipart(base_url('keuanganhaji/tambah_posisi_penempatan_produk'), 'class="form-horizontal"' )?> 
            <div class="form-group">
              <p class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i><strong> Panduan Import Data</strong></p>

              <ol class="panduan-pengisian">
                <li>Ekstensi File yang didukung hanya .xlsx</li>
                <li>Data yang diimport harus mengikuti template yang sudah disediakan. <a href="<?=base_url('public/template-excel/keuanganhaji/posisi_penempatan_produk.xlsx'); ?>" class="btn btn-success btn-xs"><i class="fas fa-file-excel"></i> Unduh Template Excel</a></li>
                <li>Kolom Tahun wajib diisi</li>
                <li>Data yang dapat diimport hanya data satu bulan</li>
                <li>Format Tahun : 2020, dst</li>               
                <li>Format bulan  : Januari, Februari, Maret, dst</li>               
              </ol>
              <input type="file" name="file" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" name="submit" value="Upload" class="btn btn-default pull-right">
            </div>

          <?php echo form_close();  
        }
        ?>

         
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>  
</section> 


<script>
    $("#posisi_penempatan_produk").addClass('active');
</script>



  
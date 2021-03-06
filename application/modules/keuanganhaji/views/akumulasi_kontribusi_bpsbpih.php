<section class="content-header">
  <h1><i class="fa fa-kaaba"></i> &nbsp; Akumulasi Kontribusi BPS BPIH  <a href="<?=base_url('keuanganhaji/tambah_akumulasi_kontribusi_bpsbpih'); ?>" class="btn btn-warning btn-sm"><i class="fas fa-plus"></i>&nbsp;  Tambah Data</a>

    <a href="<?=base_url('keuanganhaji/export_akumulasi_kontribusi_bpsbpih/'. $thn); ?>" class="btn btn-success btn-sm"><i class="fas fa-file-excel"></i>&nbsp;  Export Data ke Excel</a></h1>

</section>
<section class="content">
 
  <div class="row">
    <div class="col-md-12">     
        <?php breadcrumb('',$tahun, $thn); ?>
        <div class="box-body smy-form-body box-keuangan">        

          <table class="keuangan table table-striped table-bordered" style="width:2200px;min-width: 100%;">
            <thead>
              <tr class="text-center">
                <th>BPS BPIH</th>
                <th>Januari</th>
                <th>Februari</th>
                <th>Maret</th>
                <th>April</th>
                <th>Mei</th>
                <th>Juni</th>
                <th>Juli</th>
                <th>Agustus</th>
                <th>September</th>
                <th>Oktober</th>
                <th>November</th>
                <th>Desember</th> 
              </tr>
            </thead>
            <?php foreach ($akumulasi_kontribusi_bpsbpih as $row) { 

            if($row['bps_bpih'] == "TOTAL") { ?>
              <tfoot>
                <tr class="total">
                  <td><?=$row['bps_bpih']; ?></td>
                  <td style="text-align: right;"><?=$row['januari']; ?></td>
                  <td style="text-align: right;"><?=$row['februari']; ?></td>
                  <td style="text-align: right;"><?=$row['maret']; ?></td>
                  <td style="text-align: right;"><?=$row['april']; ?></td>
                  <td style="text-align: right;"><?=$row['mei']; ?></td>
                  <td style="text-align: right;"><?=$row['juni']; ?></td>
                  <td style="text-align: right;"><?=$row['juli']; ?></td>
                  <td style="text-align: right;"><?=$row['agustus']; ?></td>
                  <td style="text-align: right;"><?=$row['september']; ?></td>
                  <td style="text-align: right;"><?=$row['oktober']; ?></td>
                  <td style="text-align: right;"><?=$row['november']; ?></td>
                  <td style="text-align: right;"><?=$row['desember']; ?></td>
                </tr>
              </tfoot>
            <?php } else { ?>               
              <tr>
                <td><?=$row['bps_bpih']; ?></td>
                <td style="text-align: right;"><?=$row['januari']; ?></td>
                <td style="text-align: right;"><?=$row['februari']; ?></td>
                <td style="text-align: right;"><?=$row['maret']; ?></td>
                <td style="text-align: right;"><?=$row['april']; ?></td>
                <td style="text-align: right;"><?=$row['mei']; ?></td>
                <td style="text-align: right;"><?=$row['juni']; ?></td>
                <td style="text-align: right;"><?=$row['juli']; ?></td>
                <td style="text-align: right;"><?=$row['agustus']; ?></td>
                <td style="text-align: right;"><?=$row['september']; ?></td>
                <td style="text-align: right;"><?=$row['oktober']; ?></td>
                <td style="text-align: right;"><?=$row['november']; ?></td>
                <td style="text-align: right;"><?=$row['desember']; ?></td>               
              </tr>
            <?php } // endif

            } //endforeach get bps bpih ?>          
           
          </table>
      
      </div>
    </div>
  </div>  
</section> 

<script>
    $("#akumulasi_kontribusi_bpsbpih").addClass('active');
</script>






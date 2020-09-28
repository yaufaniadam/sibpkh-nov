<?php //get las URI
$last = $this->uri->total_segments();
$tahun = $this->uri->segment($last);
$bulan = $this->uri->segment($last - 1);
?>
<section class="content-header">
  <h1><i class="fa fa-kaaba"></i> Perubahan Aset Neto <a href="<?= base_url('laporankeuangan/perubahan_asetneto/' . $tahun); ?>" class="btn btn-warning btn-sm"><i class="fas fa-chevron-left"></i>&nbsp; Kembali</a>
  </h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <div class="box">
        <div class="box-body my-form-body">
          <?php if ($perubahan_asetneto) { ?>

            <h4>Data <?= konversiBulanAngkaKeNama($bulan); ?> <?= $tahun ?></h4>

            <table id="table1" class="table table-striped table-bordered">
              <tr>
                <th>Uraian</th>
                <th class="text-center"><?= konversiBulanAngkaKeNama($bulan); ?> </th>
              </tr>
              <?php
              $i = 1;
              $totalrow = count($perubahan_asetneto);

              foreach ($perubahan_asetneto as $row) { ?>
                <tr <?= ($i == $totalrow) ? 'class="success text-bold"' : ''; ?>>
                  <td><?= $row['bidang']; ?></td>
                  <td style="text-align: right;"><?= $row['target']; ?></td>
                </tr>
              <?php $i++;
              } ?>
            </table>


        </div>
      </div>

    <?php } else {
            echo '<p class="alert alert-success"> Pilih tahun</p>';
          } ?>
    </div>
  </div>
</section>

<!-- Modal -->
<div id="confirm-delete" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus</h4>
      </div>
      <div class="modal-body">
        <p>Anda yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <a class="btn btn-danger btn-ok">Hapus</a>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
  $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
  });
</script>

<script>
  $("#perubahan_asetneto").addClass('active');
</script>
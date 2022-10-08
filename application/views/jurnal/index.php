<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">Jurnal</li>
        </ol>
        <a class="btn btn-dark" href="<?= base_url() ?>index.php/jurnal/tambah" role="button">Tambah Data</a>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Jurnal</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Uraian</th>
                                <th>Ref</th>
                                <th>Debet</th>
                                <th>Kredit</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $debet = 0; ?>
                            <?php $kredit = 0; ?>

                            <?php foreach ($jurnal as $i) : ?>
                                <tr>
                                    <td><?= $i['tanggal'] ?></td>

                                    <?php if ($i['kredit'] != 0) : ?>
                                        <td style="text-indent: 40px"><?= $i['uraian'] ?></td>
                                    <?php else : ?>
                                        <td><?= $i['uraian'] ?></td>
                                    <?php endif ?>
                                    <td><?= $i['ref'] ?></td>
                                    <?php if ($i['debet'] != 0) :   ?>
                                        <td><?php echo "Rp." . number_format($i['debet'], 0, ",", ",") ?></td>
                                    <?php else : ?>
                                        <td></td>
                                    <?php endif  ?>
                                    <?php if ($i['kredit'] != 0) :   ?>
                                        <td><?php echo "Rp." . number_format($i['kredit'], 0, ",", ",") ?></td>
                                    <?php else : ?>
                                        <td></td>
                                    <?php endif  ?>
                                    <td style="font-style: italic; color:red;"><?= $i['keterangan'] ?></td>
                                </tr>
                                <?php $debet += $i['debet'] ?>
                                <?php $kredit += $i['kredit'] ?>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Total</th>
                                <th></th>
                                <th></th>
                                <th><?php echo "Rp." . number_format($debet, 0, ",", ",") ?></th>
                                <th><?php echo "Rp." . number_format($kredit, 0, ",", ",") ?></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>


            <?php

            $data = [
                'debet' => $debet,
                'kredit' => $kredit


            ];
            $this->session->set_userdata($data);
            ?>
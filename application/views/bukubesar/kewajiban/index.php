<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Buku Besar</a>
            </li>
            <li class="breadcrumb-item active">Kewajiban</li>
        </ol>
        <!-- DataTables No 21 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 21</div>
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
                                <th>Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $saldo21 = 0; ?>
                            <?php foreach ($aktiva as $z) : ?>
                                <?php if ($z['ref'] == 21) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($aktiva as $i) : ?>
                                <?php if ($i['ref'] == 21) : ?>
                                    <tr>
                                        <td><?= $i['tanggal'] ?></td>
                                        <td style="color: red; font-style:italic;"><?= $i['keterangan'] ?></td>
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


                                        <?php if ($z['debet'] > 0) : ?>
                                            <?php $saldo21 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($z['kredit'] > 0) : ?>
                                            <?php $saldo21 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($z['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo21 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($z['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo21 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($z['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo21, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo21, 0, ",", ",") ?>)</td>
                                        <?php endif ?>

                                    <?php endif ?>
                                    </tr>
                                <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>


        <?php

        $data = [
            'hutang' => $saldo21,

        ];
        $this->session->set_userdata($data);
        ?>
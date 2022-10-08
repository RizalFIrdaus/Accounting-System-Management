<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Buku Besar</a>
            </li>
            <li class="breadcrumb-item active">Modal</li>
        </ol>
        <!-- DataTables No 31 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 31</div>
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
                            <?php $saldo31 = 0; ?>
                            <?php foreach ($Modal as $z) : ?>
                                <?php if ($z['ref'] == 31) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($Modal as $i) : ?>
                                <?php if ($i['ref'] == 31) : ?>
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
                                            <?php $saldo31 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($z['kredit'] > 0) : ?>
                                            <?php $saldo31 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($z['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo31 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($z['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo31 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($z['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo31, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo31, 0, ",", ",") ?>)</td>
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

        <!-- DataTables No 32 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 32</div>
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
                            <?php $saldo32 = 0; ?>
                            <?php foreach ($Modal as $z) : ?>
                                <?php if ($z['ref'] == 32) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($Modal as $i) : ?>
                                <?php if ($i['ref'] == 32) : ?>
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
                                            <?php $saldo32 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($z['kredit'] > 0) : ?>
                                            <?php $saldo32 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($z['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo32 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($z['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo32 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($z['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo32, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo32, 0, ",", ",") ?>)</td>
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
            'modal' => $saldo31,
            'prive' => $saldo32

        ];
        $this->session->set_userdata($data);
        ?>
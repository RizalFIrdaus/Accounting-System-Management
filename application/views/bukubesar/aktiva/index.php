<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Buku Besar</a>
            </li>
            <li class="breadcrumb-item active">Aktiva</li>
        </ol>
        <!-- DataTables No 11 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 11</div>
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
                            <?php $saldo11 = 0; ?>
                            <?php foreach ($aktiva as $z) : ?>
                                <?php if ($z['ref'] == 11) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($aktiva as $i) : ?>
                                <?php if ($i['ref'] == 11) : ?>
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
                                            <?php $saldo11 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($z['kredit'] > 0) : ?>
                                            <?php $saldo11 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($z['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo11 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($z['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo11 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($z['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo11, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo11, 0, ",", ",") ?>)</td>
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




        <!-- DataTables No 12 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 12</div>
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
                            <?php $saldo12 = 0; ?>
                            <?php foreach ($aktiva as $x) : ?>
                                <?php if ($x['ref'] == 12) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($aktiva as $i) : ?>
                                <?php if ($i['ref'] == 12) : ?>
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


                                        <?php if ($x['debet'] > 0) : ?>
                                            <?php $saldo12 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($x['kredit'] > 0) : ?>
                                            <?php $saldo12 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($x['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo12 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($x['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo12 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($x['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo12, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo12, 0, ",", ",") ?>)</td>
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


        <!-- DataTables No 13 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 13</div>
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
                            <?php $saldo13 = 0; ?>
                            <?php foreach ($aktiva as $v) : ?>
                                <?php if ($v['ref'] == 13) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($aktiva as $i) : ?>
                                <?php if ($i['ref'] == 13) : ?>
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


                                        <?php if ($v['debet'] > 0) : ?>
                                            <?php $saldo13 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($v['kredit'] > 0) : ?>
                                            <?php $saldo13 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo13 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo13 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo13, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo13, 0, ",", ",") ?>)</td>
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

        <!-- DataTables No 14 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 14</div>
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
                            <?php $saldo14 = 0; ?>
                            <?php foreach ($aktiva as $c) : ?>
                                <?php if ($c['ref'] == 14) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($aktiva as $i) : ?>
                                <?php if ($i['ref'] == 14) : ?>
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


                                        <?php if ($c['debet'] > 0) : ?>
                                            <?php $saldo14 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($c['kredit'] > 0) : ?>
                                            <?php $saldo14 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($c['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo14 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($c['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo14 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($c['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo14, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo14, 0, ",", ",") ?>)</td>
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

        <!-- DataTables No 15 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 15</div>
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
                            <?php $saldo15 = 0; ?>
                            <?php foreach ($aktiva as $g) : ?>
                                <?php if ($g['ref'] == 15) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($aktiva as $i) : ?>
                                <?php if ($i['ref'] == 15) : ?>
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


                                        <?php if ($g['debet'] > 0) : ?>
                                            <?php $saldo15 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($g['kredit'] > 0) : ?>
                                            <?php $saldo15 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($g['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo15 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($g['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo15 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($g['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo15, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo15, 0, ",", ",") ?>)</td>
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


        <!-- DataTables No 16 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 16</div>
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
                            <?php $saldo16 = 0; ?>
                            <?php foreach ($aktiva as $g) : ?>
                                <?php if ($g['ref'] == 16) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($aktiva as $i) : ?>
                                <?php if ($i['ref'] == 16) : ?>
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


                                        <?php if ($g['debet'] > 0) : ?>
                                            <?php $saldo16 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($g['kredit'] > 0) : ?>
                                            <?php $saldo16 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($g['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo16 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($g['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo16 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($g['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo16, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo16, 0, ",", ",") ?>)</td>
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
            'kas' => $saldo11,
            'piutang' => $saldo12,
            'perlengkapan' => $saldo13,
            'sewadibayardimuka' => $saldo14,
            'peralatan' => $saldo15,
            'akumulasi' => $saldo16,


        ];
        $this->session->set_userdata($data);
        ?>
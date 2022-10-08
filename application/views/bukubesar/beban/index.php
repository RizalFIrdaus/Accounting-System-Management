<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Buku Besar</a>
            </li>
            <li class="breadcrumb-item active">Aktiva</li>
        </ol>
        <!-- DataTables No 51 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 51</div>
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
                            <?php $saldo51 = 0; ?>
                            <?php foreach ($beban as $v) : ?>
                                <?php if ($v['ref'] == 51) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($beban as $i) : ?>
                                <?php if ($i['ref'] == 51) : ?>
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
                                            <?php $saldo51 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($v['kredit'] > 0) : ?>
                                            <?php $saldo51 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo51 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo51 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo51, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo51, 0, ",", ",") ?>)</td>
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



        <!-- DataTables No 52 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 52</div>
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
                            <?php $saldo52 = 0; ?>
                            <?php foreach ($beban as $v) : ?>
                                <?php if ($v['ref'] == 52) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($beban as $i) : ?>
                                <?php if ($i['ref'] == 52) : ?>
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
                                            <?php $saldo52 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($v['kredit'] > 0) : ?>
                                            <?php $saldo52 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo52 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo52 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo52, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo52, 0, ",", ",") ?>)</td>
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


        <!-- DataTables No 53 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 53</div>
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
                            <?php $saldo53 = 0; ?>
                            <?php foreach ($beban as $v) : ?>
                                <?php if ($v['ref'] == 53) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($beban as $i) : ?>
                                <?php if ($i['ref'] == 53) : ?>
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
                                            <?php $saldo53 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($v['kredit'] > 0) : ?>
                                            <?php $saldo53 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo53 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo53 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo53, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo53, 0, ",", ",") ?>)</td>
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

        <!-- DataTables No 54 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 54</div>
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
                            <?php $saldo54 = 0; ?>
                            <?php foreach ($beban as $v) : ?>
                                <?php if ($v['ref'] == 54) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($beban as $i) : ?>
                                <?php if ($i['ref'] == 54) : ?>
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
                                            <?php $saldo54 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($v['kredit'] > 0) : ?>
                                            <?php $saldo54 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo54 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo54 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo54, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo54, 0, ",", ",") ?>)</td>
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

        <!-- DataTables No 55 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 55</div>
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
                            <?php $saldo55 = 0; ?>
                            <?php foreach ($beban as $v) : ?>
                                <?php if ($v['ref'] == 55) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($beban as $i) : ?>
                                <?php if ($i['ref'] == 55) : ?>
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
                                            <?php $saldo55 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($v['kredit'] > 0) : ?>
                                            <?php $saldo55 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo55 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo55 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo55, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo55, 0, ",", ",") ?>)</td>
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

        <!-- DataTables No 56 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 56</div>
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
                            <?php $saldo56 = 0; ?>
                            <?php foreach ($beban as $v) : ?>
                                <?php if ($v['ref'] == 56) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($beban as $i) : ?>
                                <?php if ($i['ref'] == 56) : ?>
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
                                            <?php $saldo56 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($v['kredit'] > 0) : ?>
                                            <?php $saldo56 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo56 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo56 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo56, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo56, 0, ",", ",") ?>)</td>
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



        <!-- DataTables No 57 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 57</div>
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
                            <?php $saldo57 = 0; ?>
                            <?php foreach ($beban as $v) : ?>
                                <?php if ($v['ref'] == 57) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($beban as $i) : ?>
                                <?php if ($i['ref'] == 57) : ?>
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
                                            <?php $saldo57 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($v['kredit'] > 0) : ?>
                                            <?php $saldo57 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo57 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo57 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo57, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo57, 0, ",", ",") ?>)</td>
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


        <!-- DataTables No 58 -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Perkiraan No : 58</div>
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
                            <?php $saldo58 = 0; ?>
                            <?php foreach ($beban as $v) : ?>
                                <?php if ($v['ref'] == 58) : ?>
                                    <?php break; ?>
                                <?php endif ?>
                            <?php endforeach ?>

                            <?php foreach ($beban as $i) : ?>
                                <?php if ($i['ref'] == 58) : ?>
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
                                            <?php $saldo58 += $i['debet']; ?>
                                        <?php endif ?>
                                        <?php if ($v['kredit'] > 0) : ?>
                                            <?php $saldo58 += $i['kredit']; ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <?php if ($i['kredit']) : ?>
                                                <?php $saldo58 -= $i['kredit'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['kredit'] > 0) :  ?>
                                            <?php if ($i['debet']) : ?>
                                                <?php $saldo58 -= $i['debet'] ?>
                                            <?php endif ?>
                                        <?php endif ?>

                                        <?php if ($v['debet'] > 0) : ?>
                                            <td><?php echo "Rp." . number_format($saldo58, 0, ",", ",") ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">(<?php echo "Rp." . number_format($saldo58, 0, ",", ",") ?>)</td>
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
            'Bperlengkapan' => $saldo51,
            'Bgaji' => $saldo52,
            'Bsewa' => $saldo53,
            'Blistrik' => $saldo54,
            'Btelepon' => $saldo55,
            'Bair' => $saldo56,
            'Bpenyusutan' => $saldo57,
            'Brupa' => $saldo58





        ];
        $this->session->set_userdata($data);
        ?>
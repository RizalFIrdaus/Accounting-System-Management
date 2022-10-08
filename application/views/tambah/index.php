<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url() ?>index.php/jurnal/tambah" method="post">

                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="uraian">Nama Akun</label>
                            <select class="form-control" id="uraian" name="uraian">
                                <option>-pilih-</option>
                                <!-- <option style="background-color: green ; color:white;">-Aktiva-</option> -->
                                <option>Kas</option>
                                <option>Piutang</option>
                                <option>Perlengkapan</option>
                                <option>Sewa Dibayar Dimuka</option>
                                <option>Peralatan</option>
                                <option>Akumulasi Penyusutan</option>
                                <!-- <option style="background-color: red ; color:white;">-Kewajiban-</option> -->
                                <option>Hutang Dagang</option>
                                <!-- <option style="background-color: green ; color:white;">-Modal-</option> -->
                                <option>Modal</option>
                                <option>Prive</option>
                                <!-- <option style="background-color: red ; color:white;">-Pendapatan-</option> -->
                                <option>Pendapatan</option>
                                <!-- <option style="background-color: green ; color:white;">-Beban-</option> -->
                                <option>Beban Perlengkapan</option>
                                <option>Beban Gaji</option>
                                <option>Beban Sewa</option>
                                <option>Beban Listrik</option>
                                <option>Beban Telepon</option>
                                <option>Beban Air</option>
                                <option>Beban Penyusutan</option>
                                <option>Beban Rupa-rupa</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ref">Ref</label>
                            <select class="form-control" id="ref" name="ref">
                                <option>-pilih-</option>
                                <!-- <option style="background-color: green ; color:white;">Aktiva</option> -->
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>19</option>
                                <!-- <option style="background-color: red ; color:white;">Kewajiban</option> -->
                                <option>21</option>
                                <!-- <option style="background-color: green ; color:white;">Modal</option> -->
                                <option>31</option>
                                <option>32</option>
                                <!-- <option style="background-color: red ; color:white;">Pendapatan</option> -->
                                <option>41</option>
                                <!-- <option style="background-color: red ; color:white;">Beban</option> -->
                                <option>51</option>
                                <option>52</option>
                                <option>53</option>
                                <option>54</option>
                                <option>55</option>
                                <option>54</option>
                                <option>55</option>
                                <option>56</option>
                                <option>57</option>
                                <option>58</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="debet">Debet</label>
                            <input type="text" class="form-control" id="debet" name="debet">
                        </div>
                        <div class="form-group">
                            <label for="kredit">Kredit</label>
                            <input type="text" class="form-control" id="kredit" name="kredit">
                        </div>
                        <div class="form-group">
                            <label for="kredit">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                        <button type="submit" class="btn btn-dark float-right" name="tambah">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link activemessages" id="v-pills-aktiva-tab" data-toggle="pill" href="#v-pills-aktiva" role="tab" aria-controls="v-pills-aktiva" aria-selected="false">Aktiva</a>
                        <a class="nav-link" id="v-pills-kewajiban-tab" data-toggle="pill" href="#v-pills-kewajiban" role="tab" aria-controls="v-pills-kewajiban" aria-selected="false">Kewajiban</a>
                        <a class="nav-link" id="v-pills-modal-tab" data-toggle="pill" href="#v-pills-modal" role="tab" aria-controls="v-pills-modal" aria-selected="false">Modal</a>
                        <a class="nav-link" id="v-pills-pendapatan-tab" data-toggle="pill" href="#v-pills-pendapatan" role="tab" aria-controls="v-pills-pendapatan" aria-selected="false">Pendapatan</a>
                        <a class="nav-link" id="v-pills-beban-tab" data-toggle="pill" href="#v-pills-beban" role="tab" aria-controls="v-pills-beban" aria-selected="false">Beban</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-aktiva" role="tabpanel" aria-labelledby="v-pills-aktiva-tab">
                            <table class="table table-striped table-dark">
                                <thead>


                                    <tr>
                                        <th scope="col">No Akun</th>
                                        <th scope="col">Nama Akun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($akun as $i) : ?>
                                        <?php if ($i['no'] <= 19) : ?>
                                            <tr>
                                                <th scope="row"><?= $i['no'] ?></th>
                                                <td><?= $i['nama'] ?></td>
                                            </tr>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="v-pills-kewajiban" role="tabpanel" aria-labelledby="v-pills-kewajiban-tab">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">No Akun</th>
                                        <th scope="col">Nama Akun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($akun as $i) : ?>
                                        <?php if ($i['no'] == 21) : ?>
                                            <tr>
                                                <th scope="row"><?= $i['no'] ?></th>
                                                <td><?= $i['nama'] ?></td>
                                            </tr>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="v-pills-modal" role="tabpanel" aria-labelledby="v-pills-modal-tab">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">No Akun</th>
                                        <th scope="col">Nama Akun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($akun as $i) : ?>
                                        <?php if ($i['no'] == 31 || $i['no'] == 32) : ?>
                                            <tr>
                                                <th scope="row"><?= $i['no'] ?></th>
                                                <td><?= $i['nama'] ?></td>
                                            </tr>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="v-pills-pendapatan" role="tabpanel" aria-labelledby="v-pills-pendapatan-tab">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">No Akun</th>
                                        <th scope="col">Nama Akun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($akun as $i) : ?>
                                        <?php if ($i['no'] == 41) : ?>
                                            <tr>
                                                <th scope="row"><?= $i['no'] ?></th>
                                                <td><?= $i['nama'] ?></td>
                                            </tr>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="v-pills-beban" role="tabpanel" aria-labelledby="v-pills-beban-tab">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">No Akun</th>
                                        <th scope="col">Nama Akun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($akun as $i) : ?>
                                        <?php if ($i['no'] >= 51) : ?>
                                            <tr>
                                                <th scope="row"><?= $i['no'] ?></th>
                                                <td><?= $i['nama'] ?></td>
                                            </tr>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (validation_errors()) : ?>
            <div class="col-lg-4">
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Error Input Data</h4>
                    <p><?= validation_errors(); ?></p>
                </div>
            </div>
        <?php endif ?>
    </div>
</div>
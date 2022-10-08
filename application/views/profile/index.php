<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Profile</a>
            </li>
        </ol>
        <?= $this->session->flashdata('message'); ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card profile-card-1">
                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background" />
                        <img src="<?= base_url('assets/img/profile/') . $member['image'] ?>" alt="profile-image" class="profile" />
                        <div class="card-content">
                            <h2><?= $member['name'] ?><small><?= $member['email'] ?></small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <form method="post" action="<?= base_url(); ?>">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="email" class="form-control" placeholder="Email address" autofocus="autofocus" name="email" value="<?= set_value('email') ?>">
                        <label for="email">Email address</label>
                        <small class="text-danger"><?= form_error('email'); ?></small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="password" class="form-control" placeholder="Password" name="password">
                        <label for="password">Password</label>
                        <small class="text-danger"><?= form_error('password'); ?></small>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?= base_url('auth/register') ?>">Register an Account</a>
                <a class="d-block small" href="<?= base_url('auth/forgot') ?>">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
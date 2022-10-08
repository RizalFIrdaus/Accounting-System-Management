<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form method="post" action="<?= base_url() ?>auth/register">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md">
                            <div class="form-label-group">
                                <input type="text" id="name" class="form-control" placeholder="Full name" name="name" autofocus="autofocus" value="<?= set_value('name') ?>">
                                <label for="name">Full Name</label>
                                <small class="text-danger"><?= form_error('name'); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="email" class="form-control" placeholder="Email address" name="email" value="<?= set_value('email') ?>">
                        <label for="email">Email address</label>
                        <small class="text-danger"><?= form_error('email'); ?></small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="password" class="form-control" placeholder="Password" name="password">
                                <label for="password">Password</label>
                                <small class="text-danger"><?= form_error('password'); ?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" name="confirmPassword">
                                <label for="confirmPassword">Confirm password</label>
                                <small class="text-danger"><?= form_error('confirmPassword'); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Register</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?= base_url('auth/index') ?>">Login Page</a>
                <a class="d-block small" href="<?= base_url('auth/forgot') ?>">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
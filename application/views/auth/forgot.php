<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
            <div class="text-center mb-4">
                <h4>Forgot your password?</h4>
                <p>Enter your email address and we will send you instructions on how to reset your password.</p>
            </div>
            <form>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="email" class="form-control" placeholder="Enter email address" name="email" autofocus="autofocus">
                        <label for="email">Enter email address</label>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?= base_url('auth/register') ?>">Register an Account</a>
                <a class="d-block small" href="<?= base_url('auth/index') ?>">Login Page</a>
            </div>
        </div>
    </div>
</div>
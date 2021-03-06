<!--Section: Login Form-->
<section class="mb-5 login-form">

  <form class="needs-validation" novalidate autocomplete="off">

    <div class="md-form md-outline">
      <input type="email" name="login-email" id="login-email" class="form-control">
      <label data-error="wrong" data-success="right" for="login-email">Your email</label>
    </div>
    <div class="md-form md-outline">
      <input type="password" name="login-password" id="login-password" class="form-control">
      <label data-error="wrong" data-success="right" for="login-password">Your password</label>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-2">

      <div class="form-check pl-0 mb-3">
        <input type="checkbox" class="form-check-input filled-in" id="new">
        <label class="form-check-label small text-uppercase card-link-secondary" for="new">Remember me</label>
      </div>

      <p><a href="https://mdbootstrap.com/docs/jquery/admin/auth/reset-password/">Forgot password?</a></p>

    </div>

    <div class="text-center pb-2">

      <button type="submit" class="btn btn-primary mb-4">Sign in</button>

      <p>Not a member? <a href="https://mdbootstrap.com/docs/jquery/admin/auth/register/">Register</a></p>

      <p>or sign in with:</p>

      <a type="button" class="btn-floating btn-fb btn-sm mr-1">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a type="button" class="btn-floating btn-tw btn-sm mr-1">
        <i class="fab fa-twitter"></i>
      </a>
      <a type="button" class="btn-floating btn-li btn-sm mr-1">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a type="button" class="btn-floating btn-git btn-sm">
        <i class="fab fa-github"></i>
      </a>

    </div>

  </form>

</section>
<!--Section: Login Form-->

<!--Section: Logout Form-->
<section class="logout-form py-5">
  <p class="logged-user-message pb-2"></p>
  <button class="btn btn-danger waves-effect logout">Log out</button>
</section>
<!--Section: Logout Form-->

<!-- Modal -->
<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
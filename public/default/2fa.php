<div class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="<?= base_url('n') ?>"><?= $this->site->get(['title']) ?></a>
		</div>
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg"><?= $this->ui->text('2fa_header_text') ?></p>
				<?= form_open('f/fa') ?>
					<div class="mb-3">
						<label class="form-label text-muted"><?= $this->ui->text('2fa_text') ?></label>
						<div class="input-group">
							<input type="text" name="key" class="form-control" placeholder="<?= $this->ui->text('password_placeholder_text') ?>">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fa fa-lock"></span>
								</div>
							</div>
						</div>
					</div>
					<?= $this->captcha->captcha() ?>
					<div class="mb-3">
						<input type="submit" name="submit" class="btn btn-primary btn-block" value="<?= $this->ui->text('verify_btn_text') ?>">
					</div>
				</form>
				<p class="mb-1">
					<a href="<?= base_url('f/logout') ?>"><?= $this->ui->text('logout_nav_text') ?></a>
				</p>
			</div>
		</div>
	</div>
</div>
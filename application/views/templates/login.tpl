<div id="login-wrap">

		<div id="login-ribbon"><i class="icon-lock"></i></div>

		<div id="login-buttons">
			<div class="btn-wrap">
				<button type="button" class="btn btn-inverse" data-target="#login-form"><i class="icon-key"></i></button>
			</div>
			<div class="btn-wrap">
				<button type="button" class="btn btn-inverse" data-target="#forget-form"><i class="icon-question-sign"></i></button>
			</div>
		</div>

		<div id="login-inner">

			<div id="login-circle">
				<section id="login-form" class="login-inner-form active" data-angle="0">
					<h1>Login</h1>
					<form class="form-vertical" action="dashboard.html" />
						<div class="control-group">
							<input type="text" placeholder="Username" id="input-username" class="big" required />
							<input type="password" placeholder="Password" id="input-password" class="big"  required/>
						</div>
						<div class="control-group">
							<label class="checkbox">
								<input type="checkbox" class="uniform" /> Remember me
							</label>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-success btn-block btn-large">Login</button>
						</div>
					</form>

				</section>
				<section id="forget-form" class="login-inner-form" data-angle="180">
					<h1>Reset Password</h1>
					<form class="form-vertical" action="dashboard.html" />
						<div class="control-group">
							<div class="controls">
								<input type="text" class="big" placeholder="Enter Your Email..." />
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-danger btn-block btn-large">Reset</button>
						</div>
					</form>
				</section>
			</div>

		</div>

</div>
  
    
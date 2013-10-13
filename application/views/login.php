<div align="center">
			<div>
				<img src="<?php echo base_url();?>images/e-course.png" alt="Course Portal" class="logo"/>
			</div>
			<div>
				<h1 class="font-welcome">Welcome to Online Course Portal!</h1>
			</div>
			<div>
				<form method = "post" action = "<?php echo base_url('login/validate_credentials')?>">
					<table class="logintable">
						<tr>
							<td class="font-up">Username&nbsp&nbsp</td>
							<td><input id="inputUsername" name = "username" type="text" placeholder="username"></td>
						</tr>
						<tr>
							<td class="font-up">Password</td>
							<td><input type="password" name = "password" placeholder="********"></td>
						</tr>
					</table>
					<input type="submit" class="btn btn-primary" value="Login"/>
				</form>
			</div>
			
			<div>
				<table class="logintable">
					<tr>
						<td><a href = "registration.html">Having problem loggin in?</a></td>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>
						<td>	<?php echo anchor('login/signup', 'Create Account'); ?></td>
					</tr>
				<table>
		</div>
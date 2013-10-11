
<div class="registrationbox">
			<form class="form-inline" method = "post" action = "<?php echo base_url('login/create_member')?>">
			  <fieldset>
				<legend>Registration</legend>
				<div class="subdivision">
					<label>Sign up as</label>
					<select class="span2">
						<option value = "1">Student</option>
						<option value = "2">Faculty</option>
					</select>
					<label>&nbsp&nbsp&nbspCourse</label>
					<select class="span4">

						<?php
							foreach ($courses as $row) {
								echo "<option value = '".$row->id."'>".$row->title."</option>";
							}
						?>

					</select>
				</div>
				<div class="subdivision">
					<label>First Name</label>
					<?php echo form_input('first_name', set_value('first_name',''),'placeholder="First Name"'); ?>
					<label>&nbsp&nbsp&nbspLast Name</label>
					<?php echo form_input('last_name', set_value('last_name',''),'placeholder="Last Name"'); ?>
					</br>
				</div>
				<div class="subdivision">
					<label class="radio">
						<input type="radio" name="gender" id="male" value="male" checked>
						Male&nbsp&nbsp&nbsp
					</label>
					<label class="radio">
						<input type="radio" name="gender" id="female" value="female">
						Female&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					</label>
					<label>Contact Number</label>
					<input class="span2" type="text" placeholder="Contact Number">
				</div>
				<div class="subdivision">
					<label>Email Address</label>
					<?php echo form_input('email', set_value('email',''),'placeholder="Email"'); ?>
					<label>&nbsp&nbsp&nbspUsername</label>
					<?php echo form_input('username', set_value('username',''),'placeholder="Username"'); ?>
				</div>
				<div class="subdivision">
					<label>Password</label>
					<input class="span3" type="password" name="password" placeholder="password">
					<label>&nbsp&nbsp&nbspConfirm password</label>
					<input class="span3" type="password" name="password2" placeholder="password">
				</div>
				<div class="btn-group">
				<button type="submit" class="btn btn-primary btn-warning">Register</button>
				<button type="submit" class="btn btn-primary btn-danger">Cancel</button>
				</div>
			  </fieldset>
			</form>
			  <?php echo validation_errors('<p class = "error alert">') ?> 
		</div>
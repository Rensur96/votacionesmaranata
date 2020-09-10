<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="section">
	<form action="<?= base_url() ?>welcome/login" method="POST">
		<!-- Change The Form Method From Here-->
		<div class="card-panel">
			<!-- Form Logo Section  -->
			<div class=" ">
				<div class="col s12 m12 l12 center">
					<img src="<?= base_url() ?>src/images/banner.jpg" alt="" class="responsive-img circle" style="width:375px;">
					<h5 class="header col s12 light">Ingrese sus datos</h5>
				</div>
			</div>
			<!-- Form Username Input Section -->

			<div class="col s12 m12 l12">
				<div class="input-field">
					<i class="material-icons prefix">person</i>
					<input type="text" name="user" required id="username">
					<label for="username">Usuario</label>
				</div>
			</div>

			<!-- Form Password Input Section -->

			<div class="col m12 l12">
				<div class="input-field">
					<i class="material-icons prefix">lock</i>
					<input type="password" name="pass" required id="password">
					<label for="password">Contraseña</label>
				</div>
			</div>

			<!-- Form Button Section  -->

			<div class="center">
				<input type="submit" value="Entrar" name="login" class="btn 	 waves-light "
					style="width:100%; background-color: #00bfa5  ; "/>
			</div>

			<!-- Form "Register Now" And "Forgot Password" Link Section. -->

			<div class="" style="font-size:14px;"><br>
				<a href="" class="right ">Olvide mis datos</a>
			</div><br>
		</div>
	</form>
</div>

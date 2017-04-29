<?php include '../extend/header.php'; ?>

<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Alta usuarios</span>
				<form class="form" action="ins_usuarios.php" method="post" enctype="multipart/form-data">
					<div class="input-field">
						<input type="text" name="nick" required autofocus title="8 y 15 caracteres, solo letras" pattern="[A-Za-z] {8,15}" id="nick" onblur="may(this.value, this.id)">
						<label for="nick">Nick:</label>
					</div>

					<div class="validacion"></div>

					<div class="input-field">
						<input type="password" title="Contraseña con numerosy letras" pattern="[A-Za-z0-9]{8,15}" id="pass1" required >
						<label for="pass1">Contraseña:</label>
					</div>

					<div class="input-field">
						<input type="password" title="Contraseña con numerosy letras" pattern="[A-Za-z0-9]{8,15}" id="pass2" required >
						<label for="pass2">Verificar Contraseña:</label>
					</div>

					<select name="tipo" required>
						<option value="" disabled selected >Elige tipo de usuario</option>
						<option value="Administrador">Administrador</option>
						<option value="Asesor">Asesor</option>
					</select>

					<div class="input-field">
						<input type="text" name="nombre" title="Nombre de usuario" id="nombre" onblur="may(this.value, this.id)" required pattern="[A-Z/s ]+" >
						<label for="nombre">Nombre completo del usuario:</label>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<?php include '../extend/scripts.php'; ?>
<script>
	$('#nick').change(function() {
		$.post('ajax_validacion_nick.php', {
			nick:$('#nick').val(),


			beforeSend: function() {
				$('.validacion').html("Espere un momento porfavor..");
			}
		}, function(respuesta) {
				$('.validacion').html(respuesta);
		}
	)
	});
</script>
</body>
</html>

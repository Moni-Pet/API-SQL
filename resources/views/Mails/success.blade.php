<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Activación Exitosa</title>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
	<style>
		body {
            font-family: 'Quicksand', sans-serif;
        }

		h1 {
			font-weight: 700; /* bold */
			color: #2b2d2f;
		}

		h2 {
			font-weight: 600; /* semibold */
			color: #2b2d2f;
		}

		h4 {
			font-weight: 500;  /* medium */
			color: #2b2d2f;
		}

		.thin {
			font-weight: 300;
			color: #2b2d2f;
		}

		.verification-success {
			min-height: 100vh;
			padding: 20px;
			background-color: white;
		}

		.icon-circle {
			width: 100px;
			height: 100px;
			background-color: #dacd9e;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.subtitle {
			color: #6b6f73;
		}

		.btnHome {
			background-color: #489dba;
			width: 292px;
			padding: 16px;
			font-weight: 700;
			font-size: 16px;
			color: white;
			height: 54px;
			border-radius: 8px;
			box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
		}

		.btnHome:hover {
			background-color: #3787a3;
			color: white;
		}

		.btn.btnHome:active{
			background-color: #3787a3;
			color: white;
			outline: none;
			box-shadow: none;
		}
	</style>
</head>
<body>

<div class="verification-success d-flex flex-column justify-content-center align-items-center text-center">
  <div class="icon-circle mb-4">
    <img src="https://monipetresources.sfo3.digitaloceanspaces.com/other/mail-check.svg" alt="Mail check" class="img-fluid" style="width: 55px; height: 55px; color: white;">
  </div>

  <h3 class="mb-2">¡Cuenta verificada con éxito! 🎉</h3>
  <p class="mb-0 subtitle">Has verificado tu cuenta correctamente.</p>
  <p class="mb-0 subtitle">Ya puedes acceder a Monipet🐾</p>
  <p class="mb-0 subtitle">Bienvenido!!!</p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>

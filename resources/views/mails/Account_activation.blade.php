<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Monipet activación de cuenta</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
    body, p, h1, h2, h3, a {
      margin: 0; padding: 0; font-family: 'Quicksand', sans-serif;
      font-weight: 400;
    }

  </style>
</head>
<body style="margin:0; padding:0; background-color: #f4f4f7; font-family:Arial, sans-serif;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f4f4f7; padding:10px;">
    <tr>
      <td align="center">
        <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width:600px; margin-top:2rem; background-color: #ffffff; border-radius:16px; padding:30px; box-shadow:0 2px 3px rgba(0,0,0,0.16);">
          <tr>
            <td style="padding:30px; text-align:left; color: #2b2d2f;">
              <h1 style="font-size:24px; font-weight:bold; text-align:center; margin:0 0 20px;">Hola, {{ $name }}!!! 🐾</h1>
              <p style="font-size:16px; margin-bottom:20px;">Gracias por registrarte en Monipet. 🐕</p>
              <p style="font-size:16px; margin-bottom:20px;">Por favor, confirma tu cuenta haciendo click en el siguiente botón:</p>
              <p style="text-align:center; margin-bottom:20px;">
                <a href="{{ $url }}" target="_blank" rel="noopener" style="background-color: #489dba; color: #ffffff; text-decoration:none; padding:12px 25px; border-radius:4px; font-weight:bold; display:inline-block;">Activar Cuenta</a>
              </p>
              <p style="font-size:16px; margin-bottom:20px;">Si no creaste esta cuenta, puedes ignorar este correo.</p>
              <p style="font-size:16px;">Saludos,<br>El equipo de Monipet 🐱</p>
            </td>
          </tr>
        </table>
        <p style="font-size:12px; color: #6b6f73; text-align:center; margin-top:30px; margin-bottom:1rem;">Monipet © 2025. Todos los derechos reservados.</p>
      </td>
    </tr>
  </table>
</body>
</html>
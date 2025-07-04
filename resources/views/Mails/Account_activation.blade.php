<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Monipet activación de cuenta</title>
  <style>
    body, p, h1, h2, h3, a {
      margin: 0; padding: 0; font-family: Arial, sans-serif;
    }
    body {
      background-color: #f4f4f7;
      color: #51545e;
      line-height: 1.4;
      -webkit-text-size-adjust: none;
      width: 100% !important;
      height: 100%;
    }
    .email-wrapper {
      width: 100%;
      background-color: #f4f4f7;
      padding: 20px 0;
    }
    .email-content {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      border-radius: 4px;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 2px 3px rgba(0,0,0,0.16);
    }
    h1 {
      font-size: 24px;
      font-weight: bold;
      color: #333333;
      margin-bottom: 20px;
      text-align: center;
    }
    p {
      font-size: 16px;
      margin-bottom: 20px;
    }
    .button {
      background-color: #489dba;
      color: white !important;
      text-decoration: none;
      padding: 12px 25px;
      border-radius: 4px;
      font-weight: bold;
      display: inline-block;
    }
    .footer {
      text-align: center;
      color: #a8aaaf;
      font-size: 12px;
      margin-top: 30px;
    }
    svg {
        width: 300px;
        height: 90px;
        max-width: 100%;
    }
    @media only screen and (max-width: 620px) {
      .email-content {
        padding: 15px !important;
      }
      h1 {
        font-size: 20px !important;
      }
    }
  </style>
</head>
<body>
  <div class="email-wrapper">
    <div class="email-content">
      <h1>Hola, {{ $name }}!!! 🐾</h1>
      <p>Gracias por registrarte en Monipet. 🐕</p>
      <p>Por favor, confirma tu cuenta haciendo click en el siguiente botón:</p>
      <p style="text-align: center;">
        <a href="{{ $url }}" class="button" target="_blank" rel="noopener">Activar Cuenta</a>
      </p>
      <p>Si no creaste esta cuenta, puedes ignorar este correo.</p>
      <p>Saludos,<br>El equipo de Monipet 🐱</p>
    </div>
    <div class="footer">
      <p>Monipet © 2025. Todos los derechos reservados.</p>
    </div>
  </div>
</body>
</html>

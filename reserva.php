<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo-no-bg.png">
    <link rel="stylesheet" href="style.css">
    <title>Reserva Tu Viaje</title>
</head>
<body>
    <div class="card-vertical container normal-text">
        <h1 class="h1">Reserva Tu Asiento</h1>
        <img src="logo-no-bg.png" class="logo">
        <form method="" action="">
            <label class="normal-text" for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="normal-text in fill-width">
            <br>
            <label  class="normal-text " for="tel">teléfono de Contacto:</label>
            <input type="tel" name="tel" id="telefono" class="normal-text in fill-width">
            <br>
            <label  class="normal-text " for="viaje">Elija su viaje:</label>
            <select name="viaje" id="viaje" class="normal-text in fill-width">
                <option value="">Guadalajara, Martes 23/01/23 6:00</option>
                <option value="">Mocorito, Jueves 03/02/23 12:00</option>
                <option value="">Guanajuato, Viernes 21/03/22 6:00</option>
            </select>
            <label for="asientos" class="normal-text">Elija su(s) asiento(s)</label>
            <div class="container in in-seats-container">
                <div class="seat-column">
                    <div class="seat">A1</div>
                    <div class="seat">B1</div>
                    <div class="seat">A2</div>
                    <div class="seat avail-seat">B2</div>
                    <div class="seat">A3</div>
                    <div class="seat">B3</div>
                    <div class="seat avail-seat">A4</div>
                    <div class="seat">B4</div>
                </div>
                <div class="seat-column">
                    <div class="seat">C1</div>
                    <div class="seat">D1</div>
                    <div class="seat avail-seat">C2</div>
                    <div class="seat">D2</div>
                    <div class="seat">C3</div>
                    <div class="seat">D3</div>
                    <div class="seat">C4</div>
                    <div class="seat avail-seat">D4</div>
                </div>
            </div>
            <br>
            <input type="submit" value="Reservar Mi Lugar" class="normal-text button">
        </form>
    </div>
    <script src="reserva.js"></script>
</body>
</html>
<?php
    if ($_GET["user"] != "admin" or $_GET["pass"] != "Noriega221209") {
        header("https://tresriostravel.000webhostapp.com/reserva.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo-no-bg.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Administración</title>
</head>
<body>
    <div class="container card-big">
        <div class="container card-horizontal normal-text">
            <h1 class="h1 normal-text align-left">Administre sus viajes, reservas y camiones</h1>
            <br>
            <p class="normal-text">
                Aquí puede consultar los viajes que ha planeado, añadir nuevos o eliminar viajes que ya pasaron. También puede ver el estado de las reservas de cada viaje y confirmar reservas que ya fueron pagadas.
            </p>
            <div class="card-horizontal">
                <div class="card-header">
                    <h2 class="h2 white normal-text">Nuevo Viaje</h2>
                </div>
                <div class="card-body">
                    <form action="">
                        <label for="destino" class="normal-text">Destino:</label>
                        <input  type="text" name="destino" value="Guadalajara" class="in normal-text">
                        <br>
                        <label for="salida" class="normal-text">Locación de salida:</label>
                        <input  type="text" name="salida" title="Esquina Guillermo Prieto y Rosendo G. Castro" value="Esquina Guillermo Prieto y Rosendo G. Castro" class="in normal-text">
                        <br>
                        <label for="fecha" class="normal-text">Fecha:</label>
                        <input  type="date" name="fecha" value="2023-03-22" min="2022-12-01" class="in normal-text">
                        <br>
                        <label for="hora" class="normal-text">Hora:</label>
                        <input  type="time" name="hora" value="23:00" class="in normal-text">
                        <br>
                        <label for="fecha-llegada" class="normal-text">Fecha de Llegada:</label>
                        <input  type="date" name="fecha-llegada" value="2023-03-22" min="2022-12-01" class="in normal-text">
                        <br>
                        <label for="hora-llegada" class="normal-text">Hora de Llegada:</label>
                        <input type="time" name="hora-llegada" value="23:00" class="in normal-text">
                        <br>
                        <label for="camion" class="normal-text">Camión</label>
                        <select name="camion" id="camion"  class="in normal-text">
                            <option value="S52">Sprinter 52</option>
                            <option value="S02">sprinter 2</option>
                            <option value="C12">camión 12</option>
                        </select>
                        <br>
                        <label for="costo" class="normal-text">Costo por boleto:</label>
                        <input type="number" name="costo" id="costo" value="250"  class="in normal-text">
                        <br>
                        <input type="submit" value="Actualizar" class="button" id="submit">
                    </form>
                </div>
            </div>
            <div class="card-horizontal viaje">
                <div class="card-header">
                    <h2 class="h2 white normal-text">Guadalajara, 22/03/23, 23:00</h2>
                </div>
                <div class="card-body">
                    <form method="" action="">
                        <label for="destino" class="normal-text">Destino:</label>
                        <input disabled type="text" name="destino" value="Guadalajara" class="in normal-text">
                        <br>
                        <label for="salida" class="normal-text">Locación de salida:</label>
                        <input disabled type="text" name="salida" title="Esquina Guillermo Prieto y Rosendo G. Castro" value="Esquina Guillermo Prieto y Rosendo G. Castro" class="in normal-text">
                        <br>
                        <label for="fecha" class="normal-text">Fecha:</label>
                        <input disabled type="date" name="fecha" value="2023-03-22" min="2022-12-01" class="in normal-text">
                        <br>
                        <label for="hora" class="normal-text">Hora:</label>
                        <input disabled type="time" name="hora" value="23:00" class="in normal-text">
                        <br>
                        <label for="fecha-llegada" class="normal-text">Fecha de Llegada:</label>
                        <input disabled type="date" name="fecha-llegada" value="2023-03-22" min="2022-12-01" class="in normal-text">
                        <br>
                        <label for="hora-llegada" class="normal-text">Hora de Llegada:</label>
                        <input disabled type="time" name="hora-llegada" value="23:00" class="in normal-text">
                        <br>
                        <label for="camion" class="normal-text">Camión</label>
                        <select name="camion" id="camion" disabled class="in normal-text">
                            <option value="S52">Sprinter 52</option>
                            <option value="S02">sprinter 2</option>
                            <option value="C12">camión 12</option>
                        </select>
                        <br>
                        <label for="costo" class="normal-text">Costo por boleto:</label>
                        <input type="number" name="costo" id="costo" value="250" disabled class="in normal-text">
                        <br>
                        <input type="button" value="Editar" class="button" id="edit-reset">
                        <input disabled type="submit" value="Actualizar" class="button" id="submit">
                    </form>
                    <br>
                    <h2 class="h2">Reservas:</h2>
                    <div class="table-container">    
                        <table class="table">
                            <tr class="tr white">
                                <th class="th table-cell">Folio</th>
                                <th class="th table-cell">Nombre</th>
                                <th class="th table-cell">No. de Contacto</th>
                                <th class="th table-cell">Importe</th>
                                <th class="th table-cell">Fecha de pago</th>
                                <th class="th table-cell">Asiento</th>
                            </tr>
                            <tr>
                                <td class="td table-cell">1234</td>
                                <td class="td table-cell">Manuel Gastélum</td>
                                <td class="td table-cell">6688686862</td>
                                <td class="td table-cell">
                                    <form action="">
                                        <input type="number" name="importe" value="400" class="in normal-text">
                                        <input type="submit" value="&#x2713;">
                                    </form>
                                </td>
                                <td class="td table-cell">
                                    <form action="">
                                        <input type="date" name="fecha-pago" value="2022-12-03" class="in normal-text">
                                        <input type="submit" value="&#x2713;">
                                    </form>
                                </td>
                                <td class="td table-cell">
                                    <form action="">
                                        <input type="text" name="asiento" value="B8" class="in normal-text">
                                        <input type="submit" value="&#x2713;">
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="admin.js"></script>
</body>
</html>
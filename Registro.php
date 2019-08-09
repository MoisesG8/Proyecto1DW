<!DOCTYPE html>
<div lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro medico</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

</head>
<div class="container">
<h1>DATOS DEL PACIENTE</h1>
<form id="formulario">
<div class="row">
    <div class="col-lg-6 col-md-8 xs-12">
        <div style="padding: 5%; ; box-shadow: 1px 2px 2px #17a2b8; border: 1px solid #17a2b8;" align="center">
<table class="table table-condensed" style="width: 70%"></table>
   <tr>
        <td><label  class="form-check-label" >Nombre</label></td>
        <td><input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escriba su nombre" required><br>
        </td>
   </tr>
<tr>
    <td><label class="form-check-label">Segundo Nombre</label></td>
<td><input type="text" name="segundo" id="segundo" class="form-control" placeholder="Escriba su segundo nombre"><br>
</td>
</tr>
<tr>
    <td> <label class="form-check-label">Apellidos</label></td>
    <td> <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Escriba su apellido" required ><br></td>
</tr>
<tr>
    <td><label class="form-check-label">DPI</label></td>
    <td><input type="text" name="dpi" id="dpi" class="form-control" placeholder="Escriba su DPI" required ><br></td>
</tr>
<tr>
    <td> <label class="form-check-label">Edad</label></td>
    <td><input type="text" name="edad" id="edad" class="form-control" placeholder="Ingrese su edad" required><br></td>
</tr>
<tr>
    <td><label class="form-check-label">Email</label></td>
    <td> <input type="email" name="email" id="email" class="form-control" placeholder="example@xxx.com" required><br></td>
</tr>
<tr>
    <td><label class="form-check-label">Telefono</label></td>
    <td><input  type="tel" name="telefono" id="telefono" class="form-control"  placeholder="Ingrese su numero de telefono" ><br></td>
</tr>
    <tr>
        <td colspan="2">
            <hr>
            <div id="panel_respuesta"></div>
        </td>
        </tr>
        <td colspan="2" align="center">
            <button type="submit" class="btn btn-success" >Enviar</button>
<input type="reset" class="btn btn-danger" value="Eliminar informacion">
        </td>
    </table>
    </div>
</form>
</div>
    <div class="col-lg-6 col-md-8 xs-12">
        <h3 align="center">INFORMACION DEL USUARIO REGISTRADO</h3>
<div class="mt-3" id="respuesta">

</div>
    </div>
</div>
<p class="text-danger"> </p>
</body>
<script type="text/javascript" src="js/control_pacientes.js"></script>
</html>
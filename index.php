<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title></title>
  </head>
  <body>
    <div class="col-md-offset-5 col-md-12">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_registro" name="button">Registro</button>
    </div>

    <!-- Modal -->
    <div id="modal_registro" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title col-md-9 text-left">Registro</h4>
            <div class="col-md-3 text-right"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
          </div>
          <div class="modal-body">

            <table>
              <tr>
                <th>Nick: </th>
                <th>Contraseña: </th>
              </tr>
              <tr>
                <td><input type="text" name="" placeholder="Nickname" id="nick" value=""></td>
                <td><input type="text" name="" placeholder="****" id="password" value=""></td>
              </tr>
              <tr>
                <td></td>
                <td> <button type="button" class="btn btn-primary" name="button" id="btn_registro" data-dismiss="modal">Registrarme</button></td>
              </tr>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>


  </body>


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script type="text/javascript">
    $( document ).ready(function() {

      $( "#btn_registro" ).click(function(){

        $.ajax({
          type:"GET",
          url:"php/registro.php",
          data:{
            nick:$('#nick').val(),
            password:$('#password').val()
          }, success:function(data){
            alert(data);
          }
        });

      });


    });
  </script>


</html>

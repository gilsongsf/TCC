<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 style="
                    margin-top:100px;">Cadastro de Turmas</h1>
      <p> </p>
      <p class="lead"></p>
      <ul class="list-unstyled">
        <form id="cadastro" name="cadastro" method="post" action="banco/updateT.php">

          <!-- Olha ele aqui -->

          <div class="container">
            <div class="row">
              <div class='col-sm-12'>
                <div class="form-group">
                  <div class='input-group date' id='datetimepicker1'>
                    <label>Data:</label>
                    <input type='text' data-date-format="DD-MM-YYYY" class="form-control" />
                    <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                </div>
              </div>
              <script type="text/javascript">
                $(function() {
                  $('#datetimepicker1').datetimepicker();
                });
              </script>
            </div>
          </div>
          <!-- /.container -->
<?php
	session_start();
	$rut='../';
	require_once($rut.'const.php');
  $direc='orden.php';
  $pagina='Detalle de Orden';
  $padre='Orden de muestra';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $pagina.TIT; ?></title>
	<?php include_once($rut.'1stylesDAT.php');  ?>
  <?php
    $inf = null;
    require_once($rut.DIRACT.$direc);
    $inf = detalle($rut,$uid,$pid);
  ?>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed">
<div class="wrapper">

	<?php include_once($rut.'1nav.php');  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $pagina; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Express</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-6">
                    <br>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-right">
                    <div class="breadcomb-report">
                      <?php include_once($rut.'export.php'); ?>
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning"><i class="fas fa-file-import"></i> Importar</button>
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">T</span>
                            </button>
                            <div class="dropdown-menu" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(68px, 38px, 0px);">
                                <button class="dropdown-item" type="button" data-toggle="modal" data-target="#importar">Importar CSV <i class="fas fa-file-excel"></i></button>
                                <a class="dropdown-item" href="<?= substr($direc, 0, -4); ?>.csv">Muestra <i class="fas fa-file-excel"></i></a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <!-- Main content -->
    <?php if (isset($_SESSION['stat']) || isset($_SESSION['Mysqli_Error'])): ?>
        <section class="content">
            <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                            if (isset($_SESSION['Mysqli_Error'])) {
                                echo $_SESSION['Mysqli_Error'];
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>
    <!-- /.content -->

    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> AdminLTE, Inc.
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br>
                    Email: info@almasaeedstudio.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>John Doe</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (555) 539-1037<br>
                    Email: john.doe@example.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product</th>
                      <th>Serial #</th>
                      <th>Description</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Call of Duty</td>
                      <td>455-981-221</td>
                      <td>El snort testosterone trophy driving gloves handsome</td>
                      <td>$64.50</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Need for Speed IV</td>
                      <td>247-925-726</td>
                      <td>Wes Anderson umami biodiesel</td>
                      <td>$50.00</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Monsters DVD</td>
                      <td>735-845-642</td>
                      <td>Terry Richardson helvetica tousled street art master</td>
                      <td>$10.70</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Grown Ups Blue Ray</td>
                      <td>422-568-642</td>
                      <td>Tousled lomo letterpress</td>
                      <td>$25.99</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="<?= $rut; ?>dist/img/credit/visa.png" alt="Visa">
                  <img src="<?= $rut; ?>dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="<?= $rut; ?>dist/img/credit/american-express.png" alt="American Express">
                  <img src="<?= $rut; ?>dist/img/credit/paypal2.png" alt="Paypal">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$250.30</td>
                      </tr>
                      <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>$5.80</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>$265.24</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    </section>
  </div>
  
	<?php include_once($rut.'4footer.php');  ?>

	<?php include_once($rut.'2javaDAT.php');  ?>

  <!-- Modal -->
  <div class="modal fade" id="importar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form method="post" enctype="multipart/form-data" action="<?= ACTI.$direc; ?>">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Importar Números</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Seleccione CSV de Excel:</label>
              <input type="file" name="sel_file" class="form-control" required="required" >
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Fecha de Ingreso:</label>
              <input type="date" name="fecha_de_ingreso" class="form-control" required="required" >
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Canal de Ingreso:</label>
              <input type="text" name="canal_de_ingreso" class="form-control" required="required" >
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Operador:</label>
              <input type="text" name="administrador" class="form-control" required="required" >
            </div>
            <div class="form-group">
              
              <input type="hidden" value="1" name="id_fecha" class="form-control" readonly>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="importar" class="btn btn-primary">importar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
<?php
  unset($_SESSION['Mysqli_Error']);
?>
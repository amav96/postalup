<?php
  <h1>Si lo que quieres es que al dar click en el
   td pase el valor directo al modal entonces
   lo que tienes que hacer es utilizar el evento
   click, jalar el valor del text y pasarlo 
   directamente al input, de la siguiente manera</h1>
   

   $(document).on( 'click', '.editProductModal', function () {
    $('#valueQueNecesito').val($(this).text());
    $('#editProductModal').modal('show');
});

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js"></script>
<table id="table1" class='table table-responsive'>
    <thead>
    <tr>
        <th scope='col'>Nro.Orden</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="order">1</td>
    </tr>
    <tr>
        <td class="order">2</td>
    </tr>
    <tr>
        <td class="order">3</td>
    </tr>
    </tbody>
</table>

<div id="editProductModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <input type="text" name="edit_id_orden" id="valueQueNecesito" class="form-control" required>
            </div>
        </div>
    </div>
</div>






?>
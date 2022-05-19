<?php
include('security.php');
?>

  <div class="row">
    <a href="item.php" style="color:teal;">
	<div class="col-md-3" style="box-shadow: 10px 5px 5px">
       <div class="panel-mb-4 panel-box clearfix">
         <div class="panel-icon pull-left bg-secondary1">
          <i class="glyphicon glyphicon-list-alt fa-2x"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top">
          <?php

            require 'config.php';

            $query = "SELECT item_id FROM item ORDER BY item_id";
            $query_run = mysqli_query($connection, $query);

            $row = mysqli_num_rows($query_run);

            echo '<h1> '.$row.'<h1>';
            ?> </h2>
          <p class="text-muted" style="color:black">Total Items</p>
        </div>
       </div>
    </div>
	</a>
	
	<a href="expired.php" style="color:maroon;">
    <div class="col-md-3" style="box-shadow: 10px 5px 5px">
       <div class="panel-mb-4 panel-box clearfix">
         <div class="panel-icon pull-left bg-blue2">
          <i class="glyphicon glyphicon-remove fa-2x"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> 
          <?php

            require 'config.php';

            $query = "SELECT exp_id FROM expired ORDER BY exp_id";
            $query_run = mysqli_query($connection, $query);

            $row = mysqli_num_rows($query_run);

            echo '<h1> '.$row.'<h1>';
            ?>

          </h2>
          <p class="text-muted" style="color:black">Expired Items</p>
        </div>
       </div>
    </div>
	</a>

  <a href="stock.php" style="color:gray-2;">
    <div class="col-md-3" style="box-shadow: 10px 5px 5px">
       <div class="panel-mb-4 panel-box clearfix">
         <div class="panel-icon pull-left bg-red">
          <i class="glyphicon glyphicon-th-list fa-2x"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top">
          <?php

            require 'config.php';

            $query = "SELECT stock_id FROM stock ORDER BY stock_id";
            $query_run = mysqli_query($connection, $query);

            $row = mysqli_num_rows($query_run);

            echo '<h1> '.$row.'<h1>';
            ?> </h2>
          <p class="text-muted" style="color:black">Total Stocks</p>
        </div>
       </div>
    </div>
	</a>

</div>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
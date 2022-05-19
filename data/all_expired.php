<?php 
require_once('../class/Expired.php');
$expireds = $expired->all_expired();

 ?>
 <h2>Expired Item</h2>
<div class="table-responsive">
        <table id="myTable-expired" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th><center>Item Name</center></th>
                    <th><center>Price</center></th>
                    <th><center>Qty</center></th>
                    <th><center>Expired Date</center></th>
                </tr>
            </thead>
            <tbody>
           
           <?php foreach($expireds as $ex): ?>
                <tr align="center" class="text-danger">
                    <td><?= ucwords($ex['exp_itemName']); ?></td>
                    <td><?= "Php ".number_format($ex['exp_itemPrice'], 2); ?></td>
                    <td><?= $ex['exp_itemQty']; ?></td>
                    <td><?= $ex['exp_expiredDate']; ?></td>
                    <td>
                           <center>
                               <a onclick="deleteAjax('<? echo $result['exp_id'];  ?>');"   type="button" class="btn btn-danger"  
                               href='./delete.php?id='.$ex[exp_id]>Delete
                              </a>
                           </center>
                    </td>
                        </tr>
                 <?php endforeach; ?>
        </tbody>
    </table>
</div>      
       
       <script type="text/javascript">
	 
	 function deleteAjax(id){
   
       if(confirm('are You sure?')){
         
         $.ajax({

              type:'post',
              url:'delete.php',
              data:{delete_id:id},
              success:function(data){
              
                   $('#delete'+id).hide('slow');

              }

         });

       }


	 }
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable-expired').DataTable();
    });
</script>

<?php 
$query = "SELECT * FROM categories";

$select = mysqli_query($con,$query);

   while ($result = mysqli_fetch_array($select)) {
    
$expired->Disconnect();
   }
 ?>
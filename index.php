<!DOCTYPE html>
<html>
<head>
<!--DEPENDENCIES PLUGINS -->
<?php include('views/layout/_shim.html'); ?> <!-- browser's compatibility-->

<!--Font-Awesome BELOW-->

<!--Bootstrap CSS BELOW-->

<!--JQUERY BELOW-->

<!--Datatables BELOW-->

<!--Datatables Bootsrap CSS BELOW -->

<!--Datatables Javascript BELLOW -->  

<!--/.DEPENDENCIES PLUGINS -->

</head>
<body>

<?php include('views/layout/_header.html'); ?> <!-- header -->


<div class="container"><!-- main content-->
<hr>
	<div class="jumbotron">
		<div class="row">
			<div id="div_name" class="col-sm-4 col-xs-12" style="margin-top:10px">
				<input id="name" class="form-control" placeholder="Name">
			</div>
			<div id="div_address" class="col-sm-4 col-xs-12" style="margin-top:10px">
				<textarea id="address"  class="form-control" placeholder="Address" style="resize:none"></textarea>
			</div>
			<div  class="col-sm-4 col-xs-12" style="margin-top:10px">
				<button  class="btn btn-lg btn-success"> SAVE RECORD</button>
			</div>
		</div><!--row-->

		<hr>

		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8 col-xs-12">
				<table id="mytable" style="border:solid 1px">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Address</th>
					</thead>
				</table>
			</div><!--col-->
			<div class="col-sm-2"></div>
		</div><!--/.row-->

	</div> <!--./div.-->

</div>


</body>
</html>


<script> /* CONTROLLER SCRIPT */

  function populate_mytable(){ 
    //ajax now
    $.ajax ({
      type: "POST",
      url: "serverside/populate_mytable.php",
      dataType: 'json',      
      cache: false,
      success: function(x)
      {
        mytable.fnClearTable();        
        for(var i = 0; i < x.length; i++) 
        { 
          mytable.fnAddData
          ([
						x[i][0],x[i][1],x[i][2],     
          ]); 
        }       
      }  
    }); 
    //ajax end  
  } //.load cat_table


</script> 
<?php include("header.php");?>
<?php $res=mysql_query("SELECT * FROM vehicle");
$query_parent = mysql_query("SELECT * FROM manufacturer") or die("Query failed: ".mysql_error());
?>
<?php
if(isset($_POST['submit']))
{
	$manufacturer_name =  $_POST['manufacturer_name'];
	$model_name =  $_POST['model_name'];
	$category =  $_POST['category'];
	$b_price =  $_POST['b_price'];
	$mileage =  $_POST['mileage'];
	$add_date =  $_POST['add_date'];
	$status =  "Available";
	$registration_year =  $_POST['registration_year'];
	$insurance_id =  $_POST['insurance_id'];
	$gear =  $_POST['gear'];
	$doors =  $_POST['doors'];
	$seats =  $_POST['seats'];
	$tank =  $_POST['tank'];
	$e_no = $_POST['e_no'];
	$c_no = $_POST['c_no'];
	$v_color = $_POST['v_color'];
	
	if(isset($_FILES['support_images']['name']))
	        {
	            $file_name_all="";
	            for($i=0; $i<count($_FILES['support_images']['name']); $i++) 
	            {
	                   $tmpFilePath = $_FILES['support_images']['tmp_name'][$i];    
	                   if ($tmpFilePath != "")
	                   {    
	                       $path = "uploads/";
	                       $name = $_FILES['support_images']['name'][$i];
	                      $size = $_FILES['support_images']['size'][$i];
	       
	                       list($txt, $ext) = explode(".", $name);
	                       $file= time().substr(str_replace(" ", "_", $txt), 0);
	                       $info = pathinfo($file);
	                       $filename = $file.".".$ext;
	                       if(move_uploaded_file($_FILES['support_images']['tmp_name'][$i], $path.$filename)) 
	                       { 
	                          date_default_timezone_set ("Asia");
	                          $currentdate=date("Y M d");
	                          $file_name_all.=$filename."*";
	                       }
	                 }
	            }
	            $filepath = rtrim($file_name_all, '*'); //imagepath if it is present    
	        }
	        else
	        {
	            $filepath="";
	        }	
		if(mysql_query("INSERT INTO vehicle(v_color,e_no,c_no,manufacturer_name,model_name,category,b_price,mileage,add_date,status,registration_year,insurance_id,gear,doors,seats,tank,image) VALUES('$v_color','$e_no','$c_no','$manufacturer_name','$model_name','$category','$b_price','$mileage','$add_date','$status','$registration_year','$insurance_id','$gear','$doors','$seats','$tank','".addslashes($filepath)."')"))
		{
			?>
			<script>document.location = 'vehicles.php';</script>
			<?php
		}
		else
		{
			?>
			<script>alert('Error while Inserting data ! Blank / Duplicate Data Provided');</script>
			<?php
		}			
}


?>

<html>
<body>

 <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
     <div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Add|View|Sell Vehicles</li>
			</ol>
	</div><!--/.row-->
			<div id="myModal" class="modal fade" >
			<div class="modal-dialog modal-lg">
			<!-- Modal view content-->
			<div class="modal-content"></div></div>
			</div>
			
	<!-- Modal Insert Vehicle -->
	<div class="modal fade" id="insert" role="dialog" aria-labelledby="insert" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					<h4 class="modal-title custom_align" id="Heading">Add New Vehicle</h4>
				</div>
			<form class="form-horizontal" method="post" enctype="multipart/form-data">  
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-6">
					<label>Vehicle Manufacturer</label>
							<select class="form-control" name="manufacturer_name" id="parent_cat">
								<?php while($row = mysql_fetch_array($query_parent)): ?>
								<option value="<?php echo $row['manufacturer_name']; ?>"><?php echo $row['manufacturer_name']; ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<div class="col-xs-6">
							<label>Vehicle Model</label>
					<select class="form-control" name="model_name" id="sub_cat"></select>
						</div>
					</div>
							
						<br>
						
					<div class="row">
						<div class="col-xs-6">
						<label>Vehicle Category</label>
							<select class="form-control" name="category" required>
							  <option value="Subcompact">Subcompact</option>
							  <option value="Compact">Compact</option>
							  <option value="Mid-size">Mid-size</option>
							  <option value="Full-size">Full-size</option>
							  <option value="Mini-Van">Mini-Van</option>
							</select>
						</div>
						<div class="col-xs-6">
						<br>
						 <input type="number" step="any" class="form-control" name="b_price" placeholder="Buying Price" required>
						</div>
					</div>
							
						<br>
					<div class="row">
						<div class="col-xs-6">
						<br>
						 <input class="form-control" name="gear" placeholder="Gear Mode-Auto/Manual" required>
						</div>
						<div class="col-xs-6">
						<br>
						 <input type="number" step="any" class="form-control" name="mileage" placeholder="Mileage(km)" required>
						</div>
					</div>
							
						<br>
					<div class="row">
						<div class="col-xs-6">
						<br>
						 <input class="form-control" name="e_no" placeholder="Engine Number" required>
						</div>
						<div class="col-xs-6">
						<br>
						 <input class="form-control" name="e_no" placeholder="Chassis Number" required>
						</div>
					</div>
							
						<br>
						
					<div class="row">
						<div class="col-xs-6">
						<label>Add Date</label>
						 <input type="Date"class="form-control" name="add_date"  value="<?php echo date("Y-m-d"); ?>" required>
						</div>
						<div class="col-xs-6">
						<br>
						 <input type="number" class="form-control" name="doors" placeholder="No of Doors" required>
						</div>
					</div>
							
						<br>

					<div class="row">
						<div class="col-xs-6">
		<br>
						 <input type="number"class="form-control" name="registration_year" placeholder="Registration Year"required>
						</div>
						<div class="col-xs-6">
						<br>
						 <input type="number" class="form-control" name="insurance_id" placeholder="Insurance ID" required>
						</div>
					</div>
							
							<br>

					<div class="row">
						<div class="col-xs-6">
						 <input type="number"class="form-control" name="seats" placeholder="No of seats"required>
						</div>
						<div class="col-xs-6">
						 <input type="number" step="any" class="form-control" name="tank" placeholder="Tank Capacity(litters)" required>
						</div>
					</div>
							<br>
							
					<div class="row">
						<div class="col-xs-6">
						 <input type="text"class="form-control" name="v_color" placeholder="Color"required>
						</div>
					</div>
							<br>
					<div class="row">
						
						<div class="col-xs-6">
						<label>Add Images</label>
						 <input type="file" id="file" name="support_images[]" multiple="multiple" accept="image/*" />
						</div>
					</div>

						<br>

						</div>

							<div class="modal-footer ">
								
								<button type="submit" name="submit" id="submit" class="btn btn-success btn-lg" style="width: 100%;">
									<span class="glyphicon glyphicon-ok-sign"></span>
										Add New Vehicle
								</button>
							   
							</div>
						</form> 
						</div> <!-- /.modal-content --> 

					</div> <!-- /.modal-dialog --> 

				</div>
				
				
				
				<!-- modal for selling the vehicle -->
					
		<div class="row"><br>
			<div class="col-lg-12">
				<a data-toggle="modal" data-target="#insert" href="#" class="btn btn-primary">Add New Vehicle</a><br><br>
			</div> <!-- add new vehicle  button -->
		</div><!--/.row-->
		
		<div style="padding-left: 25%">
		<div style="display:inline">Sold Vehicle Filter</div>
			<div class="input-append date datepicker divDatePicker inline" id="datepicker" style="margin:0px;padding:0px;display:inline">
			<input type="text" class="datepicker input-small validation rightBorderNone otherTabs" id="fromDate" name="displayDate" placeholder="From Date" />
			<button class="btn leftBorderNone" type="button"><i class="glyphicon glyphicon-calendar"></i></button>
			</div>
		<div class="input-append date datepicker divDatePicker inline" id="datepicker" style="margin:0px;padding:0px;padding-left:4px;;display:inline">
        <input type="text" placeholder="To Date" class="datepicker input-small validation rightBorderNone otherTabs" id="toDate" name="displayDate" />
        <button class="btn leftBorderNone" type="button"><i class="glyphicon glyphicon-calendar"></i></button>
		</div>
		<br><br>
		<table >
        <tbody>
			<tr>
            <td>    Min Price:</td>
            <td><input type="text" id="min" name="min"></td>
			 <td>   Max Price:</td>
            <td><input type="text" id="max" name="max"></td>
			</tr>
		</tbody>
		</table>
				
		</div>
		
		
		
		 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
             <tr>
           
                <th>Vehicle id</th>
                <th>Model</th>
                <th>Manufacturer</th>
                <th>Category</th>
                <th>Adding date(m/d/Y)</th>
                <th>Selling date</th>
                <th>Status</th>
                <th>Image</th>
                <th>Buying price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
              
                <th>Vehicle id</th>
                <th>Model</th>
                <th>Manufacturer</th>
                <th>Category</th>
                <th>Adding date</th>
                <th>Selling date</th>
                <th>Status</th>
                <th>Image</th>
                <th>Buying price</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
             <?php
            $i = 1;
            while ($vehicle = mysql_fetch_assoc($res)) { ?>
              <tr class="<?php if($vehicle['status']!="Available") echo 'danger'; else echo 'success'?>">
                <td><?php echo $vehicle['v_id']; ?></td>
                <td><?php echo $vehicle['model_name']; ?></td>
                <td><?php echo $vehicle['manufacturer_name']; ?></td>
                <td><?php echo $vehicle['category']; ?></td>
                <td><?php $date = new DateTime($vehicle['add_date']); echo $date->format('m/d/Y'); ?></td>
                <td><?php if($vehicle['sold_date']=== NULL){ echo 'NULL'; }else{ $date = new DateTime($vehicle['sold_date']); echo $date->format('m/d/Y'); }?></td>
                <td><?php echo $vehicle['status']; ?></td>
                <td><img src="uploads/<?php $path=explode("*",$vehicle['image']); echo $path[0]; ?>" class="img-responsive"></td>
                <td><?php echo $vehicle['s_price']; ?></td>
                <td width=200px>
	
					<a href="sell.php?id=<?php echo $vehicle['v_id']; ?>" class="btn btn-success btn-xs"<?php if($vehicle['status']!="Available") echo 'style="display:none"';  ?>>Sell</a>
                    <a href="Actions.php?action=v_edit&id=<?php echo $vehicle['v_id']; ?>" class="btn btn-warning btn-xs" style="display:none" >Edit</a>
                    <a data-toggle="modal" data-target="#myModal" href="<?php if($vehicle['status']!="Available"){ echo 'Actions.php?action=vs_view&id=';} else{ echo 'Actions.php?action=v_view&id='; }?><?php echo $vehicle['v_id']; ?>" class="btn btn-info btn-xs" >View</a>
                    <a onclick="return confirm('All records will be deleted, continue?')" href="Actions.php?action=v_delete&id=<?php echo $vehicle['v_id']; ?>" class="btn btn-danger btn-xs" <?php if($userRow['u_type']!="Admin"){echo 'style="display:none"';} ?>  >Delete</a>
					
				</td>
            </tr>
            <?php } ?>
           
        </tbody>
    </table>
	 </div><!--/.col-->
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
         <script>
         $(document).ready(function() {
    $('#example').DataTable( {
        initComplete: function () {
            this.api().columns([2,3,6]).every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.header()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
    if(column.search() === '^'+d+'$'){
        select.append( '<option value="'+d+'" selected="selected">'+d+'</option>' )
    } else {
        select.append( '<option value="'+d+'">'+d+'</option>' )
    }
} );
            } );
        }
    } );
} );


$(function () {
    $("div .divDatePicker").each(function () {
        $(this).datepicker().on('changeDate', function (ev) {
            $(this).datepicker("hide");
        });
    });
    $(document).on('change', '#fromDate, #toDate', function () {
        $('#example').dataTable().DataTable().draw();
    });

});

/* Custom filtering function which will search data in column four between two values */
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( $('#min').val(), 10 );
        var max = parseInt( $('#max').val(), 10 );
        var age = parseFloat( data[8] ) || 0; // use data for the age column
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && age <= max ) ||
             ( min <= age   && isNaN( max ) ) ||
             ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    var table = $('#example').DataTable();
     
    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').keyup( function() {
        table.draw();
    } );
} );




$.fn.dataTableExt.afnFiltering.push(

function (oSettings, aData, iDataIndex) {
    if (($('#fromDate').length > 0 && $('#fromDate').val() !== '') || ($('#toDate').length > 0 && $('#toDate').val() !== '')) {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth();
        var yyyy = today.getFullYear();
console.log(today+"-- "+dd+" --"+mm+" --"+yyyy);
        if (dd < 10) dd = '0' + dd;

        if (mm < 10) mm = '0' + mm;

        today = mm + '/' + dd + '/' + yyyy;
        var minVal = $('#fromDate').val();
        var maxVal = $('#toDate').val();
        //alert(minVal+"   ----   "+maxVal);
        if (minVal !== '' || maxVal !== '') {
            var iMin_temp = minVal;
            if (iMin_temp === '') {
                iMin_temp = '01/01/1980';
            }

            var iMax_temp = maxVal;
            var arr_min = iMin_temp.split("/");

            var arr_date = aData[5].split("/");
//console.log(arr_min[2]+"-- "+arr_min[0]+" --"+arr_min[1]);
             var iMin = new Date(arr_min[2], arr_min[0]-1, arr_min[1]);
          //  console.log(iMin);
           // console.log(" --"+yyy);
           

            var iMax = '';
            if (iMax_temp != '') {
                var arr_max = iMax_temp.split("/");
                iMax = new Date(arr_max[2], arr_max[0]-1, arr_max[1], 0, 0, 0, 0);
            }




            var iDate = new Date(arr_date[2], arr_date[0]-1, arr_date[1], 0, 0, 0, 0);
            //alert(iMin+" -- "+iMax);
      //  console.log("Test data "+iMin+" -- "+iMax+"-- "+iDate+" --"+(iMin <= iDate && iDate <= iMax));
            if (iMin === "" && iMax === "") {
                return true;
            } else if (iMin === "" && iDate < iMax) {
                // alert("inside max values"+iDate);
                return true;
            } else if (iMax === "" && iDate >= iMin) {
                // alert("inside max value is null"+iDate);                    
                return true;
            } else if (iMin <= iDate && iDate <= iMax) {
              //  alert("inside both values"+iDate);
                return true;
            }
            return false;
        }
    }
    return true;
});
         </script>
		 
<script type="text/javascript">
$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after();
		$.get('Actions.php?action=v_cat&parent_cat=' + $(this).val(), function(data) {
			$("#sub_cat").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});
</script>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title>hi guys</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script type="text/javascript " src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
	var id='heeloo';
	alert(id);
</script>
<?php
$nk="<script> document.write(id) </script>";
echo $nk;

?>
<body>
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="edit" >
  Launch demo modal
</button>

<?php
        
        $unit = "unit-2";
        $nk = 2;

        echo $unit-$nk; 
      
      ?>

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



</body>
</html>
<script type="text/javascript">
  $(document).on('click','#edit',function(){
    alert('hi guys');
    $('#exampleModalScrollable').modal('show');
  });
</script>
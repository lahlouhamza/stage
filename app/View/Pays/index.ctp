pays

<?php
  echo "<select  onchange='showUser(this.value)'>";
    foreach ($data as $p) {
      $id=$p["Pay"]["id"];
      $nomPay=$p["Pay"]["nom"];
      echo "<option value='$id'> $nomPay</option>";

    }
    echo "<select>";

?>




<dir id="container"></dir>

<script type="text/javascript">
	
  	function showUser(value) {
		console.log(value);

		event.preventDefault(); 
		$chemin="ajax/"+value;
		console.log($chemin);

       $.get($chemin, {}, function(data){ 
       $('#container').empty().append(data); 
}); 
return false; 


	}

</script>



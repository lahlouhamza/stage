

 <h2> publié par : <?=$data["User"]["username"] ?> </h2>
  <h2> date Creation : <?=$data["Journal"]["created"] ?> </h2>
   <h2> publié nom : <?=$data["Journal"]["nom"] ?> </h2>
     <h2> extension : <?=$data["Journal"]["extension"] ?> </h2>
     <?php

   $source=$data["Journal"]["src"];
 echo " <a href='/stage/uploads/$source' class='btn btn-success btn-xs'><i class='fa fa-pencil'></i>&nbsp&nbsp Telecharger Pdf &nbsp &nbsp&nbsp</a>";
     ?>

 <object data='/stage/uploads/<?=$data["Journal"]["src"] ?>' type='application/pdf' width='900' height='400'>
	  lie alternatif : <a href='test.pdf'>test.pdf</a>
	</object>

	<style type="text/css">
		
		object {margin-left: 10%}
	</style>



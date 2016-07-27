

 <h2> publié par : <?=$data["User"]["username"] ?> </h2>
  <h2> date Creation : <?=$data["Journal"]["created"] ?> </h2>
   <h2> publié nom : <?=$data["Journal"]["nom"] ?> </h2>
     <h2> extension : <?=$data["Journal"]["extension"] ?> </h2>

 <object data='/stage/uploads/<?=$data["Journal"]["src"] ?>' type='application/pdf' width='900' height='400'>
	  lie alternatif : <a href='test.pdf'>test.pdf</a>
	</object>

	<style type="text/css">
		
		object {margin-left: 10%}
	</style>
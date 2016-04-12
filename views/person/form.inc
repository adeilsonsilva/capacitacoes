<form action="<?php echo RoutesHelpers::StorePersonPath(); ?>" method="POST" enctype="multipart/form-data" class="s-form">
	<div class="person-name">
	    <input type="text" class="form-control" name="person[name]" placeholder="Digite seu Nome" required>
	</div>

	<div class="person-age">
    	<input type="text" class="form-control" name="person[age]" placeholder="Digite sua Idade" required>
	</div>

	<div class="person-height">
    	<input type="text" class="form-control" name="person[height]" placeholder="Digite sua Altura" required>
	</div>

	<div class="person-course">
    	<h2>Curso</h2>
		<select title="Selecione seu curso" name="person[course]" required>
			<option value="">Selecione seu curso...</option>
			<option value="1">Ciência da Computação</option>
			<option value="2">Sistemas de Informação</option>
			<option value="3">Licenciatura em Computação</option>
			<option value="4">BI Ciência e Tecnologia</option>
			<option value="5">Outro</option>
		</select>
	</div>


	<div class="person-phrase">
		<textarea name="person[phrase]" rows="5" cols="80" placeholder="Digite sua frase favorita!" required></textarea>
	</div>

	<div class="submit-button">
	    <input type='hidden' name='action' value='insert' class="form-action">
	    <input type="submit" value="ENVIAR">
	</div>
</form>

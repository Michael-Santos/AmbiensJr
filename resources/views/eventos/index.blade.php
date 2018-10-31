<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form method="get" action=" route{{evento.store}} ">
	@csrf 

	Nome: <input type="text" name="nome">
	Descrição:  <input type="text" name="descricao">
	Data Evento: <input type="date" name="data_evento">
	Hora Evento: <input type="time" name="hora_evento">
	Data Inscrição: <input type="date" name="data_inscricao">
	Hora Inscrição: <input type="time" name="hora_inscricao">
	<input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

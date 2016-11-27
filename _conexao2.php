<?
// Dados do banco
$dbhost   = "hackathoncwb.database.windows.net";   #Nome do host
$db       = "hackathoncwb";   #Nome do banco de dados
$user     = "eduguedes"; #Nome do usuário
$password = "!1cderfv";   #Senha do usuário

// Dados da tabela
$tabela = "nometabela";    #Nome da tabela
$campo1 = "campo1tabela";  #Nome do campo da tabela
$campo2 = "campo2tabela";  #Nome de outro campo da tabela

@mssql_connect($dbhost,$user,$password) or die("Não foi possível a conexão com o servidor!");
@mssql_select_db("$db") or die("Não foi possível selecionar o banco de dados!");
 
$instrucaoSQL = "SELECT $campo1, $campo2 FROM $tabela ORDER BY $campo1";
$consulta = mssql_query($instrucaoSQL);
$numRegistros = mssql_num_rows($consulta);
 
echo "Esta tabela contém $numRegistros registros!\n<hr>\n";
 
if ($numRegistros!=0) {
	while ($cadaLinha = mssql_fetch_array($consulta)) {
		echo "$cadaLinha[$campo1] - $cadaLinha[$campo2]\n<br>\n";
	}
}
?>

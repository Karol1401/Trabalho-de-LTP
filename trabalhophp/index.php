<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Criar contato</h1>
    <form action="trabalho.php" method="post">
    <label for="nome">Nome</label>
   <input type="text" name="Nome" placeholder="Nome" required > <br>
   <label for="telefone">Telefone</label>
   <input type="text" name="Telefone" placeholder="Telefone" required ><br>
   <label for="email">E-mail</label>
   <input type="email" name="E-mail" placeholder="E-mail" required ><br>
   <label for="datanascimento">Data de Nascimento</label>
   <input type="date" id="datanascimento" name="DataNascimento"  required ><br>
   <button type="submit">Criar contato</button>
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Fórmulario de Clientes</b></legend>
                <div class="inputBox">
                   <input type="text" name="nome" id="nome" class="inputUser"required>
                   <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                   <input type="text" name="email" id="email" class="inputUser"required>
                   <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                   <input type="tel" name="telefone" id="telefone" class="inputUser"required>
                   <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                   <label for="data_nascimento" class="labelInput">Data de Nascimento:</label>
                   <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser"required>
                </div>
                <br><br>
                <div class="inputBox">
                   <input type="text" name="cidade" id="cidade" class="inputUser"required>
                   <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                   <input type="text" name="Estado" id="Estado" class="inputUser"required>
                   <label for="Estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                   <input type="text" name="endereço" id="endereço" class="inputUser"required>
                   <label for="endereço" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                   <input type="password" name="senha" id="senha" class="inputUser"required>
                   <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>      
    </div>
</body>
</html>
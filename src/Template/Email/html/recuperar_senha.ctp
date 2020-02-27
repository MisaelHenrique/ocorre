Olá <?= $name ?>, <br><br>
Você solicitou uma alteração de senha.<br>
Seguindo o link abaixo você podera alterar sua senha.<br>
Para continuar o processo de recuperação de sua senha, clique no link abaixo ou cole o endereço abaixo no seu navegador. <br><br>
<?= "<a href= '".$host_name . "/users/recuperar-senha/".$recuperar_senha."' >Clique aqui</a><br><br> "?>
Usuário: <?= $username ?><br><br>
Se você não solicitou essa alteração, nenhuma ação é necessaria. Sua senha permanecerá a mesma até que você ative este código. <br><br>

<!--
    http://localhost/cakephpAdm/admin/users/atualizar-senha/205854d40ace21c39fae21dbf17af070183b612b3cc334972705e12829caebee 
-->
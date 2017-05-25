<h2><i class="user icon"></i>Cadastrar Usuario</h2>
<form method="post" autocomplete="off" class="ui form" autocomplete="off">
    <label>Usuario: </label>
    <input type="text" name="name" required autofocus placeholder="digite um nome: "/>
    <label>E-mail: </label>
    <input type="text" name="email" required placeholder="email"/> 
    <input type="hidden" name="cadastrar"/>    
    <hr>
    <button type="submit" class="ui blue button"><i class="check green icon"></i>Cadastrar</button>
    
</form>

<div class='ui divider'></div>

<?php
    //bloco php
?>

<table border = "100%" class='ui red table'>
    <thead class='center aligned'>
        <tr>
            <td>Usuario </td>
            <td>Email </td>
            <td>Editar</td>
            <td>Deletar</td>
        </tr>
    </thead>
    <tbody class='center aligned'>
        <?php 
            $users = $user->read();
            foreach($users as $u): ?>
                <tr>
                    <td> <?=$u->name?> </td>
                    <td> <?=$u->email?> </td>
                    <td><a href="?p=editar&edit=true&id=<?=$u->id?>"><button class='ui green button'><i class="ui edit icon" ></i>E</button></a></td>        
                    <td><a href="?delete=true&id=<?=$u->id?>"><button class='ui red button'><i class='ui delete icon'></i>D</button></a></td>
                </tr>
            <?php endforeach; ?>
    </tbody>

</table>
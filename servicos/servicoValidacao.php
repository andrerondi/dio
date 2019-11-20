<?php

declare('strict_type=1');
function validaNome(string $nome) : bool
{
    if (empty($nome)) 
    {
        setarMensagemErro( mensagem: "O NOME não pode ser vazio");
        return false;
    }

    else if (strlen($nome) < 3) 
    {
        setarMensagemErro( mensagem: "O NOME não pode ter menos de 3 caracteres");
        return false;
    }
    else if (strlen($nome) > 40) 
    {
        setarMensagemErro( mensagem: "O NOME não pode ser muito extenso");
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if (!is_numeric($idade)) 
    {
        setarMensagemErro( mensagem: "A IDADE tem que ser númerica");
        return false;
    }
    return true;
}




<?php
namespace App\Autenticacao;

class Autenticador
{
    // Usuário cadastrado diretamente no objeto
    private string $email = 'admin@loja.com';
    private string $senha = '123456';

    public function login(string $email, string $senha):string
    {
        if($email !== $this->email){
            throw new \Exception('E-mail incorreto');
        }

        if($senha !== $this->senha){
            throw new \Exception('Senha incorreta');
        }

        return 'Login realizado com sucesso';            
    }
}
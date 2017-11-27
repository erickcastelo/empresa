<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 21/11/17
 * Time: 21:58
 */

namespace app\models;


use yii\base\Model;

class Empresa extends Model
{
    public $numero;
    public $email;
    public $cpf;
    public $rg;
    public $nome;
    public $senha;
    public $confirmasenha;
    public $datanascimento;
    public $datacriacao;
    public $fone;
    public $numerotipo;
    public $responsavel;
    public $authkey;
    public $accesstoken;
    public $servicolaboratorial;
    public $servicoimagem;
    public $cnpj;
    public $fantasia;
    public $bairro;
    public $endereco;
    public $foto;
    public $codpais;
    public $tipoempresa;

    public function rules()
    {
        return [
            // username and password are both required
            [['email', 'senha', 'tipoempresa'], 'required'],
            [['datacriacao', 'datanascimento'], 'safe'],
            [['numero', 'nome', 'rg', 'cpf', 'email', 'senha', 'confirmasenha', 'foto', 'endereco', 'bairro', 'fantasia', 'cnpj', 'servicoimagem', 'servicolaboratorial', 'accesstoken', 'authkey', 'responsavel', 'numerotipo', 'tipoempresa'], 'string'],
            ['confirmasenha', 'confirmationPassword']
        ];
    }

    public function confirmationPassword($attribute, $params)
    {
        $password = $this->senha;
        $confirmPassword = $this->confirmasenha;

        if ($password !== $confirmPassword){
            $this->addError($attribute, 'Senhas não conferem');
        }
    }

    public function attributeLabels()
    {
        return [
            'cpf' => 'CPF/CNPJ',
            'confirmasenha' => 'Confimar Senha'
        ];
    }

}
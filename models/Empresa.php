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

    public function rules()
    {
        return [
            // username and password are both required
            [['email', 'senha'], 'required'],
            [['datacriacao', 'datanascimento'], 'safe'],
            [['numero', 'nome', 'rg', 'cpf', 'email', 'senha', 'foto', 'endereco', 'bairro', 'fantasia', 'cnpj', 'servicoimagem', 'servicolaboratorial', 'accesstoken', 'authkey', 'responsavel', 'numerotipo'], 'string'],
        ];
    }

}
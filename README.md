# API CLIENT - MELHOR ENVIO

Cliente para integração com a API do sistema Melhor Envio. [Conheça o Melhor Envio](https://www.melhorenvio.com.br)

## Instalação

### Composer

```
"canislupus/api-client-melhor-envio": "dev-master"
```

## Utilização

~~~php
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiClient;
use CanisLupus\ApiClients\MelhorEnvio\v2\Enums\EnvironmentEnum;
use CanisLupus\ApiClients\MelhorEnvio\v2\MelhorEnvioApiConfig;
use CanisLupus\ApiClients\MelhorEnvio\v2\Exceptions\MelhorEnvioApiException;

$appName = 'Canis Lupus';
$appSupportEmail = 'leoaguiarpereira@gmail.com';
$token = '#TOKEN#';

// Inicialize o cliente passando um objeto de configuração
$clientMelhorEnvio = new MelhorEnvioApiClient(
    new MelhorEnvioApiConfig(EnvironmentEnum::Sandbox, $appName, $appSupportEmail, $token)
);


// Exemplo para a API de cotação de frete
try {    
    // ...

} catch (MelhorEnvioApiException $e) {
    die($e->getMessage());
}
~~~


## Exemplos

Exemplos podem ser encontrados na pasta docs/examples




## Abrangência

<table>
<tr>
    <td>Total de Endpoints</td>
    <td>34</td>
</tr>
<tr>
    <td>Total de Endpoints abrangidos</td>
    <td>2</td>
</tr>
<tr>
    <td>Percentual abrangido</td>
    <td>5,88%</td>
</tr>
</table>



### Lista de API's

| **Grupo**                                                 | **Recurso**                                     | **Situação** |
|-----------------------------------------------------------|-------------------------------------------------|:------------:|
| Autenticação                                              | [POST] Solicitação do token                     |      0%      |
| Autenticação                                              | [GET] Listar informações de aplicativo          |      0%      |
| Cotação                                                   | [POST] Cálculo de Fretes                        |      0%      |
| Criando envios                                            | [POST] Inserir fretes no carrinho               |      0%      |
| Criando envios                                            | [GET] Listar itens do carrinho                  |      0%      | 
| Criando envios                                            | [GET] Exibir informações de item do carrinho    |      0%      |
| Criando envios                                            | [DELETE] Remoção de itens do carrinho           |      0%      |
| Etiquetas                                                 | [POST] Geração de etiquetas                     |      0%      |
| Etiquetas                                                 | [POST] Impressão de etiquetas                   |      0%      |
| Etiquetas                                                 | [POST] Pré-visualização de etiquetas            |      0%      |
| Pagamento de envios                                       | [POST] Compra de fretes                         |      0%      |
| Pesquisa, listagem e cancelamento de etiquetas            | [GET] Pesquisar etiqueta                        |      0%      |
| Pesquisa, listagem e cancelamento de etiquetas            | [GET] Listar etiquetas                          |      0%      |
| Pesquisa, listagem e cancelamento de etiquetas            | [GET] Listar informações de uma etiqueta        |      0%      |
| Pesquisa, listagem e cancelamento de etiquetas            | [POST] Verificar se etiqueta pode ser cancelada |      0%      |
| Pesquisa, listagem e cancelamento de etiquetas            | [POST] Cancelamento de etiquetas                |      0%      |
| Pesquisa, listagem e cancelamento de etiquetas            | [POST] Rastreio de envios                       |      0%      |
| Listagem de transportadoras, serviços e agências          | [GET] Listar transportadoras                    |     100%     |
| Listagem de transportadoras, serviços e agências          | [GET] Listar informações de uma transportadora  |     100%     |
| Listagem de transportadoras, serviços e agências          | [GET] Listar serviços                           |      0%      |
| Listagem de transportadoras, serviços e agências          | [GET] Listar informações de um serviço          |      0%      |
| Listagem de transportadoras, serviços e agências          | [GET] Listar agências (e opções de filtro)      |      0%      |
| Listagem de transportadoras, serviços e agências          | [GET] Listar informações de uma agência         |      0%      |
| Informações do usuário                                    | [GET] Listar informações do usuário             |      0%      |
| Informações do usuário                                    | [GET] Listar endereços do usuário               |      0%      |
| Informações do usuário                                    | [GET] Saldo do usuário                          |      0%      |
| Informações do usuário                                    | [POST] Inserir saldo na carteira do usuário     |      0%      |
| Cadastro e informações das lojas                          | [GET] Listar lojas do usuário                   |      0%      |
| Cadastro e informações das lojas                          | [POST] Cadastrar loja                           |      0%      |
| Cadastro e informações das lojas                          | [GET] Visualizar loja                           |      0%      |
| Cadastro e visualização de endereços e telefones de lojas | [POST] Cadastrar endereço de uma loja           |      0%      |
| Cadastro e visualização de endereços e telefones de lojas | [GET] Listar endereços de uma loja              |      0%      |
| Cadastro e visualização de endereços e telefones de lojas | [POST] Cadastrar telefones de uma loja          |      0%      |
| Cadastro e visualização de endereços e telefones de lojas | [GET] Listar telefones de uma loja              |      0%      |


## Licença

- MIT License

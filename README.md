# app_constru_up
CRUD com laravel e vue.js - INCOMPLETO

Observações: 
*versão PHP - 7.4.6
*banco de dados Mysql
*conteudo da tabela : id - bigint
                      nome - varchar(30)
                      descricao - varchar(100)
                      marca - varchar(30)
                      valor - integer
 *Para alterar a conexão com o banco basta abrir a pasta .env e alterar os campos da linha
 11 a 16
 
 *****SOBRE API***
 a parte de CRUD está funcionando, para testar o atualizar e deletar (os que faltaram no front) basta utilizar o postmen
 no caso para atualizar utilizar o método post e a url localhost:8000/api/produtos/{id} (com os campos preenchidos)
 no caso do deletar basta utilizar o metodo delete e a url localhost:8000/api/produtos/{id}

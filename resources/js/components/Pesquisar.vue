<template>
                                        
 <div calss="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produtos cadastrados</div>

                <div class="card-body">
                   <tabela-component :dados="produtos"></tabela-component>
 
                </div>
                <div class="card-footer">
                   
                </div>
                </div>


            </div>
        </div>
    </div>
             
         
</template>

<script>
  export default {
      data() {
          return {
              urlBase: 'http://localhost:8000/api/produtos',
              nomeProduto: '',
              descricaoProduto: '',
              marcaProduto: '',
              valorProduto: '',
              produtos: [],
              busca: {nome:''}
          };
      },
     
      methods: {
          pesquisar() {

              if(this.busca[chave])[]
              let filtro = '';
              for(let chave in this.busca){
                  filtro += chave + 'like:'+ this.busca[chave];
                  console.log(filtro)
              }
          },
          carregarLista(){
              axios.get(this.urlBase)
              .then(response =>{
                  this.produtos = response.data;
                  console.log(produtos);
              })
              .catch(erros => {
                  console.log(erros);
              })
          }
      },
      mounted() {
          this.carregarLista();
      }
      
      }
  
</script>

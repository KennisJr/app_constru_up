<template>
                                        
 <div calss="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                                    <!--inicio do card de busca-->
            <div class="card mb-3">
                <div class="card-header">Pesquisar</div>

                <div class="card-body">
                    

                        <div class="form-group row">
                            <label for="inputId" class="col-md-4 col-form-label text-md-right">Id:</label>

                            <div class="col-md-6">
                                <input id="inputId" type="number" class="form-control" name="name" value="">

            
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Pesquisar Pelo id
                                </button>
                                
                            </div>
                        </div>  
                    
                </div>
            </div>
                                        <!--FIM do card de busca-->
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
              produtos: []
          };
      },
     
      methods: {
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

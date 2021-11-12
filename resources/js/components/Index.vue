<template>
 <div calss="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro</div>

                <div class="card-body">
                    <form method="POST" action="">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome:</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" v-model="nomeProduto">
            
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">Descrição:</label>
                            <div class="col-md-6">
                                <input id="descricao" type="text" class="form-control" name="descricao_produto" value="" v-model="descricaoProduto">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="marca" class="col-md-4 col-form-label text-md-right">Marca:</label>

                            <div class="col-md-6">
                                <input id="marca" type="text" class="form-control" name="marca_produto" v-model="marcaProduto">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="valor" class="col-md-4 col-form-label text-md-right">Valor:</label>

                            <div class="col-md-6">
                                <input id="valor" type="text" class="form-control" name="valor_produto" v-model="valorProduto" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-primary" @click="salvar()">
                                   Cadastrar
                                </button>
                                
                                
                            </div>
                        </div>
                    </form>
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
          };
      },
      methods: {
          salvar(){
             let formData =new FormData();
              formData.append('nome',this.nomeProduto)
              formData.append('descricao',this.descricaoProduto)
              formData.append('marca',this.marcaProduto)
              formData.append('valor',this.valorProduto)

              let config = {
                  headers: {
                    'Content-Type':'multipart/form-data',
                    'Accept': 'application/json'
                  }
              }
             axios.post(this.urlBase,formData, config)
                .then(response =>{
                    alert("Produto cadastrado com sucesso!");
                    console.log(response)
                })
                .catch(erros => {
                    console.log(erros)
                })
          }
      }
  }
</script>

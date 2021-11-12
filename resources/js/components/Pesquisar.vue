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
                                   Pesquisar com id
                                </button>
                
                                <button type="submit" class="btn btn-primary">
                                   Pesquisar Todos
                                </button>
                                
                            </div>
                        </div>  
                    
                </div>
            </div>
                                        <!--FIM do card de busca-->
            <div class="card">
                <div class="card-header">Produtos cadastrados</div>

                <div class="card-body">
                    <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
</table>
 
                </div>
                <div class="card-footer">
                   
                </div>
                </div>


            </div>
        </div>
    </div>

                                        
         
    

             
         
</template>

<script>
  
</script>

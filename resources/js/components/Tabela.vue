<template>
    <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome:</th>
                <th scope="col">Descricao:</th>
                <th scope="col">Marca:</th>
                <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody v-for="p in dados" :key="p.id">
                <tr>
                <th scope="row">{{p.id}}</th>
                <td>{{p.nome}}</td>
                <td>{{p.descricao}}</td>
                <td>{{p.marca}}</td>
                <td>R$ {{p.valor}}</td>
                <td>{{p.create_at}}</td>
                </tr>
                
            </tbody>
</table>
</template>

<script>
    export default {
        
        props: ['dados'],
        data() {
          return {
              urlBase: 'http://localhost:8000/api/produtos',
              nomeProduto: '',
              descricaoProduto: '',
              marcaProduto: '',
              valorProduto: '',
          };
        }
    }
</script>
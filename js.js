function cadastrar(){
    let nome = document.querySelector("#nome").value;
    let email = document.querySelector("#email").value;
    let telefone = document.querySelector("#telefone").value;
    if(nome.length === 0 || email.length === 0 || telefone.length === 0){
        window.alert('Preencha os dados');
    }else{
        let dados = {
            nome:nome,
            email:email,
            telefone:telefone
        }
        
        axios.interceptors.response.use(function (response) {
            console.log(response)
            return response;
          }, function (error) {
            console.log(error)
            return Promise.reject(error);
          });

        axios.post('http://localhost/axios/efetuar_cadastro.php', dados)

        ;    
    }

    
}
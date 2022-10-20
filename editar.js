function editar(){
    let dados = document.querySelector('#dados');
    let edit = document.querySelector('#edit');
    if(edit.style.display = 'none'){
        edit.style.display = 'block';
        dados.style.display = 'none'
    }else{
        edit.style.display = 'none';
        dados.style.display = 'block'
    }
}
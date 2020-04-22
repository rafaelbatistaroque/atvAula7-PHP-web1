let codProdForm = document.getElementById('codProd');
let descricaoForm = document.getElementById('descricao');
let unidadeForm = document.getElementById('unidade');
let valorForm = document.getElementById('valor');
let btnSubmitForm = document.getElementById('btsubmit');

function editar(id) {
    descricaoForm.value = document.getElementById(`descricaoItemLista_${id}`).innerText;
    unidadeForm.value = document.getElementById(`unidadeItemLista_${id}`).innerText;
    valorForm.value = document.getElementById(`valorItemLista_${id}`).innerText;
    btnSubmitForm.value = 'editar';
    btnSubmitForm.innerText = 'Editar';
    codProdForm.value = id;
}
function excluir(id) {
    let btnExcluirDaLista = document.getElementById(`btnExcluir_${id}`);

    descricaoForm.value = document.getElementById(`descricaoItemLista_${id}`).innerText;
    unidadeForm.value = document.getElementById(`unidadeItemLista_${id}`).innerText;
    valorForm.value = document.getElementById(`valorItemLista_${id}`).innerText;
    codProdForm.value = id;
    btnSubmitForm.value = 'remover';
    btnExcluirDaLista.innerText = 'Excluindo...';
    btnSubmitForm.click();
}
function limpar() {
    codProdForm.value = '';
    btnSubmitForm.value = 'criar';
    btnSubmitForm.innerText = 'Criar';
}
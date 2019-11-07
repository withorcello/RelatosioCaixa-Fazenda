var saveElement = document.querySelector('button#save');
var codigoElement = document.querySelector('input[name=codigo]');
var nomeElement = document.querySelector('input[name=nome]');
var cpf_cnpjElement = document.querySelector('input[name=cpf]');
var ruElement = document.querySelector('input[name=ru]');
var rsElement = document.querySelector('input[name=rs]');
var ieElement = document.querySelector('input[name=InsEs]');
var ufElement = document.querySelector('input[name=uf]');
var cidadeElement = document.querySelector('input[name=cidade]');
var cepElement = document.querySelector('input[name=cep]');
var bairroElement = document.querySelector('input[name=bairro]');
var enderecoElement = document.querySelector('input[name=endereco]');
var numElement = document.querySelector('input[name=numero]');
var complElement = document.querySelector('textarea[name=comple]');
saveElement.onclick = function () {
    var codigo = codigoElement.value;
    var nome = nomeElement.value;
    var cpf_cnpj = cpf_cnpjElement.value;
    var ru = ruElement.value;
    var rs = rsElement.value;
    var ie = ieElement.value;
    var uf = ufElement.value;
    var cidade = cidadeElement.value;
    var cep = cepElement.value;
    var bairro = bairroElement.value;
    var endereco = enderecoElement.value;
    var num = numElement.value;
    var compl = complElement.value;
    alert('ola garotas');
    if(codigo != '' && nome != '' && cpf_cnpj != '' && ru != '' && rs != '' && ie != '' && uf != '' && cidade != '' && cep != '' && bairro != '' && endereco != '' && num != '' && compl != ''){
        alert(nome);
    }else{
    }
}
document.getElementById("incluirBtn").addEventListener("click", incluirRegistro);
document.getElementById("alterarBtn").addEventListener("click", alterarRegistro);


//esta variavel fica fora para que todas as function poderem ter acesso a ela.
var linhaEdicao = null;

//essa função remove o registro 
function removerRegistro(elemento){
    
    var linha = elemento.parentNode.parentNode;

    //dentro do id corpoTabela removemos a "linha(tr)"
    // que contem os (td) id "nome", "idade" e "profissão"
    document.getElementById("corpoTabela").removeChild(linha);
}

//aqui é a função faz a opção de editar os contatos 
function editarRegistro(elemento) {
    //Retorna o node pai de um node.
    linhaEdicao = elemento.parentNode.parentNode;
    var colunas = linhaEdicao.children;

    document.getElementById("nome").value = colunas[0].innerText;
    document.getElementById("idade").value = colunas[1].innerText;
    document.getElementById("profissao").value = colunas[2].innerText;

    document.getElementById("profissao").focus();
    document.getElementById("idade").focus();
    document.getElementById("nome").focus();

//aqui altera os botões esconde o botão de alterar 
//ate que o usuario clique em editar algum contato da lista 
    document.getElementById("incluirBtn").classList.add("hide");
    document.getElementById("alterarBtn").classList.remove("hide");
    
    var operacoes = document.getElementsByClassName("operacoes");

    for (var i = 0; i < operacoes.length; i++) {
        operacoes[i].classList.add("hide");
    }
}



function incluirRegistro() {

    var aluno = criarAluno();

    var alunoValido = validar(aluno);

    if (alunoValido == true) {
        adicionarAlunoNaTabela(aluno);
        limparFormulario();
        exibirMensagem("Aluno registrado com sucesso!");
    } else {
        exibirMensagem("Todos os campos são obrigatórios!");
    }
}

function validar(aluno) {

    if (aluno.nome == "" || aluno.profissao == "" || isNaN(aluno.idade)) {
        return false;
    } else {
        return true;
    }
}

function exibirMensagem(msg) {
    Materialize.toast(msg, 5000);
}

function adicionarAlunoNaTabela(aluno) {
    //inclui os valores da variave aluno 
    var linha = document.createElement("tr");
    var colunaNome = document.createElement("td");//recebe o nome 
    var colunaIdade = document.createElement("td");// recebe a idade
    var colunaProfissao = document.createElement("td");//recebe a profissão
    var colunaEdicao = document.createElement("td");// chama os botões excluir e editar
    

    colunaNome.innerText = aluno.nome;
    colunaIdade.innerText = aluno.idade;
    colunaProfissao.innerText = aluno.profissao;
    colunaEdicao.innerHTML = '<a onclick="editarRegistro(this);" class="btn-floating waves-effect waves-ligth blue"><i class="material-icons">mode_edit</i></a>' + '&nbsp;' +
    '<a onclick="removerRegistro(this);" class="btn-floating waves-effect waves-ligth red"><i class="material-icons">delete_forever</i></a>'
    

    linha.appendChild(colunaNome);
    linha.appendChild(colunaIdade);
    linha.appendChild(colunaProfissao);
    linha.appendChild(colunaEdicao);
    

    document.getElementById("corpoTabela").appendChild(linha);
}

function limparFormulario() {
    document.getElementById("formularioAluno").reset();
}

function alterarRegistro(){

    // a varialvel aluno recebe o retorno da função criarAluno
    var aluno = criarAluno();
    //nesta variavel recebe a função validar com o parametro alunos 
    var alunoValido = validar(aluno);
    
    // se os campos de aluno retornam true 
    if (alunoValido == true) {
        var colunas = linhaEdicao.children;

        colunas[0].innerText = aluno.nome;
        colunas[1].innerText = aluno.idade;
        colunas[2].innerText = aluno.profissao;

        limparFormulario();
        exibirMensagem("Aluno alterado com sucesso!")

        document.getElementById("incluirBtn").classList.remove("hide");
        document.getElementById("alterarBtn").classList.add("hide");
    
        var operacoes = document.getElementsByClassName("operacoes");

        for (var i = 0; i < operacoes.length; i++) {
            operacoes[i].classList.remove("hide");
        }
    } else {
        exibirMensagem("Todos os campos são obrigatórios!");
    }
}
    
    

//a função criarAluno cria uma variavel aluno para ser populada com os dados 

function criarAluno(){

    var aluno = {
        nome: document.getElementById("nome").value.trim(),
        idade: parseInt(document.getElementById("idade").value),
        profissao: document.getElementById("profissao").value.trim()

    };
    //esses dados retornam depois de polupados
    return aluno;
}
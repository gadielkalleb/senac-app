<?php
  $cabecalho_title = "Alunos Senac";
  include("cabecalho.php");
?>

  <main>

    <section class="container  section">
      
      <div class="card-panel blue-grey lighten-5 z-depth-3">
        <h5 class="center">lista de alunos</h5>
        <div class="divider"></div>
        <table class="centered highlight">
          <thead>
            
            <tr>
              <th>Nome</th>
              <th>Idade</th>
              <th>Profissão</th>
            </tr>
          </thead>

          <tbody id="corpoTabela">
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td>
               
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <section class="container section">
     
      <div class="card-panel blue-grey lighten-5 z-depth-3">
        <h5 class="center">Cadastro de alunos</h5>
        <div class="divider"></div>
        <div class="row">
          <form id="formularioAluno" class="col s12">

            <div class="row">
              <div class="input-field col s10">

                <input id="nome" type="text" class="validate">
                <label for="nome">Nome</label>
              </div>

              <div class="input-field col s2">

                <input id="idade" type="number" class="validate">
                <label for="idade">Idade</label>
              </div>
            </div>

            <div class="row">
               <div class="input-field col s12">

                <input id="profissao" type="text" class="validate">
                <label for="profissao">Profissão</label>
               </div>
            </div>

            <div class="row">
              <div class="input-field right">
                <a id="alterarBtn" class="btn waves-effect waves-light orange hide"><i class="material-icons right">check</i>Alterar</a>
                <a id="incluirBtn" class="btn waves-effect waves-light green"><i class="material-icons right">check</i>incluir</a>
              </div>
            </div>

          </form>
        </div>
      </div>
    </section>
  </main>

<?php
  include("rodape.php");
?>

  <script src="alunos.js"></script>
  <script>
    $( document ).ready(function(){
        $(".button-collapse").sideNav();
    })
  </script>
</body>

</html>
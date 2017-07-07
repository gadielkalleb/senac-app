<?php
  $cabecalho_title = "Professores Senac";
  include("cabecalho.php");
?>

  <main>

    <section class="container section">

      <div class="card-panel grey lighten-2 z-depth-3">

        <div class="row">
          <h5 class="center-align">Lista de Professores</h5>
          <div class="divider"></div>
        </div>

        <div class="row">
          <form>
            <table class="centered highlight">

              <thead>
                <tr>
                  <th> - </th>
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Gênero</th>
                  <th>Formação</th>
                  <th>Área de Atuação</th>
                  <th>Disponibilidade Início</th>
                  <th>Disponibilidade Fim</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>
                    <input type="radio" name="edicao" id="row1">
                    <label for="row1"></label>
                  </td>
                  <td>Jefferson</td>
                  <td>28</td>
                  <td>Masculino</td>
                  <td>Superior</td>
                  <td>Tecnologia da Informação</td>
                  <td>01/01/2017</td>
                  <td>31/08/2017</td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>

        <div class="row">
          <a href="#modalAdicionar" class="waves-effect waves-light btn green">adicionar</a>
          <a class="waves-effect waves-light btn blue">editar</a>
          <a class="waves-effect waves-light btn red">remover</a>
        </div>
      </div>

    </section>

    <div id="modalAdicionar" class="modal">

      <div class="modal-content">
        <h5 class="center-align">Adicionar Professor</h5>
        <div class="divider"></div>

        <div class="row">
          <form class="col s12">

            <div class="row">
              <div class="input-field col s12">
                <input id="nome" type="text" class="validate">
                <label for="nome">Nome</label>
              </div>
            </div>

            <div class="row">

              <div class="input-field col s4">
                <input id="idade" type="number" class="validate">
                <label for="idade">Idade</label>
              </div>

              <div class="input-field col s8">
                <p>
                  <input class="with-gap" name="genero" type="radio" id="masculino" />
                  <label for="masculino">Masculino</label>
                  <input class="with-gap" name="genero" type="radio" id="feminino" />
                  <label for="feminino">Feminino</label>
                </p>
              </div>
            </div>

            <div class="row">

              <div class="input-field col s6">
                <select>
                  <option value="" disabled selected>Selecione</option>
                  <option value="1">Fundamental</option>
                  <option value="2">Ensino Médio</option>
                  <option value="3">Superior</option>
                  <option value="4">Pós-Graduação</option>
                  <option value="5">Mestrado</option>
                  <option value="6">Doutorado</option>
                </select>
                <label>Formação</label>
              </div>

              <div class="input-field col s6">
                <select>
                  <option value="" disabled selected>Selecione</option>
                  <option value="1">Arquitetura e Urbanismo</option>
                  <option value="2">Beleza e Estética</option>
                  <option value="3">Comunicação e Artes</option>
                  <option value="4">Design</option>
                  <option value="5">Gastronomia</option>
                  <option value="6">Gestão e Negócios</option>
                  <option value="7">Hotelaria e Turismo</option>
                  <option value="8">Meio Ambiente, Segurança e Saúde no Trabalho</option>
                  <option value="9">Moda</option>
                  <option value="10">Saúde e Bem-estar</option>
                  <option value="11">Tecnologia da Informação</option>
                </select>
                <label>Área de Atuação</label>
              </div>
            </div>

            <div class="row">

              <div class="input-field col s6">

                <input type="date" class="datepicker" id="dataInicio">
                <label for="dataInicio">Disponibilidade Início</label>
              </div>

              <div class="input-field col s6">

                <input type="date" class="datepicker" id="dataFim">
                <label for="dataFim">Disponibilidade Fim</label>
              </div>
            </div>

          </form>
        </div>
      </div>

      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cancelar</a>
        <a class="waves-effect waves-light btn green">salvar</a>
      </div>
    </div>

  </main>

<?php
  include("rodape.php");
?>

  <script src="professores.js"></script>

  <script>
    $(document).ready(function () {
      $(".button-collapse").sideNav();
      $('.modal').modal();
      $('select').material_select();
      $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: 3
      });
    })
  </script>
</body>

</html>
<?php
include('cadastro.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Fale Conosco</title>
  <link rel="stylesheet" href="./css/reset.css" />
  <link rel="stylesheet" href="./css/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
  <!--header-->
  <header>
    <div class="container-header">
      <div class="container">
        <div class="row d-flex header-top">
          <div class="col-lg-8 d-flex">
            <a href="./index.html">
              <img src="./img/logocdados.png" alt="Logo do curso de ciência de dados." /></a>
          </div>
          <!--logo-->
          <div class="col-lg-4 d-flex d-none d-lg-block">
            <h1>
              <img src="img/logo_uepa2023.png" />
            </h1>
          </div>
        </div>
      </div>

      <!--menu navegacao de paginas-->
      <div id="menu-pages">
        <nav>
          <ul>
            <li>
              <a href="./structure-course.html">ESTRUTURA DO CURSO <i class="bi bi-chevron-down"></i></a>
            </li>
            <li>
              <a href="./evaluation-system.html">SISTEMA DE AVALIAÇÃO <i class="bi bi-chevron-down"></i></a>
            </li>
            <li>
              <a href="./professors.html">CORPO DOCENTE <i class="bi bi-chevron-down"></i></a>
            </li>
            <li>
              <a href="./campus.html">CAMPUS <i class="bi bi-chevron-down"></i></a>
            </li>
            <li>
              <a href="./committee.html">COLEGIADO <i class="bi bi-chevron-down"></i></a>
            </li>
            <li>
              <a href="./nde.html">NÚCLEO DOCENTE ESTRUTURANTE <i class="bi bi-chevron-down"></i></a>
            </li>
            <li>
              <a href="./contact-us.php">FALE CONOSCO <i class="bi bi-chevron-down"></i></a>
            </li>
            <li>
              <a href="./adm.php">ADMINISTRADOR <i class="bi bi-chevron-down"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!--fim header-->
  <main>
    <div class="container container-main">
      <div id="forms-container" class="card card-fc">
        <h2 class="text-center mb-2">Fale Conosco</h2>
        <form method="post" action="/contact-us.php" id="form" class="form-card was-validated">
          <div class="row justify-content-between text-left">
            <div class="col-sm-6 flex-column d-flex input-control">
              <label for="name" class="form-label px-1">Nome Completo<span class="text-danger"> *</span></label>
              <input type="text" class="form-control" id="name" name="nome" required />
              <div class="valid-feedback">Válido.</div>
              <div class="invalid-feedback">Preencha este campo.</div>
            </div>

            <div class="col-sm-6 flex-column d-flex input-control">
              <label for="email" class="form-label px-1">Email<span class="text-danger"> *</span></label>
              <input type="text" class="form-control" id="email" name="email" required />
              <div class="valid-feedback">Válido.</div>
              <div class="invalid-feedback">Preencha este campo.</div>
            </div>

          </div>

          <div class="row justify-content-between text-left">
            <div class="col-sm-6 flex-column d-flex input-control">
              <label for="fone" class="form-label px-1">Número de Telefone<span class="text-danger"> *</span></label>
              <input type="text" class="form-control" id="fone" name="fone" required />
              <div class="valid-feedback">Válido.</div>
              <div class="invalid-feedback">Preencha este campo.</div>
            </div>

            <div class="col-sm-6 flex-column d-flex input-control">
              <label for="subject" class="form-label px-1">Assunto<span class="text-danger"> *</span></label>
              <select name="assunto" class="form-select" id="subject" required>
                <option value="">--</option>
                <option value="Informação">Informação</option>
                <option value="Sugestão">Sugestão</option>
                <option value="Elogio">Elogio</option>
                <option value="Denúncia">Denúncia</option>
                <option value="Solicitação">Solicitação</option>
                <option value="Outro">Outro</option>
              </select>
              <div class="valid-feedback">Válido.</div>
              <div class="invalid-feedback">Informe o assunto.</div>
            </div>
          </div>

          <div class="row justify-content-between text-left">
            <div class="col-12 flex-column d-flex input-control">
              <label for="message" class="form-label px-1">Descrição: <span class="text-danger"> *</span></label>
              <textarea class="form-control" id="message" name="descricao" required></textarea>
              <div class="valid-feedback">Válido.</div>
              <div class="invalid-feedback">Preencha este campo.</div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <button name="botao_enviar" value="1" type="submit" class="botao_enviar btn btn-primary">
                Enviar
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>
  <!--fim main-->
  <footer>
  <div class="container-footer container">
        <div
          class="row d-flex justify-content-space-around"
          style="margin-top: 2rem"
        >
          <div
            id="footer-img"
            class="col d-flex justify-content-start align-items-center d-none d-md-flex"
          >
            <img
              style="width: 14.5rem; height: 4.5rem"
              src="./img/logo-uepa-branco.png"
              alt="Logo da UEPA."
            />
          </div>

          <!--redes sociais-->
          <div
            id="footer_social_media"
            class="col d-flex justify-content-center"
          >
            <a
              href="https://www.youtube.com/channel/UCiW52AgF7Y62gvDw500haAw"
              class="footer-link"
              id="youtube"
            >
              <i class="bi bi-youtube"></i>
            </a>
            <a
              href="https://twitter.com/uepaoficial"
              class="footer-link"
              id="twitter"
            >
              <i class="bi bi-twitter"></i>
            </a>
            <a
              href="https://www.instagram.com/uepaoficial"
              class="footer-link"
              id="instagram"
            >
              <i class="bi bi-instagram"></i>
            </a>
            <a
              href="https://www.facebook.com/UepaOficial"
              class="footer-link"
              id="facebook"
            >
              <i class="bi bi-facebook"></i>
            </a>
          </div>

          <!--localização-->
          <div
            class="footer-location col d-flex justify-content-end d-none d-lg-flex"
          >
            <a
              style="width: 15rem"
              href="https://maps.app.goo.gl/FAY25EhQFKXkoJvH9"
              id="link-maps"
            >
              <p>
                Universidade do Estado do Pará - Campus XXII Ananindeua <br />
                <i class="bi bi-geo-alt-fill">
                  <small
                    >Avenida Independência, S/N, ao lado da Usina da Paz
                    Icuí-Guajará</small
                  >
                </i>
              </p>
            </a>
          </div>
        </div>
      </div>
    <div class="authors">
      <a href="https://github.com/theunrealryan/PW_LUYZE-RYANRICARDO" id="github">
        <i class="bi bi-github">
          Authors: Luyze Beatriz Marques Caetano e Ryan Ricardo de Souza</i>
      </a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
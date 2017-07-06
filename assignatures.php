<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Tot el que necessites per aprovar, documentació, apunts i exercicis pràctics de cada assignatura."/>

  <meta name="theme-color" content="#424242"/>

  <title>Fibers | Assignatures i estat del contingut</title>

  <meta property="og:title" content="Fibers | Documents, apunts i exercicis FIB" />
  <meta property="og:description" content="Tot el que necessites per aprovar, documentació, apunts i exercicis pràctics de cada assignatura." />
  <meta property="og:image" content="assets/img/logo_3.png" />
  <meta property="og:type" content="website" />

  <link rel="shortcut icon" href="assets/img/logo.png"/>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="assets/css/m.min.css" type="text/css" rel="stylesheet"/>
  <!-- Sass version -->
  <!-- <link href="assets/css/materialize.css" type="text/css" rel="stylesheet"/> -->
  <link href="assets/css/f-a.min.css" type="text/css" rel="stylesheet"/>
  <link href="assets/css/styles.css" type="text/css" rel="stylesheet"/>

  <script src="assets/js/jq.min.js" type="application/javascript"></script>
  <script src="assets/js/m.min.js" type="application/javascript"></script>
  <script src="assets/js/main.js" type="application/javascript"></script>

  <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
           m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-84592115-1', 'auto');
      ga('send', 'pageview');

  </script>
</head>
<body>

  <?php include "views/layouts/_leftNavBar.php" ?>

  <section class="page">
    <div class="header">
      <a class="waves-effect waves-light btn btn-assignatures" href="#assignatures"><i class="material-icons left">view_list</i>Llistat d'assignatures</a>
      <a class="waves-effect waves-light btn btn-usuaris" href="#usuaris"><i class="material-icons left">perm_identity</i>Usuaris col·laboradors</a>
    </div>

    <div class="content">
      <?php include "views/llistat-assignatures.php" ?>
    </div>

  </section>

  <section id="usuaris" class="modal modal-fixed-footer">
      <section class="modal-content">
          <h4><span class="modal_title">Han aportat</span></h4>
          <br>
          <table class="centered">
              <thead>
                  <tr>
                      <th data-field="nom">Nom</th>
                      <th data-field="data">Data</th>
                      <th data-field="aportacions">Aportacions</th>
                  </tr>
              </thead>
              <tbody class="table-assignatures">
                <tr>
                    <td>Welcius</td>
                    <td>2017-05-17</td>
                    <td>AC</td>
                </tr>
                <tr>
                    <td>Alcore</td>
                    <td>2017-04-18</td>
                    <td>EDA</td>
                </tr>
                <tr>
                    <td>Welcius</td>
                    <td>2017-01-08</td>
                    <td>AC</td>
                </tr>
                <tr>
                    <td style="color: #9e9e9e;">Anon.</td>
                    <td>2016-12-30</td>
                    <td>A, B, C, D</td>
                </tr>
                <tr>
                    <td>Chechi</td>
                    <td>2016-12-29</td>
                    <td>BD</td>
                </tr>
                <tr>
                    <td>Pau Risa</td>
                    <td>2016-10-18</td>
                    <td>EEE</td>
                </tr>
                <tr>
                    <td>Jeison Melo</td>
                    <td>2016-09-21</td>
                    <td>A, B, C, D</td>
                </tr>
              </tbody>
          </table>
      </section>
      <section class="modal-footer">
        <span class="modal-action modal-close waves-effect waves-red btn btn-back" style="cursor: pointer; font-weight: bold;"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Enrere</span>
      </section>
  </section>

  <section id="send-info" class="modal modal-fixed-footer">
      <section class="modal-content">
          <h5><span class="modal_title">Participa i aporta contingut !</span></h5>
          <br>
          <h6>Pots enviar-nos documentació que creguis necessària per afegir a la pàgina</h6>
          <br>
          <div class="row">
            <form action="#" method="post" class="col s12">
              <div class="row">
                <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Arxius</span>
                    <input type="file" multiple>
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Adjunta un o més arxius" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="message" class="materialize-textarea" required></textarea>
                  <label for="message">Descriu el contingut</label>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="switch">
                  Vols aparèixer com usuari col.laborador a la pàgina ? &nbsp; &nbsp;
                  <label>
                    No
                    <input type="checkbox" checked="checked">
                    <span class="lever"></span>
                    Si
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 l6">
                <i class="fa fa-user-o prefix" aria-hidden="true"></i>
                  <input id="name" type="text" class="validate" data-length="25">
                  <label for="name">Nom o pseudònim</label>
                </div>
                <div class="input-field col s12 l6">
                  <i class="fa fa-envelope-o prefix" aria-hidden="true"></i>
                  <input id="email" type="email" class="validate">
                  <label for="email" data-error="wrong" data-success="right">Correu electrònic</label>
                </div>
              </div>
              <br>
              <div class="row">
                <p>
                  <input type="checkbox" class="filled-in" id="filled-in-box" required/>
                  <label for="filled-in-box">He llegit  i accepto <a href="#legal">les condicions</a></label>
                </p>
              </div>
            </form>
          </div>
      </section>
      <section class="modal-footer">
        <button class="btn btn-send waves-effect waves-light" type="submit" name="action">Enviar
          <i class="material-icons right">send</i>
        </button>
      </section>
  </section>

  <section id="legal" class="modal modal-fixed-footer">
      <section class="modal-content">
          <h4><span class="modal_title">Condicions d'ús</span></h4>
          <br>
          <p>Fibers.cat es una plataforma que facilita als usuaris
            aportar contingut i fer-ho accesible per a tothom.</p>

          <p>A l'hora d'adjuntar fitxers, tingueu en compte:</p>

          <ul>
            <li><span>No s'accepta material facilitat pel professor</li>
            <li><span>No s'accepta material amb copyright (llibres, etc.)</span></li>
            <li><span>No s'accepta material sense el consentiment del propietari</span></li>
          </ul>
      </section>
      <section class="modal-footer">
        <span class="modal-action modal-close waves-effect waves-red btn btn-back" style="cursor: pointer; font-weight: bold;">Entesos</span>
      </section>
  </section>

</body>
</html>

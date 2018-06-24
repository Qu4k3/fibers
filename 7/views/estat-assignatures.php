<h5 class="page-title">
  <span>Assignatures</span>
</h5>
<br>
<h6 class="page-sub-title">Obligatòries</h6>
<table class="centered space-b">
    <thead>
        <tr>
            <th data-field="abrv">Abreviació</th>
            <th data-field="nom">Nom complet</th>
            <th data-field="doc">Documentació</th>
            <th data-field="quadri">Tipus</th>
        </tr>
    </thead>

    <tbody class="table-assignatures">
      <?php
        /*
        $result = $conn->query("SELECT * FROM assignatures ORDER BY nom DESC");
          if($result->num_rows > 0){
            while ($fila = $result->fetch_assoc()) {
              echo "<tr class='clickable-row' data-href='url://'>
              <td>".$fila['abreviacio']."</td><td>".$fila['nom']."</td>
              <td>".$fila['docs']."</td><td><span class="tipus-null">-</span></td>
              </tr>";
            }
          }
        $conn->close();
        */
      ?>
        <tr class='clickable-row' data-href='url://'>
            <td>F</td>
            <td>Física</td>

            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>FM</td>
            <td>Fundaments Matematics</td>

            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>IC</td>
            <td>Introducció als Computadors</td>

            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PRO1</td>
            <td>Programació 1</td>

            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>EC</td>
            <td>Estructura de Computadors</td>

            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>M1</td>
            <td>Matemàtiques 1</td>

            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>M2</td>
            <td>Matemàtiques 2</td>

            <td><i class="fa fa-circle tooltipped" data-position="left" data-delay="20" data-tooltip="Hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="new badge badge-type green" data-badge-caption="T"></span><span class="new badge badge-type orange" data-badge-caption="E"></span><span class="new badge badge-type blue" data-badge-caption="R"></span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PRO2</td>
            <td>Programació 2</td>

            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>BD</td>
            <td>Base de dades</td>

            <td><i class="fa fa-circle tooltipped" data-position="left" data-delay="20" data-tooltip="Hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="new badge badge-type green" data-badge-caption="T"></span><span class="new badge badge-type orange" data-badge-caption="E"></span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>CI</td>
            <td>Interfaces de Computadors</td>

            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>EDA</td>
            <td>Estructura de Dades i Algorismes</td>

            <td><i class="fa fa-circle tooltipped" data-position="left" data-delay="20" data-tooltip="Hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="new badge badge-type green" data-badge-caption="T"></span><span class="new badge badge-type orange" data-badge-caption="E"></span><span class="new badge badge-type purple" data-badge-caption="P"></span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PE</td>
            <td>Probabilitat i Estadistica</td>

            <td><i class="fa fa-circle tooltipped" data-position="left" data-delay="20" data-tooltip="Hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="new badge badge-type green" data-badge-caption="T"></span><span class="new badge badge-type orange" data-badge-caption="E"></span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>SO</td>
            <td>Sistemes Operatius</td>

            <td><i class="fa fa-circle tooltipped" data-position="left" data-delay="20" data-tooltip="Hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="new badge badge-type green" data-badge-caption="T"></span><span class="new badge badge-type orange" data-badge-caption="E"></span><span class="new badge badge-type blue" data-badge-caption="R"></span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>AC</td>
            <td>Arquitectura de Computadors</td>

            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>EEE</td>
            <td>Empresa i Entorn Economic</td>

            <td><i class="fa fa-circle tooltipped" data-position="left" data-delay="20" data-tooltip="Hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="new badge badge-type green" data-badge-caption="T"></span><span class="new badge badge-type orange" data-badge-caption="E"></span><span class="new badge badge-type blue" data-badge-caption="R"></span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>IES</td>
            <td>Introducció a la Ingenieria del Software</td>

            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PROP</td>
            <td>Projectes de Programació</td>

            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>XC</td>
            <td>Xarxes de Computadors</td>

            <td><i class="fa fa-circle tooltipped" data-position="left" data-delay="20" data-tooltip="Hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="new badge badge-type green" data-badge-caption="T"></span><span class="new badge badge-type orange" data-badge-caption="E"></span><span class="new badge badge-type blue" data-badge-caption="R"></span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>IDI</td>
            <td>Interacció i Diseny d'Interficies</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PAR</td>
            <td>Paralelisme</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
    </tbody>
</table>

<h6 class="page-sub-title">Especialitat</h6>
<table class="centered space-b">
    <thead>
        <tr>
            <th data-field="abrv">Abreviació</th>
            <th data-field="nom">Nom complet</th>
            <th data-field="doc">Documentació</th>
            <th data-field="quadri">Tipus</th>
        </tr>
    </thead>

    <tbody class="table-assignatures">
        <tr class='clickable-row' data-href='url://'>
            <td>A</td>
            <td>Algorísmia</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>G</td>
            <td>Gràfics</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>IA</td>
            <td>Intel·ligència Artificial</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>LI</td>
            <td>Lògica a la Informàtica</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>LP</td>
            <td>Llenguatges de Programació</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>TC</td>
            <td>Teoria de la Computació</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>AA</td>
            <td>Ampliació d'Algorísmia</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>APA</td>
            <td>Aprenentatge Automàtic</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>CAIM</td>
            <td>Cerca i Anàlisi d'Informació Massiva</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>CL</td>
            <td>Compiladors</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>CN</td>
            <td>Computació Numèrica</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>IO</td>
            <td>Investigació Operativa</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>SID</td>
            <td>Sistemes Intel·ligents Distribuïts</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>AC2</td>
            <td>Arquitectura de Computadors II/td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>DSBM</td>
            <td>Disseny de Sistemes Basats en Microcomputadors</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>MP</td>
            <td>Multiprocessadors</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PEC</td>
            <td>Projecte d'Enginyeria de Computadors</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>SO2</td>
            <td>Sistemes Operatius II</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>XC2</td>
            <td>Xarxes de Computadors II</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>CASO</td>
            <td>Conceptes Avançats de Sistemes Operatius</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>CPD</td>
            <td>Centres de Processament de Dades</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PAP</td>
            <td>Programació i Arquitectures Paral·leles</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PCA</td>
            <td>Programació Conscient de l'Arquitectura</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PDS</td>
            <td>Processament Digital del Senyal</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>STR</td>
            <td>Sistemes de Temps Real</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>VLSI</td>
            <td>VLSI</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>AS</td>
            <td>Arquitectura del Software</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>ASW</td>
            <td>Aplicacions i Serveis Web</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>DBD</td>
            <td>Disseny de Bases de Dades</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>ER</td>
            <td>Enginyeria de Requisits</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>GPS</td>
            <td>Gestió de Projectes de Software</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PES</td>
            <td>Projecte d'Enginyeria del Software</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>CAP</td>
            <td>Conceptes Avançats de Programació</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>CBDE</td>
            <td>Conceptes per a Bases de Dades Especialitzades</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>CSI</td>
            <td>Conceptes de Sistemes d'Informació</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>ECSDI</td>
            <td>Enginyeria del Coneixement i Sistemes Distribuïts Intel·ligents</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>SIM</td>
            <td>Simulació</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>SOAD</td>
            <td>Sistemes Operatius per a Aplicacions Distribuïdes</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>ADEI</td>
            <td>Anàlisi de Dades i Explotació de la Informació</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>DSI</td>
            <td>Disseny de Sistemes d'Informació</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>NE</td>
            <td>Negoci Electrònic</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PSI</td>
            <td>Projecte de Sistemes d'Informació</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>SIO</td>
            <td>Sistemes d'Informació per a Les Organitzacions</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>ABD</td>
            <td>Administració de Bases de Dades</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>EDO</td>
            <td>Estratègia Digital a Les Organitzacions</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>MI</td>
            <td>Marquèting a Internet</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>VPE</td>
            <td>Viabilitat de Projectes Empresarials</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>ASO</td>
            <td>Administració de Sistemes Operatius</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PI</td>
            <td>Protocols d'Internet</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PTI</td>
            <td>Projecte de Tecnologies de la Informació</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>SI</td>
            <td>Seguretat Informàtica</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>SOA</td>
            <td>Sistemes Operatius Avançats</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>TXC</td>
            <td>Tecnologies de Xarxes de Computadors</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>AD</td>
            <td>Aplicacions Distribuïdes</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>IM</td>
            <td>Internet Mòbil</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>SDX</td>
            <td>Sistemes Distribuïts en Xarxa</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>TCI</td>
            <td>Transmissió i Codificació de la Informació</td>
            <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
            <td><span class="tipus-null">-</span></td>
        </tr>


    </tbody>
</table>

<h6 class="page-sub-title">Optatives</h6>
<table class="centered space-b">
    <thead>
        <tr>
            <th data-field="abrv">Abreviació</th>
            <th data-field="nom">Nom complet</th>
            <th data-field="doc">Documentació</th>
            <th data-field="quadri">Tipus</th>
        </tr>
    </thead>

    <tbody class="table-assignatures">
      <tr class='clickable-row' data-href='url://'>
          <td>APC</td>
          <td>Arquitectura del PC</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>APSS</td>
          <td>Habilitats Acadèmiques i Professionals d'Expressió Oral en Anglès</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>ASDP</td>
          <td>Habilitats Acadèmiques Pel Desenvolupament de Projectes en Anglès</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>ASMI</td>
          <td>Aspectes Socials i Mediambientals de la Informàtica</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>C</td>
          <td>Criptografia</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>CCQ</td>
          <td>Computació i Criptografia Quàntiques</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>CDI</td>
          <td>Compressió de Dades i Imatges</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>DCS</td>
          <td>Disseny de Corbes i Superfícies</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>FDM</td>
          <td>Física dels Dispositius de Memòria</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>FOMAR</td>
          <td>Física Orientada a la Modelització i l'Animació Realista</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>GEOC</td>
          <td>Geometria Computacional</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>MD</td>
          <td>Mineria de Dades</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>PAE</td>
          <td>Projecte Aplicat d'Enginyeria</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>ROB</td>
          <td>Robòtica</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>SLDS</td>
          <td>Software Lliure i Desenvolupament Social</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>TGA</td>
          <td>Targetes Gràfiques i Acceleradors</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>VC</td>
          <td>Visió per Computador</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>VJ</td>
          <td>Videojocs</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>
      <tr class='clickable-row' data-href='url://'>
          <td>WSE</td>
          <td>Habilitats d'Expressió Escrita en Anglès per a l'Enginyeria</td>
          <td><i class="fa fa-circle-o tooltipped" data-position="left" data-delay="20" data-tooltip="No hi ha contingut" aria-hidden="true"></i></td>
          <td><span class="tipus-null">-</span></td>
      </tr>

    </tbody>
</table>

<h5 class="page-title">
  <span>Assignatures</span>
</h5>
<br>
<h6 class="page-sub-title">Obligatories</h6>
<table class="centered">
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
              <td>".$fila['docs']."</td><td></td>
              </tr>";
            }
          }
        $conn->close();
        */
      ?>
        <tr class='clickable-row' data-href='url://'>
            <td>F</td>
            <td>Física</td>
            <td>Q1</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>FM</td>
            <td>Fundaments Matematics</td>
            <td>Q1</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>IC</td>
            <td>Introducció als Computadors</td>
            <td>Q1</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PRO1</td>
            <td>Programació 1</td>
            <td>Q1</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>EC</td>
            <td>Estructura de Computadors</td>
            <td>Q2</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>M1</td>
            <td>Matemàtiques 1</td>
            <td>Q2</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>M2</td>
            <td>Matemàtiques 2</td>
            <td>Q2</td>
            <td><i class="fa fa-circle" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PRO2</td>
            <td>Programació 2</td>
            <td>Q2</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>BD</td>
            <td>Base de dades</td>
            <td>Q3</td>
            <td><i class="fa fa-circle" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>CI</td>
            <td>Interfaces de Computadors</td>
            <td>Q3</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>EDA</td>
            <td>Estructura de Dades i Algorismes</td>
            <td>Q3</td>
            <td><i class="fa fa-circle" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PE</td>
            <td>Probabilitat i Estadistica</td>
            <td>Q3</td>
            <td><i class="fa fa-circle" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>SO</td>
            <td>Sistemes Operatius</td>
            <td>Q3</td>
            <td><i class="fa fa-circle" aria-hidden="true"></i></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>AC</td>
            <td>Arquitectura de Computadors</td>
            <td>Q4</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>EEE</td>
            <td>Empresa i Entorn Economic</td>
            <td>Q4</td>
            <td><i class="fa fa-circle" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>IES</td>
            <td>Introducció a la Ingenieria del Software</td>
            <td>Q4</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PROP</td>
            <td>Projectes de Programació</td>
            <td>Q4</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>XC</td>
            <td>Xarxes de Computadors</td>
            <td>Q4</td>
            <td><i class="fa fa-circle" aria-hidden="true"></i></td>
        </tr>
        <tr>
            <td class="space"></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>IDI</td>
            <td>Interacció i Diseny d'Interficies</td>
            <td>Q4</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
        <tr class='clickable-row' data-href='url://'>
            <td>PAR</td>
            <td>Paralelisme</td>
            <td>Q4</td>
            <td><i class="fa fa-circle-o" aria-hidden="true"></i></td>
        </tr>
    </tbody>
</table>

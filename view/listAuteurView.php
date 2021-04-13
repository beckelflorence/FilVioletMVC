<table class="table">
    <thead>
        <tr>
            <th>IDENTIFIANT</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>DATE DE NAISSANCE</th>
            <th>IDENTIFIANT PAYS</th>
        </tr>
    </thead>
    <tbody>
<?php
    foreach($authors as $value){
        echo '
        <tr>
            <td>'.$value->id_a().'</td>
            <td>'.$value->nom_a().'</td>
            <td>'.$value->prenom_a().'</td>
            <td>'.$value->date_naissance_a().'</td>
            <td>'.$value->id_p().'</td>
        </tr>
        ';
    }  
?>  
    </tbody>
</table>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th>Identifiant</th>
            <th>Titre</th>
            <th>Annee</th>
            <th>Resume</th>
        </tr>
    </thead>
    <tbody>
<?php
    foreach($livres as $value){
        echo '
        <tr>
            <td>'.$value->id_l().'</td>
            <td>'.$value->titre_l().'</td>
            <td>'.$value->annee_l().'</td>
            <td>'.$value->id_t().'</td>
        </tr>
        ';
    }  
?>  
    </tbody>
</table>
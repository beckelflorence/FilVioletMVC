<table class="table">
    <thead class="table-dark">
        <tr>
            <th>Identifiant</th>
            <th>Date</th>
            <th>Delais</th>
            <th>Identifiant inscrit</th>
        </tr>
    </thead>
    <tbody>
<?php
    foreach($livres as $value){
        echo '
        <tr>
            <td>'.$value->id_em().'</td>
            <td>'.$value->date_em().'</td>
            <td>'.$value->delais_em().'</td>
            <td>'.$value->id_i().'</td>
        </tr>
        ';
    }  
?>  
    </tbody>
</table>
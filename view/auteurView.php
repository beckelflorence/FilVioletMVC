<table id="tabAuteur" class="table my-3">
    <thead class="table-dark">
        <tr>
            <th>
                <strong>nom </strong>
            </th>
            <th>
                <strong>prenom </strong>
            </th>
            <th>
                <strong>date de naissance </strong>
            </th>
            <th>
                <strong>identifiant Pays </strong>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php echo $author->nom_a(); ?>
            </td>
            <td>
                <?php echo $author->prenom_a(); ?>
            </td>
            <td>
                <?php echo $author->date_naissance_a(); ?>
            </td>
            <td>
                <?php echo $author->id_p(); ?>
            </td>
        </tr>
    </tbody>      
</table>

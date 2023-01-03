<?php include ("templates/header.php");

$mitglieder = array (
    array (
        'id'=>1,
        'username'=> 'Alina',
        'email'=>'alina@example.com',
        'alter'=>19
    ),
    array(
        'id'=>2,
        'username'=>'Daniel',
        'email'=>"daniel@coolio.de",
        'alter'=>23
    ),
    array(
        'id'=>3,
        'username'=>'Tilda',
        'email'=>"tilda@yahoo.de",
        'alter'=>20
    )
);
//var_dump($mitglieder);
?>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Alter</th>
    </tr>
    </thead>
    <tbody>


<?php
foreach ($mitglieder as $mitglied){
    echo ('<tr>' .
                '<th scope="row">'.$mitglied['id'].'</th>'.
                '<td>'.$mitglied['username'].'</td>' .
                '<td>'.$mitglied['email'].'</td>' .
                '<td>'.$mitglied['alter'].'</td>'.
        '</tr>');
}


?>

    </tbody>
</table>

<?php include ("templates/footer.php");?>

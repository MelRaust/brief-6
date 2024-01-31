
<?php include("pdo.php");?>

<?php 
$id=$_GET['id'];


$requeteSQL ="DELETE  FROM `favoris` WHERE id_fav = :id_favori ";

$requete_prepare = $pdo->prepare($requeteSQL);

$tableau_parametre = array(
     'id_favori' => $id
);

  
$requete_prepare->execute($tableau_parametre);








echo $requeteSQL;
/**$pdo->query($requeteSQL);*/

header('location: index.php')
?>


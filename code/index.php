
  <?php include("header.php");?>


  <!--  Les categories en gras dans le tableaux   -->
    
    <section class="w-screen">
        <table class="w-full">
            <tr class="border border-black">
                <th class="border border-black hover:bg-stone-500">ID favoris</th>
                <th class="border border-black hover:bg-stone-500">Libellé</th>
                <th class="border border-black hover:bg-stone-500">Date ajout</th>
                <th class="border border-black hover:bg-stone-500">Lien</th>
                <th class="border border-black hover:bg-stone-500">ID_domaine</th>
            </tr>
 
 
                 
            
            <!-- Appel des tables de la base de donnée-->
 
    <?php   
    include("pdo.php");
        // Affichage (SELECT) :
        $result = $pdo->query("SELECT * FROM `categorie`");
        $categorie = $result->fetchAll(PDO::FETCH_ASSOC); 

        $result = $pdo->query("SELECT * FROM `favoris`");
        $favoris = $result->fetchAll(PDO::FETCH_ASSOC);
        
        $result = $pdo->query("SELECT * FROM `domaine`");
        $domaines = $result->fetchAll(PDO::FETCH_ASSOC); 
       
       
    ?> 
    <form action="" method="GET">
     <select name="selection-cat" id="selection-cat">
        <option value="all">Tous afficher</option>
     <?php
    foreach($categorie as $cat){
        ?>
        <option value="<?php echo $cat['id_cat']; ?>">
            <?php echo $cat["nom_cat"]?>
        </option> 
        <?php } ?>
</select>






<select name="selection-dom" id="selection-dom">
    <option value="all">Tous afficher</option>
     <?php
    foreach($domaines as $domaine){
        ?>
        <option value="<?php echo $domaine['id_dom']; ?>">
            <?php echo $domaine["nom_dom"]?>
        </option> 
        <?php } ?>
</select>


        <button type="submit" class="border border-black ml-1.5">Rechercher</button>
        <button type="submit" class="border border-black ml-1.5">Réinitialiser</button>

    </form>

    
       
<?php 
    $result = $pdo->query("SELECT * FROM `categorie`");
        $categorie = $result->fetchAll(PDO::FETCH_ASSOC); 
        ?> 
 <?php   


        // Affichage (SELECT) :
        $result = $pdo->query("SELECT * FROM `favoris`");
        $favoris = $result->fetchAll(PDO::FETCH_ASSOC); 

    ?> 

<?php
    if (isset($_GET['selection-cat'], $_GET['selection-dom'])){
      
        
        /*$result = $pdo->query(" SELECT * FROM favoris 
        INNER JOIN cat_fav ON favoris.id_fav = cat_fav.id_fav 
        INNER JOIN categorie ON cat_fav.id_cat = categorie.id_cat 
        INNER JOIN domaine ON domaine.id_dom = favoris.id_dom
        WHERE categorie.id_cat =".$_GET['selection-cat']." OR domaine.id_dom =".$_GET['selection-dom']);*/

        if ($_GET['selection-cat'] == "all" && $_GET['selection-dom'] == "all"){

             
            $result = $pdo->query(" SELECT * FROM favoris ");

        }else{
            if($_GET['selection-cat'] == "all" && $_GET['selection-dom'] != "all"){
                $result = $pdo->query(" SELECT * FROM favoris 
                INNER JOIN domaine ON domaine.id_dom = favoris.id_dom
                WHERE domaine.id_dom =".$_GET['selection-dom']);


            }else{  
                if($_GET['selection-cat'] != "all" && $_GET['selection-dom'] == "all"){ 
                    $result = $pdo->query(" SELECT * FROM favoris 
                    INNER JOIN cat_fav ON favoris.id_fav = cat_fav.id_fav 
                    INNER JOIN categorie ON cat_fav.id_cat = categorie.id_cat 
                    WHERE categorie.id_cat =".$_GET['selection-cat']);
            
                }else{  

                    if($_GET['selection-cat'] != "all" && $_GET['selection-dom'] != "all"){ 
                        $result = $pdo->query(" SELECT * FROM favoris 
                        INNER JOIN cat_fav ON favoris.id_fav = cat_fav.id_fav 
                        INNER JOIN categorie ON cat_fav.id_cat = categorie.id_cat 
                        INNER JOIN domaine ON domaine.id_dom = favoris.id_dom
                        WHERE categorie.id_cat =".$_GET['selection-cat']." OR domaine.id_dom =".$_GET['selection-dom']);
                    }
                }
            }
        }
        
            $favoris = $result->fetchAll(PDO::FETCH_ASSOC);  
    
   
    
    
}
        
 ?>





    <?php
    foreach($favoris as $favori){
         
    ?>
        <tr class="border border-black odd:bg-white even:bg-slate-50 hover:bg-stone-500">
            <td class="border border-black "> 
                <?php echo $favori['id_fav'] ?>
            </td>
            <td class="border border-black ">
            <?php echo $favori['libelle'] ?>
            </td>
            <td class="border border-black ">
            <?php echo $favori['date_creation'] ?>
            </td>
            <td class="border border-black ">
                <a href="<?php echo $favori['url'] ?>"><?php echo $favori['url'] ?></a>
            </td>
            <td class="border border-black ">
            <?php echo $favori['id_dom'] ?>
            </td>
            <td class="border border-black ">
              <button class="bg-orange-400 border border-black hover:bg-stone-500 ">
              <i class="fa-solid fa-pen-to-square"></i>
              </button>
            </td>
            <td class="border border-black ">
            <button class="bg-red-400 border border-black hover:bg-stone-500">
            <i class="fa-solid fa-trash-can"></i>
            </button>
            </td>
         
        </tr>
        <?php
        }
        ?>  
        </table>
    </section>
    
</body>
</html>
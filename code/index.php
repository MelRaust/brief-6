
  <?php include("header.php");?>
    
    <section class="w-screen">
        <table class="w-full">
            <tr class="border border-black">
                <th class="border border-black hover:bg-stone-500">ID favoris</th>
                <th class="border border-black hover:bg-stone-500">Libellé</th>
                <th class="border border-black hover:bg-stone-500">Date ajout</th>
                <th class="border border-black hover:bg-stone-500">Lien</th>
                <th class="border border-black hover:bg-stone-500">ID_domaine</th>
            </tr>
 <!-- LIGNE 1-->
 <?php   
    include("pdo.php");
        // Affichage (SELECT) :
        $result = $pdo->query("SELECT * FROM `favoris`");
        $favoris = $result->fetchAll(PDO::FETCH_ASSOC); 

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
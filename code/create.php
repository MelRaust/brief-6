<?php include("header.php");?>

<?php include("pdo.php");?>






                    <!-- formulaire ou l'on rajoute les information pour crée la colonne -->

<section class="flex justify-center mt-10 m-auto bg-indigo-400 w-10/12 rounded-lg pb-16 pt-16">
<form class="h-4/5 max-w-xl m-auto">
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        
        <div>
            <label for="company" class="block  text-sm font-medium text-gray-900 dark:text-white">ID du favori</label>
            <input placeholder="ID du Favori" type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
        </div>  
        <div>
            <label for="phone" class="block  text-sm font-medium text-gray-900 dark:text-white">Libellé du Favoris</label>
            <input placeholder="Libellé du Favori" type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
        </div>
        <div>
            <label for="phone" class="block  text-sm font-medium text-gray-900 dark:text-white">Date de Création</label>
            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="" disabled readonly>
        </div> 
        <div>
            <label for="website" class="block text-sm font-medium text-gray-900 dark:text-white">URL</label>
            <input placeholder="Votre URL" type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
        </div>
        <div class="ml-12">
        <select id="countries" class=" h-14 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-xl p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option class="text-center" selected>Domaine Associés</option>
            <option value="US">United States</option>
            <option value="CA">Canada</option>
            <option value="FR">France</option>
            <option value="DE">Germany</option>
            <option value="DE">Germany</option>
            <option value="DE">Germany</option>
            <option value="DE">Germany</option>
            <option value="DE">Germany</option>
            <option value="DE">Germany</option>
</select>
        </div>
       
        
        
    </div>
    
    
</form>
                
                <!--    case à cocher pour selectionner une catégorie      -->

<div class="m-auto mt-12 bg-lime-700 rounded">
<ul class="h-12 w-48 text-sm font-medium text-gray-900  rounded-lg dark:bg-gray-700  dark:text-white">
    <li class="w-full rounded-t-lg ">
        <div class="flex items-center ps-3 ">
            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600   rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 ">
            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Maquettage/Figma</label>
        </div>
    </li>
    <li class="w-full  rounded-t-lg dark:border-gray-600">
        <div class="flex items-center ps-3">
            <input id="react-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="react-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">HTML/CSS</label>
        </div>
    </li>
    <li class="w-full  rounded-t-lg dark:border-gray-600">
        <div class="flex items-center ps-3">
            <input id="angular-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="angular-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bootstrap</label>
        </div>
    </li>
    <li class="w-full  rounded-t-lg dark:border-gray-600">
        <div class="flex items-center ps-3">
            <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">JavaScript </label>
        </div>
    </li>
    <li class="w-full  rounded-t-lg dark:border-gray-600">
        <div class="flex items-center ps-3">
            <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">JavaScript </label>
        </div>
    </li>
</ul>



<div class="mt-6">
<select id="countries" class="m-auto mt-44 h-14 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-xl p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option class="text-center" selected>Catégorie</option>
  <option value="US">United States</option>
  <option value="CA">Canada</option>
  <option value="FR">France</option>
  <option value="DE">Germany</option>
  <option value="DE">Germany</option>
  <option value="DE">Germany</option>
  <option value="DE">Germany</option>
  <option value="DE">Germany</option>
  <option value="DE">Germany</option>
</select>
<div class="m-auto">
        <button type="button" class="ml-6 mt-6 text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Editer mon favori</button>
</div>
</div>
</section>



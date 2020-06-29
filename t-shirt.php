<?php
$nom_produit="T-shirt-simple";
$couleur="Blanc";
$prix=10.50;
$disponible=true;
$quantite=10;

echo "<h3>" .$nom_produit. "</h3>";
echo "<p> Le nom du produit est " .$nom_produit. "</p>";
echo "<p> Il reste "  .$quantite. "produit en stock" ."</p>";
echo "<p> Le produit " .$nom_produit. "est de couleur" .$couleur. "</p>";

echo "<h4> Acheter 3 produits couterait " . $prix * 3 . " </h4> ";
echo "<h4> Acheter la totalité des produits disponibles couterait " .$quantite*$prix. "</h4>";
echo "<h4< Si les 3 produits sont vendus </h4>";
if ($disponible == true)
    echo "<p> Le produit " .$nom_produit. " est disponible en ligne </p>";
if ($disponible == false)
echo "<p> Le produit " .$nom_produit. " n'est malheuresement plus disponible </p>";
if ($quantite<5)
echo "<p> il reste " .$quantite. " produits en magasin </p>";
if ($quantite>5)
echo "<p> Il ne reste plus que " .$quantite. " produits en magasin </p>";
if ($quantite=1)
echo "<p> Il ne reste plus qu'un produit en magasin </p>";
if ($quantite=0)
echo "<p> il ne reste plus de produit en magasin </p>";
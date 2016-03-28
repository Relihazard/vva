<?php
$requete = 'SELECT * FROM hebergement order by \'NOHEB\' desc;';
$sql = $link->query($requete);
$data = $sql->fetch();

?>
<div class="column1">
    <div class="title">
        <h2>Lorem Ipsum</h2>
    </div>
    <p>
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
    eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut
    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
    ut aliquip ex ea commodo consequat.<br> Duis aute irure dolor in
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
    pariatur.<br> Excepteur sint occaecat cupidatat non proident, sunt in
    culpa qui officia deserunt mollit anim id est laborum."
    </p>
</div>
<div class="column2">
    <div class="title">
        <h2>Les dernières offres</h2>
    </div>
    <p>
       <?php
       echo "<a href='affichageOffre.php?noHebergement=$data[NOHEB]'><h3>",$data['NOMHEB'],"</h3></a><br>";
       echo $data['DESCRIHEB'];
       echo "<img alt='dernièreOffre' src=$data[PHOTOHEB]>";
       ?>
    </p>
</div>
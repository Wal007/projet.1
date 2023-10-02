<?php include("./view/header.php") ?>
<section>
    <h1 class="heading">Ajouter un article</h1>
    <form action="" method="post">
        <input type="text" name="name_art" id="" placeholder="Name article" required>
        <input type="number" name="qtt_art" id="" placeholder="Quantité" required>
        <input type="text" name="prix_art" id="" placeholder="Prix article" required>
        <input type="file" name="img_art" id="" required>
        <input type="button" name="btnAdd" value="Ajouter">
</section>
<?php include("./view/footer.php") ?>
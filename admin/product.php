<?php include("./view/header.php") ?>
<section>
    <h1 class="heading">Ajouter un article</h1>
    <form action="./model/insertProduct.php" method="post" enctype="multipart/form-data">
        <input type="text" name="p_name" id="" placeholder="Name article" required>
        <input type="number" name="p_quantity" id="" placeholder="Quantité" required>
        <input type="text" name="p_price" id="" placeholder="Prix article" required>
        <input type="file" name="p_image" id="" required>
        <input type="submit" name="btnAdd" value="Ajouter">
    </form>    
</section>
<?php include("./view/footer.php") ?>
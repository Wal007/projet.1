<?php include("./view/header.php") ?>

<section>
    <h1 class="heading">Tous les articles</h1>
    <table>
        <thead>
            <th>N°</th>
            <th>Nom artcle</th>
            <th>Quantité</th>
            <th>Prix</th>
            <th>Image</th>
            <th>action</th>
        </thead>
        <?php
        $sql = "SELECT * FROM products";
        $req = $connexion->prepare($sql);
        $req->execute();
        $products = $req->fetchAll();
        $i = 0;
        if (!empty($products) && is_array($products)) {
            foreach ($products as $key => $product) {
                $i++;
         ?>
        <tbody>
            <tr>
                <td><?= $i?></td>
                <td><?= $product['p_name'] ?></td>
                <td><?= $product['p_quantity'] ?></td>
                <td><?= $product['p_price'] ?></td>
                <td> <img src="<?= $product['p_image'] ?>" alt="" height="60" width="60"> </td>
                <td>voir |editer |supprimer </td>
            </tr>
        </tbody>
        <?php 
           }
        }
        ?>
    </table>
</section>
<?php include("./view/footer.php") ?>
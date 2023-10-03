<?php
include("./config.php");
if(isset($_POST["btnAdd"])) {
    extract($_POST);

    $checkSql = "SELECT * FROM products WHERE p_name = ?";
    $checkReq = $connexion->prepare($checkSql);
    $checkReq->execute([$p_name]);

    if ($checkReq->rowCount() > 0) {
        $error = 'Le produit existe déjà!';
        $_SESSION['error_message'] = $error;
        header('Location: ../product.php');
        exit;
    }

    // Vérification et traitement de l'image téléchargée
    if ($_FILES['p_image']['error'] === UPLOAD_ERR_OK) {
        $targetDir = "./assets/image/p_image/";
        $uploadDir = '../assets/image/p_image/'; // Dossier où vous souhaitez enregistrer les images
        $imageExtension = pathinfo($_FILES['p_image']['name'], PATHINFO_EXTENSION);
        $uploadFile = $uploadDir . 'p-'. $p_name . "." . $imageExtension; // Nom du fichier final
        $imagePath = $targetDir . 'p-'. $p_name . "." . $imageExtension;

        // Déplacement de l'image téléchargée vers le dossier
        if (move_uploaded_file($_FILES['p_image']['tmp_name'], $uploadFile)) {
            // Insertion des données dans la base de données
            $stmt = $connexion->prepare("INSERT INTO products(p_name, p_quantity, p_price, p_image) VALUES(?, ?, ?, ?)");
            $stmt->execute([$p_name, $p_quantity, $p_price, $imagePath]);
            $stmt->closeCursor();

            $success = 'catégorie ajoutée avec succès!';
            $_SESSION['success_message'] = $success;
        } else {
            $error = "Erreur lors du déplacement de l'image";
            $_SESSION['error_message'] = $error;
        }
    } else {
        $error = "Erreur lors du téléchargement de l'image.";
        $_SESSION['error_message'] = $error;
    }
    
    // Redirigez vers la page appropriée
    header('Location: ../product.php');
    exit;
}
header('Location: ../product.php');
?>
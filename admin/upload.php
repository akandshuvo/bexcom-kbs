<?php
    if (isset($_FILES['dthproduct'])){
        $UploadName = $_FILES['dthproduct']['name'];
        $UploadTmp = $_FILES['dthproduct']['tmp_name'];
        if(!$UploadTmp) {
            echo '<script>alert("No File Selected! Please Upload again!!!")</script>';
            header("Refresh:0; url=dth.php");
        } else {
            echo '<script>alert("Success!!!")</script>';
            move_uploaded_file($UploadTmp,"../docs/dth/product/$UploadName");
            header("Refresh:1; url=dth.php");
        }
    }

if (isset($_FILES['dthservice'])){
    $UploadName = $_FILES['dthservice']['name'];
    $UploadTmp = $_FILES['dthservice']['tmp_name'];
    if(!$UploadTmp) {
        echo '<script>alert("No File Selected! Please Upload again!!!")</script>';
        header("Refresh:0; url=dth.php");
    } else {
        echo '<script>alert("Success!!!")</script>';
        move_uploaded_file($UploadTmp,"../docs/dth/services/$UploadName");
        header("Refresh:1; url=dth.php");
    }
}

if (isset($_FILES['dth_offer'])){
    $UploadName = $_FILES['dth_offer']['name'];
    $UploadTmp = $_FILES['dth_offer']['tmp_name'];
    if(!$UploadTmp) {
        echo '<script>alert("No File Selected! Please Upload again!!!")</script>';
        header("Refresh:0; url=dth.php");
    } else {
        echo '<script>alert("Success!!!")</script>';
        move_uploaded_file($UploadTmp,"../docs/dth/offers/$UploadName");
        header("Refresh:1; url=dth.php");
    }
}
if (isset($_FILES['dth_whyrealview'])){
    $UploadName = $_FILES['dth_whyrealview']['name'];
    $UploadTmp = $_FILES['dth_whyrealview']['tmp_name'];
    if(!$UploadTmp) {
        echo '<script>alert("No File Selected! Please Upload again!!!")</script>';
        header("Refresh:0; url=dth.php");
    } else {
        echo '<script>alert("Success!!!")</script>';
        move_uploaded_file($UploadTmp,"../docs/dth/whyrealvu/$UploadName");
        header("Refresh:1; url=dth.php");
    }
}
?>

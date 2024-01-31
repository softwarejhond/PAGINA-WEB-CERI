<?php
include_once 'conexion.php';
if (isset($_POST['addSuscriptor'])) {
    $emailSuscriptor = mysqli_real_escape_string($con, (strip_tags($_POST["emailSuscriptor"], ENT_QUOTES))); //Escanpando caracteres 

    $cek = mysqli_query($con, "SELECT * FROM suscriptores WHERE email='$emailSuscriptor'");
    if (mysqli_num_rows($cek) == 0) {
        $insert = mysqli_query($con, "INSERT INTO suscriptores(email) VALUES ('$emailSuscriptor')");
        if ($insert) {
            echo '
            <div class="alert alert-success" role="alert">
            <i class="fas fa-thumbs-up"></i> Suscripción Registrada Correctamente
            </div>';
        } else {
            echo '
                 <div class="alert alert-warning" role="alert">
                 <i class="fas fa-triangle-exclamation"></i> Hubo problemas en el registro de la suscripción intenta nuevamente
                </div>';
        }
    } else {
        echo '
     
        <div class="alert alert-danger" role="alert">
        <i class="fas fa-bug"></i> Error. el email que estas intentando registrar ya esxiste!
</div>';
    
    }
}
?>
<script>
    $(document).ready(function() {
        $(".toastNotificacion").toast('show');
    });
</script>
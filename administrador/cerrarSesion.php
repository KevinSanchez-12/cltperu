<?php 
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['dni']);
    unset($_SESSION['contrasena']);
    session_destroy();
    echo "
    <script> 
        location.href= '../intranet';
    </script>
    ";
?>
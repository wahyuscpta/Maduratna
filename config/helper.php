<?php

    function alert($pesan, $location){
        echo"
        <script>
            alert('$pesan');
            location.href='$location';
        </script>
    ";
    }

?>
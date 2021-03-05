<?php

    function alert($pesan, $location){
        echo"
        <script>
            alert('$pesan');
            location.href='$location';
        </script>
    ";
    }

    function pesan($alert, $title, $text){
        echo "
        <div class='alert alert-" . "$alert" . " alert-dismissible fade show mr-3 ml-3'>
          <button type='button' aria-hidden='true' class='close' data-dismiss='alert' aria-label='Close'>
            <i class='nc-icon nc-simple-remove'></i>
          </button>
          <span><b> $title - </b> $text</span>
        </div>                       
      ";

    }

?>
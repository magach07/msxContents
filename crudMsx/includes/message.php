<?php
// ABRINDO SESSÃO 
session_start();
if(isset($_SESSION['mensagem'])): ?>

<script>
  // MENSAGEM DINÂMICA MATERIALIZE
  window.onload = function(){
    M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
  };
</script>
<?php

endif;
?>
<?php
  include("../includes/vars.php");
  $header_terminal_command = "mac dev DIRTY /code/jc.com/src $ cat index.php";
  $page_color = 'orange';

  $large_resolution_extra = <<<END_HTML
      Wow, you have a big monitor.<br/>
      Should I fill this empty space?<br/>
END_HTML;

  include("includes/header.php");
?>
          <h1>Welcome to my home on the web.</h1>

          <p>Please click one of the links above.</p>

          <p>
            Do <i>not</i> try this <a href="#" onClick="alert('Now you are on the naughty list!!')">link</a> though! 
          </p>

<?php include("includes/footer.php"); ?>

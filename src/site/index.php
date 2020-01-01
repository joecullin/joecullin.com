<?php
  include("../includes/vars.php");
  $header_terminal_command = "mac dev DIRTY /code/jc.com/src $ cat index.html";
  $page_color = 'orange';

  $large_resolution_extra = <<<END_HTML
      Wow, you have a big monitor.<br/>
      Should I fill this empty space?<br/>
END_HTML;

  include("includes/header.php");
?>
          <div data-dis-container id="explodingDiv"  data-dis-type="self-contained">
            <h1>Welcome to my home on the web.</h1>

            <p>Please click one of the links above.</p>

            <p>
              Do <i>not</i> try this <a id="doNotClick" href="#">link</a> though!
            </p>
          </div>

<?php

  $footer_js = <<<END_JS
    disintegrate.init();

    document.getElementById('doNotClick').addEventListener('click', e => {
      console.log('clicked button');
      var targetDiv = document.getElementById('explodingDiv');
      var disObj = disintegrate.getDisObj(targetDiv);
      disintegrate.createSimultaneousParticles(disObj);

      var oopsDiv = document.createElement("div");
      var oopsMessage = document.createTextNode("You just had to try it.");
      oopsDiv.appendChild(oopsMessage);
      var parentDiv = targetDiv.parentNode;
      parentDiv.insertBefore(oopsDiv, targetDiv);
      targetDiv.remove();

    });
END_JS;

  include("includes/footer.php");
?>

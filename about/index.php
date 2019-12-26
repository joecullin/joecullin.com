<?php
  include("../includes/vars.php");

  $header_terminal_command = "mac master clean /code $ ls -halt `which joe` && man 5 joe";

  $large_resolution_extra = <<<END_HTML
      Bonus content for huge monitors.<br/>
      Picture of me.<br/>
      <picture>
        <source srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1w" media="(max-width: 2399px)">
        <img src="https://www.joecullin.com/site/wp-content/uploads/2009/12/joe_cullin_on_the_beach_tall.png" media="(min-width: 2400px)" width="255" align="right"/>
      </picture>
END_HTML;

  include("../includes/header.php");
?>
          <h1>About</h1>

          <p>
            I live in <a href="https://en.wikipedia.org/wiki/Randolph,_New_Jersey" <?php echo $offsite_attributes?> >Randolph, NJ</a>
            with my wife & two daughters, and work as a software engineer at <a href="https://www.thomasnet.com/" <?php echo $offsite_attributes?> >Thomas</a>.
          </p>
          <p>
            This site is mainly a sandbox for trying new code & tools, but once in a while I post some
            <a href="/site/" target="_blank">content</a> or share one of my <a href="/projects">projects</a>.
          </p>

          <h2>Personal</h2>
          <ul>
            <li>
              <a href="https://www.facebook.com/joe.cullin" <?php echo $offsite_attributes?> >Facebook</a>
            </li>
            <li>
              <a href="https://github.com/joecullin" <?php echo $offsite_attributes?> >GitHub</a>
            </li>
          </ul>

          <h2>Professional</h2>
          <ul>
            <li>
              <a href="https://www.linkedin.com/in/joecullin" <?php echo $offsite_attributes?> >LinkedIn</a>
            </li>
            <li>
              <a href="/about/resume">My R&eacute;sum&eacute;</a>
            </li>
          </ul>

<?php include("../includes/footer.php"); ?>

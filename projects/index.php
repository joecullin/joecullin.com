<?php
  $header_terminal_command = "mac master clean /code $ find projects -name info.json -depth 2 | xargs fgrep 'featured: true' | cut -d/ -f2 | sort";

  $large_resolution_extra = <<<END_HTML
      Random bonus content for large monitors.<br/>
      My favorite pencil, on my table saw.<br/>
      <picture>
        <source srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1w" media="(max-width: 2399px)">
        <img src="/assets/think-and-suggest-pencil.png" media="(min-width: 2400px)"/>
      </picture>
END_HTML;

  include("../includes/header.php");
?>
          <h1>Projects</h1>

          <h2>On the Computer</h2>
          <ul>
            <li>
              <a href="https://github.com/joecullin/aoc2019">Advent of Code 2019</a>
              <span class="note">My AOC 2019 solutions.</span>
            </li>
            <li>
              <a href="https://github.com/joecullin/joecullin.com">joecullin.com code</a>
              <span class="note">This site.</a>
            </li>
            <li>
              <a href="/site/?cat=9">Workout Log</a>
              <span class="note">Almost 10 years of journaling from a simple single-page app. Slowly working on version 2.</span>
            </li>
            <li>
              <a href="/data_converter/">Convert from Excel to Redmine table, YAML, JSON</a>
              <span class="note">Markdown table converter.</span>
            </li>
          </ul>

          <h2>Around the House</h2>
          <ul>
            <li>
              <a href="/site/2012/10/pallet-wood-projects/">Adirondack Chair & Flower Boxes</a>
              <a href="/site/2012/11/patio-accent-table-made-from-pallet-boards/">Patio Table</a>
              <a href="/site/2013/01/homemade-wooden-coasters/">Wooden Coasters</a>
              <span class="note">Pallet Projects</a>
            </li>
            <li><a href="/site/2015/06/training-myself-to-be-a-back-sleeper/">Training myself to be a back sleeper</a></li>
            <li><a href="/site/2015/02/diy-floating-toy-shelves/">Floating Toy Shelves</a></li>
            <li><a href="/site/2015/02/sliding-monitor-mount-for-standing-desk/">Sliding Wall-Mounted Monitor Stand</a></li>
          </ul>

          <h2>Other Fun Stuff</h2>
          <ul>
            <li>
              <a href="/alberta-lamphear/">Alberta Lamphear Family Tree</a>
              <span class="note">My mom's first web project: a tribute to my grandmother and our family tree.</span>
            </li>
            <li>
              <a href="/georgiagiraffe.club/">Georgia's Site</a>
              <span class="note">Georgia bought a 99&cent; domain and made this. After it expired, we saved it here.</span>
            </li>
            <li><a href="/site/2019/05/re-attach-the-caseback-on-a-water-resistant-watch/">Re-Attach a Watch Caseback</a></li>
          </ul>

<?php include("../includes/footer.php"); ?>

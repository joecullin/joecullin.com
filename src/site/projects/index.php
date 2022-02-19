<?php
  include("../includes/vars.php");
  $header_terminal_command = "mac master clean /code $ find projects -name info.json -depth 2 | xargs fgrep 'featured: true' | cut -d/ -f2 | sort";
  $page_color = 'blue';
  $large_resolution_extra = <<<END_HTML
      Random bonus content for huge monitors.<br/>
      My favorite pencil, on my table saw.<br/>
      <picture>
        <source srcset="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7 1w" media="(max-width: 2399px)">
        <img src="/assets/think-and-suggest-pencil.png" media="(min-width: 2400px)" width="500"/>
      </picture>
END_HTML;

  include("../includes/header.php");
?>
          <h1>Projects</h1>

          <h2>On the Computer</h2>
          <ul>
            <li>
              <a href="https://github.com/joecullin/aoc2021" <?php echo $offsite_attributes?> >Advent of Code 2021</a>
              <span class="note">My AOC 2021 solutions. (Not as many stars as 2020, but I still had fun.)</span>
            </li>
            <li>
              <a href="https://github.com/joecullin/joecullin.com" <?php echo $offsite_attributes?> >joecullin.com code</a>
              <span class="note">This site.</a>
            </li>
            <li>
              <a href="<?php echo $base_url?>/site/?cat=9" <?php echo $offsite_attributes?> >Workout Log</a>
              <span class="note">Almost 10 years of journaling from a simple single-page app. Slowly working on version 2.</span>
            </li>
            <li>
              <a href="<?php echo $base_url?>/data_converter/" <?php echo $offsite_attributes?> >Convert from Excel to Redmine table, YAML, JSON</a>
              <span class="note">Markdown table converter.</span>
            </li>
          </ul>

          <h2>Around the House</h2>
          <ul>
            <li>
              <a href="<?php echo $base_url?>/site/2012/10/pallet-wood-projects/" <?php echo $offsite_attributes?> >Adirondack Chair & Flower Boxes</a>
              <a href="<?php echo $base_url?>/site/2012/11/patio-accent-table-made-from-pallet-boards/" <?php echo $offsite_attributes?> >Patio Table</a>
              <a href="<?php echo $base_url?>/site/2013/01/homemade-wooden-coasters/" <?php echo $offsite_attributes?> >Wooden Coasters</a>
              <span class="note" <?php echo $offsite_attributes?> >Pallet projects</a>
            </li>
            <li>
              <a href="<?php echo $base_url?>/site/2020/05/wall-mounted-floating-laptop-desk/" <?php echo $offsite_attributes?> >Standup laptop workstation</a>
              <a href="<?php echo $base_url?>/site/2020/04/standup-laptop-desk-from-a-jack-stand/" <?php echo $offsite_attributes?> >Jackstand desk</a>
              <a href="<?php echo $base_url?>/site/2015/02/sliding-monitor-mount-for-standing-desk/" <?php echo $offsite_attributes?> >Sliding Wall-Mounted Monitor</a>
              <span class="note" <?php echo $offsite_attributes?> >Standing desk hacks</a>
            </li>
            

            <li><a href="<?php echo $base_url?>/site/2015/06/training-myself-to-be-a-back-sleeper/" <?php echo $offsite_attributes?> >Training myself to be a back sleeper</a></li>
            <li><a href="<?php echo $base_url?>/site/2015/02/diy-floating-toy-shelves/" <?php echo $offsite_attributes?> >Floating Toy Shelves</a></li>
          </ul>

          <h2>Other Fun Stuff</h2>
          <ul>
            <li>
              <a href="<?php echo $base_url?>/alberta-lamphear/" <?php echo $offsite_attributes?> >Alberta Lamphear Family Tree</a>
              <span class="note" <?php echo $offsite_attributes?> >My mom's first web project: a tribute to my grandmother and our family tree.</span>
            </li>
            <li>
              <a href="<?php echo $base_url?>/georgiagiraffe.club/" <?php echo $offsite_attributes?> >Georgia's Site</a>
              <span class="note">Georgia bought a 99&cent; domain and made this. Saved here after it expired.</span>
            </li>
            <li><a href="<?php echo $base_url?>/site/2019/05/re-attach-the-caseback-on-a-water-resistant-watch/" <?php echo $offsite_attributes?> >Re-Attach a Watch Caseback</a></li>
          </ul>

<?php include("../includes/footer.php"); ?>

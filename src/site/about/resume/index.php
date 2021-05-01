<?php
  include("../../includes/vars.php");

  $header_terminal_command = "mac master clean /code $ history | perl -pe 's/^[ 0-9]*(.*?)\s.*/$1/' | sort -u";

  $large_resolution_extra = "";

  include("../../includes/header.php");
?>
          <h1>My R&eacute;sum&eacute;</h1>
          <p>
            Joe Cullin . Randolph, NJ . <a href="mailto:joe@joecullin.com">joe@joecullin.com</a>
          </p>

          <p>
            Download a two-page <a href="joe-cullin-resume.pdf">PDF&nbsp;document</a> or read a more-detailed history below.
          </p>

          <div id="resume-detail" class="readable">
            <h2>Summary</h2>

            <p>
              Current status: happy where I am.
            </p>
            <p>
              I've enjoyed roles ranging from senior developer to director of a large multi-office set of teams.
              I like to stay close to the hands-on action, either as an individual contributor or in a hybrid role with some management/leadership expectations. 
              (Though I wouldn't rule out a higher-level management position if it were the perfect fit.) 
            </p> 

            <p> 
              <ul>
                <li>I quickly gain a deep understanding of complex systems, no matter how large the tech debt or how sparse the docs.</li>
                <li>I think fixing bugs and improving reliability is just as rewarding as building new systems.</li>
                <li>I am good at translating and refining business needs into workable software solutions.</li>
                <li>I consistently meet tough deadlines and challenging goals, pragmatically achieving project goals without sacrificing quality.</li>
                <li>I like to push new tech, but I also realize the value of stable, proven solutions.</li>
                <li>I believe organizations, people, &amp; process deserve as much attention as technology.</li>
                <li>I'm a huge fan of continuous improvement, for myself, my team, and the systems we use.</li>
                <li>I support good leaders and work well with them, but I don't shy from leadership roles when needed.</li>
              </ul>
            </p>

            <h2>Tech</h2>

            <p><i>Languages</i>: <b>JavaScript, HTML, CSS, Perl, PHP</b>, TypeScript, Sass, Java, C, Bash.</p>
            <p><i>Frameworks &amp; Platforms</i>: <b>Node.js, React, Express</b>, Apache, Apollo, jQuery, IIS, Nginx.</p>
            <p><i>Operating Systems</i>: <b>Ubuntu, </b>macOS, Windows servers, many other UNIX/linuxes.</p>
            <p><b><i>Amazon</i></b><i> <b>AWS</b></i>: EC2, S3, RDS, Cognito, EKS, CDK, Route53, DocumentDB, CloudFront, ALB, ELB, Lambda, SES, SNS, DynamoDB, ElastiCache, Elasticsearch, WAF.</p>
            <p><i>Tools</i>: <b>Git, Gitlab, ELK stack, Kubernetes, Azure DevOps</b>, Subversion, Gulp, Jenkins, Jira/Confluence, Redmine.</p>
            <p><i>Databases</i>: <b>Elasticsearch, MySQL</b>, PostgreSQL, SQL Server, Oracle, MongoDB, Redis.</p>
            <p><i>Also</i>: <b>GraphQL</b>, Docker, jsreport, Laravel, Slim, Nuxeo, HubSpot, WordPress, Perforce, Email (low-level content &amp; delivery protocols), AJAX, APIs (MS Graph, Zendesk, Salesforce, Hubspot, Google, Slack, Iterable, etc.), Bootstrap, ImageMagick, VirtualBox, REST, SOAP, OAuth, Swagger.</p>


            <h2>Work Experience</h2>

            <div class="resume-job">
              <div class="resume-job__header">
                Feb 2020&ndash;Present<br/>
                Senior Software Engineer<br/>
                <a href="https://getskout.com/" <?php echo $offsite_attributes?> >SKOUT CYBERSECURITY</a> - New York, NY
              </div>
              <div class="resume-job__details">
                <p>
                  <b>Software Engineering Manager</b>,<i>(Apr 2021&ndash;present)</i>
                <p>
                  <ul class="resume-job__bulleted-list">
                    <li>Just getting started! Check back soon.</li>
                  </ul>

                <p>
                  <b>Senior Software Engineer</b><i>(Feb 2020&ndash;Mar 2021)</i>
                </p>
                  <ul class="resume-job__bulleted-list">
                    <li>Focused primarily on SKOUT's new partner/customer dashboard (React/node), plus some internal apps and data processing pipelines.</li>
                    <li>Developed several new dashboard screens & features. Highlight: a from-scratch custom report builder, with reports rendered in React, pdf download, and recurring scheduling.</li>
                    <li>Contributed dozens of visible function & ux improvements, often coupled with underlying security, quality, and maintainability improvements.</li>
                    <li>Process: introduced CI/CD (gitlab), automated unit testing (Jest), code reviews, stable & predictable deploy routines, bug triage, etc.</li>
                  </ul>
              </div>
            </div>

            <div class="resume-job">
              <div class="resume-job__header">
                Mar 2018&ndash;Feb 2020<br/>
                Senior Software Engineer<br/>
                <a href="https://www.thomasnet.com/" <?php echo $offsite_attributes?> >Thomas</a> - New York, NY
              </div>
              <div class="resume-job__details">
                <p>
                My team builds &amp; maintains the <a href="https://www.thomasnet.com/" <?php echo $offsite_attributes?> >thomasnet.com</a> website, a B2B resource for US industrial companies. Along with the main website, we build maintain dozens of backend tools for content production, reporting &amp; analytics, ad serving, client portals, seo management, sales, and integrations with partner &amp; legacy systems.
                </p>
                <p>
                We're modernizing and simplifying the whole stack&mdash;in-place &amp; without disruption&mdash;while also delivering steady improvements to usability, performance, SEO, and adding new features and functions. This includes gradually reshaping the architecture to make it more scalable and more maintainable:
                <ul>
                  <li>ALB instead of ELB,</li>
                  <li>Node lambdas instead of PHP pages,</li>
                  <li>React instead of jQuery,</li>
                  <li>Re-shaping the data,</li>
                  <li>Consolidating other languages/platforms.</li>
                </ul>
                Because it's a long-term effort, we're also maintaining&mdash;sometimes even expanding&mdash;portions of the large PHP codebase as needed.
                </p>

                <p>
                Sampling of accomplishments:
                <ul class="resume-job__bulleted-list">
                <li>Helped hire and organize a new software engineering team to work on thomasnet.com and the supporting backend systems. Led a 3&ndash;4 person "pod" of developers. Responsible for estimating and refining stories, sprint planning, and balancing trade-offs to ensure delivery of sprint commitments.</li>

                <li>Proposed, planned, and completed several complex in-place overhauls of site architecture, to support our rapid growth in registered users and in overall traffic. The result was greater scalability, reduced code &amp; architecture complexity, and lower infrastructure costs. For example: replaced hundreds of on-page-load SQL queries with S3 data objects, generated by hourly/nightly processes.</li>

                <li>Replaced multiple custom article &amp; newsletter management systems with a single more powerful CMS. Configured Nuxeo (off-the-shelf product) as the foundation, and created a custom GraphQL data layer, a user-facing React app, and new publishing processes.</li>

                <li>Replaced 3rd-party user data &amp; single-sign-on product with a simpler and more scalable custom system. Included creation of a backward-compatible api and gradual migration of several sites &amp; tools, with no downtime or impact on users.</li>
                </ul>
                </p>

              </div>
            </div>

            <div class="resume-job">
              <div class="resume-job__header">
                Oct 2011&ndash;Mar 2018<br/>
                Analyst<br/>
                <a href="https://cmg.tech/" <?php echo $offsite_attributes?> >CMG.tech</a> - Chester, NJ
              </div>
              <div class="resume-job__details">
                <p>
                The thomasnet.com site and many of its content systems were originally created and maintained by CMG.
                <ul class="resume-job__bulleted-list">

                <li>In our flat org (which varied in size from 10&ndash;20 senior developers and analysts) I served a dual role of 50/50 project manager and senior developer, adjusting based on the needs of each project.</li>

                <li>Served as direct point of contact for about 30&ndash;40 product owners, business analysts, developers, project managers, etc. at Thomas, with weekly meetings at their NY office.</li>

                <li>Improved dev environments, introduced source code management, introduced issue tracking. Improved project management, security, efficiency, testing, quality, and communication of our dev team's work.</li>

                <li>Thomas's size/age/complexity (both the organization and the technology) was daunting. I mastered a lot of arcane history, and then helped gradually simplify and streamline systems.</li>

                </ul>
                </p>
              </div>
            </div>

            <div class="resume-job">
              <div class="resume-job__header">
                Nov 1997&ndash;Oct 2011<br/>
                Software Developer; Manager; Director<br/>
                Numara Software / UniPress Software - Woodbridge, NJ
              </div>
              <div class="resume-job__details">
                <p>
                Built the FootPrints service desk product.<br/>
                Now owned by BMC Software: <a href="http://www.footprintsservicedesk.com" <?php echo $offsite_attributes?> >www.footprintsservicedesk.com</a>.
                </p>

                <p>
               <b>Product Development Director</b>,<i> Numara Software (May 2008&ndash;Oct 2011)</i>

               <ul class="resume-job__bulleted-list">
               <li>Responsible for all aspects of product development, with a larger team (26 full-time employees in 2 US locations, 13 offshore, 4 local contractors).</li>
               <li>Integrated a 15-person development team in our Tampa office with the existing 10-person team in NJ, resolving vast differences in culture, skillset, personality &amp; process.</li>
               <li>Managed relationships with other departments, negotiating projects, processes and priorities.</li>
               <li>Transitioned the team to more formal roles &amp; processes, while retaining agility and flexibility.</li>
               <li>Developed the team&rsquo;s ability to work on multiple major releases in parallel, delivering some very large multi-year, multi-developer features, while still maintaining a regular release/update cadence.</li>
               <li>Managed an 18-month redesign of the product with a design firm, successfully meeting our two goals: improving the product UI, and improving our team&rsquo;s UX capabilities.</li>
               <li>Employee development: worked with managers and developers to continually improve their skills and expertise, empowering them to grow as team leaders.</li>
               </ul>
               </p>

               <p>
               <b>Development Manager / Lead</b>,<i> Numara Software (Aug 2006&ndash;May 2008)</i>

               <ul class="resume-job__bulleted-list">
               <li>Co-managed a 10-person development team, with 3 direct reports, while still playing the role of lead developer about 75% of my time.</li>
               <li>Responsible for maintenance team, version control (migrated to Subversion), and builds.</li>
               <li>Led initiatives focused on security, style, code reviews, and testing.</li>
               </ul>
               </p>

               <p>
               <b>Lead Software Developer</b>,<i> UniPress Software (Nov 1997&ndash;Aug 2006)</i>

               <ul class="resume-job__bulleted-list">
               <li>Helped lead the development team as it grew from 2 to 9 developers.</li>
               <li>Designed, developed, and supported key product features, including email integration, reporting, user rights, integrations with other products, authentication, automated business workflow, internationalization.&nbsp;</li>
               <li>Improved product performance, supportability, and stability. Worked with tech support (and directly with customers) to troubleshoot and fix problems.</li>
               <li>Helped new hires develop intangible skills, e.g. the art of debugging, writing maintainable code, etc.</li>
               </ul>
               </p>

              </div>
            </div>

            <h2>Education</h2>
              <ul>
                <li>Rutgers University: B.S. Computer Science, 1999.</li>
                <li>ITIL Foundations certification for ITIL v2 and v3.</li>
                <li>Thousands of hours spent following and contributing to programming forums.</li>
                <li>Many books on software development and management.</li>
              </ul>

          </div> <!--resume-detail-->

<?php include("../../includes/footer.php"); ?>

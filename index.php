<?php 
include ("includes/header.php");
?>

<body class="style-guide theme-coral">
  <header class="header-primary">
    <a href="/" class="logo">
      <img src="/assets/img/W&&T-full-logo-outline.svg" alt="Women && Tech logo">
      <h1 class="screen-readers">Women && Tech</h1>
    </a>
    <nav class="nav-primary" data-scroll-header>
      <a data-scroll href="#templates">Templates & Themes</a>
      <a data-scroll href="#headings">Headers</a>
      <a data-scroll href="#footers">Footers</a>
      <a data-scroll href="#images">Images</a>
      <a data-scroll href="#qa">Q&A</a>
      <a data-scroll href="#quote">Quote</a>
      <a data-scroll href="#team">Team</a>
      <a data-scroll href="#misc">Misc</a>
    </nav>
  </header>
  
  <main role="main">
    <!-- // Secondary Header -->
    <header class="no-border header-secondary">
      <h2>Style Guide & Component Library</h2>
      <p>When we redesigned the W&&T website, we refreshed the design but also recreated the website architecture to make it easy to maintain and add new content. The goal was to keep the codebase as straightforward as possible, so all team members could add content without specialized or extensive development skills. We decided to follow a component based approach to be able to mix and match page elements to create different yet consistent page layouts.</p>
    </header>
    
    <!-- // Page Templates -->
    <section class="border module-info grid-wrapper">
      <div class="grid-2-1">
        <h2 id="templates">Templates</h2>
        <ul>
          <li><a href="base-template.php" target="_blank">Base Markup Template</a>
            <ul>
              <li>Base markup for all pages, for reference</li>
              <li>Includes global header, footer and links to css & js files</li>
              <li>Theme color classes should be added to the <code>&lt;body&gt;</code> tag</li>
            </ul>
          </li>
          <li><a href="page-template.php" target="_blank">Page Template</a>
            <ul>
              <li>Use for non-interview content (e.g. About)</li>
            </ul>
          </li>
          <li>
            <a href="interview-template.php" target="_blank">Interview Template</a>
            <ul>
              <li>Use for interview pages</li>
            </ul>
          </li>
          <li>
            <a href="archive.php" target="_blank">Interview Archive Template</a>
            <ul>
              <li>Use for interview archive page</li>
            </ul>
          </li>
        </ul>
        <p>Refer to the sections below for specific content module examples and code snippets.</p>
      </div>
      <div class="grid-2-1">
        <h2 id="themes">Themes</h2>
        
        <button class="coral" data-theme="coral">.theme-coral</button>
        <button class="purple" data-theme="purple">.theme-purple</button>
        <button class="yellow" data-theme="yellow">.theme-yellow</button>
        <button class="green" data-theme="green">.theme-green</button>
        <button class="blue" data-theme="blue">.theme-blue</button>
        <p>Select a button to view the theme color options. Theme changes include:</p>
        <ul>
          <li>page background</li>
          <li>link colors, :hover and :focus</li>
        </ul>
        <p>Theme color classes are added to the <code>&lt;body&gt;</code> tag using one of five theme color codes.</p> 
        <pre><code class="xml">&lt;body class="theme-coral"&gt;</code></pre> 
        <p>In the static site, themes are added using PHP variables. Refer to the static site documentation for more info.</p>  
      </div>
    </section>

    <!-- // Headers //-->
    <section class="border module-info">
      <h2 id="headings">Headers</h2>
      <!-- // Secondary Header -->
      <div class="grid-wrapper">
        <div class="grid-2-1">
          <h3>Secondary Header</h3>
          <p>The secondary header is used for pages that require introductory information to be presented before the main content.</p>
        </div>
        <div class="grid-2-1">
<pre><code class="xml">&#x3C;!-- // Secondary Header --&#x3E;
&lt;header class=&quot;no-border header-secondary&quot;&gt;
  &lt;h2&gt;We&rsquo;re not endorsing the obvious. We&rsquo;re commending the awesome.&lt;/h2&gt;
  &lt;p&gt;Our industry is filled with &lt;a href="#"&gt;smart, interesting women&lt;/a&gt; including developers, designers, entrepreneurs, and tech leaders. These women are a big deal, and we think you should know about them. We highlight them not for their gender, but because they are awesome by any kind of measure.&lt;/p&gt;
&lt;/header&gt;
</code></pre>
        </div>
      </div>
    </section>
    
    <!-- Example: Secondary Header -->
    <header class="no-border header-secondary">
      <h2>We're not endorsing the obvious. We're commending the awesome.</h2>
      <p>Our industry is filled with <a href="#">smart, interesting women</a> including developers, designers, entrepreneurs, and tech leaders. These women are a big deal, and we think you should know about them. We highlight them not for their gender, but because they are awesome by any kind of measure.</p>
    </header>
    
    
    <!-- // Interview Header -->
    <section class="border module-info grid-wrapper">
      <div class="grid-narrow">
        <h3>Interview Header</h3>
        <p>This header is used to begin all interview pages. PHP variables are used to automatically add the author name and social media information. Included in the <strong>base-template.php</strong> file in the static site repo.</p>
      </div>
      <div class="grid-wide">
<pre><code>&lt;header class=&quot;border header-interview&quot;&gt;
  &lt;div class=&quot;wrapper-sm&quot;&gt;
    &lt;h2&gt;Interviewee Name [update this]&lt;/h2&gt;
    &lt;p class=&quot;intro&quot;&gt;Intro paragraph.[update this]&lt;/p&gt;

    &lt;?php // Don't update. Using the same info as in Interview Credits. ?&gt;
    &lt;p class=&quot;author&quot;&gt;An interview with &lt;a href=&quot;&lt;?php echo $interviewer_url; ?&gt;&quot;&gt;&lt;?php echo $interviewer; ?&gt;&lt;/a&gt;&lt;/p&gt;

    &lt;?php // Don't update. Using the info from PHP variables at the top of the page. ?&gt;
    &lt;ul class=&quot;social-share&quot;&gt;
      &lt;li&gt;
        &lt;a href=&quot;http://www.facebook.com/sharer.php?u=http://womenandtech.com/interview/&lt;?php echo $interviewee_url;?&gt;/&quot; title=&quot;Share on Facebook&quot;&gt;
          &lt;i class=&quot;fa fa-facebook&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
          &lt;span class=&quot;screen-readers&quot;&gt;Post the interview on Facebook&lt;/span&gt;
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a href=&quot;http://twitter.com/share?text=Women and Tech Interviews &lt;?php echo $interviewee_name; ?&gt;&amp;url=http://womenandtech.com/interview/&lt;?php echo $interviewee_url; ?&gt;/&quot; title=&quot;Share on Twitter&quot;&gt;
          &lt;i class=&quot;fa fa-twitter&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
          &lt;span class=&quot;screen-readers&quot;&gt;Tweet the interview&lt;/span&gt;
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li&gt;
        &lt;a href=&quot;mailto:?subject=Women and Tech Interviews &lt;?php echo $interviewee_name; ?&gt;&amp;body=Women and Tech Interviews &lt;?php echo $interviewee_name; ?&gt; http://womenandtech.com/interview/&lt;?php echo $interviewee_url; ?&gt;/&quot; title=&quot;Email the interview&quot;&gt;
          &lt;i class=&quot;fa fa-envelope&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
          &lt;span class=&quot;screen-readers&quot;&gt;Email interview&lt;/span&gt;
        &lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/header&gt;
</code></pre>
      </div>
    </section>
    
    <!-- Example: Interview Header -->
    <header class="border header-interview">
      <div class="wrapper-sm">
        <h2>Biying Miao</h2>
        <p class="intro">Biying Miao is the co-founder of <a href="#">Hot Pop Factory</a>, a 3D Printing and Digital Fabrication Design Studio. The self- proclaimed art-geek has worked on projects exhibited at the Royal Ontario Museum, the <a href="#">Textile Museum of Canada</a> and the Art Gallery of Ontario.</p>
        <p class="author">An interview with <a href="#">Ruby Watson</a></p>
        
        <ul class="social-share">
          <li>
            <a href="//facebook.com/WomenAndTech" title="Facebook @WomenAndTech">
              <i class="fa fa-facebook" aria-hidden="true"></i>
              <span class="screen-readers">Facebook</span>
            </a>
          </li>
          <li>
            <a href="//twitter.com/WomenAndTech" title="Twitter @WomenAndTech">
              <i class="fa fa-twitter" aria-hidden="true"></i>
              <span class="screen-readers">Twitter</span>
            </a>
          </li>
          <li>
            <a href="mailto:contact@womenandtech.com" title="Email contact@womenandtech.com">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span class="screen-readers">Email</span>
            </a>
          </li>
        </ul>
      </div>
    </header>
    
    
    
    <!-- // Footers // -->
    <section class="border module-info">
      <h2 id="footers">Footers</h2>

      <!-- // Interview Footer with Credits -->
      <h3>Interview Footer with Credits</h3>
      
      <p>This code snippet here is for reference only. It is already included in the interview <strong>base-template.php</strong> file and use PHP variables to pull in the appropriate date. If you don't need a specific credit, delete the whole <code>&lt;li&gt;</code>.</p>
      <p>The site credits can be found in the <strong>includes/site-credits.php</strong> file.</p>
<pre><code>&lt;footer class=&quot;border credits&quot;&gt;
  &lt;ul&gt;
    &lt;li&gt;
      Interview by &lt;a href=&quot;&lt;?php echo $interviewer_url; ?&gt;&quot;&gt;&lt;?php echo $interviewer; ?&gt;&lt;/a&gt;
      &lt;?php if ($interviewer2): echo 'and &lt;a href=&quot;'.$interviewer_url2 .'&quot;&gt;'.$interviewer2.'&lt;/a&gt;';endif; ?&gt;
    &lt;/li&gt;
    &lt;li&gt;
      Photography by &lt;a href=&quot;&lt;?php echo $photos_url; ?&gt;&quot;&gt;&lt;?php echo $photos; ?&gt;&lt;/a&gt;
      &lt;?php if ($photos2): echo 'and &lt;a href=&quot;'.$photos_url2 .'&quot;&gt;'.$photos2.'&lt;/a&gt;';endif; ?&gt;
    &lt;/li&gt;
    &lt;li&gt;
      Editing by &lt;a href=&quot;&lt;?php echo $editor_url; ?&gt;&quot;&gt;&lt;?php echo $editor; ?&gt;&lt;/a&gt;
      &lt;?php if ($editor2): echo 'and &lt;a href=&quot;'.$editor_url2 .'&quot;&gt;'.$editor2.'&lt;/a&gt;';endif; ?&gt;
    &lt;/li&gt;
    &lt;li&gt;
      Art Direction by &lt;a href=&quot;&lt;?php echo $ad_url; ?&gt;&quot;&gt;&lt;?php echo $ad; ?&gt;&lt;/a&gt;
      &lt;?php if ($ad2): echo 'and &lt;a href=&quot;'.$ad_url2 .'&quot;&gt;'.$ad2.'&lt;/a&gt;';endif; ?&gt;
    &lt;/li&gt;
    &lt;li&gt;
      Design by &lt;a href=&quot;&lt;?php echo $design_url; ?&gt;&quot;&gt;&lt;?php echo $design; ?&gt;&lt;/a&gt;
      &lt;?php if ($design2): echo 'and &lt;a href=&quot;'.$design_url2 .'&quot;&gt;'.$design2.'&lt;/a&gt;';endif; ?&gt;
    &lt;/li&gt;
    &lt;li&gt;
      Development by &lt;a href=&quot;&lt;?php echo $dev_url; ?&gt;&quot;&gt;&lt;?php echo $dev; ?&gt;&lt;/a&gt;
      &lt;?php if ($dev2): echo 'and &lt;a href=&quot;'.$dev_url2 .'&quot;&gt;'.$dev2.'&lt;/a&gt;';endif; ?&gt;
    &lt;/li&gt;
    &lt;li&gt;
      Transcriptions by &lt;a href=&quot;&lt;?php echo $transcribe_url; ?&gt;&quot;&gt;&lt;?php echo $transcribe; ?&gt;&lt;/a&gt;
      &lt;?php if ($transcribe2): echo 'and &lt;a href=&quot;'.$transcribe_url2 .'&quot;&gt;'.$transcribe2.'&lt;/a&gt;';endif; ?&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
  &lt;?php // Global site credits
  include($path_inc.&quot;site-credits.php&quot;);
  ?&gt;
&lt;/footer&gt;
</code></pre>
    </section>
    
    <!-- Example: Interview footer with credits -->
    <footer class="border credits">
      <ul>
        <li>Interview by <a href="#">Ruby Watson</a></li>
        <li>Photography by <a href="#">Amanda Huang</a></li>
        <li>Editing by <a href="#">Ruby Watson</a> and <a href="#">Ivonne Karamoy</a></li>
        <li>Art Direction by <a href="#">Cassie Kaiser</a></li>
        <li>Design by <a href="#">Cassie Kaiser</a></li>
        <li>Development by <a href="#">Audrey Kuo</a> and <a href="#">Brett Bergmann</a></li>
        <li>Transcriptions by <a href="#">Ruby Watson</a></li>
      </ul>
      <p>Don't miss another interview, <a href="#subscribe">subscribe below</a>.</p>
      <p class="italic">This site uses Monotype's Avenir Next by Adrian Fruteger and Akira Kobayashi, icon by Cathy Moser, Github, Cloudflare, and Windows Azure.</p>
    </footer>
    
    
    <!-- // Secondary footer -->
    <section class="border module-info">
      <h3>Secondary Footer</h3>
      <p>This module can be used for the main content footer. The only thing that is required is the markup shown in the example. Any kind of content can be added such as paragraphs, links or images.</p>
<pre><code>&lt;footer class=&quot;no-border footer-secondary&quot;&gt;
  &lt;div class=wrapper-sm&gt;
    &lt;h2&gt;Heading Example&lt;/h2&gt;
    &lt;p&gt;Paragraph text with a &lt;a href=&quot;#&quot;&gt;link&lt;/a&gt;.&lt;/p&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum corrupti eius labore cumque expedita dicta tenetur ut, accusantium, eaque eum, veritatis quam quae officiis assumenda? Voluptatum placeat eaque.&lt;/p&gt;
  
    &lt;img class=&quot;spacer30&quot; src=&quot;/assets/img/coffee-icon.png&quot; alt=&quot;Coffee&quot; width=&quot;50px&quot;&gt;

    &lt;p&gt;&lt;a href=&quot;#&quot;&gt;Donate&lt;/a&gt; a cup of coffee or tea and get first dibs on new content.&lt;/p&gt;
    &lt;p&gt;We also welcome contributors, volunteers and sponsors.&lt;/p&gt;
    &lt;p&gt;Check out our &lt;a href=&quot;#&quot;&gt;Contribute&lt;/a&gt; page for more information.&lt;/p&gt;
  &lt;/div&gt;
&lt;/footer&gt;
</code></pre>
    </section>
    
    <footer class="no-border footer-secondary">
      <div class=wrapper-sm>
        <h2>Heading Example</h2>
        <p>Paragraph text with a <a href="#">link</a>.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum corrupti eius labore cumque expedita dicta tenetur ut, accusantium, eaque eum, veritatis quam quae officiis assumenda? Voluptatum placeat eaque.</p>
      
        <img class="spacer30" src="/assets/img/coffee-icon.png" alt="Coffee" width="50px">

        <p><a href="https://www.patreon.com/WomenAndTech">Donate</a> a cup of coffee or tea and get first dibs on new content.</p>
        <p>We also welcome contributors, volunteers and sponsors.</p>
        <p>Check out our <a href="http://womenandtech.com/contributor-guidelines/">Contribute</a> page for more information.</p>
      </div>
    </footer>

    
    
    
    <!-- // Image Modules // -->
    <section class="border module-info">
      <h2 id="images">Interview Images</h2>
      
      <p>The static site uses PHP to load partial files. Be sure to include the PHP snippet for image paths, shown in the example code below.</p>
      
      <!-- // Feature Image -->
      <h3>Feature Image</h3>
<pre><code>&#x3C;!-- // Feature image --&#x3E;
&#x3C;div class=&#x22;border img-feature&#x22;&#x3E;
  &#x3C;figure&#x3E;
    &#x3C;img src=&#x22;&#x3C;?php echo $path_img; ?&#x3E;featured-biying-miao.jpg&#x22; alt=&#x22;Biying Miao&#x22;&#x3E;
  &#x3C;/figure&#x3E;
&#x3C;/div&#x3E;
</code></pre>
    </section>
    
    <!-- Example: Featured Image -->
    <div class="border img-feature">
      <figure>
        <img src="assets/img/image-featured.jpg" alt="Biying Miao">
      </figure>
    </div>
    
    
    <!-- // Side by Side Image -->
    <section class="border module-info">
      <h3>Side by Side Images</h3>
<pre><code>&#x3C;!-- // Image - Left & Right --&#x3E;
&lt;div class=&quot;border img-side-by-side&quot;&gt;
  &lt;figure&gt;
    &lt;img src=&quot;&#x3C;?php echo $path_img; ?&#x3E;left-biying-miao.jpg&quot; alt=&quot;Biying Miao&quot;&gt;
  &lt;/figure&gt;
  &lt;figure&gt;
    &lt;img src=&quot;&#x3C;?php echo $path_img; ?&#x3E;right-biying-miao.jpg&quot; alt=&quot;Biying Miao&quot;&gt;
    &lt;figcaption&gt;
      Optional caption goes here. &lt;a href=&quot;#&quot;&gt;Links&lt;/a&gt; can also be included.
    &lt;/figcaption&gt;
  &lt;/figure&gt;
&lt;/div&gt;
</code></pre>
    </section>
    
    <!-- Example: Side by Side Image -->
    <div class="border img-side-by-side">
      <figure>
        <img src="assets/img/image-side-left.jpg" alt="Biying Miao">
      </figure>
      <figure>
        <img src="assets/img/image-side-right.jpg" alt="Biying Miao">
        <figcaption>
          Optional caption goes here. <a href="#">Links</a> can also be included.
        </figcaption>
      </figure>
    </div>
    
    
    <!-- // Single Image - Portrait -->
    <section class="border module-info">
      <h3>Single Image - Portrait</h3>
<pre><code>&#x3C;!-- // Image - Portrait --&#x3E;
&#x3C;div class=&#x22;border img-portrait&#x22;&#x3E;
  &#x3C;figure&#x3E;
    &#x3C;img src=&#x22;&#x3C;?php echo $path_img; ?&#x3E;portrait-biying-miao.jpg&#x22; alt=&#x22;Biying Miao&#x22;&#x3E;
  &#x3C;/figure&#x3E;
&#x3C;/div&#x3E;
</code></pre>
    </section>
    
    <!-- Example: Single Image - Portrait -->
    <div class="border img-portrait">
      <figure>
        <img src="assets/img/image-single-portrait.jpg" alt="Biying Miao">
      </figure>
    </div>
    
    
    <!-- // Single Image with caption -->
    <section class="border module-info">
      <h3>Single Image - Portrait with caption</h3>    
<pre><code>&#x3C;!-- // Image - Portrait --&#x3E;
&#x3C;div class=&#x22;border img-portrait&#x22;&#x3E;
  &#x3C;figure&#x3E;
    &#x3C;img src=&#x22;&#x3C;?php echo $path_img; ?&#x3E;portrait-biying-miao.jpg&#x22; alt=&#x22;Biying Miao&#x22;&#x3E;
    &#x3C;figcaption&#x3E;
      Optional caption goes here.
    &#x3C;/figcaption&#x3E;
  &#x3C;/figure&#x3E;
&#x3C;/div&#x3E;
</code></pre>
    </section>
    
    <!-- Example: Single image - Portrait -->
    <div class="border img-portrait">
      <figure>
        <img src="assets/img/image-single-portrait.jpg" alt="Biying Miao">
        <figcaption>
          Optional caption goes here.
        </figcaption>
      </figure>
    </div>
    
    
    <!-- // Single Image - Landscape -->
    <section class="border module-info">
      <h3>Single Image - Landscape</h3>
<pre><code>&#x3C;!-- Single Image - Landscape --&#x3E;
&#x3C;div class=&#x22;border img-landscape&#x22;&#x3E;
  &#x3C;figure&#x3E;
    &#x3C;img src=&#x22;&#x3C;?php echo $path_img; ?&#x3E;landscape-biying-miao.jpg&#x22; alt=&#x22;Biying Miao&#x22;&#x3E;
  &#x3C;/figure&#x3E;
&#x3C;/div&#x3E;
</code></pre>
    </section>
    
    <!-- Example: Single Image - Landscape -->
    <div class="border img-landscape">
      <figure>
        <img src="assets/img/image-single-landscape.jpg" alt="Biying Miao">
      </figure>
    </div>
    
    <section class="border module-info">
      <h3>Single Image - Landscape with caption</h3>
<pre><code>&#x3C;!-- Single Image - Landscape --&#x3E;
&#x3C;div class=&#x22;border img-landscape&#x22;&#x3E;
  &#x3C;figure&#x3E;
    &#x3C;img src=&#x22;&#x3C;?php echo $path_img; ?&#x3E;landscape-biying-miao.jpg&#x22; alt=&#x22;Biying Miao&#x22;&#x3E;
    &#x3C;figcaption&#x3E;
      Optional caption goes here.
    &#x3C;/figcaption&#x3E;
  &#x3C;/figure&#x3E;
&#x3C;/div&#x3E;
</code></pre>
    </section>
    
    <!-- Example: Single Image - Landscape with caption-->
    <div class="border img-landscape">
      <figure>
        <img src="assets/img/image-single-landscape.jpg" alt="Biying Miao">
        <figcaption>
          Optional caption goes here.
        </figcaption>
      </figure>
    </div>



    
    <!-- // Q & A -->
    <section class="border module-info">
      <h2 id="qa">Q & A</h2>
      <p>Use this snippet for each Q & A block. You can add as many paragraphs as required for the answer portion. Just be sure to keep the paragraphs enclosed within the <code>&lt;dd class=&quot;interview-a&quot;&gt;&lt;/dd&gt;</code> tags.</p>
<pre><code>&#x3C;!-- // Q & A --&#x3E;
&lt;dl class=&quot;border&quot;&gt;
  &#x3C;!-- // Question --&#x3E;
  &lt;dt class=&quot;interview-q&quot;&gt;Where did you grow up and what were you like as a child?&lt;/dt&gt;
  &#x3C;!-- // Answer --&#x3E;
  &lt;dd class=&quot;interview-a&quot;&gt;
    &lt;p&gt;My family moved to Canada from Shanghai when I was in fourth grade, and I grew up in Toronto. I was a very creative child who loved drawing and making things with my hands. Coming from a Chinese family, I was encouraged to play music but gravitated toward freeform arts, so learning an instrument in the classical sense never became something that I honed. I actually wish that I had done that. My 3D printers sound like singing robots, so that&rsquo;s the music I make now. I&rsquo;m sure if I put the time in, I could remix it into a pretty sweet song.&lt;/p&gt;
    &lt;p&gt;I was always a bit of an art and music geek so when it came time to choose a career path I leaned toward architecture because it was a mix of art, science, and technology; all things that are very much a part of who I am.&lt;/p&gt;
  &lt;/dd&gt;
&lt;/dl&gt;</code></pre>
    </section>
    
    <!-- Example: Q & A -->    
    <dl class="border">
      <dt class="interview-q">Where did you grow up and what were you like as a child?</dt>
      <dd class="interview-a">
        <p>My family moved to Canada from Shanghai when I was in fourth grade, and I grew up in Toronto. I was a very creative child who loved drawing and making things with my hands. Coming from a Chinese family, I was encouraged to play music but gravitated toward freeform arts, so learning an instrument in the classical sense never became something that I honed. I actually wish that I had done that. My 3D printers sound like singing robots, so that’s the music I make now. I’m sure if I put the time in, I could remix it into a pretty sweet song.</p>
        <p>I was always a bit of an art and music geek so when it came time to choose a career path I leaned toward architecture because it was a mix of art, science, and technology; all things that are very much a part of who I am.</p>
      </dd>
    </dl>
    <dl class="border">
      <dt class="interview-q">Another question?</dt>
      <dd class="interview-a">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </dd>
    </dl>
    
    
    <!-- // Pull quote -->
    <section class="border module-info">
      <h2 id="quote">Pull Quote</h2>
      <p>Use this code snippet for each pull quote.</p>
<pre><code>&#x3C;!-- // Pull Quote --&#x3E;
&lt;aside class=&quot;border pull-quote&quot;&gt;
  &lt;p&gt;Digital fabrication allows for a physical reality that&rsquo;s much more transient, dynamic, and customized by the individual.&lt;/p&gt;
&lt;/aside&gt;</code></pre>
    </section>
    
    <!-- Example: Pull quote -->
    <aside class="border pull-quote">
      <p>Digital fabrication allows for a physical reality that’s much more transient, dynamic, and customized by the individual.</p>
    </aside>
    

    
    <!-- // Team Related Content -->
    <section class="border module-info">
      <h2 id="team">Team Related Content</h2>
      
      <!-- // Team Signature -->
      <h3>Team Signature</h3>
<pre><code>&lt;div class=&quot;border signature&quot;&gt;
  &lt;p&gt;
    with &lt;i class=&quot;fa fa-heart-o theme-color&quot; aria-hidden=&quot;true&quot; title=&quot;love&quot;&gt;&lt;/i&gt;&lt;span class=&quot;screen-readers&quot;&gt;love&lt;/span&gt;
    from &lt;span class=&quot;team theme-color&quot;&gt;the Women&amp;&amp;Tech team&lt;/span&gt;
  &lt;/p&gt;
&lt;/div&gt;</code></pre>
    </section>
    
    <!-- Example: Team Signature -->
    <div class="border signature">
      <p>
        with <i class="fa fa-heart-o theme-color" aria-hidden="true" title="love"></i><span class="screen-readers">love</span> 
        from <span class="team theme-color">the Women&&Tech team</span>
      </p>
    </div>
    
    
    <!-- // Team Listing -->
    <section class="border module-info">
      <h3>Team Listing</h3>
<pre><code>&#x3C;!-- // Team Listing --&#x3E;
&lt;aside class=&quot;border team-listing&quot;&gt;
  &lt;ul&gt;
    &lt;li&gt;
      &lt;p class=&quot;name&quot;&gt;&lt;a href=&quot;#&quot;&gt;Cassie Kaiser&lt;/a&gt;&lt;/p&gt;
      &lt;p class=&quot;role&quot;&gt;Managing Coordinator&lt;/p&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;p class=&quot;name&quot;&gt;&lt;a href=&quot;#&quot;&gt;Ivonne Karamoy&lt;/a&gt;&lt;/p&gt;
      &lt;p class=&quot;role&quot;&gt;Managing Director&lt;/p&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;p class=&quot;name&quot;&gt;&lt;a href=&quot;#&quot;&gt;Christina Truong&lt;/a&gt;&lt;/p&gt;
      &lt;p class=&quot;role&quot;&gt;Lead Developer&lt;/p&gt;
    &lt;/li&gt;
    &lt;li&gt;
      &lt;p class=&quot;name&quot;&gt;&lt;a href=&quot;#&quot;&gt;Ray Kao&lt;/a&gt;&lt;/p&gt;
      &lt;p class=&quot;role&quot;&gt;Tech Lead&lt;/p&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
  &lt;p class=&quot;thanks&quot;&gt;Special thanks to our founder Cassie McDaniel, past team members and supporters.&lt;/p&gt;
&lt;/aside&gt;</code></pre>
    </section>
    
    <!-- Example: Team -->
    <aside class="border team-listing">
      <ul>
        <li>
          <p class="name"><a href="#">Cassie Kaiser</a></p>
          <p class="role">Managing Coordinator</p>
        </li>
        <li>
          <p class="name"><a href="#">Ivonne Karamoy</a></p>
          <p class="role">Managing Director</p>
        </li>
        <li>
          <p class="name"><a href="#">Christina Truong</a></p>
          <p class="role">Lead Developer</p>
        </li>
        <li>
          <p class="name"><a href="#">Ray Kao</a></p>
          <p class="role">Tech Lead</p>
        </li>
      </ul>
      <p class="thanks">Special thanks to our founder Cassie McDaniel, past team members and supporters.</p>
    </aside>
    
    
    
    <!-- // Misc content styles // -->
    <section class="border module-info">
      <h2 id="misc">Misc</h2>
    
      <!-- // Default page content -->
      <h3>Default headings, paragraphs and links</h3>
      <p>This is used used for non-interview pages such as an About page.</p>
<pre><code>&lt;section class=&quot;border page-content&quot;&gt;
  &lt;div class=&quot;wrapper-sm&quot;&gt;
    &lt;h2&gt;H2 Heading&lt;/h2&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.&lt;/p&gt;

    &lt;h3&gt;H3 Subheading&lt;/h3&gt;
    &lt;p&gt;Cupcake ipsum dolor. Sit amet biscuit drag&eacute;e cotton candy icing croissant toffee bonbon. Tootsie roll &lt;a href=&quot;#&quot;&gt;chocolate cake&lt;/a&gt; lollipop topping cake cake fruitcake. Halvah jelly beans pie muffin. Sweet roll cookie liquorice danish lemon drops pie apple pie donut lemon drops. Gingerbread gummies caramels. Oat cake sweet roll pie ice cream chocolate.&lt;/p&gt;

    &lt;h2&gt;H2 Heading&lt;/h2&gt;
    &lt;p&gt;Pudding chupa chups lollipop. Marshmallow chocolate bar brownie caramels macaroon powder danish. Gingerbread sweet tiramisu sweet roll dessert fruitcake topping cupcake donut.&lt;/p&gt;
  &lt;/div&gt;
&lt;/section&gt;</code></pre>

    </section>
  
    <!-- Example: Default heading, paragraphs and links -->
    <section class="border page-content">
      <div class="wrapper-sm">
        <h2>H2 Heading</h2>
        <p>This is the default styles for a non-interview page. This includes basic styles for h2 and h3 headings, paragraphs and links. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>

        <h3>H3 Subheading</h3>
        <p>Cupcake ipsum dolor. Sit amet biscuit dragée cotton candy icing croissant toffee bonbon. Tootsie roll <a href="#">chocolate cake</a> lollipop topping cake cake fruitcake. Halvah jelly beans pie muffin. Sweet roll cookie liquorice danish lemon drops pie apple pie donut lemon drops. Gingerbread gummies caramels. Oat cake sweet roll pie ice cream chocolate.</p>
        
        <h2>H2 Heading</h2>
        <p>Pudding chupa chups lollipop. Marshmallow chocolate bar brownie caramels macaroon powder danish. Gingerbread sweet tiramisu sweet roll dessert fruitcake topping cupcake donut. Marshmallow sweet tiramisu pudding powder lollipop pie croissant cake. Tiramisu bear claw gummi bears jelly beans marshmallow jujubes bonbon. Icing soufflé bear claw cake dessert pastry marshmallow jujubes.</p>
      </div>
    </section>
  
  
    <!-- // Interview Cards // -->
    <section class="border module-info">
      <h3>Past Interview Cards</h3>
      <p>This code snippet is here for reference only. The only changes that need to made is to the content, not the HTML markup.
      <p>In the <strong>includes/latest-interviews.php</strong> file, update the URL to the interviews, thumbnail image file and interview details to update the three interviews to be featured.</p>
<pre><code>&lt;aside class=&quot;interview-cards wrapper&quot;&gt;
  &lt;h2&gt;Latest Interviews&lt;/h2&gt;
  &lt;a class=&quot;view-all&quot; href=&quot;/archive/&quot;&gt;view all&lt;/a&gt;
  &lt;div class=&quot;grid-wrapper&quot;&gt;
    &lt;article class=&quot;grid-3-1&quot;&gt;
      &lt;a href=&quot;/interview/aashni-shah/&quot; class=&quot;no-underline&quot;&gt;
        &lt;img src=&quot;&lt;?php echo $path_img; ?&gt;thumbnail-aashni-shah.jpg&quot; alt=&quot;Aashni Shah&quot;&gt;
        &lt;h3&gt;Aashni Shah&lt;/h3&gt;
        &lt;p&gt;with Cassie Kaiser&lt;/p&gt;
        &lt;p&gt;Computer Science student, organizer, leader and speaker within the tech community.&lt;/p&gt;
      &lt;/a&gt;
    &lt;/article&gt;
    &lt;article class=&quot;grid-3-1&quot;&gt;
      &lt;a href=&quot;/interview/sara-hicks/&quot; class=&quot;no-underline&quot;&gt;
        &lt;img src=&quot;&lt;?php echo $path_img; ?&gt;thumbnail-sara-hicks.jpg&quot; alt=&quot;Sara Hicks&quot;&gt;
        &lt;h3&gt;Sara Hicks&lt;/h3&gt;
        &lt;p&gt;with Sophie He&lt;/p&gt;
        &lt;p&gt;Co-founder and CEO of Reaction Commerce, an open-source ecommerce platform.
          &lt;/p&gt;
      &lt;/a&gt;
    &lt;/article&gt;
    &lt;article class=&quot;grid-3-1&quot;&gt;
      &lt;a href=&quot;/interview/mitchell-baker/&quot; class=&quot;no-underline&quot;&gt;
        &lt;img src=&quot;&lt;?php echo $path_img; ?&gt;thumbnail-mitchell-baker.jpg&quot; alt=&quot;Mitchell Baker&quot;&gt;
        &lt;h3&gt;Mitchell Baker&lt;/h3&gt;
        &lt;p&gt;with Cassie McDaniel&lt;/p&gt;
        &lt;p&gt;Founder of the non-profit tech company Mozilla, creator of Firefox and champion of the open web.&lt;/p&gt;
      &lt;/a&gt;
    &lt;/article&gt;
  &lt;/div&gt;
&lt;/aside&gt;</code></pre>
    </section>
    
    <!-- Example: Past interview cards -->
    <aside class="interview-cards wrapper">
      <h2>Latest Interviews</h2>
      <a class="view-all" href="/archive/">view all</a>
      <div class="grid-wrapper">
        <article class="grid-3-1">
          <a href="/interview/sara-hicks/" class="no-underline">
            <img src="assets/img/thumbnail-sara-hicks.png" alt="Sara Hicks">
            <h3>Sara Hicks</h3>
            <p>with Sophie He</p>
            <p>Cofounder and CEO of Reaction Commerce, an open-source ecommerce platform.</p>
          </a>
        </article>
        <article class="grid-3-1">
          <a href="/interview/mitchell-baker/" class="no-underline">
            <img src="assets/img/thumbnail-mitchell-baker.png" alt="Mitchell Baker">
            <h3>Mitchell Baker</h3>
            <p>with Cassie McDaniel</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </a>
        </article>
        <article class="grid-3-1">
          <a href="/interview/sandi-lin/" class="no-underline">
            <img src="assets/img/thumbnail-sandi-lin.png" alt="Sandi Lin">
            <h3>Sandi Lin</h3>
            <p>with Sarah Sutherland</p>
            <p>Co-founder and CEO of Seattle-based startup Skilljar, an online course delivery platform.</p>
          </a>
        </article>
      </div>
    </aside>
    
    
    
    
    <!-- <h2>Contact Us</h2>
    <p>Follow us on <a class="white-links" href="http://twitter.com/WomenAndTech">Twitter</a>, <a href="http://www.facebook.com/womenandtech/">Facebook</a> and <a href="http://www.instagram.com/WomenAndTech/">Instagram</a>.</p>
    <p>Don't hesitate to <a href="mailto:contact@womenandtech.com">email us</a>.</p>

    <h2 class="spacer30">Want to help?</h2>

    <p><a class="no-underline" href="https://www.patreon.com/WomenAndTech"><img class="spacer30-bottom" src="/assets/img/coffee-icon.png" alt="Coffee" width="50px"></a></p>

    <p><a href="https://www.patreon.com/WomenAndTech">Donate</a> a cup of coffee or tea and get first dibs on new content.</p>
    <p>We also welcome contributors, volunteers and sponsors.</p>
    <p>Check out our <a href="http://womenandtech.com/contributor-guidelines/">Contribute</a> page for more information.</p> -->
  </main>
  
  
  
  <!-- Global Primary Footer -->
  <footer class="footer-primary">
    <section>
      <p>&copy; 2012 - <span data-year></span> Women&&Tech. <span class="nowrap">Made in Toronto. All Rights Reserved.</span></p>
    </section>
    <section id="mc_embed_signup">
      <form action="//womenandtech.us5.list-manage.com/subscribe/post?u=1370c4a70b43a1285e806a56d&amp;id=123c00728e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <label for="mce-EMAIL">Enter your email address to get updates:</label>
        <input id="subscribe" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">&nbsp;
        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
        <div id="mce-responses">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1370c4a70b43a1285e806a56d_123c00728e" tabindex="-1" value=""></div>
      </form>
    </section>
    <section>
      <p>Connect with us: </p>
      <ul class="footer-links">
        <li>
          <a href="//facebook.com/womenandtech" title="Facebook">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <span class="screen-readers">Facebook</span>
          </a>
        </li>
        <li>
          <a href="//twitter.com/WomenAndTech" title="Twitter">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <span class="screen-readers">Twitter</span>
          </a>
        </li>
        <li>
          <a href="//instagram.com/WomenAndTech" title="Instagram">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <span class="screen-readers">Instagram</span>
          </a>
        </li>
        <li>
          <a href="mailto:contact@womenandtech.com" title="Email">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span class="screen-readers">Email</span>
          </a>
        </li>
      </ul>
    </section>
  </footer>




  <!-- for testing only -->
  <p style="position:fixed;bottom:0px;left:10px;color:black;background:white;padding:5px;"><span id="width"></span> x <span id="height"></span> <span id="screen"></span></p>

  <!-- Global files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script> 
  <script>!window.jQuery && document.write('<script src="assets/js/jquery-2.2.3.min.js"><\/script>')</script>
  <script src="assets/js/jquery.viewportchecker.min.js"></script>
  <script src="assets/js/global-min.js"></script>
  
  <!-- Style guide only -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/highlight.min.js"></script>
  <script src="assets/js/smooth-scroll.min.js"></script>
  <script>
    // only used in style guide
    smoothScroll.init({
      selectorHeader: '[data-scroll-header]',
      offset: 120
    });
  </script>
  <script src="assets/js/style-guide-min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>
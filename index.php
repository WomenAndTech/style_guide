<?php include ("includes/header.php"); ?>

<body class="style-guide theme-coral">
  <header class="header-primary">
    <a href="/" class="logo">
      <img src="/assets/img/W&&T-full-logo-outline.svg" alt="Women && Tech logo">
      <h1 class="screen-readers">Women && Tech</h1>
    </a>
    <nav class="nav-primary" data-scroll-header>
      <a data-scroll href="#templates">Templates & Themes</a>
      <a data-scroll href="#headings">Headers & Footers</a>
      <a data-scroll href="#images">Images & Video</a>
      <a data-scroll href="#content">Content</a>
      <a data-scroll href="#helpers">Helpers</a>
    </nav>
  </header>
  
  <main role="main">
    <header class="no-border header-secondary">
      <h2>Style Guide & Component Library</h2>
      <p>When we redesigned the W&&T website, we refreshed the design but also recreated the website architecture to make it easy to maintain and add new content. The goal was to keep the codebase as straightforward as possible, so all team members could add content without specialized or extensive development skills. We decided to follow a component based approach to be able to mix and match page elements to create different yet consistent page layouts.</p>
    </header>
    
    <!-- TEMPLATES & THEMES -->
    <section class="module grid-wrapper">
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
        <p>Select a button to view the theme color options.</p>
        <button class="coral" data-theme="coral">.theme-coral</button>
        <button class="purple" data-theme="purple">.theme-purple</button>
        <button class="yellow" data-theme="yellow">.theme-yellow</button>
        <button class="green" data-theme="green">.theme-green</button>
        <button class="blue" data-theme="blue">.theme-blue</button>
        
        <p>Theme changes include:</p>
        <ul>
          <li>page background</li>
          <li>link colors, :hover and :focus</li>
        </ul>
        <p>Theme color classes are added to the <code>&lt;body&gt;</code> tag using one of five theme color codes.</p>
        <pre><code class="xml">&lt;body class="theme-coral"&gt;</code></pre> 
        <p>In the static site, themes are added using PHP variables. Refer to the static site documentation for more info.</p>  
      </div>
    </section>

    <!-- HEADERS & FOOTERS -->
    <section class="module">
      <h2 id="headings">Headers & Footers</h2>
      <div class="grid-wrapper">
        <!-- Secondary header -->
        <div class="grid-narrow">
          <h3>Secondary Header</h3>
          <p>The secondary header is used for pages that require introductory information to be presented before the main content.</p>
        </div>
        <div class="grid-wide">
          <button class="btn-copy" data-clipboard-target="#h-secondary" data-copy>copy to clipboard</button>
<pre><code class="xml" id="h-secondary">&lt;header class=&quot;no-border header-secondary&quot;&gt;
  &lt;h2&gt;We&rsquo;re not endorsing the obvious. We&rsquo;re commending the awesome.&lt;/h2&gt;
  &lt;p&gt;Our industry is filled with &lt;a href="#"&gt;smart, interesting women&lt;/a&gt; including developers, designers, entrepreneurs, and tech leaders. These women are a big deal, and we think you should know about them. We highlight them not for their gender, but because they are awesome by any kind of measure.&lt;/p&gt;
&lt;/header&gt;
</code></pre>
        </div>
      </div>
    </section>

    <!-- Example code: secondary header -->
    <?php include ("includes/modules/header-secondary.php"); ?>
    
    <!-- Interview header -->
    <section class="module grid-wrapper">
      <div class="grid-narrow">
        <h3>Interview Header</h3>
        <p>This header is used at the beginning of all interviews.</p>
        <p>PHP variables are used to automatically add the author name and social media information. Refer to the <strong>base-template.php</strong> file in the static site repo for more information.</p>
      </div>
      <div class="grid-wide">
<pre><code>&lt;header class=&quot;border header-interview&quot;&gt;
  &lt;div class=&quot;wrapper-sm&quot;&gt;
    &lt;h2&gt;Interviewee Name&lt;/h2&gt;
    &lt;p class=&quot;intro&quot;&gt;Intro paragraph.&lt;/p&gt;

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
    <!-- Example code: interview header -->
    <?php include ("includes/modules/header-interview.php"); ?>
    
    
    <!-- Secondary footer -->
    <section class="module grid-wrapper">
      <div class="grid-narrow">
        <h3>Secondary Footer</h3>
        <p>This module can be used for main content footers. Any kind of content can be added such as paragraphs, links or images.</p>
        <p>Refer to the <a href="#helpers">Helpers</a> section for additional content styles.</p>
      </div>
      <div class="grid-wide">
<pre><code>&lt;footer class=&quot;no-border footer-secondary&quot;&gt;
  &lt;div class="wrapper-sm"&gt;
    &#x3C;!-- ADD CONTENT HERE --&#x3E;
    &lt;h2&gt;Heading Example&lt;/h2&gt;
    &lt;p&gt;Paragraph text with a &lt;a href=&quot;#&quot;&gt;link&lt;/a&gt;.&lt;/p&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum corrupti eius labore cumque expedita dicta tenetur ut, accusantium, eaque eum, veritatis quam quae officiis assumenda? Voluptatum placeat eaque.&lt;/p&gt;
  &lt;/div&gt;
&lt;/footer&gt;
</code></pre>        
      </div>
    </section>
    <!-- Example code: secondary footer -->
    <?php include ("includes/modules/footer-secondary.php"); ?>
    

    <!-- Interview footer with credits -->
    <section class="module grid-wrapper">
      <div class="grid-narrow">
        <h3>Interview Footer with Credits</h3>
        <p>This code snippet is for reference only and is already included in the <strong>interview/base-template.php</strong> file in the <a href="https://github.com/WomenAndTech/static-site">static-site repo</a>. PHP variables are used to customize the credits.</p>
        <p>If you don't need a specific credit, delete the whole list item (<code>&lt;li&gt;</code>).</p>
      </div>
      <div class="grid-wide">
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
      </div>
    </section>
    <!-- Example code: interview footer with credits -->
    <?php include ("includes/modules/footer-credits.php"); ?>
    
    
    <!-- IMAGE & VIDEO MODULES -->
    <section class="module">
      <h2 id="images">Images and Videos</h2>
      <p>The static site uses PHP to customize the templates. Be sure to include the PHP snippet for image paths, shown in the example code below. View the documentation in the <a href="https://github.com/WomenAndTech/static-site">website repo</a> for more information about directory structures and file naming.</p>
      
      <!-- Featured image -->
      <div class="grid-wrapper">
        <div class="grid-narrow">
          <h3>Feature Image</h3>
          <p>This image is used at the beginning of each interview.</p>
        </div>
        <div class="grid-wide">
<pre><code>&#x3C;div class=&#x22;border img-feature&#x22;&#x3E;
  &#x3C;figure&#x3E;
    &#x3C;img src=&#x22;&#x3C;?php echo $path_img; ?&#x3E;featured-biying-miao.jpg&#x22; alt=&#x22;Biying Miao&#x22;&#x3E;
  &#x3C;/figure&#x3E;
&#x3C;/div&#x3E;
</code></pre>
        </div>
      </div>
    </section>
    <!-- Example code: featured image -->
    <?php include ("includes/modules/image-featured.php"); ?>
    
    <!-- Side by side images -->
    <section class="module grid-wrapper">
      <div class="grid-narrow">
        <h3>Side by Side Images</h3>
        <p>This image style can be used throughout the interview to highlight the content and to visually break up the text.</p>
        <p>Delete the &lt;figcaption&gt;&lt;/figcaption&gt; if you don't need to include a caption.</p>
      </div>
      <div class="grid-wide">
<pre><code>&lt;div class=&quot;border img-side-by-side&quot;&gt;
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
      </div>
    </section>
    <!-- Example code: side by side image -->
    <?php include ("includes/modules/image-sidebyside.php"); ?>
    
    <!-- Single image options -->
    <section class="module grid-wrapper">
      <div class="grid-narrow">
        <h3>Single Image: Portrait or Landscape</h3>
        <p>If using a single image, you have the option to use a portait image or landscape image.</p>
        <p>Delete the &lt;figcaption&gt;&lt;/figcaption&gt; if you don't need to include a caption.</p>
      </div>
      <div class="grid-wide">
<pre><code>&#x3C;!-- // Single Image - Portrait --&#x3E;
&#x3C;div class=&#x22;border img-portrait&#x22;&#x3E;
  &#x3C;figure&#x3E;
    &#x3C;img src=&#x22;&#x3C;?php echo $path_img; ?&#x3E;portrait-biying-miao.jpg&#x22; alt=&#x22;Biying Miao&#x22;&#x3E;
    &#x3C;figcaption&#x3E;
      Optional caption goes here.
    &#x3C;/figcaption&#x3E;
  &#x3C;/figure&#x3E;
&#x3C;/div&#x3E;
</code></pre>
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
      </div>
    </section>
    <!-- Example code: single image - portrait -->
    <?php include ("includes/modules/image-portrait.php"); ?>    
    <!-- Example: Single Image - Landscape-->
    <?php include ("includes/modules/image-landscape.php"); ?>

    <section class="module grid-wrapper">
      <div class="grid-narrow">
        <h3 id="images">Video [in progress]</h3>
        <p>To include a video, copy the video embed code from the platform (YouTube, Vimeo) and include it within the markup shown in the code snippet.</p>
      </div>
      <div class="grid-wide">
        
      </div>
    </section>
    
    
    <!-- TEXT BASED CONTENT MODULES -->
    <section class="module">
      <h2 id="content">Content Modules</h2>
      <p>Use the following content modules for your text-based content.</p>
      <div class="grid-wrapper">
        <div class="grid-narrow">
          <h3>Default headings, paragraphs and links</h3>
          <p>Example of default text styles. See below for more content modules.</p>
          <p>This is used mainly for non-interview pages such as an About page.</p>
        </div>
        <div class="grid-wide">
<pre><code>&lt;section class=&quot;border page-content&quot;&gt;
  &lt;div class=&quot;wrapper-sm&quot;&gt;
    &#x3C;!-- // ADD CONTENT HERE --&#x3E;
    &lt;h2&gt;h2 Heading&lt;/h2&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.&lt;/p&gt;

    &lt;h3&gt;h3 Subheading&lt;/h3&gt;
    &lt;p&gt;Cupcake ipsum dolor. Sit amet biscuit drag&eacute;e cotton candy icing croissant toffee bonbon. Tootsie roll &lt;a href=&quot;#&quot;&gt;chocolate cake&lt;/a&gt; lollipop topping cake cake fruitcake. Halvah jelly beans pie muffin. Sweet roll cookie liquorice danish lemon drops pie apple pie donut lemon drops. Gingerbread gummies caramels. Oat cake sweet roll pie ice cream chocolate.&lt;/p&gt;
  &lt;/div&gt;
&lt;/section&gt;</code></pre>
        </div> 
      </div>
    </section>
    <!-- Example: Default heading, paragraphs and links -->
    <?php include ("includes/modules/content-default.php"); ?>
    
    <!-- // Q & A -->
    <section class="module grid-wrapper">
      <div class="grid-narrow">
        <h3>Q & A</h3>
        <p>Use this snippet for each Q & A block. You can add as many paragraphs as required for the answer portion. Just be sure to keep the paragraphs enclosed within the <code>&lt;dd class=&quot;interview-a&quot;&gt;&lt;/dd&gt;</code> tags.</p>
      </div>
      <div class="grid-wide">
<pre><code>&lt;dl class=&quot;border&quot;&gt;
  &lt;dt class=&quot;interview-q&quot;&gt;Question?&lt;/dt&gt;
  &lt;dd class=&quot;interview-a&quot;&gt;
    &lt;p&gt;Answer&lt;/p&gt;
    &lt;p&gt;Break up long answers with additional paragraphs.&lt;/p&gt;
  &lt;/dd&gt;
&lt;/dl&gt;

&lt;dl class=&quot;border&quot;&gt;
  &lt;dt class=&quot;interview-q&quot;&gt;Another question?&lt;/dt&gt;
  &lt;dd class=&quot;interview-a&quot;&gt;
    &lt;p&gt;Answer&lt;/p&gt;
  &lt;/dd&gt;
&lt;/dl&gt;</code></pre>
      </div> 
    </section>
    <!-- Example code: Q & A -->    
    <?php include ("includes/modules/qa.php"); ?>


    <!-- // Pull quote -->
    <section class="module grid-wrapper">
      <div class="grid-narrow">
        <h3>Pull Quote</h3>
        <p>Highlight key points in the interview with pull quotes. Stick to one or two short sentences.</p>
      </div>
      <div class="grid-wide">
<pre><code>&lt;aside class=&quot;border pull-quote&quot;&gt;
  &lt;p&gt;Digital fabrication allows for a physical reality that&rsquo;s much more transient, dynamic, and customized by the individual.&lt;/p&gt;
&lt;/aside&gt;</code></pre>
      </div>
    </section>
    <!-- Example: Pull quote -->
    <?php include ("includes/modules/pull-quote.php"); ?>
    

    <!-- // Team Related Content -->
    <section class="module grid-wrapper">
      <div class="grid-narrow">
        <!-- // Team Signature -->
        <h3>Team Signature</h3>
      </div>
      <div class="grid-wide">
<pre><code>&lt;div class=&quot;border signature&quot;&gt;
&lt;p&gt;
  with &lt;i class=&quot;fa fa-heart-o theme-color&quot; aria-hidden=&quot;true&quot; title=&quot;love&quot;&gt;&lt;/i&gt;&lt;span class=&quot;screen-readers&quot;&gt;love&lt;/span&gt;
  from &lt;span class=&quot;team theme-color&quot;&gt;the Women&amp;&amp;Tech team&lt;/span&gt;
&lt;/p&gt;
&lt;/div&gt;</code></pre>
      </div>
    </section>
    <!-- Example: Team Signature -->
    <?php include ("includes/modules/team-signature.php"); ?>
    
    
    <!-- // Team Listing -->
    <section class="module grid-wrapper">
      <div class="grid-narrow">
        <h3>Team Listing</h3>
      </div>
      <div class="grid-wide">
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
      </div>
    </section>
    <!-- Example code: team listing -->
    <?php include ("includes/modules/team-listing.php"); ?>
    
    
    <!-- // Interview Cards -->
    <section class="module grid-wrapper">
      <div class="grid-narrow">
        <h3>Past Interview Cards</h3>
        <p>This code snippet is for reference and is already included in the <strong>includes/latest-interviews.php</strong> file. To update, revise the URL to the interviews, thumbnail image file and interview details. Only the latest three interviews are featured at a time.</p>
      </div>
      <div class="grid-wide">
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
      </div>
    </section>
    <!-- Example: Past interview cards -->
    <?php include ("includes/modules/interview-cards.php"); ?>
    
    
    <!-- HELPER CLASSES -->
    <section class="module">
      <h2 id="helpers">Helper Classes [in progress]</h2>
      <p>To make customizations and isolated style addition outside of the default and module styles, see below references.</p>
    </section>
    
    <!-- <img class="spacer30" src="/assets/img/coffee-icon.png" alt="Coffee" width="50px">

    <p><a href="https://www.patreon.com/WomenAndTech">Donate</a> a cup of coffee or tea and get first dibs on new content.</p>
    <p>We also welcome contributors, volunteers and sponsors.</p>
    <p>Check out our <a href="http://womenandtech.com/contributor-guidelines/">Contribute</a> page for more information.</p> -->
    
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

<?php include ("includes/footer.php"); ?>
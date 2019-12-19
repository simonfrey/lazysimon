<html>

<head>
    <title>lazy-simon.js - Minimal effort 350 byte JavaScript library to lazy load all &lt;img&gt; on your website</title>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <link rel="shortcut icon" type="image/png" href="img/logo.png" />

  <meta name="description" content="Lazy loading the images on your websites is a good idea in 99% of the cases. As all the other lazy load libraries where way to heavy for use case I build lazy-simon.js.As it is only 350 byte in total size, I now can include it on every website I develop without having to worry about performance impacts. Only upsides here 🤩" />
  <meta name="robots" content="index, follow" />
  <meta name="referrer" content="always" />

  <!-- Social & Open Graph -->
  <meta property="og:title" content="lazy-simon.js - Minimal effort 350 byte JavaScript library to lazy load all &lt;img&gt; on your website" />
  <meta property="og:description" content="Lazy loading the images on your websites is a good idea in 99% of the cases. As all the other lazy load libraries where way to heavy for use case I build lazy-simon.js.As it is only 350 byte in total size, I now can include it on every website I develop without having to worry about performance impacts. Only upsides here 🤩" />
  <meta property="og:image" content="https://lazy.simon-frey.eu/img/social.jpg"> <!-- include your hosted image full URL -->
  <meta property="og:url" content="https://lazy.simon-frey.eu/" />
  <meta name="twitter:title" content="lazy-simon.js - Minimal effort 350 byte JavaScript library to lazy load all &lt;img&gt; on your website">
  <meta name="twitter:description" content="Lazy loading the images on your websites is a good idea in 99% of the cases. As all the other lazy load libraries where way to heavy for use case I build lazy-simon.js.As it is only 350 byte in total size, I now can include it on every website I develop without having to worry about performance impacts. Only upsides here 🤩" />
  <meta name="twitter:image" content="https://lazy.simon-frey.eu/img/social.jpg" />
  <!-- include your hosted image full URL -->
  <meta name="twitter:card" content="summary_large_image" />


  <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>lazy-simon.js</h1>
    <p>Minimal effort 350 byte JavaScript library to lazy load all &lt;img&gt; on your website</p>
   <p>Lazy loading the images on your websites is a good idea in 99% of the cases. As all the other lazy load libraries where way to heavy for use case I build lazy-simon.js.</p>
   <p>As it is <b>only 350 byte in total size</b>, I now can include it on every website I develop without having to worry about performance impacts. Only upsides here 🤩</p>
   <p>The script uses a <i>Intersection Observer</i> for the getting the elements that are currently viewed. To check what browser all support this feature checkout <a href="https://caniuse.com/#search=intersectionobserver">https://caniuse.com/#search=intersectionobserver</a></p>
    <p>You can find the code in the <a href="https://github.com/simonfrey/lazysimon">Github repo</a> and the script is licensed <a href="https://github.com/simonfrey/lazysimon/blob/master/LICENSE">MIT</a></p>

 <h2>Usage</h2>
 <h3>Hosted</h3>
   <p>Just include the lazy-simon.js script source at the bottom of your body.</p>
    <pre><span style='color:#d2cd86; '>&lt;</span>script src<span style='color:#d2cd86; '>=</span><span style='color:#02d045; '>"</span><span style='color:#00c4c4; '>https://lazy.simon-frey.eu/js/lazy_simon.min.js</span><span style='color:#02d045; '>"</span><span style='color:#d2cd86; '>></span><span style='color:#d2cd86; '>&lt;</span><span style='color:#d2cd86; '>/</span>script<span style='color:#d2cd86; '>></span></pre>
   <h3>Inline</h3>
   <p>Add the lazy-simon.js inline in your html at the bottom of your body</p>

<pre ><span style="color:#9999a9; ">/*</span>
<span style="color:#9999a9; ">* lazy-simon.js</span>
<span style="color:#9999a9; ">*</span>
<span style="color:#9999a9; ">*  Minimal effort 350 byte JavaScript library to lazy load all &lt;img&gt; on your website</span>
<span style="color:#9999a9; ">* </span>
<span style="color:#9999a9; ">* License: MIT (</span><span style="color:#6070ec; ">https://github.com/simonfrey/lazysimon/blob/master/LICENSE</span><span style="color:#9999a9; ">)</span>
<span style="color:#9999a9; ">*/</span>
o <span style="color:#d2cd86; ">=</span> <span style="color:#e66170; font-weight:bold; ">new</span> IntersectionObserver<span style="color:#d2cd86; ">(</span><span style="color:#d2cd86; ">(</span>a<span style="color:#d2cd86; ">,</span> s<span style="color:#d2cd86; ">)</span> <span style="color:#d2cd86; ">=</span><span style="color:#d2cd86; ">&gt;</span> <span style="color:#b060b0; ">{</span>
  a<span style="color:#d2cd86; ">.</span><span style="color:#e66170; font-weight:bold; ">forEach</span><span style="color:#d2cd86; ">(</span>e <span style="color:#d2cd86; ">=</span><span style="color:#d2cd86; ">&gt;</span> <span style="color:#b060b0; ">{</span>
    <span style="color:#e66170; font-weight:bold; ">if</span> <span style="color:#d2cd86; ">(</span>e<span style="color:#d2cd86; ">.</span>isIntersecting<span style="color:#d2cd86; ">)</span> <span style="color:#b060b0; ">{</span>
      e<span style="color:#d2cd86; ">.</span>target<span style="color:#d2cd86; ">.</span>src <span style="color:#d2cd86; ">=</span> e<span style="color:#d2cd86; ">.</span>target<span style="color:#d2cd86; ">.</span>dataset<span style="color:#d2cd86; ">.</span>l<span style="color:#b060b0; ">;</span>
      s<span style="color:#d2cd86; ">.</span>unobserve<span style="color:#d2cd86; ">(</span>e<span style="color:#d2cd86; ">.</span>target<span style="color:#d2cd86; ">)</span><span style="color:#b060b0; ">;</span>
    <span style="color:#b060b0; ">}</span>
  <span style="color:#b060b0; ">}</span><span style="color:#d2cd86; ">)</span><span style="color:#b060b0; ">;</span>
<span style="color:#b060b0; ">}</span><span style="color:#d2cd86; ">)</span><span style="color:#b060b0; ">;</span>
d <span style="color:#d2cd86; ">=</span> document<span style="color:#d2cd86; ">.</span>querySelectorAll<span style="color:#d2cd86; ">(</span><span style="color:#02d045; ">"</span><span style="color:#00c4c4; ">img</span><span style="color:#02d045; ">"</span><span style="color:#d2cd86; ">)</span><span style="color:#b060b0; ">;</span>
<span style="color:#e66170; font-weight:bold; ">for</span> <span style="color:#d2cd86; ">(</span>i <span style="color:#d2cd86; ">=</span> d<span style="color:#d2cd86; ">.</span><span style="color:#e66170; font-weight:bold; ">length</span> <span style="color:#d2cd86; ">-</span> <span style="color:#008c00; ">1</span><span style="color:#b060b0; ">;</span> i <span style="color:#d2cd86; ">&gt;=</span> <span style="color:#008c00; ">0</span><span style="color:#b060b0; ">;</span> i<span style="color:#d2cd86; ">--</span><span style="color:#d2cd86; ">)</span> <span style="color:#b060b0; ">{</span>
  e <span style="color:#d2cd86; ">=</span> d<span style="color:#d2cd86; ">[</span>i<span style="color:#d2cd86; ">]</span><span style="color:#b060b0; ">;</span>
  e<span style="color:#d2cd86; ">.</span>dataset<span style="color:#d2cd86; ">.</span>l <span style="color:#d2cd86; ">=</span> e<span style="color:#d2cd86; ">.</span>src<span style="color:#b060b0; ">;</span>
  e<span style="color:#d2cd86; ">.</span>src <span style="color:#d2cd86; ">=</span>
    <span style="color:#02d045; ">"</span><span style="color:#00c4c4; ">data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN89xQAAscB1RY/sEQAAAAASUVORK5CYII=</span><span style="color:#02d045; ">"</span><span style="color:#b060b0; ">;</span>
  o<span style="color:#d2cd86; ">.</span>observe<span style="color:#d2cd86; ">(</span>e<span style="color:#d2cd86; ">)</span><span style="color:#b060b0; ">;</span>
<span style="color:#b060b0; ">}</span>
</pre>

   
<h2>Test area</h2>
<p>Scroll down to see lazy-simon.js in action.</p>

<div id="testArea">
<img src="img/ex/1.jpg?d=1">
<img src="img/ex/2.jpg?d=1">
<img src="img/ex/3.jpg?d=1">
<img src="img/ex/4.jpg?d=1">
<img src="img/ex/5.jpg?d=1">
<img src="img/ex/6.jpg?d=1">
<img src="img/ex/7.jpg?d=1">
<img src="img/ex/8.jpg?d=1">
<img src="img/ex/9.jpg?d=1">
<img src="img/ex/10.jpg?d=1">
<img src="img/ex/11.jpg?d=1">
<img src="img/ex/12.jpg?d=1">
<img src="img/ex/13.jpg?d=1">
<img src="img/ex/14.jpg?d=1">
<img src="img/ex/15.jpg?d=1">
<img src="img/ex/16.jpg?d=1">
<img src="img/ex/17.jpg?d=1">
<img src="img/ex/18.jpg?d=1">
<img src="img/ex/19.jpg?d=1">
<img src="img/ex/20.jpg?d=1">

<img src="img/ex/1.jpg?d=2">
<img src="img/ex/2.jpg?d=2">
<img src="img/ex/3.jpg?d=2">
<img src="img/ex/4.jpg?d=2">
<img src="img/ex/5.jpg?d=2">
<img src="img/ex/6.jpg?d=2">
<img src="img/ex/7.jpg?d=2">
<img src="img/ex/8.jpg?d=2">
<img src="img/ex/9.jpg?d=2">
<img src="img/ex/10.jpg?d=2">
<img src="img/ex/11.jpg?d=2">
<img src="img/ex/12.jpg?d=2">
<img src="img/ex/13.jpg?d=2">
<img src="img/ex/14.jpg?d=2">
<img src="img/ex/15.jpg?d=2">
<img src="img/ex/16.jpg?d=2">
<img src="img/ex/17.jpg?d=2">
<img src="img/ex/18.jpg?d=2">
<img src="img/ex/19.jpg?d=2">
<img src="img/ex/20.jpg?d=2">

<img src="img/ex/1.jpg?d=3">
<img src="img/ex/2.jpg?d=3">
<img src="img/ex/3.jpg?d=3">
<img src="img/ex/4.jpg?d=3">
<img src="img/ex/5.jpg?d=3">
<img src="img/ex/6.jpg?d=3">
<img src="img/ex/7.jpg?d=3">
<img src="img/ex/8.jpg?d=3">
<img src="img/ex/9.jpg?d=3">
<img src="img/ex/10.jpg?d=3">
<img src="img/ex/11.jpg?d=3">
<img src="img/ex/12.jpg?d=3">
<img src="img/ex/13.jpg?d=3">
<img src="img/ex/14.jpg?d=3">
<img src="img/ex/15.jpg?d=3">
<img src="img/ex/16.jpg?d=3">
<img src="img/ex/17.jpg?d=3">
<img src="img/ex/18.jpg?d=3">
<img src="img/ex/19.jpg?d=3">
<img src="img/ex/20.jpg?d=3">

<img src="img/ex/1.jpg?d=4">
<img src="img/ex/2.jpg?d=4">
<img src="img/ex/3.jpg?d=4">
<img src="img/ex/4.jpg?d=4">
<img src="img/ex/5.jpg?d=4">
<img src="img/ex/6.jpg?d=4">
<img src="img/ex/7.jpg?d=4">
<img src="img/ex/8.jpg?d=4">
<img src="img/ex/9.jpg?d=4">
<img src="img/ex/10.jpg?d=4">
<img src="img/ex/11.jpg?d=4">
<img src="img/ex/12.jpg?d=4">
<img src="img/ex/13.jpg?d=4">
<img src="img/ex/14.jpg?d=4">
<img src="img/ex/15.jpg?d=4">
<img src="img/ex/16.jpg?d=4">
<img src="img/ex/17.jpg?d=4">
<img src="img/ex/18.jpg?d=4">
<img src="img/ex/19.jpg?d=4">
<img src="img/ex/20.jpg?d=4">
</div>
  
</body>

<?php
if(isset($_GET["beta"])){
?>
    <script src="js/lazy_simon_beta.js"></script>
<?php
}else{
?>
    <script src="js/lazy_simon.js"></script>
<?php
}
?>
</html>
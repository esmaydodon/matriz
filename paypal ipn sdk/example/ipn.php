  


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP-PayPal-IPN/example/ipn.php at master · Quixotix/PHP-PayPal-IPN · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144.png" />
    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="L+O+m6V2Xr52ZcHk15LfX6ST95wsNWtokRBjj3RQzvU=" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/assets/github-4a9b57c354a4014cf6abc11236671bcb30d81a4e.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://a248.e.akamai.net/assets.github.com/assets/github2-678b50bf7cba9691eead17e12530134d01b45f04.css" media="screen" rel="stylesheet" type="text/css" />
    


    <script src="https://a248.e.akamai.net/assets.github.com/assets/frameworks-c9ece3c1d530c8b5201cab80ec5efc53bf244a05.js" type="text/javascript"></script>
    <script src="https://a248.e.akamai.net/assets.github.com/assets/github-dc5b8095529da6d9db0d3f7251dfe76535c35735.js" type="text/javascript"></script>
    

      <link rel='permalink' href='/Quixotix/PHP-PayPal-IPN/blob/4914db03de079a2c6a8f3602ef7a6fef24e1c822/example/ipn.php'>
    <meta property="og:title" content="PHP-PayPal-IPN"/>
    <meta property="og:type" content="githubog:gitrepository"/>
    <meta property="og:url" content="https://github.com/Quixotix/PHP-PayPal-IPN"/>
    <meta property="og:image" content="https://a248.e.akamai.net/assets.github.com/images/gravatars/gravatar-user-420.png?1345673562"/>
    <meta property="og:site_name" content="GitHub"/>
    <meta property="og:description" content="PHP-PayPal-IPN - PHP 5 class to listen for and handle Instant Payment Notifications (IPN) from PayPal."/>

    <meta name="description" content="PHP-PayPal-IPN - PHP 5 class to listen for and handle Instant Payment Notifications (IPN) from PayPal." />

  <link href="https://github.com/Quixotix/PHP-PayPal-IPN/commits/master.atom" rel="alternate" title="Recent Commits to PHP-PayPal-IPN:master" type="application/atom+xml" />

  </head>


  <body class="logged_out page-blob windows vis-public env-production ">
    <div id="wrapper">

    
    

    

      <div id="header" class="true clearfix">
        <div class="container clearfix">
          <a class="site-logo " href="https://github.com/">
            <img alt="GitHub" class="github-logo-4x" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x.png?1337118071" />
            <img alt="GitHub" class="github-logo-4x-hover" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x-hover.png?1337118071" />
          </a>


                  <ul class="top-nav logged_out">
        <li class="pricing"><a href="https://github.com/signup">Sign up for free</a></li>
        <li class="explore"><a href="https://github.com/explore">Explore GitHub</a></li>
      <li class="features"><a href="https://github.com/features">Features</a></li>
        <li class="blog"><a href="https://github.com/blog">Blog</a></li>
      <li class="login"><a href="https://github.com/login?return_to=%2FQuixotix%2FPHP-PayPal-IPN%2Fblob%2Fmaster%2Fexample%2Fipn.php">Sign in</a></li>
    </ul>



          
        </div>
      </div>

      

      


            <div class="site hfeed" itemscope itemtype="http://schema.org/WebPage">
      <div class="hentry">
        
        <div class="pagehead repohead instapaper_ignore readability-menu">
          <div class="container">
            <div class="title-actions-bar">
              


                  <ul class="pagehead-actions">


          <li>
            <span class="star-button"><a href="/login?return_to=%2FQuixotix%2FPHP-PayPal-IPN" class="minibutton js-toggler-target entice tooltipped leftwards" title="You must be signed in to use this feature" rel="nofollow"><span class="mini-icon mini-icon-star"></span>Star</a><a class="social-count js-social-count" href="/Quixotix/PHP-PayPal-IPN/stargazers">153</a></span>
          </li>
          <li>
            <a href="/login?return_to=%2FQuixotix%2FPHP-PayPal-IPN" class="minibutton js-toggler-target fork-button entice tooltipped leftwards"  title="You must be signed in to fork a repository" rel="nofollow"><span class="mini-icon mini-icon-fork"></span>Fork</a><a href="/Quixotix/PHP-PayPal-IPN/network" class="social-count">41</a>
          </li>
    </ul>

              <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
                <span class="repo-label"><span>public</span></span>
                <span class="mega-icon mega-icon-public-repo"></span>
                <span class="author vcard">
                  <a href="/Quixotix" class="url fn" itemprop="url" rel="author">
                  <span itemprop="title">Quixotix</span>
                  </a></span> /
                <strong><a href="/Quixotix/PHP-PayPal-IPN" class="js-current-repository">PHP-PayPal-IPN</a></strong>
              </h1>
            </div>

            

  <ul class="tabs">
    <li><a href="/Quixotix/PHP-PayPal-IPN" class="selected" highlight="repo_sourcerepo_downloadsrepo_commitsrepo_tagsrepo_branches">Code</a></li>
    <li><a href="/Quixotix/PHP-PayPal-IPN/network" highlight="repo_network">Network</a></li>
    <li><a href="/Quixotix/PHP-PayPal-IPN/pulls" highlight="repo_pulls">Pull Requests <span class='counter'>0</span></a></li>

      <li><a href="/Quixotix/PHP-PayPal-IPN/issues" highlight="repo_issues">Issues <span class='counter'>1</span></a></li>



    <li><a href="/Quixotix/PHP-PayPal-IPN/graphs" highlight="repo_graphsrepo_contributors">Graphs</a></li>


  </ul>
  
<div class="tabnav">

  <span class="tabnav-right">
    <ul class="tabnav-tabs">
      <li><a href="/Quixotix/PHP-PayPal-IPN/tags" class="tabnav-tab" highlight="repo_tags">Tags <span class="counter ">5</span></a></li>
      <li><a href="/Quixotix/PHP-PayPal-IPN/downloads" class="tabnav-tab" highlight="repo_downloads">Downloads <span class="counter blank">0</span></a></li>
    </ul>
    
  </span>

  <div class="tabnav-widget scope">


    <div class="context-menu-container js-menu-container js-context-menu">
      <a href="#"
         class="minibutton bigger switcher js-menu-target js-commitish-button btn-branch repo-tree"
         data-hotkey="w"
         data-ref="master">
         <span><em class="mini-icon mini-icon-branch"></em><i>branch:</i> master</span>
      </a>

      <div class="context-pane commitish-context js-menu-content">
        <a href="javascript:;" class="close js-menu-close"><span class="mini-icon mini-icon-remove-close"></span></a>
        <div class="context-title">Switch branches/tags</div>
        <div class="context-body pane-selector commitish-selector js-navigation-container">
          <div class="filterbar">
            <input type="text" id="context-commitish-filter-field" class="js-navigation-enable js-filterable-field" placeholder="Filter branches/tags">
            <ul class="tabs">
              <li><a href="#" data-filter="branches" class="selected">Branches</a></li>
                <li><a href="#" data-filter="tags">Tags</a></li>
            </ul>
          </div>

          <div class="js-filter-tab js-filter-branches" data-filterable-for="context-commitish-filter-field" data-filterable-type=substring>
              <div class="commitish-item branch-commitish selector-item js-navigation-item js-navigation-target selected">
                <span class="mini-icon mini-icon-confirm"></span>
                <h4>
                    <a href="/Quixotix/PHP-PayPal-IPN/blob/master/example/ipn.php" class="js-navigation-open" data-name="master" rel="nofollow">master</a>
                </h4>
              </div>
          </div>

            <div class="js-filter-tab js-filter-tags " style="display:none" data-filterable-for="context-commitish-filter-field" data-filterable-type=substring>
                <div class="commitish-item tag-commitish selector-item js-navigation-item js-navigation-target ">
                  <span class="mini-icon mini-icon-confirm"></span>
                  <h4>
                      <a href="/Quixotix/PHP-PayPal-IPN/blob/v2.1.0/example/ipn.php" class="js-navigation-open" data-name="v2.1.0" rel="nofollow">v2.1.0</a>
                  </h4>
                </div>
                <div class="commitish-item tag-commitish selector-item js-navigation-item js-navigation-target ">
                  <span class="mini-icon mini-icon-confirm"></span>
                  <h4>
                      <a href="/Quixotix/PHP-PayPal-IPN/blob/v2.0.3/example/ipn.php" class="js-navigation-open" data-name="v2.0.3" rel="nofollow">v2.0.3</a>
                  </h4>
                </div>
                <div class="commitish-item tag-commitish selector-item js-navigation-item js-navigation-target ">
                  <span class="mini-icon mini-icon-confirm"></span>
                  <h4>
                      <a href="/Quixotix/PHP-PayPal-IPN/blob/v2.0.2/example/ipn.php" class="js-navigation-open" data-name="v2.0.2" rel="nofollow">v2.0.2</a>
                  </h4>
                </div>
                <div class="commitish-item tag-commitish selector-item js-navigation-item js-navigation-target ">
                  <span class="mini-icon mini-icon-confirm"></span>
                  <h4>
                      <a href="/Quixotix/PHP-PayPal-IPN/blob/v2.0.1/example/ipn.php" class="js-navigation-open" data-name="v2.0.1" rel="nofollow">v2.0.1</a>
                  </h4>
                </div>
                <div class="commitish-item tag-commitish selector-item js-navigation-item js-navigation-target ">
                  <span class="mini-icon mini-icon-confirm"></span>
                  <h4>
                      <a href="/Quixotix/PHP-PayPal-IPN/blob/v2.0.0/example/ipn.php" class="js-navigation-open" data-name="v2.0.0" rel="nofollow">v2.0.0</a>
                  </h4>
                </div>
            </div>

          <div class="no-results">Nothing to show</div>
        </div>
      </div><!-- /.commitish-context-context -->
    </div>
  </div> <!-- /.scope -->

  <ul class="tabnav-tabs">
    <li><a href="/Quixotix/PHP-PayPal-IPN" class="selected tabnav-tab" highlight="repo_source">Files</a></li>
    <li><a href="/Quixotix/PHP-PayPal-IPN/commits/master" class="tabnav-tab" highlight="repo_commits">Commits</a></li>
    <li><a href="/Quixotix/PHP-PayPal-IPN/branches" class="tabnav-tab" highlight="repo_branches" rel="nofollow">Branches <span class="counter ">1</span></a></li>
  </ul>

</div>

  
  
  


            
          </div>
        </div><!-- /.repohead -->

        <div id="js-repo-pjax-container" class="container context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:b7a23eb311fed297d7e4e5e65bdf5c73 -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:b7a23eb311fed297d7e4e5e65bdf5c73 -->

<div id="slider">


    <p title="This is a placeholder element" class="js-history-link-replace hidden"></p>
    <div class="breadcrumb" data-path="example/ipn.php/">
      <b itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Quixotix/PHP-PayPal-IPN" class="js-slider-breadcrumb" itemscope="url"><span itemprop="title">PHP-PayPal-IPN</span></a></b> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Quixotix/PHP-PayPal-IPN/tree/master/example" class="js-slider-breadcrumb" itemscope="url"><span itemprop="title">example</span></a></span> / <strong class="final-path">ipn.php</strong> <span class="js-clippy mini-icon mini-icon-clippy " data-clipboard-text="example/ipn.php" data-copied-hint="copied!" data-copy-hint="copy to clipboard"></span>
    </div>

    <a href="/Quixotix/PHP-PayPal-IPN/find/master" class="js-slide-to" data-hotkey="t" style="display:none">Show File Finder</a>

      
  <div class="commit file-history-tease js-blob-contributors-content" data-path="example/ipn.php/">
    <img class="main-avatar" height="24" src="https://secure.gravatar.com/avatar/4b57e1790b695ce06f5dd9d46e0184ad?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-140.png" width="24" />
    <span class="author"><a href="/MicahCarrick">MicahCarrick</a></span>
    <time class="js-relative-date" datetime="2011-09-17T10:23:39-07:00" title="2011-09-17 10:23:39">September 17, 2011</time>
    <div class="commit-title">
        <a href="/Quixotix/PHP-PayPal-IPN/commit/14b7c6d86e594e11ad01993ffff194a1829b362f" class="message">Updated example with requirePostMethod()</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>1</strong> contributor</a></p>
      
    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2>Users on GitHub who have contributed to this file</h2>
      <ul class="facebox-user-list">
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/4b57e1790b695ce06f5dd9d46e0184ad?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-140.png" width="24" />
          <a href="/MicahCarrick">MicahCarrick</a>
        </li>
      </ul>
    </div>
  </div>


    <div class="frames">
      <div class="frame frame-center" data-path="example/ipn.php/" data-permalink-url="/Quixotix/PHP-PayPal-IPN/blob/4914db03de079a2c6a8f3602ef7a6fef24e1c822/example/ipn.php" data-title="PHP-PayPal-IPN/example/ipn.php at master · Quixotix/PHP-PayPal-IPN · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><b class="mini-icon mini-icon-text-file"></b></span>
                <span class="mode" title="File Mode">file</span>
                  <span>112 lines (93 sloc)</span>
                <span>3.8 kb</span>
              </div>
              <ul class="button-group actions">
                  <li>
                    <a class="grouped-button file-edit-link minibutton bigger lighter" href="/Quixotix/PHP-PayPal-IPN/edit/master/example/ipn.php" data-method="post" rel="nofollow" data-hotkey="e">Edit</a>
                  </li>
                <li>
                  <a href="/Quixotix/PHP-PayPal-IPN/raw/master/example/ipn.php" class="minibutton grouped-button bigger lighter" id="raw-url">Raw</a>
                </li>
                  <li>
                    <a href="/Quixotix/PHP-PayPal-IPN/blame/master/example/ipn.php" class="minibutton grouped-button bigger lighter">Blame</a>
                  </li>
                <li>
                  <a href="/Quixotix/PHP-PayPal-IPN/commits/master/example/ipn.php" class="minibutton grouped-button bigger lighter" rel="nofollow">History</a>
                </li>
              </ul>
            </div>
                <div class="data type-php">
      <table cellpadding="0" cellspacing="0" class="lines">
        <tr>
          <td>
            <pre class="line_numbers"><span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
</pre>
          </td>
          <td width="100%">
                <div class="highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> *  PHP-PayPal-IPN Example</span></div><div class='line' id='LC4'><span class="sd"> *</span></div><div class='line' id='LC5'><span class="sd"> *  This shows a basic example of how to use the IpnListener() PHP class to </span></div><div class='line' id='LC6'><span class="sd"> *  implement a PayPal Instant Payment Notification (IPN) listener script.</span></div><div class='line' id='LC7'><span class="sd"> *</span></div><div class='line' id='LC8'><span class="sd"> *  For a more in depth tutorial, see my blog post:</span></div><div class='line' id='LC9'><span class="sd"> *  http://www.micahcarrick.com/paypal-ipn-with-php.html</span></div><div class='line' id='LC10'><span class="sd"> *</span></div><div class='line' id='LC11'><span class="sd"> *  This code is available at github:</span></div><div class='line' id='LC12'><span class="sd"> *  https://github.com/Quixotix/PHP-PayPal-IPN</span></div><div class='line' id='LC13'><span class="sd"> *</span></div><div class='line' id='LC14'><span class="sd"> *  @package    PHP-PayPal-IPN</span></div><div class='line' id='LC15'><span class="sd"> *  @author     Micah Carrick</span></div><div class='line' id='LC16'><span class="sd"> *  @copyright  (c) 2011 - Micah Carrick</span></div><div class='line' id='LC17'><span class="sd"> *  @license    http://opensource.org/licenses/gpl-3.0.html</span></div><div class='line' id='LC18'><span class="sd"> */</span></div><div class='line' id='LC19'>&nbsp;</div><div class='line' id='LC20'>&nbsp;</div><div class='line' id='LC21'><span class="cm">/*</span></div><div class='line' id='LC22'><span class="cm">Since this script is executed on the back end between the PayPal server and this</span></div><div class='line' id='LC23'><span class="cm">script, you will want to log errors to a file or email. Do not try to use echo</span></div><div class='line' id='LC24'><span class="cm">or print--it will not work! </span></div><div class='line' id='LC25'><br/></div><div class='line' id='LC26'><span class="cm">Here I am turning on PHP error logging to a file called &quot;ipn_errors.log&quot;. Make</span></div><div class='line' id='LC27'><span class="cm">sure your web server has permissions to write to that file. In a production </span></div><div class='line' id='LC28'><span class="cm">environment it is better to have that log file outside of the web root.</span></div><div class='line' id='LC29'><span class="cm">*/</span></div><div class='line' id='LC30'><span class="nb">ini_set</span><span class="p">(</span><span class="s1">&#39;log_errors&#39;</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC31'><span class="nb">ini_set</span><span class="p">(</span><span class="s1">&#39;error_log&#39;</span><span class="p">,</span> <span class="nb">dirname</span><span class="p">(</span><span class="k">__FILE__</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;/ipn_errors.log&#39;</span><span class="p">);</span></div><div class='line' id='LC32'><br/></div><div class='line' id='LC33'><br/></div><div class='line' id='LC34'><span class="c1">// instantiate the IpnListener class</span></div><div class='line' id='LC35'><span class="k">include</span><span class="p">(</span><span class="s1">&#39;../ipnlistener.php&#39;</span><span class="p">);</span></div><div class='line' id='LC36'><span class="nv">$listener</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">IpnListener</span><span class="p">();</span></div><div class='line' id='LC37'><br/></div><div class='line' id='LC38'><br/></div><div class='line' id='LC39'><span class="cm">/*</span></div><div class='line' id='LC40'><span class="cm">When you are testing your IPN script you should be using a PayPal &quot;Sandbox&quot;</span></div><div class='line' id='LC41'><span class="cm">account: https://developer.paypal.com</span></div><div class='line' id='LC42'><span class="cm">When you are ready to go live change use_sandbox to false.</span></div><div class='line' id='LC43'><span class="cm">*/</span></div><div class='line' id='LC44'><span class="nv">$listener</span><span class="o">-&gt;</span><span class="na">use_sandbox</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC45'><br/></div><div class='line' id='LC46'><span class="cm">/*</span></div><div class='line' id='LC47'><span class="cm">By default the IpnListener object is going  going to post the data back to PayPal</span></div><div class='line' id='LC48'><span class="cm">using cURL over a secure SSL connection. This is the recommended way to post</span></div><div class='line' id='LC49'><span class="cm">the data back, however, some people may have connections problems using this</span></div><div class='line' id='LC50'><span class="cm">method. </span></div><div class='line' id='LC51'><br/></div><div class='line' id='LC52'><span class="cm">To post over standard HTTP connection, use:</span></div><div class='line' id='LC53'><span class="cm">$listener-&gt;use_ssl = false;</span></div><div class='line' id='LC54'><br/></div><div class='line' id='LC55'><span class="cm">To post using the fsockopen() function rather than cURL, use:</span></div><div class='line' id='LC56'><span class="cm">$listener-&gt;use_curl = false;</span></div><div class='line' id='LC57'><span class="cm">*/</span></div><div class='line' id='LC58'><br/></div><div class='line' id='LC59'><span class="cm">/*</span></div><div class='line' id='LC60'><span class="cm">The processIpn() method will encode the POST variables sent by PayPal and then</span></div><div class='line' id='LC61'><span class="cm">POST them back to the PayPal server. An exception will be thrown if there is </span></div><div class='line' id='LC62'><span class="cm">a fatal error (cannot connect, your server is not configured properly, etc.).</span></div><div class='line' id='LC63'><span class="cm">Use a try/catch block to catch these fatal errors and log to the ipn_errors.log</span></div><div class='line' id='LC64'><span class="cm">file we setup at the top of this file.</span></div><div class='line' id='LC65'><br/></div><div class='line' id='LC66'><span class="cm">The processIpn() method will send the raw data on &#39;php://input&#39; to PayPal. You</span></div><div class='line' id='LC67'><span class="cm">can optionally pass the data to processIpn() yourself:</span></div><div class='line' id='LC68'><span class="cm">$verified = $listener-&gt;processIpn($my_post_data);</span></div><div class='line' id='LC69'><span class="cm">*/</span></div><div class='line' id='LC70'><span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC71'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$listener</span><span class="o">-&gt;</span><span class="na">requirePostMethod</span><span class="p">();</span></div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$verified</span> <span class="o">=</span> <span class="nv">$listener</span><span class="o">-&gt;</span><span class="na">processIpn</span><span class="p">();</span></div><div class='line' id='LC73'><span class="p">}</span> <span class="k">catch</span> <span class="p">(</span><span class="nx">Exception</span> <span class="nv">$e</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC74'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">error_log</span><span class="p">(</span><span class="nv">$e</span><span class="o">-&gt;</span><span class="na">getMessage</span><span class="p">());</span></div><div class='line' id='LC75'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">exit</span><span class="p">(</span><span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC76'><span class="p">}</span></div><div class='line' id='LC77'><br/></div><div class='line' id='LC78'><br/></div><div class='line' id='LC79'><span class="cm">/*</span></div><div class='line' id='LC80'><span class="cm">The processIpn() method returned true if the IPN was &quot;VERIFIED&quot; and false if it</span></div><div class='line' id='LC81'><span class="cm">was &quot;INVALID&quot;.</span></div><div class='line' id='LC82'><span class="cm">*/</span></div><div class='line' id='LC83'><span class="k">if</span> <span class="p">(</span><span class="nv">$verified</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC84'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="cm">/*</span></div><div class='line' id='LC85'><span class="cm">    Once you have a verified IPN you need to do a few more checks on the POST</span></div><div class='line' id='LC86'><span class="cm">    fields--typically against data you stored in your database during when the</span></div><div class='line' id='LC87'><span class="cm">    end user made a purchase (such as in the &quot;success&quot; page on a web payments</span></div><div class='line' id='LC88'><span class="cm">    standard button). The fields PayPal recommends checking are:</span></div><div class='line' id='LC89'><span class="cm">    </span></div><div class='line' id='LC90'><span class="cm">        1. Check the $_POST[&#39;payment_status&#39;] is &quot;Completed&quot;</span></div><div class='line' id='LC91'><span class="cm">	    2. Check that $_POST[&#39;txn_id&#39;] has not been previously processed </span></div><div class='line' id='LC92'><span class="cm">	    3. Check that $_POST[&#39;receiver_email&#39;] is your Primary PayPal email </span></div><div class='line' id='LC93'><span class="cm">	    4. Check that $_POST[&#39;payment_amount&#39;] and $_POST[&#39;payment_currency&#39;] </span></div><div class='line' id='LC94'><span class="cm">	       are correct</span></div><div class='line' id='LC95'><span class="cm">    </span></div><div class='line' id='LC96'><span class="cm">    Since implementations on this varies, I will leave these checks out of this</span></div><div class='line' id='LC97'><span class="cm">    example and just send an email using the getTextReport() method to get all</span></div><div class='line' id='LC98'><span class="cm">    of the details about the IPN.  </span></div><div class='line' id='LC99'><span class="cm">    */</span></div><div class='line' id='LC100'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">mail</span><span class="p">(</span><span class="s1">&#39;YOUR EMAIL ADDRESS&#39;</span><span class="p">,</span> <span class="s1">&#39;Verified IPN&#39;</span><span class="p">,</span> <span class="nv">$listener</span><span class="o">-&gt;</span><span class="na">getTextReport</span><span class="p">());</span></div><div class='line' id='LC101'><br/></div><div class='line' id='LC102'><span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC103'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="cm">/*</span></div><div class='line' id='LC104'><span class="cm">    An Invalid IPN *may* be caused by a fraudulent transaction attempt. It&#39;s</span></div><div class='line' id='LC105'><span class="cm">    a good idea to have a developer or sys admin manually investigate any </span></div><div class='line' id='LC106'><span class="cm">    invalid IPN.</span></div><div class='line' id='LC107'><span class="cm">    */</span></div><div class='line' id='LC108'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">mail</span><span class="p">(</span><span class="s1">&#39;YOUR EMAIL ADDRESS&#39;</span><span class="p">,</span> <span class="s1">&#39;Invalid IPN&#39;</span><span class="p">,</span> <span class="nv">$listener</span><span class="o">-&gt;</span><span class="na">getTextReport</span><span class="p">());</span></div><div class='line' id='LC109'><span class="p">}</span></div><div class='line' id='LC110'><br/></div><div class='line' id='LC111'><span class="cp">?&gt;</span><span class="x"></span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>
      </div>
    </div>
</div>

<div class="frame frame-loading large-loading-area" style="display:none;">
  <img src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-128.gif?1347543534" height="64" width="64">
</div>

        </div>
      </div>
      <div class="context-overlay"></div>
    </div>

      <div id="footer-push"></div><!-- hack for sticky footer -->
    </div><!-- end of wrapper - hack for sticky footer -->

      <!-- footer -->
      <div id="footer" >
        
  <div class="upper_footer">
     <div class="container clearfix">

       <h4 id="blacktocat">GitHub Links</h4>

       <ul class="footer_nav">
         <h4>GitHub</h4>
         <li><a href="https://github.com/about">About</a></li>
         <li><a href="https://github.com/blog">Blog</a></li>
         <li><a href="https://github.com/features">Features</a></li>
         <li><a href="https://github.com/contact">Contact &amp; Support</a></li>
         <li><a href="http://training.github.com/">Training</a></li>
         <li><a href="http://enterprise.github.com/">GitHub Enterprise</a></li>
         <li><a href="http://status.github.com/">Site Status</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Clients</h4>
         <li><a href="http://mac.github.com/">GitHub for Mac</a></li>
         <li><a href="http://windows.github.com/">GitHub for Windows</a></li>
         <li><a href="http://eclipse.github.com/">GitHub for Eclipse</a></li>
         <li><a href="http://mobile.github.com/">GitHub Mobile Apps</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Tools</h4>
         <li><a href="http://get.gaug.es/">Gauges: Web analytics</a></li>
         <li><a href="http://speakerdeck.com">Speaker Deck: Presentations</a></li>
         <li><a href="https://gist.github.com">Gist: Code snippets</a></li>

         <h4 class="second">Extras</h4>
         <li><a href="http://jobs.github.com/">Job Board</a></li>
         <li><a href="http://shop.github.com/">GitHub Shop</a></li>
         <li><a href="http://octodex.github.com/">The Octodex</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Documentation</h4>
         <li><a href="http://help.github.com/">GitHub Help</a></li>
         <li><a href="http://developer.github.com/">Developer API</a></li>
         <li><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></li>
         <li><a href="http://pages.github.com/">GitHub Pages</a></li>
       </ul>

     </div><!-- /.site -->
  </div><!-- /.upper_footer -->

<div class="lower_footer">
  <div class="container clearfix">
    <div id="legal">
      <ul>
          <li><a href="https://github.com/site/terms">Terms of Service</a></li>
          <li><a href="https://github.com/site/privacy">Privacy</a></li>
          <li><a href="https://github.com/security">Security</a></li>
      </ul>

      <p>&copy; 2012 <span title="0.05327s from fe14.rs.github.com">GitHub</span> Inc. All rights reserved.</p>
    </div><!-- /#legal or /#legal_ie-->

  </div><!-- /.site -->
</div><!-- /.lower_footer -->


      </div><!-- /#footer -->

    

<div id="keyboard_shortcuts_pane" class="instapaper_ignore readability-extra" style="display:none">
  <h2>Keyboard Shortcuts <small><a href="#" class="js-see-all-keyboard-shortcuts">(see all)</a></small></h2>

  <div class="columns threecols">
    <div class="column first">
      <h3>Site wide shortcuts</h3>
      <dl class="keyboard-mappings">
        <dt>s</dt>
        <dd>Focus command bar</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>?</dt>
        <dd>Bring up this help dialog</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column middle" style='display:none'>
      <h3>Commit list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>c <em>or</em> o <em>or</em> enter</dt>
        <dd>Open commit</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>y</dt>
        <dd>Expand URL to its canonical form</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column last js-hidden-pane" style='display:none'>
      <h3>Pull request list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
        <dd>Submit comment</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> shift p</dt>
        <dd>Preview comment</dd>
      </dl>
    </div><!-- /.columns.last -->

  </div><!-- /.columns.equacols -->

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>

    <h3>Issues</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>x</dt>
          <dd>Toggle selection</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
          <dd>Submit comment</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> shift p</dt>
          <dd>Preview comment</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>c</dt>
          <dd>Create issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Create label</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>i</dt>
          <dd>Back to inbox</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>u</dt>
          <dd>Back to issues</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>/</dt>
          <dd>Focus issues search</dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>

    <h3>Issues Dashboard</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>

    <h3>Network Graph</h3>
    <div class="columns equacols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt><span class="badmono">←</span> <em>or</em> h</dt>
          <dd>Scroll left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">→</span> <em>or</em> l</dt>
          <dd>Scroll right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↑</span> <em>or</em> k</dt>
          <dd>Scroll up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↓</span> <em>or</em> j</dt>
          <dd>Scroll down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Toggle visibility of head labels</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">←</span> <em>or</em> shift h</dt>
          <dd>Scroll all the way left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">→</span> <em>or</em> shift l</dt>
          <dd>Scroll all the way right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↑</span> <em>or</em> shift k</dt>
          <dd>Scroll all the way up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↓</span> <em>or</em> shift j</dt>
          <dd>Scroll all the way down</dd>
        </dl>
      </div><!-- /.column.last -->
    </div>
  </div>

  <div class="js-hidden-pane" >
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first js-hidden-pane" >
        <h3>Source Code Browsing</h3>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Activates the file finder</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Jump to line</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>w</dt>
          <dd>Switch branch/tag</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Expand URL to its canonical form</dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first">
        <h3>Browsing Commits</h3>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
          <dd>Submit comment</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>escape</dt>
          <dd>Close form</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>p</dt>
          <dd>Parent commit</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o</dt>
          <dd>Other parent commit</dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>
    <h3>Notifications</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open notification</dd>
        </dl>
      </div><!-- /.column.first -->

      <div class="column second">
        <dl class="keyboard-mappings">
          <dt>e <em>or</em> shift i <em>or</em> y</dt>
          <dd>Mark as read</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift m</dt>
          <dd>Mute thread</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

</div>

    <div id="markdown-help" class="instapaper_ignore readability-extra">
  <h2>Markdown Cheat Sheet</h2>

  <div class="cheatsheet-content">

  <div class="mod">
    <div class="col">
      <h3>Format Text</h3>
      <p>Headers</p>
      <pre>
# This is an &lt;h1&gt; tag
## This is an &lt;h2&gt; tag
###### This is an &lt;h6&gt; tag</pre>
     <p>Text styles</p>
     <pre>
*This text will be italic*
_This will also be italic_
**This text will be bold**
__This will also be bold__

*You **can** combine them*
</pre>
    </div>
    <div class="col">
      <h3>Lists</h3>
      <p>Unordered</p>
      <pre>
* Item 1
* Item 2
  * Item 2a
  * Item 2b</pre>
     <p>Ordered</p>
     <pre>
1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b</pre>
    </div>
    <div class="col">
      <h3>Miscellaneous</h3>
      <p>Images</p>
      <pre>
![GitHub Logo](/images/logo.png)
Format: ![Alt Text](url)
</pre>
     <p>Links</p>
     <pre>
http://github.com - automatic!
[GitHub](http://github.com)</pre>
<p>Blockquotes</p>
     <pre>
As Kanye West said:

> We're living the future so
> the present is our past.
</pre>
    </div>
  </div>
  <div class="rule"></div>

  <h3>Code Examples in Markdown</h3>
  <div class="col">
      <p>Syntax highlighting with <a href="http://github.github.com/github-flavored-markdown/" title="GitHub Flavored Markdown" target="_blank">GFM</a></p>
      <pre>
```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```</pre>
    </div>
    <div class="col">
      <p>Or, indent your code 4 spaces</p>
      <pre>
Here is a Python code example
without syntax highlighting:

    def foo:
      if not bar:
        return true</pre>
    </div>
    <div class="col">
      <p>Inline code for comments</p>
      <pre>
I think you should use an
`&lt;addr&gt;` element here instead.</pre>
    </div>
  </div>

  </div>
</div>


    <div id="ajax-error-message" class="flash flash-error">
      <span class="mini-icon mini-icon-exclamation"></span>
      Something went wrong with that request. Please try again.
      <a href="#" class="mini-icon mini-icon-remove-close ajax-error-dismiss"></a>
    </div>

    <div id="logo-popup">
      <h2>Looking for the GitHub logo?</h2>
      <ul>
        <li>
          <h4>GitHub Logo</h4>
          <a href="http://github-media-downloads.s3.amazonaws.com/GitHub_Logos.zip"><img alt="Github_logo" src="https://a248.e.akamai.net/assets.github.com/images/modules/about_page/github_logo.png?1329921026" /></a>
          <a href="http://github-media-downloads.s3.amazonaws.com/GitHub_Logos.zip" class="minibutton download">Download</a>
        </li>
        <li>
          <h4>The Octocat</h4>
          <a href="http://github-media-downloads.s3.amazonaws.com/Octocats.zip"><img alt="Octocat" src="https://a248.e.akamai.net/assets.github.com/images/modules/about_page/octocat.png?1329921026" /></a>
          <a href="http://github-media-downloads.s3.amazonaws.com/Octocats.zip" class="minibutton download">Download</a>
        </li>
      </ul>
    </div>

    
    
    <span id='server_response_time' data-time='0.05476' data-host='fe14'></span>
    
  </body>
</html>


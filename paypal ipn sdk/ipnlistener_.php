  


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP-PayPal-IPN/ipnlistener.php at master · Quixotix/PHP-PayPal-IPN · GitHub</title>
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
    

      <link rel='permalink' href='/Quixotix/PHP-PayPal-IPN/blob/4914db03de079a2c6a8f3602ef7a6fef24e1c822/ipnlistener.php'>
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
      <li class="login"><a href="https://github.com/login?return_to=%2FQuixotix%2FPHP-PayPal-IPN%2Fblob%2Fmaster%2Fipnlistener.php">Sign in</a></li>
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
                    <a href="/Quixotix/PHP-PayPal-IPN/blob/master/ipnlistener.php" class="js-navigation-open" data-name="master" rel="nofollow">master</a>
                </h4>
              </div>
          </div>

            <div class="js-filter-tab js-filter-tags " style="display:none" data-filterable-for="context-commitish-filter-field" data-filterable-type=substring>
                <div class="commitish-item tag-commitish selector-item js-navigation-item js-navigation-target ">
                  <span class="mini-icon mini-icon-confirm"></span>
                  <h4>
                      <a href="/Quixotix/PHP-PayPal-IPN/blob/v2.1.0/ipnlistener.php" class="js-navigation-open" data-name="v2.1.0" rel="nofollow">v2.1.0</a>
                  </h4>
                </div>
                <div class="commitish-item tag-commitish selector-item js-navigation-item js-navigation-target ">
                  <span class="mini-icon mini-icon-confirm"></span>
                  <h4>
                      <a href="/Quixotix/PHP-PayPal-IPN/blob/v2.0.3/ipnlistener.php" class="js-navigation-open" data-name="v2.0.3" rel="nofollow">v2.0.3</a>
                  </h4>
                </div>
                <div class="commitish-item tag-commitish selector-item js-navigation-item js-navigation-target ">
                  <span class="mini-icon mini-icon-confirm"></span>
                  <h4>
                      <a href="/Quixotix/PHP-PayPal-IPN/blob/v2.0.2/ipnlistener.php" class="js-navigation-open" data-name="v2.0.2" rel="nofollow">v2.0.2</a>
                  </h4>
                </div>
                <div class="commitish-item tag-commitish selector-item js-navigation-item js-navigation-target ">
                  <span class="mini-icon mini-icon-confirm"></span>
                  <h4>
                      <a href="/Quixotix/PHP-PayPal-IPN/blob/v2.0.1/ipnlistener.php" class="js-navigation-open" data-name="v2.0.1" rel="nofollow">v2.0.1</a>
                  </h4>
                </div>
                <div class="commitish-item tag-commitish selector-item js-navigation-item js-navigation-target ">
                  <span class="mini-icon mini-icon-confirm"></span>
                  <h4>
                      <a href="/Quixotix/PHP-PayPal-IPN/blob/v2.0.0/ipnlistener.php" class="js-navigation-open" data-name="v2.0.0" rel="nofollow">v2.0.0</a>
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
          


<!-- blob contrib key: blob_contributors:v21:23131c55f7379b509997d9ebd4946d84 -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:23131c55f7379b509997d9ebd4946d84 -->

<div id="slider">


    <p title="This is a placeholder element" class="js-history-link-replace hidden"></p>
    <div class="breadcrumb" data-path="ipnlistener.php/">
      <b itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Quixotix/PHP-PayPal-IPN" class="js-slider-breadcrumb" itemscope="url"><span itemprop="title">PHP-PayPal-IPN</span></a></b> / <strong class="final-path">ipnlistener.php</strong> <span class="js-clippy mini-icon mini-icon-clippy " data-clipboard-text="ipnlistener.php" data-copied-hint="copied!" data-copy-hint="copy to clipboard"></span>
    </div>

    <a href="/Quixotix/PHP-PayPal-IPN/find/master" class="js-slide-to" data-hotkey="t" style="display:none">Show File Finder</a>

      
  <div class="commit file-history-tease" data-path="ipnlistener.php/">
    <img class="main-avatar" height="24" src="https://secure.gravatar.com/avatar/4b57e1790b695ce06f5dd9d46e0184ad?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
    <span class="author"><a href="/MicahCarrick">MicahCarrick</a></span>
    <time class="js-relative-date" datetime="2012-10-13T08:56:22-07:00" title="2012-10-13 08:56:22">October 13, 2012</time>
    <div class="commit-title">
        <a href="/Quixotix/PHP-PayPal-IPN/commit/4914db03de079a2c6a8f3602ef7a6fef24e1c822" class="message">Removed trailing closing tag</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>4</strong> contributors</a></p>
          <a class="avatar tooltipped downwards" title="MicahCarrick" href="/Quixotix/PHP-PayPal-IPN/commits/master/ipnlistener.php?author=MicahCarrick"><img height="20" src="https://secure.gravatar.com/avatar/4b57e1790b695ce06f5dd9d46e0184ad?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="mike182uk" href="/Quixotix/PHP-PayPal-IPN/commits/master/ipnlistener.php?author=mike182uk"><img height="20" src="https://secure.gravatar.com/avatar/730c03c7ecdbd654028b3beb5f592290?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="gjcourtney" href="/Quixotix/PHP-PayPal-IPN/commits/master/ipnlistener.php?author=gjcourtney"><img height="20" src="https://secure.gravatar.com/avatar/3ebf794cdd3ef2dccbf54eaf9ed0001f?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="emerinohdz" href="/Quixotix/PHP-PayPal-IPN/commits/master/ipnlistener.php?author=emerinohdz"><img height="20" src="https://secure.gravatar.com/avatar/5d790450f22815774096262f603ca38c?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2>Users on GitHub who have contributed to this file</h2>
      <ul class="facebox-user-list">
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/4b57e1790b695ce06f5dd9d46e0184ad?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/MicahCarrick">MicahCarrick</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/730c03c7ecdbd654028b3beb5f592290?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/mike182uk">mike182uk</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/3ebf794cdd3ef2dccbf54eaf9ed0001f?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/gjcourtney">gjcourtney</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/5d790450f22815774096262f603ca38c?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/emerinohdz">emerinohdz</a>
        </li>
      </ul>
    </div>
  </div>


    <div class="frames">
      <div class="frame frame-center" data-path="ipnlistener.php/" data-permalink-url="/Quixotix/PHP-PayPal-IPN/blob/4914db03de079a2c6a8f3602ef7a6fef24e1c822/ipnlistener.php" data-title="PHP-PayPal-IPN/ipnlistener.php at master · Quixotix/PHP-PayPal-IPN · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><b class="mini-icon mini-icon-text-file"></b></span>
                <span class="mode" title="File Mode">file</span>
                  <span>313 lines (269 sloc)</span>
                <span>9.743 kb</span>
              </div>
              <ul class="button-group actions">
                  <li>
                    <a class="grouped-button file-edit-link minibutton bigger lighter" href="/Quixotix/PHP-PayPal-IPN/edit/master/ipnlistener.php" data-method="post" rel="nofollow" data-hotkey="e">Edit</a>
                  </li>
                <li>
                  <a href="/Quixotix/PHP-PayPal-IPN/raw/master/ipnlistener.php" class="minibutton grouped-button bigger lighter" id="raw-url">Raw</a>
                </li>
                  <li>
                    <a href="/Quixotix/PHP-PayPal-IPN/blame/master/ipnlistener.php" class="minibutton grouped-button bigger lighter">Blame</a>
                  </li>
                <li>
                  <a href="/Quixotix/PHP-PayPal-IPN/commits/master/ipnlistener.php" class="minibutton grouped-button bigger lighter" rel="nofollow">History</a>
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
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
</pre>
          </td>
          <td width="100%">
                <div class="highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> *  PayPal IPN Listener</span></div><div class='line' id='LC4'><span class="sd"> *</span></div><div class='line' id='LC5'><span class="sd"> *  A class to listen for and handle Instant Payment Notifications (IPN) from </span></div><div class='line' id='LC6'><span class="sd"> *  the PayPal server.</span></div><div class='line' id='LC7'><span class="sd"> *</span></div><div class='line' id='LC8'><span class="sd"> *  https://github.com/Quixotix/PHP-PayPal-IPN</span></div><div class='line' id='LC9'><span class="sd"> *</span></div><div class='line' id='LC10'><span class="sd"> *  @package    PHP-PayPal-IPN</span></div><div class='line' id='LC11'><span class="sd"> *  @author     Micah Carrick</span></div><div class='line' id='LC12'><span class="sd"> *  @copyright  (c) 2012 - Micah Carrick</span></div><div class='line' id='LC13'><span class="sd"> *  @version    2.1.0</span></div><div class='line' id='LC14'><span class="sd"> */</span></div><div class='line' id='LC15'><span class="k">class</span> <span class="nc">IpnListener</span> <span class="p">{</span></div><div class='line' id='LC16'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC17'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC18'><span class="sd">     *  If true, the recommended cURL PHP library is used to send the post back </span></div><div class='line' id='LC19'><span class="sd">     *  to PayPal. If flase then fsockopen() is used. Default true.</span></div><div class='line' id='LC20'><span class="sd">     *</span></div><div class='line' id='LC21'><span class="sd">     *  @var boolean</span></div><div class='line' id='LC22'><span class="sd">     */</span></div><div class='line' id='LC23'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$use_curl</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span>     </div><div class='line' id='LC24'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC25'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC26'><span class="sd">     *  If true, explicitly sets cURL to use SSL version 3. Use this if cURL</span></div><div class='line' id='LC27'><span class="sd">     *  is compiled with GnuTLS SSL.</span></div><div class='line' id='LC28'><span class="sd">     *</span></div><div class='line' id='LC29'><span class="sd">     *  @var boolean</span></div><div class='line' id='LC30'><span class="sd">     */</span></div><div class='line' id='LC31'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$force_ssl_v3</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span>     </div><div class='line' id='LC32'>&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC33'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC34'><span class="sd">     *  If true, cURL will use the CURLOPT_FOLLOWLOCATION to follow any </span></div><div class='line' id='LC35'><span class="sd">     *  &quot;Location: ...&quot; headers in the response.</span></div><div class='line' id='LC36'><span class="sd">     *</span></div><div class='line' id='LC37'><span class="sd">     *  @var boolean</span></div><div class='line' id='LC38'><span class="sd">     */</span></div><div class='line' id='LC39'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$follow_location</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span>     </div><div class='line' id='LC40'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC41'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC42'><span class="sd">     *  If true, an SSL secure connection (port 443) is used for the post back </span></div><div class='line' id='LC43'><span class="sd">     *  as recommended by PayPal. If false, a standard HTTP (port 80) connection</span></div><div class='line' id='LC44'><span class="sd">     *  is used. Default true.</span></div><div class='line' id='LC45'><span class="sd">     *</span></div><div class='line' id='LC46'><span class="sd">     *  @var boolean</span></div><div class='line' id='LC47'><span class="sd">     */</span></div><div class='line' id='LC48'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$use_ssl</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span>      </div><div class='line' id='LC49'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC50'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC51'><span class="sd">     *  If true, the paypal sandbox URI www.sandbox.paypal.com is used for the</span></div><div class='line' id='LC52'><span class="sd">     *  post back. If false, the live URI www.paypal.com is used. Default false.</span></div><div class='line' id='LC53'><span class="sd">     *</span></div><div class='line' id='LC54'><span class="sd">     *  @var boolean</span></div><div class='line' id='LC55'><span class="sd">     */</span></div><div class='line' id='LC56'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$use_sandbox</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span> </div><div class='line' id='LC57'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC59'><span class="sd">     *  The amount of time, in seconds, to wait for the PayPal server to respond</span></div><div class='line' id='LC60'><span class="sd">     *  before timing out. Default 30 seconds.</span></div><div class='line' id='LC61'><span class="sd">     *</span></div><div class='line' id='LC62'><span class="sd">     *  @var int</span></div><div class='line' id='LC63'><span class="sd">     */</span></div><div class='line' id='LC64'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$timeout</span> <span class="o">=</span> <span class="mi">30</span><span class="p">;</span>       </div><div class='line' id='LC65'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC66'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$post_data</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC67'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$post_uri</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>     </div><div class='line' id='LC68'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$response_status</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC69'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$response</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC70'><br/></div><div class='line' id='LC71'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">PAYPAL_HOST</span> <span class="o">=</span> <span class="s1">&#39;www.paypal.com&#39;</span><span class="p">;</span></div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">SANDBOX_HOST</span> <span class="o">=</span> <span class="s1">&#39;www.sandbox.paypal.com&#39;</span><span class="p">;</span></div><div class='line' id='LC73'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC74'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC75'><span class="sd">     *  Post Back Using cURL</span></div><div class='line' id='LC76'><span class="sd">     *</span></div><div class='line' id='LC77'><span class="sd">     *  Sends the post back to PayPal using the cURL library. Called by</span></div><div class='line' id='LC78'><span class="sd">     *  the processIpn() method if the use_curl property is true. Throws an</span></div><div class='line' id='LC79'><span class="sd">     *  exception if the post fails. Populates the response, response_status,</span></div><div class='line' id='LC80'><span class="sd">     *  and post_uri properties on success.</span></div><div class='line' id='LC81'><span class="sd">     *</span></div><div class='line' id='LC82'><span class="sd">     *  @param  string  The post data as a URL encoded string</span></div><div class='line' id='LC83'><span class="sd">     */</span></div><div class='line' id='LC84'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">curlPost</span><span class="p">(</span><span class="nv">$encoded_data</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC85'><br/></div><div class='line' id='LC86'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">use_ssl</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC87'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$uri</span> <span class="o">=</span> <span class="s1">&#39;https://&#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPaypalHost</span><span class="p">()</span><span class="o">.</span><span class="s1">&#39;/cgi-bin/webscr&#39;</span><span class="p">;</span></div><div class='line' id='LC88'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">post_uri</span> <span class="o">=</span> <span class="nv">$uri</span><span class="p">;</span></div><div class='line' id='LC89'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC90'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$uri</span> <span class="o">=</span> <span class="s1">&#39;http://&#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPaypalHost</span><span class="p">()</span><span class="o">.</span><span class="s1">&#39;/cgi-bin/webscr&#39;</span><span class="p">;</span></div><div class='line' id='LC91'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">post_uri</span> <span class="o">=</span> <span class="nv">$uri</span><span class="p">;</span></div><div class='line' id='LC92'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC93'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC94'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ch</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">();</span></div><div class='line' id='LC95'><br/></div><div class='line' id='LC96'>		<span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_SSL_VERIFYPEER</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC97'>		<span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_SSL_VERIFYHOST</span><span class="p">,</span> <span class="mi">2</span><span class="p">);</span></div><div class='line' id='LC98'>		<span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_CAINFO</span><span class="p">,</span> </div><div class='line' id='LC99'>		            <span class="nb">dirname</span><span class="p">(</span><span class="k">__FILE__</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;/cert/api_cert_chain.crt&quot;</span><span class="p">);</span></div><div class='line' id='LC100'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_URL</span><span class="p">,</span> <span class="nv">$uri</span><span class="p">);</span></div><div class='line' id='LC101'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_POST</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC102'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_POSTFIELDS</span><span class="p">,</span> <span class="nv">$encoded_data</span><span class="p">);</span></div><div class='line' id='LC103'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_FOLLOWLOCATION</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">follow_location</span><span class="p">);</span></div><div class='line' id='LC104'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_TIMEOUT</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">timeout</span><span class="p">);</span></div><div class='line' id='LC105'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_RETURNTRANSFER</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC106'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_HEADER</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC107'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC108'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">force_ssl_v3</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC109'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">curl_setopt</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLOPT_SSLVERSION</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC110'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC111'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC112'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$ch</span><span class="p">);</span></div><div class='line' id='LC113'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response_status</span> <span class="o">=</span> <span class="nb">strval</span><span class="p">(</span><span class="nb">curl_getinfo</span><span class="p">(</span><span class="nv">$ch</span><span class="p">,</span> <span class="nx">CURLINFO_HTTP_CODE</span><span class="p">));</span></div><div class='line' id='LC114'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC115'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span> <span class="o">===</span> <span class="k">false</span> <span class="o">||</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response_status</span> <span class="o">==</span> <span class="s1">&#39;0&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC116'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errno</span> <span class="o">=</span> <span class="nb">curl_errno</span><span class="p">(</span><span class="nv">$ch</span><span class="p">);</span></div><div class='line' id='LC117'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errstr</span> <span class="o">=</span> <span class="nb">curl_error</span><span class="p">(</span><span class="nv">$ch</span><span class="p">);</span></div><div class='line' id='LC118'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s2">&quot;cURL error: [</span><span class="si">$errno</span><span class="s2">] </span><span class="si">$errstr</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC119'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC120'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC121'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC122'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC123'><span class="sd">     *  Post Back Using fsockopen()</span></div><div class='line' id='LC124'><span class="sd">     *</span></div><div class='line' id='LC125'><span class="sd">     *  Sends the post back to PayPal using the fsockopen() function. Called by</span></div><div class='line' id='LC126'><span class="sd">     *  the processIpn() method if the use_curl property is false. Throws an</span></div><div class='line' id='LC127'><span class="sd">     *  exception if the post fails. Populates the response, response_status,</span></div><div class='line' id='LC128'><span class="sd">     *  and post_uri properties on success.</span></div><div class='line' id='LC129'><span class="sd">     *</span></div><div class='line' id='LC130'><span class="sd">     *  @param  string  The post data as a URL encoded string</span></div><div class='line' id='LC131'><span class="sd">     */</span></div><div class='line' id='LC132'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">fsockPost</span><span class="p">(</span><span class="nv">$encoded_data</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC133'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC134'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">use_ssl</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC135'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$uri</span> <span class="o">=</span> <span class="s1">&#39;ssl://&#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPaypalHost</span><span class="p">();</span></div><div class='line' id='LC136'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$port</span> <span class="o">=</span> <span class="s1">&#39;443&#39;</span><span class="p">;</span></div><div class='line' id='LC137'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">post_uri</span> <span class="o">=</span> <span class="nv">$uri</span><span class="o">.</span><span class="s1">&#39;/cgi-bin/webscr&#39;</span><span class="p">;</span></div><div class='line' id='LC138'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC139'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$uri</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPaypalHost</span><span class="p">();</span> <span class="c1">// no &quot;http://&quot; in call to fsockopen()</span></div><div class='line' id='LC140'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$port</span> <span class="o">=</span> <span class="s1">&#39;80&#39;</span><span class="p">;</span></div><div class='line' id='LC141'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">post_uri</span> <span class="o">=</span> <span class="s1">&#39;http://&#39;</span><span class="o">.</span><span class="nv">$uri</span><span class="o">.</span><span class="s1">&#39;/cgi-bin/webscr&#39;</span><span class="p">;</span></div><div class='line' id='LC142'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC143'><br/></div><div class='line' id='LC144'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$fp</span> <span class="o">=</span> <span class="nb">fsockopen</span><span class="p">(</span><span class="nv">$uri</span><span class="p">,</span> <span class="nv">$port</span><span class="p">,</span> <span class="nv">$errno</span><span class="p">,</span> <span class="nv">$errstr</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">timeout</span><span class="p">);</span></div><div class='line' id='LC145'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC146'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$fp</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC147'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// fsockopen error</span></div><div class='line' id='LC148'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s2">&quot;fsockopen error: [</span><span class="si">$errno</span><span class="s2">] </span><span class="si">$errstr</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC149'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> </div><div class='line' id='LC150'><br/></div><div class='line' id='LC151'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$header</span> <span class="o">=</span> <span class="s2">&quot;POST /cgi-bin/webscr HTTP/1.1</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC152'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$header</span> <span class="o">.=</span> <span class="s2">&quot;Host: &quot;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPaypalHost</span><span class="p">()</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC153'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$header</span> <span class="o">.=</span> <span class="s2">&quot;Content-Type: application/x-www-form-urlencoded</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC154'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$header</span> <span class="o">.=</span> <span class="s2">&quot;Content-Length: &quot;</span><span class="o">.</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$encoded_data</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC155'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$header</span> <span class="o">.=</span> <span class="s2">&quot;Connection: Close</span><span class="se">\r\n\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC156'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC157'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fputs</span><span class="p">(</span><span class="nv">$fp</span><span class="p">,</span> <span class="nv">$header</span><span class="o">.</span><span class="nv">$encoded_data</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\r\n\r\n</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC158'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC159'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span><span class="p">(</span><span class="o">!</span><span class="nb">feof</span><span class="p">(</span><span class="nv">$fp</span><span class="p">))</span> <span class="p">{</span> </div><div class='line' id='LC160'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC161'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// extract HTTP status from first line</span></div><div class='line' id='LC162'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span> <span class="o">.=</span> <span class="nv">$status</span> <span class="o">=</span> <span class="nb">fgets</span><span class="p">(</span><span class="nv">$fp</span><span class="p">,</span> <span class="mi">1024</span><span class="p">);</span> </div><div class='line' id='LC163'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response_status</span> <span class="o">=</span> <span class="nx">trim</span><span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$status</span><span class="p">,</span> <span class="mi">9</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC164'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC165'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span> <span class="o">.=</span> <span class="nb">fgets</span><span class="p">(</span><span class="nv">$fp</span><span class="p">,</span> <span class="mi">1024</span><span class="p">);</span> </div><div class='line' id='LC166'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC167'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> </div><div class='line' id='LC168'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC169'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fclose</span><span class="p">(</span><span class="nv">$fp</span><span class="p">);</span></div><div class='line' id='LC170'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC171'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC172'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">getPaypalHost</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC173'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">use_sandbox</span><span class="p">)</span> <span class="k">return</span> <span class="nx">self</span><span class="o">::</span><span class="na">SANDBOX_HOST</span><span class="p">;</span></div><div class='line' id='LC174'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">else</span> <span class="k">return</span> <span class="nx">self</span><span class="o">::</span><span class="na">PAYPAL_HOST</span><span class="p">;</span></div><div class='line' id='LC175'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC176'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC177'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC178'><span class="sd">     *  Get POST URI</span></div><div class='line' id='LC179'><span class="sd">     *</span></div><div class='line' id='LC180'><span class="sd">     *  Returns the URI that was used to send the post back to PayPal. This can</span></div><div class='line' id='LC181'><span class="sd">     *  be useful for troubleshooting connection problems. The default URI</span></div><div class='line' id='LC182'><span class="sd">     *  would be &quot;ssl://www.sandbox.paypal.com:443/cgi-bin/webscr&quot;</span></div><div class='line' id='LC183'><span class="sd">     *</span></div><div class='line' id='LC184'><span class="sd">     *  @return string</span></div><div class='line' id='LC185'><span class="sd">     */</span></div><div class='line' id='LC186'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getPostUri</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC187'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">post_uri</span><span class="p">;</span></div><div class='line' id='LC188'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC189'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC190'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC191'><span class="sd">     *  Get Response</span></div><div class='line' id='LC192'><span class="sd">     *</span></div><div class='line' id='LC193'><span class="sd">     *  Returns the entire response from PayPal as a string including all the</span></div><div class='line' id='LC194'><span class="sd">     *  HTTP headers.</span></div><div class='line' id='LC195'><span class="sd">     *</span></div><div class='line' id='LC196'><span class="sd">     *  @return string</span></div><div class='line' id='LC197'><span class="sd">     */</span></div><div class='line' id='LC198'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getResponse</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC199'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="p">;</span></div><div class='line' id='LC200'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC201'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC202'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC203'><span class="sd">     *  Get Response Status</span></div><div class='line' id='LC204'><span class="sd">     *</span></div><div class='line' id='LC205'><span class="sd">     *  Returns the HTTP response status code from PayPal. This should be &quot;200&quot;</span></div><div class='line' id='LC206'><span class="sd">     *  if the post back was successful. </span></div><div class='line' id='LC207'><span class="sd">     *</span></div><div class='line' id='LC208'><span class="sd">     *  @return string</span></div><div class='line' id='LC209'><span class="sd">     */</span></div><div class='line' id='LC210'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getResponseStatus</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC211'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response_status</span><span class="p">;</span></div><div class='line' id='LC212'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC213'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC214'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC215'><span class="sd">     *  Get Text Report</span></div><div class='line' id='LC216'><span class="sd">     *</span></div><div class='line' id='LC217'><span class="sd">     *  Returns a report of the IPN transaction in plain text format. This is</span></div><div class='line' id='LC218'><span class="sd">     *  useful in emails to order processors and system administrators. Override</span></div><div class='line' id='LC219'><span class="sd">     *  this method in your own class to customize the report.</span></div><div class='line' id='LC220'><span class="sd">     *</span></div><div class='line' id='LC221'><span class="sd">     *  @return string</span></div><div class='line' id='LC222'><span class="sd">     */</span></div><div class='line' id='LC223'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getTextReport</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC224'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC225'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$r</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC226'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC227'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// date and POST url</span></div><div class='line' id='LC228'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">for</span> <span class="p">(</span><span class="nv">$i</span><span class="o">=</span><span class="mi">0</span><span class="p">;</span> <span class="nv">$i</span><span class="o">&lt;</span><span class="mi">80</span><span class="p">;</span> <span class="nv">$i</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span> <span class="nv">$r</span> <span class="o">.=</span> <span class="s1">&#39;-&#39;</span><span class="p">;</span> <span class="p">}</span></div><div class='line' id='LC229'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$r</span> <span class="o">.=</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">[&quot;</span><span class="o">.</span><span class="nb">date</span><span class="p">(</span><span class="s1">&#39;m/d/Y g:i A&#39;</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;] - &#39;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPostUri</span><span class="p">();</span></div><div class='line' id='LC230'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">use_curl</span><span class="p">)</span> <span class="nv">$r</span> <span class="o">.=</span> <span class="s2">&quot; (curl)</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC231'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">else</span> <span class="nv">$r</span> <span class="o">.=</span> <span class="s2">&quot; (fsockopen)</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC232'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC233'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// HTTP Response</span></div><div class='line' id='LC234'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">for</span> <span class="p">(</span><span class="nv">$i</span><span class="o">=</span><span class="mi">0</span><span class="p">;</span> <span class="nv">$i</span><span class="o">&lt;</span><span class="mi">80</span><span class="p">;</span> <span class="nv">$i</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span> <span class="nv">$r</span> <span class="o">.=</span> <span class="s1">&#39;-&#39;</span><span class="p">;</span> <span class="p">}</span></div><div class='line' id='LC235'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$r</span> <span class="o">.=</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="si">{</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getResponse</span><span class="p">()</span><span class="si">}</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC236'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC237'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// POST vars</span></div><div class='line' id='LC238'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">for</span> <span class="p">(</span><span class="nv">$i</span><span class="o">=</span><span class="mi">0</span><span class="p">;</span> <span class="nv">$i</span><span class="o">&lt;</span><span class="mi">80</span><span class="p">;</span> <span class="nv">$i</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span> <span class="nv">$r</span> <span class="o">.=</span> <span class="s1">&#39;-&#39;</span><span class="p">;</span> <span class="p">}</span></div><div class='line' id='LC239'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$r</span> <span class="o">.=</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC240'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC241'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">post_data</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC242'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$r</span> <span class="o">.=</span> <span class="nb">str_pad</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="mi">25</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;</span><span class="si">$value</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC243'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC244'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$r</span> <span class="o">.=</span> <span class="s2">&quot;</span><span class="se">\n\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC245'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC246'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$r</span><span class="p">;</span></div><div class='line' id='LC247'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC248'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC249'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC250'><span class="sd">     *  Process IPN</span></div><div class='line' id='LC251'><span class="sd">     *</span></div><div class='line' id='LC252'><span class="sd">     *  Handles the IPN post back to PayPal and parsing the response. Call this</span></div><div class='line' id='LC253'><span class="sd">     *  method from your IPN listener script. Returns true if the response came</span></div><div class='line' id='LC254'><span class="sd">     *  back as &quot;VERIFIED&quot;, false if the response came back &quot;INVALID&quot;, and </span></div><div class='line' id='LC255'><span class="sd">     *  throws an exception if there is an error.</span></div><div class='line' id='LC256'><span class="sd">     *</span></div><div class='line' id='LC257'><span class="sd">     *  @param array</span></div><div class='line' id='LC258'><span class="sd">     *</span></div><div class='line' id='LC259'><span class="sd">     *  @return boolean</span></div><div class='line' id='LC260'><span class="sd">     */</span>    </div><div class='line' id='LC261'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">processIpn</span><span class="p">(</span><span class="nv">$post_data</span><span class="o">=</span><span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC262'><br/></div><div class='line' id='LC263'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded_data</span> <span class="o">=</span> <span class="s1">&#39;cmd=_notify-validate&#39;</span><span class="p">;</span></div><div class='line' id='LC264'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC265'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$post_data</span> <span class="o">===</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span> </div><div class='line' id='LC266'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// use raw POST data </span></div><div class='line' id='LC267'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC268'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">post_data</span> <span class="o">=</span> <span class="nv">$_POST</span><span class="p">;</span></div><div class='line' id='LC269'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded_data</span> <span class="o">.=</span> <span class="s1">&#39;&amp;&#39;</span><span class="o">.</span><span class="nb">file_get_contents</span><span class="p">(</span><span class="s1">&#39;php://input&#39;</span><span class="p">);</span></div><div class='line' id='LC270'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC271'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s2">&quot;No POST data found.&quot;</span><span class="p">);</span></div><div class='line' id='LC272'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC273'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span> </div><div class='line' id='LC274'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// use provided data array</span></div><div class='line' id='LC275'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">post_data</span> <span class="o">=</span> <span class="nv">$post_data</span><span class="p">;</span></div><div class='line' id='LC276'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC277'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">post_data</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC278'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$encoded_data</span> <span class="o">.=</span> <span class="s2">&quot;&amp;</span><span class="si">$key</span><span class="s2">=&quot;</span><span class="o">.</span><span class="nb">urlencode</span><span class="p">(</span><span class="nv">$value</span><span class="p">);</span></div><div class='line' id='LC279'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC280'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC281'><br/></div><div class='line' id='LC282'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">use_curl</span><span class="p">)</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">curlPost</span><span class="p">(</span><span class="nv">$encoded_data</span><span class="p">);</span> </div><div class='line' id='LC283'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">else</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">fsockPost</span><span class="p">(</span><span class="nv">$encoded_data</span><span class="p">);</span></div><div class='line' id='LC284'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC285'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">strpos</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response_status</span><span class="p">,</span> <span class="s1">&#39;200&#39;</span><span class="p">)</span> <span class="o">===</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC286'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s2">&quot;Invalid response status: &quot;</span><span class="o">.</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response_status</span><span class="p">);</span></div><div class='line' id='LC287'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC288'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC289'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">strpos</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="p">,</span> <span class="s2">&quot;VERIFIED&quot;</span><span class="p">)</span> <span class="o">!==</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC290'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC291'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nb">strpos</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">response</span><span class="p">,</span> <span class="s2">&quot;INVALID&quot;</span><span class="p">)</span> <span class="o">!==</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC292'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC293'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC294'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s2">&quot;Unexpected response from PayPal.&quot;</span><span class="p">);</span></div><div class='line' id='LC295'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC296'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC297'>&nbsp;&nbsp;&nbsp;&nbsp;</div><div class='line' id='LC298'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC299'><span class="sd">     *  Require Post Method</span></div><div class='line' id='LC300'><span class="sd">     *</span></div><div class='line' id='LC301'><span class="sd">     *  Throws an exception and sets a HTTP 405 response header if the request</span></div><div class='line' id='LC302'><span class="sd">     *  method was not POST. </span></div><div class='line' id='LC303'><span class="sd">     */</span>    </div><div class='line' id='LC304'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">requirePostMethod</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC305'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// require POST requests</span></div><div class='line' id='LC306'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;REQUEST_METHOD&#39;</span><span class="p">]</span> <span class="o">&amp;&amp;</span> <span class="nv">$_SERVER</span><span class="p">[</span><span class="s1">&#39;REQUEST_METHOD&#39;</span><span class="p">]</span> <span class="o">!=</span> <span class="s1">&#39;POST&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC307'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">header</span><span class="p">(</span><span class="s1">&#39;Allow: POST&#39;</span><span class="p">,</span> <span class="k">true</span><span class="p">,</span> <span class="mi">405</span><span class="p">);</span></div><div class='line' id='LC308'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">Exception</span><span class="p">(</span><span class="s2">&quot;Invalid HTTP request method.&quot;</span><span class="p">);</span></div><div class='line' id='LC309'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC310'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC311'><span class="p">}</span></div><div class='line' id='LC312'><br/></div></pre></div>
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

      <p>&copy; 2012 <span title="0.05375s from fe14.rs.github.com">GitHub</span> Inc. All rights reserved.</p>
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

    
    
    <span id='server_response_time' data-time='0.05522' data-host='fe14'></span>
    
  </body>
</html>


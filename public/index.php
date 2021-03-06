<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8" /> 
        <meta name="viewport" content="width=device-width" />
        <title>Portfolio ‹ Joey Day</title>
        <link rel="stylesheet" href="/css/reset.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Copse' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="fixed-background-hack">&nbsp;</div>
        <div class="content">
            <h1>The Web Design Portfolio of <strong>Joey Day</strong></h1>
            <a href="http://joeyday.com"><img src="/images/lyte-thumb.png" alt="“Lyte” WordPress theme thumbnail" /> Fig. 1: Joey’s Blog<br /><small>“Lyte” WordPress theme, 2014</small></a>
            <a href="http://totascriptura.org/view/Providence"><img src="/images/totascriptura-thumb.png" alt="“Skinny” MediaWiki skin thumbnail" /> Fig. 2: Tota Scriptura<br /><small>“Skinny” MediaWiki skin, 2013</small></a>
            <a href="http://papers.jday.us/view/efas"><img src="/images/papers-thumb.png" alt="“A4” MediaWiki skin thumbnail" /> Fig. 3: Joey’s Papers<br /><small>“A4” MediaWiki skin, 2011</small></a>
            <a href="/christiangiftandbible"><img src="/images/christiangiftandbible-thumb.png" alt="Bookstore Drupal theme thumbnail" /> Fig. 4: Christian Gift & Bible<br /><small>Drupal theme, 2007</small></a>
            <a href="/fellowsites"><img src="/images/fellowsites-thumb.png" alt="Web host WordPress theme thumbnail" /> Fig. 5: FellowSites<br /><small>WordPress theme, 2005</small></a>
            <a href="/union"><img src="/images/union-thumb.png" alt="A. Ray Olpin Union website thumbnail" /> Fig. 6: A. Ray Olpin Union<br /><small>static brochure site, 2003</small></a>
            <?php /* <a href="/syzygy"><img src="/images/syzygy-thumb.png" alt="“Syzygy” WordPress theme thumbnail" /> Fig. 5: Syzygy<br /><small>WordPress theme, 2006</small></a> */ ?>
        </div>
        <div class="footer">
            <div class="links">
                <p><a href="http://jday.us/resume"><i class="icon-download"></i> Résumé</a> <a href="http://jday.us/github"><i class="icon-github-alt"></i> Github</a> <a href="http://jday.us/twitter"><i class="icon-twitter"></i> Twitter</a></p>
            </div>
            <div class="copyright">
                <p>&copy; <?php echo "<small>" . dec2rom(2011) . "</small>"; if (date('Y') > 2011) echo "–<small>" . dec2rom(date('Y')) . "</small>"; ?> Joey Day</p>
            </div>
        </div>
    </body>
</html>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2804956-4']);
  _gaq.push(['_setDomainName', 'joeyday.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<?php
function dec2rom($N) {
    $c='IVXLCDM';
    for($a=5,$b=$s='';$N;$b++,$a^=7)
        for($o=$N%$a,$N=$N/$a^0;$o--;$s=$c[$o>2?$b+$N-($N&=-2)+$o=1:$b].$s);
    return $s;
}
?> 
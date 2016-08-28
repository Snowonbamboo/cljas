<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>DPKO CLJAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
    <!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f)}})(document,window.mixpanel||[]);
mixpanel.init("da60da18009e93a0a13b03bf93404331");</script><!-- end Mixpanel -->
  </head>
  <body id="about">

		<section class="container">
			<div class="content row">
        <?php include "_/components/php/header.php"; ?>
        
				<section class="main col col-lg-8">
				  <?php include "_/components/php/intro-carousel.php"; ?>
				  <?php include "_/components/php/introduction-table-english.php"; ?>
				</section>
				
				<!-- main -->
				<section class="sidebar col col-lg-4">
                
                 <?php include "_/components/php/introduction-table-english-aside.php"; ?>
				</section>
				
			<!-- sidebar -->
			</div>
			
			<!-- content -->
    <?php include "_/components/php/footer.php"; ?>
		</section>
		<!-- container -->

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
     <script type="text/javascript" src=""></script>

<script>   
   $('#buttonName').click(function(event) {
event.preventDefault();
var cb = generate_callback($(this));

mixpanel.track("Module Clicked", {moduleName: $(event.currentTarget).attr('data-module')}, cb);
setTimeout(cb, 500);
});

function generate_callback(a) {
return function() {
window.location = a.attr("href");
}
}

    </script>
  </body>
</html>

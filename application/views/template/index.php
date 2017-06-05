<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>SMP NEGERI 9</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/style/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style/color/red.css" media="all" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/style/css/prettyPhoto.css"  />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style/type/museo.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style/type/ptsans.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/style/type/charis.css" media="all" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/transify.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.aw-showcase.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.superbgimage.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/jquery.slickforms.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.forms').dcSlickForms();
});
</script>
<script type="text/javascript">

$(document).ready(function()
{
	$("#showcase").awShowcase(
	{
		content_width:			900,
		content_height:			400,
		auto:					true,
		interval:				3000,
		continuous:				false,
		arrows:					true,
		buttons:				true,
		btn_numbers:			true,
		keybord_keys:			true,
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true,
		stoponclick:			false,
		transition:				'fade', /* hslide/vslide/fade */
		transition_delay:		0,
		transition_speed:		500,
		show_caption:			'onload' /* onload/onhover/show */
	});
});

</script>
<script type="text/javascript">
$(document).ready(function() {

      var
        speed = 1000,   // animation speed
        $wall = $('#portfolio .items'),

        masonryOptions = {         // initial masonry options

          itemSelector: '.box:not(.invis)',
          animate: true,
          animationOptions: {
            duration: speed,
            queue: false
          }
        };

		$wall.imagesLoaded(function(){

			$wall.masonry(masonryOptions);

			// Create array of filters from link href
			var arrFilter = [];
			$('#filtering-nav a').each(function(){
				fhash = $(this).attr('href').replace('#','');
				if(fhash != 'all'){
					arrFilter.push(fhash);
				}
			});

			//  Get the parameter value after the # symbol
			var url=document.URL.split('#')[1];
			if(url == undefined){
				url = 'all';
			}
			$('#filtering-nav a.'+url).parent().addClass('active');

			if(jQuery.inArray(url, arrFilter) > '-1'){
				// set masonry options animate to false
				masonryOptions.animate = false;
				// hide boxes that don't match the filter class
				$wall.children().not('.'+url).toggleClass('invis').hide();
			}
		//	imageSetCss($(".box"));
			// run masonry again
			$wall.masonry(masonryOptions);
		//	imageFadeIn($(".box"));
		$wall.animate({opacity: 0.2},1000);

		});

		$('#filtering-nav a').click(function(e){
			var color = $(this).attr('class');
			filterClass = '.' + color;
			$('#filtering-nav li').removeClass('active');
			$(this).parent().addClass('active');

			if(filterClass=='.all') {
			  // show all hidden boxes
			  $wall.children('.invis').toggleClass('invis').fadeIn(speed);
			} else {
			  // hide visible boxes
			  $wall.children().not(filterClass).not('.invis').toggleClass('invis').fadeOut(speed);
			  // show hidden boxes
			  $wall.children(filterClass+'.invis').toggleClass('invis').fadeIn(speed);
			}
			$wall.masonry({animate: true});
			// set hash in URL
			location.hash = color;
			e.preventDefault();
		});
});
$.fn.imagesLoaded = function(a) {
	var
	b=this.find("img"),
	c=[],
	d=this,
	e=b.length;

	if(!b.length){
		a.call(this);
		return this
	}
	b.one("load error",function(){
		--e===0&&(e=b.length,b.one("load error",function(){
			--e===0&&a.call(d)}).each(function(){
				this.src=c.shift()
			})
		)}
	).each(function(){
		c.push(this.src),this.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="
	});
	return this
};
  </script>

</head>
<body>
<!-- Fullscreen backgrounds -->
<?php echo $bg; ?>
<!-- End Fullscreen backgrounds -->
<!-- Begin Wrapper -->
<div id="wrapper">
  <!--header-->
  <?php echo $header;?>
  <!--end header-->
  <!-- Begin Menu -->
  <?php echo $nav; ?>
  <!-- End Menu -->

  <!-- Begin Container -->
  <div id="container" class="opacity">

    <!-- Begin Showcase -->
    <!--content-->
    <?php echo $content;?>
    <!--end content-->
    <!-- End Latest Works -->

    <!--footer-->
    <?php echo $footer; ?>
    <!--end footer-->
  </div>
  <!-- End Container -->

  <div id="copyright" class="opacity">
    <p>© 2017 Rembes Elite Team. All Right Reserved.</p>
  </div>
</div>
<!-- End Wrapper -->

<script type="text/javascript" src="<?php echo base_url();?>assets/style/js/scripts.js"></script>
</body>
</html>

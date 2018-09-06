// event pada saat link di klik
$('.page-scroll').on('click', function (e) {

	// ambil isi href
	var tujuan = $(this).attr('href');
	// tangkap elemen yang bersangkutan
	var elemen_tujuan = $(tujuan);

	// Pindahkan scroll

	$('html,body').animate({
		scrollTop: elemen_tujuan.offset().top - 50
	}, 1100, 'easeInOutExpo');

	// console.log(elemen_tujuan.offset().top);
});

// Parallax
// About
$(window).on('load', function(){
	$('.pKiri').addClass('pMuncul');
	$('.pKanan').addClass('pMuncul');
});




		// jumbotron
$(window).scroll(function() {
	var wscroll = $(this).scrollTop();

	$('.jumbotron img').css({
		'transform' : 'translate(0px, '+ wscroll/4 +'%)'
	});

	$('.jumbotron h1').css({
		'transform' : 'translate(0px, '+ wscroll/2 +'%)'
	});

	$('.jumbotron p').css({
		'transform' : 'translate(0px, '+ wscroll/1.2 +'%)'
	});

		// portfolio
	if (wscroll > $('.portfolio').offset().top - 250) {
		$('.portfolio .thumbnail').each(function(i) {
			setTimeout(function(){
				$('.portfolio .thumbnail').eq(i).addClass('muncul')	
			}, 400 * (i+1));
		})


		// 
	}


});
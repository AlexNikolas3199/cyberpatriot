<article id="tournament">
	<h2>Пресс-центр</h2>
	
	<div class="gallery">
		<a href="img/gallery1.jpg" data-lightbox="mygallery"data-title="Bair speaks a speech"><img src="img/gallery1-min.jpg" alt=""></a>
		<a href="img/gallery2.jpg"data-lightbox="mygallery"><img src="img/gallery2-min.jpg" alt=""></a>
		<a href="img/gallery3.jpg"data-lightbox="mygallery"><img src="img/gallery3-min.jpg" alt=""></a>
		<a href="img/gallery4.jpg"data-lightbox="mygallery"><img src="img/gallery4-min.jpg" alt=""></a>
		<a href="img/gallery5.jpg"data-lightbox="mygallery"><img src="img/gallery5-min.jpg" alt=""></a>
		<a href="img/gallery6.jpg"data-lightbox="mygallery"><img src="img/gallery6-min.jpg" alt=""></a>
		<a href="img/gallery7.jpg"data-lightbox="mygallery"><img src="img/gallery7-min.jpg" alt=""></a>
		<a href="img/gallery8.jpg"data-lightbox="mygallery"><img src="img/gallery8-min.jpg" alt=""></a>
		<a href="img/gallery9.jpg"data-lightbox="mygallery"><img src="img/gallery9-min.jpg" alt=""></a>
		<a href="img/gallery10.jpg"data-lightbox="mygallery"><img src="img/gallery10-min.jpg" alt=""></a>
		<a href="img/gallery11.jpg"data-lightbox="mygallery"><img src="img/gallery11-min.jpg" alt=""></a>
		<a href="img/gallery12.jpg"data-lightbox="mygallery"><img src="img/gallery12-min.jpg" alt=""></a>
	</div
></article>
<script>
	var body =  document.querySelector('body')
	var gallery = document.querySelector('.gallery')
	for(let i=0;i<gallery.children.length;i++){
		let item = gallery.children[i];
		item.addEventListener('click', function(){
			body.style.overflow = "hidden";

			let lb_close = document.querySelector('.lb-close');
			lb_close.addEventListener('click', function(){
				body.style.overflow = "auto";
			});

			let lightboxOverlay = document.querySelector('.lightboxOverlay');
			lightboxOverlay.addEventListener('click', function(){
				body.style.overflow = "auto";
			});
		});
	};
</script>
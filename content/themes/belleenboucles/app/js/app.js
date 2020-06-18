var app = {
  init: function () {
    app.initEventListener();
    app.HandleStickyHeader();
    app.showSlides();
    
    console.log('init');

    
  },

    
  showSlides: function()  {

    if (!this.slideIndex) {
			this.slideIndex = 0;
		}
		var i;
		var slides = document.getElementsByClassName("mySlides");
		for (i = 0; i < slides.length; i++) {
			console.log(slides[i]);
			slides[i].style.display = "none";
		}

		this.slideIndex++;
		slides[this.slideIndex - 1].style.display = "block";
		if (this.slideIndex > (slides.length - 1)) { this.slideIndex = 0 }

		setTimeout( () => { this.showSlides()} , 5000);
	
      
  }, 
      
  initEventListener: function () {

    let burgerMenuOpenAndCloseButton = document.querySelector('#i');
    burgerMenuOpenAndCloseButton.addEventListener('click', app.handleOpenAndCloseMenu);
    //window.addEventListener('scroll' , app.HandleStickyHeader);
    
  },
  

  handleOpenAndCloseMenu: function () {
    console.log('click');
    // let sidebarMenu = document.querySelector('.sidebar__nav');
    let sidebar = document.querySelector('.sidebar__nav');
    sidebar.classList.toggle('open');
    let icon = document.getElementById('i');

    if (icon.classList.contains('fa-times') && sidebar.classList.contains('open')) {
      icon.className = 'fa fa-bars';
    }
    else if (icon.classList.contains('fa-bars') && sidebar.classList != 'open') {
      icon.className = 'fa fa-times';
    } else {
      icon.className = 'fa fa-bars';
    }
  },

  HandleStickyHeader: function () {

    const header = document.querySelector('.header');
    const scrollUp = "scroll-up";
    const scrollDown = "scroll-down";
    let lastScroll = 0;

    window.addEventListener("scroll", () => {
      const currentScroll = window.pageYOffset;
      if (currentScroll == 0) {
        header.classList.remove(scrollUp);
        return;
      }

      if (currentScroll > lastScroll && !header.classList.contains(scrollDown)) {
        // down
        header.classList.remove(scrollUp);
        header.classList.add(scrollDown);
      } else if (currentScroll < lastScroll && header.classList.contains(scrollDown)) {
        // up
        header.classList.remove(scrollDown);
        header.classList.add(scrollUp);
      }


      lastScroll = currentScroll;
    });


  },

}

document.addEventListener("DOMContentLoaded", app.init);


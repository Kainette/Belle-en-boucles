var app = {
  init: function () {
    app.initEventListener();
    app.HandleStickyHeader();
    console.log('init');
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
    

    // let header = document.querySelector('.header');
    // let lastScrollValue = 0;
    // let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    // console.log(scrollTop)
    
    // if (scrollTop > lastScrollValue) {
    //   header.classList.add('hidden');
    // }else if (window.scrollTop) {
    //   header.classList.remove('hidden');
    // } else {
    //   header.classList.remove('hidden');
    // }
    // lastScrollValue = scrollTop;

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
  }

}
 
document.addEventListener("DOMContentLoaded", app.init);


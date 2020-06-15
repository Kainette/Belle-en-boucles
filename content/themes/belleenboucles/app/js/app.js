var app = {
  init: function () {
    app.initEventListener();
    console.log('init');
  },

  initEventListener: function () {

    let burgerMenuOpenAndCloseButton = document.querySelector('#i');
    burgerMenuOpenAndCloseButton.addEventListener('click', app.handleOpenAndCloseMenu);
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
  }
}

document.addEventListener("DOMContentLoaded", app.init);


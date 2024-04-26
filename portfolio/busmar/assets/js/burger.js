function myFunction() {
    document.getElementById("burger").classList.toggle("show");
  }
  
  window.onclick = function(event) {
    if (!event.target.matches('.openmenu')) {
  
      var dropdowns = document.getElementsByClassName("burger-menu-item");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  
  
  }
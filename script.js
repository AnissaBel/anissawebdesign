        

  //----------NAV BURGER ----------------------//

  var nav = document.getElementById("topNav");
  var main = document.getElementById("main");
  var menu = document.getElementsByClassName("menuitems");
  var close = document.getElementById("closebtn");


  //default to measure if/else from
  nav.style.height = "60px";
  main.style.marginTop = "60px";
  for (i = 0; i < menu.length; i++){menu[i].style.marginTop="100px";};

  close.addEventListener("click", function(){
      var menuIcon = close.children;
      for (i = 0; i < menuIcon.length; i++){
          menuIcon[i].classList.toggle("active");
      }   
  });

  function navToggle() {	
      //to close
      if (nav.style.height <= "280px") {
          nav.style.height = "60px";
          main.style.marginTop = "60px";
      
          var i = 0;
          for (i = 0; i < menu.length; i++){
              menu[i].style.opacity="0.0";
              menu[i].style.marginTop="100px";
          };
          document.body.style.backgroundColor = "rgba(0,0,0,)";
      
      } 
      //to open
      else if (nav.style.height <= "60px") {
          nav.style.height = "280px";
          main.style.marginTop = "0px";
          var i = 0;
          for (i = 0; i < menu.length; i++){
              menu[i].style.opacity="1.0";
              menu[i].style.marginTop="0px";
          };
          document.body.style.backgroundColor = "rgba(0,0,0,)";
      
      }

      $(".menuitems").on("click", function(){
          $("#closebtn span").removeClass("active")
          

      });

  };

// Global
(function(){
  app.global = {
      init: function(){ // Load all global functions here
          console.log("load global functions");
          app.global.loadHeader();
      },
      loadHeader: function(){ // Some specific function
          console.log("loadHeader()");
      }
  }
  
  // Run the global stuff
  app.global.init();
  // back button
  
  function goBack() {
      window.history.back();
    }
  //   password
  function show(a) {
      var x=document.getElementById(a);
      var c=x.nextElementSibling
      if (x.getAttribute('type') == "password") {
      c.removeAttribute("class");
      c.setAttribute("class","fa fa-unlock");
      x.removeAttribute("type");
        x.setAttribute("type","text");
      } else {
      x.removeAttribute("type");
        x.setAttribute('type','password');
     c.removeAttribute("class");
      c.setAttribute("class","fa fa-lock");
      }
    }
  
  });
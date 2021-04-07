
                                  // Example starter JavaScript for disabling form submissions if there are invalid fields
                                  (function() {
                                    'use strict';
                                    window.addEventListener('load', function() {
                                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                      var forms = document.getElementsByClassName('needs-validation');
                                      // Loop over them and prevent submission
                                      var validation = Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                          if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                          }
                                          form.classList.add('was-validated');
                                        }, false);
                                      });
                                    }, false);
                                  })();
                                   
    $('#menu-control').click(function(){
        $('.body').toggleClass('collap');
        // alert("hi")
      }); 



      // uploade image


      function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
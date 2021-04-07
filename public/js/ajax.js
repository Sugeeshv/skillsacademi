


$(document).ready(function(){
    

    //display modal form for product EDIT ***************************
    $(document).on('click','.open_modal',function(){
        var id = $(this).val();
       
        // Populate Data in Edit Modal Form
        $.ajax({
            type: "GET",
            url: 'blog-catogery-edit/' + id,
            success: function (data) {
                console.log(data);
                $('#id').val(data.id);
                $('#catogeryname').val(data.catogery_name);
                $('#shortdescription').val(data.short_description);
                $('#updatedby').val(data.updated_by);
                // $('#catogeryname').val(data.catogery_name);
                $('#btn-save').val("update");
                $('#myModal').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });



});
$(document).ready(function(){

    //display modal form for product EDIT ***************************
    $(document).on('click','.tag',function(){
        var id = $(this).val();
       
        // Populate Data in Edit Modal Form
        $.ajax({
            type: "GET",
            url: 'tag-management-edit/' + id,
            success: function (data) {
                console.log(data);
                $('#id').val(data.id);
                $('#name').val(data.tag_name);
                $('#btn-save').val("update");
                $('#myModal').modal('show');
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });


});


   
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      
        $(".form").on("submit", function(event){
            event.preventDefault();
     
            var formValues= $(this).serialize();
            var id = $('#id').val();
            $.post("tag-management/"+id, formValues, function(data){
                // Display the returned data in browser
                $("#result").html(data);
            });
        });
    });
        
    $(document).ready(function() {
        $('.fm').click(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    
            var id =($(this).attr("data-id"));
                 console.log(id)
            $.ajax({
                 type:"POST",
                 dataType:'json',
                 url:"blog-comments-control/"+id,
                 success : function(results) {
                     alert(results);
                 },
                 erro: function(results){
                    alert(results);
                 }
            }); 
        });

        // testimonial
        
            $('.fm2').click(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
        
                var id =($(this).attr("data-id"));
                     console.log(id)
                $.ajax({
                     type:"POST",
                     dataType:'json',
                     url:"/testimonial-control/"+id,
                     success : function(results) {
                         alert(results);
                     },
                     erro: function(results){
                        alert(results);
                     }
                }); 
            });
    // newblog
    
    $('.blogcontrol').click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var id =($(this).attr("data-id"));
             console.log(id)
        $.ajax({
             type:"POST",
             dataType:'json',
             url:"blog-list-control/"+id,
             success : function(results) {
                 alert(results);
             },
             erro: function(results){
                alert(results);
             }
        }); 
});  
        });  
    

    
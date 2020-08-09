    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>}
    <script src="js/jquery-3.5.1.js"></script>
    <script>
 $(document).ready(function() {        
     $("#alertSI").hide();
     $("#alertNO").hide();
    $("#form1").submit(function(e){
        e.preventDefault();    
        user = $.trim($("#user").val());
        pass = $.trim($("#pass").val());
        if(user.length>0 && pass.length>0){           
            $("#alertSI").fadeTo(2000, 500).slideUp(500, function() {
              $("#alertSI").slideUp(500);
            });        
        }else{
            $("#alertNO").fadeTo(2000, 500).slideUp(500, function() {
              $("#alertNO").slideUp(500);
            });
        }
        });   
});
     </script>
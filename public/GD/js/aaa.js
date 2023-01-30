$(document).ready(function(){
	
		$("#btn-armadas").click(function () {	
			
			$('.armadas').show(1000);
            $('.componentes').hide(1000);
            $('.monitores').hide(1000);
            $('.accesorios').hide(1000);
			});


         $("#btn-componentes").click(function () {	
            $('.accesorios').hide(1000);
            $('.componentes').show(1000);
            $('.monitores').hide(1000);
            $('.armadas').hide(1000);
    
    
                });
                
       $("#btn-monitores").click(function () {	
            $('.accesorios').hide(1000);
            $('.componentes').hide(1000);
            $('.monitores').show(1000);
            $('.accesorios').hide(1000);
    });
                $("#btn-accesorios").click(function () {	
                 
                   $('.armadas').hide(1000);
                   $('.componentes').hide(1000);
                   $('.monitores').hide(1000);
                   $('.accesorios').show(1000);
        
            
                      });

                      $("#btn-todo").click(function () {	
                        $('.todo').show(1000);
                        $('.componentes').show(1000);
                        $('.monitores').show(1000);
                        $('.accesorios').show(1000);
                        $('.armadas').show(1000);
                 
                           });
        
});






/*

<script>
    $(document).ready(function() {
        $("#todos").click(function() {
            $(".armadas").show();
        });
        $("#c1").click(function() {
            $(".accesorios").hide();
        });
        $("#c1").click(function() {
            $(".monitores").show();
        });
        $("#c2").click(function() {
            $(".componentes").hide();
        });
        $("#c2").click(function() {
            $(".pintura").show();
        });
        $("#c3").click(function() {
            $(".obra").hide();
        });
        $("#c3").click(function() {
            $(".escultura").show();
        });
        $("#c4").click(function() {
            $(".obra").hide();
        });
        $("#c4").click(function() {
            $(".artesania").show();
        });
        $("#c5").click(function() {
            $(".obra").hide();
        });
        $("#c5").click(function() {
            $(".grabado").show();
        });
    });
</script>






    
    	$(".btn-componentes").click(function () {	 
			$('.componentes').fadeToggle("slow");
			});
		$(".btn-monitores").click(function () {	 
			$('.monitores').fadeToggle("slow");
			});
		 
         $(".btn-accesorios").click(function () {	 
			$('.accesorios').fadeToggle("slow");
			});
		$(".btn-todo").click(function () {	 
			$('.todo').fadeToggle("slow");
			}); */ 
/**
 * 
 */
jQuery(document).ready(function(){
	$(".mono-img").change(function(event){
		   var input = $(this);
		   var file = event.target.files[0];
		   var reader = new FileReader();
		   reader.onloadend = function(){
			   input.parent().next('.img-container').css('background-image', "url(" + reader.result + ")");
		   }
		   if(file){
		      reader.readAsDataURL(file);
		   }
		});
});

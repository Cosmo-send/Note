$(document).ready(function(){
		
		$('#button_authorization').click(function(){
			$('#hover').fadeIn(600);
			$('#overlay_auth').fadeIn(600);
			$('#close_auth_form').fadeIn(600);
		});
		$('#hover, #close_auth_form, #close_sitting_form').click(function(){
			$('#hover').fadeOut(600);
			$('#overlay_auth').fadeOut(600);
			$('#overlay_reg').fadeOut(600);
			$('#overlay_recovery').fadeOut(600);
			$('#overlay_setting').fadeOut(600);
		});	
		$('#register').click(function(){
			$('#overlay_reg').fadeIn(600);
			$('#close_auth_form').fadeOut(600);
		});
		$('#recovery_pass_button').click(function(){
			$('#overlay_recovery').fadeIn(600);
			$('#close_auth_form').fadeOut(600);
		});
		$('.close_form').click(function(){
			$('#overlay_reg').fadeOut(600);
			$('#overlay_recovery').fadeOut(600);
			$('#close_auth_form').fadeIn(600);
		});
  		$('#button_feedback').click(function () { 
   			var y_pos=$('#contact').offset().top;
   		$('body').animate( { scrollTop: y_pos }, 1100 );
   		$('#text_comment').focus();
 		  });
  		$('#repeat_recovery').click(function () { 
  			$('#recovery_password').fadeOut(10);
			$('#recovery_for_password').fadeOut(10);
			$('#repeat_recovery').fadeOut(10);
			$('#recovery_email').fadeIn(10);
			$('#recovery_for_email').fadeIn(10);
  		});
  		$('#setting').click(function () { 
  			$('#hover').fadeIn(600);
			$('#overlay_setting').fadeIn(600);
  		});
 });
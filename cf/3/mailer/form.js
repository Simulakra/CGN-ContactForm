jQuery(document).ready(function(){
	
 // ==== CONTACT FORM SECTION ==== //
 jQuery('#slickform').submit(
	function slickcontactparse() {
		
		// EMAIL VALIDATION FUNCTION
		var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		
		// EDIT THIS SECTION IF DIFFERENT FORM ELEMENTS
		// Values
		var successmessage = "Mesajiniz için tesekkür ederiz !";
		var failedmessage = "Bir hata olustu, lütfen tekrar deneyiniz!";
		var usersemail = jQuery('#email');
		var usersname = jQuery('#name');
		var userscomment = jQuery('#commentarea');
		var isvalid = 1;
		var url = 'contact.php'; 		// mesaj gönderildikten sonra yönlendirilecek sayfa
		
		//Checking information is correct before sending data
		
		
		//CHECKING EMAIL IS PRESENT AND IS VALID
		if (usersemail.val() == "") {
			jQuery(".contactmessage").html('Lütfen mail adresinizi giriniz.').fadeIn().delay(1000).fadeOut();
			jQuery('input[type=submit]', jQuery("#slickform")).removeAttr('disabled');
			return false;
		}
		
		//CHECKING NAME IS PRESENT
		if (usersname.val() == "") {
			jQuery(".contactmessage").html('Lütfen isminizi giriniz.').fadeIn().delay(1000).fadeOut();
			jQuery('input[type=submit]', jQuery("#slickform")).removeAttr('disabled');
			return false;
		}
		
		//CHECKING COMMENT IS PRESENT
		if (userscomment.val() == "") {
			jQuery(".contactmessage").html('Lütfen mesajinizi giriniz.').fadeIn().delay(1000).fadeOut();
			jQuery('input[type=submit]', jQuery("#slickform")).removeAttr('disabled');
			return false;
		}
		
		var valid = emailReg.test(usersemail.val());
		
		if(!valid) {
			jQuery(".contactmessage").html('Lütfen geçerli bir mail adresi giriniz.').fadeIn().delay(1000).fadeOut();
			jQuery('input[type=submit]', jQuery("#slickform")).removeAttr('disabled');
			return false;
		}
		//CHECKING EMAIL IS PRESENT AND IS VALID
		
		/* 
		 *
		 * POSTING DATA USING AJAX AND
		 * THEN RETREIVING DATA FROM PHP SCRIPT
		 *
		*/
		
		jQuery.post(url,{ usersname: usersname.val(), usersemail: usersemail.val(), userscomment: userscomment.val(), isvalid: isvalid } , function(data) {
			
			if(data == 'success'){
				jQuery("#email").val('');
				jQuery("#commentarea").val('');
				jQuery("#name").val('');
				jQuery(".contactmessage").html(successmessage).fadeIn().delay(1000).fadeOut();
				jQuery('input[type=submit]', jQuery("#slickform")).removeAttr('disabled');
			
			} else {
				jQuery(".contactmessage").html(failedmessage).fadeIn().delay(1000).fadeOut();
				jQuery('input[type=submit]', jQuery("#slickform")).removeAttr('disabled');
				return false;
				
			}
			
		});
		
		/* 
		 *
		 * POSTING DATA USING AJAX AND
		 * THEN RETREIVING DATA FROM PHP SCRIPT
		 *
		*/
		
	}
	
);
/*
 * AJAX Section
 * This function will handle the contact process through AJAX
 */
// ==== CONTACT FORM SECTION ==== //		
	
});

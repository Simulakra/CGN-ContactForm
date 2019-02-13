function sendMail() {
$.ajax({
url:'cgnmail/captcha_get.php',
success:function(data)
{ 
    swal({
     title: "Gönderiliyor",
     text: "Mesajınız bize ulaştırılıyor...",
     type: "success",
     timer: 3000
     });
    var truecaptcha = data; 
    var camecaptcha = $("#captcha").val();
    //captcha input id'si

    if( truecaptcha==camecaptcha ){

    //tüm input id'leri buraya
    var empty_one = false;
    if( !$("#userName").val() ){ $("#userName").attr('placeholder','Bu Alan Zorunludur.'); empty_one = true; }
    if( !$("#userEmail").val() ){ $("#userEmail").attr('placeholder','Bu Alan Zorunludur.'); empty_one = true; }
    if( !$("#subject").val() ){ $("#subject").attr('placeholder','Bu Alan Zorunludur.'); empty_one = true; }
    if( !$("#content").val() ){ $("#content").attr('placeholder','Bu Alan Zorunludur.'); empty_one = true; }
    if(empty_one){ alert("Zorunlu Alanları Doldurunuz"); return; }

    var mailBody = "CGN Mail Form";
    mailBody += "<br>Name: " + $("#userName").val();
    mailBody += "<br>Mail: " + $("#userEmail").val();
    mailBody += "<br>Subj: " + $("#subject").val();
    mailBody += "<br>Mesg: " + $("#content").val();

    //mail settings
    Email.send({
    Host : "mail.hostdomain.com",
    From : "from@mail.com",
    Username : "from@mail.com",
    Password : "password",
    To : 'to@mail.com',
    Subject : "This is the subject",
    Body : mailBody
    }).then(message => mailResult(message));

    }
    else{
        //"warning", "error", "success", "info"
        swal("Captcha Hatası!", "Lütfen Tekrar Deneyin!", "error");
        refreshCaptcha();
    }
}
});
}

function refreshCaptcha() {
    $("#captcha_code").attr('src','cgnmail/captcha_code.php');
}

function mailResult(message) {
    if(message=="OK")
        swal("Gönderildi", "Mesajınız Bize Ulaştı", "success");
    else
        swal("Mail Gönderme Hatası Oluştu", "Mesaj:\n"+message, "warning");

}
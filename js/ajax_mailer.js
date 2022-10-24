function send_mail() {
    var name_sender=document.getElementById("name_sender").value;
    var mail_sender=document.getElementById("mail_sender").value;
    var subject_sender=document.getElementById("subject_sender").value;
    var message_sender=document.getElementById("message_sender").value;
    var mail= {
        name: name_sender,
        mail: mail_sender,
        subject: subject_sender,
        message: message_sender
    };
    $.ajax({
        type: "POST",
        url: "./mailsender.php",
        data: mail,
        success: function(data)
        {  
            if (data == true)
            {
               alert("Mensaje enviado Exitosamente!");
            }
            else
            {
                alert('Ha ocurrido un error!');
            }
       }
   });
}
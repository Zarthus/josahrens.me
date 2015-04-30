$(document).ready(function() {
    /* Reverse, and un-rot13 the email address */
    var mail = 'rz.fareunfbw@rz';
    mail = mail.split("").reverse().join("")
        .replace(/[a-zA-Z]/g,function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);});

    /* Set mail to actual email addr. */
    var mailId = $('.js-display-email');
    mailId.text(mail);
    mailId.attr('href', 'mailto:' + mail);
    mailId.attr('title', 'Send me an email: ' + mail);
    mailId.removeAttr('class');
});

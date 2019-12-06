
function add_block(e) {
    window.location.href=$(e).attr('data-url')+''
}
function show_social(e) {
    window.location.href=$(e).attr('data-link')+''
}

function show_messengers(e) {

    switch ($(e).attr('data-name')) {
        case "telegram":
            window.location.href='https://t.me/'+$(e).attr('data-telegram_number')+''
            break;
        case "viber":
            window.location.href='https://chats.viber.com/'+$(e).attr('data-viber_id')+''
            break;
        case "skype":
            window.open('skype:'+$(e).attr('data-skype_id')+'?call');
            break;
        case "facebook":
            window.location.href='https://m.me/'+$(e).attr('data-facebook_number')+''
            break;
        case "envelope":
            window.open('mailto:'+$(e).attr('data-email')+'?subject='+$(e).attr('data-email_subject')+'&body='+$(e).attr('data-email_body')+'');
            break;
        case "whatsapp":
            window.location.href='https://api.whatsapp.com/send?phone='+$(e).attr('data-number')+'&text='+$(e).attr('data-watsapp_text')+'';
            break;
        case "phone":
            window.open('tel:'+$(e).attr('data-number')+'');
            break;

    }


}

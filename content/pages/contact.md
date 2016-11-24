Title: Contato
page-order: 2

<form id="contactform" class="uk-form" method="POST">
    <input type="text" name="_gotcha" style="display:none" />
    <input type="hidden" name="_next" value="//rschalch.github.io/pages/thank-you.html" />
    <input type="hidden" name="_subject" value="Blog contact" />
    <div class="uk-form-row"><input type="text" class="uk-form-large uk-form-width-large" name="name" placeholder="Your name"></div>
    <div class="uk-form-row"><input type="email" class="uk-form-large uk-form-width-large" name="_replyto" placeholder="Your email"></div>
    <div class="uk-form-row"><textarea name="message" class="uk-form-large uk-form-width-large" placeholder="Your message"></textarea></div>    
    <div class="uk-form-row"><button type="submit" class="uk-button uk-button-large uk-button-primary">Send</button></div>    
</form>
<script>
    var contactform =  document.getElementById('contactform');
    contactform.setAttribute('action', '//formspree.io/' + 'ricardo.schalch' + '@' + 'gmail' + '.' + 'com');
</script>
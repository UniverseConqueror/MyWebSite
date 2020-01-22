<h2 class="page_title">Contact</h2>

<div class="page_container contact">

<form action="/MyProject/public/mail" method="post">
    <fieldset>
        <p><label for="email">Votre email :</label></p>
        <p><input type="email" name="mail" pattern="(^[a-z0-9]+)@([a-z0-9])+(\.)([a-z]{2, 4})"></p>
        
        <p><label for="message">Votre message :</label></p>
        <p><textarea name="message" id="" cols="30" rows="10"></textarea></p>
        <input type="submit" value="Envoyer">
    </fieldset>
</form>

</div>


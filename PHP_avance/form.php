<form  action="thanks.php"  method="post">
    <div>
    <label for="theme">Choisir un thème:</label>
        <select id="theme" name="theme">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
        </select>
    </div>
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email">
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="number" id="phone" name="user_phone">
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div  class="button">
         <button type="submit">Envoyer votre message</button>
    </div>
</form>




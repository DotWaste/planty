
<div class="order-container">
    <form action="" id="form">
        <div class="col">
            <div class="nom">
                <label for="Nom">Nom</label>
                <input type="text" name="Nom" id="Nom" required>
            </div>
            <div class="nom">
                <label for="Prenom">Prénom</label>
                    <input type="text" name="Prénom" id="Prenom" required>
            </div>
            <div class="email">
                <label for="Email">E-mail</label>
                <input type="email" name="email" id="Email" required>
            </div>
        </div>

        <div class="col">
            <div class="adresse-livraison">
                <label for="Adresse-livraison">Adresse de livraison</label>
                <input type="text" name="adresse-livraison" id="adress" required>
            </div>
            <div class="zipcode">
                <label for="Code-postal">Code postal</label>
                <input type="text" name="code-postal" id="code-postal" required>
            </div>
            <div class="ville">
                <label for="Code-postal">Ville</label>
                <input type="text" name="ville" id="ville" required>
            </div>
        </div>
        <input type="submit" value="Commander" class="commander">
    </form>
</div>
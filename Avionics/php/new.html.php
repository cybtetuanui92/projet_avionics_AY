

<section id="contact">
        <h2>- Contact -</h2>
        <div class="form-contener">
          <form action="new.php" method="POST">
            <input type="number" placeholder="id" id="id" name="id" hidden>
            <input type="text" placeholder=" Nom " id="nom" name="name">
            <input type="text" placeholder=" Prénom " id="prenom" name="username">
            <input type="email" placeholder=" Email " name="email">
            <select  id="OptionTech" name="choice">
              <option value="1 : EXPERT AVIONIQUE :"  >Expert Avionique</option>
              <option value="2 : EXPERT VECTEUR :"   >Expert Vecteur</option>
            </select>
            <textarea cols="30" rows="10" placeholder=" Votre demande " name="message"></textarea>
            <button>Envoyer</button>
          </form>
        </div>
      </section>

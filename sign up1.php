<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Connexion</h2>            
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nom d'utilisateur " />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de passe" />
            </div>
            <input type="submit" value="Connexion" class="btn solid" />
           
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Inscription</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nom & prenom" />
              
            </div>
            <div class="input-field">
              <i class="fas fa-hotel"></i>
              <input type="text" placeholder="Nom d'hotel" />
              
            </div>
            <div class="input-field">
              <i class="fas fa-map"></i>
              <input type="text" placeholder="entrer l'adresse complet d'hotel" >
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" placeholder="Numéro de telephone" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de passe" />
            </div>
            <div class="file-input">
              <input type="file" id="file" class="file">
              <label for="file">Select file</label>
            </div>
            <input type="submit" class="btn" value="S'inscrir" />
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          
          <div class="content">
            <h3>Nouveau avec nous ?</h3>
            <p>
              bienvenue sur notre site web .Veuillez créer votre compte svp!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Inscription
            </button>
            <img src="img/log1.png" class="image" alt="" />
          </div>
          
        </div>




        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Connexion
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>

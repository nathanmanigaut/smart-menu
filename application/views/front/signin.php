<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <h2 class="text-center">Inscription</h2>
       
        <form class="form-group" method="post" action="http://smart-menu.local/signin/verif">
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>Votre email:</label>
                    <input type="email" class="form-control" name="email" placeholder="email@example.com">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>Votre pseudonyme:</label>
                    <input type="text" class="form-control" name="pseudo" placeholder="Votre pseudonyme">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-group col-3">
                    <label>Votre mot de passe:</label>
                    <input type="password" class="form-control" name="mdp" placeholder="Votre mot de passe">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" value="S'inscrire">
            </div>
        </div>
        </form>
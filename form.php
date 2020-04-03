<script src="https://www.google.com/recaptcha/api.js" async defer></script> 
<form action="../backend/send.php" method="POST">
<div style="text-align: center;">
        <p class="handlee" style="font-size: 30px;margin: 0;padding: 10px;">Llámanos</p>
        
            <a class="handlee" href="tel:3013238023" style="font-size: 20px;">
            <!-- <img src="/img/llamada.svg" width="25px" style="border-radius: 30px;"> -->
            3013238023
        </a>        
    
        <p class="handlee" style="margin: 0;padding: 10px;">ó dejanos contactarte</p>
    </div>

    <div class="input">
        <input type="text" name="name" id="nombre" placeholder="Nombre" required>
    </div>

    <div class="input">
        <input type="hidden" name="type" id="type" value="<?php echo $title;?>">
    </div>

    <div class="input">
        <input type="tel" name="phone" id="celular" name="celular" placeholder="Celular" required>
    </div>

    <div class="input">
        <input type="email" name="email" id="correo" name="correo" placeholder="Correo electrónico" required>
    </div>

    <div class="input">
        <!-- <label for="recomendacion" class="handlee">Mensaje o recomendaciones</label>     -->

        <textarea name="recomendation" id="" rows="3" placeholder="Mensaje o recomendaciones" required></textarea>
    </div>

    <div class="input">
        <div class="g-recaptcha" data-sitekey="6LfOF7MUAAAAAGxjlpZERwnUN6kaO_kt8MnlYnZK"></div>
    </div>

    <div class="input">
        <button type="submit" value="" class="p-1">Cotizar en línea</button>
    </div>

    <!--<button class="p-1">Buscando tranajo</button>-->
</form>
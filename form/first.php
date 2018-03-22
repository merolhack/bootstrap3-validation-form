<form data-toggle="validator" role="form" name="first_form_register" id="first_form_register" action="register.php" method="POST">
    <input type="hidden" name="form_name" value="first" />
    <div class="form-group">
        <label for="email" class="control-label">Dirección de correo electrónico <span>*</span></label>
        <input type="email" class="form-control" id="email" name="email" 
            placeholder="Correo electrónico" 
            data-error="El correo electrónico no es válido"
            required>
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group">
        <label for="title" class="control-label">Titulo <span>*</span></label>
        <input type="text" class="form-control" id="title" name="title" 
            placeholder="Tu respuesta" 
            required>
    </div>
    <div class="form-group">
        <label for="first_name" class="control-label">Nombre(s) <span>*</span></label>
        <input type="text" class="form-control" id="first_name" name="first_name" 
            placeholder="Tu respuesta" 
            required>
    </div>
    <div class="form-group">
        <label for="middle_name" class="control-label">Apellido Paterno <span>*</span></label>
        <input type="text" class="form-control" id="middle_name" name="middle_name" 
            placeholder="Tu respuesta" 
            required>
    </div>
    <div class="form-group">
        <label for="last_name" class="control-label">Apellido Materno <span>*</span></label>
        <input type="text" class="form-control" id="last_name" name="last_name" 
            placeholder="Tu respuesta" 
            required>
    </div>
    <div class="form-group">
        <label for="cellphone" class="control-label">Teléfono celular <span>*</span></label>
        <input type="tel" class="form-control" id="cellphone" name="cellphone" 
            placeholder="Tu respuesta" 
            required>
    </div>
    <div class="form-group">
        <label for="email_personal" class="control-label">E-mail Personal <span>*</span></label>
        <input type="email" class="form-control" id="email_personal" name="email_personal" 
            placeholder="Tu respuesta" 
            required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Continuar</button>
    </div>
</form>
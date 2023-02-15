<!DOCTYPE html>
<html>
    <head>
        <title>Recuperatorio Comision 2</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= ASSETS ?>css/uikit.min.css" />
		<link rel="stylesheet" href="<?= ASSETS ?>css/styles.css" />
        <script src="<?= ASSETS ?>js/uikit.min.js"></script>
        <script src="<?= ASSETS ?>js/uikit-icons.min.js"></script>
    </head>
    <body class="login uk-cover-container uk-background-secondary uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-overflow-hidden uk-light" data-uk-height-viewport>
		<!-- overlay -->
		<div class="uk-position-cover uk-overlay-primary"></div>
		<!-- /overlay -->
		<div class="uk-width-medium uk-padding-small uk-position-z-index" uk-scrollspy="cls: uk-animation-fade">
			
			<div class="uk-text-center uk-margin">
				<img src="<?= ASSETS ?>images/bg-logo.png" alt="Logo">
			</div>

			<?php 
				//echo "<br> ACA EN EL FORM<br>";
				//echo "<br> ROOT ---> ". ROOT."Vehicles/Add";
				//echo "<br> FRONT_ROOT ---> ". FRONT_ROOT."Vehicles/Add";
			?>

			<!-- login -->
			<form class="toggle-class" action="<?php echo FRONT_ROOT?>Vehicles/Add" method="get">
				<fieldset class="uk-fieldset">
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">							
							<select name="marca" id="" class="uk-select uk-border-pill">N 
								<optgroup> 	
									<option value="" disabled selected>Seleccionar marca</option>
									<option value="Chevrolet">Chevrolet</option>
									<option value="Fiat">Fiat</option>
									<option value="Ford">Ford</option>
									<option value="Renault">Renault</option>
									<option value="Volkswagen">Volkswagen</option>
								</optgroup>
							</select>							
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<input name="modelo" class="uk-input uk-border-pill" required placeholder="Modelo" type="text">
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<input name="patente" class="uk-input uk-border-pill" required placeholder="Patente" type="text">
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<input name="anio" class="uk-input uk-border-pill" required placeholder="Año" type="number">
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<input name="motor" class="uk-input uk-border-pill" required placeholder="Motor (ej: 2.0)" type="text">
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<input name="color" class="uk-input uk-border-pill" required placeholder="Color" type="text">
						</div>
					</div>
					<div class="uk-margin-bottom">
						<button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">Agregar</button>
					</div>
				</fieldset>
			</form>
			<!-- /login -->
			
			<!-- action buttons -->
			<div>
				<div class="uk-text-center">
					<a class="uk-link-reset uk-text-small toggle-class">Volver al dashboard</a>
				</div>
			</div>
			<!-- action buttons -->
		</div>
		
	</body>
</html>
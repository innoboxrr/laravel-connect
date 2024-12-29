# Laravel Providers Package

## Descripción
Este paquete está diseñado para integrar múltiples plataformas (como Facebook, Google, Twitter, etc.) en una arquitectura modular, escalable y fácil de usar dentro de aplicaciones Laravel. 

## Estructura
Laravel
	/laravel-connect
		/src
         /Models
            PlatformConnection.php
         /Services
            PlatformService.php # Centraliza la gestión de las diferentes plataformas
			/platforms
				/facebook
					/connect
						...Clases requeridas para conectar la cuenta
					/services
						/lead-forms
						/ads
					/routes
						web.php
						api.php
					/config
						facebook.php
				/google
					...
			/providers
				LaravelConnectServiceProviders.php
				RouteServiceProvider.php
				EventServiceProvider.php
		/config
			... Recuperar todos los config de las plataformas y retornar bajo el mismo contexto con {package}.{platform}.{key}
		/database
			/migrations
				...Migraciones para las diferentes plataformas


---

## Instalación

1. **Instalar el paquete usando Composer**:
   ```bash
   composer require innobox/laravel-providers
   ```

2. **Publicar la configuración**:
   ```bash
   php artisan vendor:publish --provider="Innobox\LaravelProviders\RouteServiceProvider"
   ```

3. **Configurar el archivo `.env`**:
   ```env
   FACEBOOK_APP_ID=your_app_id
   FACEBOOK_APP_SECRET=your_app_secret
   FACEBOOK_REDIRECT_URI=https://your-app.com/facebook/callback
   ```

---

## Contribuciones
Si deseas contribuir al desarrollo del paquete, crea un pull request o abre un issue en el repositorio.

---

## Licencia
Este paquete está licenciado bajo la [MIT License](LICENSE.txt).

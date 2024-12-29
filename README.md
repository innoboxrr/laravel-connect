# Laravel Providers Package

## Descripción
Este paquete está diseñado para integrar múltiples plataformas (como Facebook, Google, Twitter, etc.) en una arquitectura modular, escalable y fácil de usar dentro de aplicaciones Laravel. 

Incluye soporte para:
- **Lead Ads**: Sincronización de leads desde Facebook Lead Forms.
- **Messenger e Instagram**: Gestión de mensajes desde Messenger e Instagram Direct.
- **API de Marketing de Facebook**: Creación y administración de campañas publicitarias.
- **Webhooks**: Recepción de notificaciones en tiempo real.

---

## Instalación

1. **Instalar el paquete usando Composer**:
```bash
   composer require innobox/laravel-providers
```
2. **Publicar la configuración***:
```bash
php artisan vendor:publish --provider="Innobox\LaravelProviders\RouteServiceProvider"
```
3. **Configurar el archivo .env**:
```bash
LC_FACEBOOK_APP_ID=your_app_id
LC_FACEBOOK_APP_SECRET=your_app_secret
LC_FACEBOOK_REDIRECT_URI=https://your-app.com/facebook/callback
```
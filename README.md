# CRM epstein 🌃

Un sistema de gestión de relaciones con clientes (CRM) con temática **Cyberpunk 2077**. Administra clientes, productos, empleados, proveedores y categorías de forma eficiente en el universo de Night City.

## Descripción del Proyecto

**CRM epstein** es una aplicación web desarrollada en Laravel que permite gestionar todos los aspectos de tu negocio:

### Segunda entrega
En la segunda entrega del curso se incorporaron varias mejoras clave:

- Uso de **DataTables** para tablas interactivas en todos los índices; ahora las tablas paginan y filtran en el cliente y muestran textos en español.
- Eliminación de los enlaces de paginación de Laravel (`$model->links()`); los controles se muestran únicamente dentro de DataTables para evitar duplicidad.
- Subida de imágenes y archivos PDF en clientes y productos.
- Gestión de roles (**admin**, **usuario**) con permisos para borrar.
- Control de botones en vistas según el rol activo.
- Validaciones extendidas y limpieza de archivos al eliminar registros.

- **Gestión de Clientes**: Administra tu cartera de clientes y contactos
- **Inventario de Productos**: Control completo de stock y precios
- **Gestión de Proveedores**: Administra tus relaciones comerciales
- **Recursos Humanos**: Gestiona tu equipo de empleados
- **Categorización**: Organiza productos en categorías personalizadas

La interfaz cuenta con un diseño moderno con temática Cyberpunk, inspirado en Night City, con datos de ejemplo del universo de Cyberpunk 2077.

## Requisitos

Antes de instalar el proyecto, asegúrate de tener:

- **PHP 8.1+** (recomendado 8.2 o superior)
- **Composer** (gestor de dependencias de PHP)
- **MySQL/MariaDB** (base de datos)
- **Node.js y npm** (para assets)
- **XAMPP** o similar (servidor local)

*Nota: la aplicación ahora usa el idioma español (`es`). Ajusta `APP_LOCALE` en `.env` si deseas otro idioma.*

### Software Recomendado
- Visual Studio Code o editor similar
- Git para control de versiones
- MySQL Workbench (opcional, para gestionar BD)

## Instalación

### 1. Clonar o descargar el proyecto
```bash
cd c:\xampp\htdocs
git clone <url-del-repositorio> CRMepstein
cd CRMepstein
```

### 2. Instalar dependencias de PHP
```bash
composer install
```

### 3. Instalar dependencias de Node (opcional, si usas Vite)
```bash
npm install
npm run dev
```

### 4. Configurar archivo `.env`
Copia el archivo `.env.example` a `.env`:
```bash
copy .env.example .env
```

Configura tu base de datos en `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=epsteinjc
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generar clave de aplicación
```bash
php artisan key:generate
```

### 6. Ejecutar migraciones y seeders
```bash
php artisan migrate:fresh --seed
```

Esto creará todas las tablas y cargará datos de ejemplo automáticamente.

### 7. Iniciar el servidor
```bash
php artisan serve
```

Accede a: **http://localhost:8000**

Una vez logueado verás tu nombre y rol en la esquina superior; hay un botón **Salir** al lado para cerrar sesión y volver a la pantalla de inicio.

## Credenciales de Prueba

Después de ejecutar las seeders, puedes acceder con:

| Campo | Valor |
|-------|-------|
| **Email** | epstein@isla.test |
| **Contraseña** | epstein |

También existe un usuario normal para pruebas:

| **Email** | diddy@fiesta.test |
| **Contraseña** | diddy |

> Si ya ejecutaste los seeders anteriormente tendrás que volver a correrlos (por ejemplo `php artisan db:seed --class=AdminUserSeeder` o `php artisan migrate:fresh --seed`) para que la cuenta de diddy sea creada. No hace falta nueva migración, sólo re‑sembrar la tabla `users`.

## Datos de Ejemplo

El proyecto incluye datos de ejemplo con temática Cyberpunk 2077:

### Clientes
- V (Mercenary)
- Johnny Silverhand
- Judy Alvarez
- Panam Palmer
- River Ward
- Y más...

### Productos
- Kiroshi Optics V3
- Sandevistan Mk IV
- Mantis Blade System
- Gorila Arms MkV
- Apparition Handgun
- Y más equipo cibernético...

### Proveedores
- Kuroda-Synth Corp
- Arasaka Technologies
- Militech Black Market
- Zetatech Industries
- Kiroshi Optics

### Empleados
- Misty Oldenheim
- Viktor Vector
- Fingers
- Jackie Welles
- Y más...

### Categorías
- Implantes Cibernéticos
- Armas Militares
- Software Hacker
- Modificaciones Corporales
- Equipo de Combate
- Herramientas de Infiltración

## Estructura del Proyecto

```
CRMepstein/
├── app/
│   ├── Http/Controllers/     # Controladores de la aplicación
│   └── Models/               # Modelos de datos
├── database/
│   ├── migrations/           # Migraciones de BD
│   └── seeders/              # Datos de ejemplo
├── resources/
│   ├── views/                # Vistas Blade
│   │   ├── auth/             # Vistas de autenticación
│   │   ├── clientes/
│   │   ├── productos/
│   │   ├── proveedores/
│   │   ├── empleados/
│   │   └── categoria/
│   └── css/
├── routes/                   # Definición de rutas
├── public/                   # Archivos públicos
└── composer.json
```

## Funcionalidades Principales

### Autenticación
- Sistema de login seguro
- Registro de nuevos usuarios
- Sesiones protegidas

### Gestión de Datos
- CRUD completo para cada módulo
- Validación de datos
- Interfaz intuitiva

### Interfaz
- Diseño responsive
- Tema Cyberpunk
- Iconos Bootstrap
- Bootstrap 5.3

## Troubleshooting

### Error de conexión a BD
Verifica que:
- MySQL esté corriendo
- Las credenciales en `.env` sean correctas
- La base de datos exista

### Error de permisos
```bash
php artisan cache:clear
php artisan config:clear
```

### Resetear la BD
```bash
php artisan migrate:fresh --seed
```

## Tecnologías Utilizadas

- **Backend**: Laravel 11
- **Frontend**: Blade, Bootstrap 5.3, Bootstrap Icons
- **Base de Datos**: MySQL
- **Build Tool**: Vite

## Licencia

Este proyecto está bajo licencia de Ilerna 😜.

---

**¡Bienvenido a Night City! 🌃** Que disfrutes gestionando tu CRM con estilo Cyberpunk.

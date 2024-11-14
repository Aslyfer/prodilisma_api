<p align="center"><a href="https://prodilisma.com" target="_blank"><img src="https://prodilisma.com/logo.png" width="400" alt="Prodilisma Logo"></a></p>

<p align="center">
<a href="https://github.com/prodilisma/framework/actions"><img src="https://github.com/prodilisma/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/prodilisma/framework"><img src="https://img.shields.io/packagist/dt/prodilisma/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/prodilisma/framework"><img src="https://img.shields.io/packagist/v/prodilisma/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/prodilisma/framework"><img src="https://img.shields.io/packagist/l/prodilisma/framework" alt="License"></a>
</p>

## About Prodilisma

Prodilisma is a mobile application framework designed to manage and track user entry and exit within a company. The goal of this project is to streamline access management by providing a seamless solution for monitoring user movements.

### Key Features:
- User authentication and role-based access control.
- Real-time monitoring of user check-ins and check-outs.
- Database management of user entry and exit logs.

## API Endpoints

### Authentication

- **POST /login**: Authenticates a user and generates an access token.
- **POST /logout**: Logs out the authenticated user and invalidates the token.

### Users

- **GET /users**: Retrieves a list of all users.
- **POST /users**: Creates a new user.
- **GET /users/{id}**: Retrieves details of a specific user.
- **PUT /users/{id}**: Updates a specific user.
- **DELETE /users/{id}**: Deletes a specific user.

### Workers

- **GET /workers**: Lists all workers (requires "worker" role).
- **POST /workers**: Creates a new worker record.
- **GET /workers/{id}**: Shows details of a worker.
- **PUT /workers/{id}**: Updates a worker record.
- **DELETE /workers/{id}**: Deletes a worker record.

### History

- **GET /history**: Lists all user entry/exit records.
- **POST /history**: Creates a new entry/exit record.
- **GET /history/{id}**: Shows details of a specific entry/exit record.
- **PUT /history/{id}**: Updates an entry/exit record.
- **DELETE /history/{id}**: Deletes an entry/exit record.

## Getting Started

1. **Clone the Repository**: `git clone https://github.com/prodilisma/project`
2. **Install Dependencies**: Run `composer install`.
3. **Configure Environment**: Set up your `.env` file with the database and API keys.
4. **Run Migrations**: `php artisan migrate`
5. **Run the Application**: `php artisan serve`

---
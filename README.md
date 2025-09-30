# Absensi Guru

Absensi Guru is a web application designed to manage teacher attendance efficiently.

## Features

- Teacher check-in and check-out
- Attendance history tracking
- Admin dashboard for attendance management
- Export attendance reports

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/yourusername/absensi-guru.git
    ```
2. Install dependencies:
    ```bash
    composer install
    npm install
    ```
3. Copy the example environment file and set your configuration:
    ```bash
    cp .env.example .env
    ```
4. Generate application key:
    ```bash
    php artisan key:generate
    ```
5. Run migrations:
    ```bash
    php artisan migrate
    ```
6. Start the development server:
    ```bash
    php artisan serve
    ```

## Usage

- Access the app at `http://localhost:8000`
- Register or log in as a teacher or admin
- Use the Filament dashboard to manage attendance

## Technologies Used

- Laravel
- Filament
- MySQL
- Livewire

## Contributing

Contributions are welcome! Please open issues or submit pull requests.

## License

This project is licensed under the MIT License.
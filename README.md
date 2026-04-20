# ImageAPI

A professional, fast, and developer-friendly image API built with PHP and Symfony. Fetch, serve, and manage images with a clean REST interface — inspired by the simplicity of APIs like NASA's Image Library.

---

## Table of Contents

- [Overview](#overview)
- [Requirements](#requirements)
- [Installation](#installation)
- [Contributing](#contributing)
- [License](#license)

---

## Overview

ImageAPI provides a straightforward REST API for retrieving and managing images. Whether you're building a gallery, a media platform, or need a reliable image source for your application, ImageAPI gives you a clean and consistent interface to work with.

---

## Requirements

- PHP 8.1 or higher
- Symfony 6.x or higher
- Composer
- A database supported by Doctrine (e.g. MySQL, PostgreSQL, SQLite)

---

## Installation

Clone the repository and install dependencies:

```bash
git clone https://github.com/j0rqy/imageapi.git
cd imageapi
composer install
```

Copy the environment file and configure it:

```bash
cp .env .env.local
```

Run database migrations:

```bash
php bin/console doctrine:migrations:migrate
```

Start the development server:

```bash
symfony server:start.
```

---

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a new branch: `git checkout -b feature/your-feature-name`
3. Make your changes and commit: `git commit -m "Add your feature"`
4. Push to your branch: `git push origin feature/your-feature-name`
5. Open a Pull Request

Please make sure your code follows PSR-12 coding standards and includes tests where applicable. Run the test suite before submitting:

```bash
php bin/phpunit
```

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

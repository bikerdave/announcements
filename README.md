# Announcements system

## Setup

Install dependencies:
```
composer install
```

Update DB details in /.env file:
```
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name
```

Create DB:
```
./bin/console doctrine:database:create
```

Run migrations:
```
./bin/console doctrine:migrations:migrate
```

Start the server:
```
./bin/console server:run
```

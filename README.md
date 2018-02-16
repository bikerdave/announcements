# Announcements system
In simple terms the goal of this application is to consume news feeds (RNS, press releases, etc.) and post the associated links on Twitter.

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

Seed the database:
```
./bin/console doctrine:fixtures:load
```

Start the server:
```
./bin/console server:run
```

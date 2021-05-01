Simple php boilerplate. Simple and quick setup for local development.

Includes:

- ***xdebug 3*** -> phpstorm server name -> **app**, root dir has to be mapped to **/app**;
- it is build on top of ***php:8.0-fpm*** image
- ***symfony/var-dumper*** if xdebug is not a solution;
- ***phpunit/phpunit*** -> to execute simply run `composer test` from the container;
- ***php-parallel-lint/php-parallel-lint*** for basic linting problems -> to execute simply run `composer php-lint`
  from the container;
- ***symplify/easy-coding-standard*** for quality check -> to execute simply run `composer ecs-check` from within
  container;
- ***phpstan/phpstan*** for more advanced code problems check -> to execute simply run `composer phpstan` from
  within container;
- ***rector/rector*** to keep code upgraded to latest and greatest standards -> to execute simply
  run `composer rector-dry-run` from the container;

Also includes **supervisor**, this way inside php-fpm standard image we have nginx running as well. Details of
supervisor programs are inside of `./docker/supervisor.conf.d/` config files.

All logs from php and nginx are piped to standard output of docker.

To run it (and build):

```
docker compose up -d
```

It exposes port *8000*, so in browser:

```
http://localhost:8000
```

To run all check at once:

```
docker compose exec app composer quality-checks
```

To go inside container:

```
docker compose exec app bash
```

Disable or enable xdebug manually:
```
docker compose exec app composer xdebug-disable
docker compose exec app composer xdebug-enable
```

DC=docker compose

up:
	${DC} up -d
down:
	${DC} down --remove-orphans
ps:
	${DC} ps
logs:
	${DC} logs -f

update-kibana-system-user:
	${DC} exec -it elastic elasticsearch-reset-password -u kibana_system --force

php:
	${DC} exec -it php-fpm bash
reload: down up
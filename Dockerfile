FROM mediawiki:latest
RUN apt update && apt upgrade -y
RUN apt install -y libldap2-dev
RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu
RUN docker-php-ext-install ldap

FROM mediawiki:latest
RUN apt update && apt upgrade -y
RUN apt install -y libldap2-dev tar
RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu
RUN docker-php-ext-install ldap
WORKDIR /
COPY . .
RUN tar xzf mediawiki-extensions-LDAPAuthentication2-2.0.0.tar.gz -C /var/www/html/extensions
RUN tar xzf mediawiki-extensions-LDAPProvider-2.0.0.tar.gz -C /var/www/html/extensions
RUN tar xzf MobileFrontend-REL1_40-6d77c0b.tar.gz -C /var/www/html/extensions
RUN tar xzf PluggableAuth-REL1_40-764e1ec.tar.gz -C /var/www/html/extensions
WORKDIR /var/www/html/extensions
RUN mv mediawiki-extensions-LDAPAuthentication2-2.0.0 LDAPAuthentication2
RUN mv mediawiki-extensions-LDAPProvider-2.0.0 LDAPProvider
COPY /LocalSettings.php /var/www/html

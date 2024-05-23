FROM mediawiki:1.40
RUN apt update && apt upgrade -y
RUN apt install -y libldap2-dev tar
RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu
RUN docker-php-ext-install ldap
WORKDIR /
COPY . .
RUN tar xzf extensions/mediawiki-extensions-LDAPAuthentication2-2.0.0.tar.gz -C /var/www/html/extensions
RUN tar xzf extensions/mediawiki-extensions-LDAPProvider-2.0.0.tar.gz -C /var/www/html/extensions
RUN tar xzf extensions/MobileFrontend-REL1_40-6d77c0b.tar.gz -C /var/www/html/extensions
RUN tar xzf extensions/PluggableAuth-REL1_40-764e1ec.tar.gz -C /var/www/html/extensions
RUN tar xzf skins/Foreground-REL1_40-cd870ce.tar.gz -C /var/www/html/skins
RUN tar xzf skins/Vector-REL1_40-31f26e6.tar.gz -C /var/www/html/skins
WORKDIR /var/www/html/extensions
RUN mv mediawiki-extensions-LDAPAuthentication2-2.0.0 LDAPAuthentication2
RUN mv mediawiki-extensions-LDAPProvider-2.0.0 LDAPProvider
COPY /LocalSettings.php /var/www/html
WORKDIR /var/www/html

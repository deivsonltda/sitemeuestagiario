FROM php:8.2-fpm-alpine

RUN apk add --no-cache nginx bash curl shadow \
  && rm -rf /var/cache/apk/*

WORKDIR /var/www/html
COPY . .

# Aplica nginx.conf
RUN rm -f /etc/nginx/http.d/default.conf \
  && cp /var/www/html/_deploy/nginx.conf /etc/nginx/http.d/default.conf

# ✅ Faz o PHP-FPM rodar como nginx (mesmo user do nginx)
RUN sed -i 's/^user = .*/user = nginx/' /usr/local/etc/php-fpm.d/www.conf \
  && sed -i 's/^group = .*/group = nginx/' /usr/local/etc/php-fpm.d/www.conf \
  && sed -i 's/^listen\.owner = .*/listen.owner = nginx/' /usr/local/etc/php-fpm.d/www.conf \
  && sed -i 's/^listen\.group = .*/listen.group = nginx/' /usr/local/etc/php-fpm.d/www.conf \
  && sed -i 's/^;*clear_env = .*/clear_env = no/' /usr/local/etc/php-fpm.d/www.conf

# ✅ Permissões: diretórios precisam de X (exec) para o nginx "entrar"
RUN mkdir -p /run/nginx /var/lib/nginx/tmp /var/log/nginx \
  && chown -R nginx:nginx /var/www/html /run/nginx /var/lib/nginx /var/log/nginx \
  && find /var/www/html -type d -exec chmod 755 {} \; \
  && find /var/www/html -type f -exec chmod 644 {} \; \
  && chmod 755 /var/www/html/public/index.php

EXPOSE 80

CMD ["sh", "-lc", "php-fpm -D && nginx -g 'daemon off;'"]
# =========================================================
# MeuEstagiário - PHP-FPM 8.2 + Nginx (single container)
# Estrutura do projeto:
#  - /public/index.php
#  - /public/assets/...
#  - /app/layout/*.php
#  - /_deploy/nginx.conf
# =========================================================

FROM php:8.2-fpm-alpine

# Nginx + libs úteis
RUN apk add --no-cache nginx bash curl \
  && rm -rf /var/cache/apk/*

# Diretório da aplicação
WORKDIR /var/www/html

# Copia tudo (inclui public/, app/, _deploy/)
COPY . .

# Remove config default do nginx e aplica a sua
RUN rm -f /etc/nginx/http.d/default.conf
COPY ./_deploy/nginx.conf /etc/nginx/http.d/default.conf

# Permissões e pastas necessárias (evita 403 por permissão)
RUN mkdir -p /run/nginx /var/lib/nginx/tmp /var/log/nginx \
  && chown -R www-data:www-data /var/www/html \
  && chmod -R 755 /var/www/html

EXPOSE 80

# Sobe php-fpm em background e nginx em foreground
CMD ["sh", "-lc", "php-fpm -D && nginx -g 'daemon off;'"]
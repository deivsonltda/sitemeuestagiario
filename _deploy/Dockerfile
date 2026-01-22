# =========================================================
# MeuEstagiário - PHP 8.2 FPM + Nginx (single container)
# Estrutura:
# - /public/index.php
# - /public/assets/*
# - /app/layout/*.php
# - /_deploy/nginx.conf
# =========================================================

FROM php:8.2-fpm-alpine

RUN apk add --no-cache nginx bash curl \
  && rm -rf /var/cache/apk/*

WORKDIR /var/www/html
COPY . .

# Nginx config
RUN rm -f /etc/nginx/http.d/default.conf
COPY ./_deploy/nginx.conf /etc/nginx/http.d/default.conf

# Pastas necessárias e permissões (evita 403 por permissão/exec em dirs)
RUN mkdir -p /run/nginx /var/lib/nginx/tmp /var/log/nginx \
  && chmod -R 755 /var/www/html \
  && chmod -R 755 /var/www/html/public \
  && chmod -R 755 /var/www/html/public/assets

EXPOSE 80

CMD ["sh", "-lc", "php-fpm -D && nginx -g 'daemon off;'"]
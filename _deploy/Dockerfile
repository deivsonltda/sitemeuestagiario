# =========================================================
# MeuEstagiário - PHP 8.2 FPM + Nginx (Alpine)
# Ajustado para:
# - index.php na raiz (/var/www/html/index.php)
# - assets em /assets e também /public/assets (se existir)
# =========================================================

FROM php:8.2-fpm-alpine

# Instala Nginx + libs comuns
RUN apk add --no-cache \
      nginx \
      curl \
      bash \
      icu-dev \
      oniguruma-dev \
      libzip-dev \
    && docker-php-ext-install -j"$(nproc)" intl zip pdo pdo_mysql \
    && rm -rf /var/cache/apk/*

# App
WORKDIR /var/www/html
COPY . .

# Permissões (evita 403 por leitura)
RUN chown -R www-data:www-data /var/www/html \
  && chmod -R 755 /var/www/html

# Nginx config
RUN rm -f /etc/nginx/http.d/default.conf
COPY ./_deploy/nginx.conf /etc/nginx/http.d/default.conf

# Pastas que às vezes o nginx precisa
RUN mkdir -p /run/nginx /var/lib/nginx/tmp /var/log/nginx \
  && chown -R www-data:www-data /run/nginx /var/lib/nginx /var/log/nginx

EXPOSE 80

# Sobe php-fpm em background e nginx em foreground
CMD ["sh", "-lc", "php-fpm -D && nginx -g 'daemon off;'"]
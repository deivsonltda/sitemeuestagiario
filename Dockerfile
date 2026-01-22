# =========================================================
# MeuEstagiário - PHP 8.2 FPM + Nginx (Alpine)
# - Serve /public como root
# - /assets vem da pasta real na raiz (alias no nginx)
# - Mantém nginx em foreground e php-fpm em background
# =========================================================

FROM php:8.2-fpm-alpine

# Dependências + extensões PHP comuns
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

# Nginx config (o EasyPanel vai buildar com a pasta _deploy junto)
RUN rm -f /etc/nginx/http.d/default.conf
COPY ./_deploy/nginx.conf /etc/nginx/http.d/default.conf

# Pastas + permissões + garante public/assets apontando pra /assets real
RUN mkdir -p /var/www/html/storage /var/www/html/log \
  && rm -rf /var/www/html/public/assets \
  && ln -s /var/www/html/assets /var/www/html/public/assets \
  && chown -R www-data:www-data /var/www/html

EXPOSE 80

# Start
CMD ["sh", "-lc", "php-fpm -D && nginx -g 'daemon off;'"]
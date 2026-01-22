FROM php:8.2-fpm-alpine

RUN apk add --no-cache nginx bash curl \
  && rm -rf /var/cache/apk/*

WORKDIR /var/www/html
COPY . .

# aplica nginx.conf do _deploy
RUN rm -f /etc/nginx/http.d/default.conf \
  && cp /var/www/html/_deploy/nginx.conf /etc/nginx/http.d/default.conf

# permissões
RUN mkdir -p /run/nginx /var/lib/nginx/tmp /var/log/nginx \
  && chmod -R 755 /var/www/html \
  && chown -R nginx:nginx /var/www/html

EXPOSE 80

# ✅ LOGA onde está o index.php e o root real ANTES de subir
CMD ["sh", "-lc", "\
echo '--- DEBUG FILESYSTEM ---'; \
pwd; \
ls -la /var/www/html; \
echo '--- /public ---'; \
ls -la /var/www/html/public || true; \
echo '--- FIND index.php ---'; \
find /var/www/html -maxdepth 4 -name 'index.php' -print || true; \
echo '--- NGINX CONFIG ---'; \
nginx -T | sed -n '1,200p'; \
echo '--- START ---'; \
php-fpm -D && nginx -g 'daemon off;' \
"]
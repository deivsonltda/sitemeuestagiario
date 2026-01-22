FROM php:8.2-fpm-alpine

RUN apk add --no-cache nginx bash curl \
  && rm -rf /var/cache/apk/*

WORKDIR /var/www/html
COPY . .

# ✅ Verificação: se não achar public/index.php, o build falha e mostra o conteúdo
RUN test -f /var/www/html/public/index.php || (echo "ERRO: public/index.php NÃO encontrado" && ls -la /var/www/html && ls -la /var/www/html/public || true && exit 1)

# Nginx config
RUN rm -f /etc/nginx/http.d/default.conf \
  && cp /var/www/html/_deploy/nginx.conf /etc/nginx/http.d/default.conf

# Pastas e permissões
RUN mkdir -p /run/nginx /var/lib/nginx/tmp /var/log/nginx \
  && chmod -R 755 /var/www/html \
  && chown -R nginx:nginx /var/www/html

EXPOSE 80

CMD ["sh", "-lc", "php-fpm -D && nginx -g 'daemon off;'"]
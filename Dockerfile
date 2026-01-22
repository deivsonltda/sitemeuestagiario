FROM php:8.2-fpm-alpine

RUN apk add --no-cache nginx bash curl \
  && rm -rf /var/cache/apk/*

WORKDIR /var/www/html
COPY . .

# aplica nginx.conf do _deploy
RUN rm -f /etc/nginx/http.d/default.conf \
  && cp /var/www/html/_deploy/nginx.conf /etc/nginx/http.d/default.conf

# permissões + pastas do nginx
RUN mkdir -p /run/nginx /var/lib/nginx/tmp /var/log/nginx \
  && chmod -R 755 /var/www/html \
  && chown -R nginx:nginx /var/www/html

EXPOSE 80

CMD ["sh", "-lc", "php-fpm -D && nginx -g 'daemon off;'"]
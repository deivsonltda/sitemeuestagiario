FROM php:8.2-fpm-alpine

RUN apk add --no-cache nginx bash curl \
  && rm -rf /var/cache/apk/*

WORKDIR /var/www/html
COPY . .

# Se o repositório veio com tudo dentro de /site, "achata" a estrutura:
# /var/www/html/site/public -> /var/www/html/public
RUN if [ -d "/var/www/html/site/public" ]; then \
      echo "Detected /site folder. Moving contents to project root..."; \
      cp -a /var/www/html/site/. /var/www/html/ && rm -rf /var/www/html/site; \
    fi

# Aplica nginx.conf (serve tanto se veio achatado quanto se veio em site/)
RUN rm -f /etc/nginx/http.d/default.conf \
  && if [ -f "/var/www/html/_deploy/nginx.conf" ]; then \
       cp /var/www/html/_deploy/nginx.conf /etc/nginx/http.d/default.conf; \
     else \
       echo "ERROR: _deploy/nginx.conf not found"; exit 1; \
     fi

# Pastas do nginx + permissões (como você pediu)
RUN mkdir -p /run/nginx /var/lib/nginx/tmp /var/log/nginx \
  && chmod -R 755 /var/www/html \
  && chown -R nginx:nginx /var/www/html

EXPOSE 80

CMD ["sh", "-lc", "php-fpm -D && nginx -g 'daemon off;'"]
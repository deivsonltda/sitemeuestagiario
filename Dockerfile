FROM php:8.2-fpm-alpine

RUN apk add --no-cache nginx bash curl shadow \
  && rm -rf /var/cache/apk/*

WORKDIR /var/www/html
COPY . .

# Usa seu nginx.conf
RUN rm -f /etc/nginx/http.d/default.conf \
  && cp /var/www/html/_deploy/nginx.conf /etc/nginx/http.d/default.conf

# ✅ Descobre onde está o index.php e garante /var/www/html/public apontando pra ele
RUN set -eux; \
  INDEX_PATH="$(find /var/www/html -maxdepth 6 -type f -name 'index.php' | head -n 1)"; \
  echo "INDEX_PATH=$INDEX_PATH"; \
  if [ -z "$INDEX_PATH" ]; then \
    echo "ERRO: nenhum index.php encontrado no build context."; \
    ls -la /var/www/html; \
    exit 1; \
  fi; \
  DOCROOT="$(dirname "$INDEX_PATH")"; \
  echo "DOCROOT=$DOCROOT"; \
  rm -rf /var/www/html/public; \
  ln -s "$DOCROOT" /var/www/html/public; \
  ls -la /var/www/html/public

# Rodar php-fpm como nginx (mesmo user do nginx)
RUN sed -i 's/^user = .*/user = nginx/' /usr/local/etc/php-fpm.d/www.conf \
  && sed -i 's/^group = .*/group = nginx/' /usr/local/etc/php-fpm.d/www.conf \
  && sed -i 's/^listen\.owner = .*/listen.owner = nginx/' /usr/local/etc/php-fpm.d/www.conf \
  && sed -i 's/^listen\.group = .*/listen.group = nginx/' /usr/local/etc/php-fpm.d/www.conf \
  && sed -i 's/^;*clear_env = .*/clear_env = no/' /usr/local/etc/php-fpm.d/www.conf

# Permissões sem depender de um caminho fixo
RUN mkdir -p /run/nginx /var/lib/nginx/tmp /var/log/nginx \
  && chown -R nginx:nginx /var/www/html /run/nginx /var/lib/nginx /var/log/nginx \
  && find /var/www/html -type d -exec chmod 755 {} \; \
  && find /var/www/html -type f -exec chmod 644 {} \;

EXPOSE 80
CMD ["sh", "-lc", "php-fpm -D && nginx -g 'daemon off;'"]
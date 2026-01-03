FROM caddy:2-builder AS builder

FROM caddy:2

# Install php-fpm (Debian-based caddy image)
RUN apk add --no-cache php83 php83-fpm php83-opcache php83-session php83-ctype php83-mbstring php83-json php83-curl

# Create directories
WORKDIR /srv
COPY public /srv/public
COPY src /srv/src
COPY Caddyfile /etc/caddy/Caddyfile

# php-fpm config (simple)
RUN mkdir -p /run/php && \
    sed -i 's|^;*listen =.*|listen = 127.0.0.1:9000|g' /etc/php83/php-fpm.d/www.conf && \
    sed -i 's|^user =.*|user = caddy|g' /etc/php83/php-fpm.d/www.conf && \
    sed -i 's|^group =.*|group = caddy|g' /etc/php83/php-fpm.d/www.conf && \
    sed -i 's|^;*clear_env =.*|clear_env = no|g' /etc/php83/php-fpm.d/www.conf

# Run both php-fpm and caddy
CMD sh -c "php-fpm83 -F & caddy run --config /etc/caddy/Caddyfile --adapter caddyfile"

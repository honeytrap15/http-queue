FROM php:fpm-alpine

ENV PORT 8000

RUN mkdir /files

ADD router.php /
ADD entrypoint /

ENTRYPOINT ["/entrypoint"]

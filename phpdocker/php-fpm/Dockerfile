FROM phpdockerio/php72-fpm:latest
WORKDIR "/application"

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.2-mysql \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

#Install nodejs & yarn
RUN curl -sL https://deb.nodesource.com/setup_10.x | bash - \
	&& apt install -y nodejs \
	&& curl -sL https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
    &&  echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list \
    &&  apt-get update && apt-get install -y yarn \

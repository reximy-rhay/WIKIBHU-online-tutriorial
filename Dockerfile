FROM php:8.2-cli

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy your code into the container
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

# Expose port 80 (for Render)
EXPOSE 80

# Start PHP's built-in server
CMD ["php", "-S", "0.0.0.0:80", "-t", "."]

# Use the official PHP image
FROM php:8.2-cli

# Optional: install unzip if needed
RUN apt-get update && apt-get install -y unzip

# Copy all project files into the container's /app folder
COPY . /app

# Set the working directory
WORKDIR /app

# Start the built-in PHP server
CMD ["php", "-S", "0.0.0.0:3000", "-t", "."]

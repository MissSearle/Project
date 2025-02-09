#!/bin/bash

echo "Exporting Database..."
echo "Connecting..."
# Database Credentials
DB_NAME=$(grep DB_DATABASE .env | cut -d '=' -f2)
DB_USER=$(grep DB_USERNAME .env | cut -d '=' -f2)
DB_PASSWORD=$(grep DB_PASSWORD .env | cut -d '=' -f2)
DB_HOST=$(grep DB_HOST .env | cut -d '=' -f2)

MYSQLDUMP="/c/xampp/mysql/bin/mysqldump.exe"
OUTPUT_FILE="./dbbackups/db_backup_$(date +'%Y-%m-%d_%H-%M-%S').sql"

# Export Database
echo "Exporting Database..."
"$MYSQLDUMP" -h $DB_HOST -u $DB_USER -p$DB_PASSWORD $DB_NAME > $OUTPUT_FILE

# Confirmation Message
echo "Database exported successfully to $OUTPUT_FILE"

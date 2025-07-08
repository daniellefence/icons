#!/bin/bash

# Change to your target directory, or pass as argument
TARGET_DIR="${1:-.}"

# Find all *.php files that do not already end with .blade.php
find "$TARGET_DIR" -type f -name "*.php" ! -name "*.blade.php" | while read -r file; do
  # Get directory, filename without extension
  dir=$(dirname "$file")
  base=$(basename "$file" .php)
  new_file="$dir/$base.blade.php"

  echo "Renaming: $file → $new_file"
  mv "$file" "$new_file"
done	 

#!/bin/bash

printf "Updating Git repository...\n"
git pull

printf "Updating PHP dependencies using Composer...\n"
composer update

printf "Clearing source directory...\n"
rm -rf src/*

printf "Regenerating gRPC PHP classes from .proto files...\n"
protoc --php_out=src/ --grpc_out=src/ --plugin=protoc-gen-grpc=/bin/grpc_php_plugin -I ../protocols \
  ../protocols/{trips,reports,packets,notifies,financial,identities,models,services,areas,devices,activities}/*.proto

printf "Bumping composer package minor version...\n"
if [ -f "composer.json" ]; then
    current_version=$(awk -F'"' '/"version":/ {print $4}' composer.json)
    
    if [ -n "$current_version" ]; then
        IFS='.' read -r major minor patch <<< "$current_version"
        
        new_patch=$((patch + 1))
        new_version="$major.$minor.$new_patch"
        
        sed "s/\"version\": \"$current_version\"/\"version\": \"$new_version\"/" composer.json > composer.json.tmp && mv composer.json.tmp composer.json
        
        printf "Version bumped from $current_version to $new_version\n"
    else
        printf "Could not find a valid version in composer.json. Skipping bump.\n"
    fi
else
    printf "composer.json not found. Skipping bump.\n"
fi

printf "Staging and committing changes to Git repository...\n"
git add .
git commit -m "Regenerated gRPC PHP classes and bumped version to $new_version" || printf "No changes to commit.\n"

printf "Pushing changes to remote repository...\n"
git push
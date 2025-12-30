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

printf "Staging and committing changes to Git repository...\n"
git add .
git commit -m "Regenerated gRPC PHP classes from .proto files" || printf "No changes to commit.\n"

printf "Pushing changes to remote repository...\n"
git push
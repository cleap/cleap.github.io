#!/bin/bash

echo "Cleaning out old static site"
rm -rf projects
rm -rf style
rm -rf resume
rm index.html

echo "Downloading static site"
wget -k -E -r -l 10 -p -N -F -nH localhost

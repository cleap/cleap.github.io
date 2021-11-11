#!/bin/bash

echo "Cleaning out old static site"
rm -rf projects
rm -rf style
rm -rf resume
rm index.html

echo "Downloading static site"
wget -k -E -r -l 10 -p -N -F -nH localhost

echo "Removing 'index.html' from paths"
sed -i -e 's/index.html//g' index.html
sed -i -e 's/index.html//g' */index.html

#!/bin/zsh
# @Author: AJ Javadi
# @Email: amirjavadi25@gmail.com
# @Date: 2023-10-21 23:39:03
# @Last Modified by:   undefined
# @Last Modified time: 2023-10-21 23:39:03
# @Description: This script will create a simple MVC framework file and folder structure
#
# test script
# build a simple MVC framework file and folder structure
# the basis of the folders are:
# 1. app
# 2. config
# 3. public
# 4. views
# 5. routes
echo "Creating folders..."
echo "==================="
# echo "creating app folder..."
mkdir app
# echo "creating config folder..."
mkdir config
mkdir public
mkdir views
mkdir routes
echo "==================="
# testing if folders were created
# if the folder exists, then print out the folder name and say that the folder was created already
# if the folder does not exist, then print out the folder name and say that the folder was created
echo "testing if folders were created..."
echo "==================="
if [ -d app ]; then
    echo "app folder was created already"
else
    echo "app folder was created"
fi
if [ -d config ]; then
    echo "config folder was created already"
else
    echo "config folder was created"
fi
if [ -d public ]; then
    echo "public folder was created already"
else
    echo "public folder was created"
fi
if [ -d views ]; then
    echo "views folder was created already"
else
    echo "views folder was created"
fi
if [ -d routes ]; then
    echo "routes folder was created already"
else
    echo "routes folder was created"
fi
echo "==================="
echo  "...done"


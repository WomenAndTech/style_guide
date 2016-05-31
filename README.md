# Women&&Tech Style Guide

This repo is designed to house the current styles and components used on [http://womenandtech.com](http://womenandtech.com).  Essentially it will be the basics to create a proper theme no matter what underlying CMS/Blogging platform is used.

## Goals

- Be as semantic as possible
- Avoid unnecessary divs
- Build reusable components

## Contributing

[in progress]

The latest updates can be viewed here: http://womenandtech.github.io/style_guide/

The **src** folder contains the unminified sass and js files.  Using your compiler or task runner of choice, make sure to follow these guidelines:

* src/sass/styles.scss imports all of the partial sass files and should be minified and saved to the **css** folder
* make sure to include autoprefixr when compiling the sass files
* src/js/ contains the dev js files and should be minified and saved to the root **js** folder
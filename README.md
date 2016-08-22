# Women&&Tech Style Guide

This repo is designed to house the current styles and components used on [http://womenandtech.com](http://womenandtech.com).  Essentially it will be the basics to create a proper theme no matter what underlying CMS/Blogging platform is used.

## Goals

- Be as semantic as possible
- Avoid unnecessary divs
- Build reusable components

## Contributing

[in progress]

The latest updates can be viewed here: <a href="http://womenandtech.github.io/style_guide/" target="_blank">http://womenandtech.github.io/style_guide/</a>

The **src** folder contains the un-minified sass and js files.  Using your compiler or task runner of choice, make sure to follow these guidelines:

* src/sass/styles.scss imports all of the partial sass files and should be minified and saved to the **css** folder
* make sure to include autoprefixr when compiling the sass files
* src/js/ contains the dev js files and should be minified and saved to the root **js** folder


This project uses [editorconfig](http://editorconfig.org/) to maintain consistent coding style. Make sure your text editor has the editorconfig [plugin](http://editorconfig.org/#download) installed.

**Atom Users:** The Whitespace plugin (which is installed by default) has `Trim trailing whitespace` option turned on by default. Turn this off in the Whitespace plugin settings, otherwise it overwrites the setting in [.editorconfig](.editorconfig). This is a known [issue](https://github.com/sindresorhus/atom-editorconfig/issues/3). This is only required for editing the slides. Workshop learners are not required to add this plugin.
# Women&&Tech Style Guide

This style guide provides the markup and CSS for the components used on [http://womenandtech.com](http://womenandtech.com).  These modules can be used to create full page layouts that are consistent and simple to put together.

## Goals

- Be as semantic as possible
- Avoid unnecessary divs
- Build reusable components

The latest updates can be viewed here: <a href="http://womenandtech.github.io/style_guide/" target="_blank">http://womenandtech.github.io/style_guide/</a>

## File structure
The **src** folder contains the un-minified sass and js files used for development.  Using your compiler, app or task runner of choice, make sure to follow these guidelines:

* src/sass/styles.scss imports all of the partial sass files and should be minified and saved to the **assets/css** folder
* src/sass/style-guide.scss is only used in this style guide and is not required to be included in the global css file or womenandtech.com site files
* make sure to include [autoprefixr](https://github.com/postcss/autoprefixer) or something similar when compiling the sass files
* src/js/ contains the js files for devlopment and should be minified and saved to the **assets/js** folder

This project uses [editorconfig](http://editorconfig.org/) to maintain consistent coding style. Make sure your text editor has the editorconfig [plugin](http://editorconfig.org/#download) installed.

**Atom Users:** The Whitespace plugin (which is installed by default) has `Trim trailing whitespace` option turned on by default. Turn this off in the Whitespace plugin settings, otherwise it overwrites the setting in [.editorconfig](.editorconfig). This is a known [issue](https://github.com/sindresorhus/atom-editorconfig/issues/3). This is only required for editing the slides. Workshop learners are not required to add this plugin.
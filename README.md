# dentist-concept

Dentist Concept is a concept small business website built from the ground up using WordPress and ACF Pro.

![](https://github.com/stormcloud266/dentist-concept/blob/master/screenshot.gif)

## Challenges and Goals

* Create a simple, one page website on Wordpress
* Make content easily editable from the admin dashboard
* Set up a local development environment an automated workflow

## Solutions

I used gulp.js to create an automated workflow with minifying, photo optimization, scss, and live reloading. This setup allowed me to build more quickly and efficiently.

I integrated the Advanced Custom Fields plugin for easy content editing from the WordPress admin dashboard. The template then pulls down and escapes this information using PHP. The website is styled using SCSS. 

## Startup Guide

:warning: As is, this project requires ACF Pro to run correctly. If you are trying to run this locally, you will either need to set up your own data with ACF Pro or hardcore data directly in front-page.php.

### Install on Machine

1. Add a new project in Local
2. Clone or download this repo into the app folder of the new project's directory

    ```
    Local Sites
    ├── new-project
    │   ├── app
    │   │   ├── public
    │   │   ├── sql
    │   │   └── src (this repo)
    ```

3. Start project in Local
4. In the Admin menu, change theme to 'Dentist Concept'

### Set Up Data
1. Login to ACF Pro account and download plugin from there
2. Upload ACF Pro plugin in WP Admin
3. Setup ACF fields for font-page

### Start Development Environment
1. Open this repo in terminal
2. Install dependencies `npm i`
3. Run `npm run build` to generate files/folders (only have to run this the first time)
4. Run `npm run watch` to watch for changes

### Customize
1. Change project name in gulpfile.js, style.scss, and functions.php
2. Set up live reload to work with Local
  1. Start project in Local
  2. Run `npm watch`
  3. Live reload url is generated in gulpfile.js and must include port. example `http://dentist-concept-reload.test:3000/`

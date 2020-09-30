# Stealth Understrap Boilerplate

Original Understrap Theme can be found here at [https://github.com/understrap/understrap](https://github.com/understrap/understrap)

## Stealth Boilerplate comes with the following:
- [Bootstrap 4.5](https://getbootstrap.com/docs/4.5/getting-started/introduction/)
- [Font Awesome 5 Free](https://fontawesome.com/icons?d=gallery)
- [LESS](http://lesscss.org/)

## When starting a new project
- Set exclude path from uploading [project-root]\node_modules:
    - `Open PHPStorm Settings -> Deployment -> Excluded Path -> Add new Excluded Path`
- `npm install` - to install node module
- `npm install --save @fortawesome/fontawesome-free` - to install latest FontAwesome
- `gulp scripts` - to compile scripts for first time and after adding third-party js library
- `gulp watch` - to watch changes on project and compile

## When updating an existing project
- Set exclude path from uploading [project-root]\node_modules:
    - `Open PHPStorm Settings -> Deployment -> Excluded Path -> Add new Excluded Path`
- `npm install` - to install node module
- `gulp watch` - to watch changes on project and compile
#
You can look into `gulpfile.js` to find out about more gulp related commands


## Stealth Boilerplate Files Include

- `src/js/custom-javascript.js` Commonly used javascript functions
- `less/` Contains less style
- This boilerplate is manually importing Bootstrap 4.5. via `less/bootstrap.less` and `src/js/bootstrap4`
- `header.php` Contains style and HTML for preloader, theme color meta. Removes nav from header
- `nav.php` Contains nav
- `front-page.php` Front page template
- `mobile-menu.php` Mobile Menu template
- `footer.php` Contains footer including link to stealth

## Live Canvas Documentation
Stealth Boilerplate can be used in conjunction with Live Canvas Visual Editor.
- https://livecanvas.com/documentation/intro/
- Adding the `editable="inline"` attribute to any HTML tag will delimitate editable areas, allowed to contain plain text only.
- Adding the `editable="rich"` attribute to any HTML tag will delimitate editable areas, allowed to contain rich text.

## Adding JS Scripts to Theme
- Copy `yourfile.js` to `src/js/`
- Open `/gulpfile.js` from root directory
- Look for `gulp.task('scripts', function () {...});`
- Add `` `${paths.dev}/js/yourfile.js`, `` ( before `` `${paths.dev}/js/custom-javascript.js`, `` )
- Run `gulp scripts` to compile

## Adding CSS Styles to Theme
- Run watcher `gulp watch`
- Create a new less file `less/yourfile.less`
- Copy your css styles to the new less file.
- Import new less file to `main.less` above Main Theme Files ie. `@import "yourfile";`

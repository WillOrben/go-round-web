# go-round-web

Public facing website for Go-Round. PHP.


## Contributing

This project is currently marked in public domain so it can be edited and added to by anyone.

### Templates

The templates folder is where most of the web-facing stuff goes. Inside of the folder, each page on the website
has its own template files. `main_tpl.php` is the base of the website which serves as a frame for the rest of the
pages. `404_tpl.php` is the 404 page, `index_tpl.php` is the index page, and any other `something_tpl.php` file
is automatically made into its own page on the website, accessed by browsing to `/something`.

A file with two endings has a special function. For example:

 - `index_tpl.head.php`
 - `index_tpl.foot.php`
 - `index_tpl.css.php`
 - `index_tpl.js.php`
 - `index_tpl.title.php`

These all are inserted into the page at different points. `title` is just text in the title of the page, `css` is for
CSS files in the `<head>`, `js` is for JS files at the bottom of the page, `head` and `foot` are placed above and below
the content (respectively). These can be for extra resources you need loaded in for a specific page.

### Config

This is where we can start to store text for the page. We can put titles and text into this and then access it from
our templates via `<?= get('key'); ?>`.

### Libs

`Handler.class.php` will come into use if we need any backend functions. Right now it's empty. But it can be accessed
from any template via `$handler` in PHP tags.
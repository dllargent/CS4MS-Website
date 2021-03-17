# CS4MS-Website
The CS4MS website is used to disseminate resources to K-12 educators for teaching computer science topics.

## Set up
It is recommended that this is run on an Apache web server with PHP 7.1+.

1. Install Apache Server
    * Windows: Download and install [XAMPP](https://www.apachefriends.org/index.html).
    * macOS: Download and install [MAMP](https://www.mamp.info/en/mamp/mac/).
    * Linux: On Debian-based distributions, download and install Apache by opening a terminal and running `sudo apt update && sudo apt install -y apache2`.
      * Additional configuration is required, please see ***Linux Configuration*** below.

1. Navigate to your system's public HTML directory (`cd /Applications/MAMP/htdocs` on Mac, `cd C:\xampp\htdocs` on Windows, or `cd /var/www/html/` on Linux). 
1. Clone the repository `git clone https://github.com/dllargent/CS4MS-Website`
1. Start the web server. On MAMP and XAMPP, click `Start Server`.
1. Visit http://localhost/CS4MS-Website in your browser, and the website should appear. The port number may vary, check your configuration. On MAMP, it will be http://localhost:8888/CS4MS-Website by default.
  
###Linux Configuration
1. After installing the Apache server, install PHP by running `sudo apt install -y php libapache2-mod-php`.
1. Open the Apache configuration file in the nano editor by typing `sudo nano /etc/apache2/apache2.conf`.
1. Find the tag that begins with `<Directory /var/www/>`. Change the line that says `AllowOverride None` to `AllowOverride All`.
1. Back in the terminal, type `sudo a2enmod rewrite && sudo systemctl restart apache2`.
1. Resume at step 2 in ***Set Up***.

  
## Document Structure
### Entry point files
To reduce code duplication, the project was converted to PHP through which the site is rendered. 
The files `about.php`, `index.php`, `resource.php`, and `standards.php` are entry points to the site
that handle the rendering of their respective sections.

### Utils
They use a variety of custom Utils seen in the `utils/` folder. 
* `Util.php` finds the document root for the site, so it works at whatever level it is installed.
* `Navbar.php` renders the navbar. It dynamically adds the dropdowns and adds a search bar if the method 
  `addSearchBar()` has been called on the navbar object.
* `Head.php` controls the `<head></head>` content for every page. It has various helper methods.
    * `addScript(scriptname)` will add the script to the head, so it will be loaded for that page. 
    The scripts MUST be in the `scripts/` directory. Example use: `$head->addScript('hello-world')` will add
    hello-world.js to the head.
    * `addStyleSheet(stylesheet)` will add the stylesheet to the head. It works the same way as `addScript()` 
      except it expects styles to be in the `styles/` directory.
      
### Styles
CSS files to be used for the website.

### Scripts
JS files to be used for the website.

### Pages
Pages holds the HTML content for the separate pages. 

For resources and standards it will dynamically create a dropdown in the navbar based on the directory structure.
Add a file or a folder and it will appear in the dropdown. When clicking on a file, it will load it into the 
`<body></body>` section of the website.

### Images
Images for the website.

### Docs
Documents referenced on the website.

### Components
This contains html files for reused components across the site. If the head, footer, or navbar is changed here,
it will change on every page.

## Miscellaneous
NOTE: The CS4MSPromoVideoCC/CS4MSPromoVideoCC.mp4 file is not included in this repo. Apparently the file is too large. 
Contact Dave Largent (dllargent@bsu.edu) for the file.

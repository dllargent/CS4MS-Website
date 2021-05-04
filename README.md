# CS4MS-Website
The CS4MS+ website is used to disseminate resources to K-12 educators for teaching computer science topics. Live site is hosted at [https://www.cs.bsu.edu/cs4ms/](https://www.cs.bsu.edu/cs4ms/).

## Set up
It is recommended that the project be run on an Apache web server with PHP 7.4+.

1. Install the Apache web server.
    * Windows: Download and install [XAMPP](https://www.apachefriends.org/index.html).
    * macOS: Download and install [MAMP](https://www.mamp.info/en/mamp/mac/).
    * Linux: On Debian-based distributions, download and install Apache by opening a terminal and running `sudo apt update && sudo apt install -y apache2`.
      * Additional configuration is required, please see ***Linux Configuration*** below.

1. Use a terminal/command prompt window to navigate to the server's public HTML directory.
   * Windows: `cd C:\xampp\htdocs`
   * macOS: `cd /Applications/MAMP/htdocs`
   * Linux: `cd /var/www/html`
1. Clone the repository by typing `git clone https://github.com/dllargent/CS4MS-Website.git`.
1. Start the Apache server.
   * Windows: open the XAMPP Control Panel and click the `Start` button to the right of the Apache module.
   * macOS: Open the MAMP Control Panel and click the `Start Server` button.
   * Linux: Apache should already be running.
1. Visit http://localhost/CS4MS-Website in your browser, and the website should appear. The port number can vary, check the server's configuration. On MAMP, it may be http://localhost:8888/CS4MS-Website by default.
  
### Linux Configuration
1. After installing the Apache server, install PHP by running `sudo apt install -y php libapache2-mod-php`.
1. Open the Apache configuration file in the nano editor by typing `sudo nano /etc/apache2/apache2.conf`.
1. Find the tag that begins with `<Directory /var/www/>`. Change the line that says `AllowOverride None` to `AllowOverride All` and save changes.
1. Back in the terminal, type `sudo a2enmod rewrite && sudo systemctl restart apache2`.
1. Resume at step 2 in ***Set Up***.

  
## Project Structure
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

### Components > Navbar
* `Directory.php` handles converting specified directories into dropdown links for use in the navigation bar. 
* `File.php` converts files in specified directories into navigation bar links inside of a dropdown menu.
* `Dropdown.php` dynamically renders the dropdown functionality. 
  Directories in the specified sections are rendered as the actual dropdowns,
  while the files inside them are rendered as pages for the user to visit.
      
### Styles
CSS files to be used for the website.

### Scripts
JavaScript files to be used for the website.

### Pages
The Pages directory holds the HTML content for the separate pages. For Resources and Standards, it will dynamically create a dropdown in the navigation bar based on the directory structure.
Add a file or a folder, and it will appear in the dropdown. When clicking on a file, it will load it into the 
`<body></body>` section of the website.

### Images
Images for the website.

### Docs
Documents referenced on the website.

### Components
This contains HTML files for reused components across the site. If the head, footer, or navbar files are changed here,
they will change on every page.

### Other Files
* `bootstrap.php` is responsible for defining the
  `BASE_URL` constant and should always be kept in the project's root directory.
* `.htaccess` redirects each of the links in the navigation bar to their respective pages. It has also been
  configured to prevent some file extensions from being displayed in the URL bar (e.g. `.php`).

## Live Site Deployment

To deploy an updated version of the project to the live site, developers have the following options:

### Update Site's Local Repository
The live site is a cloned repository. To update it, simply use a terminal to navigate inside the project directory on the remote server and type `git pull`. This will pull the updated content from the master branch.

### Continuous Deployment
This project previously used continuous deployment, but the deployment server has since been taken offline. To inquire about bringing it online again, please contact Spencer Davis (psdavis@bsu.edu).

## Additional Notes
- Testing Framework
    - ***Future developers:*** This project has had some issues with deployment to the live site in the past. 
      It would be in your best interest to set up a testing framework before making any modifications to the PHP code, which will ensure that everything is working correctly before a new version is deployed. Please remove this section from the README once a testing framework has been implemented.

## Miscellaneous
NOTE: The CS4MSPromoVideoCC/CS4MSPromoVideoCC.mp4 file is not included in this repository, as it is too large. 
To obtain it, please contact Dave Largent (dllargent@bsu.edu).

### What is MOFH-R?
MOFH-R is a hosting account and support management system designed to work with MOFH (MyOwnFreeHost) and GoGetSSL. MOFH-R currently has a limited number of features which are listed below:

[![AppVeyor](https://img.shields.io/badge/Licence-GPL_2.0-orange)](LICENSE)
[![AppVeyor](https://img.shields.io/badge/Version-Final-informational)](https://github.com/ActiveMaintenance/MOFH-R/releases/latest)
[![AppVeyor](https://img.shields.io/badge/Interface-AdminLTE-lightgreen)](https://adminlte.io/)
![AppVeyor](https://img.shields.io/badge/Development-Discontinued-lightgrey)
![AppVeyor](https://img.shields.io/badge/Dependencies-PHP,_MySQL,_curl-red)

### Features
- User Management
 - Role Management
- Theme Management
 - Template Management
- Support Management
- Administrative Access
- Integration With:
	- MOFH (MyOwnFreeHost)
	- Google reCAPTCHA 
	- hCaptcha
	- GoGetSSL
	- SMTP
- Backup / Restore
- Update Manager
- Multi-lingual

### Requirements
Your server needs to meet the following minimum requirements to run MOFH-R:
- PHP v5.6 or above.
- MySQL v5.7 or above.
- A valid, trusted SSL certificate.

### Installation 
The installation of MOFH-R is much easier than you think!
- Download the MOFH-R installation files [here](https://github.com/ActiveMaintenance/MOFH-R/releases/latest). Alternatively, if you want the latest development version you can get it [here](https://github.com/ActiveMaintenance/MOFH-R/archive/refs/heads/main.zip).
- Extract the file and upload the contents to your web hosting account. 
- Edit `app/config/config.php` file and set your base url like `https://{your-domain}/{directory}/`.
- Create a new database for MOFH-R.
- Go to ```https://{your.domain}/{directory}/i/``` and click on the 'Get Started' button.
- Set your website's ```Base URL```, ```Cookie Prefix```, ```Encrtption Key```, enable ```CSRF Protection``` and hit the 'Next Step' button.
- Enter your database credentials and hit 'Next Step' button.
- Register an admin account and login to your admin panel. 
- Replace the logo and favicon located in ```assets/default/img/``` with your own.
- Setup SMTP (see below for some services you can use).
- All done! 

### SMTP
Here are some widely used SMTP services. They have free plans with some limitations, most importantly though, they are compatible with MOFH-R.
- [Mailgun](https://www.mailgun.com/). 
> **Note**  
> Mailgun seems to offer only a trial plan for a month, and without adding a credit card you are only authorized to send emails to 5 recipients. Therefore, you may want to choose another service.
- [Mailjet](https://mailjet.com/).
- [SendGrid](https://sendgrid.com/free/).

### Help
If you require assistance, please use different software. MOFH-R is considered abandoned; this project exists only to provide a functional PHP 8.2 version.
You can still [open an issue](https://github.com/ActiveMaintenance/MOFH-R/issues/new) or a [Pull Request](https://github.com/ActiveMaintenance/MOFH-R/pulls) if you have discovered a bug that should be easy to fix (such as a deprecation warning). If you want to continue development of this project, feel free to fork it.

### Liked MOFH-R?
If you liked project MOFH-R and want to support its original author and his continued works (at the moment, Xera) you can donate [here](https://xera.eu.org/DONATE.md).

### Copyright
This build is created by [Mehtab Hassan](https://github.com/mahtab2003) and maintained by [ActiveMaintenance](https://github.com/ActiveMaintenance). Code released under [the GPL-2.0 license](LICENSE).

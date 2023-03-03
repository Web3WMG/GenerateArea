<div align="center">
    <img src="assets/default/img/logo.png">
</div>
<hr>
<div align="center">
    <a href="https://www.youtube.com/watch?v=KOy8Ad6l8Ko"> Introduction Video </a>
    |
    <a href="https://www.youtube.com/watch?v=ZljtLlcCGOM"> Installation Video </a>
</div>

## 👀 What is GenerateArea?
GenerateArea is an easy-to-use hosting account and support management system for MyOwnFreeHost. GenerateArea currently has the features listed below:

[![AppVeyor](https://img.shields.io/badge/Licence-GPL_2.0-orange)](LICENSE)
[![AppVeyor](https://img.shields.io/badge/Version-v0.1.1-informational)](https://github.com/mahtab2003/Xera/releases/latest)
![AppVeyor](https://img.shields.io/badge/Build-Passed-brightgreen)
![AppVeyor](https://img.shields.io/badge/Interface-Tabler-lightgreen)
![AppVeyor](https://img.shields.io/badge/Development-In_Progress-inactive)
![AppVeyor](https://img.shields.io/badge/Dependencies-PHP,_MySQL,_cUrl-red)

### 🎮 Features
- User Management
- Theme Management
- Support Management
- Administrative Access
- Intergration With:
	- MyOwnFreeHost
	- Captcha support from Google reCAPTCHA, CryptoLoot, hCaptcha
	- Integration for GoGetSSL, SitePro, Wayback Machine, SMTP
- Update Manager
- Multi-lingual

## 🤸 Getting Started

### 🚅 Requirements
Your server needs to meet the following minimum requirements to run GenerateArea:
- PHP 7.2 or above. (PHP 8.0 & 8.1 is not supported currently)
- MySQL 5.7 or above.
- A valid, trusted SSL certificate.

### 💾 Installation 
The installation of GenerateArea is much easier than you think!
- Download the GenerateArea installation files [here](https://github.com/GenerateApps/GenerateArea/releases/latest). Alternatively, if you want the latest development version you can get it [here](https://github.com/GenerateApps/GenerateArea/archive/refs/heads/dev.zip).
- Extract the file and upload the contents to your web hosting account. 
- Create a new database for GenerateArea.
- Go to ```https://{your.domain}/{garea-directory}/install.php``` and click on the 'Get Started' button.
- Set your website's ```Website URL```, ```Cookie Prefix```, enable ```CSRF Protection``` and hit the 'Next Step' button.
- Edit the database credentials and click on the 'Next Step' button (this will automatically import tables and records to the database).
- Register an admin account and login to your admin panel. 
- Replace the logo and favicon located in ```assets/default/img/``` with your own.
- Setup SMTP (see below for some services you can use).
- All done! 

### 📧 SMTP
Here are some widely used SMTP services. They have free plans with some limitations, most importantly though, they are compatible with GenerateArea.
- [Mailgun](https://www.mailgun.com/). 
> **Note**  
> Mailgun seems to offer only a trial plan for a month, and without adding a credit card you are only authorized to send emails to 5 recipients. Therefore, you may want to choose another service.
- [Mailjet](https://mailjet.com/).
- [SendGrid](https://sendgrid.com/free/).
- [Smtp2go](https://www.smtp2go.com/)
- Gmail SMTP
### 🤔 Help
If you require assistance, please proceed to [our forum](https://fourm.xera.eu.org/), where you can find the answers to many questions and also ask your own.  
You can also [open an issue here](https://github.com/GenerateApps/GenerateArea/issues/new) if you have discovered a bug or have an issue, although the forum is still the preferred way, especially for feature requests. In any way, please ensure your topic has not been previously discussed, and if it has contribute to that discussion instead of making a new one when you can.

## ©️ Copyright
This build is created and maintained by [ChippyTech](https://github.com/chippytech). Code released under [the GPL-2.0 license](LICENSE).
Fork of [Xera](https://github.com/mahtab2003/Xera).

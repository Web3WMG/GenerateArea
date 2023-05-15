<h1 align="center">
  <a href="https://generateapps.org/area/">
    <picture>
      <source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/GenerateApps/GenerateArea/dev/assets/default/img/default-monochrome-white.svg">
      <img alt="GenerateArea" src="https://raw.githubusercontent.com/GenerateApps/GenerateArea/dev/assets/default/img/default-monochrome-black.svg" height="100">
    </picture>
 <img alt="ClientAreaMadeSimple" src="https://raw.githubusercontent.com/GenerateApps/GenerateArea/dev/assets/default/img/Untitled drawing (7).png">
  </a>
</h1>

<div align="center">
    <b>Links:</b>
    <a href="https://www.youtube.com/watch?v=KOy8Ad6l8Ko">Introduction Video</a>
    |
    <a href="https://www.youtube.com/watch?v=ZljtLlcCGOM">Installation Video</a>
    |
    <a href="https://www.byet.net/index.php?/topic/65550-powered-by-generatearea-badge">Powered By Badge</a>
</div>

> **Warning**
> GenerateArea is actively developed but considered to be in the alpha development stage, stability or security issues may be encountered and as such its usage in active production environments cannot be fully endorsed yet!

## What is GenerateArea?
GenerateArea is an free, open source & easy-to-use hosting account and support management system for MyOwnFreeHost. It is a fork of [Xera](https://github.com/mahtab2003/Xera), a discontinued client area.  It offers a range of features and functionality, including easy account management & support ticket creation and is open source and free to use, making it an accessible option for those looking for an alternative to other hosting account and support management systems. GenerateArea currently has the features listed below:

[![AppVeyor](https://img.shields.io/badge/Licence-GPL_2.0-orange)](LICENSE)
[![AppVeyor](https://img.shields.io/badge/Version-v0.1.1-informational)](https://github.com/mahtab2003/Xera/releases/latest)
![AppVeyor](https://img.shields.io/badge/Build-Passed-brightgreen)
![AppVeyor](https://img.shields.io/badge/Interface-Tabler-lightgreen)
![AppVeyor](https://img.shields.io/badge/Development-In_Progress-inactive)
![AppVeyor](https://img.shields.io/badge/Dependencies-PHP,_MySQL,_OpenSSL,_cUrl-red)

### Features
- User management
- Theme management
- Support management
- Administrative access
- Intergration with:
	- MyOwnFreeHost
	- Captcha support from Google reCAPTCHA, CryptoLoot, hCaptcha, Cloudflare Turnstile
	- Integration for GoGetSSL, Site.pro, Wayback Machine, SMTP
- Update manager
- Multi-lingual
 ### Examples of free web hosts that use GenerateArea
- https://app.fluxum.eu.org/ (Fluxum)
- https://app.generatehost.com/ (GenerateHost)
- https://my.beeshosting.eu.org/ (Bees Hosting)
## Getting started

### Requirements
Your server needs to meet the following minimum requirements to run GenerateArea:
- PHP 7.2 or above. (PHP 8.0 & 8.1 is not supported currently)
- MySQL 5.7 or above.
- A valid, trusted SSL certificate from a certifcate authortity like [Let's Encrypt](https://letsencrypt.org).

### Installation 
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
### iFastNet Coupon Code
You can get a 29% discount on any iFastNet paid product by using GAREA29!
### SMTP
Here are some widely used SMTP services. They have free plans with some limitations, most importantly though, they are compatible with GenerateArea.
- [Mailgun](https://www.mailgun.com/). 
> **Note**  
> Mailgun seems to offer only a trial plan for a month, and without adding a credit card you are only authorized to send emails to 5 recipients. Therefore, you may want to choose another service.
- [Mailjet](https://mailjet.com/).
- [SendGrid](https://sendgrid.com/free/).
- [Smtp2go](https://www.smtp2go.com/)
- [Sendinblue](https://www.sendinblue.com/)
- Gmail SMTP
### Help
If you require assistance, please proceed to [our Discord server](https://discord.gg/n94HFXyA7Z), where you can find the answers to many questions and also ask your own.  
You can also [open an issue here](https://github.com/GenerateApps/GenerateArea/issues/new) if you have discovered a bug or have an issue, although the server is still the preferred way, especially for feature requests. In any way, please ensure your topic has not been previously discussed, and if it has contribute to that discussion instead of making a new one when you can. You can also submit feature requests [here](https://forms.gle/YgUobtoeMSLTxUc16).

## Copyright
This build is created and maintained by [ChippyTech](https://github.com/chippytech) and its contrubitors. Code released under [the GPL-2.0 license](LICENSE).  
Fork of [Xera](https://github.com/mahtab2003/Xera).


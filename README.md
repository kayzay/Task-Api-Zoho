<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Realisation Api ZOHO
- [Documentation Zoho API](https://www.zoho.com/crm/developer/docs/api)
- [ZOHO CRM web site](https://www.zoho.com/crm/)
- [ZOHO Application](https://api-console.zoho.eu)

### TASK
- create trial account<br>
login: cass@ua.fm<br>
password: qazxcdewsQ
- connection Zoho CRM API <br>
   [link connection new user](https://accounts.zoho.com/oauth/v2/auth?scope=ZohoCRM.modules.ALL,ZohoCRM.users.ALL,ZohoCRM.settings.ALL&client_id=1000.UI4RTICLZR2CO3Q6VRUSN7M609FJAF&response_type=code&access_type=offline&redirect_uri=http://api-zoho)
- create new row in modals Contacts в Zoho CRM
- create new row in modals  Deals (Potentials) link to Contacts.

### Description
for more used create 3 page 
- contact list
- contact create 
- create deal

#### Page contact list
this is a simple page, the functionality of which is to display a contact list ..
pogination is intentionally missing

#### Page contact create
Object Contact is a large entity ....<br> to reduce the filling time, the minimum number of fields was taken 
<br> yes can use faker but it would create magic

#### Page deal create
same with page

#### Next 
I don't use DB for easier project deployment...
it also complicates the project, in which the TS does not provide for this

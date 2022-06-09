# Project name

## Getting Started

### Server prerequisites

1. PHP Version (>= 5.3.0)
2. PDO Extension
3. PDO MySQL Extension
4. PHP Curl
5. ASEngine Folder (writable)

When installing the latest version of [MAMP](https://www.mamp.info/) OR [XAMMP](https://www.apachefriends.org/index.html) the above prerequisites will be met.

### Dependencies

#### CSS

1. Custom CSS is written in `main.css` and all media queries are written in `media-queries.css`
2. The following CSS files are required:

```
bootstrap-v4.1.3.min.css
aos.css - v2.3.1
ez-space.css - v1.0
animate.css - v3.7.0
parsley.css - v1.0
custom.css -v1.0
```

#### JS

1. Custom JS is written in `custom.js`
2. The following JS files are required:

```
jquery-3.3.1.min.js
bootstrap-v4.1.3.min.js
aos.js - v2.3.1
parsley.min.js - v1.0
```

## Source control

### .gitignore

No .gitignore requirements at this stage

### .htaccess

Standard .htaccess setup:

```
RewriteEngine On 
RewriteCond %{SERVER_PORT} 80 
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

ErrorDocument 403 "Access Forbidden"
ErrorDocument 404 /404.php
```

1. We force a https connection 
2. Error 404 will redirect to 404.php

## Branches & Writing permissions

1. The following branches are present in this repo:

```
develop
master
```

2. Writing access is limited on all branches. Pull request is required to merge into these branches.
3. Please branch from `develop` for any future updates and new features. 

## Project Installation

### Getting started

1. Clone repo into your htdocs folder.
2. No other installation steps required.

### Databases

1. No MySQL databases required for the project.

### Base URLs

1. No base URLs present.

### Forms

1. No contact froms are being used.

## Integrations

#### Google analytics

1. Integration via embeded code `includes/header.php` on line `6` to `17` with G-tag `Enter your G-tag here`

```
Add Google analytics script here
```

#### Error report

1. Error reporting is enabled on line `27` to `30` by default

```
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>
```

2. Please disable error report on live production

## Deployment & Hosting

### Production

1. Website is currently hosted at `Enter web address here`

### Staging

1. To preview this site visit `Enter web address here`

```
Login details 

Username: admin
Password: p4m890t-m
```

### FTP

Deployments are currently done manually via FTP. For FTP access please contact [project owner](mailto:hello@auroradigital.co.za)

## Authors

Repo owned and project built by [Aurora Digital](https://auroradigital.co.za)


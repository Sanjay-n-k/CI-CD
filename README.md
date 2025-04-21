# 🚀 FTP Deployment to Hostinger with GitHub Actions - Documentation

## 🧾 Overview
This project automates website deployment to Hostinger using GitHub Actions with FTP/SSH. It includes email notifications and an optional backup system for safe deployments.

---

## 📁 Project Structure
```plaintext
project-root/
├── .github/
│   └── workflows/
│       └── deploy.yml
├── index.php
└── README.md
```

A brief description of your project goes here.

## 🔐 GitHub Secrets Configuration

This project uses GitHub Secrets to securely store sensitive information required for deployment and notifications. Ensure the following secrets are configured in your repository's `Settings > Secrets and variables > Actions secrets`.

```plaintext

| Secret Name        | Description                                     |
|--------------------|-------------------------------------------------|
| `FTP_HOST`         | Hostinger FTP server address                    |
| `FTP_PORT`         | FTP port number (usually 21)                    |
| `FTP_USERNAME`     | FTP account username                            |
| `FTP_PASSWORD`     | FTP account password                            |
| `MAIL_USERNAME`    | Email used for notifications                    |
| `MAIL_PASSWORD`    | App password for the above email                |
| `MAIL_TO`          | Comma-separated list of recipients              |
| `SSH_HOST`         | SSH server address                              |
| `SSH_USERNAME`     | SSH login username                              |
| `SSH_PASSWORD`     | SSH password                                    |
| `SSH_PORT`         | SSH port (usually 22)                           |
```

## ⚙️ Features

* **✅ CI/CD-Based Deployment**
    * Automatically deploys on push to the `main` branch.
    * Ensures consistent delivery of code to production.

* **📤 FTP Deployment**
    * Deploys files to `/public_html/` using FTP.
    * Uses the `SamKirkland/FTP-Deploy-Action` for reliable transfers.

* **📬 Email Notifications**
    * Sends email on success or failure of deployment.
    * Custom SMTP support using secrets.
    * Message includes committer, message, and timestamp.

* **🗃️ Automatic Directory Backup (via SSH)**
    * Renames existing `public_html` to `public_html_old` before deployment.
    * Ensures rollback support in case of failure.
    * Deletes old backup if it already exists.

## 📌 Important Notes

* Ensure all secrets are properly set in your GitHub repository's `Settings > Secrets and variables > Actions secrets`.
* SSH features require Hostinger SSH access and correct credentials.
* `public_html` is usually located at `/domains/<your-domain>/public_html`.
* 🔧 Make sure to update the SSH commands with your actual server path, typically '~/domains/<your-domain>/public_html'.


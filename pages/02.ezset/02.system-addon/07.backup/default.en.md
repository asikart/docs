---
title: Backup
---

Ezset quick backup system helps you easily backup your website.

![](171026-0001.jpg)

After enable quick bakup function, you can access backup system thought URL and you must enter super user credential for the authentication. **This function only work for Super User now**

## How to Backup

Click `Backup Now` button, the browser will download your site's files and SQL as zip package, you don't need to wait for the compress progress, Ezset will compress zip stream when downloading.

Click the `Download SQL Now` can only download SQL file.

### Use URL to Backup

Just add `?cmd=backup` after site URL, this is same as the buttons and can also download backup file. You must enter username/password too.

Use this URL, you can easily backup website from remote machine or NAS. But you may have to add username/password in front of site URL: `http://username:password@yoursite.com/?cmd=backup`.

## Restore Site

After downloaded the backup package, you will get an `ezset-xxx-xxx-xxx.zip` file. Unzip it to where you want to restore site and open it by browser, you will see restore system.

![](171026-0002.jpg)

Enter the MySQL information and click `Install` button to restore site.

## Important

Ezset backup can only backup small or midium site, if your SQL size bigger than 100MB, you should better use [Akeeba](https://www.akeebabackup.com/) as your backup system.



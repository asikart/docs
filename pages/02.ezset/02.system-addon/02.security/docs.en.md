---
title: Security
---

## Admin Protect

This function helps you protect your administrator to get rid of direct access.

### URL

The option must add the security code after admin URL, for example, if you set Security Code as `ezset`, you must use `/administrator?ezset` to access your admin, otherwise Ezset will redirect you back to frontend.



### HTTP Auth

Use Apache HTTP authentication popup, you must enter security code at password field then you can access admin.

### HTTP Auth and User Credential

This option will not use security code, you must enter your username and password at HTTP auth popup, then you will directly logged-in.
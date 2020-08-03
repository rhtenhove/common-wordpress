# Enforce Jetpack Single-Sign-On

This plugin enforces the SSO setting in Jetpack, which cannot be set through the WP CLI.
Installing and enabling this plugin does just that, making sure that that setting is enabled.

This currently is not reflected in the Jetpack settings, so you can change the setting in
the Jetpack settings page, but that in turn will not have any effect as long as this plugin is enabled.

## Installation through WP CLI

As simple as:
```shell script
wp plugin install https://github.com/rhtenhove/enfore-jetpack-sso/archive/master.zip
```

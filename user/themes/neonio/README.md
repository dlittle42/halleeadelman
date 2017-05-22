# Neonio Theme for Grav

![Neonio](assets/asset.png)

# Built on:

* Bootstrap

# Features:

* HTML5 and CSS3
* Fully Responsive
* Attractive and modern design
* Little effects thats let your layout looks super sexy

# Installation

Installing the Neonio theme can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the theme with a simple terminal command, while the manual method enables you to do so via a zip file.

The theme by itself is useful, but you may have an easier time getting up and running by installing a skeleton. The [Neonio Site Skeleton](https://github.com/getgrav/grav-skeleton-neonio-site) is a self-contained repository for a complete site which includes: sample content, configuration, theme, and plugins.

## GPM Installation (Preferred)

The simplest way to install this theme is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install Neonio

This will install the Neonio theme into your `/user/themes` directory within Grav. Its files can be found under `/your/grav/site/user/themes/Neonio`.

## Manual Installation

To install this theme, just download the zip version of this repository and unzip it under `/your/grav/site/user/themes`. Then, rename the folder to `Neonio`. You can find these files either on [GitHub](https://github.com/getgrav/grav-theme-Neonio) or via [GetGrav.org](http://getgrav.org/downloads/themes).

You should now have all the theme files under

    /your/grav/site/user/themes/Neonio

>> NOTE: This theme is a modular component for Grav which requires the [Cookies-Policy](https://github.com/giansi/grav-plugin-cookies-policy), [Error](https://github.com/getgrav/grav-theme-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) plugins.

# Updating

As development for the Neonio theme will not continue yet, new versions may become available in future. I've not so much time to bring new features or improve things, so please share your customizations or fork this project. Updating Neonio is easy, and can be done through Grav's GPM system, as well as manually.

## GPM Update (Preferred)

The simplest way to update this theme is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm). You can do this with this by navigating to the root directory of your Grav install using your system's Terminal (also called command line) and typing the following:

    bin/gpm update Neonio

This command will check your Grav install to see if your Boxify theme is due for an update. If a newer release is found, you will be asked whether or not you wish to update. To continue, type `y` and hit enter. The theme will automatically update and clear Grav's cache.

## Manual Update

Manually updating Neonio is pretty simple. Here is what you will need to do to get this done:

* Delete the `your/site/user/themes/Neonio` directory.
* Download the new version of the Boxify theme from either [GitHub](https://github.com/getgrav/grav-theme-Neonio) or [GetGrav.org](http://getgrav.org/downloads/themes).
* Unzip the zip file in `your/site/user/themes` and rename the resulting folder to `Neonio`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/themes`) will remain intact.

# Setup

If you want to set Promdia as the default theme, you can do so by following these steps:

* Navigate to `/your/grav/site/user/config`.
* Open the **system.yaml** file.
* Change the `theme:` setting to `theme: Neonio`.
* Save your changes.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in Terminal and typing `bin/grav clear-cache`.

Once this is done, you should be able to see the new theme on the frontend. Keep in mind any customizations made to the previous theme will not be reflected as all of the theme and templating information is now being pulled from the **Neonio** folder.

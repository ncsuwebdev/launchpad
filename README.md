#Base OT Framework App#

This the a skeleton app to allow a user to quickly start creating an app based on OT Framework (http://github.com/ncsuwebdev/otframework).

You can install this via composer (http://getcomposer.org) by:

   ``` sh
   $ composer.phar create-project ncsuwebdev/base-otf-app [install directory]
   ```
**NOTE! The install directory should not exist before running the script**

If you want a specific version of the base OTF app, you can append a version number to the create-project command that references the desired tag.

As composer is installing, it will prompt you and ask **Do you want to remove the existing VCS (.git, .svn..) history?**  You should select **Y** so that it removes all the git file history and remote repositories.  You should then initialize your own repository to store your code.


Once you create the project, you will need to do a few steps to get going:

* Create a database and put the credentials in the development section in [yourproject]/application/configs/application.ini
* Run the database migration script to install the db.  
   ``` sh
   $ php [yourproject]/otutils/migrate.php -c latest -e development
   ```

* Go to http://[path-you-installed-this] and you can log in with admin/admin credentials

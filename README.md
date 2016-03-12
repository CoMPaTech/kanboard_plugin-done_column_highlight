Kanboard Done column highlighting
=================================

To be used with http://kanboard.net

This plugin attempts to (partially) override the core template and CSS using template hooks to create a custom theme 

- New CSS styles are added with the hook **layout:head**
- Added configuration in Board->Settings->Integrations (yes, per board, not global)

Installation
------------

- Create a directory **Done_column_highlight** under the folder **plugins**
- Copy all source files in this new directory
- Go on your local installation of Kanboard
- After the login, you should see the alterations to the default layout
- Make any changes in Board->Settings->Integrations (Note; works per board, not globally)

NOTE
----
Not sure how this should/would work when combining additional themes to overwrite things! (@fguillot ordering of plugins loading?)


Other resources
---------------


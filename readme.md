


# Based PHP
  - The most based PHP framework ever

# Creating a New Page

1. **Go to the /pages directory** on your computer.
   - Find the file you want to copy (e.g., `home.php`).

## Copy the Existing Page File:

2. Right-click on the file and select 'Copy'.
3. Right-click in an empty area within the `/pages` directory and select 'Paste'.
   - This will create a copy of the file (e.g., `home - Copy.php`).

## Rename the Copied File:

4. Right-click on the copied file and select 'Rename'.
5. Change the name to the desired new page name (e.g., `new-page.php`).

## Edit the New Page File:

6. Open the renamed file (`new-page.php`) in a text editor (like Notepad).
7. Make the necessary changes to the content, such as updating text and images.

## Update the pages.php File:

8. Go to the root directory and open `pages.php` in a text editor.
9. Add a new array entry for the new page in the `$pages` array. For example:
```
php
[
    'link' => '/new-page',
    'title' => 'New Page Title',
    'showInMenu' => true // or false, depending on whether to show in the menu
],
``

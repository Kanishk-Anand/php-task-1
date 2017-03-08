# Tip Calculator in PHP

This pre-work incorporates the following 3 required steps and 3 optional steps:

1. Install PHP
2. Build a Tip Calculator using PHP
3. Submit your code for review
4. Optional: Add support for custom tip percentage
5. Optional: Add support for splitting the tip and total
6. Optional: Extend your app, improve UI, add features


-----


### 1. Install PHP

Refer to the PHP.net website for general installation instructions.
http://php.net/manual/en/install.php

* If you are on a Mac, PHP should already be installed. You can open up the Terminal application and type "php -v" to find out which version you have. PHP 5.5 or later is required for this course, and PHP 7 or later is preferred. If you want to upgrade to a newer version and do not already have experience with package managers like Homebrew, MacPorts, or Fink, then the installer by Liip will be the easiest way to upgrade.

* If you are on Windows, installing WAMP (http://www.wampserver.com/en/) which includes PHP, Apache, and MySQL may be easier than any of the other installation choices. (The assignment does not use Apache and MySQL, but the course will.)

### 2. Build a Tip Calculator using PHP

* Build an HTML page which includes a form for calculating the amount of tip using the amount of the bill without tip and the tip percentage.
  * The bill subtotal should be a text input to allow any value.
  * The tip percentage should use radio buttons for three choices: 10%, 15%, and 20%. IMPORTANT: You MUST use a PHP loop to output the three radio buttons.

* Submitting the form will initiate form processing using PHP. It should:
  * Set reasonable default values.
  * Confirm the presence and format of submitted values. The bill subtotal should be present and greater than 0. The percentage should be present and greater than 0.
  * If all values are valid, calculate the amount of the tip and the total bill when the tip is included.

* After PHP processes the form, the form should be re-displayed with:
  * Form fields pre-populated with the submitted values and selections.
  * Indicate any form errors which need to be fixed.
  * If all values were valid, display the amount of the tip and the total bill when the tip is included in a box below the form. Be sure to format the values properly as currency. This result box should not display the first time the page loads (only after a form is submitted).

* Use CSS to add design to make your page look good.


**An example of the finished product with required features complete:**

<img src='http://i.imgur.com/I5WIJ3S.gif' title='tip calcculator - required' width='' alt='tip calcculator - required' />  

### 3. Submit your code for review

Once you've completed the Tip Calculator application, please [push your app via Github](https://help.github.com/articles/create-a-repo). Also be sure to **include a README** containing a GIF walkthrough using [LiceCap](http://www.cockos.com/licecap/) of the app demonstrating how it works with required user stories completed. Use [this README template](https://google.com).

After you have **completed all required user stories and added a README as described above** then you are ready to notify us that you are ready for a pre-work review. You can either mail us at acm@snu.edu.in or send a pull request to this repository.

**Note:** All project code repos are pushed to github. If needed, review how to push your apps to github with [this handy tutorial](https://help.github.com/articles/create-a-repo). You should add a [.gitignore](https://raw.githubusercontent.com/github/gitignore/master/Objective-C.gitignore) to your project as well to **avoid storing compiled and local files in git**.

### Submission Checklist

Please **review the following checklist** to ensure your submission is valid:
  1. Did you successfully **push your code to github**? Can you see the code on GitHub?
  2. Did you **add a README** which includes a **GIF walkthrough** of the app's functionality?
  3. Did you **use our [README template](http://google.com)** for your README?
  4. Does your **GIF render directly in your README?** When using Imgur, you can right-click on the gif and choose "Copy Image Address" to get the correct address. Make sure the address has a `.gif` extension. If you end up with a url that has a `.gifv` extension, removing the `v` and changing this to `.gif` will ensure the gif renders on GitHub.

Congratulations on completing the required portion of the pre-work! The remaining steps are optional, but **completing them will significantly improve your skills**.

### 4. Optional: Add support for custom tip percentage

* After the three percentage radio buttons, add a fourth radio button labeled "Custom". Include a text input to allow users to enter a custom tip percentage value (such as "18.5").

* In the PHP processing, use the custom tip percentage whenever "Custom" has been selected. Be sure to provide good default values and to correctly re-display all the submitted values when the result is shown.


### 5. Optional: Add support for splitting the tip and total

* Add a new text input which will allow users to split the tip and total bill between any number of people.

* The split number should default to 1 and should not work for 0 or negative numbers.

* Display both the split tip and the split total.


### 6. Optional: Extend your app, improve UI, add features

The sky's the limit on ways you can improve your code. Some ideas include:
* improve the design
* add JavaScript or Ajax (but not to replace the PHP)
* define custom functions to better organize the code
* enhance the error messages
* use locale specific currency
* add a currency thousands separator
* store the last submission in a cookie or the session

## An example of the finished product with required features complete:
  
<img src='http://i.imgur.com/0ifXl8f.gif' title='tip calculator - optionals' width='' alt='tip calculator - optionals' />  

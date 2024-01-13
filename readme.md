## Introduction
This tool will help you accurately create trackable links to be used across all your marketing channels. UTM Maker by NextAfter takes user input as details of a marketing campaign and generates a link that can be used for marketing. The user has an option to generate a short version of the link as well. All entries are saved to the database and can be viewed on the entries page.
UTM Maker by NextAfter integrates with the following services:

- Google ReCaptcha Enterprise
- Bit.ly

## Requirements

Please ensure that you have the following installed on your system:

- PHP
- MySQL
- A web server (like Apache or Nginx)

## Installation

1. Clone the repository to your local machine. https://github.com/seunsodimu/utm-maker.git
2. Run the SQL query in db.sql to create a database and a table to store utm parameters and links
3. Create a .env file using the .env.sample file in the root directory as a guide
4. Update the .env file with database credentials and tokens(Bit.ly and Google Recaptcha)
5. Open the application in your web browser.

## Usage
The index.html file in the root directory displays the form to accept user input. The entries.html file displays the inputs. Clicking on the arrows in the first column of each entry row displays more information.

## Working Example
- Form - https://nextafter.azurewebsites.net
- Entries - https://nextafter.azurewebsites.net/entries.html
---


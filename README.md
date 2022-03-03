# Bitsia Coding Challenge

#### Invoice Calculator

## Nikola Domazetovikj

### To set up this application, please follow the instructions

1. Clone this repository

---

cd/destination_folder

git clone {url}

---

2. Create a db on your local machine

3. Generate key 

---

php artisan key:generate

---

4. Rename `.env.example` file to `.env`

5. Open `.env` and setup the following variables

---

DB_DATABASE=

DB_USERNAME=

DB_PASSWORD=

---

6. In order to create tables, run this command:

---

php artisan migrate

---


7. Start the application using this command:

---

php artisan serve

---

8. Run the following commands to optimize the asset

---

npm install

npm run dev

---

9. Follow the generated link, to use the application



### Notes

##### Completed objectives:

 - Calculations are made as the fields are getting populated
 - General data inputs are required as the values are stored in db
 - Product information is stored in db
 - On + button, new row is added
 - On save button, general data and invoice lines data are stored in db

##### Missing objectives:

 - List of invoices on the left
 - Delete row
 - Delete invoice

 ##### Time spent: 7h 40min


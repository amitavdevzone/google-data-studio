This repository hold the code base for the tutorial where I show how to use the Google's Sheet API to store data into the Google Sheets and also read data from Google Sheets. 

And then, we link that data from Google Sheets to Google Data Studio to create stunning reports. 

To populate data into the Google Sheets, we use the Google's PHP SDK along with Laravel to push the data from our database into the Google Sheet. 

We populate some random data into the database using the Laravel's Faker and Seeder. Once done, we write a service which is responsible for reading and writing data to Google Sheets. 

And then, we write a CRON script which syncs any new data into our database to the Google Sheet so that our reports in Google Data Studio is always up to date.

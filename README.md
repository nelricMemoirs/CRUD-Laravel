## Dependencies

Install laravel form 

<a href="https://laravelcollective.com/docs/5.2/html">Laravel Collective Form</a>

### installation
    $ composer require laravelcollective/html
    $ composer require laravel/ui
    $ php artisan ui bootstrap --auth
    
   in case css folder not included inside laravel project do this:<br>
   `$ npm install` for compile bootstrap css file inside Laravel (only once), <br>
   this command should download node-module to project, but ignored when push to git<br>
   `$ npm run dev` till css and js emitted to Laravel public / asset folder ,<br>
   if you use `$ npm run watch` makes sure to kill terminal Ctrl + C, this will tell laravel to download required assets to project folder<br>
   see <a href="https://laravel.com/docs/7.x/frontend">Laravel Documentation</a> for details.
   
# CRUD with Laravel

***This project needs Database to run (in this case I use MySQL inside XAMPP)<br>
    2 table inside database, question & answer***<br>

This is task for CRUD in Laravel, with Question(s) and Answer ***Click Delete button (corner right bottom) to delete Question, deleting question will also delete answer on it and delete database for that question and answer***
   
# Front-Page
<br><br>
![Alt text](blob/Capture.PNG?raw=true "Home")

# Question and Answer Page
<br><br>
![Alt text](blob/Capture2.PNG?raw=true "Main")

## Create Questions
<br><br>
![Alt text](blob/Capture3.PNG?raw=true "Main")

# Show Individual Question & Show Answer if Any
<br><br>
![Alt text](blob/Capture4.PNG?raw=true "Show")
![Alt text](blob/Capture5.PNG?raw=true "Show")

# Edit Question
<br><br>
![Alt text](blob/Capture6.PNG?raw=true "Main")

# Create Answer
<br><br>
![Alt text](blob/Capture7.PNG?raw=true "Main")

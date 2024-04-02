#Joke App
## Overview
This application will display a single joke for the user to read. After reading the joke, the user can like or dislike it. The app will record the vote in the database and then show another joke for the user to read. When there are no more jokes to show, the app will display a "That's all the jokes for today! Come back another day!" message.

There is no need to display the result of the votes. Users should not see the same joke twice. Users do not need to register or log in to view the joke or vote for it.
## Technical
The app will use cookies to track if a user has voted for a joke. It is okay if the user clears their cookies and votes again.

The app use MVC pattern and Service-Repository Pattern.

The request goes to the Controller, it controls through the corresponding Service, and the service will call into the appropriate Repository.

This will increase the application's security, scalability, maintainability, and testing capabilities.

## Installation
Clone App
-git clone https://github.com/dungdinhhaha/exercise.git

Go to the Laravel app and configure the database. Then, enter the following commands into the terminal:

-php artisan migrate
-php artisan db:seed
-php artisan serve

## How to use
Access the application through your web browser.

A joke will be displayed.

Read the joke and choose "Like" or "Dislike".

Another joke will be displayed.

Repeat steps to there are no more jokes to display

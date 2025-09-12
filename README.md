# contactForm

The project uses php server and mysql database working together with the help of docker and docker compose.
It exposes simple ```contact.php``` webpage for sending contact info and ```messages.php``` webpage for browsing them.

## How to run project

Project's secrets (namely: name of database and database root password) are to be stored in ```.env``` file. This repository does not contain it, but provides example file instead. Given that:

- Rename ```.env.example``` file to ```.env```. Feel free to modify its values.  
- Adjust host port of php server if needed (e.g. if 4001 is already used on your host machine) by editing ```docker-compose.yml``` file.
- Given docker and docker compose are installed on your system, run the following command to build and run the application ```docker compose up -d```.


After following above instructions, the contact page will be available at <http://localhost:4001/contact.php>.

## How to check if form is working

- Access <http://localhost:4001/contact.php>
- Fill the form 
- Click ```Wyślij```
- Read the submitted messages:
  - in ```messages.txt``` file
  - by accessing <http://localhost:4001/messages.php> or clicking ```Wiadomości``` in header navbar

## Decisions made

- ```action``` property of ```form```  element was set to custom js function which processes data and sends it processing php endpoint waiting for response to provide both feedback message on submission and no-refresh-on-submission behavior
- JS Fetch API was used to send data to handler endpoint and achieve non-refreshing behavior after form submission
- data persistance is achieved via both file storage (to quickly develop MVP) and mysql database
- Docker and Docker Compose was utilised to make running project on new machines as quick and effortless as possible
- to not hardcode secrets, ```.env``` file was used but not included in repo as a good practice; secrets from ```.env``` are then passed to php and db services as their environment variables when Docker Compose preprocesses ```docker-compose.yml``` file
- set of arbitrarily chosen complementary colors was used in building frontend with the help of CSS custom properties
- to make reading messages via browser possible extra page was added
- the chosen API for calling mysql from PHP was PDO, as it allows to change db backend without the need to rewrite PHP code
- ```header.php``` files was prepared and included in every webpage
# contactForm

The project uses php server and mysql database working together with the help of docker and docker compose.
It exposes simple contact form webpage for sending contact info and messages webpage for browsing it.

## How to run project

Rename ```.env.example``` file to ```.env```. 

Given docker and docker compose are installed on your system, run the following command to build and run the application: 

```
docker compose up -d
```

You can adjust host port of php server if needed (e.g. if 4001 is already used) by editing ```docker-compose.yml``` file.

After following above instructions, the contact page will be available at <http://localhost:4001/contact.php>.

## How to check if form is working

- Fill the form 
- Click submit
- Read the submitted messages:
  - in ```messages.txt``` file
  - by accessing <http://localhost:4001/messages.php> or clicking ```Wiadomości``` in header navbar

## Decisions made

- data is sent using POST method as GET method exposes it in URL which is not desirable
- ```action``` property of ```form```  element was set to custom js function which processes data and sends it processing php endpoint waiting for response to provide both feedback message on submission and no-refresh-on-submission behavior
- JS Fetch API was used to send data to handler endpoint and achieve non-refreshing behavior after form submission
- data persistance is achieved via both file storage (to quickly develop MVP) and mysql database
- Docker and Docker Compose was utilised to make running project on new machines as quick and effortless as possible
- custom JS function was used for displaying feedback message to user
- to not hardcode secrets, ```.env``` file was used but not included in repo as a good practice; secrets from ```.env``` are then passed to php and db services as their environment variables when Docker Compose preprocesses ```docker-compose.yml``` file
- set of arbitrarily chosen complementary colors was used in building frontend 
- to make reading messages via browser possible extra page was added
- the chosen API for calling mysql from PHP was PDO, as it allows to change db backend without the need to rewrite PHP code
- ```header.php``` files was prepared and included in every webpage
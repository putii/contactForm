# contactForm

## How to run project

Given docker is installed on your system, run the following commands to build an image and run docker container with php web server from the project's root directory:

```
docker build . -t php-container
docker run -d -v $(pwd):/app -p 127.0.0.1:4000:4000 php-container
```

It will run php 8.2 web-server in root of project directory.

Adjust host port if needed (e.g. if 4000 is already used).

After following above instructions, the contact page will be available at <http://localhost:4000/contact.php>.

## How to check if form is working

- Fill the form 
- Click submit
- Observe how the form messages are added to ```messages.txt``` file.

## Decisions made

- php handling of data sent via contact form was refactored to another file
- data was sent using post method as no refresh behavior after submit was expected
- data persistance is achieved via file storage to quickly develop MVP (though DB-based would be nicer for sure)
- Docker was utilised to provide the simplest reproducible setup possible to run the php server
- JS Fetch API was used to send data to handler endpoint and achieve non-refreshing behavior after form submission
- custom JS function was used for displaying feedback message to user 
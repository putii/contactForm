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
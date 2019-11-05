# Firefox Promotional Website

This website was created to promote the web browser Firefox.

The site also include a stylesheet switcher.

Built using PHP.

## Installation

You can setup the site using [Docker](https://www.docker.com);

    $ git clone https://github.com/trovster/firefox.trovster.com.git firefox
    $ cd firefox
    $ npm install
    $ npm run start -- --build

To stop the Docker container run the following;

    $ npm run stop

## Deployment

To deploy the site via GitHub pages, run the following;

    $ npm run build
    $ npm run deploy
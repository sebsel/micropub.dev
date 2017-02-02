# micropub.dev
A local Micropub debugger

(I was tired of sending my own site Micropub requests just to see if my client worked, so I made this.)

This is a tool to see if your Micropub client works. Send a Micropub request to http://micropub.dev/endpoint.php (or any address where you run this tool), and look at http://micropub.dev/ to see what the last request looked like.

The default access token is 'xxx'. Yep, 'xxx'.

## How to install

Put the files in a folder and point your local server to it. Don't forget to `composer install`.

You can also do this in the terminal:

1. `cd /path/to/micropub.dev`
2. `composer install`
3. `php -S localhost:3000`

Note that in that case, the URL of the endpoint changes to <http://localhost:3000/endpoint.php>

## Todo

- [ ] add proper authorization / OAuth simulation, so that it can test that too.

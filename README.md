# SRB2Kart Web Server Browser
A HTML5/PHP server browser for SRB2Kart, based on Golden's [SRB2-Query](https://git.do.srb2.org/Golden/SRB2-Query/tree/update-to-2.2.1)

## Usage
Deploy the files on a webserver with PHP installed, and run ```index.html```.

Be sure that the usage of ```socket_sendto()``` is allowed on the server, as some hosts don't allow it.

## Files
* ```ms.php```: Fetches the list of servers off of the master server — basically just a proxy for the master server, to avoid CORS errors;
* ```api.php```: Given an IP and port (sent as GET parameters), fetches the data for a given SRB2Kart server;
* ```index.html```: Demo HTML5 app that lists SRB2Kart servers and their data, similar to [SRB2's Master Server](https://mb.srb2.org/masterserver.php), albeit much uglier (both interface and source code);
* ```srb2query.php```: Modified version of SRB2-Query, to add proper support for SRB2Kart 1.3 packets;
* ```util.php```: Extra functions for ```srb2query.php```.

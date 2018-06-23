OnBoarding API
========================

This repository contain API, for OnBoarding project.

Usage
-----

I assume that you have already installed and configured [`Docker`](1).

By default docker files configured to use `on-boarding.test` domain in your browser.
If you want to use different one, you should modify `docker/etc/nginx/app.conf` file
and change `server_name` section there.

Before you run docker environment you should copy files `env.template` to `.env` and `docker/.env.template` to `docker/.env`.

To run application, on MAC you should execute following commands:

```bash
$ cd docker-compose
$ docker-compose build
$ docker-compose up -d
```

Next step is to update system`hosts` file. You should add new line there with `docker-machine` ip address and domain, that you want to use.
Here is example of the line you should add:

```
127.0.0.1 on-boarding.test
```

[1]: https://docker.com

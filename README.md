OnBoarding API
========================


This repository contain API for OnBoarding project.

[![Build Status](https://travis-ci.org/puku/on-boarding-api.svg?branch=master)](https://travis-ci.org/puku/on-boarding-api)
[![Maintainability](https://api.codeclimate.com/v1/badges/415770161909a8eb104e/maintainability)](https://codeclimate.com/github/puku/on-boarding-api/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/415770161909a8eb104e/test_coverage)](https://codeclimate.com/github/puku/on-boarding-api/test_coverage)


The main idea of the project is to simplify management of the team members data.
It should make the process of adding required access rules and passwords to the new team members and removing it after they leave the team fairly easy.

Usage
-----

I assume that you have already installed and configured [`Docker`][1].

By default docker files configured to use `on-boarding.test` domain in your browser.
If you want to use different one, you should modify `docker/etc/nginx/app.conf` file
and change `server_name` section there.

Also, pay attention, that `XDEBUG` configured to work with port `9001`, but not with the default one `9000`.
If you want to use `XDEBUG` you should change your IDE configuration correspondingly.

Before you run docker environment you should copy `.env.dist` file to `.env`.
After it you can deploy your docker environment.

#### Deployment on MAC

To deploy environment on MAC you should run following commands:

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

#### Deployment on Windows
To be added

#### Deployment under proxy
To be added

Running tests
-----
To be added


[1]: https://docker.com

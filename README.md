# phpunit-sonarqube

This repository is a demo repository written in PHP and configured for testing and source code analyses with:

  - [PHPUnit 9.3](https://phpunit.de/)
  - [SonarQube Community EditionVersion 8.4.2 (build 36762)](https://www.sonarqube.org/)

# Installation

 - Run `composer install`
 - [Run a SonarQube server](https://docs.sonarqube.org/latest/setup/install-server/)

# Composer scripts

 - `composer run-script test`
   Runs `vendor/bin/phpunit` with the configuration file `phpunit.xml`
 - `composer run-script scan`
   Runs `sonar-scanner` with the configuration file `sonar-project.properties`
   **(This needs a running SonarQube server and Scanner installed)**

The code coverage reports are saved in HTML and XML format in the `.coverage/` (created by PHPUnit) folder.
The files `.coverage/xml/clover.xml` and `.phpunit/junit.xml` (also created by PHPUnit) are used by SonarQube for the code coverage.
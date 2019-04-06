# Julie: A Custom Workout App

Julie is a personal training app providing custom workouts based on the user’s selected target muscle group(s), desired workout time and workout goal.

This was the group project set for our final week in the [DevelopMe_ coding fellowship](https://developme.training/fellowship/).

The live app can be viewed [here](http://workout-julie.s3-website.eu-west-2.amazonaws.com/).

The front end repo can be viewed [here](https://github.com/tatlay/julie).

## Backend Setup
### Prerequisites

Make sure you have the following installed:

* [Composer](https://getcomposer.org/) - run:

```composer install```

* [Laravel](https://laravel.com/docs/5.8/installation) - run:

```composer global require laravel/installer```

* Homestead - run:

```composer require laravel/homestead --dev``` to install
```php vendor/bin/homestead make``` to generate the Vagrantfile and Homestead.yaml file in your project root

* A virtualizer software package such as [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
* [Vagrant](https://www.vagrantup.com/downloads.html)

### Running

Clone the git repository and run vagrant up to launch the Vagrant box:

````git clone git@github.com:helenodia/julia.git````
````vagrant up````

## Frontend Setup
### Prerequisites

You will need to have npm installed.

### Installing
Clone the git repository and run npm install:

````git clone https://github.com/helenodia/julia.git````
````npm install````

Once all the packages have installed, run the app:

````npm start````


## Contributors
* [Aran Davy](https://github.com/h2obuffalo) 
* [Tat Lay](https://github.com/tatlay)
* [Helen Odia](https://github.com/helenodia)
* [Andy Taylor](https://github.com/awjTay)
* [Ian Wildsmith](https://github.com/z1090)




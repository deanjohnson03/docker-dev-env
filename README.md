# Docker PHP Development Environment

1. Open Docker
1. Select Dev Environments
1. Click Create
1. Clone the repo from GitHub and give it a name
1. The app will start, connect to VS Code

Use the below command to install the dependencies of the project: (slim)
```bash
composer install
```

Then run the environment with the below commands:
```bash
cd src/public/
php -S localhost:8080
```

The development environment is powered using the docker-compose file, in this project it's called `compose-dev.yaml`.

You fill out what the development environment needs to run.
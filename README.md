# SLUB Profile Service

This is the main project repository, contains the composer stack and in future the deployment configuration.

## Requirements
* Composer 2.0
* PHP 7.4

## Quickstart

- `git clone git@github.com:slub/ddev-profile-service.git`
- `cd slub-profile-service`
- `ddev start`
- `ddev composer install`
- `ddev import-db -f database.sql.gz`
- `Import DB`
- `Import Assets`

## Local development

### Server

Use the local development environment you like, but a DDEV solution is strongly recommended.

### Handling

You have a main repository "ddev-profile-service" and some child repositories, changes are made
inside the child repositories:

- Checkout the develop branch of the required child repository.
- Make the changes and test them, if all seems good, merge the develop branch inside the master branch.
- Execute a composer update on the root level, composer will fetch now the updated master child branch and update the composer.lock file.
- Push the changed composer.lock file to the master branch.

**Available happen in the future with deployment:**

- The pipeline build now the new version with an updated composer.lock file and deploy the update to the staging server.
- Available happen in the future: If all seems good again, create a tag to deploy the update to the live server.

# License

GPL-2.0 or later

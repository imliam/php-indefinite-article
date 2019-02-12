# Setup

This file is intended to give instructions and notes on how to set up this repository on GitHub, along with any continuous integration (CI) tools.

This skeleton package is based off work from both [thephpleague/skeleton](https://github.com/thephpleague/skeleton/) and [spatie/skeleton-php](https://github.com/spatie/skeleton-php).

## Firstly...

Replace `:author_name`, `:author_username`, `:author_email`, `:package_name` and `:package_description` with their correct values in [README.md](README.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files.

Update the namespaces and class names with that of the package in all files in the [./src](src/) and [./tests](tests/) directories.

## Laravel

This skeleton by default is catered to supporting Laravel framework packages. If this package is not going to have any Laravel support, it can be removed by following these steps:

- Remove all references to "Laravel" and "Illuminate" from [composer.json](composer.json)
- Change the base test case in [tests/TestCase.php](tests/TestCase.php) and remove all unneeded methods
- Delete the the [src/SkeletonFacade.php](src/SkeletonFacade.php) and [src/SkeletonServiceProvider.php](src/SkeletonServiceProvider.php) files

## Set up on GitHub

### Repository

To get the project onto GitHub, firstly [create a new repository](https://github.com/new), then follow the commands below.

```bash
cd ./path/to/project # Navigate to the project path
git init # Initialise a new local git repository
git add . # Stage all files in the repository
git commit -m "🎉 Initial commit" # Commit the staged files
git remote add origin "https://github.com/ImLiam/:package_name.git" # Add the remote repository that was previously created
git remote -v # Verify the remote repository URL was added correctly
git push origin master # Push the changes to the remote repository
```

### Labels

This project contains a handful of useful predefined labels for issues and pull requests, with more depth and usefulness than the default labels GitHub provides. To install these:

- With NPM, install [git-label-cli](https://github.com/jasonbellamy/git-label-cli)
- Remove the default GitHub labels
- Install the label package
- Remove the label package

```bash
npm install --global git-label-cli
git-label remove bug
git-label remove duplicate
git-label remove enhancement
git-label remove "good first issue"
git-label remove "help wanted"
git-label remove invalid
git-label remove question
git-label remove wontfix
git-label -p ./.github/label-package.json
rm ./.github/label-package.json
```

## Third-party services

### Packagist

Packagist is the main Composer repository, publishing the package to it will allow it to be installed easily into any project.

- [Submit the repository on Packagist](https://packagist.org/packages/submit)
- [Follow the steps for automatic package updates](https://packagist.org/about#how-to-update-packages)

### Travis CI

Travis CI will help by running the project's tests against every code change to make sure it always works before a merge is made.

- [Log in to Travis](https://travis-ci.org/)
- Activate the repository

### StyleCI

StyleCI ensures the code formatting remains consistent even when multiple people commit to the project.

- [Log in to StyleCI](https://styleci.io/)
- Enable on the repository

### Scrutinizer CI

Scrutinizer CI, along with the results from Travis CI, will provide helpful analytical information about the code base.

- [Log in to Scrutinizer CI](https://scrutinizer-ci.com/)
- [Add the repository in](https://scrutinizer-ci.com/g/new)

### Probot Stale

- [Install the GitHub App](https://github.com/apps/stale)

## Finally

You're done! Now delete this file and [create a new release](../releases/new) on GitHub.

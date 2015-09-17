# Contribution Guidelines
You are welcome to report [issues](https://github.com/chadicus/spl-exceptions-php/issues) or submit [pull requests](https://github.com/chadicus/spl-exceptions-php/pulls).  While the below guidelines are necessary to get code merged, you can submit pull requests that do not adhere to them and I will try to take care of them in my spare time. If you can make sure the build is passing 100%, that would be very useful.

I recommend including details of your particular usecase(s) with any issues or pull requests.

## Questions and Bug Reports
Submit via [GitHub Issues](https://github.com/chadicus/spl-exceptions-php/issues).

## Pull Requests
Code changes should be sent through [GitHub Pull Requests](https://github.com/chadicus/spl-exceptions-php/pulls).  Before submitting the pull request, make sure that phpcs reports success.
The build will not allow any errors for the [coding standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).

```sh
./vendor/bin/phpcs --standard=PSR2 src
```

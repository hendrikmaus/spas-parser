# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

The change log itself is written the way that [keepachangelog.com](http://keepachangelog.com/) describes.

## [2.1.0] - 2016-12-09
### Added
- every request can have a custom error message which can be used to provide
  a custom error message from wihtin hooks that can tag a request as failed.
  In spas, there is a validator that will catch "tagged as failed" requests
  to print this message

## [2.0.1] - 2016-12-02
### Added
- commented on Repetition config counters; they start counting at 1

## [2.0.0] - 2016-11-30
### Changed
- type hints, so php 7 is now a requirement
- renamed `ParsedRequest::getResponse` to `ParsedRequest::getExpectedResponse` (setter as well)

### Added
- request has a dedicated property for the uri template
- put repetition config on the request object
- actual response is now available on each request via `ParsedRequest::getActualResponse` (setter as well)

### Removed
- dedicated param bag on the request object to store processor related options

## [1.2.0] - 2016-11-29
### Added
- dedicated param bag on the request object to store processor related options
  e.g. spas hooks can flag requests for repetition / simply store other processing related data on them

## [1.1.0] - 2016-11-29
### Added
- parsed requests know about their respective api resource group objects

## [1.0.0] - 2016-10-26
### Changed
- Align namespace with the rest of the code packages

## [0.1.0] - 2016-08-30
- Initial Release

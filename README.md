# spas-parser
Defines common interfaces for creating concrete parsers that work with 
[spas](https://github.com/hendrikmaus/spas) testing tool.

## Details
Spas is a tool to test an API description against a given environment.  
As spas itself is description language agnostic, it relies on different concrete implementations
of [spas-parser](https://github.com/hendrikmaus/spas-parser) which defines the common interfaces.

## Installation
The recommended way to install, is using composer:

```bash
composer require hmaus/spas-parser
```

## Implementations
- API Blueprint Refract ParseResult - [spas-parser-apib](https://github.com/hendrikmaus/spas-parser-apib)

## How To Create A Parser
> Have a look at [spas-parser-apib](https://github.com/hendrikmaus/spas-parser-apib) for a working example

- Start a new composer library
- Implement the `Parser` interface
- To keep things aligned, name your implementation `<Language>ParsedRequestsProvider`, e.g. `ApibParsedRequestsProvider`
- The namespace is up to you, I suggest `<Yourname>\Spas\Parser\<Language>`, e.g. `Hmaus\Spas\Parser\Apib`
- The `parse` method is supposed to return an array of `ParsedRequest` elements
  where each contains a `ParsedResponse` to have a request/response pair
- Publish your package on packagist and require it in your toolbox alongside spas to use it

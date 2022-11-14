# CHANGELOG

## [4.0.5](https://github.com/free-id/core/releases/tag/4.0.5) - 2022-07-26 14:39:44

*No description*

### Refactor

- main:
  - put contracts in a separate pkg ([92f05da](https://github.com/free-id/core/commit/92f05da29224b3d6278227a2f57185c6bce68fe8))
  - update ([cf25373](https://github.com/free-id/core/commit/cf25373dba1cf7867b14f9f6d709aedb7736125c))

## [4.0.4](https://github.com/free-id/core/releases/tag/4.0.4) - 2022-07-25 15:40:14

*No description*

### Refactor

- main:
  - update namespaces ([8be54b7](https://github.com/free-id/core/commit/8be54b70ca216e105bc52e520ff54190d87377c7))

## [4.0.3](https://github.com/free-id/core/releases/tag/4.0.3) - 2022-07-25 15:07:03

*No description*

### Refactor

- main:
  - update ([3fe7ac6](https://github.com/free-id/core/commit/3fe7ac6621e47417dd1f019186f2c832306d4c05))

## [4.0.1](https://github.com/free-id/core/releases/tag/4.0.1) - 2022-07-25 15:01:13

*No description*

### Refactor

- main:
  - update namespaces ([0524bd1](https://github.com/free-id/core/commit/0524bd14f5df861217006a3f552d904b7a6d9b62))

## [4.0.0](https://github.com/free-id/core/releases/tag/4.0.0) - 2022-07-25 10:30:30

We moved! Changed project structure: the core is separated into a separate package, and all parsers will be plugged in as plugins!

Hooray! 🎆 

### Refactor

- main:
  - move package ([6111799](https://github.com/free-id/core/commit/61117994e3e56e1b919b420cf17387a6e81846fb))
  - update namespaces ([4357440](https://github.com/free-id/core/commit/4357440f4575dd230adc74dde66f7cf0773536b6))
  - put parsers into separate packages ([d4afeee](https://github.com/free-id/core/commit/d4afeee2d047642c834b14494e08f527427e4e8d))
  - update composer.json ([1be9853](https://github.com/free-id/core/commit/1be985318040169d098c454113fc9592dc59505d))

## [3.0.2](https://github.com/free-id/core/releases/tag/3.0.2) - 2022-05-17 04:21:34

**Full Changelog**: https://github.com/free-id/core/compare/3.0.1...3.0.2

### Bug Fixes

- main:
  - allocating PDO methods to a trait ([0b67fc3](https://github.com/free-id/core/commit/0b67fc3ce7f49af5392c736ec747bec9fe25a6fb))

### Refactor

- main:
  - putting properties into traits ([a6ff21b](https://github.com/free-id/core/commit/a6ff21b69af039c37ece135465acbab50f76bc4b))

## [3.0.0](https://github.com/free-id/core/releases/tag/3.0.0) - 2022-05-13 06:24:35

**Full Changelog**: https://github.com/free-id/core/compare/2.2.8...3.0.0

### Bug Fixes

- main:
  - update phpdoc ([3f46c16](https://github.com/free-id/core/commit/3f46c163474ab6758deb686ad699d0ce3ce3cc4c))
  - fix json parser ([00b8768](https://github.com/free-id/core/commit/00b87680d2954300176fbabdd8c708a7bb70be08))
  - adding phpstan and fixing typehint ([949f4d3](https://github.com/free-id/core/commit/949f4d34a63dffdd8cc03db37380bf9772e6460a))
  - calling the microtime function in example.php ([a9190fb](https://github.com/free-id/core/commit/a9190fb05fc1ccf3ae3cb98f70f12e07b31523ca))

### Refactor

- main:
  - update composer.json ([dbae42e](https://github.com/free-id/core/commit/dbae42eabbd7553220d12aa67ea0335ed13e39e9))
  - update base parser ([fd6bf33](https://github.com/free-id/core/commit/fd6bf339cf0373d2e9d03d8d113fdce8c3b73a85))
  - update base parser ([6022a72](https://github.com/free-id/core/commit/6022a72e3d115277c32768128d02b1c525ea09c2))
  - some base parser methods are declared as final ([faa9a1c](https://github.com/free-id/core/commit/faa9a1cb47d701ae0fa2456f9e89f6531fa93df6))
  - update example ([3cd95f8](https://github.com/free-id/core/commit/3cd95f84fdd248f924b7d8796f9b5ec05e9499e0))

## [2.2.8](https://github.com/free-id/core/releases/tag/2.2.8) - 2022-05-11 16:01:14

**Full Changelog**: https://github.com/free-id/core/compare/2.2.7...2.2.8

### Refactor

- main:
  - parsers refactoring ([a742a81](https://github.com/free-id/core/commit/a742a816a28b27b070f467743fbcbcd2ed5a7531))

## [2.2.7](https://github.com/free-id/core/releases/tag/2.2.7) - 2022-05-11 04:26:53

**Full Changelog**: https://github.com/free-id/core/compare/2.2.6...2.2.7

### Bug Fixes

- main:
  - the base parser is now an abstract class ([48336e7](https://github.com/free-id/core/commit/48336e744eab5b45bf884e9a368f5f607e0c36eb))

### Refactor

- main:
  - exceptions refactoring ([29d9068](https://github.com/free-id/core/commit/29d9068e03df5503912f3b4a8c128354597458f6))
  - __construct method update ([c4c73a5](https://github.com/free-id/core/commit/c4c73a5cee9783af2609b4012b4a076800fe132b))
  - code refactoring ([cd74b9e](https://github.com/free-id/core/commit/cd74b9edfd035181018735aa396efb58046317f7))

## [2.2.6](https://github.com/free-id/core/releases/tag/2.2.6) - 2022-05-10 14:56:22

**Full Changelog**: https://github.com/free-id/core/compare/2.2.5...2.2.6

### Feature

- main:
  - added possibility to specify the port for mysql and pgsql parsers ([e82d119](https://github.com/free-id/core/commit/e82d119f973afef94516e03877ef4b79c2643ca7))
  - adding pgsql parser ([e0d8da8](https://github.com/free-id/core/commit/e0d8da8bf71c3dfbca9e2a9b4fc76dc6f11227f4))

### Bug Fixes

- main:
  - update phpunit.xml.dist ([5561f4f](https://github.com/free-id/core/commit/5561f4f875c13e6c9d9d584c23ce990bcc3fedb0))

### Documentation

- main:
  - update wiki url ([47f5293](https://github.com/free-id/core/commit/47f5293f83bd591dd6aee95f754bdb4ef7f80854))
  - adding wiki url ([aca20cd](https://github.com/free-id/core/commit/aca20cd95bb0c7f19f844aa7ccb6902837bc0fba))
  - adding pgsql parser documentation ([ffe96c2](https://github.com/free-id/core/commit/ffe96c2c5d6e79a426681248b3d56a25070ff8aa))

## [2.2.5](https://github.com/free-id/core/releases/tag/2.2.5) - 2022-05-10 06:08:14

**Full Changelog**: https://github.com/free-id/core/compare/2.2.4...2.2.5

### Bug Fixes

- main:
  - mini code & docs fixes ([96e7012](https://github.com/free-id/core/commit/96e7012225b17601f7f1409250ea75664c7e8ac1))

### Documentation

- main:
  - update readme ([f278308](https://github.com/free-id/core/commit/f2783087987e0f2b7d35bbaece30729c2d212ae8))
  - update readme ([43c8fb2](https://github.com/free-id/core/commit/43c8fb22a254aaaf2a81f8521d69f82fc7d74b02))

### Refactor

- main:
  - refactor database parsers ([eba324f](https://github.com/free-id/core/commit/eba324f6a09af766e84eddb61644ef8e4f6bf2a8))

## [2.2.4](https://github.com/free-id/core/releases/tag/2.2.4) - 2022-05-09 11:32:32

**Full Changelog**: https://github.com/free-id/core/compare/2.2.3...2.2.4

### Refactor

- main:
  - update database parsers ([ac71379](https://github.com/free-id/core/commit/ac7137967e3f1710d0b579aa1a5980a43fb21eb7))
  - renaming params ([9de2023](https://github.com/free-id/core/commit/9de2023c2e5d5af1a862ad84963c54882f8ec4af))

## [2.2.3](https://github.com/free-id/core/releases/tag/2.2.3) - 2022-05-09 05:16:27

**Full Changelog**: https://github.com/free-id/core/compare/2.2.2...2.2.3

### Feature

- main:
  - adding sqlite parser ([0127ac5](https://github.com/free-id/core/commit/0127ac580d9b4c83c819447b14d5e5af8d58077b))

### Bug Fixes

- main:
  - rename contract ([fa2a10c](https://github.com/free-id/core/commit/fa2a10cc2183f66e7bab33fe31af067568a06067))
  - update examples ([5439bdf](https://github.com/free-id/core/commit/5439bdf44fafc31b29f2d246f5c10382951920eb))

### Refactor

- main:
  - update database parsers ([471c54d](https://github.com/free-id/core/commit/471c54d8178c12fd9a290b5def60d951e31b3c4e))
  - update database parsers ([6725dbe](https://github.com/free-id/core/commit/6725dbe1b7234df9ceaf4b6f0319feef1a2d4340))

## [2.2.1](https://github.com/free-id/core/releases/tag/2.2.1) - 2022-05-09 02:00:10

**Full Changelog**: https://github.com/free-id/core/compare/2.2.0...2.2.1

### Bug Fixes

- main:
  - adding exception throw to mysql parser ([116e2d7](https://github.com/free-id/core/commit/116e2d7dc242f4ee93f86ba8b628d4c402b079b0))

## [2.2.0](https://github.com/free-id/core/releases/tag/2.2.0) - 2022-05-08 17:54:25

**Full Changelog**: https://github.com/free-id/core/compare/2.1.0...2.2.0

### Feature

- main:
  - adding ElementsNotFoundException ([9364f5f](https://github.com/free-id/core/commit/9364f5f601245d5923f64e659b2bb66a62ed7e23))

### Bug Fixes

- main:
  - mini fixes ([c4dfd6b](https://github.com/free-id/core/commit/c4dfd6b4f922496d5e783744d077ce60d3c1d7c6))
  - the scope of the traversing function has been changed ([1455e2c](https://github.com/free-id/core/commit/1455e2c9abf719d31842eb7f4e18402130b24116))
  - update tests workflow ([c0bbfdc](https://github.com/free-id/core/commit/c0bbfdc636cf2c2a6d9fb00fcfc798505df0591d))

### Refactor

- main:
  - code refactoring ([056ea4a](https://github.com/free-id/core/commit/056ea4a981028f98ee0d1e76d2e2946d8366bd3a))
  - code refactoring ([11b81de](https://github.com/free-id/core/commit/11b81ded0a3c7e78242282a337933cb791f9db15))

## [2.1.0](https://github.com/free-id/core/releases/tag/2.1.0) - 2022-05-06 05:56:55

**Full Changelog**: https://github.com/free-id/core/compare/2.0.0...2.1.0

### Feature

- main:
  - adding MySQL search functionality ([3f95153](https://github.com/free-id/core/commit/3f951535e2e8ace777a610415068c94f1fc0b01c))

### Bug Fixes

- main:
  - update php version ([691f050](https://github.com/free-id/core/commit/691f0507c0c5ad64efda291f5f500ac781c83c99))
  - update parsers ([1b18828](https://github.com/free-id/core/commit/1b18828146b4ff800118395b14534593f356d867))

### Documentation

- main:
  - update readme ([84f9a3f](https://github.com/free-id/core/commit/84f9a3f88da3c54189a81a91b2bf689d0232a474))
  - adding animations for docs ([9fa6880](https://github.com/free-id/core/commit/9fa68800ab06197c3221ec4f88dbb459a74f30a1))
  - update readme.md ([c03e14a](https://github.com/free-id/core/commit/c03e14ada733b097710867aa2ae1e6080ae94ced))
  - update documentation ([d00db85](https://github.com/free-id/core/commit/d00db85abdccb583df7c2c59ae5c82e5ef854284))

### Refactor

- main:
  - update parsers ([9727687](https://github.com/free-id/core/commit/9727687cb5758cea344500e456c84f9d538212bc))
  - move traversing method to base parser ([990db9a](https://github.com/free-id/core/commit/990db9a191c4c0886ee5d19fcb95079584c1243b))

## [2.0.0](https://github.com/free-id/core/releases/tag/2.0.0) - 2022-05-05 07:46:15

Second release! 🔥

**Full Changelog**: https://github.com/free-id/core/compare/1.0.0...2.0.0

### Feature

- main:
  - adding json search functionality ([9e83ef6](https://github.com/free-id/core/commit/9e83ef6efb051e9ceb74b6954b84b8e0a56e77de))

### Documentation

- main:
  - update README.md ([770883f](https://github.com/free-id/core/commit/770883febe99770a79142c30c1695108e01226e8))

## [1.0.0](https://github.com/free-id/core/releases/tag/1.0.0) - 2022-05-05 05:09:34

First release 💥

\* *This CHANGELOG was automatically generated by [auto-generate-changelog](https://github.com/BobAnkh/auto-generate-changelog)*

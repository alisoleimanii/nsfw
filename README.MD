
# NSFW DETECTOR

NSFW (Not Safe for Work) Detector actually is a python script but its integrated with php


## Installation

### Python Installation

```bash
    pip install --upgrade TensorFlow
    pip install nsfw-detector
```

### PHP Installation

```bash
    composer require alisoleimani/nsfw-detector
```


## Usage/Examples

### Basic Usage
```php
$filePath = "path-to-file/file.png";
$data = NSFW::predict($filePath);

// data will be like 
// {'drawings': 0.0024894224479794502, 'hentai': 0.0009175422019325197, 'neutral': 0.9905469417572021, 'porn': 0.00509273586794734, 'sexy': 0.0009534107521176338}
// The higher these values, the more likely the photo is to be unsafe
```

#### Dont Panic! You can use detect method for a boolean value then say image is safe or not

```php
$filePath = "path-to-file/file.png";
$sitation = NSFW::detect($filePath);

// if $sitation is true it means image is not safe and if its false image will be secure 
```





## Authors

- [Aliakbar Soleimani](https://www.github.com/alisoleimanii)


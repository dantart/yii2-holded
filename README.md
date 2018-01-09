# yii2-holded

Yii Framework extension for https://www.holded.com

## Installation

Install of macklus/yii2-holded consists of two steps:

### Step 1: Install through composer

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist macklus/yii2-holded "*"
```

or add

```
"macklus/yii2-holded": "~1.0.4"
```

to the require section of your `composer.json` file.

### Step 2: run migrations

You need to install required tables, by running, from your framework directory:

```
php yii migrate/up --migrationPath=@vendor/macklus/yii2-holded/migrations
```

## Configuration

Add in your web.php config file:

```
'holded' => [
    'class' => 'macklus\holded\Holded',
    'apikey' => 'INSERT_HERE_YOUR_API_KEY',
    'curl_debug' => false,
],
```

## Usage

Yo can call any of holded component functions by calling it directly, like:

```
Yii::$app->holded->createwaybill($somedata)
```

You can see file to see how function works (this is a pending task)
